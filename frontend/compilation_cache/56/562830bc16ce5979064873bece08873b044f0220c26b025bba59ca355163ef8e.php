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
            echo "<div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black absolute\"
    style=\"--amount: ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 3), "html", null, true);
            echo "; --bheight: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "height", [], "any", false, false, false, 3), "html", null, true);
            echo "; left: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "position", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
    <div class=\"gsoa-fp-chart-block-content p-4 text-accent w-fit sticky top-0 left-0\">
        <h2 class=\"text-xl font-extrabold mb-0\">";
            // line 5
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "title", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "title", [], "any", false, false, false, 5), (twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 5) . " CHF"))) : ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 5) . " CHF"))), "html", null, true);
            echo "</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm mb-0\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">";
            // line 7
            echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 7) / 9400000000) * 100), 2), "html", null, true);
            echo "%</p>
    </div>
</div>
";
        } else {
            // line 11
            echo "<div class=\"gsoa-fp-chart-block-track absolute flex h-full items-center\"
    style=\"left: ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "position", [], "any", false, false, false, 12), "html", null, true);
            echo "; width: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "width", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "width", [], "any", false, false, false, 12), " 0.5%")) : (" 0.5%")), "html", null, true);
            echo "\">
    <div class=\"gsoa-fp-chart-block-wrapper flex h-full items-center sticky top-0 left-0 w-screen justify-center\">
        <div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black\"
            style=\"--amount: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 15), "html", null, true);
            echo "; --bheight: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "height", [], "any", false, false, false, 15), "html", null, true);
            echo "\"></div>
        <div class=\"gsoa-fp-chart-block-content p-2\">
            <h2 class=\"text-xl font-extrabold mb-0\">";
            // line 17
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "title", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "title", [], "any", false, false, false, 17), (twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 17) . " CHF"))) : ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 17) . " CHF"))), "html", null, true);
            echo "</h2>
            <p class=\"gsoa-fp-chart-block-description italic text-sm\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 19) < 94000)) {
                echo " <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">>0.001%</p>
                ";
            } else {
                // line 21
                echo "                <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 21) / 9400000000) * 100), 3), "html", null, true);
                echo "%</p>
                ";
            }
            // line 23
            echo "        </div>
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
        return array (  103 => 23,  97 => 21,  92 => 19,  88 => 18,  84 => 17,  77 => 15,  69 => 12,  66 => 11,  59 => 7,  55 => 6,  51 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if step.amount > 1000000 %}
<div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black absolute\"
    style=\"--amount: {{ step.amount}}; --bheight: {{step.height}}; left: {{step.position}}\">
    <div class=\"gsoa-fp-chart-block-content p-4 text-accent w-fit sticky top-0 left-0\">
        <h2 class=\"text-xl font-extrabold mb-0\">{{step.title|default(step.amount ~ \" CHF\")}}</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm mb-0\">{{ step.description }}</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">{{ (step.amount / 9400000000 * 100) |round(2)}}%</p>
    </div>
</div>
{% else %}
<div class=\"gsoa-fp-chart-block-track absolute flex h-full items-center\"
    style=\"left: {{step.position}}; width: {{step.width|default(\" 0.5%\")}}\">
    <div class=\"gsoa-fp-chart-block-wrapper flex h-full items-center sticky top-0 left-0 w-screen justify-center\">
        <div class=\"gsoa-fp-chart-block-outer gsoa-fp-chart-element gsoa-set-width bg-black\"
            style=\"--amount: {{ step.amount}}; --bheight: {{step.height}}\"></div>
        <div class=\"gsoa-fp-chart-block-content p-2\">
            <h2 class=\"text-xl font-extrabold mb-0\">{{step.title|default(step.amount ~ \" CHF\")}}</h2>
            <p class=\"gsoa-fp-chart-block-description italic text-sm\">{{ step.description }}</p>
            {% if step.amount < 94000 %} <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">>0.001%</p>
                {% else %}
                <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">{{ (step.amount / 9400000000 * 100) |round(3)}}%</p>
                {% endif %}
        </div>
    </div>
</div>
{% endif %}", "elements/chart/partials/block.html", "/var/www/html/templates/elements/chart/partials/block.html");
    }
}
