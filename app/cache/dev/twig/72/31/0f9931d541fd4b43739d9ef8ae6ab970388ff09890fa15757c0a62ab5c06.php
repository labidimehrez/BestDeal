<?php

/* EspritBestdealBundle:Default:recherche.html.twig */
class __TwigTemplate_72310f9931d541fd4b43739d9ef8ae6ab970388ff09890fa15757c0a62ab5c06 extends Twig_Template
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
        if ((!array_key_exists("recherches", $context))) {
            // line 38
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches")));
            foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
                // line 39
                echo "\t\t\t\t<div class=\"row list_work\">
\t\t\t\t\t<h2 class=\"title-wrap\">
                                            
                                            
\t\t\t\t\t\t<span>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "nom"), "html", null, true);
                echo "</span>
\t\t\t\t\t</h2>
                                        
                                        <div class=\"newE-product-cart_like\">
                                            <div class=\"new-product-cart_like\" style=\"float: right;margin-right: 164px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\" style=\"background-color: green;margin-right: 10px;\">
                                                                                                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_bestdeal_commande", array("id" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "id"))), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/new-product/shoping-info/cart-image.png"), "html", null, true);
                echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/new-product/shoping-info/like-img.png"), "html", null, true);
                echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<div class=\" jcarousel-skin-tango\"><div class=\"jcarousel-container jcarousel-container-horizontal\" style=\"position: relative; display: block;\"><div class=\"jcarousel-clip jcarousel-clip-horizontal\" style=\"position: relative;\"><ul id=\"mycarousel\" class=\"item da-thumbs jcarousel-list jcarousel-list-horizontal\" style=\"overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 2012px;\">
\t\t\t\t\t\t";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "produits"));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 56
                    echo "                                                        <li class=\"span3 new-product jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal\" jcarouselindex=\"1\" style=\"float: left; list-style: none;\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("esprit_bestdeal_produit", array("id" => ("" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("upload/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image")) . "")), "html", null, true);
                    echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
                    echo " DT</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("esprit_bestdeal_produit", array("id" => ("" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")))), "html", null, true);
                    echo "\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                    echo "</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
                                                
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul></div><div class=\"jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal\" disabled=\"disabled\" style=\"display: block;\"></div><div class=\"jcarousel-next jcarousel-next-horizontal\" style=\"display: block;\"></div></div></div>
\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t
                                
                                ";
        }
        // line 87
        echo "                                
                                
                                ";
        // line 89
        if ((!array_key_exists("recherches2", $context))) {
            // line 90
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches")));
            foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
                // line 91
                echo "\t\t\t\t<div class=\"row list_work\">
\t\t\t\t\t<h2 class=\"title-wrap\">
                                            
                                            
\t\t\t\t\t\t<span>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "nom"), "html", null, true);
                echo "</span>
\t\t\t\t\t</h2>
                                        
                                        <div class=\"newE-product-cart_like\">
                                            <div class=\"new-product-cart_like\" style=\"float: right;margin-right: 164px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\" style=\"background-color: green;margin-right: 10px;\">
                                                                                                    <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_bestdeal_commande", array("id" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "id"), "id2" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\"><img alt=\"\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/new-product/shoping-info/cart-image.png"), "html", null, true);
                echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/new-product/shoping-info/like-img.png"), "html", null, true);
                echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<div class=\" jcarousel-skin-tango\"><div class=\"jcarousel-container jcarousel-container-horizontal\" style=\"position: relative; display: block;\"><div class=\"jcarousel-clip jcarousel-clip-horizontal\" style=\"position: relative;\"><ul id=\"mycarousel\" class=\"item da-thumbs jcarousel-list jcarousel-list-horizontal\" style=\"overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 2012px;\">
\t\t\t\t\t\t";
                // line 107
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "produits"));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 108
                    echo "                                                        <li class=\"span3 new-product jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal\" jcarouselindex=\"1\" style=\"float: left; list-style: none;\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("esprit_bestdeal_produit", array("id" => ("" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("upload/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image")) . "")), "html", null, true);
                    echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
                    echo " DT</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("esprit_bestdeal_produit", array("id" => ("" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")))), "html", null, true);
                    echo "\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                    echo "</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
                                                
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul></div><div class=\"jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal\" disabled=\"disabled\" style=\"display: block;\"></div><div class=\"jcarousel-next jcarousel-next-horizontal\" style=\"display: block;\"></div></div></div>
\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                
                                ";
        }
        // line 139
        echo "\t\t\t\t\t
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
        return "EspritBestdealBundle:Default:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 139,  275 => 137,  266 => 133,  254 => 127,  248 => 124,  239 => 118,  233 => 115,  224 => 111,  219 => 108,  215 => 107,  207 => 102,  201 => 101,  192 => 95,  186 => 91,  181 => 90,  179 => 89,  175 => 87,  170 => 84,  161 => 81,  149 => 75,  143 => 72,  134 => 66,  128 => 63,  119 => 59,  114 => 56,  110 => 55,  102 => 50,  96 => 49,  87 => 43,  81 => 39,  76 => 38,  74 => 37,  56 => 22,  49 => 18,  42 => 14,  31 => 5,  28 => 4,);
    }
}
