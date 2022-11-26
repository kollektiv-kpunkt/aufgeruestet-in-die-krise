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

/* elements/chart/lower.html */
class __TwigTemplate_6cc5093e4cc3c8f3d436549db945adf5d7ab95a4b1bd3ccb7a1b80102e47a94d extends Template
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
        echo "<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-lower\">
    <div class=\"gsoa-fp-chart-counter w-screen px-4 py-1 sticky top-0 left-0 text-white\">
        <p class=\"gsoa-fp-chart-counter-number text-sm italic mb-8\">CHF 0</p>
        <div
            class=\"gsoa-fp-progressbar w-full h-6 outline-accent outline rounded-full flex relative\">
            <div class=\"gsoa-fp-progressbar-inner bg-accent rounded-full\"
                style=\"width: 0%;\"></div>
            <p class=\"absolute top-1/2 left-1/2 text-accent italic text-sm mix-blend-difference\" style=\"transform: translate(-50%, -50%);\">0%</p>
        </div>
        <a class=\"gsoa-fp-chart-jumper w-full text-center italic mt-6 text-xs underline text-accent opacity-0 transition-opacity duration-500 cursor-pointer block\">Zum Ende springen</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/chart/lower.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-lower\">
    <div class=\"gsoa-fp-chart-counter w-screen px-4 py-1 sticky top-0 left-0 text-white\">
        <p class=\"gsoa-fp-chart-counter-number text-sm italic mb-8\">CHF 0</p>
        <div
            class=\"gsoa-fp-progressbar w-full h-6 outline-accent outline rounded-full flex relative\">
            <div class=\"gsoa-fp-progressbar-inner bg-accent rounded-full\"
                style=\"width: 0%;\"></div>
            <p class=\"absolute top-1/2 left-1/2 text-accent italic text-sm mix-blend-difference\" style=\"transform: translate(-50%, -50%);\">0%</p>
        </div>
        <a class=\"gsoa-fp-chart-jumper w-full text-center italic mt-6 text-xs underline text-accent opacity-0 transition-opacity duration-500 cursor-pointer block\">Zum Ende springen</a>
    </div>
</div>", "elements/chart/lower.html", "/var/www/html/templates/elements/chart/lower.html");
    }
}
