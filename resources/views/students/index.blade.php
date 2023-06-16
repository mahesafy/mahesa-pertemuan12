@extends('students.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Mahesa Ramadan 22110347&emsp;</h2>
            </div>
            <a href="{{route('logout')}}" class="btn btn-danger" >
                <span class="logout">
                    logout
                    </span>
                Logout
            </a>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('students.create') }}"><span class="add">
                    add
                </span><b> Create New student</b></a>
            </div>
        </div>
    </div><br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
           <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
        </div>
    @endif
   
    <table class="table table-hover table-bordered">
        <thead style="background-color: rgb(81, 181, 240)">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Kelas</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->kelas }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" onclick=show("{{$student->id}}")>
                        <span class="material-iconss">
                        visibility
                        </span><b style="color:white;">Show</b></a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">
                        <span class="material-icons">
                            edit_note
                            </span>
                        <b>Edit</b></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><span class="delete">
                        delete
                        </span><b>Delete</b></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>


    
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Show Data</h5>
            </div>
            <div class="modal-body">
              Nama : <div id="nama"></div><br>
              Kelas: <div id="kelas"></div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>    
@endsection