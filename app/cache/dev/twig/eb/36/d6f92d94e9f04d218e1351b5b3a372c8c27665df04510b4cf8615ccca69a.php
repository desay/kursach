<?php

/* @Admin/trainings.html.twig */
class __TwigTemplate_eb36d6f92d94e9f04d218e1351b5b3a372c8c27665df04510b4cf8615ccca69a extends Twig_Template
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
            <li>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">Список новостей</a>
            </li>
            <li class=\"active\">
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_index_trainings");
        echo "\">Список курсов</a>
            </li>
        </ul>
        <h1>Список курсов</h1>
    </div>

    <table class=\"table table-bordered table-striped\">

    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>


    <tbody>

    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings")));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 48
            echo "    <tr>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "title", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "dateCreate", array()), "d.m.Y"), "html", null, true);
            echo "</td>

        <td>
            <a class=\"btn btn-mini btn-primary\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_trainings_edit", array("id" => $this->getAttribute($context["training"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit icon-white\"></i> Edit</a>
            <a class=\"btn btn-mini btn-danger\" data-toggle=\"modal\" href=\"#confirm_delete_";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "id", array()), "html", null, true);
            echo "\"><i
                        class=\"icon-remove icon-white\"></i> Delete</a>

            <div class=\"modal hide\" id=\"confirm_delete_";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "id", array()), "html", null, true);
            echo "\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
                    <h3>Confirmation</h3>
                </div>
                <div class=\"modal-body\">
                    <p>Are you sure to delete training with id ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "id", array()), "html", null, true);
            echo " ?</p>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_trainings_delete", array("id" => $this->getAttribute($context["training"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
    </tbody>

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

    // line 101
    public function block_footer($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Admin/trainings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 102,  197 => 101,  190 => 15,  187 => 14,  161 => 77,  145 => 67,  139 => 64,  130 => 58,  124 => 55,  120 => 54,  114 => 51,  110 => 50,  106 => 49,  103 => 48,  99 => 47,  76 => 27,  70 => 24,  61 => 17,  59 => 14,  52 => 9,  49 => 8,  42 => 4,  39 => 3,  11 => 1,);
    }
}
