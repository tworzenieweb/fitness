<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_92a1eca99e9236e5034a5d11c21c7ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  607 => 432,  603 => 431,  600 => 430,  554 => 399,  519 => 395,  516 => 394,  341 => 159,  300 => 137,  204 => 78,  355 => 151,  350 => 149,  331 => 156,  328 => 140,  325 => 139,  312 => 131,  278 => 114,  250 => 105,  232 => 89,  265 => 239,  139 => 51,  480 => 216,  418 => 214,  410 => 200,  399 => 191,  338 => 158,  335 => 66,  329 => 195,  222 => 74,  198 => 49,  186 => 87,  385 => 126,  378 => 148,  363 => 121,  359 => 141,  354 => 163,  345 => 160,  339 => 133,  322 => 125,  318 => 135,  305 => 118,  291 => 111,  286 => 129,  270 => 101,  237 => 86,  88 => 27,  166 => 73,  636 => 387,  627 => 439,  621 => 375,  611 => 372,  597 => 366,  586 => 429,  580 => 355,  570 => 351,  560 => 344,  552 => 339,  535 => 328,  528 => 324,  522 => 319,  520 => 318,  514 => 393,  478 => 290,  473 => 288,  465 => 285,  461 => 284,  456 => 282,  439 => 273,  421 => 263,  396 => 158,  392 => 186,  382 => 125,  358 => 152,  352 => 150,  340 => 146,  303 => 182,  252 => 101,  201 => 77,  245 => 97,  238 => 93,  221 => 103,  162 => 80,  124 => 56,  576 => 354,  571 => 194,  565 => 192,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  524 => 322,  509 => 391,  503 => 172,  497 => 304,  491 => 156,  485 => 297,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  442 => 147,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 156,  365 => 107,  349 => 138,  347 => 101,  344 => 100,  326 => 126,  323 => 150,  321 => 149,  316 => 87,  309 => 130,  292 => 81,  283 => 168,  262 => 105,  257 => 109,  236 => 97,  216 => 101,  206 => 73,  197 => 56,  146 => 73,  111 => 40,  97 => 43,  105 => 37,  60 => 14,  10 => 41,  242 => 67,  239 => 149,  229 => 88,  226 => 89,  193 => 52,  190 => 72,  172 => 58,  167 => 82,  154 => 63,  138 => 49,  133 => 47,  21 => 3,  144 => 72,  126 => 45,  47 => 12,  18 => 1,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 379,  617 => 188,  615 => 187,  612 => 434,  606 => 370,  604 => 183,  601 => 368,  595 => 180,  593 => 179,  590 => 359,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 191,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 332,  536 => 396,  532 => 110,  529 => 180,  521 => 106,  515 => 105,  507 => 103,  504 => 389,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 161,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 202,  408 => 253,  398 => 159,  389 => 185,  375 => 157,  373 => 231,  366 => 205,  364 => 155,  360 => 153,  357 => 104,  348 => 117,  346 => 170,  337 => 145,  334 => 97,  311 => 160,  281 => 130,  273 => 111,  267 => 117,  264 => 98,  248 => 136,  234 => 108,  217 => 125,  171 => 75,  159 => 79,  108 => 38,  332 => 129,  327 => 185,  313 => 142,  307 => 141,  304 => 128,  284 => 84,  277 => 81,  272 => 121,  269 => 129,  260 => 157,  256 => 103,  244 => 73,  241 => 87,  219 => 83,  212 => 82,  207 => 77,  191 => 68,  188 => 67,  179 => 115,  173 => 83,  168 => 60,  165 => 64,  54 => 12,  517 => 176,  513 => 157,  511 => 156,  506 => 173,  489 => 299,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 280,  449 => 134,  446 => 144,  437 => 144,  433 => 270,  431 => 44,  428 => 268,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 199,  404 => 252,  401 => 160,  394 => 31,  388 => 240,  386 => 160,  383 => 159,  377 => 158,  374 => 147,  372 => 124,  367 => 117,  356 => 140,  353 => 114,  351 => 118,  342 => 147,  336 => 98,  333 => 157,  330 => 91,  320 => 163,  317 => 95,  314 => 145,  308 => 184,  306 => 129,  301 => 138,  298 => 89,  295 => 177,  289 => 86,  279 => 125,  275 => 128,  263 => 78,  259 => 77,  254 => 133,  251 => 227,  249 => 226,  246 => 225,  240 => 69,  231 => 84,  227 => 209,  224 => 86,  215 => 83,  205 => 76,  200 => 92,  185 => 68,  180 => 86,  177 => 85,  174 => 84,  164 => 35,  135 => 69,  132 => 54,  122 => 59,  95 => 23,  84 => 28,  75 => 21,  38 => 8,  67 => 15,  51 => 22,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 165,  271 => 110,  268 => 84,  266 => 107,  261 => 123,  247 => 74,  243 => 101,  228 => 128,  220 => 66,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 74,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 42,  101 => 25,  80 => 26,  63 => 17,  36 => 7,  156 => 56,  148 => 64,  142 => 63,  140 => 71,  127 => 42,  123 => 44,  115 => 55,  110 => 39,  85 => 26,  65 => 16,  59 => 12,  45 => 9,  26 => 3,  89 => 40,  82 => 25,  42 => 8,  103 => 41,  91 => 28,  74 => 17,  70 => 18,  66 => 20,  25 => 5,  22 => 2,  23 => 29,  223 => 88,  214 => 59,  210 => 78,  203 => 93,  199 => 93,  194 => 69,  192 => 90,  189 => 70,  187 => 89,  184 => 88,  178 => 72,  170 => 64,  157 => 78,  152 => 75,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 29,  112 => 45,  102 => 31,  98 => 35,  76 => 24,  73 => 23,  69 => 31,  56 => 14,  32 => 5,  17 => 1,  92 => 33,  86 => 30,  77 => 23,  57 => 13,  29 => 4,  24 => 3,  19 => 1,  68 => 20,  61 => 16,  44 => 10,  20 => 2,  161 => 71,  153 => 68,  150 => 34,  147 => 53,  143 => 57,  137 => 41,  129 => 46,  121 => 35,  118 => 50,  113 => 40,  104 => 11,  99 => 33,  94 => 35,  81 => 24,  78 => 32,  72 => 22,  64 => 28,  53 => 13,  50 => 13,  48 => 12,  41 => 9,  39 => 7,  35 => 7,  33 => 5,  30 => 5,  27 => 4,  182 => 70,  176 => 62,  169 => 83,  163 => 60,  160 => 53,  155 => 76,  151 => 62,  149 => 53,  141 => 43,  136 => 55,  134 => 48,  131 => 31,  128 => 39,  120 => 51,  117 => 43,  114 => 41,  109 => 15,  106 => 33,  100 => 30,  96 => 29,  93 => 31,  90 => 31,  87 => 29,  83 => 38,  79 => 24,  71 => 20,  62 => 17,  58 => 25,  55 => 14,  52 => 13,  49 => 16,  46 => 11,  43 => 8,  40 => 18,  37 => 17,  34 => 5,  31 => 4,  28 => 3,);
    }
}
