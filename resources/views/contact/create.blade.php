@extends('students.layout')
@section('content')
    <div class="card" style="width:500px; margin:10px 10px 10px 370px;">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">

            <form action="{{ route('register') }}" method="post">
            @csrf
            <label>First Name</label>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control"><br>
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success">
            <a href="/"><input type="button" class="btn btn-danger" value="Back"></a>
            </form>
        </div>
    </div>
@endsection