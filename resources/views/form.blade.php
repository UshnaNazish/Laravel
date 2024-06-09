<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register/view')}}">Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register')}}">Registration</a>
            </li>
        
        </div>
      </div>
    </nav>
    </div>
    <!-- <form action="{{url('/')}}/register" method="POST"> -->
      <h1 class="text-center">{{$title}}</h1>
    <form action="{{$url}}" method="POST">
      @csrf
      <!-- <pre>
      @php
print_r($errors->all());
      @endphp
</pre> -->
<div class="container">
<x-input type="text" name="name" label="Name:" />
<x-input type="email" name="email" label="Email:" />
<x-input type="text" name="address" label="Address:" />
<x-input type="password" name="password" label="Password:"/>


 
  <button class="btn btn-primary">
Submit
  </button>
</div>
</form>
  </body>
</html>