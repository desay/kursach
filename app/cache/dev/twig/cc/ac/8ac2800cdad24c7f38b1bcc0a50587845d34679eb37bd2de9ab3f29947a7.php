<?php

/* @App/News/news.html.twig */
class __TwigTemplate_ccac8ac2800cdad24c7f38b1bcc0a50587845d34679eb37bd2de9ab3f29947a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main.html.twig", "@App/News/news.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <header>
        <div class=\"headerDiv\">
            <div class=\"upperHeader\">
                <h1><span class=\"logo\">BodyLanguage</span><span class=\"hideEl\"> - </span><span>тренинги публичных выступлений</span></h1>
                <p class=\"signIn\">Вход/Регистрация</p>
                <i class=\"fa fa-bars\"></i>
            </div>
            <nav>
                <ul>
                    <li class=\"link\"><a id=\"mainLink\" href=\"index.html\">Главная</a></li>
                    <li class=\"link\"><a class=\"current\" href=\"news.html\" id=\"newsLink\">Новости</a></li>
                    <li class=\"link\"><a href=\"description.html\" id=\"descriptionLink\">Описание тренингов</a></li>
                    <li class=\"link\"><a href=\"success.html\" id=\"successLink\">История успеха</a></li>
                    <li class=\"link\"><a href=\"contacts.html\" id=\"contactsLink\">Контакты</a></li>
                    <p class=\"signIn\">Вход/Регистрация</p>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class=\"content\">
            <h2>Последние новости</h2>

                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 33
            echo "            <div class=\"block\">
                    ";
            // line 34
            if (($this->getAttribute($context["news"], "image", array()) != "")) {
                // line 35
                echo "                   <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "image", array()), "html", null, true);
                echo "\" style=\"width:100px; height:100px\" class=\"img-circle\">
                    ";
            }
            // line 37
            echo "                <article>
                    <h3 class=\"link\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_item", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></h3>
                    <p class=\"shortText\">";
            // line 39
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
        // line 44
        echo "


        </div>
    </main>

";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "    ";
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
        return array (  117 => 53,  114 => 52,  104 => 44,  93 => 39,  87 => 38,  84 => 37,  78 => 35,  76 => 34,  73 => 33,  69 => 32,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
