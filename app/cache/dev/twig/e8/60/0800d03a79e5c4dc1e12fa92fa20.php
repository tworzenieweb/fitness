<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_e8600800d03a79e5c4dc1e12fa92fa20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute($this->getContext($context, "field_description"), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "help"), "html", null, true);
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  576 => 196,  571 => 194,  565 => 192,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  524 => 178,  509 => 174,  503 => 172,  497 => 159,  491 => 156,  485 => 152,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  442 => 147,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 108,  365 => 107,  349 => 102,  347 => 101,  344 => 100,  326 => 92,  323 => 91,  321 => 90,  316 => 87,  309 => 83,  292 => 81,  283 => 80,  262 => 78,  257 => 76,  236 => 69,  216 => 64,  206 => 61,  197 => 56,  146 => 44,  111 => 30,  97 => 41,  105 => 44,  60 => 20,  10 => 41,  242 => 67,  239 => 66,  229 => 67,  226 => 62,  193 => 52,  190 => 51,  172 => 45,  167 => 43,  154 => 16,  138 => 54,  133 => 55,  21 => 11,  144 => 58,  126 => 53,  47 => 21,  18 => 11,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 190,  617 => 188,  615 => 187,  612 => 186,  606 => 184,  604 => 183,  601 => 182,  595 => 180,  593 => 179,  590 => 178,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 191,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 138,  536 => 111,  532 => 110,  529 => 180,  521 => 106,  515 => 105,  507 => 103,  504 => 102,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 161,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 39,  408 => 119,  398 => 32,  389 => 29,  375 => 215,  373 => 210,  366 => 205,  364 => 177,  360 => 106,  357 => 104,  348 => 171,  346 => 170,  337 => 165,  334 => 97,  311 => 160,  281 => 154,  273 => 150,  267 => 138,  264 => 137,  248 => 131,  234 => 64,  217 => 125,  171 => 95,  159 => 38,  108 => 30,  332 => 92,  327 => 90,  313 => 89,  307 => 87,  304 => 86,  284 => 84,  277 => 81,  272 => 79,  269 => 148,  260 => 135,  256 => 69,  244 => 73,  241 => 72,  219 => 60,  212 => 58,  207 => 56,  191 => 55,  188 => 54,  179 => 46,  173 => 44,  168 => 42,  165 => 41,  54 => 18,  517 => 176,  513 => 157,  511 => 156,  506 => 173,  489 => 153,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 146,  449 => 134,  446 => 144,  437 => 144,  433 => 137,  431 => 44,  428 => 135,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 35,  401 => 107,  394 => 31,  388 => 126,  386 => 28,  383 => 27,  377 => 121,  374 => 120,  372 => 119,  367 => 117,  356 => 115,  353 => 114,  351 => 172,  342 => 168,  336 => 98,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 86,  308 => 92,  306 => 82,  301 => 90,  298 => 89,  295 => 88,  289 => 86,  279 => 153,  275 => 151,  263 => 78,  259 => 77,  254 => 133,  251 => 75,  249 => 74,  246 => 66,  240 => 69,  231 => 66,  227 => 65,  224 => 64,  215 => 62,  205 => 57,  200 => 56,  185 => 48,  180 => 51,  177 => 112,  174 => 111,  164 => 42,  135 => 39,  132 => 55,  122 => 34,  95 => 38,  84 => 22,  75 => 18,  38 => 17,  67 => 31,  51 => 10,  299 => 100,  293 => 159,  290 => 95,  287 => 157,  285 => 156,  280 => 82,  274 => 80,  271 => 85,  268 => 84,  266 => 79,  261 => 80,  247 => 74,  243 => 77,  228 => 128,  220 => 65,  218 => 72,  213 => 63,  209 => 62,  202 => 55,  196 => 123,  183 => 61,  181 => 48,  175 => 50,  158 => 42,  107 => 45,  101 => 42,  80 => 15,  63 => 25,  36 => 18,  156 => 41,  148 => 60,  142 => 57,  140 => 42,  127 => 32,  123 => 51,  115 => 32,  110 => 31,  85 => 131,  65 => 30,  59 => 27,  45 => 15,  26 => 22,  89 => 37,  82 => 35,  42 => 14,  103 => 35,  91 => 20,  74 => 13,  70 => 32,  66 => 28,  25 => 14,  22 => 12,  23 => 12,  223 => 96,  214 => 59,  210 => 60,  203 => 60,  199 => 54,  194 => 122,  192 => 62,  189 => 120,  187 => 50,  184 => 52,  178 => 72,  170 => 44,  157 => 48,  152 => 46,  145 => 69,  130 => 37,  125 => 66,  119 => 33,  116 => 46,  112 => 45,  102 => 26,  98 => 42,  76 => 71,  73 => 33,  69 => 29,  56 => 12,  32 => 13,  17 => 11,  92 => 19,  86 => 17,  77 => 14,  57 => 24,  29 => 23,  24 => 12,  19 => 11,  68 => 28,  61 => 28,  44 => 20,  20 => 2,  161 => 85,  153 => 63,  150 => 34,  147 => 51,  143 => 43,  137 => 41,  129 => 49,  121 => 21,  118 => 48,  113 => 46,  104 => 43,  99 => 40,  94 => 14,  81 => 35,  78 => 34,  72 => 32,  64 => 28,  53 => 25,  50 => 24,  48 => 23,  41 => 19,  39 => 23,  35 => 24,  33 => 17,  30 => 16,  27 => 15,  182 => 115,  176 => 45,  169 => 49,  163 => 58,  160 => 57,  155 => 47,  151 => 54,  149 => 45,  141 => 72,  136 => 47,  134 => 40,  131 => 52,  128 => 38,  120 => 50,  117 => 49,  114 => 35,  109 => 45,  106 => 44,  100 => 167,  96 => 23,  93 => 37,  90 => 37,  87 => 132,  83 => 34,  79 => 72,  71 => 29,  62 => 15,  58 => 15,  55 => 26,  52 => 22,  49 => 29,  46 => 21,  43 => 20,  40 => 17,  37 => 21,  34 => 20,  31 => 16,  28 => 15,);
    }
}
