<?php


function isActiveRoute($route, $output = "mm-active")
{
    if (Route::currentRouteName() == $route) return $output;
}

function isActiveRouteFront($route, $output = "active")
{
    if (Route::currentRouteName() == $route) return $output;
}
