<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_b03ff314242834b49ef570629535c7df1608814db5e7aeb5e25489163cf43b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main.html.twig", "AppBundle::index.html.twig", 1);
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
        <div class=\"row well\">
            <div class=\"span10 offset1\">
                <div class=\"row\">

                    <div class=\"span5\">
                        <h3>HELLO!</h3>

                        <p>
                        <h4> MVC is a web-based task manager which allows you to :</h4>
                        <ul>ы
                            <li>Save and organize your todo list</li>
                            <li>Search easily your todo list</li>
                            <li>Sort and filter your todo list</li>
                            <li>Export and report your todo list</li>
                        </ul>
                        <h4>And which is totally Free! Enjoy !</h4>
                        </p>


                        <p>
                            <a class=\"btn btn-primary btn-large\" href=\"login.html\"> Sign in </a> or <a
                                    class=\"btn btn-primary btn-large\" href=\"register.html\"> Sign up </a>
                        </p>


                    </div>

                    <div class=\"span5\">

                    </div>

                </div>

            </div>

        </div>
    </div>
";
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 50,  85 => 49,  43 => 9,  40 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
