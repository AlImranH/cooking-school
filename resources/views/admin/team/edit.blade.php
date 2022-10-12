@extends('layouts.dashboard')
@section('content')
<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Team</h1>
    <a href="{{ route('team.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Update Team
            </div>
            <div class="card-body">
                <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name" maxlength="255" value="{{ $team->name }}">
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" id="designation" placeholder="Enter designation" maxlength="255" value="{{ $team->designation }}">
                        @error('designation')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="url" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="facebook" placeholder="Enter facebook" value="{{ $team->facebook }}">
                        @error('facebook')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="url" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter" placeholder="Enter twitter" value="{{ $team->twitter }}">
                        @error('twitter')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="google_plus">Google Plus</label>
                        <input type="url" name="google_plus" class="form-control @error('google_plus') is-invalid @enderror" id="google_plus" placeholder="Enter google_plus" maxlength="255" value="{{ $team->google_plus }}">
                        @error('google_plus')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="{{ Storage::url($team->image) }}" alt="{{ $team->name }}" class="my-1">
                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                        <small id="image" class="form-text text-muted">image dimension: 261X254</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection