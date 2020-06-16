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

/* layout/base.html.twig */
class __TwigTemplate_4b5796c13bf9b635d11fcb804a244d553fda958031e3723ab75631cdaaad160a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'contents' => [$this, 'block_contents'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "

";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
    ";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->displayBlock('contents', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 13
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"container\">
            ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        </div>
    ";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  125 => 23,  121 => 16,  117 => 15,  112 => 17,  110 => 15,  107 => 14,  103 => 13,  98 => 19,  95 => 13,  91 => 12,  85 => 7,  81 => 6,  74 => 5,  67 => 27,  65 => 23,  61 => 21,  59 => 12,  55 => 10,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/base.html.twig", "/Applications/MAMP/htdocs/works/Polidog.Todo/var/templates/layout/base.html.twig");
    }
}
