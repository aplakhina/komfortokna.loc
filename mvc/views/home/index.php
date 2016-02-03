<?php

function getHeader() {
    $header['title'] = "Home";
    $header['description'] = "Описание";

    return $header;
}

function getResources() {
    $resources["scripts"] = array(
        "validator/js/validator.js",
        "owl.carousel/owl.carousel.js",
        "smoothScroll/smoothScroll.js",
        "fotorama/fotorama.js",
        "timerCircles/TimeCircles.js"
    );

    $resources["styles"] = array(
        "animate/animate.css",
        "owl.carousel/assets/owl.carousel.css",
        "fotorama/fotorama.css",
        "timerCircles/TimeCircles.css"
    );

    return $resources;
}

function getElements() {
    $elements = array(
        array("name" => "fixedUp"),
        array("name" => "fixedContacts"),
        array("name" => "navbar"),
        array("name" => "landing"),
        array("name" => "sales"),
        array("name" => "product"),
        array("name" => "examples"),
        array("name" => "prices"),
        array("name" => "work"),
        array("name" => "advantages"),
        array("name" => "workArea"),
        array("name" => "contacts"),
        array("name" => "factory"),
        array("name" => "guarantees"),
        array("name" => "prefooter"),
        array("name" => "footer"),
    );

    return $elements;
}

