<?php

/* AppBundle:News:news.html.twig */
class __TwigTemplate_ccac8ac2800cdad24c7f38b1bcc0a50587845d34679eb37bd2de9ab3f29947a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main.html.twig", "AppBundle:News:news.html.twig", 1);
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

                        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 18
            echo "
                        <!--/stories-->
                        <div class=\"row\">
                            <br>
                            ";
            // line 22
            if (($this->getAttribute($context["news"], "image", array()) != "")) {
                // line 23
                echo "                            <div class=\"col-md-2 col-sm-3 text-center\">
                                <a class=\"story-img\" href=\"#\"><img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "image", array()), "html", null, true);
                echo "\" style=\"width:100px;height:100px\" class=\"img-circle\"></a>
                            </div>
                            ";
            }
            // line 27
            echo "                            <div class=\"col-md-10 col-sm-9\">
                                <h3>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</h3>
                                <div class=\"row\">
                                    <div class=\"col-xs-9\">
                                        <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "description", array()), "html", null, true);
            echo "</p>
                                        <p class=\"lead\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_item", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-default\">Read More</button></a></p>
                                        <ul class=\"list-inline\"><li><a href=\"#\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "dateCreate", array()), "d.m.Y"), "html", null, true);
            echo "</a></li><li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_item", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-comment\"></i> ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["news"], "comments", array())), "html", null, true);
            echo " Comments</a></li><li><a href=\"#\"><i class=\"glyphicon glyphicon-share\"></i> 34 Shares</a></li></ul>
                                    </div>
                                    <div class=\"col-xs-3\"></div>
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <hr>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "

                        <a href=\"/\" class=\"btn btn-primary pull-right btnNext\">More <i class=\"glyphicon glyphicon-chevron-right\"></i></a>


                    </div>
                </div>

            </div><!--/col-12-->
        </div>
    </div>
";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle:News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 58,  127 => 57,  112 => 44,  91 => 33,  87 => 32,  83 => 31,  77 => 28,  74 => 27,  68 => 24,  65 => 23,  63 => 22,  57 => 18,  53 => 17,  43 => 9,  40 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
