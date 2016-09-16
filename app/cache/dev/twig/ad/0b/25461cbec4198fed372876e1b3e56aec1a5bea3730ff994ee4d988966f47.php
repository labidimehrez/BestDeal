<?php

/* EspritBestdealBundle:Default:aficherproduit.html.twig */
class __TwigTemplate_ad0b25461cbec4198fed372876e1b3e56aec1a5bea3730ff994ee4d988966f47 extends Twig_Template
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
        echo "<div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span9 checkout_area product-area blog single\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
        echo "
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<div id=\"Parks\" class=\"just list\">
\t\t\t\t\t\t<div class=\"mix\">
\t\t\t\t\t\t\t<div class=\"meta name\">
\t\t\t\t\t\t\t\t<div class=\"img_wrapper loaded\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
        echo "\" onload=\"imgLoaded(this)\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product_description\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t25, Decembre 2013 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product_description commentform\">
\t\t\t\t\t\t\t\t<div class=\"comments\">
\t\t\t\t\t\t\t\t\t<p>Comments</p>
\t\t\t\t\t\t\t\t\t<ul>
                                                                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "comments"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"comment margin30\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"comm-text-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"comm-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"strong\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "nom"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bubble\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bubble-bg\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "commentaire"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<p>Leave a comment</p>
\t\t\t\t\t\t\t\t\t<div id=\"commentform\">
                                                                            
                                                                            ";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EspritBestdealBundle:Default:sendcomment", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))));
        echo "
                                                                            
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 143
        echo "\t\t\t
\t\t\t</div>\t
\t\t\t</div>
\t\t\t
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "EspritBestdealBundle:Default:aficherproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 143,  118 => 62,  112 => 58,  98 => 50,  92 => 47,  85 => 42,  81 => 41,  68 => 31,  58 => 24,  48 => 17,  38 => 10,  31 => 5,  28 => 4,);
    }
}
