<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','les officier de Létat civil')</title>
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
    h2{
        color: #45a247;
        font-size: 18px;
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
                 <h1>la qualité d’officier d’état civil :  </h1>
                <p>
                La qualité d’officier d’état civil est attribuée aux présidents des conseils communaux.
                 L’article 102 de la loi organique n° 113-14 du 7 juillet 2015 stipule dans ce sens que 
                 « le président du conseil communal est officier d’état civil. Il peut déléguer l’exercice 
                 de cette fonction conformément aux dispositions de la loi relative à l’état civil » 
                <br>
                Dans les villes érigées en arrondissements, la fonction d’officier d’état civil est attribuée 
                conformément à l’article 237 au président du conseil d’arrondissement et à ses vice- présidents
                 sur délégation du président. Les attributions d’officier d’état civil reconnues aux présidents 
                 des communes sont exceptionnellement exercées par les pachas des communes des Méchouars. 
      
                </p>
                <h1>Les principales fonctions des officiers de l’état civil : </h1>
                <h6>Pour le citoyen: </h6>
                <ul class="lists">
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                        La réception des déclarations des naissances et décès qu’il  consigne dans des registres tenus spécialement à cet effet;
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       L’insertion des mentions de mariage et de divorce en marges des actes de naissances des 2 époux; 
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       La signature des actes et des mentions marginales;
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       La délivrance des copies et extraits d’actes d’état civil (naissance et décès) et des livrets de famille;
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       Le remplissage des bulletins statistiques;
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       La tenue et la conservation des registres;
                    </li>
              
                </ul>
            </div>

                    <div class="item">
                        <p>Vis-à-vis des administrations: </p>
                                <ul class="lists">
                                <li>
                       <i class="fa-solid fa-circle-check"></i>
                       L’envoi des bulletins statistiques aux délégations régionales du Haut-commissariat au plan;
                    </li>
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       L’envoi des listes de personnes majeures décédées comportant leurs noms et 
                       les numéros de leurs actes de décès, les numéros des C.N.I.E et l'adresse 
                       de leur dernier domicile aux autorités compétentes (Commissions administratives des élections
                        , D.G.S.N , caisses de retraites…..) 
                    </li>
    
                    <li>
                       <i class="fa-solid fa-circle-check"></i>
                       L’envoi des listes des déclarations de naissances de l’année écoulée et des listes des enfants 
                       ayant atteints l’âge de 4 ans au 31 décembre de l’année précédente aux délégations provinciales 
                       du Ministère de l’éducation nationale de l’enseignement supérieur de la formation et de la recherche scientifique;
                    </li>
                     </ul>
                     <h6>Il est tenu d’une manière générale de veiller à la bonne gestion du service de l’état civil, 
                        tout en respectant les dispositions législatives et règlementaires en vigueur. </h6>

                        <h1>Suppléance et délégation : </h1>
                        <h2>la Suppléance:</h2>
                        <p>En cas d’absence ou d’empêchement du président du conseil communal, les fonctions d’officier d’état civil sont directement exercées par l’un de ses adjoints dans l’ordre fixé par l’article 109 de la loi organique n°113-14 relatives aux communes qui dispose qu’ « en cas d’absence ou d’empêchement du président pour une durée supérieure à un mois, il est provisoirement suppléé dans la plénitude de ses fonctions par un vice-président selon l’ordre ou à défaut de vice-président, par un membre du conseil commu</p>
                         <h2>La délégation:</h2>
                        <p>Le président du conseil communal, officier d’état civil, peut déléguer ses attributions en matière d’état civil dans chaque bureau relevant de la commune en vertu d’un arrêté établi en trois exemplaires accompagné chacun d’un spécimen de signature du délégataire</p>
                        <h1> Contrôle des actes des officiers de l’état civil : </h1>
                        <h5>Les actes des officiers de l’état civil sont soumis à un double contrôle :</h5>
                        <p>Le premier est exercé par le procureur du Roi près le tribunal de la 1ère instance dans le ressort duquel est situé le bureau d’état civil.</p>
                        <br>
                        <p> Il concerne en général les registres d’état civil qui sont soumis avant leur utilisation à son autorisation. En effet le procureur du Roi numérote les pages des registres, appose le sceau du tribunal sur chaque feuille et revêt de sa signature la première et la dernière page du registre. Il vérifie les exemplaires des registres qu’il reçoit à la fin de chaque année, conserve ceux qui sont exempts d’erreurs et renvoie les exemplaires qui contiennent des anomalies ou des irrégularités à l’officier de l’état civil joints d’une copie d’un procès-verbal.</p>
                        <br>
                        <p>Après rectification des erreurs indiquées dans le PV, l’officier de l’état civil adresse les exemplaires rectifiés au tribunal compétent.</p>
                        <br>
                        <p>Le deuxième contrôle est exercé par le Ministère de l’Intérieur. Il consiste en la vérification des actes des officiers de l’état civil et le suivi du fonctionnement des bureaux d’état civil aussi bien par les inspecteurs d’état civil centraux que provinciaux.</p>
                        <br>
                       <h1> la responsabilité des officiers et fonctionnaires de l’état civil :</h1>

                       <p>Eu égard à la valeur des registres de l’état civil, le législateur les a entouré de solides garanties pour les mettre à l’abri de toute modification ou faux.</p>
                       <br>
                       <p>L’officier d’état civil est donc civilement responsable des préjudices qu’il peut causer à autrui par les modifications ou corrections frauduleuses des actes d’état civil. </p>
                       <br>
                       <p> Il est donc nécessaire d’apporter la plus grande diligence à la conservation des registres et des pièces annexes, afin de les protéger de toute destruction ou altération. Pour renforcer ces garanties, la remise et la circulation de ces registres doivent obligatoirement faire l’objet de procès-verbaux.</p>
                       <br>
                       <p> L’article 77 dispose à cet égard que : «Tout fait quelconque de l’homme qui, sans l’autorité de la loi, cause sciemment et volontairement à autrui un dommage matériel ou moral, oblige son auteur à réparer le dit dommage, lorsqu’il est établi que ce fait en est la cause directe….. » Dans le même ordre d’idée, 
                        l’article 78 stipule : « chacun est responsable du dommage moral ou matériel qu’il a causé, non seulement par son fait, mais par sa faute, lorsqu’il est établi que cette faute en est la cause directe…… La faute consiste, soit à omettre ce qu’on était tenu de faire, soit à faire ce dont on était tenu de s’abstenir, 
                        sans intention de causer un dommage ». Les officiers de l’état civil sont donc responsables des dommages causés à autrui par les modifications apportées aux actes de l’état civil consignés dans les registres dont ils sont les dépositaires, et sont tenus de ce fait de réparer lesdits dommages. Ils sont, en outre, 
                        responsables des dommages causés par leur dol ou par des fautes lourdes dans l’exercice de leur fonction (article 79 et 80 du D.O.C)</p>
                       <br>
                       <p> S’il est donc établi, suite aux contrôles, que les officiers de l’état civil ou les autres agents ont commis des actes sanctionnés par la loi, le procureur général ou le procureur du Roi prend les mesures nécessaires pour engager des poursuites à leur encontre. Par ailleurs; contrairement aux dispositions de l’article 2 du Dahir sur la fonction publique, l’officier de l’état civil est réputé fonctionnaire public au sens du droit pénal malgré son statut d’élu.</p>
                       <br>
                       <h1>la signature des actes de l’état civil :</h1>
                       <p>Afin d’éviter les retards, le législateur a exigé la signature des actes de l’état civil dès leur établissement; car l’acte non signé ne peut faire foi en cas de demandes formulées par les intéressés .Les mentions consignées au sein ou en marge de l’acte n’ont de valeur que si elles sont signées par l’officier de l’état civil compétent.</p>
                       <br>
                       <p> Par ailleurs les actes non signés par l’officier de l’état civil sortant et qui se trouve dans l’impossibilité de se présenter pour y procéder,​ doivent être signés par l'officier de l’état civil mandaté en vertu d’une décision judiciaire rendue par le tribunal de première instance qu’il doit saisir à cet effet .Si dans le délai de 2mois après la prise de ses fonctions, il ne procède pas à cette mesure, l’autorité de contrôle, le ministère public ou la personne intéressée peut procéder à cette formalité. </p>
                       <br>
                        </div>

</body>
</html>