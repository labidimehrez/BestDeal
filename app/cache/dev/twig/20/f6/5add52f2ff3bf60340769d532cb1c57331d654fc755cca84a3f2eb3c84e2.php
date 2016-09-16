<?php

/* EspritBestdealBundle::layout.html.twig */
class __TwigTemplate_20f65add52f2ff3bf60340769d532cb1c57331d654fc755cca84a3f2eb3c84e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\" />
\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t\t<title>BESTSHOP</title>
\t
\t
\t\t
\t<!-- Start CSS Link -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/custom_responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/supermenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/bounce_slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/jcarousel.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/jquery.bxslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/grid-list.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/accrodin.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/ui.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/css/jquery.jqzoom.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<!-- End CSS Link -->
\t
\t</head>
\t<body>
\t\t<div class=\"header\">
\t\t\t<div class=\"container main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header_top\">
\t\t\t\t\t\t<div class=\"currency_translator span5\">\t
\t\t\t\t\t\t\t<div class=\"currency\">
\t\t\t\t\t\t\t\tCURRENCY:
\t\t\t\t\t\t\t\t\t<select class=\"select_bg\">
\t\t\t\t\t\t\t\t\t\t<option value=\"dollar\">DOLLAR</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"euro\">EURO</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"taka\">TAKA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"rupe\">RUPE</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"translator\">
\t\t\t\t\t\t\t\t<li class=\"en\"><a class=\"active\" href=\"#\">EN</a></li>
\t\t\t\t\t\t\t\t<li class=\"en\"><a href=\"#\">ES</a></li>
\t\t\t\t\t\t\t\t<li class=\"en\"><a href=\"#\">FR</a></li>
\t\t\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"account_login span7\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"account_info\">
\t\t\t\t\t\t\t\t<li><div>
            ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 59
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 61
        echo "        </div>

        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 64
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
        <div>
            ";
        // line 72
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 74
        echo "        </div></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header_top\">
\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("esprit_bestdeal_homepage");
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"call_info span4\">
\t\t\t\t\t\t\t<p>PHONE: <span class=\"color\">1 (234) 56 78 901</span></p>
\t\t\t\t\t\t\t<p>Call us Monday - Saturday: 9:00 am - 6:00 pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart_info span3\">
\t\t\t\t\t\t\t<div class=\"cart_data\">Shopping Cart - \$0.00</div>
\t\t\t\t\t\t\t<button class=\"cart_btn btn btn-navbar\" data-toggle=\"collapse\" data-target=\".item_cart_wrap\"><img alt=\"\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/shopping_cart_btn_img.png"), "html", null, true);
        echo "\"></button>
\t\t\t\t\t\t\t<div class=\"item_cart_content\">
\t\t\t\t\t\t\t\t<div class=\"item_cart_wrap collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"item_cart\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_products\">No Products</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_info\">Shipping - \$0.00</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_info\">Total - \$0.00</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"checkout\">Checkout</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"cart\">Cart</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t<div class=\"navigation navbar\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"navbar\">
\t\t\t\t\t<div class=\"container main\">
\t 
\t\t\t\t\t<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
\t\t\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t<!-- Be sure to leave the brand out there if you want it shown -->
\t 
\t\t\t\t\t<!-- Everything you want hidden at 940px or less, place within here -->
\t\t\t\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t\t\t<!-- .nav, .navbar-search, .navbar-form, etc -->
\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t<li class=\"deeper parent current\"><a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("esprit_bestdeal_homepage");
        echo "\">Home</a></li>
                                                                <li><div class=\"search\">
                                                            <form  method=\"post\" action='";
        // line 132
        echo $this->env->getExtension('routing')->getPath("esprit_bestdeal_recherche");
        echo "'>
\t\t\t\t\t\t\t\t<input type=\"search\" name=\"recherche\" placeholder=\"recherche\">
                                                                    <button type=\"submit\" class=\"search_btn\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/icon_search.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</button>
                                                                </form>
\t\t\t\t\t\t\t</div></li>
                                                                
                                                               ";
        // line 151
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
                
                ";
        // line 163
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "                
                <div class=\"contact_info\">
