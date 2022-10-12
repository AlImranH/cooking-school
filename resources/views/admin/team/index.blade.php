
@extends('layouts.dashboard')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Team</h1>
        <a href="{{ route('team.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New Team</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Team List
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Social Media</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $key => $team)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td><img src="{{ Storage::url($team->image) }}" width="60"></td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->designation }}</td>
                                <td>
                                  <a href="{{ $team->facebook }}" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>

                                  <a href="{{ $team->twitter }}" target="_blank"><i class="fab fa-twitter-square fa-2x text-info"></i></a>

                                  <a href="{{ $team->google_plus }}" target="_blank"><i class="fab fa-google-plus-square fa-2x text-danger"></i></a>
                                </td>
                                <td class="d-flex">
                                  <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm btn-warning m-1" title="Edit"><i class="far fa-edit"></i></a>
        
                                  
                                  <form action="{{ route('team.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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