<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_8bd9339d9eb92703ae06b5909cfe1650 extends Twig_Template
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
        if ($this->getContext($context, "include_jquery")) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
";
        }
        // line 4
        if ($this->getContext($context, "tinymce_jquery")) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.jquery.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/ready.min.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.standard.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo $this->getContext($context, "tinymce_config");
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 12,  30 => 6,  19 => 2,  17 => 1,  25 => 5,  23 => 4,  18 => 11,  148 => 60,  144 => 58,  142 => 57,  137 => 56,  132 => 55,  130 => 54,  126 => 52,  123 => 51,  118 => 48,  107 => 45,  100 => 43,  93 => 39,  87 => 38,  83 => 36,  79 => 34,  77 => 33,  64 => 30,  62 => 29,  47 => 24,  34 => 16,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 190,  617 => 188,  615 => 187,  612 => 186,  606 => 184,  604 => 183,  601 => 182,  595 => 180,  593 => 179,  590 => 178,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 143,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 138,  536 => 111,  532 => 110,  529 => 109,  521 => 106,  515 => 105,  507 => 103,  504 => 102,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  468 => 88,  462 => 87,  457 => 86,  454 => 85,  448 => 49,  444 => 48,  440 => 47,  436 => 46,  431 => 44,  426 => 42,  422 => 41,  417 => 40,  414 => 39,  408 => 36,  404 => 35,  398 => 32,  394 => 31,  389 => 29,  386 => 28,  383 => 27,  375 => 215,  373 => 210,  366 => 205,  364 => 177,  360 => 176,  357 => 175,  351 => 172,  348 => 171,  346 => 170,  342 => 168,  337 => 165,  334 => 164,  320 => 163,  314 => 161,  311 => 160,  293 => 159,  287 => 157,  285 => 156,  281 => 154,  279 => 153,  275 => 151,  273 => 150,  269 => 148,  267 => 138,  264 => 137,  260 => 135,  254 => 133,  251 => 132,  248 => 131,  234 => 130,  228 => 128,  220 => 126,  217 => 125,  199 => 124,  196 => 123,  194 => 122,  191 => 121,  189 => 120,  182 => 115,  177 => 112,  174 => 111,  171 => 95,  169 => 94,  164 => 91,  161 => 85,  159 => 64,  153 => 63,  141 => 72,  135 => 70,  131 => 68,  128 => 67,  125 => 66,  108 => 64,  104 => 44,  101 => 61,  84 => 60,  81 => 59,  78 => 58,  72 => 32,  70 => 55,  65 => 53,  61 => 51,  59 => 39,  56 => 38,  54 => 26,  45 => 20,  43 => 19,  41 => 18,  39 => 19,  35 => 8,  33 => 14,  31 => 13,  29 => 12,  27 => 11,  86 => 31,  80 => 30,  74 => 28,  71 => 27,  67 => 31,  63 => 24,  57 => 27,  51 => 25,  48 => 20,  44 => 10,  40 => 9,  37 => 16,  32 => 15,  26 => 14,);
    }
}
