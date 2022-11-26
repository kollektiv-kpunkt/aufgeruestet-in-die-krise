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

/* elements/header.html */
class __TwigTemplate_a4d9e26fb33d35ab3dfc84aa548d96fcae78a415ae0dd782865df7126f49c93e extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"de-CH\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " | Aufgerüstet in die Krise</title>
    <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["environment"] ?? null), "appurl", [], "any", false, false, false, 12), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
    <meta property=\"og:image\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "OG", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["environment"] ?? null), "appurl", [], "any", false, false, false, 17), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
    <meta property=\"twitter:title\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
    <meta property=\"twitter:description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
    <meta property=\"twitter:image\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "OG", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
    ";
        // line 34
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["environment"] ?? null), "appurl", [], "any", false, false, false, 34), "html", null, true);
        echo "/dist/bundle.min.css?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["environment"] ?? null), "version", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
</head>

<body>
    <div id=\"main-content\">";
    }

    public function getTemplateName()
    {
        return "elements/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  92 => 20,  88 => 19,  84 => 18,  78 => 17,  73 => 15,  69 => 14,  65 => 13,  59 => 12,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-CH\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <title>{{page.title}} | Aufgerüstet in die Krise</title>
    <meta name=\"title\" content=\"{{page.title}}\">
    <meta name=\"description\" content=\"{{page.description}}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{environment.appurl}}/{{page.slug}}\">
    <meta property=\"og:title\" content=\"{{page.title}}\">
    <meta property=\"og:description\" content=\"{{page.description}}\">
    <meta property=\"og:image\" content=\"{{page.OG}}\">
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"{{environment.appurl}}/{{page.slug}}\">
    <meta property=\"twitter:title\" content=\"{{page.title}}\">
    <meta property=\"twitter:description\" content=\"{{page.description}}\">
    <meta property=\"twitter:image\" content=\"{{page.OG}}\">
    {#
    <link rel=\"apple-touch-icon\" sizes=\"180x180\"
        href=\"{{environment.appurl}}/assets/images/favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\"
        href=\"{{environment.appurl}}/assets/images/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\"
        href=\"{{environment.appurl}}/assets/images/favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"{{environment.appurl}}/assets/images/favicon/site.webmanifest\">
    <link rel=\"mask-icon\" href=\"{{environment.appurl}}/assets/images/favicon/safari-pinned-tab.svg\" color=\"#034663\">
    <link rel=\"shortcut icon\" href=\"{{environment.appurl}}/assets/images/favicon/favicon.ico\">
    <meta name=\"msapplication-TileColor\" content=\"#9bbccb\">
    <meta name=\"msapplication-config\" content=\"{{environment.appurl}}/assets/images/favicon/browserconfig.xml\">
    <meta name=\"theme-color\" content=\"#04587C\"> #}
    <link rel=\"stylesheet\" href=\"{{environment.appurl}}/dist/bundle.min.css?v={{environment.version}}\">
</head>

<body>
    <div id=\"main-content\">", "elements/header.html", "/var/www/html/templates/elements/header.html");
    }
}
