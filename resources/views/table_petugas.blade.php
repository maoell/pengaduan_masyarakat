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
    body
    {
        background-color: RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;

    }


    </style>

    <body>




    @section('content')
    <div class="text-bg-secondary p-3">
        <a class="buat" href="{{ ('registrasi_petugas') }} ">Buat</a>
    <div class="container">
    <table class="table table-dark table-striped">
    <thead>
        <tr>
       
        <th scope="col">nama_petugas</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">telp</th>
        <th scope="col">level</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($petugas as $petugas)
        <tr>

       
        <td>{{$petugas->nama_petugas}}</td>
        <td>{{$petugas->username}}</td>
        <td>{{$petugas->password}}</td>
        <td>{{$petugas->telp}}</td>
        <td>{{$petugas->level}}</td>
        
    
        </tr> @endforeach
    </tbody>
    </table>
    </div>




    </div>

        
        
    </nav>
    </body>
    </html>
    @endsection('content')