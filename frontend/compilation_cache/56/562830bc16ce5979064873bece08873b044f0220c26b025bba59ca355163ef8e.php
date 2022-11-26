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

/* elements/chart/partials/block.html */
class __TwigTemplate_d1cc4a420d8262e7363cf49f227392c2eb9e5d6e528eeb96945ea62348a66ae1 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 1) > 1000000)) {
            // line 2
            echo "<div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black\" style=\"--amount: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 2), "html", null, true);
            echo "; --bheight: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "height", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
    <div class=\"gsoa-fp-chart-block-content p-4 text-accent w-fit sticky top-0 left-0\">
        <h2 class=\"text-xl font-extrabold mb-0\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
            echo "</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm mb-0\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "description", [], "any", false, false, false, 5), "html", null, true);
            echo "</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">";
            // line 6
            echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 6) / 4900000000) * 100), 2), "html", null, true);
            echo "%</p>
    </div>
</div>
";
        } else {
            // line 10
            echo "<div class=\"gsoa-fp-chart-block-wrapper flex h-full items-center\">
    <div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black\" style=\"--amount: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 11), "html", null, true);
            echo "; --bheight: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "height", [], "any", false, false, false, 11), "html", null, true);
            echo "\"></div>
    <div class=\"gsoa-fp-chart-block-content p-2\">
        <h2 class=\"text-xl font-extrabold mb-0\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "description", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 15) / 4900000000) * 100), 5), "html", null, true);
            echo "%</p>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "elements/chart/partials/block.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  76 => 14,  72 => 13,  65 => 11,  62 => 10,  55 => 6,  51 => 5,  47 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if step.amount > 1000000 %}
<div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black\" style=\"--amount: {{ step.amount}}; --bheight: {{step.height}}\">
    <div class=\"gsoa-fp-chart-block-content p-4 text-accent w-fit sticky top-0 left-0\">
        <h2 class=\"text-xl font-extrabold mb-0\">{{step.title}}</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm mb-0\">{{ step.description }}</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">{{ (step.amount / 4900000000 * 100) |round(2)}}%</p>
    </div>
</div>
{% else %}
<div class=\"gsoa-fp-chart-block-wrapper flex h-full items-center\">
    <div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black\" style=\"--amount: {{ step.amount}}; --bheight: {{step.height}}\"></div>
    <div class=\"gsoa-fp-chart-block-content p-2\">
        <h2 class=\"text-xl font-extrabold mb-0\">{{step.title}}</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm\">{{ step.description }}</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">{{ (step.amount / 4900000000 * 100) |round(5)}}%</p>
    </div>
</div>
{% endif %}", "elements/chart/partials/block.html", "/var/www/html/templates/elements/chart/partials/block.html");
    }
}
