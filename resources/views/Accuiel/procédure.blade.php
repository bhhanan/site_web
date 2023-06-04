<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','les procédures de Létat civil')</title>
</head>
<style>
    .card{
        margin-bottom: 3px;
        margin: 10px;
    }
    h5{
        color: #c99c33;
        margin: 14px;
        margin-left: 20px;
        font-size: 20px;
    }
    .item .card-body h6{
        color: #3d5654;
    }
</style>
<body>
   @include('Accuiel.css')
   @include('Accuiel.sidbar')
   @include('Accuiel.nav')
   @include('Accuiel.Guide')

   <div class="main_container">
      <div class="content">
            <div class="item">
             
            <div class="card activ">
           <div class="card-body">
           Dispositions Communes aux actes de Naissances et de Décès 
              </div>
       </div>

       <div class="card activ">
           <div class="card-body">
           L’acte de naissance
              </div>
       </div>

       <div class="card activ">
           <div class="card-body">
           Le livret de famille 
              </div>
       </div>

       <div class="card activ">
           <div class="card-body">
           L’acte de décès
              </div>
       </div>
       <div class="card activ">
           <div class="card-body">
           La déclaration par voie judiciaire (Les jugements déclaratifs) 
              </div>
       </div>
       <div class="card activ">
           <div class="card-body">
           Les copies des actes de l’état civil et le certificat de concordance 
              </div>
       </div>

       <div class="card" >
          <div class="card-header">
            L’attestation de concordance 
                   </div>
       </div>
        <h5>Le contexte de sa création: </h5>
        <ul class="card-body text-success">
        <h6>Cette attestation a été créée en 1978 suite au protocole 
            franco-Marocain, afin de régulariser les situations sociales 
            des travailleurs marocains en France vis à vis de la caisse de
             sécurité sociale, qui étaient souvent compromises à cause des 
             contradictions des mentions des documents d’identification présentées 
             par une même personne notamment en ce qui concerne les prénoms, noms, 
             date et lieu de naissance, carte de travail, et documents de l’état civil. </h6>
        <br>
        <h6 class="para">L’attestation de concordance est divisée en deux parties: </h6>
        <br>
        <h6 class="para"> La première partie indique tous les renseignements consignés dans les documents en possession de l’intéressé (passeport, carte de résidence, carte de travail).Elle est remplie par les soins de l’autorité locale. </h6>
        <br>
        <h6 class="para">La deuxième partie doit reproduire les renseignements extraits du registre de l’état civil.
         Seul l’officier de l’état civil du lieu de résidence est habilité à remplir la deuxième partie de l’attestation. Celle-ci doit être envoyée aussitôt au consul marocain qui l’a demandé pour la remettre aux mains propre de l’intéressé. </h6>
        <br>
        <h6 class="para">L’attestation de concordance doit être rédigée en arabe et en caractères latins. Les deux versions doivent être signées conjointement par l’officier de l’état civil, l’autorité locale et le consul du lieu de résidence de l’intéressé. </h6>
        <br>
        <h6 class="para">En cas de besoin, l’attestation de concordance peut être délivrée à l’intérieur du Maroc.
        Les copies des actes de l’état civil et la fiche individuelle de l’état civil ne sont plus valables à l’expiration d’une durée de 3 mois à compter de la date de leur délivrance. </h6>
        </ul>
 </div>
           
          
       
</body>
</html>