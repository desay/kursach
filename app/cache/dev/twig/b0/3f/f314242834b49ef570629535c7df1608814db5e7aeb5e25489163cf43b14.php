<?php

/* @App/index.html.twig */
class __TwigTemplate_b03ff314242834b49ef570629535c7df1608814db5e7aeb5e25489163cf43b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/Main/main.html.twig", "@App/index.html.twig", 1);
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
    <header>
        <div class=\"headerDiv\">
            <div class=\"upperHeader\">
                <h1><span class=\"logo\">BodyLanguage</span><span class=\"hideEl\"> - </span><span>тренинги публичных выступлений</span></h1>
                <p class=\"\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Вход/Регистрация</a></p>
                <i class=\"fa fa-bars\"></i>
            </div>
            <nav>
                <ul>
                    <li class=\"link\"><a class=\"current\" id=\"mainLink\" href=\"index.html\">Главная</a></li>
                    <li class=\"link\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">Новости</a></li>
                    <li class=\"link\"><a href=\"description.html\" id=\"descriptionLink\">Описание тренингов</a></li>
                    <li class=\"link\"><a href=\"success.html\" id=\"successLink\">История успеха</a></li>
                    <li class=\"link\"><a href=\"contacts.html\" id=\"contactsLink\">Контакты</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div id=\"mainImg\"></div>

        <div class=\"results\">
            <div class=\"resultsDiv\">
                <div class=\"result\">
                    <img class=\"icon\" src=\"icons/iconmonstr-microphone-5-icon.svg\">
                    <h3>Выступайте</h3>
                    <p>Вдохновляйте и меняйте мнение как единичного слушателя, так и самой большой толпы.</p>
                </div>
                <div class=\"result\">
                    <img class=\"icon\" src=\"icons/iconmonstr-coin-10-icon.svg\">
                    <h3>Продавайте</h3>
                    <p>Вселяйте уверенность и убеждайте даже самых сложных покупателей.</p>
                </div>
                <div class=\"result\">
                    <img class=\"icon\" src=\"icons/iconmonstr-speech-bubble-14-icon.svg\">
                    <h3>Общайтесь</h3>
                    <p>Доносите свою мысль до собеседника красиво и точно.</p>
                </div>
            </div>
        </div>

        <div class=\"content\">
            <h2 class=\"link\"><a href=\"news.html\" id=\"newsLink\">Последние новости</a></h2>
            <div class=\"block\">
                <div class=\"imageDiv\"></div>
                <article>
                    <h3 class=\"link\"><a href=\"\">Tile Title</a></h3>
                    <p class=\"shortText\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non sapien at dolor accumsan maximus. Ut mattis congue aliquet. Quisque blandit libero a urna cursus consequat. Donec dapibus sit amet mi ac congue. Phasellus vehicula pellentesque nulla. Vivamus fermentum mauris ligula, a hendrerit velit aliquam id. Nam sagittis nec sem in consequat. Quisque vulputate consectetur mi quis rutrum. Suspendisse pellentesque enim nec auctor dignissim. Etiam sodales, nibh ut dignissim sagittis, dolor lacus blandit neque, nec fringilla nunc massa sit amet mi. Fusce nulla enim, semper at felis id, vehicula condimentum eros. Praesent vitae metus vestibulum, consequat ex ac, auctor lorem.</p>
                    <p class=\"date\">01.04.2015</p>
                </article>
            </div>
            <div class=\"block\">
                <div class=\"imageDiv\"></div>
                <article>
                    <h3 class=\"link\"><a href=\"\">Tile Title</a></h3>
                    <p class=\"shortText\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non sapien at dolor accumsan maximus. Ut mattis congue aliquet. Quisque blandit libero a urna cursus consequat. Donec dapibus sit amet mi ac congue. Phasellus vehicula pellentesque nulla. Vivamus fermentum mauris ligula, a hendrerit velit aliquam id. Nam sagittis nec sem in consequat. Quisque vulputate consectetur mi quis rutrum. Suspendisse pellentesque enim nec auctor dignissim. Etiam sodales, nibh ut dignissim sagittis, dolor lacus blandit neque, nec fringilla nunc massa sit amet mi. Fusce nulla enim, semper at felis id, vehicula condimentum eros. Praesent vitae metus vestibulum, consequat ex ac, auctor lorem.</p>
                    <p class=\"date\">01.04.2015</p>
                </article>
            </div>
            <div class=\"block\">
                <div class=\"imageDiv\"></div>
                <article>
                    <h3 class=\"link\"><a href=\"\">Tile Title</a></h3>
                    <p class=\"shortText\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non sapien at dolor accumsan maximus. Ut mattis congue aliquet. Quisque blandit libero a urna cursus consequat. Donec dapibus sit amet mi ac congue. Phasellus vehicula pellentesque nulla. Vivamus fermentum mauris ligula, a hendrerit velit aliquam id. Nam sagittis nec sem in consequat. Quisque vulputate consectetur mi quis rutrum. Suspendisse pellentesque enim nec auctor dignissim. Etiam sodales, nibh ut dignissim sagittis, dolor lacus blandit neque, nec fringilla nunc massa sit amet mi. Fusce nulla enim, semper at felis id, vehicula condimentum eros. Praesent vitae metus vestibulum, consequat ex ac, auctor lorem.</p>
                    <p class=\"date\">01.04.2015</p>
                </article>
            </div>
            <div class=\"block\">
                <div class=\"imageDiv\"></div>
                <article>
                    <h3 class=\"link\"><a href=\"\">Tile Title</a></h3>
                    <p class=\"shortText\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non sapien at dolor accumsan maximus. Ut mattis congue aliquet. Quisque blandit libero a urna cursus consequat. Donec dapibus sit amet mi ac congue. Phasellus vehicula pellentesque nulla. Vivamus fermentum mauris ligula, a hendrerit velit aliquam id. Nam sagittis nec sem in consequat. Quisque vulputate consectetur mi quis rutrum. Suspendisse pellentesque enim nec auctor dignissim. Etiam sodales, nibh ut dignissim sagittis, dolor lacus blandit neque, nec fringilla nunc massa sit amet mi. Fusce nulla enim, semper at felis id, vehicula condimentum eros. Praesent vitae metus vestibulum, consequat ex ac, auctor lorem.</p>
                    <p class=\"date\">01.04.2015</p>
                </article>
            </div>
            <div class=\"block\">
                <div class=\"imageDiv\"></div>
                <article>
                    <h3 class=\"link\"><a href=\"\">Tile Title</a></h3>
                    <p class=\"shortText\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non sapien at dolor accumsan maximus. Ut mattis congue aliquet. Quisque blandit libero a urna cursus consequat. Donec dapibus sit amet mi ac congue. Phasellus vehicula pellentesque nulla. Vivamus fermentum mauris ligula, a hendrerit velit aliquam id. Nam sagittis nec sem in consequat. Quisque vulputate consectetur mi quis rutrum. Suspendisse pellentesque enim nec auctor dignissim. Etiam sodales, nibh ut dignissim sagittis, dolor lacus blandit neque, nec fringilla nunc massa sit amet mi. Fusce nulla enim, semper at felis id, vehicula condimentum eros. Praesent vitae metus vestibulum, consequat ex ac, auctor lorem.</p>
                    <p class=\"date\">01.04.2015</p>
                </article>
            </div>
        </div>
    </main>

";
    }

    // line 99
    public function block_footer($context, array $blocks = array())
    {
        // line 100
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
        return array (  145 => 100,  142 => 99,  59 => 19,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
