<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
 body{
    background-image:url('images/Bg2.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
 }   
.btn-log{
    background-color:white;
    opacity:80%;
 } 
 .btn-log:hover{
   background-color:white;
   opacity:90%;
 }
 input{
    color:white;
 }
  
</style>
<body>
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card" style="box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;background-color:transparent;backdrop-filter:blur(50px);border-radius:10px">
                <div class="card-header">
                    <h1 class="card-title text-white">Login</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label  for="email" class="form-label text-white">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" style="background-color:white;opacity:40%;font-weight:bold" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control" id="password" style="background-color:white;opacity:40%;font-weight:bold" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-log">Login</button>
                                <hr/>
                                <p style="text-align:center;color:white;">Don't have an a account <a href="{{ url('/register') }}" style="text-decoration:none;color:rgb(144, 238, 144);font-weight:bold;">Register</a></p>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>