<?php


function dump($data)
{
    echo '<pre></pre>';
    var_dump($data);
    echo '<pre></pre>';
}

function dd($data)
{
    dump($data);
    die;
}


function abort ($code = 404 ){
    http_response_code($code);
    require VIEWS . "/errors/$code.tpl.php";
    die;
}
