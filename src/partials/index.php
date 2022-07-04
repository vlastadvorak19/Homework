<?php

require_once '../vendor/autoload.php';
use Jenssegers\Blade\Blade;
$blademaster = new Blade('../src/views/','..cache');


$data = (object) [];
$data -> title = "Vlastimil Dvorak";
$data -> description = "Homework website";
$data -> links = ['HOME', 'ABOUT ME', 'MY WORK'];
$data -> hero = (object) [ 'title' => 'JACK JACKSON', 'text' => 'What a boundert joseph stalin groomed sportacus testosterone trophy freestyle derek griffiths rebot moustache, derek griffithsgroomed testosterone trophy marquess of queensbury freestyle jeseph stalin rebot moustache Nostrillis tickler sportucus a bounder groomed?','button' => 'LEARN MORE'];
$data -> images = (object) [ 'hero_image' => 'assets/img/woman.png'];
$data -> footer = "© Jack Jackson 2020";
$data -> subtitle = "WHAT I DID";
$data-> cards = [
    (object) [
        'head' => 'EPIC PROJECT',
        'text' => 'text1',
        'image' => 'assets/img/computer.png',
        'image_name' => 'computer'
    ],
    (object) [
        'head' => 'ANOTHER WORK I DID',
        'text' => 'text2',
        'image' => 'assets/img/notebook.png',
        'image_name' => 'notebook'
    ],
    (object) [
        'head' => 'REBRAND OF THIS COMPANY',
        'text' => 'text3',
        'image' => 'assets/img/mobile.png',
        'image_name' => 'mobile'
    ]
    ];

echo $blademaster->render( 'homepage', (array) $data);


?>