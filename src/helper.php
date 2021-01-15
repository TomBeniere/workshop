<?php

function old(array $data) {
    if (isset($_SESSION["old"][$data])) {
        echo $_SESSION["old"][$data];
    }
}

function test(string $data) {
    $data = htmlspecialchars(stripslashes(trim($data)));

    return $data;
}

function error(string $data) {
    if (isset($_SESSION["error"][$data])) {
        echo $_SESSION["error"][$data];
    }
}