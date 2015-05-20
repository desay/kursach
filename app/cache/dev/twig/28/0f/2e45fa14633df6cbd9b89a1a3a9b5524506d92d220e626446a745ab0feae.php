<?php

/* @App/News/item.html.twig */
class __TwigTemplate_280f2e45fa14633df6cbd9b89a1a3a9b5524506d92d220e626446a745ab0feae extends Twig_Template
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
        <div class=\"content fullContent\">
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title", array()), "html", null, true);
        echo "</h2>
            <article>
                ";
        // line 13
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "image", array()) != "")) {
            // line 14
            echo "                    <div data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "image", array()), "html", null, true);
            echo "\" class=\"imageOpen\"></div>
                ";
        }
        // line 16
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "description", array()), "html", null, true);
        echo "
            </article>

            <h2>Комментарии:</h2>

            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                <br /><br /><br />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "comments", array())) == 0)) {
            // line 27
            echo "                Нет комментариев
            ";
        }
        // line 29
        echo "
            <h2>Добавить комментарий:</h2>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_start');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'widget');
        echo "
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : $this->getContext($context, "commentForm")), 'form_end');
        echo "

        </div>
    </main>



";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@App/News/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  125 => 42,  113 => 33,  109 => 32,  105 => 31,  101 => 29,  97 => 27,  95 => 26,  92 => 25,  82 => 22,  78 => 21,  69 => 16,  63 => 14,  61 => 13,  56 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
