<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* elements/intro.html */
class __TwigTemplate_4e46c23939647ca58a12293a3958f1db9ca9c09384c5b0838ce66f201200f93b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"gsoa-fp-intro-inner\">
    <div class=\" gsoa-fp-intro h-full p-8 text-white\">
        <h1 class=\"text-5xl font-extrabold mb-4\">Aufgerüstet in die Krise.</h1>
        <div class=\"gsoa-fp-intro-content mb-4\">
            <p>In pretium pellentesque sed adipiscing sit pharetra faucibus vitae. Ipsum ut volutpat vel
                pellentesque
                congue sagittis. Morbi felis fames hac non mattis sit purus duis sagittis. Risus in eu justo
                nisi
                tempor. Commodo sit
                aliquam in aliquam
                purus.</p>
            <p>Ut morbi tempor tempus arcu quam. <b>Id tortor iaculis facilisis sed arcu a. Quis vel purus
                    consequat
                    morbi viverra amet</b>
                mauris scelerisque. Dignissim nunc ac diam in. Neque neque orci tellus ultricies feugiat
                malesuada
                quam
                nisi. Sed mi
                augue vitae nisi vitae ac tellus molestie.</p>
        </div>
        <a class=\"gsoa-fp-intro-button text-accent font-extrabold cursor-pointer\">Scroll nach rechts <i
                data-feather=\"arrow-right\" class=\"inline w-6 h-6\"></i></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/intro.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gsoa-fp-intro-inner\">
    <div class=\" gsoa-fp-intro h-full p-8 text-white\">
        <h1 class=\"text-5xl font-extrabold mb-4\">Aufgerüstet in die Krise.</h1>
        <div class=\"gsoa-fp-intro-content mb-4\">
            <p>In pretium pellentesque sed adipiscing sit pharetra faucibus vitae. Ipsum ut volutpat vel
                pellentesque
                congue sagittis. Morbi felis fames hac non mattis sit purus duis sagittis. Risus in eu justo
                nisi
                tempor. Commodo sit
                aliquam in aliquam
                purus.</p>
            <p>Ut morbi tempor tempus arcu quam. <b>Id tortor iaculis facilisis sed arcu a. Quis vel purus
                    consequat
                    morbi viverra amet</b>
                mauris scelerisque. Dignissim nunc ac diam in. Neque neque orci tellus ultricies feugiat
                malesuada
                quam
                nisi. Sed mi
                augue vitae nisi vitae ac tellus molestie.</p>
        </div>
        <a class=\"gsoa-fp-intro-button text-accent font-extrabold cursor-pointer\">Scroll nach rechts <i
                data-feather=\"arrow-right\" class=\"inline w-6 h-6\"></i></a>
    </div>
</div>", "elements/intro.html", "/var/www/html/templates/elements/intro.html");
    }
}
