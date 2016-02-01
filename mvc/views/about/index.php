<?php

function getHeader() {
    $header['title'] = "Home";
    $header['description'] = "Описание";

    return $header;
}

function getResources() {
    $resources["scripts"] = array(
        "fotorama/fotorama.js",
    );

    $resources["styles"] = array(
        "fotorama/fotorama.css",
    );

    return $resources;
}

function getElements() {
    $elements = array(
        array("name" => "test"),
        array("name" => "test2"),
        array("name" => "test3"),
    );

    return $elements;
}

