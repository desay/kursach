<?php

/* @Admin/Trainings/edit.html.twig */
class __TwigTemplate_f5236d60c41a687832f90ea506c9b19a2734bdd352c51c304818b2f3327f9b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main_admin.html.twig", "@Admin/Trainings/edit.html.twig", 1);
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



        ";
        // line 24
        if (array_key_exists("training", $context)) {
            // line 25
            echo "            <h3>Edit training # ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "id", array()), "html", null, true);
            echo "</h3>
        ";
        } else {
            // line 27
            echo "            <h3>Add new training</h3>
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

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

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Admin/Trainings/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  115 => 46,  108 => 15,  105 => 14,  90 => 34,  86 => 33,  82 => 32,  77 => 30,  74 => 29,  70 => 27,  64 => 25,  62 => 24,  53 => 17,  51 => 14,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }
}
