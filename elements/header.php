<?php 
function nav_item(string $chemin ,string $titre,string $linkclass):string
{
    $class= 'nav-item';
    if($_SERVER['SCRIPT_NAME'] === $chemin){
        $linkclass .= " active";
    }
    return <<<HTML
    <li class="$class"><a  class="$linkclass nav-link  font-wight-bold text-uppercase px-3 " href="$chemin">$titre</a></li>
HTML;
    
}

function nav_menu($linkClass=''){
    
    return nav_item('/index.php', 'Acceuil',$linkClass).nav_item('/about.php', 'A PROPOS',$linkClass).
    nav_item('/actualite.php', 'actualite',$linkClass).nav_item('/professeur.php', 'professeur',$linkClass).nav_item('/elearning', 'E-learning',$linkClass).nav_item('/contact.php', 'Contact',$linkClass);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="font/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
   
    <title><?=$title?></title>
    
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark"  >
            <a href=" " class="navbar-brand"><img src="img/logo.png " alt="logo issape" width="50" ></a>
            <a href="http://www.cedimes.com/" class="navbar-brand" target="_blank"><img src="img/cedimes.png " alt="logo cedimes" width="50" ></a>
        </div>
        
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"> 
                <span class="navbar-toggler-icon "></span>
        </button>
        <div class="container">
                <div class="collapse navbar-collapse justify-content-end" id="nav">
                    <ul class="navbar-nav">
                            <?=nav_menu("nav-link") ?> 
                            <li class="nav-item dropdown">
                                <a data-bs-toggle="dropdown" role="button" class="nav-link  font-wight-bold text-uppercase px-3 dropdown-toggle"  href="/Formation.php">Formations</a>
                                <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/Formation.php#Bts_Hnd"> Cycle BTS / HND </a>
                                        <a class="dropdown-item" href="/Formation.php#Licence_pro"> Licence Professionnelle </a>
                                        <a class="dropdown-item" href="/Formation.php#Master_pro"> Master Professionnelle </a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link text-light font-wight-bold text-uppercase px-3  btn btn-primary" href="/inscription.php"> inscription</a></li>
                    </ul>
                </div>
        </div>
    </nav>

