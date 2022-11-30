<?php
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twigParams = [
    'cache' => __DIR__ . '/../compilation_cache'
];

if ($_ENV['production'] == "0") {
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
        "title" => "So soll das neue Armeebudget aussehen",
        "description" => "Die bürgerliche Parlamentsmehrheit will bis 2030 das Armeebudget von 5,2 auf 9,4 Milliarden erhöhen. Schau dir mal an, was das bedeuten würde.",
        "OG" => "/img/og.png"
    ];
    $config = json_decode(file_get_contents(__DIR__ . "/../config/fp-conf.json"), true);
    return $twig->render("homepage.html" , ["page" => $page, "environment" => $_ENV, "config" => $config]);
});

Router::get('/datenschutz', function() use ($twig) {
    $page = [
        "title" => "Datenschutz",
        "description" => "Die bürgerliche Parlamentsmehrheit will bis 2030 das Armeebudget von 5,2 auf 9,4 Milliarden erhöhen. Schau dir mal an, was das bedeuten würde.",
        "OG" => "/img/og.png"
    ];
    return $twig->render("datenschutz.html" , ["page" => $page, "environment" => $_ENV]);
});