<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_2654adf2b1ea542241995ccd58649d14841baae98ff05f82c0d7ea96f9beaee2 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  33 => 10,  30 => 3,  548 => 184,  539 => 353,  535 => 352,  531 => 351,  527 => 350,  523 => 349,  519 => 348,  515 => 347,  511 => 346,  507 => 345,  503 => 344,  499 => 343,  495 => 342,  491 => 341,  487 => 340,  483 => 339,  479 => 338,  475 => 337,  471 => 336,  467 => 335,  463 => 334,  459 => 333,  447 => 324,  443 => 323,  439 => 322,  435 => 321,  431 => 320,  336 => 228,  317 => 212,  305 => 203,  299 => 200,  293 => 197,  287 => 194,  276 => 185,  274 => 184,  257 => 170,  251 => 167,  196 => 90,  156 => 66,  143 => 68,  131 => 59,  127 => 58,  123 => 47,  119 => 56,  115 => 43,  84 => 27,  80 => 19,  76 => 25,  72 => 16,  64 => 12,  60 => 21,  56 => 9,  52 => 19,  44 => 10,  40 => 8,  36 => 7,  20 => 1,  130 => 143,  118 => 62,  112 => 42,  98 => 40,  92 => 21,  85 => 19,  81 => 41,  68 => 14,  58 => 24,  48 => 18,  38 => 13,  31 => 5,  28 => 4,);
    }
}
