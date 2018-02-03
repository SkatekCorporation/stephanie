<?php

/* base.html */
class __TwigTemplate_2c1c342349d3046bf5a0baef55821461ea6bf350aab05405686ccfafd4543e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'navbar' => array($this, 'block_navbar'),
            'corps' => array($this, 'block_corps'),
            'baspage' => array($this, 'block_baspage'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        if (( !(null === ($context["app_theme"] ?? null)) && (($context["app_theme"] ?? null) != "default"))) {
            // line 18
            echo "      ";
            echo $this->env->getExtension('Stephanie\View\AppTwig')->cssHtml("bootstrap.min");
            echo "
      ";
            // line 19
            echo $this->env->getExtension('Stephanie\View\AppTwig')->cssHtml((("themes/bootstrap-" . ($context["app_theme"] ?? null)) . ".min"));
            echo "
    ";
        } else {
            // line 21
            echo "      ";
            echo $this->env->getExtension('Stephanie\View\AppTwig')->cssHtml("bootstrap-cerulean.min");
            echo "
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Stephanie\View\AppTwig')->cssHtml("jumbotron");
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Stephanie\View\AppTwig')->cssHtml("styles");
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Stephanie\View\AppTwig')->jsHtml("jquery.min");
        echo "

  </head>

  <body>
    ";
        // line 31
        echo $this->env->getExtension('Stephanie\View\AppTwig')->renderFlash();
        echo "
    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 42
        echo "          ";
        echo $this->env->getExtension('Stephanie\View\AppTwig')->linkHtml("/", ((array_key_exists("software", $context)) ? (_twig_default_filter(($context["software"] ?? null), "Stephanie Framework")) : ("Stephanie Framework")), array("class" => "navbar-brand", "id" => "app-n"));
        echo "
        </div>
        <div class=\"navbar-collapse collapse\">
          ";
        // line 45
        $this->displayBlock('menu', $context, $blocks);
        // line 50
        echo "        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
          ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "        </div>
      </div>
    <div class=\"container\">
      ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "
      <hr>
      <footer>
        ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "      </footer>      
    </div> <!-- /container -->
    ";
        // line 99
        echo $this->env->getExtension('Stephanie\View\AppTwig')->jsHtml("bootstrap.min");
        echo "
    ";
        // line 100
        echo $this->env->getExtension('Stephanie\View\AppTwig')->jsHtml("scripts");
        echo "
  </body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "    <title> ";
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter(($context["title"] ?? null), "Stephanie Framework")) : ("Stephanie Framework")), "html", null, true);
        echo " | LeTémoin</title>
    ";
    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        // line 46
        echo "            <ul class=\"nav navbar-nav\">
              <li class=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Stephanie\View\AppTwig')->activeClass("/"), "html", null, true);
        echo "\" > ";
        echo $this->env->getExtension('Stephanie\View\AppTwig')->linkHtml("/", "Accueil");
        echo " </li>
            </ul>            
          ";
    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        // line 58
        echo "          <h1>Hello, world!</h1>
          <p>
            Ceci est une page d'exemple. Vous pouvez le remplacer en creeant vos propres trucs. Etendez vos templates Twig pour qu'ils heritent de ce layout et créer des routes pour différents
            controller et acions de votre application.
            Cette page est généré automatique par <strong>Skatek Corporation</strong>.
          </p>
          ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "      <div class=\"row\">
        <div class=\"col-sm-3\" id=\"navbar-g\">
          <div class=\"list-group\">
              ";
        // line 72
        $this->displayBlock('navbar', $context, $blocks);
        // line 76
        echo "          </div>
        </div>
        <div class=\"col-sm-9 contenu-b\">
          ";
        // line 79
        $this->displayBlock('corps', $context, $blocks);
        // line 88
        echo "        </div>
      </div>
      ";
    }

    // line 72
    public function block_navbar($context, array $blocks = array())
    {
        // line 73
        echo "                ";
        echo $this->env->getExtension('Stephanie\View\AppTwig')->linkHtml("/", "Page d'accueil", array("class" => "list-group-item active"));
        echo "
                ";
        // line 74
        echo $this->env->getExtension('Stephanie\View\AppTwig')->linkHtml("/skatek", "Skatek Corporation", array("class" => "list-group-item"));
        echo "
              ";
    }

    // line 79
    public function block_corps($context, array $blocks = array())
    {
        // line 80
        echo "              <h2 class=\"header\">Stephanie Framework</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ipsam, explicabo, nobis tempore earum distinctio inventore ab laudantium unde ducimus accusantium nostrum quo similique quisquam culpa porro quos corrupti hic?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In officiis consectetur nulla eius nobis, tempore minima vel maxime illum fuga et reiciendis, eum delectus impedit obcaecati omnis perferendis corrupti. Consectetur.
              </p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, omnis? Debitis eveniet, totam, praesentium aliquam, expedita consequatur nihil et pariatur cumque nam quaerat labore eos? Expedita natus in labore saepe? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga aut esse veritatis. Doloremque, nemo consequatur labore voluptas, in quae, omnis repudiandae ducimus incidunt saepe maxime nostrum ea cum nesciunt?</p>
              ";
        // line 86
        $this->displayBlock('baspage', $context, $blocks);
        // line 87
        echo "          ";
    }

    // line 86
    public function block_baspage($context, array $blocks = array())
    {
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        echo "            <p>&copy; Copyright 2018, ";
        echo $this->env->getExtension('Stephanie\View\AppTwig')->linkHtml("/skatek", "Skatek Corporation", array("rel" => "tooltip", "title" => "A propos de Skatek Corporation"));
        echo " </p>
        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 95,  236 => 94,  231 => 86,  227 => 87,  225 => 86,  217 => 80,  214 => 79,  208 => 74,  203 => 73,  200 => 72,  194 => 88,  192 => 79,  187 => 76,  185 => 72,  180 => 69,  177 => 68,  167 => 58,  164 => 57,  155 => 47,  152 => 46,  149 => 45,  142 => 14,  139 => 13,  131 => 100,  127 => 99,  123 => 97,  121 => 94,  116 => 91,  114 => 68,  109 => 65,  107 => 57,  98 => 50,  96 => 45,  89 => 42,  76 => 31,  68 => 26,  64 => 25,  60 => 24,  57 => 23,  51 => 21,  46 => 19,  41 => 18,  39 => 17,  36 => 16,  34 => 13,  27 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "/var/www/projects/stephanie/application/Templates/layouts/base.html");
    }
}
