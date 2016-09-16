<?php

/* EspritBestdealBundle:Default:commande.html.twig */
class __TwigTemplate_6eed41654ea7a5fd4be624dbaae2da0e0a5e7cb722fe8e40031ac8b1414d11d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritBestdealBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritBestdealBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"span9 comment_area\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\tContact Informaiton
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<div class=\"comment_contentp\">\t
\t\t\t\t\t\t<p>Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante ipsum primis in faucibus </p>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div id=\"commentform\">
\t\t\t\t\t\t<p class=\"error wrong_name\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<form method=\"post\"  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_bestdeal_commande", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<p>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
\t\t\t\t\t\t\t<label><small>Nom<strong>*</strong></small></label></p>
                                                         
                                                        <p>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "
\t\t\t\t\t\t\t<label><small>Prénom<strong>*</strong></small></label></p>
                                                        
\t\t\t\t\t\t\t<p>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
\t\t\t\t\t\t\t<label><small>Email<strong>*</strong></small></label></p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel"), 'widget');
        echo "
\t\t\t\t\t\t\t<label><small>Tèl</small></label></p>
                                                        
                                                        <p>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire"), 'widget');
        echo "
\t\t\t\t\t\t\t<label><small>Commentaire<strong>*</strong></small></label></p>

\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t\t\t\t\t\t\t<p><input type=\"submit\" name=\"submitButton\" class=\"submitbutton\"  value=\"Submit\" /></p>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "EspritBestdealBundle:Default:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  81 => 35,  75 => 32,  69 => 29,  63 => 26,  57 => 23,  53 => 22,  48 => 20,  31 => 5,  28 => 4,);
    }
}
