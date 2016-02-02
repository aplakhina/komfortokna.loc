<?php

function getHeader() {
    $header['title'] = "Home";
    $header['description'] = "Описание";

    return $header;
}

function getResources() {
    $resources["scripts"] = array(
        "owl.carousel/owl.carousel.js",
        "fotorama/fotorama.js",
        "timerCircles/TimeCircles.js"
    );

    $resources["styles"] = array(
        "owl.carousel/assets/owl.carousel.css",
        "fotorama/fotorama.css",
        "timerCircles/TimeCircles.css"
    );

    return $resources;
}

function getElements() {
    $elements = array(
        array("name" => "navbar"),
        array("name" => "landing"),
        array("name" => "sales"),
        array("name" => "product"),
        array("name" => "client"),
        array("name" => "trust"),
        array("name" => "work"),
        array("name" => "contacts"),
        array("name" => "workArea"),
        array("name" => "factory"),
        array("name" => "examples"),
        array("name" => "guarantees"),
        array("name" => "footer"),
    );

    return $elements;
}

