<?php
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twigParams = [
    'cache' => __DIR__ . '/../compilation_cache'
];
if (!isset($_ENV['production']) || $_ENV['production'] == false) {
    $twigParams['debug'] = true;
    $_ENV["version"] = time();
    if (json_decode(file_get_contents(__DIR__ . "/../config/fp-conf.json"), true)["version"] < json_decode(file_get_contents("https://raw.githubusercontent.com/kollektiv-kpunkt/aufgeruestet-in-die-krise/master/frontend/config/fp-conf.json"), true)["version"]) {
            file_put_contents(__DIR__ . "/../config/fp-conf.json", file_get_contents("https://raw.githubusercontent.com/kollektiv-kpunkt/aufgeruestet-in-die-krise/master/frontend/config/fp-conf.json"));
    }
}
$twig = new \Twig\Environment($loader, $twigParams);
$twig->addExtension(new \Twig\Extension\DebugExtension());

use Pecee\SimpleRouter\SimpleRouter as Router;



Router::get('/', function() use ($twig) {
    $page = [
        "title" => "Die Zahlen",
        "OG" => "/img/og.png"
    ];
    $config = json_decode(file_get_contents(__DIR__ . "/../config/fp-conf.json"), true);
    $scale = json_decode(file_get_contents(__DIR__ . "/../config/scale-conf.json"), true);
    return $twig->render("homepage.html" , ["page" => $page, "environment" => $_ENV, "config" => $config, "scale" => $scale]);
});