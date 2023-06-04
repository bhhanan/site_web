<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','Home')</title>
</head>
   @yield('desgin')
<body>
@include('Accuiel.css')
@include('Accuiel.sidbar')
@include('Accuiel.nav')
@include('Accuiel.Guide')
<div class="main_container">
      <div class="content">
            <div class="item">
                 <h1>@yield('title_page1')</h1>
                <p>
                   @yield('para')
                </p>
                <h4>@yield('h4')</h4>
                <h6>@yield('h6')</h6>
                    <h6>@yield('h5')</h6>
                    </div>
                    <div class="item">
                        <h1> @yield('h1')</h1>
                        <h6>@yield('h2') </h6>
                    </div>

  
</body>
</html>