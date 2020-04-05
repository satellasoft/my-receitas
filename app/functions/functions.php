<?php

function dd($p = [])
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
    die();
}
