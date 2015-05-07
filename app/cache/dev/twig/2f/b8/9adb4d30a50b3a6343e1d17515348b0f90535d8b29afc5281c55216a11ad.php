<?php

/* @Admin/index.html.twig */
class __TwigTemplate_2fb89adb4d30a50b3a6343e1d17515348b0f90535d8b29afc5281c55216a11ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@App/Main/main_admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'admin_menu' => array($this, 'block_admin_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/Main/main_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "

    <div class=\"container\">
    <div class=\"row\">

    ";
        // line 14
        $this->displayBlock('admin_menu', $context, $blocks);
        // line 17
        echo "

    <div class=\"span9\">
    <div class=\"well\">
    <div class=\"page-header\">
        <ul class=\"nav nav-tabs\">
            <li";
        // line 23
        if ((isset($context["isNews"]) ? $context["isNews"] : $this->getContext($context, "isNews"))) {
            echo " class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">Список новостей</a>
            </li>
            <li";
        // line 26
        if (((isset($context["isNews"]) ? $context["isNews"] : $this->getContext($context, "isNews")) == false)) {
            echo " class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_index_trainings");
        echo "\">Список курсов</a>
            </li>
        </ul>
        <h1>Список новостей</h1>
    </div>

    <table class=\"table table-bordered table-striped\">

    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>


    <tbody>

    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 49
            echo "    <tr>
        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "dateCreate", array()), "d.m.Y"), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 54
            if (($this->getAttribute($context["news"], "status", array()) == 0)) {
                // line 55
                echo "                <span class=\"label  \"> TODO</span>
            ";
            } elseif (($this->getAttribute(            // line 56
$context["news"], "status", array()) == 1)) {
                // line 57
                echo "                <span class=\"label label-success \"> DONE</span>
            ";
            }
            // line 59
            echo "        </td>
        <td>
            <a class=\"btn btn-mini btn-primary\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit icon-white\"></i> Edit</a>
            <a class=\"btn btn-mini btn-danger\" data-toggle=\"modal\" href=\"#confirm_delete_";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "\"><i
                        class=\"icon-remove icon-white\"></i> Delete</a>

            <div class=\"modal hide\" id=\"confirm_delete_";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Confirmation</h3>
                </div>
                <div class=\"modal-body\">
                    <p>Are you sure to delete news with id ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo " ?</p>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"todoId\" value=\"2\">
                        <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cancel</a>
                        <button type=\"submit\" class=\"btn btn-primary\">Confirm</button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"2\">
            <div align=\"center\">Total = <span class=\"badge badge-inverse\">10</span></div>
        </td>
        <td colspan=\"2\">
            <div align=\"center\">Todo = <span class=\"badge\">5</span></div>
        </td>
        <td colspan=\"2\">
            <div align=\"center\">Done = <span class=\"badge badge-success\">5</span></div>
        </td>
    </tr>
    </tfoot>
    </table>


    <div align=\"center\">
        <button class=\"btn\" onclick=\"javascript:window.print()\">
            <i class=\"icon-print\"></i>
            Print my todo list
        </button>
    </div>


    </div>
    </div>
    </div>
    </div>




";
    }

    // line 14
    public function block_admin_menu($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->displayParentBlock("admin_menu", $context, $blocks);
        echo "
    ";
    }

    // line 120
    public function block_footer($context, array $blocks = array())
    {
        // line 121
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 121,  234 => 120,  227 => 15,  224 => 14,  186 => 84,  170 => 74,  164 => 71,  155 => 65,  149 => 62,  145 => 61,  141 => 59,  137 => 57,  135 => 56,  132 => 55,  130 => 54,  125 => 52,  121 => 51,  117 => 50,  114 => 49,  110 => 48,  86 => 27,  80 => 26,  75 => 24,  69 => 23,  61 => 17,  59 => 14,  52 => 9,  49 => 8,  42 => 4,  39 => 3,  11 => 1,);
    }
}
