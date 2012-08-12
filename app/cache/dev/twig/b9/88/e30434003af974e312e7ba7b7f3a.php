<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_b988e30434003af974e312e7ba7b7f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, "inline") == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 12,  144 => 58,  126 => 52,  47 => 28,  18 => 11,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 190,  617 => 188,  615 => 187,  612 => 186,  606 => 184,  604 => 183,  601 => 182,  595 => 180,  593 => 179,  590 => 178,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 143,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 138,  536 => 111,  532 => 110,  529 => 109,  521 => 106,  515 => 105,  507 => 103,  504 => 102,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 48,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 39,  408 => 36,  398 => 32,  389 => 29,  375 => 215,  373 => 210,  366 => 205,  364 => 177,  360 => 176,  357 => 175,  348 => 171,  346 => 170,  337 => 165,  334 => 164,  311 => 160,  281 => 154,  273 => 150,  267 => 138,  264 => 137,  248 => 131,  234 => 130,  217 => 125,  171 => 95,  159 => 64,  108 => 64,  332 => 92,  327 => 90,  313 => 89,  307 => 87,  304 => 86,  284 => 84,  277 => 81,  272 => 79,  269 => 148,  260 => 135,  256 => 69,  244 => 65,  241 => 64,  219 => 57,  212 => 53,  207 => 51,  191 => 121,  188 => 49,  179 => 46,  173 => 44,  168 => 42,  165 => 41,  54 => 26,  517 => 159,  513 => 157,  511 => 156,  506 => 155,  489 => 153,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 146,  449 => 145,  446 => 144,  437 => 139,  433 => 137,  431 => 44,  428 => 135,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 35,  401 => 107,  394 => 31,  388 => 126,  386 => 28,  383 => 27,  377 => 121,  374 => 120,  372 => 119,  367 => 117,  356 => 115,  353 => 114,  351 => 172,  342 => 168,  336 => 94,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 161,  308 => 92,  306 => 91,  301 => 90,  298 => 89,  295 => 88,  289 => 86,  279 => 153,  275 => 151,  263 => 78,  259 => 77,  254 => 133,  251 => 132,  249 => 74,  246 => 66,  240 => 69,  231 => 66,  227 => 65,  224 => 64,  215 => 62,  205 => 57,  200 => 56,  185 => 48,  180 => 54,  177 => 112,  174 => 111,  164 => 91,  135 => 70,  132 => 55,  122 => 30,  95 => 25,  84 => 25,  75 => 18,  38 => 24,  67 => 31,  51 => 25,  299 => 100,  293 => 159,  290 => 95,  287 => 157,  285 => 156,  280 => 82,  274 => 80,  271 => 85,  268 => 84,  266 => 79,  261 => 80,  247 => 79,  243 => 77,  228 => 128,  220 => 126,  218 => 72,  213 => 61,  209 => 69,  202 => 66,  196 => 123,  183 => 61,  181 => 60,  175 => 58,  158 => 42,  107 => 45,  101 => 61,  80 => 23,  63 => 24,  36 => 14,  156 => 41,  148 => 60,  142 => 57,  140 => 40,  127 => 32,  123 => 51,  115 => 42,  110 => 18,  85 => 28,  65 => 53,  59 => 39,  45 => 25,  26 => 13,  89 => 20,  82 => 19,  42 => 16,  103 => 24,  91 => 20,  74 => 28,  70 => 19,  66 => 5,  25 => 13,  22 => 13,  23 => 12,  223 => 96,  214 => 90,  210 => 60,  203 => 84,  199 => 124,  194 => 122,  192 => 62,  189 => 120,  187 => 77,  184 => 76,  178 => 72,  170 => 43,  157 => 61,  152 => 59,  145 => 32,  130 => 54,  125 => 66,  119 => 45,  116 => 20,  112 => 43,  102 => 15,  98 => 26,  76 => 21,  73 => 17,  69 => 6,  56 => 38,  32 => 16,  17 => 11,  92 => 39,  86 => 31,  77 => 33,  57 => 27,  29 => 14,  24 => 11,  19 => 2,  68 => 20,  61 => 16,  44 => 22,  20 => 11,  161 => 85,  153 => 63,  150 => 34,  147 => 51,  143 => 46,  137 => 56,  129 => 24,  121 => 21,  118 => 48,  113 => 19,  104 => 44,  99 => 33,  94 => 14,  81 => 59,  78 => 58,  72 => 32,  64 => 17,  53 => 133,  50 => 20,  48 => 23,  41 => 25,  39 => 23,  35 => 21,  33 => 20,  30 => 32,  27 => 13,  182 => 115,  176 => 45,  169 => 94,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 72,  136 => 47,  134 => 50,  131 => 68,  128 => 67,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 29,  100 => 43,  96 => 34,  93 => 39,  90 => 28,  87 => 38,  83 => 36,  79 => 34,  71 => 27,  62 => 29,  58 => 15,  55 => 14,  52 => 10,  49 => 29,  46 => 64,  43 => 26,  40 => 17,  37 => 18,  34 => 17,  31 => 15,  28 => 13,);
    }
}
