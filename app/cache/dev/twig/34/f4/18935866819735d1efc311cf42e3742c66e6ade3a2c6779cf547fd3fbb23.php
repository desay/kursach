<?php

/* @Admin/News/edit.html.twig */
class __TwigTemplate_34f418935866819735d1efc311cf42e3742c66e6ade3a2c6779cf547fd3fbb23 extends Twig_Template
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



        ";
        // line 24
        if (array_key_exists("news", $context)) {
            // line 25
            echo "            <h3>Edit news # ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id", array()), "html", null, true);
            echo "</h3>
        ";
        } else {
            // line 27
            echo "            <h3>Add new news</h3>
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
        return "@Admin/News/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  123 => 46,  116 => 15,  113 => 14,  98 => 34,  94 => 33,  90 => 32,  85 => 30,  82 => 29,  78 => 27,  72 => 25,  70 => 24,  61 => 17,  59 => 14,  52 => 9,  49 => 8,  42 => 4,  39 => 3,  11 => 1,);
    }
}
