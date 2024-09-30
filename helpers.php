<?php

use App\Models\User;


function view($viewName, $vars=[]){
    extract($vars);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($path){
    header("Location: $path");
}

