<?php

/* @App/Main/main_admin.html.twig */
class __TwigTemplate_ea7c68e9e69a4a9abd80c161f6588386421868cfe6ba42d33cddf7e63c6de24c extends Twig_Template
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
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "

";
        // line 101
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "    <!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <link rel=\"shortcut icon\" href=\"/static/img/todolist.ico\"/>

    <title>Курсы ораторского мастерства</title>

    <!-- Le styles -->
    <link rel=\"stylesheet\" href=\"css/normalize.css\" />
    <link rel=\"stylesheet\" href=\"css/foundation.min.css\" />
    <link rel=\"stylesheet\" href=\"css/style.css\" />
    <link rel=\"stylesheet\" href=\"css/ie.css\" />

    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:600' rel='stylesheet' type='text/css'>


    <link href=\"/static/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/static/css/datepicker.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
        body {
            padding-top: 60px;
            /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>

    <!-- Le javascript -->
    <script src=\"/static/js/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
    <script src=\"/static/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"/static/js/bootstrap-datepicker.js\" type=\"text/javascript\"></script>

</head>
<body>

<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"/\">Курсы ораторского мастерства</a>

            <ul class=\"nav\">
                <li class=\"\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("trainings");
        echo "\">Список курсов</a></li>
                <li class=\"\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">Новости</a></li>
            </ul>

            <ul class=\"nav pull-right\">

                ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "                    <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Выход</a></li>
                ";
        } else {
            // line 53
            echo "                    <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Регистрация</a></li>
                    <li class=\"\"><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Вход</a></li>
                ";
        }
        // line 56
        echo "            </ul>


        </div>
    </div>
</div>
";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('admin_menu', $context, $blocks);
        // line 97
        echo "
";
    }

    // line 66
    public function block_admin_menu($context, array $blocks = array())
    {
        // line 67
        echo "        <div class=\"span3\">


            <div class=\"well sidebar-nav\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\">Привет ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " !</li>
                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-home\"></i> Домой</a></li>
                    <li><a href=\"account.html\"><i class=\"icon-user\"></i> Mой аккаунт</a></li>

                    <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-file\"></i> Список новостей</a></li>
                    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("admin_index_trainings");
        echo "\"><i class=\"icon-file\"></i> Список курсов</a></li>

                    <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("admin_news_add");
        echo "\"><i class=\"icon-file\"></i> Создать новость</a></li>
                    <li><a href=\"";
        // line 80
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

    // line 101
    public function block_footer($context, array $blocks = array())
    {
        // line 102
        echo "
<footer>
    <div class=\"container\">
        <div class=\"row well\">
            <div align=\"center\">
                <p>&copy; 2015 Volga Pavluchenko</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@App/Main/main_admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 102,  192 => 101,  171 => 80,  167 => 79,  162 => 77,  158 => 76,  152 => 73,  148 => 72,  141 => 67,  138 => 66,  133 => 97,  131 => 66,  128 => 65,  125 => 64,  115 => 56,  110 => 54,  105 => 53,  99 => 51,  97 => 50,  89 => 45,  85 => 44,  41 => 2,  38 => 1,  34 => 101,  30 => 99,  28 => 64,  25 => 63,  23 => 1,);
    }
}
