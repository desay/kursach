<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_80e55cfae4531010bb9f978ddb678b7bd62fc559a2462e18967923eeb296e10e extends Twig_Template
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
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "

";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <form name=\"loginForm\" class=\"form upper\" id=\"userLoginForm\" method=\"post\">
        <h3>Вход</h3>
        <p><i class=\"fa fa-vk\"></i><i class=\"fa fa-twitter\"></i><i class=\"fa fa-google-plus\"></i></p>
        <p><input type=\"text\" name=\"_username\" placeholder=\"Логин\" autofocus autocomplete=\"on\" maxlength=\"20\" required></p>
        <p><input type=\"password\" name=\"_password\" placeholder=\"*******\" autocomplete=\"on\" maxlength=\"20\" required></p>
        <p><input type=\"submit\" name=\"_submit\" value=\"Войти\"><span class=\"registration\">Регистрация</span><p>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
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
        return array (  41 => 11,  31 => 3,  28 => 2,  22 => 15,  20 => 2,);
    }
}
