
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

h2 
{
font-size :100px;
font-family: Arial;  
color: black;
}
p
{
font-family: Courier;
font-size:40px

}
h6
{
  font-size:30px;
}


</style>

<body>




@section('content')
<div class="text-bg-secondary p-3">
<a href="{{ url ('table') }} " class="btn btn-dark">Kembali</a>
  <div class="container">

  

 
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <h2><td>{{$pengaduan->id_pengaduan}}</td><h2>
        
      <h6><td>{{$pengaduan->tgl_pengaduan}}</td><br><h6>
      <td>{{$pengaduan->nik}}</td><br>
      
      <p><td>"{{$pengaduan->isi_laporan}}</td><br><p>
      <td>{{$pengaduan->foto}}</td>
      
      <td>
        
      </td>
   
    </tr> @endforeach
  </tbody>
  

  


  

    
    
</nav>
</body>
</html>
