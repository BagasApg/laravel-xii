<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use function PHPUnit\Framework\fileExists;

class ProjectsController extends Controller
{

    public function __construct(){
        $this->middleware(['auth', 'role:admin'])->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all('id', 'nama');
        return view('projects.projects', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $siswa = Siswa::find($id);
        return view('projects.projects-create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            "project_name" => "required|min:3|max:20",
            "project_date" => "required",
            "photo" => "required|mimes:png,jpg,jpeg"
        ]);

        $file = $request->file('photo');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move('storage/', $filename);
        // dd([$request, $filename]);
        $project = new Project();
        $project->siswa_id = $request->id;
        $project->project_name = $request->project_name;
        $project->project_date = $request->project_date;
        $project->photo = $filename;
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Siswa::find($id)->project()->get();
        return view('projects.projects-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return view('projects.projects-edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->photo);
        $photo = $request->photo;
        $project = Project::find($id);
        if (is_null($request->photo)) {
            $photo = $project->photo;
        }

        // dd($photo);

        $request->validate([
            'project_name' => 'required|min:3|max:20',
            'project_date' => 'required',
            'photo' => 'mimes:png,jpg,jpeg'
        ]);

        // $photo->validate('required');

        if ($request->hasFile('photo')) {
            if (isset($project->photo)) {
                $file_path = 'storage/' . $project->photo;
                unlink($file_path);
            }

            $file = $request->file('photo');
            $fileName = time() . '-' . $file->getClientOriginalName();

            $file->move('storage/', $fileName);

            $project->photo = $fileName;
        }


        $project->project_name = $request->project_name;
        $project->project_date = $request->project_date;
        $project->save();
        return redirect()->route('projects.index')->with('project', $project->project_name . " successfully edited!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        $file_path = 'storage/' . $project->photo;

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        $project->delete();
        return redirect()->route('projects.index')->with('project', $project->project_name . " successfully deleted!");
    }
}
