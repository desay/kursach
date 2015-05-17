<?php

/* @App/Trainings/trainings.html.twig */
class __TwigTemplate_013560b10ecd6879d57e12bea0b2117ac2c62033003312107f170749147c060d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main.html.twig", "@App/Trainings/trainings.html.twig", 1);
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
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings")));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 19
            echo "
                        <!--/stories-->
                        <div class=\"row\">
                            <br>
                            ";
            // line 23
            if (($this->getAttribute($context["training"], "image", array()) != "")) {
                // line 24
                echo "                                <div class=\"col-md-2 col-sm-3 text-center\">
                                    <a class=\"story-img\" href=\"#\"><img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "image", array()), "html", null, true);
                echo "\" style=\"width:100px;height:100px\" class=\"img-circle\"></a>
                                </div>
                            ";
            }
            // line 28
            echo "                            <div class=\"col-md-10 col-sm-9\">
                                <h3>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "title", array()), "html", null, true);
            echo "</h3>
                                <div class=\"row\">
                                    <div class=\"col-xs-9\">
                                        <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "description", array()), "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                    </div>
                </div>

            </div><!--/col-12-->
        </div>
    </div>

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
        return "@App/Trainings/trainings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  112 => 52,  100 => 42,  84 => 32,  78 => 29,  75 => 28,  69 => 25,  66 => 24,  64 => 23,  58 => 19,  54 => 18,  43 => 9,  40 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
