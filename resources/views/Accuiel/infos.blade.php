<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','infos')</title>
</head>
   @include('Accuiel.css')
   <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .card.activ{
      background:#649173;
      color: #fff;
      font-size: 18px;
    }
    .card{
        margin-top: 30px;
      
    }
    .card-header{
        background: #c99c33;
        color: #fff;
    }
    .card-header.active{
        background: #3d5654;
    }
    .card-body ul li{
        flex-direction : row;
        padding-top: 5px;
        padding: 5px;
        margin: 10px;
    }
    
    .card-body ul li i{
         color: #3d5654;
        font-size: 13px;
    }
    .card-body h6{
      color: #777;
      font-size:15px;
       font-weight:500;
    }

   </style>
<body>
    @include('Accuiel.nav')
<div class="card">
  <div class="card-header active">
      Déclaration de naissance(Cas normal) 
  </div>
  <div class="card-body">
  <div class="card" >
  <div class="card-header">Déclarants</div>
  <div class="card-body">
      <ul>
        <li>
        <i class="fa-solid fa-circle-check"></i>
          Le père ou la mère
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
            Le tuteur testamentaire
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
           Le neveu
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
         Le mandataire
        </li>
      </ul>
  </div>
</div>
<div class="card active" >
  <div class="card-header">Délai réglementaire</div>
  <div class="card-body ">
      <h6>30 jours à compter de la date de la naissance </h6>
  </div>
</div>
<div class="card border mb-3">
  <div class="card-header">Documents Appuyant la déclaration</div>
  <div class="card-body">
  <ul>
        <li>
        <i class="fa-solid fa-circle-check"></i>
          Avis de naissance ou attestation de naissance délivrée par 
          le médecin accoucheur, une sage-femme exerçant légalement 
          ou par l’autorité locale.
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
              Copie conforme de l’acte du mariage (pour les marocains musulmans) 
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
             copie de la CNIE des parents ou du livret de famille 
             ou copie intégrale de naissance des parents.
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
            CNIE du déclarant
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
             Procuration pour le cas du mandataire
        </li>
      </ul>
  </div>
</div>
<div class="card border">
  <div class="card-header">Service compétent</div>
  <div class="card-body ">
     <h6>Bureau d’état civil du lieu de naissance</h6>
  </div>
</div>

<div class="card border ">
  <div class="card-header text-danger bg-white">Remarque</div>
  <div class="card-body ">
  <ul>
        <li>
        <i class="fa-solid fa-circle-check"></i>
        Si le 30eme jour coïncide avec un ou plusieurs jours fériés, la déclaration peut être faite le premier jour ouvrable suivant. 
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
        En cas de dépassement du délai réglementaire, la déclaration de naissance se fait par un jugement déclaratif. 
        </li>
        <li>
        <i class="fa-solid fa-circle-check"></i>
        Le formulaire de pré-déclaration disponible sur l’espace service électronique doit être renseigné minutieusement 
        </li>
      </ul>
  </div>
</div>

</div>

  </div>
  <div class="card activ">
  <div class="card-body">
     Déclaration de naissance (Au cours d’un voyage par voie maritime ou aérien)
  </div>
</div>

<div class="card activ">
  <div class="card-body">
  Déclaration de naissance (Enfant abandonné) 
  </div>
</div>

<div class="card activ">
  <div class="card-body">
    Déclaration de naissance (Enfant de père inconnu)
  </div>
</div>

<div class="card activ">
  <div class="card-body">
  Transcription de la naissance Des Personnes ayant acquis la nationalité Marocaine du côté de la mère en vertu de l’article 6 du code de la nationalité et inscrits au Maroc dans les registres des naissances réservés aux étrangers 
  </div>
</div>
 
<div class="card activ">
  <div class="card-body">
  Transcription de la naissance Des Personnes ayant acquis la nationalité Marocaine du côté de la mère en vertu de l’article 6 du code de la nationalité et inscrits au Maroc dans les registres des naissances après 2003
  </div>
</div>

<div class="card activ">
  <div class="card-body">
  Déclaration de décès (Cas normal)
  </div>
</div>




<div class="card activ">
  <div class="card-body">
  Déclaration de décès survenu dans un hôpital, un établissement sanitaire civil ou militaire, un établissement pénitentiaire ou une maison de correction ou autres 
  </div>
</div>


<div class="card activ">
  <div class="card-body">
  Déclaration de décès Dans des conditions anormales 
  </div>
</div>


<div class="card activ">
  <div class="card-body">
  Déclaration de décès du disparu 
  </div>
</div>


</div>
 @include('Accuiel.footer')
</body>
</html>