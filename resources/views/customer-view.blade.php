<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="css/style.css">
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
<div class="container">
  <a href="{{route('customer.create')}}">
    <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
  </a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $customer)
        <tr>
   
          <td>{{$customer->name}}</td>
          <td>{{$customer->email}}</td>
          <td>{{$customer->address}}</td>
          <td> 
          <a href="{{url('/customer/delete/')}}/{{ $customer->id}}"> 
          <button class="btn btn-danger">Delete </button>
          </a> 
          <a href="{{url('/customer/edit/')}}/{{$customer->id}}"> 
          <button class="btn btn-success">Edit </button>
          </a> 
        </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
</div>


</body>
</html>