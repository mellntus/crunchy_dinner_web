<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | CrunchyDinner</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/admin/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet">

    <script src="/js/jquery-3.6.0.js"></script>
</head>
<body>
    
    <div class="row justify-content-center mx-0" id="login-admin">
        <div class="col-md-5">
      
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
      
          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
      
          <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center"><strong>Login</strong></h1>
              <form action="/login" method="POST">
                @csrf
            
                <div class="form-floating">
                  <input type="email" name="email" class="form-control " 
                  id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                  <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
      
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                
              </form>
            </main>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>