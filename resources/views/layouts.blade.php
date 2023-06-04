<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
     @yield('style')
    <title>@yield('title','Commune')</title>
  </head>
  <style>
     .con{
        background: linear-gradient(to right, #141e30, #243b55);
        height:30vh;
        width: 100%;
        box-shadow:4px 4px 60px rgba(0,0,0,.2);
       
    }
    .row{
        display:flex;
        justify-content: space-between;
    }
    .header h2{
        font-size: 3rem;
        color:white;
        font-family: 'Nunito', sans-serif;
        margin-top:-180px;
        margin-left: 450px;
    }
    h1{
        font-size: 1.3rem;
        margin-left: 30px;
         white-space: nowrap;
         color:white;
    }
    .img-fluid{
         display:block;
         font-size:1.3rem;
          width: 10%;
          padding: 10px;
          margin-left: 60px;
    }
    p{
        margin-left:40px;
        color:white;
    }



    .menu{
        box-shadow:4px 4px 60px rgba(0,0,0,.1);
        height:10vh;
        width: 100%;
    }
    .navbar-nav{
        margin-left: 100px;
        font-size:1.2rem;
        font-family: 'Nunito', sans-serif;
        
        
    }
    .nav-item {
        margin-left: 100px;
        margin-bottom:25px ;

    }
    .nav-link{
        color:#000;
    }
    .dropdown-menu{
        background: linear-gradient(to right, #2c3e50, #4ca1af);
        margin-bottom:10px;
        background-size:cover;
        border-radius:10px;
    }
    .dropdown-item{
        color:white;
    }
    .dropdown-item :hover{
        background: linear-gradient(to right, #355c7d, #6c5b7b, #c06c84)
    }

    .nav-link.active{
        
        background: linear-gradient(to right, #2c3e50, #4ca1af);
        border-radius:10px;
        width: 100px;
        text-align:center;


    }
 </style>
  <body>
 
    <div class="con">
     <div class="row">
            <div class="image">
            <img src="image/logo.jpg" class="img-fluid" alt="">
            <h1> Royaume du maroc</h1>
             <p>Ministère de l'intérieur</p>
         </div>
        <div class="header">
       <h2>Commune de Ouaouizerth centre
         de la gestion détat civil</h2>
      </div>
    </div>
    </div>

    <div class="menu">
    <nav class="navbar navbar-expand-lg">
     <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0">

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Naissance
          </a>
               <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="/declaration/naissance">Déclaration</a></li>
                     <li><a class="dropdown-item" href="/impression/naissance">Impréssion</a></li>
               </ul>
            </li>
       

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Décide
          </a>
               <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/declaration/décider">Déclaration</a></li>
                     <li><a class="dropdown-item" href='/impression/décider'>Impréssion</a></li>
             </ul>
            </li>

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Non Enregistrer
          </a>
               <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="déclaration/NonE">Déclaration</a></li>
                     <li><a class="dropdown-item" href="/impression/enregistrer">Impréssion</a></li>
             </ul>
            </li>

            <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/accuiel/Accuiel">Acceuil</a>
          </li>

      
        </ul>
      
    </div>
  </div>
</nav>

    </div>
    @yield('content')
  
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
