<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','Service')</title>
</head>
@include('Accuiel.css')
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .wrap{
        font-family: 'raleway';
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #fafafa;
        margin-top: 20px;
    }
    .wrap h1{
        font-size: 3em;
        margin: 25px 0;
        text-align: center;
        font-weight: 500;
        color:#c99c33;
    }
    .content-box{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        width: 1000px;
        margin-top: 20px;
        cursor: pointer;
    }
    .card{
        min-height: 220px;
        width: 320px;
        padding: 30px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: #fff;
        margin: 10px 4px;
        box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }
    .card h2{
        margin-bottom: 12px;
        font-weight: 400;
        text-align: center;
        color: #F27121;
    }
    .card i{
        font-size: 35px;
        color:#c99c33;
    }
    .card p{
        color: #6c757d;
        text-align: center;
    }
    .card:hover{
        background: #000;
        color: #fff;
        cursor: pointer;
    }
</style>
<body>
   @include('Accuiel.nav')
   <div class="wrap">
    <h1>Our Services</h1>
    <div class="content-box">
        <div class="card">
        <i class="fa-regular fa-face-kiss-beam"></i>
           
            <p>Demander une copie d'acte de naissance</p>
        </div>

        <div class="card">
        <i class="fa-solid fa-child-dress"></i>
            
            <p>Demande de pré-déclaration de naissance</p>
        </div>
        <div class="card">
              <i class="fa-solid fa-children"></i>
           
            <p> Demande de consignation de la mention de mariage</p>
        </div>
        <div class="card">
        <i class="fa-solid fa-microscope"></i>
            <p>Demande de consignation de la mention de divorce</p>
        </div>
        <div class="card">
        <i class="fa-brands fa-jenkins"></i>
            
            <p> Demande de pré-déclaration de décès</p>
        </div>
        <div class="card">
        <i class="fa-sharp fa-solid fa-file-lines"></i>
           
            <p> Demande de livret famille</p>
        </div>
        
    </div>
</div>
   @include('Accuiel.footer')
</body>
</html>