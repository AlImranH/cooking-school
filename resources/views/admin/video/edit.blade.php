@extends('layouts.dashboard')
@section('content')
<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Video</h1>
    <a href="{{ route('video.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Update Video
            </div>
            <div class="card-body">
                <form action="{{ route('video.update', $video->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="url" name="url" class="form-control @error('url') is-invalid @enderror" id="url" aria-describedby="emailHelp" placeholder="Enter url" maxlength="255">
                        @error('url')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <iframe width="560" height="315" src="{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection