@extends('layouts.app')

@section('content')
<style>
.buat
{ 
    font-size: 30px;
    text-decoration: none;
    color: black;
    font-family: fantasy;
    text-align: left;
}
h1{
  font-size: 30px;
    text-decoration: none;
    color: black;
    font-family: fantasy;
    text-align: center;

}
body
{
    background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;

}


</style>

<body>




@section('content')
<div class="text-bg-secondary p-3">
    <a class="buat" href="{{ ('isi_laporan') }} ">Buat</a>
    <h1>Rekap Laporan Anda</h1>
  <div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tanggal Kejadian</th>
    
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
    
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
     
      <td style="max-width:500px;">{{$pengaduan->isi_laporan}}</td>
      <td><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="100px"/></td>
   
      <td>
        
        <a href="hapus_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
        <a href="detail_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-info">Detail</button></a>
        <a href="update_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-success">Update</button></a>
        <a></a>
      </td>
   
    </tr> @endforeach
  </tbody>
</table>
  <div class="container">


  <a href="{{ url ('home') }} " class="btn btn-dark">Kembali</a>

  </div>

    
    
</nav>
</body>
</html>
@endsection('content')