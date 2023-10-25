
<!DOCTYPE HTML>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="maul/css/bootstrap.min.css">
    </head>
    <style>
      *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
  }
  body{
    height: 100vh;
    background-image: url(gambar/maul.avif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  
  .login{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
  
    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
  }
 
  .login label{
    text-align: left;
    color: #90caf9;
  }
  .login form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #29d4ff;
    color: #fff;
    font-size: 20px;
  }
  .login form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#29d4ff;
    font-size: 18px;
    color: #fafafa;
  }                                              
  .error{
    position:absolute;
    top:15%;
    left:50%;
    transform:translate(-50%, -50%);
    width: 300px;
    border-radius:5px;
    border:2px solid black;
    text-align: center;
    background-color: #ff0000;
    font-size:15px;
    font-style:italic;
    color:white;
    padding:10px;

    

  }
 .login p{
    font-size:30px;
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #29d4ff;
   
  }


    </style>
   
    <body>
       @if (session("error"))
      <div class="error">{{session("error")}}</div>
      @endif
        <div class="login">
          <p>Login Petugas</p>
            <form action="login_petugas" method="POST">
            @method("POST")
                @csrf
                <label>Username</label><br>
                <input type="username" class="form-control" name="username" required><br>
                <label>Password</label><br>
                <input type="password" name="password" required><br>
                <a><button type="submit"> Login</button></a>
                <a link href={{('registrasi_petugas')}}><button type="button"> Gak Punya Akun?</button></a>
            </form>
        </div>     
    </body>
</html>