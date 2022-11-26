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

/* elements/chart/partials/space.html */
class __TwigTemplate_ba98781d5d79aed2f95430a774d553a21db7842815fbdd3422b2ce60e9468c82 extends Template
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
        echo "<div class=\"gsoa-fp-chart-element gsoa-fp-chart-spacer gsoa-set-width\" style=\"--amount: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["step"] ?? null), "amount", [], "any", false, false, false, 1), "html", null, true);
        echo " \"></div>";
    }

    public function getTemplateName()
    {
        return "elements/chart/partials/space.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gsoa-fp-chart-element gsoa-fp-chart-spacer gsoa-set-width\" style=\"--amount: {{step.amount}} \"></div>", "elements/chart/partials/space.html", "/var/www/html/templates/elements/chart/partials/space.html");
    }
}
