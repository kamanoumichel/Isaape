<?php

$tab = [
    "/Formation.php#Bts_Hnd" => "Cycle BTS / HND",
    '/Formation.php#Licence_pro' => "Licence Professionnelle",
    "/Formation.php#Master_pro" => "/Formation.php#Master_pro"    
];

function dropdown_menu(array $chemins , array $titres):string{
    return <<<HTML
    
HTML;
}
function nav_item(string $chemin ,string $titre,string $linkclass,string $dropdownclass = null):string
{
    $class= 'nav-item';
    if($_SERVER['SCRIPT_NAME'] === $chemin){
        $linkclass .= " active";
    }
    if(isset($dropdownclass)){
        $data_bs_toggle="dropdown";
        $role="button";

    }
    return <<<HTML
    <li class="$class"><a class="$linkclass nav-link text-light font-wight-bold text-uppercase px-3 " href="$chemin">$titre</a></li>
HTML;
}

function nav_menu($linkClass=''){
    
    return nav_item('/index.php', 'Acceuil',$linkClass);
}

function dropdown(){

      
     /*<<<HTML
        
         <li class="nav-item dropdown">
                                <a data-bs-toggle="dropdown" role="button" class="nav-link  font-wight-bold text-uppercase px-3 dropdown-toggle"  href="/Formation.php">Formations</a>
                                <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/Formation.php#Bts_Hnd"> Cycle BTS / HND </a>
                                        <a class="dropdown-item" href="/Formation.php#Licence_pro"> Licence Professionnelle </a>
                                        <a class="dropdown-item" href="/Formation.php#Master_pro"> Master Professionnelle </a>
                                </div>
                            </li>
HTML;*/
}

?>