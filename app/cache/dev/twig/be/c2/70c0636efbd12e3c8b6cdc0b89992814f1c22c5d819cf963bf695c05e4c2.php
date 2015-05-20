<?php

/* @App/Main/loginForm.html.twig */
class __TwigTemplate_bec270c0636efbd12e3c8b6cdc0b89992814f1c22c5d819cf963bf695c05e4c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"background\"></div>
<div class=\"containerDiv\">
    ";
        // line 3
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@App/Main/loginForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }
}
