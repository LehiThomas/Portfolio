<?php

require 'model/queries.php';
include 'lib/ajax.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

if ($action == 'index') {    
    include 'views/home.php';
    
} else if ($action == 'A') {
    $table = 'A_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'B') {
    $table = 'B_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'D') {
    $table = 'D_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'E') {
    $table = 'E_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'G') {
    $table = 'G_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'I') {
    $table = 'I_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'J') {
    $table = 'J_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'K') {
    $table = 'K_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'N') {
    $table = 'N_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'O') {
    $table = 'O_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'P') {
    $table = 'P_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';
    
} else if ($action == 'Z') {
    $table = 'Z_terms';
    $rowCount = getRowCount($table);
    $letter = $action;
    $pageTitle = displayTitleLetter($letter);
    $terms = getDefinitions($table);
    $everything = $pageTitle . displayDefinitions($terms);
    include 'views/dictionary.php';

} else if ($action == 'pronunciation') {
    include 'views/pronunciation.php';
    
} else if ($action == 'commonPhrases') {
    include 'views/commonPhrases.php';
    
} else if ($action == 'proverbs') {
    include 'views/proverbs.php';
    
} else if ($action == 'mada') {
    include 'views/mada.php';
    
} else if ($action == 'about') {
    include 'views/about.php';    
}