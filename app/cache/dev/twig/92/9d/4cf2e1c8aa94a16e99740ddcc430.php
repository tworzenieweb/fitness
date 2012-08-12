<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_929d4cf2e1c8aa94a16e99740ddcc430 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
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
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
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
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  24 => 3,  110 => 60,  75 => 28,  66 => 22,  62 => 21,  59 => 20,  51 => 17,  48 => 16,  31 => 6,  22 => 2,  19 => 2,  17 => 1,  480 => 216,  418 => 214,  414 => 202,  410 => 200,  407 => 199,  399 => 191,  392 => 186,  389 => 185,  385 => 126,  382 => 125,  377 => 127,  375 => 125,  372 => 124,  363 => 121,  358 => 120,  354 => 119,  351 => 118,  348 => 117,  338 => 67,  335 => 66,  329 => 195,  327 => 185,  269 => 129,  267 => 117,  222 => 74,  220 => 66,  212 => 60,  210 => 59,  198 => 49,  196 => 48,  189 => 43,  186 => 42,  182 => 218,  180 => 199,  177 => 198,  175 => 42,  167 => 36,  164 => 35,  159 => 31,  156 => 30,  151 => 27,  125 => 25,  121 => 19,  118 => 18,  115 => 17,  109 => 15,  104 => 11,  99 => 10,  92 => 11,  88 => 10,  84 => 8,  81 => 7,  76 => 219,  74 => 35,  70 => 33,  68 => 30,  65 => 29,  63 => 17,  58 => 15,  55 => 14,  53 => 18,  45 => 4,  39 => 10,  30 => 1,  95 => 52,  57 => 17,  52 => 14,  46 => 12,  44 => 11,  37 => 7,  33 => 7,  29 => 6,  26 => 3,);
    }
}
