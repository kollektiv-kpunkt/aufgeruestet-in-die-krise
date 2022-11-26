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

/* elements/chart/mid.html */
class __TwigTemplate_70294af717ac2e4da9e593d8eda846400bd5458e39ca3dcce643494634181f23 extends Template
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
        $context["steps"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "mid", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-mid bg-accent relative gsoa-set-width items-center\" style=\"--amount: 4900000000\">
    <div class=\"gsoa-sticker font-extrabold text-xl h-full\">
        4.9 Mia CHF
    </div>
    <div class=\"gsoa-fp-chart-scale\"></div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 8
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 8) == "space")) {
                // line 9
                echo "            ";
                $this->loadTemplate("elements/chart/partials/space.html", "elements/chart/mid.html", 9)->display(twig_to_array(["step" => $context["step"]]));
                // line 10
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 10) == "text")) {
                // line 11
                echo "            ";
                $this->loadTemplate("elements/chart/partials/text.html", "elements/chart/mid.html", 11)->display(twig_to_array(["step" => $context["step"], "color" => "text-black"]));
                // line 12
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 12) == "block")) {
                // line 13
                echo "            ";
                $this->loadTemplate("elements/chart/partials/block.html", "elements/chart/mid.html", 13)->display(twig_to_array(["step" => $context["step"]]));
                // line 14
                echo "        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "elements/chart/mid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set steps = config.mid %}
<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-mid bg-accent relative gsoa-set-width items-center\" style=\"--amount: 4900000000\">
    <div class=\"gsoa-sticker font-extrabold text-xl h-full\">
        4.9 Mia CHF
    </div>
    <div class=\"gsoa-fp-chart-scale\"></div>
    {% for step in steps %}
        {% if step.type == \"space\" %}
            {% include \"elements/chart/partials/space.html\" with {\"step\": step} only %}
        {% elseif step.type == \"text\" %}
            {% include \"elements/chart/partials/text.html\" with {\"step\": step, color: \"text-black\"} only %}
        {% elseif step.type == \"block\" %}
            {% include \"elements/chart/partials/block.html\" with {\"step\": step} only %}
        {% endif %}
    {% endfor %}
</div>", "elements/chart/mid.html", "/var/www/html/templates/elements/chart/mid.html");
    }
}
