
@if ($data->isEmpty())
    <h5>Siswa belum memiliki project.</h5>
@else
@endif
@foreach ($data as $item)
    <div class="card m-0 mb-4">
        <div class="card-header">
            <div class="title d-flex justify-content-between">

                <h5 class=" m-0">{{ $item->project_name }}</h5>
                <p class=" m-0">{{ $item->project_date }}</p>
            </div>
        </div>
        <div class="card-body">
            <img class="w-100" src="storage/{{ $item->photo }}" alt="{{ $item->photo }}">
        </div>
        <div class="card-footer d-flex justify-content-end gap-2 pt-0 text-white">
            <a href="{{ route('projects.edit', ['project' => $item->id]) }}" title="Edit {{ $item->project_name }}" class="btn btn-primary"><i class="bx bxs-edit"></i></a>
            <form action="{{ route('projects.destroy', ['project' => $item->id]) }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" title="Delete {{ $item->project_name }}" class="btn btn-danger"><i class="bx bxs-trash"></i></button>
            </form>
        </div>
    </div>
@endforeach
