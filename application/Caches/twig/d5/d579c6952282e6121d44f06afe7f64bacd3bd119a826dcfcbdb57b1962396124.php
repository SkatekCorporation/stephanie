<?php

/* skatek.html */
class __TwigTemplate_ecd4cdab2611c999daa733045c6dc992bab522ea936eacc6b33d8e5ebfeb63b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("layout.html", "skatek.html", 8);
        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_corps($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("sincesk.html", "skatek.html", 11)->display($context);
        echo "    
    ";
        // line 12
        $this->displayParentBlock("corps", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "skatek.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  31 => 11,  28 => 10,  11 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "skatek.html", "/var/www/projects/stephanie/application/Templates/pages/skatek.html");
    }
}
