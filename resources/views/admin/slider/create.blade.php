@extends('layouts.dashboard')
@section('content')
<!-- Page Heading -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Slider</h1>
    <a href="{{ route('slider.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
</div>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Add Slider
            </div>
            <div class="card-body">
                <form action="{{ route('slider.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" placeholder="Enter title" maxlength="255">
                        @error('title')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control @error('title') is-invalid @enderror" id="subtitle" aria-describedby="emailHelp" placeholder="Enter subtitle" maxlength="255">
                        @error('subtitle')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection