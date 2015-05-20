<?php

/* @App/index.html.twig */
class __TwigTemplate_b03ff314242834b49ef570629535c7df1608814db5e7aeb5e25489163cf43b14 extends Twig_Template
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
        <div id=\"mainImg\"></div>

        <div class=\"results\">
            <div class=\"resultsDiv\">
                <div class=\"result\">
                    <img class=\"icon\" src=\"/icons/iconmonstr-microphone-5-icon.svg\">
                    <h3>Выступайте</h3>
                    <p>Вдохновляйте и меняйте мнение как единичного слушателя, так и самой большой толпы.</p>
                </div>
                <div class=\"result\">
                    <img class=\"icon\" src=\"/icons/iconmonstr-coin-10-icon.svg\">
                    <h3>Продавайте</h3>
                    <p>Вселяйте уверенность и убеждайте даже самых сложных покупателей.</p>
                </div>
                <div class=\"result\">
                    <img class=\"icon\" src=\"/icons/iconmonstr-speech-bubble-14-icon.svg\">
                    <h3>Общайтесь</h3>
                    <p>Доносите свою мысль до собеседника красиво и точно.</p>
                </div>
            </div>
        </div>

        <div class=\"content\">
            <h2 class=\"link\"><a href=\"/news\" id=\"newsLink\">Последние новости</a></h2>

            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 36
            echo "            <div class=\"block\">
                <div class=\"imageDiv\"></div>";
            // line 38
            echo "                <article>
                    <h3 class=\"link\"><a href=\"\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></h3>
                    <p class=\"shortText\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "description", array()), "html", null, true);
            echo "</p>
                    <p class=\"date\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "dateCreate", array()), "d.m.Y"), "html", null, true);
            echo "</p>
                </article>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </main>

";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@App/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  115 => 50,  108 => 45,  98 => 41,  94 => 40,  90 => 39,  87 => 38,  84 => 36,  80 => 35,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
