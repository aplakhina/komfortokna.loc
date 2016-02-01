<?php

function getHeader() {
    $header['title'] = "About";
    $header['description'] = "Описание";

    return $header;
}

function getResources() {
    $resources["scripts"] = array(
//    "yandex-map/yandex-map.js"
    );

    $resources["styles"] = array(
//    "animate/animate.css",
    );

    return $resources;
}

function getElements() {
    $elements = array(
        array("name" => "test2")
    );

    return $elements;
}

