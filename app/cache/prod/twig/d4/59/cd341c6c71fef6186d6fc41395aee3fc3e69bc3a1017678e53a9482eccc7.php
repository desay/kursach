<?php

/* @App/Main/main.html.twig */
class __TwigTemplate_d459cd341c6c71fef6186d6fc41395aee3fc3e69bc3a1017678e53a9482eccc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'admin_menu' => array($this, 'block_admin_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "

";
        // line 137
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]><html class=\"lt-ie9 lt-ie8 lt-ie7\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\"><![endif]-->
<!--[if IE 7]><html class=\"lt-ie9 lt-ie8\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\"><![endif]-->
<!--[if IE 8]><html class=\"lt-ie9\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns=\"http://www.w3.org/1999/xhtml\"><!--<![endif]-->
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\" />
    <title>Responsive Landing Page For iPhone / Android App </title>

    <link rel=\"stylesheet\" href=\"css/normalize.css\" />
    <link rel=\"stylesheet\" href=\"css/foundation.min.css\" />
    <link rel=\"stylesheet\" href=\"css/style.css\" />
    <link rel=\"stylesheet\" href=\"css/ie.css\" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:600' rel='stylesheet' type='text/css'>

    <script src=\"js/vendor/custom.modernizr.js\"></script>
</head>

<body>
<div id=\"top\"  data-magellan-expedition=\"fixed\">
    <div class=\"row\">
        <div class=\"large-12 columns\">
            <nav class=\"top-bar\">
                <ul class=\"title-area\">
                    <li class=\"name logo\">
                        <a href=\"#\"><img src=\"img/logo.png\"  alt=\"\"></a>
                    </li>
                    <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
                </ul>

                <section class=\"top-bar-section\">
                    <ul class=\"right\" id=\"menu\">
                        <li data-magellan-arrival=\"features\"><a href=\"#features\">Features</a></li>
                        <li data-magellan-arrival=\"product\"><a href=\"#product\">Product</a></li>
                        <li data-magellan-arrival=\"pricing\"><a href=\"#pricing-table\">Pricing</a></li>
                        <li data-magellan-arrival=\"contact\"><a href=\"#contact\">Contact Us</a></li>
                    </ul>
                </section>
            </nav>
        </div>
    </div>
</div>

<header id=\"header\" >
    <div class=\"row\">

        <div class=\"large-6 columns\">
            <div id=\"teaser-slider-2\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">

                    </ul>
                </div>
            </div>
        </div>

        <div class=\"large-6 columns\">
            <h1>Курсы ораторского мастерства</h1>
            <span class=\"subheading\">Powerful, Stylish and Modern.</span>

        </div>

    </div>
</header>

";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "
    ";
        // line 75
        $this->displayBlock('admin_menu', $context, $blocks);
        // line 133
        echo "
";
    }

    // line 75
    public function block_admin_menu($context, array $blocks = array())
    {
        // line 76
        echo "
        <div id=\"features\" class=\"section features\" data-magellan-destination=\"features\">
            <div class=\"row hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b\">
                <div class=\"large-4 columns feature\">
                    <span class=\"icon icon-browser hi-icon\"></span>
                    <h3>Fully Responsive Template</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.

                    </p>
                </div>
                <div class=\"large-4 columns feature\">
                    <span class=\"icon icon-tools hi-icon\"></span>
                    <h3>Easily to Customize & Update</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.

                    </p>
                </div>
                <div class=\"large-4 columns feature\">
                    <span class=\"icon icon-trophy hi-icon\"></span>
                    <h3>Perfect Landing Page for Apps</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.

                    </p>
                </div>
            </div>
        </div>

        <div class=\"span3\">


            <div class=\"well sidebar-nav\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\">Привет ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo " !</li>
                    <li><a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-home\"></i> Домой</a></li>
                    <li><a href=\"account.html\"><i class=\"icon-user\"></i> Mой аккаунт</a></li>

                    <li><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"icon-file\"></i> Список новостей</a></li>
                    <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("admin_index_trainings");
        echo "\"><i class=\"icon-file\"></i> Список курсов</a></li>

                    <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("admin_news_add");
        echo "\"><i class=\"icon-file\"></i> Создать новость</a></li>
                    <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("admin_trainings_add");
        echo "\"><i class=\"icon-file\"></i> Создать курс</a></li>

                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">Поиск по новостям и курсам:</li>
                    <li>
                        <form class=\"form-search\" action=\"searchTodo.html\" id=\"searchForm\" method=\"get\">
                            <div class=\"input-append\">
                                <input type=\"text\" name=\"title\" class=\"input-small search-query\"
                                       placeholder=\"search by title\" required=\"required\">
                                <button type=\"submit\" class=\"btn\">Go!</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    ";
    }

    // line 137
    public function block_footer($context, array $blocks = array())
    {
        // line 138
        echo "
<footer>
    <div class=\"row\">
        <div class=\"large-6 columns\">
            <ul class=\"inline-list\">
                <li class=\"copyright\"><a>2015 &copy; Helga Pavluchenko</a></li>

            </ul>
        </div>
        <div class=\"large-6 columns\">
            <ul class=\"inline-list social-media right\">
                <li><a href=\"http://www.facebook.com/EGrappler\" class=\"icon icon-facebook\"></a></li>
                <li><a href=\"htp://twitter.com/egrappler\" class=\"icon icon-twitter\"></a></li>
                <li><a href=\"https://plus.google.com/102572598506883739879/posts\" class=\"icon icon-googleplus\"></a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@App/Main/main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 138,  208 => 137,  187 => 116,  183 => 115,  178 => 113,  174 => 112,  168 => 109,  164 => 108,  130 => 76,  127 => 75,  122 => 133,  120 => 75,  117 => 74,  114 => 73,  41 => 2,  38 => 1,  34 => 137,  30 => 135,  28 => 73,  25 => 72,  23 => 1,);
    }
}
