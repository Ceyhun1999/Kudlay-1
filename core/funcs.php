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
