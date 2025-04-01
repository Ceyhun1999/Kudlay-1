<?php

require_once 'funcs.php';

$title = 'My Blog :: About';

$post =
    '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus optio aliquid commodi dolorum placeat eaque quaerat repudiandae accusamus id, veritatis saepe doloribus cum facilis odit quos deserunt velit officia dolor.</p>
    <p>Illum vitae molestiae dolor rerum veritatis, odit quam inventore libero sint fugiat at illo est nulla. Vero consequatur adipisci ullam, cum eligendi at accusamus beatae illo ipsam, ab eaque sint!</p>
    <p>Eius repudiandae odit quod totam recusandae tempora soluta eligendi eveniet, quibusdam accusamus hic mollitia, reprehenderit ipsam necessitatibus veritatis incidunt. In distinctio consequatur fugiat sapiente quia iure nesciunt dignissimos minima autem.</p>';

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],

    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],


    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],


    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],


    5 => [
        'title' => 'And a fifth one',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];


require_once  VIEWS . '/about.tpl.php';
