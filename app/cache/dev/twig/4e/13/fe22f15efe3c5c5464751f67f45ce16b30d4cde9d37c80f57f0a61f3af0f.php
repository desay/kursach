<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4e13fe22f15efe3c5c5464751f67f45ce16b30d4cde9d37c80f57f0a61f3af0f extends Twig_Template
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
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div id=\"contact\"  class=\"section contact gray\" data-magellan-destination=\"contact\">
    <div class=\"row\">
        <div class=\"large-12 columns\">
            <h2>Sing in:</h2>
\t\t\t<span class=\"subheading\">

</span>
                        <div>
                            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 18
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 20
        echo "                        </div>

                        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                        <div>
                            ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "                        </div>

            </div>
        </div>
    </div>

";
    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 32
        echo "                            ";
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  129 => 32,  126 => 31,  116 => 33,  114 => 31,  110 => 29,  104 => 28,  95 => 25,  90 => 24,  85 => 23,  81 => 22,  77 => 20,  69 => 18,  63 => 15,  59 => 14,  54 => 13,  52 => 12,  41 => 3,  38 => 2,  11 => 1,);
    }
}
