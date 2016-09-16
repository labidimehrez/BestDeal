<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b91068f5cd2f16555ec5060ca21a679345904c8421ed46ba65ba39a7489b15ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritBestdealBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "

    <div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span9 checkout_area\">
\t\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t\tCheckout Informaiton
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div id=\"log_in_info\">
\t\t\t\t\t\t\t\t<h3>Step 1: <span>Checkout Information</span></h3>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout_info log_in_content span9\">
\t\t\t\t\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"span4 returning_customer\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Returning Customer</h2>
                                                                                        <div class=\"customer_select\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>I'm a returning customer</p>
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                                                                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                                                                                    <label for=\"username\" style=\"width: 138px\"> <small>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</small></label>
                                                                                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"width\" />

                                                                                                    <label for=\"password\" style=\"width: 138px\"><small>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</small></label>
                                                                                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"width\" />
                                                                                                    <br>
                                                                                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                                                                                    <label for=\"remember_me\" style=\"width: 138px\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                                                                                    <br>
                                                                                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"register\"/>
                                                                                                </form>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  86 => 47,  79 => 43,  74 => 41,  70 => 40,  65 => 38,  61 => 37,  55 => 33,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
