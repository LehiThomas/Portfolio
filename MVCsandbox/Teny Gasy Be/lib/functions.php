<?php

function connection() {
    $server = 'localhost';
    $database = 'trippyro_gasy';
    $user = 'trippyro_iClient';
    $password = 'C3CmX^Fccd)i';
    $dsn = "mysql:host=$server; dbname=$database";
    $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $connected = new PDO($dsn, $user, $password, $option);
    } catch (PDOException $exc) {
        header('location: /errordocs/500.php');
        exit;
    }
    return $connected;
}

function displayDefinitions($terms) {
    $everything = "<dl class=\"dl-horizontal\">";
    foreach ($terms as $term) {
        $everything .= "<b><dt>" . $term['html'] . "</dt></b>";
        $everything .= "<dd>" . $term['definition'];
        if (!empty($term['root'])) {
            $everything .= "<dd>" . $term['speech'] . ' <i>(' . $term['root'] . ')</i>';
        } else {
            $everything .= "<dd>" . $term['speech'];
        }
        $fomba = getFombaFiteny($term['word']);
        $everything .= displayFombaFiteny($fomba) . "</dd>";
    }
    $everything .= "</dl>";
    return $everything;
}

function displayFombaFiteny($fomba) {
    $display = "<ul>";
    foreach ($fomba as $fiteny) {
        $display .= "<li>" . $fiteny['fomba_fiteny'] . "</li>";
    }
    $display .= "</ul>";
    return $display;
}

function displayTitleLetter($letter){
    
    $display  = "<div class='row'>";
    $display .= "<div class='col-md-2'></div>";
    $display .= "<div class='col-md-10'>";
    $display .= "<p style='font-size: 100px;'>" . $letter . "</p>";
    $display .= "</div>";
    $display .= "</div>";
    
    return $display;
}
