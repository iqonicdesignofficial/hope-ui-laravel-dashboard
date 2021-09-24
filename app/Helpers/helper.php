<?php

function activeRoute($route, $isClass = false): string
{
    $requestUrl = request()->is($route);

    if($isClass) {
        return $requestUrl ? $isClass : '';
    } else {
        return $requestUrl ? 'active' : '';
    }
}
