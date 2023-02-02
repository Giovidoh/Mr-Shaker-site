<?php

function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '<pre>';
}

function add_nav_item(string $link, string $name) : string {
    $class = "navbar__list__link";
    $link = "/mr-shaker-site/" . $link;
    if($_SERVER['SCRIPT_NAME'] === $link){
        $class .=" navbar__list__link--active" ;
    }

    $item = <<< HTML
        <li class="navbar__list__item">
            <a href="$link" class="$class">$name</a>
        </li>
    HTML;

    return $item;
    
}

function add_nav_menu(){
    return
        add_nav_item("index.php", "Accueil") .
        add_nav_item("apropos.php", "À propos").
        add_nav_item("menu.php", "Menu");
}

function add_nav_menu2(){
    return
        add_nav_item("galeries.php", "Galeries") .
        add_nav_item("infos.php", "Infos").
        add_nav_item("contacts.php", "Contacts");
}