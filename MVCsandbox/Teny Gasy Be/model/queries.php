<?php

/*
 * This file is for all SQL statements and interaction with the database.
 */

try {
    require $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';
} catch (Exception $exc) {
    header('location: /errordocs/500.php');
    exit;
}

function getRowCount($table) {
    $connected = connection();
    try {
        $sql = "SELECT COUNT(*) FROM $table";

        $stmt = $connected->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $stmt->closeCursor();
    } catch (PDOException $e) {
        return FALSE;
    }
    $row = $results[0][0];
    return $row;
}

function getDefinitions($table) {
    $connected = connection();
    try {
        $sql = "SELECT word, html, speech, root, definition, related
                FROM $table
                ORDER BY word";

        $stmt = $connected->prepare($sql);
        $stmt->execute();
        $terms = $stmt->fetchAll();
        $stmt->closeCursor();
    } catch (PDOException $e) {
        return FALSE;
    }
    if (is_array($terms)) {
        return $terms;
    } ELSE {
        return FALSE;
    }
}

function getFombaFiteny($word) {
    $connected = connection();
    try {
        $sql = "SELECT fomba_fiteny
                FROM fomba_fiteny
                WHERE related_word = :word";

        $stmt = $connected->prepare($sql);
        $stmt->bindValue(":word", $word, PDO::PARAM_STR);
        $stmt->execute();
        $fiteny = $stmt->fetchAll();
        $stmt->closeCursor();
    } catch (PDOException $e) {
        return FALSE;
    }
    if (is_array($fiteny)) {
        return $fiteny;
    } ELSE {
        return FALSE;
    }
}
