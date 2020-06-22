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

/* /redirect/redirect.html.twig */
class __TwigTemplate_a5b5bcea069e27d80ef203c4d438bdebb173d503544ce32d1e72b20c196a193b extends \Twig\Template
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
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"refresh\" content=\"0;url=";
        // line 5
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" />
    <title>Redirecting to ";
        // line 6
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "</title>
  </head>
  <body>
    Redirecting to <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "</a>.
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/redirect/redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/redirect/redirect.html.twig", "/Applications/MAMP/htdocs/BEAR_works/Polidog.Todo/var/templates/redirect/redirect.html.twig");
    }
}
