<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ec7595726959a1e200e608a32f81a7944feca88b92552a26078b1120101bfa88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "

";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <form name=\"loginForm\" class=\"form upper\" id=\"userLoginForm\" method=\"post\">
        <h3>Вход</h3>
        <p><i class=\"fa fa-vk\"></i><i class=\"fa fa-twitter\"></i><i class=\"fa fa-google-plus\"></i></p>
        <p><input type=\"text\" name=\"_username\" placeholder=\"Логин\" autofocus autocomplete=\"on\" maxlength=\"20\" required></p>
        <p><input type=\"password\" name=\"_password\" placeholder=\"*******\" autocomplete=\"on\" maxlength=\"20\" required></p>
        <p><input type=\"submit\" name=\"_submit\" value=\"Войти\"><span class=\"registration\">Регистрация</span><p>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  35 => 5,  32 => 4,  26 => 17,  24 => 4,  20 => 2,);
    }
}
