<?php

/* TwigBundle:Exception:traces_text.html.twig */
class __TwigTemplate_7804b88bd5bad2caf72a15fac63a0228b67a541301719f2ea376705d919f8fd7 extends Twig_Template
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
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "message"), "html", null, true);
            echo "
";
            // line 15
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  35 => 4,  26 => 5,  87 => 20,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  33 => 10,  30 => 3,  548 => 184,  539 => 353,  535 => 352,  531 => 351,  527 => 350,  523 => 349,  519 => 348,  515 => 347,  511 => 346,  507 => 345,  503 => 344,  499 => 343,  495 => 342,  491 => 341,  487 => 340,  483 => 339,  479 => 338,  475 => 337,  471 => 336,  467 => 335,  463 => 334,  459 => 333,  447 => 324,  443 => 323,  439 => 322,  435 => 321,  431 => 320,  336 => 228,  317 => 212,  305 => 203,  299 => 200,  293 => 197,  287 => 194,  276 => 185,  274 => 184,  257 => 170,  251 => 167,  196 => 90,  156 => 66,  143 => 68,  131 => 59,  127 => 58,  123 => 47,  119 => 56,  115 => 43,  84 => 27,  80 => 19,  76 => 25,  72 => 16,  64 => 12,  60 => 21,  56 => 9,  52 => 19,  44 => 10,  40 => 8,  36 => 7,  20 => 1,  130 => 143,  118 => 62,  112 => 42,  98 => 40,  92 => 21,  85 => 19,  81 => 41,  68 => 14,  58 => 24,  48 => 18,  38 => 13,  31 => 5,  28 => 4,);
    }
}
