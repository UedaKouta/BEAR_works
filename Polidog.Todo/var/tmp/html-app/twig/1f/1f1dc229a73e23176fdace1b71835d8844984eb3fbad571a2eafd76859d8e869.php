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

/* Page/Index.html.twig */
class __TwigTemplate_1b3e9e852d9fb5f4b978ec224af5212eab4f95288c2b45a4f86943e53d3ed706 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/base.html.twig", "Page/Index.html.twig", 1);
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
                <div class=\"panel-heading\">タスク一覧</div>
                <div class=\"panel-body\">
                    <ul class=\"nav nav-tabs\">
  　　　　　　　　　       <li role=\"presentation\"";
        // line 11
        if ((($context["status"] ?? null) == 0)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/\">all</a></li>
                        <li role=\"presentation\"";
        // line 12
        if ((($context["status"] ?? null) == 1)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/?status=1\">未完了</a></li>
                        <li role=\"presentation\"";
        // line 13
        if ((($context["status"] ?? null) == 2)) {
            echo " class=\"active\"";
        }
        echo "><a href=\"/?status=2\">完了</a></li>
                    </ul>

                    ";
        // line 16
        if (($context["todos"] ?? null)) {
            // line 17
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
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 28
                echo "                                <tr>
                                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "title", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "createdAt", [], "any", false, false, false, 31), "Y/m/d H:i:s"), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, $context["todo"], "status", [], "any", false, false, false, 33) == 1)) {
                    // line 34
                    echo "                                            <!-- <a class=\"btn btn-success\" href=\"/done?id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">Done</a>
                                            <a class=\"btn btn-danger\" href=\"/delete?id=";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">del</a> -->
                                            <a class=\"btn btn-success\" href=\"/done?id=";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">Done</a>
                                            <a class=\"btn btn-danger\" href=\"/delete?id=";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 37), "html", null, true);
                    echo "\">del</a>
                                        ";
                }
                // line 39
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </tbody>
                        </table>

                    ";
        } else {
            // line 46
            echo "                        <div class=\"panel-body\">
                            <p>タスクがありません</p>
                        </div>
                    ";
        }
        // line 50
        echo "                </div>
            </div>

        </div>
        <div class=\"col-sm-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">新規作成</div>
                <div class=\"panel-body\">
                    ";
        // line 58
        echo ($context["todo_form"] ?? null);
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Page/Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  153 => 50,  147 => 46,  141 => 42,  133 => 39,  128 => 37,  124 => 36,  120 => 35,  115 => 34,  113 => 33,  108 => 31,  104 => 30,  100 => 29,  97 => 28,  93 => 27,  81 => 17,  79 => 16,  71 => 13,  65 => 12,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Page/Index.html.twig", "/Applications/MAMP/htdocs/BEAR_works/Polidog.Todo/var/templates/Page/Index.html.twig");
    }
}
