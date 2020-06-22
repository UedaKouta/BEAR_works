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

/* /error/error.html.twig */
class __TwigTemplate_982dcc11728fb3623d918799de69f2540db972aba9ec6ecb332cd30845991851 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/base.html.twig", "/error/error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "code", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "message", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "code", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "message", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "code", [], "any", false, false, false, 5) == 404)) {
            // line 6
            echo "        <p class=\"lead\">The requested URL was not found on this server.</p>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 7
($context["status"] ?? null), "code", [], "any", false, false, false, 7) == 500)) {
            // line 8
            echo "        <p class=\"lead\">The server encountered an internal error.</p>
        <p > logref: ";
            // line 9
            echo twig_escape_filter($this->env, ($context["logref"] ?? null), "html", null, true);
            echo "</p>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 10
($context["status"] ?? null), "code", [], "any", false, false, false, 10) == 503)) {
            // line 11
            echo "        <p class=\"lead\">The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.</p>
        <p > logref: ";
            // line 12
            echo twig_escape_filter($this->env, ($context["logref"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/error/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  83 => 11,  81 => 10,  77 => 9,  74 => 8,  72 => 7,  69 => 6,  67 => 5,  60 => 4,  56 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/error/error.html.twig", "/Applications/MAMP/htdocs/BEAR_works/Polidog.Todo/var/templates/error/error.html.twig");
    }
}
