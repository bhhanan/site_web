<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','les bureaux de Létat civil')</title>
</head>
<body>
   @include('Accuiel.css')
   @include('Accuiel.sidbar')
   @include('Accuiel.nav')
   @include('Accuiel.Guide')

   <div class="main_container">
      <div class="content">
            <div class="item">
                 <h1>les bureaux centraux </h1>
                <p>
                Leurs sièges sont fixés aux chefs-lieux des communes dans les périmètres géographiques 
                   desquelles ils exercent leurs activités.
                <br>
          Leurs sièges sont fixés aux chefs-lieux des communes dans les périmètres géographiques 
            desquelles ils exercent leurs activités.
            <br>
Le nombre des bureaux centraux, dits aussi principaux, équivaut toujours aux nombres des communes. 
Contrairement aux bureaux subsidiaires dont le nombre est variable en fonction de l’étendue territoriale
 de la commune, du nombre de sa population et des moyens mis à sa disposition. 
                </p>
                <h4>Les bureaux subsidiaires : </h4>
                <h6>
            Sous l’influence de la croissance démographique et de l’augmentation du volume des travaux 
          des bureaux centraux qui n’étaient plus en mesure de satisfaire les besoins des citoyens avec 
        la célérité et la rapidité nécessaire, le recours aux bureaux annexes s’est fait ressentir pour 
         alléger les tâches des bureaux centraux et rapprocher l’administration des citoyens.</h6>
                    <h6>est dans ce sens que le législateur a autorisé les présidents des conseils communaux , 
             officiers d’état civil, à créer des bureaux subsidiaires par arrêtés qui ne prennent 
        effet qu’après approbation expresse ou tacite du Ministre de l’Intérieur ou de la personne 
         qu’il délégue à cet effet. </h6>
                    </div>
                    <div class="item">
                        <h1> Quatre conditions sont, toutefois, à respecter: </h1>
                        <h6>un arrêté du président de la commune dans lequel il fixe les limites géographiques du bureau annexe. 
<br>
le rapport de l’autorité locale;
<br>
la transmission de l’arrêté au ministère de l’intérieur dans un délai ne dépassant pas 15 jours. L’arrêté ne prend effet qu’après approbation expresse du Ministre de l’Intérieur ou de la personne déléguée par lui à cet effet ou  après écoulement de 45 jours à compter de la date à laquelle l’arrêté a été soumis pour approbation;
<br>
L’ouverture du bureau annexe doit obligatoirement coïncider avec le début de l’année grégorienne, qui est la date fixée par la loi pour l’ouverture des registres. De même les anciens registres tenus dans le bureau central ne doivent en aucun cas être transférés au bureau subsidiaire.</h6>
                    </div>

</body>
</html>





