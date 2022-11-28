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
        echo "<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-mid bg-accent relative gsoa-set-width items-center\"
    style=\"--amount: 9400000000\">
    <div class=\"gsoa-sticker font-extrabold text-xl h-full\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 9400000000, 0, ".", "'"), "html", null, true);
        echo " CHF
    </div>
    <div class=\"gsoa-fp-chart-scale\"></div>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 9
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 9) == "text")) {
                // line 10
                echo "    ";
                $this->loadTemplate("elements/chart/partials/text.html", "elements/chart/mid.html", 10)->display(twig_to_array(["step" => $context["step"], "color" => "text-black"]));
                // line 11
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 11) == "block")) {
                // line 12
                echo "    ";
                $this->loadTemplate("elements/chart/partials/block.html", "elements/chart/mid.html", 12)->display(twig_to_array(["step" => $context["step"]]));
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
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
        return array (  75 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set steps = config.mid %}
<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-mid bg-accent relative gsoa-set-width items-center\"
    style=\"--amount: 9400000000\">
    <div class=\"gsoa-sticker font-extrabold text-xl h-full\">
        {{9400000000|number_format(0, '.', \"'\")}} CHF
    </div>
    <div class=\"gsoa-fp-chart-scale\"></div>
    {% for step in steps %}
    {% if step.type == \"text\" %}
    {% include \"elements/chart/partials/text.html\" with {\"step\": step, color: \"text-black\"} only %}
    {% elseif step.type == \"block\" %}
    {% include \"elements/chart/partials/block.html\" with {\"step\": step} only %}
    {% endif %}
    {% endfor %}
</div>", "elements/chart/mid.html", "/var/www/html/templates/elements/chart/mid.html");
    }
}
