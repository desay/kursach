<?php

/* @App/Main/registrationForm.html.twig */
class __TwigTemplate_5423c9494b83739266ba5445f89c00ff283cae0cfd4ad5b381df26ac499491f1 extends Twig_Template
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
        echo "
<div class=\"containerDiv\">
\t<form name=\"registrationForm\" class=\"form upper\" id=\"userRegisterForm\">
\t\t<h3>Регистрация</h3>
\t\t<p>Email<br><input type=\"text\" name=\"fos_user_registration_form[email]\" autofocus maxlength=\"20\" required></p>
\t\t<p>Логин<br><input type=\"text\" name=\"fos_user_registration_form[username]\" autofocus maxlength=\"20\" required></p>
\t\t<p>Пароль<br><input type=\"password\" name=\"fos_user_registration_form[plainPassword][first]\" maxlength=\"20\" required></p>
\t\t<p>Повторите пароль<br><input type=\"password\" name=\"fos_user_registration_form[plainPassword][second]\" maxlength=\"20\" required></p>
\t\t<p><input type=\"submit\" value=\"Зарегистрироваться\"><p>
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
\t</form>
</div>


";
    }

    public function getTemplateName()
    {
        return "@App/Main/registrationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
