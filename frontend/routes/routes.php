<?php
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twigParams = [
    'cache' => __DIR__ . '/../compilation_cache'
];
if (!isset($_ENV['production']) || $_ENV['production'] == false) {
    $twigParams['debug'] = true;
    $_ENV["version"] = time();
}
$twig = new \Twig\Environment($loader, $twigParams);
$twig->addExtension(new \Twig\Extension\DebugExtension());

use Pecee\SimpleRouter\SimpleRouter as Router;



Router::get('/', function() use ($twig) {
    $page = [
        "title" => "Die Zahlen",
        "OG" => "/img/og.png"
    ];
    return $twig->render("homepage.html" , ["page" => $page, "environment" => $_ENV]);
});