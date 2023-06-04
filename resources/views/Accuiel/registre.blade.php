<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','les registres de Létat civil')</title>
</head>
<style>
    .lists li {
        flex-direction : row;
        padding-top: 5px;
        padding: 5px;
        margin: 10px;
        color: #fff;
    }
    .lists li i{
        color: #c99c33;
        font-size: 13px;
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
                 <h1> Tenue des registres de l’état civil :  </h1>
                <p>
                Le Ministère de l’Intérieur met régulièrement à la disposition de tous les bureaux de l’état civil à l’intérieur du Royaume des registres avant la fin de chaque année grégorienne en fonction du volume de leurs activités. La dotation des postes diplomatiques et consulaires marocains à l’étranger en registres est assurée par le ministère des affaires étrangères et de la coopération. Il existe deux catégories de registres 
                <br><br> </p>
                <ul class="lists">
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       les registres de naissances.
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       les registres de décès.
                    </li>
                </ul>
                    <p>Ces registres sont tenus en double exemplaires à l’intérieur du Maroc et en trois exemplaires dans les postes diplomatiques et consulaires marocains à l’étranger.</p>
                    <br>
                    <p>Les registres de l’état civil sont soumis avant leur utilisation à l’autorisation du procureur du Roi près de tribunal de 1ère instance compétent qui certifie au début de chaque registre le nombre de ses pages, la nature de ses actes, le bureau de l’état civil qui le tient et l’année pour laquelle il est réservé. Numérote les pages de chaque registre, Appose le Sceau du tribunal sur chaque feuille et revêt de​ sa signature la première et la dernière page du registre. L’ouverture des registres a lieu au début de chaque année grégorienne, ils sont clos le 31 décembre de la même année. </p>
                    </div>
                    <div class="item">
                      <h1>Clôture des registres : </h1>
                      <p>L’officier de l’état civil est tenu avant d’arrêter et de clore les registres, de vérifier si toutes les déclarations reçues ont été consignées et signées. La clôture des registres doit être effectuée à la fin de chaque année immédiatement après le dernier acte, et non pas à la dernière page du registre. Il convient de préciser que lorsqu’un registre est composé de plusieurs tomes, chaque tome doit être clos au fur et à mesure de son achèvement (clôture partielle). Néanmoins une clôture finale doit avoir lieu sur le dernier tome (clôture totale).</p>
                       <p> L’officier de l’état civil dresse ensuite pour chaque exemplaire un tableau récapitulatif classé selon l’ordre alphabétique des noms et en certifie la conformité.</p>
                        <p>Lesdits tableaux sont ensuite classés selon la nature des actes (naissances, décès) et dans l’ordre alphabétique des noms, dans des registres distincts tenus une fois tous les dix ans en deux exemplaires dont l’un est adressé au tribunal compétent.</p>
                          <h1>Contrôle des registres de l’état civil : </h1>
                        <p>En vertu de la loi , l’officier de l’état civil adresse dans le mois qui suit la fin de l’année grégorienne un exemplaire de chaque registre tenu par lui, après l’avoir contrôlé et arrêté, au gouverneur de la préfecture ou de la province afin que l’inspecteur provincial de l’état civil procède à leur contrôle et à l’élaboration d’un rapport circonstancié sur l’état des actes qu’il soumet , accompagné des exemplaires des registres, au procureur du Roi près le tribunal de première instance compétent à raison du lieu. </p>
                          <p> Le procureur du Roi près le tribunal de 1ère instance procède au contrôle des registres , à leur dépôt au tribunal et en dresse procès-verbal dont une copie est transmise au procureur général du Roi près la cour d’appel, celui-ci prend les mesures nécessaires afin d’engager des poursuites à l’encontre des officiers ou agents d’état civil contre lesquels il a été établi, suite au contrôle, qu’ils ont commis des actes sanctionnés par la loi. </p>
                          <p> Le procureur du Roi conserve les exemplaires exempts d’erreurs et renvoi à l’officier de l’état civil sous couvert du gouverneur de la préfecture ou de la province, ceux qui comportent des erreurs ou des irrégularités avec une copie du procès-verbal. </p>
                          <p>L’officier de l’état civil procède alors à la rectification des erreurs indiquées dans le procès-verbal, conserve un exemplaire de chaque catégorie de registre dans le bureau et adresse les autres au procureur du Roi qui , après contrôle, les dépose aux archives du tribunal de 1ère instance compétent </p>
                          <h1> La reconstitution des registres de l’état civil : </h1>
                          <p>Les registres d’état civil perdus ou détériorés doivent être reconstitués en vue de préserver les intérêts des citoyens qui y sont inscrits.</p>
                          <p>La reconstitution des registres a lieu sur la base d’une décision judiciaire rendue par le tribunal compétent. De même, lorsqu’un acte détérioré ne peut être reconstitué, l’intéressé est tenu de présenter une demande au tribunal compétent pour faire prononcer un jugement ordonnant de consigner à nouveau le fait objet de l’acte. </p>
                        </div>

</body>
</html>