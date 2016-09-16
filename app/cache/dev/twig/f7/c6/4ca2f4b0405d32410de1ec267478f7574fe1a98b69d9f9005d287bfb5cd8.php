<?php

/* EspritBestdealBundle:Default:sendcomment.html.twig */
class __TwigTemplate_f7c64ca2f4b0405d32410de1ec267478f7574fe1a98b69d9f9005d287bfb5cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"POST\"  action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_bestdeal_comment_send", array("id" => ("" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))), "html", null, true);
        echo "\">
        <p>";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
        <label><small>Name</small></label></p>

        <p>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire"), 'widget');
        echo "</p>
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        <input type=\"submit\" name=\"submitButton\" class=\"submitbutton\" id=\"contact-submit\" value=\"Add a comment\">
        
</form>";
    }

    public function getTemplateName()
    {
        return "EspritBestdealBundle:Default:sendcomment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }
}
