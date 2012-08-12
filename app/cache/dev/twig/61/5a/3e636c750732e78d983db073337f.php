<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_615a3e636c750732e78d983db073337f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->getContext($context, "value")) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "value")), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description"));
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description"));
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 152,  378 => 148,  363 => 142,  359 => 141,  354 => 139,  345 => 136,  339 => 133,  322 => 125,  318 => 124,  305 => 118,  291 => 111,  286 => 109,  270 => 101,  237 => 86,  88 => 35,  166 => 71,  636 => 387,  627 => 381,  621 => 375,  611 => 372,  597 => 366,  586 => 358,  580 => 355,  570 => 351,  560 => 344,  552 => 339,  535 => 328,  528 => 324,  522 => 319,  520 => 318,  514 => 315,  478 => 290,  473 => 288,  465 => 285,  461 => 284,  456 => 282,  439 => 273,  421 => 263,  396 => 158,  392 => 242,  382 => 237,  358 => 222,  352 => 219,  340 => 210,  303 => 182,  252 => 92,  201 => 128,  245 => 113,  238 => 109,  221 => 103,  162 => 59,  124 => 83,  576 => 354,  571 => 194,  565 => 192,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  524 => 322,  509 => 174,  503 => 172,  497 => 304,  491 => 156,  485 => 297,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  442 => 147,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 144,  365 => 107,  349 => 138,  347 => 101,  344 => 100,  326 => 126,  323 => 91,  321 => 90,  316 => 87,  309 => 83,  292 => 81,  283 => 168,  262 => 78,  257 => 120,  236 => 69,  216 => 101,  206 => 73,  197 => 56,  146 => 44,  111 => 40,  97 => 42,  105 => 44,  60 => 30,  10 => 41,  242 => 67,  239 => 149,  229 => 83,  226 => 82,  193 => 52,  190 => 84,  172 => 45,  167 => 80,  154 => 55,  138 => 68,  133 => 55,  21 => 18,  144 => 58,  126 => 58,  47 => 20,  18 => 11,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 379,  617 => 188,  615 => 187,  612 => 186,  606 => 370,  604 => 183,  601 => 368,  595 => 180,  593 => 179,  590 => 359,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 191,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 332,  536 => 111,  532 => 110,  529 => 180,  521 => 106,  515 => 105,  507 => 103,  504 => 308,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 161,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 39,  408 => 253,  398 => 159,  389 => 154,  375 => 232,  373 => 231,  366 => 205,  364 => 177,  360 => 106,  357 => 104,  348 => 171,  346 => 170,  337 => 165,  334 => 97,  311 => 160,  281 => 130,  273 => 102,  267 => 100,  264 => 98,  248 => 131,  234 => 108,  217 => 125,  171 => 110,  159 => 58,  108 => 51,  332 => 129,  327 => 200,  313 => 142,  307 => 140,  304 => 139,  284 => 84,  277 => 81,  272 => 79,  269 => 163,  260 => 157,  256 => 93,  244 => 73,  241 => 87,  219 => 78,  212 => 58,  207 => 56,  191 => 55,  188 => 69,  179 => 115,  173 => 83,  168 => 42,  165 => 60,  54 => 40,  517 => 176,  513 => 157,  511 => 156,  506 => 173,  489 => 299,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 280,  449 => 134,  446 => 144,  437 => 144,  433 => 270,  431 => 44,  428 => 268,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 252,  401 => 160,  394 => 31,  388 => 240,  386 => 28,  383 => 27,  377 => 236,  374 => 147,  372 => 119,  367 => 117,  356 => 140,  353 => 114,  351 => 172,  342 => 135,  336 => 98,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 86,  308 => 184,  306 => 82,  301 => 138,  298 => 89,  295 => 177,  289 => 86,  279 => 167,  275 => 128,  263 => 78,  259 => 77,  254 => 133,  251 => 75,  249 => 115,  246 => 89,  240 => 69,  231 => 84,  227 => 65,  224 => 81,  215 => 136,  205 => 129,  200 => 72,  185 => 68,  180 => 66,  177 => 63,  174 => 62,  164 => 42,  135 => 59,  132 => 60,  122 => 44,  95 => 37,  84 => 40,  75 => 58,  38 => 17,  67 => 33,  51 => 10,  299 => 100,  293 => 134,  290 => 95,  287 => 132,  285 => 156,  280 => 106,  274 => 165,  271 => 85,  268 => 84,  266 => 125,  261 => 123,  247 => 74,  243 => 77,  228 => 128,  220 => 138,  218 => 72,  213 => 76,  209 => 97,  202 => 55,  196 => 123,  183 => 67,  181 => 48,  175 => 50,  158 => 77,  107 => 45,  101 => 42,  80 => 57,  63 => 31,  36 => 32,  156 => 67,  148 => 64,  142 => 92,  140 => 51,  127 => 32,  123 => 55,  115 => 32,  110 => 52,  85 => 59,  65 => 27,  59 => 18,  45 => 19,  26 => 14,  89 => 37,  82 => 62,  42 => 27,  103 => 44,  91 => 20,  74 => 13,  70 => 37,  66 => 49,  25 => 14,  22 => 13,  23 => 12,  223 => 96,  214 => 59,  210 => 75,  203 => 60,  199 => 93,  194 => 71,  192 => 62,  189 => 119,  187 => 89,  184 => 88,  178 => 72,  170 => 72,  157 => 48,  152 => 46,  145 => 69,  130 => 57,  125 => 56,  119 => 43,  116 => 46,  112 => 45,  102 => 49,  98 => 66,  76 => 34,  73 => 36,  69 => 28,  56 => 12,  32 => 16,  17 => 11,  92 => 36,  86 => 17,  77 => 31,  57 => 23,  29 => 15,  24 => 13,  19 => 12,  68 => 33,  61 => 27,  44 => 35,  20 => 12,  161 => 69,  153 => 66,  150 => 34,  147 => 53,  143 => 43,  137 => 41,  129 => 49,  121 => 57,  118 => 56,  113 => 50,  104 => 47,  99 => 38,  94 => 44,  81 => 35,  78 => 37,  72 => 32,  64 => 28,  53 => 22,  50 => 21,  48 => 20,  41 => 18,  39 => 23,  35 => 17,  33 => 16,  30 => 16,  27 => 14,  182 => 79,  176 => 45,  169 => 61,  163 => 58,  160 => 57,  155 => 76,  151 => 65,  149 => 45,  141 => 72,  136 => 47,  134 => 48,  131 => 47,  128 => 46,  120 => 54,  117 => 42,  114 => 23,  109 => 39,  106 => 71,  100 => 22,  96 => 47,  93 => 64,  90 => 67,  87 => 41,  83 => 32,  79 => 72,  71 => 29,  62 => 26,  58 => 25,  55 => 22,  52 => 25,  49 => 21,  46 => 21,  43 => 19,  40 => 18,  37 => 17,  34 => 16,  31 => 15,  28 => 15,);
    }
}
