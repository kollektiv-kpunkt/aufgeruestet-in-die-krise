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
            echo "<div class=\"gsoa-fp-amount-block-outer gsoa-fp-chart-element gsoa-set-width bg-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "color", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "color", [], "any", false, false, false, 2), "black")) : ("black")), "html", null, true);
            echo "
    absolute\" style=\"--amount: ";
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 5), 0, ".", "'"), "html", null, true);
            echo " CHF</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm mb-0\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.7rem;\">";
            // line 7
            echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 7) / 9400000000) * 100), 2), "html", null, true);
            echo "% von 9.4 Mia
            CHF</p>
    </div>
</div>
";
        } else {
            // line 12
            echo "<div class=\"gsoa-fp-chart-block-track absolute flex h-full items-center\"
    style=\"left: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "position", [], "any", false, false, false, 13), "html", null, true);
            echo "; width: ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "width", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "width", [], "any", false, false, false, 13), " 0.5%")) : (" 0.5%")), "html", null, true);
            echo "\">
    <div class=\"gsoa-fp-chart-block-wrapper flex h-full items-center sticky top-0 left-0 w-screen justify-center\">
        <div class=\"gsoa-fp-amount-block-outer gsoa-fp-chart-element gsoa-set-width bg-";
            // line 15
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "color", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "color", [], "any", false, false, false, 15), "black")) : ("black")), "html", null, true);
            echo "\"
            style=\"--amount: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 16), "html", null, true);
            echo "; --bheight: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "height", [], "any", false, false, false, 16), "html", null, true);
            echo "\"></div>
        <div class=\"gsoa-fp-chart-block-content p-4\">
            <h2 class=\"text-xl font-extrabold mb-0\">";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 18), 0, ".", "'"), "html", null, true);
            echo " CHF</h2>
            <p class=\"gsoa-fp-chart-block-description italic text-sm\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
            ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 20) < 94000)) {
                echo " <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">
                <0.001% von 9.4 Mia CHF</p>
                    ";
            } else {
                // line 23
                echo "                    <p class=\"mt-0 italic\" style=\"font-size: 0.7rem;\">";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 23) / 9400000000) * 100), 3), "html", null, true);
                echo "%
                        von
                        9.4 Mia CHF</p>
                    ";
            }
            // line 27
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
        return array (  112 => 27,  104 => 23,  98 => 20,  94 => 19,  90 => 18,  83 => 16,  79 => 15,  72 => 13,  69 => 12,  61 => 7,  57 => 6,  53 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if step.amount > 1000000 %}
<div class=\"gsoa-fp-amount-block-outer gsoa-fp-chart-element gsoa-set-width bg-{{step.color|default(\"black\")}}
    absolute\" style=\"--amount: {{ step.amount}}; --bheight: {{step.height}}; left: {{step.position}}\">
    <div class=\"gsoa-fp-chart-block-content p-4 text-accent w-fit sticky top-0 left-0\">
        <h2 class=\"text-xl font-extrabold mb-0\">{{step.amount|number_format(0, '.', \"'\")}} CHF</h2>
        <p class=\"gsoa-fp-chart-block-description italic text-sm mb-0\">{{ step.description }}</p>
        <p class=\"mt-0 italic\" style=\"font-size: 0.7rem;\">{{ (step.amount / 9400000000 * 100) |round(2)}}% von 9.4 Mia
            CHF</p>
    </div>
</div>
{% else %}
<div class=\"gsoa-fp-chart-block-track absolute flex h-full items-center\"
    style=\"left: {{step.position}}; width: {{step.width|default(\" 0.5%\")}}\">
    <div class=\"gsoa-fp-chart-block-wrapper flex h-full items-center sticky top-0 left-0 w-screen justify-center\">
        <div class=\"gsoa-fp-amount-block-outer gsoa-fp-chart-element gsoa-set-width bg-{{step.color|default(\"black\")}}\"
            style=\"--amount: {{ step.amount}}; --bheight: {{step.height}}\"></div>
        <div class=\"gsoa-fp-chart-block-content p-4\">
            <h2 class=\"text-xl font-extrabold mb-0\">{{step.amount|number_format(0, '.', \"'\")}} CHF</h2>
            <p class=\"gsoa-fp-chart-block-description italic text-sm\">{{ step.description }}</p>
            {% if step.amount < 94000 %} <p class=\"mt-0 italic\" style=\"font-size: 0.5rem;\">
                <0.001% von 9.4 Mia CHF</p>
                    {% else %}
                    <p class=\"mt-0 italic\" style=\"font-size: 0.7rem;\">{{ (step.amount / 9400000000 * 100) |round(3)}}%
                        von
                        9.4 Mia CHF</p>
                    {% endif %}
        </div>
    </div>
</div>
{% endif %}", "elements/chart/partials/block.html", "/var/www/html/templates/elements/chart/partials/block.html");
    }
}
