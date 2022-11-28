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

/* homepage.html */
class __TwigTemplate_9e88f5f7d3894673b14fe5a0fb1f0ca3dcc225190a15e9b5916364181e63be3f extends Template
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
        echo twig_include($this->env, $context, "elements/header.html");
        echo "

<div class=\"gsoa-fp-outer h-screen w-screen overflow-x-auto bg-background\">
    <div class=\"gsoa-fp-inner flex h-full\">
        <div class=\"gsoa-fp-intro-wrapper gsoa-fp-screen flex\">
            ";
        // line 6
        $this->loadTemplate("elements/intro.html", "homepage.html", 6)->display($context);
        // line 7
        echo "            ";
        $this->loadTemplate("elements/scale.html", "homepage.html", 7)->display(twig_to_array(["scale" => ($context["scale"] ?? null)]));
        // line 8
        echo "        </div>
        <div class=\"gsoa-fp-screen gsoa-fp-chart h-full flex flex-col\">
            ";
        // line 10
        $this->loadTemplate("elements/chart/upper.html", "homepage.html", 10)->display($context);
        // line 11
        echo "            ";
        $this->loadTemplate("elements/chart/mid.html", "homepage.html", 11)->display($context);
        // line 12
        echo "            ";
        $this->loadTemplate("elements/chart/lower.html", "homepage.html", 12)->display($context);
        // line 13
        echo "        </div>
        <div class=\"gsoa-fp-screen gsoa-fp-outro flex-shrink-0 h-full w-screen p-8 text-white\" id=\"outro\">
            <h1 class=\"text-5xl font-extrabold mb-4\">Aufgerüstet in die Krise.</h1>
            <div class=\"gsoa-fp-intro-content mb-4\">
                <p>In pretium pellentesque sed adipiscing sit pharetra faucibus vitae. Ipsum ut volutpat vel
                    pellentesque
                    congue sagittis. Morbi felis fames hac non mattis sit purus duis sagittis. Risus in eu justo nisi
                    tempor. Commodo sit
                    aliquam in aliquam
                    purus.</p>
                <p>Ut morbi tempor tempus arcu quam. <b>Id tortor iaculis facilisis sed arcu a. Quis vel purus consequat
                        morbi viverra amet</b>
                    mauris scelerisque. Dignissim nunc ac diam in. Neque neque orci tellus ultricies feugiat malesuada
                    quam
                    nisi. Sed mi
                    augue vitae nisi vitae ac tellus molestie.</p>
            </div>
            <a href=\"#\" class=\"gsoa-fp-intro-button text-accent font-extrabold\">Scroll nach rechts <i
                    data-feather=\"arrow-right\" class=\"inline w-6 h-6\"></i></a>
        </div>
    </div>
</div>

";
        // line 36
        echo twig_include($this->env, $context, "elements/footer.html");
    }

    public function getTemplateName()
    {
        return "homepage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  62 => 13,  59 => 12,  56 => 11,  54 => 10,  50 => 8,  47 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{include (\"elements/header.html\")}}

<div class=\"gsoa-fp-outer h-screen w-screen overflow-x-auto bg-background\">
    <div class=\"gsoa-fp-inner flex h-full\">
        <div class=\"gsoa-fp-intro-wrapper gsoa-fp-screen flex\">
            {% include (\"elements/intro.html\") %}
            {% include (\"elements/scale.html\") with {\"scale\" : scale} only %}
        </div>
        <div class=\"gsoa-fp-screen gsoa-fp-chart h-full flex flex-col\">
            {% include (\"elements/chart/upper.html\") %}
            {% include (\"elements/chart/mid.html\") %}
            {% include (\"elements/chart/lower.html\") %}
        </div>
        <div class=\"gsoa-fp-screen gsoa-fp-outro flex-shrink-0 h-full w-screen p-8 text-white\" id=\"outro\">
            <h1 class=\"text-5xl font-extrabold mb-4\">Aufgerüstet in die Krise.</h1>
            <div class=\"gsoa-fp-intro-content mb-4\">
                <p>In pretium pellentesque sed adipiscing sit pharetra faucibus vitae. Ipsum ut volutpat vel
                    pellentesque
                    congue sagittis. Morbi felis fames hac non mattis sit purus duis sagittis. Risus in eu justo nisi
                    tempor. Commodo sit
                    aliquam in aliquam
                    purus.</p>
                <p>Ut morbi tempor tempus arcu quam. <b>Id tortor iaculis facilisis sed arcu a. Quis vel purus consequat
                        morbi viverra amet</b>
                    mauris scelerisque. Dignissim nunc ac diam in. Neque neque orci tellus ultricies feugiat malesuada
                    quam
                    nisi. Sed mi
                    augue vitae nisi vitae ac tellus molestie.</p>
            </div>
            <a href=\"#\" class=\"gsoa-fp-intro-button text-accent font-extrabold\">Scroll nach rechts <i
                    data-feather=\"arrow-right\" class=\"inline w-6 h-6\"></i></a>
        </div>
    </div>
</div>

{{include (\"elements/footer.html\")}}", "homepage.html", "/var/www/html/templates/homepage.html");
    }
}
