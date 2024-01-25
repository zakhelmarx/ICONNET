@extends('layout.main2')
@section('content')
<h3 style="text-align:center;">Data Siswa</h3>
  </html><table class="table" style="text-align:center;">
    <tr >
        <th scope="col">#</th>
        <th scope="col">NIP</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal</th>
        <th scope="col" colspan=2 >Aksi</th>
    </tr>
    @foreach($guru as $g)
    <tr>
        <td>{{$g->id}}</td>
        <td>{{$g->NIP}}</td>
        <td>{{$g->Nama}}</td>
        <td>{{$g->Tanggal}}</td>
       <td>
<a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete{{$g->id}}"><i class="bi bi-trash2"></i></a>
<div class="modal fade" id="delete{{$g->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="/guru/{{$g->id}}" method="POST">
              @csrf
              @method('delete')
              Yakin Ingin Menghapus Data {{$g->Nama}}?
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary"  type="submit" value="Delete">Delete</button>
      </div>
      </form>
        </div>
    </div>
  </div>
</div>
 <button class="btn btn-warning"  href="#" data-bs-toggle="modal" data-bs-target="#edit{{$g->id}}"><i class="bi bi-pencil-square"></i></button>
<div class="modal fade" id="edit{{$g->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="/guru/{{$g->id}}" method="POST">
    @method('put')
    @csrf
<div class="row" >
    <div class="col-md-6" >
        <div class="mb-3"> 
            <label >NIP <span class="text-danger"></span></label>
            <input type="text" name="NIP" value="{{$g->NIP}}">
        </div>
        <div class="mb-3"> 
            <label >Nama Guru Piket <span class="text-danger"></span></label>
            <input type="text" name="Nama" value="{{$g->Nama}}">
        </div>
        <div class="mb-3"> 
                <label >Tanggal<span class="text-danger"></span></label>
                <input type="date" name="Tanggal"  value="{{$g->Tanggal}}">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary"  type="submit" name="submit">Ubah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-grid gap-2 col-6 mx-auto">
<a class="btn btn-primary"  href="#" data-bs-toggle="modal" data-bs-target="#tambah" > TAMBAH</a>
</div>
<div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="row" >
    <div class="col-md-6" >
        <form action="/guru/storeg" method="POST">
        @csrf
            <div class="mb-3">    
                <label >NIP<span class="text-danger"></span></label>
                <input class="form-control"  type="text" name="NIP">
     
            </div>
            <div class="mb-3">    
                <label >Nama Guru Piket<span class="text-danger"></span></label>
                <input class="form-control"  type="text" name="nama">
     
            </div>
            <div class="mb-3">   
                <label >Tanggal<span class="text-danger"></span></label>
                <input  class="form-control" type="date" name="Tanggal">
            </div>
    </div>
</div>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit"  name="submit">Input</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection