<h1>Edit Data Guru</h1>

<form action="/guru/{{$guru->id}}" method="POST">
@method('put')
    @csrf
<table >
        <tr>
            <td >NIP</td>
            <td><input type="text" name="NIP" value="{{$guru->NIP}}"></td>
        </tr>
        <tr>
            <td>Nama Guru Piket</td>
            <td><input type="text" name="Nama" value="{{$guru->Nama}}"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="Tanggal" value="{{$guru->Tanggal}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="save" name="submit"></td>
        </tr>
    </table>
</form>
