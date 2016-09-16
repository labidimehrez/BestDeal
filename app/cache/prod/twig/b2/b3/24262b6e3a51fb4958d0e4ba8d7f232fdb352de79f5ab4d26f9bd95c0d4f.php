<?php

/* EspritBestdealBundle:Default:index.html.twig */
class __TwigTemplate_b2b324262b6e3a51fb4958d0e4ba8d7f232fdb352de79f5ab4d26f9bd95c0d4f extends Twig_Template
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

\t\t\t<div class=\"container main\" id=\"main-slide\">
\t\t\t\t<div id=\"wrapper\">
\t\t\t\t\t<div class=\"slide-content\">
\t\t\t\t\t\t<div class=\"bounce-slider\" id=\"first\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li data-slide-number=\"1\" style=\"z-index: 0; opacity: 100;\">
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc right-side bounce-to-right\" style=\"opacity: 0;\"><span>New Modern Dress <br> Women Summer Collection</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/slides/slide1.png"), "html", null, true);
        echo "\" alt=\"image 1\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-slide-number=\"2\" style=\"z-index: 0; opacity: 100;\">
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc left-side bounce-to-left\" style=\"opacity: 0;\"><span>New Modern Dress <br> Women Summer Collection</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/slides/slide2.png"), "html", null, true);
        echo "\" alt=\"image 2\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-slide-number=\"3\" style=\"z-index: 2; opacity: 100;\">
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc left-side bounce-from-left\" style=\"opacity: 0;\"><span>New Modern Dress <br> Women Summer Collection</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/slides/slide3.png"), "html", null, true);
        echo "\" alt=\"image 2\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<span class=\"next bounce-nav\"></span>\t
\t\t\t\t\t\t\t<span class=\"prev bounce-nav\"></span>
\t\t\t\t\t\t<ol class=\"bounce-bottom-buttons\"><li data-goto-slide=\"1\" class=\"gradient\">1</li><li data-goto-slide=\"2\" class=\"gradient\">2</li><li data-goto-slide=\"3\" class=\"gradient active\">3</li></ol></div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t\t<div class=\"container main\">
\t\t\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"container main\" id=\"first-carousel-slide\">
                            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 38
            echo "\t\t\t\t<div class=\"row list_work\">
\t\t\t\t\t<h2 class=\"title-wrap\">
                                            
                                            
\t\t\t\t\t\t<span>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : null), "nom"), "html", null, true);
            echo "</span>
\t\t\t\t\t</h2>
                                        
                                        <div class=\"newE-product-cart_like\">
                                            <div class=\"new-product-cart_like\" style=\"float: right;margin-right: 164px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\" style=\"background-color: green;margin-right: 10px;\">
                                                                                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_bestdeal_commande", array("id" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : null), "id"), "id2" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id"))), "html", null, true);
            echo "\"><img alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/new-product/shoping-info/cart-image.png"), "html", null, true);
            echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/new-product/shoping-info/like-img.png"), "html", null, true);
            echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<div class=\" jcarousel-skin-tango\"><div class=\"jcarousel-container jcarousel-container-horizontal\" style=\"position: relative; display: block;\"><div class=\"jcarousel-clip jcarousel-clip-horizontal\" style=\"position: relative;\"><ul id=\"mycarousel\" class=\"item da-thumbs jcarousel-list jcarousel-list-horizontal\" style=\"overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 2012px;\">
\t\t\t\t\t\t";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["deal"]) ? $context["deal"] : null), "produits"));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 55
                echo "                                                        <li class=\"span3 new-product jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal\" jcarouselindex=\"1\" style=\"float: left; list-style: none;\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("esprit_bestdeal_produit", array("id" => ("" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id")))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("upload/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image")) . "")), "html", null, true);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix"), "html", null, true);
                echo " DT</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("esprit_bestdeal_produit", array("id" => ("" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id")))), "html", null, true);
                echo "\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nom"), "html", null, true);
                echo "</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "description"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
                                                
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul></div><div class=\"jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal\" disabled=\"disabled\" style=\"display: block;\"></div><div class=\"jcarousel-next jcarousel-next-horizontal\" style=\"display: block;\"></div></div></div>
\t\t\t\t</div>\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t
\t\t\t\t\t
\t\t\t</div>\t
\t\t\t

\t\t\t<div class=\"container main\" id=\"second-carousel-slide\">
\t\t\t\t
\t\t\t</div>\t
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "EspritBestdealBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 83,  158 => 80,  146 => 74,  140 => 71,  131 => 65,  125 => 62,  116 => 58,  111 => 55,  107 => 54,  99 => 49,  93 => 48,  84 => 42,  78 => 38,  74 => 37,  56 => 22,  49 => 18,  42 => 14,  31 => 5,  28 => 4,);
    }
}
