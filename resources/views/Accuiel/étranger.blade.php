<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','étranger Marocain')
    </title>
    @include('Accuiel.css')
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .wrapp{
        font-family: 'raleway';
        margin-top: 10%;
        padding: 30px;
        width: 1200px;
        border-radius: 10px;
        margin-left: 400px;
        background: #fff;
        margin: 10px 4px;
        box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        }

        .wrapp .icon h1{
            color:#1f4037 ;
            font-weight: 500;
            font-size: 40px;
        }
        .wrapp h2{
            color: #c99c33;
        }
        .wrapp .para{
            font-size: 17px;
           
        }
        .wrapp .hr{
            color: #1f4037;
            height: 10px;
            width: 95%;
        }
        .wrapp h5{
            color:#c99c33;
        }
        .wrapp .list li{
          padding-top: 5px;
           padding: 5px;
           margin: 10px;
           
           flex-direction: column;
           line-height: 1.5;
           justify-content: space-between;
        }
        .wrapp .list li i{
            padding: 5px;
        }
        .wrapp .list i{
            color: #c99c33;
            font-size: 15px;
        }


</style>
<body>
    @include('Accuiel.nav')
    <div class="wrapp">
      <div class="icon">
        <h1>Etrangers au Maroc</h1>
      </div>
      <hr class="hr">
      <h2>​Article 3 de la loi sur l’état civil : </h2>
      <p class="para">Tous les marocains sont obligatoirement soumis au régime d’état 
        civil. Le même régime s’applique aux étrangers en ce qui concerne 
        les naissances et les décès survenant sur le territoire national. </p>
        <h5>Pour la naissance :</h5>
        <h6>l’article 17 du décret pris en application de la loi d’état civil :</h6>
        <ul class="list">
            <li>
            <i class="fa-solid fa-circle-check"></i>
                Les étrangers résidant ou se trouvant sur le territoire national peuvent déclarer les naissances survenues au Royaume.</li>
             <li>
             <i class="fa-solid fa-circle-check"></i>La déclaration de naissance des étrangers est appuyée d’un certificat délivré par un médecin accoucheur, une sage-femme exerçant 
                légalement ou par l’autorité locale attestant le lieu de sa survenance au Royaume.</li>
              <li>
              <i class="fa-solid fa-circle-check"></i>Toutes pièces justifiant l’identité des parents.</li>
            </ul>

            <h5>Pour le décès :</h5>
           <h6>l’article 32 du décret pris en application de la loi d’état civil​ :</h6>
        <ul class="list">
            <li>
            <i class="fa-solid fa-circle-check"></i>
            Les étrangers résidant ou se trouvant sur le territoire national peuvent déclarer les décès survenus au Royaume.</li>
             <li>
             <i class="fa-solid fa-circle-check"></i>La déclaration de décès des étrangers est appuyée d’un certificat 
             de constatation délivré par le médecin, ou l’infirmier relevant de la santé publique ou, à défaut, 
             par un certificat de constatation délivré par le représentant de l’autorité compétente attestant 
             le lieu de sa survenance au Royaume.</li>
              <li>
              <i class="fa-solid fa-circle-check"></i>Toutes pièces justifiant l’identité du défunt.</li>
            </ul>

    </div>
    @include('Accuiel.footer')
</body>
</html>