<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_3647f2e335c1be9fee1f2dffb4209dd3 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  24 => 3,  110 => 60,  75 => 28,  66 => 22,  62 => 21,  59 => 20,  51 => 17,  48 => 16,  31 => 6,  22 => 2,  19 => 2,  17 => 1,  480 => 216,  418 => 214,  414 => 202,  410 => 200,  407 => 199,  399 => 191,  392 => 186,  389 => 185,  385 => 126,  382 => 125,  377 => 127,  375 => 125,  372 => 124,  363 => 121,  358 => 120,  354 => 119,  351 => 118,  348 => 117,  338 => 67,  335 => 66,  329 => 195,  327 => 185,  269 => 129,  267 => 117,  222 => 74,  220 => 66,  212 => 60,  210 => 59,  198 => 49,  196 => 48,  189 => 43,  186 => 42,  182 => 218,  180 => 199,  177 => 198,  175 => 42,  167 => 36,  164 => 35,  159 => 31,  156 => 30,  151 => 27,  125 => 25,  121 => 19,  118 => 18,  115 => 17,  109 => 15,  104 => 11,  99 => 10,  92 => 11,  88 => 10,  84 => 8,  81 => 7,  76 => 219,  74 => 35,  70 => 33,  68 => 30,  65 => 29,  63 => 17,  58 => 15,  55 => 14,  53 => 18,  45 => 4,  39 => 10,  30 => 1,  95 => 52,  57 => 17,  52 => 14,  46 => 12,  44 => 11,  37 => 7,  33 => 7,  29 => 6,  26 => 3,);
    }
}
