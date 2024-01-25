@extends('layout.main')
@section('content')
<h3 style="text-align:center;">Data Siswa</h3>
<table class="table" style="text-align:center;">
    <tr >
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alasan</th>
        <th scope="col">Jam Keluar</th>
        <th scope="col" colspan=2 >Aksi</th>
    </tr>
    @foreach($siswa as $s)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$s->Nama}}</td>
        <td>{{$s->Kelas}}</td>
        <td>{{$s->Jurusan}}</td>
        <td>{{$s->Jenis_kelamin}}</td>
        <td>{{$s->Alasan}}</td>
        <td>{{$s->Jam_keluar}}</td>
        <td>
<a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete{{$s->id}}"><i class="bi bi-trash2"></i></a>
<div class="modal fade" id="delete{{$s->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="/siswa/{{$s->id}}" method="POST">
              @csrf
              @method('delete')
              Yakin Ingin Menghapus Data {{$s->Nama}}?
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary"  type="submit" value="Delete">Delete</button>
      </div>
      </form>
        </div>
    </div>
  </div>
</div>
 <button class="btn btn-warning"  href="#" data-bs-toggle="modal" data-bs-target="#edit{{$s->id}}"><i class="bi bi-pencil-square"></i></button>
<div class="modal fade" id="edit{{$s->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="/siswa/{{$s->id}}" method="POST">
    @method('put')
    @csrf
<div class="row" >
    <div class="col-md-6" >
        <div class="mb-3"> 
            <label >Nama <span class="text-danger"></span></label>
            <input type="text" name="Nama" value="{{$s->Nama}}">
        </div>
        <div class="mb-3"> 
            <label >Kelas<span class="text-danger"></span></label>
            <select name="Kelas">
            <option value="" ></option>
            <option value="X" @if ($s -> Kelas == "X") selected @endif >X</option>
            <option value="XI" @if ($s -> Kelas == "XI") selected @endif >XI</option>
            <option value="XII" @if ($s -> Kelas == "XII") selected @endif >XII</option>
            </select>
        </div>
        <div class="mb-3">
            <label >Jurusan<span class="text-danger"></span></label>
            <select name="Jurusan">
            <option value=""></option>
            <option value="RPL" @if ($s -> Jurusan == "RPL") selected @endif >RPL</option>
            <option value="ORACLE" @if ($s -> Jurusan == "ORACLE") selected @endif >ORACLE</option>
            <option value="TKJ" @if ($s -> Jurusan == "TKJ") selected @endif >TKJ</option>
            <option value="AXIO" @if ($s -> Jurusan == "AXIO") selected @endif >AXIO</option>
            <option value="PM" @if ($s -> Jurusan == "PM") selected @endif >PM</option>
            <option value="ATPH" @if ($s -> Jurusan == "ATPH") selected @endif >ATPH</option>
            <option value="KIMIA" @if ($s -> Jurusan == "KIMIA") selected @endif >KIMIA</option>
            <option value="TEI" @if ($s -> Jurusan == "TEI") selected @endif >TEI</option>
            </select> 
        </div>
        <div class="mb-3"> 
            <label >Jenis Kelamin<span class="text-danger"></span></label>
            <select name="Jenis_kelamin">
                <option value=""></option>
                <option value="L" @if ($s -> Jenis_kelamin == "L") selected @endif >Laki - Laki</option>
                <option value="P" @if ($s -> Jenis_kelamin == "P") selected @endif >Perempuan</option>
                </select>
        </div>  
        <div class="mb-3"> 
                <label >Alasan<span class="text-danger"></span></label>
                <input type="text" name="Alasan"  value="{{$s->Alasan}}">
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
        <form action="/siswa/store" method="POST">
        @csrf
            <div class="mb-3">    
                <label >Nama Siswa<span class="text-danger"></span></label>
                <input class="form-control"  type="text" name="Nama">
     
            </div>
            <div class="mb-3">
                <label >Kelas<span class="text-danger"></span></label>
                <select  class="form-control" name="Kelas">
                <option value=""></option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
                </select>
            
                <label >Jurusan<span class="text-danger"></span></label>
                <select  class="form-control" name="Jurusan">
                <option value=""></option>
                <option value="RPL">RPL</option>
                <option value="ORACLE">ORACLE</option>
                <option value="TKJ">TKJ</option>
                <option value="AXIO">AXIO</option>
                <option value="PM">PM</option>
                <option value="ATPH">ATPH</option>
                <option value="KIMIA">KIMIA</option>
                <option value="TEI">TEI</option>
                </select>
          
            </div>
            <div class="mb-3">        
                <label >Jenis Kelamin<span class="text-danger"></span></label>
                <select  class="form-control" name="Jenis_kelamin">
                <option value=""></option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">   
                <label >Alasan<span class="text-danger"></span></label>
                <input  class="form-control" type="text" name="Alasan">
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

<table class="table" style="text-align:center;">
    <tr >
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Jam Masuk</th>
        <th scope="col"  >Aksi</th>
    </tr>
    @foreach($siswa as $s)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$s->Nama}}</td>
        <td>{{$s->Kelas}}</td>
        <td>{{$s->Jurusan}}</td>
        <td>{{$s->Jam_Masuk}}</td>
        <td>
<a  class="btn btn-dark" href="#" data-bs-toggle="modal" data-bs-target="#input{{$s->id}}"  ><i class="bi bi-alarm-fill"></i></a>
<div class="modal fade" id="input{{$s->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"> Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/siswa/store2" method="POST" >
            @csrf
             Yakin ingin mengisi waktu {{$s->Nama}} ?
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" onclick="{{$s -> Jam_Masuk}}" type="submit" value="save" name="submit" >Isi</button>
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

@endsection