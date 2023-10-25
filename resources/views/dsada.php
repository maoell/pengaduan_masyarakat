
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href={{asset("/maul/css/bootstrap.min.css")}}>
  <title>Document</title>
</head>


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
    <h1>Detail Pengaduan</h1>
  <div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
   
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->foto}}</td>
      <td>{{$pengaduan->status}}</td>
      <td>
        
      </td>
   
    </tr> @endforeach
  </tbody>
  
</table>
  <div class="container">
  <a href="{{ url ('table') }} " class="btn btn-dark">Kembali</a>

  </div>

    
    
</nav>
</body>
</html>
