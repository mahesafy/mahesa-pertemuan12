@extends('students.layout')
  
@section('content')

<div class="card" style="width:500px; margin:10px 10px 10px 370px;">
    <div class="card-header">
        Add New Student
    </div>
    <div class="card-body">   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('students.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                <input class="form-control" name="kelas" placeholder="Kelas"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Save</button>
            <a class="btn btn-danger" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
   
</form>
    </div>
</div>
@endsection