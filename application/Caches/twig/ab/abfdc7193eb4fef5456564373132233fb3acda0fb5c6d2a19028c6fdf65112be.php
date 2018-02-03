<?php

/* sincesk.html */
class __TwigTemplate_dc78ca0e56b538cb9be606b704cf14a2bea76456c67c9061e391414148ed71a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('corps', $context, $blocks);
    }

    public function block_corps($context, array $blocks = array())
    {
        // line 3
        echo "    <h2 id=\"qui-sommes-nous\">Qui sommes - nous ?</h2>
    <p>
        Nous sommes une boîte <i>(Agence Web Créative, Etablissement, Entreprise, Startup, Centre de Formation professionnel, etc.)</i>
        basé en RDCongo, qui développe des programmes et des logiciels toutes catégories et de toutes envergures destinés à différents types des 
        terminaux <i>(Mobiles, Desktop, IOS, etc.)</i> pour les individus, les entreprises, les organisations, etc.
    </p>
    <h2 id=\"nos-contacts\">Nos contacts</h2>
    <p>
        Sentez - vous entièrement libre de nous appeler, de nous écrire, n'importe quand, si cela
        n'est pas pour des raisons inutiles. Et surtout si vous rencontrer des problèmes d'utilisation
        avec nos produits <i>(Logiciels, Programmes, Sites Web, etc.)</i> ou si vous avez besoins de nous. N'hésitez surtout pas. Voici donc nos contacts :
        <table class=\"table\">
            <tr>
                <td>Téléphones</td>
                <td><a href=\"tel:+243896358335\">+243 89 63 58 335</a> <i>(Whatsapp, Messenger, Appel, SMS)</i> <br> <a href=\"tel:+243827855067\">+243 82 78 55 067</a> <i>(Appel, SMS, Autres)</i> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><a href=\"mailto:skavunga@gmail.com\">skavunga@gmail.com</a></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td>147, Rue Lukaya, Quartier NSANGA, Commune de KIMBANSEKE, Kinshasa RDC</td>
            </tr>
        </table>
    </p>
";
    }

    public function getTemplateName()
    {
        return "sincesk.html";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sincesk.html", "/var/www/projects/stephanie/core/Templates/layouts/sincesk.html");
    }
}
