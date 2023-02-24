<?php
function setActive(String $ruta): string
{
    return request()->routeIs($ruta) ? 'active' : '';
}