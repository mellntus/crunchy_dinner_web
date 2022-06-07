<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} | CrunchyDinner</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- Google Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">

        <link rel="stylesheet" href="/css/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="/css/about.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="/css/menu.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="/css/feedback.css?v=<?php echo time(); ?>">
        <script src="/js/jquery-3.6.0.js"></script>
    </head>
    <body>
        <section id="navbar">
            @include('user.partials.navbar')
        </section>

        <section id="main">
            @yield('container')
        </section>
        
        <section id="footer">
            @include('user.partials.footer')
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>