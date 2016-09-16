<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_99ed25f93ed0001b4232b852a2fc1b56d6f6da72b5b672a8d0a97729cfe1b628 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  33 => 5,  30 => 3,  548 => 184,  539 => 353,  535 => 352,  531 => 351,  527 => 350,  523 => 349,  519 => 348,  515 => 347,  511 => 346,  507 => 345,  503 => 344,  499 => 343,  495 => 342,  491 => 341,  487 => 340,  483 => 339,  479 => 338,  475 => 337,  471 => 336,  467 => 335,  463 => 334,  459 => 333,  447 => 324,  443 => 323,  439 => 322,  435 => 321,  431 => 320,  336 => 228,  317 => 212,  305 => 203,  299 => 200,  293 => 197,  287 => 194,  276 => 185,  274 => 184,  257 => 170,  251 => 167,  196 => 90,  156 => 66,  143 => 68,  131 => 59,  127 => 58,  123 => 47,  119 => 56,  115 => 43,  84 => 27,  80 => 19,  76 => 25,  72 => 16,  64 => 12,  60 => 21,  56 => 9,  52 => 19,  44 => 10,  40 => 8,  36 => 7,  20 => 1,  130 => 143,  118 => 62,  112 => 42,  98 => 40,  92 => 21,  85 => 19,  81 => 41,  68 => 14,  58 => 24,  48 => 18,  38 => 10,  31 => 5,  28 => 4,);
    }
}
