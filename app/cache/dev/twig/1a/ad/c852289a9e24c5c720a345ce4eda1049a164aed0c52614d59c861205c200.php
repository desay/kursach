<?php

/* UloginAuthBundle::widget.html.twig */
class __TwigTemplate_1aadc852289a9e24c5c720a345ce4eda1049a164aed0c52614d59c861205c200 extends Twig_Template
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
        $context["label"] = ((array_key_exists("label", $context)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans("sign_via_social", array(), "UloginAuthBundle")));
        // line 2
        echo "
<script src=\"//ulogin.ru/js/ulogin.js\"></script>

<span>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "</span>
";
        // line 6
        $context["id"] = (((isset($context["uLoginID"]) ? $context["uLoginID"] : $this->getContext($context, "uLoginID")) . "_") . twig_random($this->env));
        // line 7
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" data-uloginid=\"";
        echo twig_escape_filter($this->env, (isset($context["uLoginID"]) ? $context["uLoginID"] : $this->getContext($context, "uLoginID")), "html", null, true);
        echo "\" data-ulogin=\"redirect_uri=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->env->getExtension('routing')->getUrl("ulogin_auth_index", array("backurl" => $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"))))), "html", null, true);
        echo "\"></div>
<script>uLogin.customInit('";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');</script>";
    }

    public function getTemplateName()
    {
        return "UloginAuthBundle::widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  32 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
