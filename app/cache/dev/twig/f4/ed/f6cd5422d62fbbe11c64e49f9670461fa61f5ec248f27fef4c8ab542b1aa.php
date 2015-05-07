<?php

/* @App/News/news.html.twig */
class __TwigTemplate_f4edf6cd5422d62fbbe11c64e49f9670461fa61f5ec248f27fef4c8ab542b1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@App/Main/main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/Main/main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>BodyLanguage - тренинги публичных выступлений</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/html5reset-1.6.1.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style/style.css\">
    <link rel=\"stylesheet\" href=\"fonts/font-awesome-4.3.0/css/font-awesome.min.css\">
    <link href=\"style/mediaqueries.css\" rel=\"stylesheet\" type=\"text/css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
</head>
<body>

<header>
    <div class=\"headerDiv\">
        <div class=\"upperHeader\">
            <h1><span class=\"logo\">BodyLanguage</span><span class=\"hideEl\"> - </span><span>тренинги публичных выступлений</span></h1>
            <p class=\"signIn\">Вход/Регистрация</p>
            <i class=\"fa fa-bars\"></i>
        </div>
        <nav>
            <ul>
                <li class=\"link\"><a id=\"mainLink\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Главная</a></li>
                <li class=\"link\"><a class=\"current\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\" id=\"newsLink\">Новости</a></li>
                <li class=\"link\"><a href=\"description.html\" id=\"descriptionLink\">Описание тренингов</a></li>
                <li class=\"link\"><a href=\"success.html\" id=\"successLink\">История успеха</a></li>
                <li class=\"link\"><a href=\"contacts.html\" id=\"contactsLink\">Контакты</a></li>
                <p class=\"signIn\">Вход/Регистрация</p>
            </ul>
        </nav>
    </div>
</header>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "
    <main>
        <div class=\"content\">
            <h2>Последние новости</h2>

                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 45
            echo "            <div class=\"block\">
                        <div class=\"imageDiv\"></div>";
            // line 47
            echo "                <article>
                    <h3 class=\"link\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_item", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></h3>
                    <p class=\"shortText\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "description", array()), "html", null, true);
            echo "</p>
                    <p class=\"date\">01.04.2015</p>
                </article>
            </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "


        </div>
    </main>
    <script type=\"text/javascript\" src=\"scripts/jquery-2.1.3.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/history.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/jquery.nicescroll.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/script.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/pagination.js\"></script>

";
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "
    ";
        // line 69
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@App/News/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  138 => 68,  135 => 67,  120 => 54,  109 => 49,  103 => 48,  100 => 47,  97 => 45,  93 => 44,  86 => 39,  83 => 38,  69 => 27,  65 => 26,  41 => 4,  38 => 3,  11 => 1,);
    }
}
