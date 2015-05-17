<?php

/* AppBundle:News:item.html.twig */
class __TwigTemplate_7dc7e4cc75579955524cc5ca9bd0809afab4598d370bc0451de93e9aced93a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main.html.twig", "AppBundle:News:item.html.twig", 1);
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

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12\">

                <div class=\"panel\">
                    <div class=\"panel-body\">

                        <!--/stories-->
                        <div class=\"row\">
                            <br>
                            ";
        // line 20
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "image", array()) != "")) {
            // line 21
            echo "                            <div class=\"col-md-2 col-sm-3 text-center\">
                                <a class=\"story-img\" href=\"#\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "image", array()), "html", null, true);
            echo "\" style=\"width:100px;height:100px\" class=\"img-circle\"></a>
                            </div>
                            ";
        }
        // line 25
        echo "                            <div class=\"col-md-10 col-sm-9\">
                                <h3>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array()), "html", null, true);
        echo "</h3>
                                <div class=\"row\">
                                    <div class=\"col-xs-9\">
                                        <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "description", array()), "html", null, true);
        echo "</p>
                                        <p class=\"lead\"><button class=\"btn btn-default\">Read More</button></p>
                                        <ul class=\"list-inline\"><li><a href=\"#\">";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "dateCreate", array()), "d.m.Y"), "html", null, true);
        echo "</a></li><li><a href=\"#\"><i class=\"glyphicon glyphicon-comment\"></i> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "comments", array())), "html", null, true);
        echo " Comments</a></li><li><a href=\"#\"><i class=\"glyphicon glyphicon-share\"></i> 34 Shares</a></li></ul>
                                    </div>
                                    <div class=\"col-xs-3\"></div>
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>


                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 45
            echo "
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "
                    <br />

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "


            </div><!--/col-12-->
        </div>
    </div>
";
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:News:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  126 => 58,  116 => 50,  106 => 46,  103 => 45,  99 => 44,  81 => 31,  76 => 29,  70 => 26,  67 => 25,  61 => 22,  58 => 21,  56 => 20,  43 => 9,  40 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
