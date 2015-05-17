<?php

/* @App/Main/main.html.twig */
class __TwigTemplate_d459cd341c6c71fef6186d6fc41395aee3fc3e69bc3a1017678e53a9482eccc7 extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "

";
        // line 56
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/html5reset-1.6.1.css\">
    <link rel=\"stylesheet\" href=\"fonts/font-awesome-4.3.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/style.css\">
    <link href=\"style/mediaqueries.css\" rel=\"stylesheet\" type=\"text/css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
</head>
<body>

";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "

    ";
        // line 20
        $this->displayBlock('admin_menu', $context, $blocks);
        // line 52
        echo "
";
    }

    // line 20
    public function block_admin_menu($context, array $blocks = array())
    {
        // line 21
        echo "
        <div class=\"span3\">
            <div class=\"well sidebar-nav\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\">Привет ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " !</li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-home\"></i> Домой</a></li>
                    <li><a href=\"account.html\"><i class=\"icon-user\"></i> Mой аккаунт</a></li>

                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-file\"></i> Список новостей</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_index_trainings");
        echo "\"><i class=\"icon-file\"></i> Список курсов</a></li>

                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_news_add");
        echo "\"><i class=\"icon-file\"></i> Создать новость</a></li>
                    <li><a href=\"";
        // line 33
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

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "
<footer>
    <ul>
        <li>© 2015 Alexandra Govorkova</li>
        <li class=\"link\"><a href=\"contacts.html\" id=\"contactsLink\">Контакты</a></li>
        <li class=\"link\"><a href=\"description.html\" id=\"descriptionLink\">Описание тренингов</a></li>
        <li class=\"link\"><a href=\"success.html\" id=\"successLink\">История успеха</a></li>
    </ul>
</footer>

<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script> -->
<script type=\"text/javascript\" src=\"scripts/jquery-2.1.3.js\"></script>
<script type=\"text/javascript\" src=\"node_modules/html5-history-api/history.js\"></script>
<script type=\"text/javascript\" src=\"scripts/script.js\"></script>
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
        return array (  130 => 57,  127 => 56,  104 => 33,  100 => 32,  95 => 30,  91 => 29,  85 => 26,  81 => 25,  75 => 21,  72 => 20,  67 => 52,  65 => 20,  61 => 18,  58 => 17,  41 => 2,  38 => 1,  34 => 56,  30 => 54,  28 => 17,  25 => 16,  23 => 1,);
    }
}
