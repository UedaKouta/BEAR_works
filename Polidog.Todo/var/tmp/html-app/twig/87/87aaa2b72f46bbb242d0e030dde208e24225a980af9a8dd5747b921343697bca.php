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

/* Page/Edit.html.twig */
class __TwigTemplate_22afb4dddf6802ac5cc56d8a1695ec86e59f66ff5737698b51ecafc83ad36147 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout/base.html.twig", "Page/Edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1 class=\"page-header\">タスク</h1>
    <div class=\"row\">
        <div class=\"col-sm-8\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">タスク編集</div>
                <div class=\"panel-body\">
                    <ul class=\"nav nav-tabs\">
  　　　　　　　　　       <li role=\"presentation\"><a href=\"/\">戻る</a></li>
                    </ul>

                    ";
        // line 14
        if (($context["todos"] ?? null)) {
            // line 15
            echo "                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>CreatedAt</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 26
                echo "                                <tr>
                                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "title", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "createdAt", [], "any", false, false, false, 29), "Y/m/d H:i:s"), "html", null, true);
                echo "</td>
                                    <td>
                                    </td>
                                </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                            </tbody>
                        </table>

                    ";
        } else {
            // line 39
            echo "                        <div class=\"panel-body\">
                            <p>タスクがありません</p>
                        </div>
                    ";
        }
        // line 43
        echo "                    ";
        echo ($context["todo_edit_form"] ?? null);
        echo "

                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Page/Edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  109 => 39,  103 => 35,  91 => 29,  87 => 28,  83 => 27,  80 => 26,  76 => 25,  64 => 15,  62 => 14,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Page/Edit.html.twig", "/Applications/MAMP/htdocs/BEAR_works/Polidog.Todo/var/templates/Page/Edit.html.twig");
    }
}
