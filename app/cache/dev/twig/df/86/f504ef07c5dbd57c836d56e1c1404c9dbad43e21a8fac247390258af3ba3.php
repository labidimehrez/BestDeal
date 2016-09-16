<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_df86f504ef07c5dbd57c836d56e1c1404c9dbad43e21a8fac247390258af3ba3 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  29 => 4,  42 => 12,  35 => 7,  26 => 3,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  79 => 29,  75 => 28,  50 => 15,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  91 => 35,  86 => 28,  69 => 25,  66 => 25,  62 => 24,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 14,  32 => 6,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  33 => 6,  30 => 5,  548 => 184,  539 => 353,  535 => 352,  531 => 351,  527 => 350,  523 => 349,  519 => 348,  515 => 347,  511 => 346,  507 => 345,  503 => 344,  499 => 343,  495 => 342,  491 => 341,  487 => 340,  483 => 339,  479 => 338,  475 => 337,  471 => 336,  467 => 335,  463 => 334,  459 => 333,  447 => 324,  443 => 323,  439 => 322,  435 => 321,  431 => 320,  336 => 228,  317 => 212,  305 => 203,  299 => 200,  293 => 197,  287 => 194,  276 => 185,  274 => 184,  257 => 170,  251 => 167,  196 => 90,  156 => 66,  143 => 68,  131 => 59,  127 => 58,  123 => 47,  119 => 56,  115 => 43,  84 => 27,  80 => 19,  76 => 25,  72 => 16,  64 => 12,  60 => 21,  56 => 9,  52 => 19,  44 => 10,  40 => 8,  36 => 7,  20 => 1,  130 => 143,  118 => 62,  112 => 42,  98 => 40,  92 => 21,  85 => 19,  81 => 41,  68 => 14,  58 => 24,  48 => 18,  38 => 13,  31 => 5,  28 => 4,);
    }
}
