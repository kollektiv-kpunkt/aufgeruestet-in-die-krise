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

/* elements/chart/upper.html */
class __TwigTemplate_bbd994aeca7d7fed8cdabb21b4f943f8bf7ab28a8e1c2fe721f44d0829a7e5f7 extends Template
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
        echo "<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-upper relative flex items-center\">
    ";
        // line 2
        $context["steps"] = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "upper", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 4
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["step"], "type", [], "any", false, false, false, 4) == "text")) {
                // line 5
                echo "    ";
                $this->loadTemplate("elements/chart/partials/text.html", "elements/chart/upper.html", 5)->display(twig_to_array(["step" => $context["step"]]));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "elements/chart/upper.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gsoa-fp-chart-partial gsoa-fp-chart-upper relative flex items-center\">
    {% set steps = config.upper %}
    {% for step in steps %}
    {% if step.type == \"text\" %}
    {% include \"elements/chart/partials/text.html\" with {\"step\": step} only %}
    {% endif %}
    {% endfor %}

</div>", "elements/chart/upper.html", "/var/www/html/templates/elements/chart/upper.html");
    }
}
