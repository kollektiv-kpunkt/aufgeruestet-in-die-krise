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

/* elements/chart/partials/text.html */
class __TwigTemplate_670fd75a5a988f3f96d0ed2c06d01c604b8240151229a912dbe0357645911028 extends Template
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
        echo "<div class=\"gsoa-fp-chart-element gsoa-fp-chart-text-outer flex items-center gsoa-set-width\" style=\"--amount: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"gsoa-fp-chart-inner w-screen sticky top-0 left-0\">
        ";
        // line 3
        if (($context["color"] ?? null)) {
            // line 4
            echo "            ";
            $context["color"] = ($context["color"] ?? null);
            // line 5
            echo "        ";
        } else {
            // line 6
            echo "            ";
            $context["color"] = "text-white";
            // line 7
            echo "        ";
        }
        // line 8
        echo "        <p class=\"w-full text-center font-extrabold ";
        echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "text", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/chart/partials/text.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gsoa-fp-chart-element gsoa-fp-chart-text-outer flex items-center gsoa-set-width\" style=\"--amount: {{step.amount}}\">
    <div class=\"gsoa-fp-chart-inner w-screen sticky top-0 left-0\">
        {% if color %}
            {% set color = color %}
        {% else %}
            {% set color = \"text-white\" %}
        {% endif %}
        <p class=\"w-full text-center font-extrabold {{color}}\">{{ step.text }}</p>
    </div>
</div>", "elements/chart/partials/text.html", "/var/www/html/templates/elements/chart/partials/text.html");
    }
}
