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
                Add Team
            </div>
            <div class="card-body">
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" placeholder="Enter name" maxlength="255">
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" id="designation" aria-describedby="emailHelp" placeholder="Enter designation" maxlength="255">
                        @error('designation')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="url" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="facebook" aria-describedby="emailHelp" placeholder="Enter facebook" maxlength="255">
                        @error('facebook')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="url" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter" aria-describedby="emailHelp" placeholder="Enter twitter" maxlength="255">
                        @error('twitter')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="google_plus">Google Plus</label>
                        <input type="url" name="google_plus" class="form-control @error('google_plus') is-invalid @enderror" id="google_plus" aria-describedby="emailHelp" placeholder="Enter google_plus" maxlength="255">
                        @error('google_plus')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                        <small id="image" class="form-text text-muted">image dimension: 261X254</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection