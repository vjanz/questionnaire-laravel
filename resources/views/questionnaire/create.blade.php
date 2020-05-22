@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <form action="/questionnaires" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Write Title">
                            @error('question')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Write purpose">
                            <small id="purposeHelp" class="form-text text-muted">Purpose</small>
                            @error('purpose')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                          </div>
                          <button type="submit" class="btn btn-primary">Create questionnaire</button>
                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
