@extends('students.layout')
@section('content')
    <div class="card" style="width:500px; margin:10px 10px 10px 370px;">
        <div class="card-header">Login Form
        </div>
        <div class="card-body">

            <form action="{{ route('check') }}" method="post">
            @csrf
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control"><br>
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control"><br>
            <input type="submit" value="Login" class="btn btn-success">
            <a href="/daftar"><input type="button" class="btn btn-success" value="Daftar"></a>
            </form>
        </div>
    </div>
@endsection