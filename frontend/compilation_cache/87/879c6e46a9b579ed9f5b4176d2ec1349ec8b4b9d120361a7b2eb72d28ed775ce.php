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

/* elements/footer.html */
class __TwigTemplate_fc57446c2d2858fd2e9577768f2114eeb0be8b9eee020c262f21ecad56fc9343 extends Template
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
        echo "</div>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["environment"] ?? null), "appurl", [], "any", false, false, false, 2), "html", null, true);
        echo "/dist/app.min.js?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["environment"] ?? null), "version", [], "any", false, false, false, 2), "html", null, true);
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "elements/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</div>
<script src=\"{{environment.appurl}}/dist/app.min.js?v={{environment.version}}\"></script>
</body>

</html>", "elements/footer.html", "/var/www/html/templates/elements/footer.html");
    }
}
