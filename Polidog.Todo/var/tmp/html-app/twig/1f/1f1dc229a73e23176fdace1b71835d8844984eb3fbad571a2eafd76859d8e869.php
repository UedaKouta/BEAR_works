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
                    ";
        // line 10
        if (($context["todos"] ?? null)) {
            // line 11
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
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                // line 22
                echo "                                <tr>
                                    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "title", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "createdAt", [], "any", false, false, false, 25), "Y/m/d H:i:s"), "html", null, true);
                echo "</td>
                                    <td>
                                        ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["todo"], "status", [], "any", false, false, false, 27) == 1)) {
                    // line 28
                    echo "                                            <!-- <a class=\"btn btn-success\" href=\"/done?id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\">Done</a>
                                            <a class=\"btn btn-danger\" href=\"/delete?id=";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\">del</a> -->
                                            <a class=\"btn btn-success\" href=\"../src/Resource/Page/done?id=";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 30), "html", null, true);
                    echo "\">Done</a>
                                            <a class=\"btn btn-danger\" href=\"/delete?id=";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "id", [], "any", false, false, false, 31), "html", null, true);
                    echo "\">del</a>
                                        ";
                }
                // line 33
                echo "                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            </tbody>
                        </table>

                    ";
        } else {
            // line 40
            echo "                        <div class=\"panel-body\">
                            <p>タスクがありません</p>
                        </div>
                    ";
        }
        // line 44
        echo "                </div>
            </div>

        </div>
        <div class=\"col-sm-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">新規作成</div>
                <div class=\"panel-body\">
                    ";
        // line 52
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
        return array (  142 => 52,  132 => 44,  126 => 40,  120 => 36,  112 => 33,  107 => 31,  103 => 30,  99 => 29,  94 => 28,  92 => 27,  87 => 25,  83 => 24,  79 => 23,  76 => 22,  72 => 21,  60 => 11,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Page/Index.html.twig", "/Applications/MAMP/htdocs/works/Polidog.Todo/var/templates/Page/Index.html.twig");
    }
}
