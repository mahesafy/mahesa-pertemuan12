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
                <button class="btn btn-success" onclick='$("#create").modal("show")'><span class="add">
                    add
                </span><b> Create New student</b></button>
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
    
                    <a class="btn btn-primary" onclick=edit("{{$student->id}}")>
                        <span class="material-icons">
                            edit_note
                            </span>
                        <b>Edit</b></a>
      
                        <a class="btn btn-danger" onclick=deletes("{{$student->id}}")>
                            <span class="material-icons">
                                delete
                                </span>
                            <b>Delete</b></a>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="$('#exampleModal').modal('hide')">Close</button>
                  </div>
            </div>
          </div>
        </div>
      </div>    


      <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                  
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input required type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kelas:</strong>
                                <input required class="form-control" name="kelas" placeholder="Kelas"></input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a class="btn btn-danger" onclick="$('#create').modal('hide')"> Back</a>
                        </div>
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>  

      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            </div>
            <div class="modal-body">
                <form id="form-edit" method="POST">
                    @csrf
                    @method('PUT')
               
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name"  class="edit-nama form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kelas:</strong>
                                <input class="edit-kelas form-control" name="kelas" placeholder="Kelas">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                          <button type="submit" class="btn btn-success">Save</button>
                          <a class="btn btn-danger" onclick="$('#edit').modal('hide')"> Back</a>
                        </div>
                    </div>
               
                </form>
            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                  </div>
            </div>
          </div>
        </div>
      </div>   

      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            </div>
            <div class="modal-body">
Apakah Kamu ingin menghapus <b class="delete-nama"> </b>?<br><br>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <form id="delete-form" method="POST">
                        @csrf
                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><b>Ya, Hapus</b></button>
                                        <button type="button" class="btn btn-secondary" onclick="$('#delete').modal('hide')">Tidak</button>
                                        </form>
                  </div>
            </div>
          </div>
        </div>
      </div>    
@endsection