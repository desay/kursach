<?php

/* @App/News/news.html.twig */
class __TwigTemplate_93a245db1d6bfc94da74d537b3dd5ae86e1004e1064f330be533c8ba58b6e45a extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <main>
        <div class=\"content\">
            <h2>Последние новости</h2>

                ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 14
            echo "            <div class=\"block\">
                    ";
            // line 15
            if (($this->getAttribute($context["news"], "image", array()) != "")) {
                // line 16
                echo "                   <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "image", array()), "html", null, true);
                echo "\" style=\"width:100px; height:100px\" class=\"img-circle\">
                    ";
            }
            // line 18
            echo "                <article>
                    <h3 class=\"link\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_item", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></h3>
                    <p class=\"shortText\">";
            // line 20
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
        // line 25
        echo "


        </div>
    </main>

";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
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
        return array (  106 => 34,  103 => 33,  93 => 25,  82 => 20,  76 => 19,  73 => 18,  67 => 16,  65 => 15,  62 => 14,  58 => 13,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