\t\t\t<div class=\"container main\">
\t\t\t\t<ul class=\"row\">
\t\t\t\t\t<li class=\"follow-us span4\">
\t\t\t\t\t\t<div class=\"follow-social\">Follow us on:</div>
\t\t\t\t\t\t<div class=\"social-icon\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"fb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/social/facebook.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"tw\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/social/twitter.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"rss\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/social/rss.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"yt\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/social/youtube.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"span4\">
\t\t\t\t\t<div class=\"free-shipping\">
\t\t\t\t\t\t<div class=\"free-shipping-wrap\">
\t\t\t\t\t\t\t<div class=\"free-shipping-image\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/social/shiping-truck.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"free-shipping-info\">
\t\t\t\t\t\t\t\t<div id=\"free-shipping-info-title\">
\t\t\t\t\t\t\t\t\tFree Shipping
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"free-shipping-info\">
\t\t\t\t\t\t\t\t\tOn Orders  Over \$ 499
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"contact-no span4\">
\t\t\t\t\t\t<div class=\"contact-no-wrap\">
\t\t\t\t\t\t\t<div class=\"contact-no-image\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/social/telephone.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-no-info\">
\t\t\t\t\t\t\t\t<div id=\"contact-no-info-title\">
\t\t\t\t\t\t\t\t\tOrder Online
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div id=\"contact-no-info\">
\t\t\t\t\t\t\t\t\t<p>Phone:</p>
\t\t\t\t\t\t\t\t\t<p id=\"nb\">1 (234) 56 78 901</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>\t
\t\t\t</div>

\t\t</div>
\t\t
\t\t<div class=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container main\" id=\"footer-top\">
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Information</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Service</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Site Map</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Why Buy From Us</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Shipping _ Returns</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Secure Shopping</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">International Shipping</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Affiliates</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Group Sales</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">My Account</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sign In</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Service</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">My Wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Track My Order</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Newsletter</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mail\" placeholder=\"Your E-mail Address\">
\t\t\t\t\t\t\t\t\t<button class=\"go_btn\">Go</button>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<p>Store Location: <span>8601 Creat Labaratory, New York, D05 86GR</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container main\" id=\"footer-bottom\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span8 footer-col\">
\t\t\t\t\t\t\tCopyright &#169; 2013 <a href=\"#\">Fedimo</a>. All rights reserved.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span4 footer-col\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/payment-getway/1.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/payment-getway/2.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/payment-getway/3.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/payment-getway/4.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/images/payment-getway/5.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!-- Start JS Link -->
\t\t<script src=\"js/js-engine.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/menu/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/menu/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/bounceslider/modernizr.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/bounceslider/jquery.bounceslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/new-product-js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"> </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/new-product-js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/mixitup/jquery-ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/mixitup/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/mixitup/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/mixitup/mixitop-inline.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/mixitup/ga.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/mixitup/cloudflare.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/contact_form/jquery.form.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/contact_form/init_form.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/zoom/jquery.jqzoom-core.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritbestdeal/js/custom.js"), "html", null, true);
        echo "\"></script>
\t<!-- End JS Link -->\t
        <!-- Font CSS Link -->
\t    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
\t<!-- Font CSS Link -->\t
\t</body>
</html>
";
    }

    // line 72
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 73
        echo "            ";
    }

    // line 163
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "EspritBestdealBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 163,  556 => 73,  553 => 72,  540 => 332,  536 => 331,  532 => 330,  528 => 329,  524 => 328,  520 => 327,  516 => 326,  512 => 325,  508 => 324,  504 => 323,  500 => 322,  496 => 321,  492 => 320,  488 => 319,  484 => 318,  480 => 317,  476 => 316,  472 => 315,  468 => 314,  464 => 313,  460 => 312,  448 => 303,  444 => 302,  440 => 301,  436 => 300,  432 => 299,  337 => 207,  318 => 191,  306 => 182,  300 => 179,  294 => 176,  288 => 173,  277 => 164,  275 => 163,  261 => 151,  253 => 135,  247 => 132,  242 => 130,  202 => 93,  189 => 83,  178 => 74,  176 => 72,  172 => 70,  166 => 69,  157 => 66,  152 => 65,  147 => 64,  143 => 63,  139 => 61,  131 => 59,  125 => 56,  121 => 55,  116 => 54,  114 => 53,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  34 => 12,  21 => 1,);
    }
}
