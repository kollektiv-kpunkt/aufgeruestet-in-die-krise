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

/* elements/scale.html */
class __TwigTemplate_bb47987f235ec06e0b23665708f8f62996e7332ec37c63377c363d39dc7acdf9 extends Template
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
        echo "<div class=\"text-white\">
    <div class=\"gsoa-fp-screen gsoa-fp-scale h-full flex gsoa-set-width relative gsoa-set-width items-center\"
        style=\"--amount: 300000000\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scale"] ?? null), "blocks", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 5
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 5) == "text")) {
                // line 6
                echo "        ";
                $this->loadTemplate("elements/chart/partials/text.html", "elements/scale.html", 6)->display(twig_to_array(["step" => $context["step"], "color" => "text-white"]));
                // line 7
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 7) == "block")) {
                // line 8
                echo "        ";
                $this->loadTemplate("elements/chart/partials/block.html", "elements/scale.html", 8)->display(twig_to_array(["step" => $context["step"]]));
                // line 9
                echo "        ";
            }
            // line 10
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/scale.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-white\">
    <div class=\"gsoa-fp-screen gsoa-fp-scale h-full flex gsoa-set-width relative gsoa-set-width items-center\"
        style=\"--amount: 300000000\">
        {% for step in scale.blocks %}
        {% if step.type == \"text\" %}
        {% include \"elements/chart/partials/text.html\" with {\"step\": step, color: \"text-white\"} only %}
        {% elseif step.type == \"block\" %}
        {% include \"elements/chart/partials/block.html\" with {\"step\": step} only %}
        {% endif %}
        {% endfor %}
    </div>
</div>", "elements/scale.html", "/var/www/html/templates/elements/scale.html");
    }
}
