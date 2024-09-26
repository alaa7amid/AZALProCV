@extends('backend.master')

@section('content')


@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="col-md-6 mb-4">
    <div class="card shadow">
      <div class="card-body">
        <div class="form-group mb-3">
          <label for="example-textarea">Text area</label>
          <textarea class="form-control" id="example-textarea" rows="4"></textarea>
        </div>
      </div> <!-- /.card-body -->
    </div> <!-- /.card -->
  </div> <!-- /.col -->

@endsection