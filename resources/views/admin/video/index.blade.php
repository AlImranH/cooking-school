
@extends('layouts.dashboard')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Video</h1>
        <a href="{{ route('video.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New Video</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Video List
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Video</th>
                            <th scope="col">Url</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $key => $video)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td><iframe width="100" height="60"
                                  src="{{ $video->url }}">
                                  </iframe></td>
                                <td>{{ $video->url }}</td>
                                <td class="d-flex border-bottom-0">
                                  <a href="{{ route('video.edit', $video->id) }}" class="btn btn-sm btn-warning m-1" title="Edit"><i class="far fa-edit"></i></a>
        
                                  
                                  <form action="{{ route('video.destroy', $video->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger m-1"><i class="far fa-trash-alt"></i></button>
                                  </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection