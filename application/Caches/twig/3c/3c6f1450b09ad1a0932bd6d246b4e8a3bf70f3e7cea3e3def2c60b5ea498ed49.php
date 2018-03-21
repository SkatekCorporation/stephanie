<?php

/* layout.html */
class __TwigTemplate_aa82c3e5846242a25487930d214f64602746f46451087b14fee7fad74e80a25e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html", "layout.html", 8);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "    <h1> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " </h1>
";
    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('Stephanie\View\AppTwig')->linkHtml("/skatek", "Skatek Corporation", array("class" => ("list-group-item" . $this->env->getExtension('Stephanie\View\AppTwig')->activeClass("/skatek"))));
        echo "
";
    }

    // line 18
    public function block_corps($context, array $blocks = array())
    {
        // line 19
        echo "    
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  50 => 18,  43 => 15,  40 => 14,  33 => 11,  30 => 10,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/var/www/projects/stephanie/application/Templates/pages/layout.html");
    }
}
