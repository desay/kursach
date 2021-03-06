<?php

/* @App/Main/main.html.twig */
class __TwigTemplate_989fbff2f0ac57b9ed09148ab56dfb69ba38cc64fee2e405a34629ae92305bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'admin_menu' => array($this, 'block_admin_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "

";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "    <!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>BodyLanguage - тренинги публичных выступлений</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/html5reset-1.6.1.css\">
    <link rel=\"stylesheet\" href=\"/fonts/font-awesome-4.3.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/style/style.css\">
    <link href=\"/style/mediaqueries.css\" rel=\"stylesheet\" type=\"text/css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
</head>
<body>

<header>
    <div class=\"headerDiv\">
        <div class=\"upperHeader\">
            <h1><span class=\"logo\">BodyLanguage</span><span class=\"hideEl\"> - </span><span>тренинги публичных выступлений</span></h1>
            <p class=\"signIn\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Вход/Регистрация</a></p>
            <i class=\"fa fa-bars\"></i>
        </div>
        <nav>
            <ul>
                <li class=\"link\"><a class=\"current\" id=\"mainLink\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Главная</a></li>
                <li class=\"link\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">Новости</a></li>
                <li class=\"link\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("trainings");
        echo "\" id=\"descriptionLink\">Описание тренингов</a></li>
                <li class=\"link\"><a href=\"success.html\" id=\"successLink\">История успеха</a></li>
                <li class=\"link\"><a href=\"contacts.html\" id=\"contactsLink\">Контакты</a></li>

            </ul>
        </nav>
    </div>
</header>

";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "

    ";
        // line 40
        $this->displayBlock('admin_menu', $context, $blocks);
        // line 72
        echo "
";
    }

    // line 40
    public function block_admin_menu($context, array $blocks = array())
    {
        // line 41
        echo "
        <div class=\"span3\">
            <div class=\"well sidebar-nav\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\">Привет ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " !</li>
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-home\"></i> Домой</a></li>
                    <li><a href=\"account.html\"><i class=\"icon-user\"></i> Mой аккаунт</a></li>

                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-file\"></i> Список новостей</a></li>
                    <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("admin_index_trainings");
        echo "\"><i class=\"icon-file\"></i> Список курсов</a></li>

                    <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_news_add");
        echo "\"><i class=\"icon-file\"></i> Создать новость</a></li>
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_trainings_add");
        echo "\"><i class=\"icon-file\"></i> Создать курс</a></li>



                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">Поиск по новостям и курсам:</li>
                    <li>
                        <form class=\"form-search\" action=\"searchTodo.html\" id=\"searchForm\" method=\"get\">
                            <div class=\"input-append\">
                                <input type=\"text\" name=\"title\" class=\"input-small search-query\"
                                       placeholder=\"search by title\" required=\"required\">
                                <button type=\"submit\" class=\"btn\">Go!</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    ";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "
<footer>
    <ul>
        <li>© 2015 Alexandra Govorkova</li>
        <li class=\"link\"><a href=\"/contacts.html\" id=\"contactsLink\">Контакты</a></li>
        <li class=\"link\"><a href=\"/description.html\" id=\"descriptionLink\">Описание тренингов</a></li>
        <li class=\"link\"><a href=\"/success.html\" id=\"successLink\">История успеха</a></li>
    </ul>
</footer>

<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script> -->
<script type=\"text/javascript\" src=\"/scripts/jquery-2.1.3.js\"></script>
<script type=\"text/javascript\" src=\"/node_modules/html5-history-api/history.js\"></script>
<script type=\"text/javascript\" src=\"/scripts/script.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@App/Main/main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 77,  159 => 76,  136 => 53,  132 => 52,  127 => 50,  123 => 49,  117 => 46,  113 => 45,  107 => 41,  104 => 40,  99 => 72,  97 => 40,  93 => 38,  90 => 37,  76 => 26,  72 => 25,  68 => 24,  60 => 19,  41 => 2,  38 => 1,  34 => 76,  30 => 74,  28 => 37,  25 => 36,  23 => 1,);
    }
}
