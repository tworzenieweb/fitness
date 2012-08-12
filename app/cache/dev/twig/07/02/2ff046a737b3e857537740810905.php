<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_07022ff046a737b3e857537740810905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
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
        if ((($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "element")), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                echo "</a>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 18
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                echo "            ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 387,  627 => 381,  621 => 375,  611 => 372,  597 => 366,  586 => 358,  580 => 355,  570 => 351,  560 => 344,  552 => 339,  535 => 328,  528 => 324,  522 => 319,  520 => 318,  514 => 315,  478 => 290,  473 => 288,  465 => 285,  461 => 284,  456 => 282,  439 => 273,  421 => 263,  396 => 243,  392 => 242,  382 => 237,  358 => 222,  352 => 219,  340 => 210,  303 => 182,  252 => 154,  201 => 128,  245 => 113,  238 => 109,  221 => 103,  162 => 104,  124 => 83,  576 => 354,  571 => 194,  565 => 192,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  524 => 322,  509 => 174,  503 => 172,  497 => 304,  491 => 156,  485 => 297,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  442 => 147,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 229,  365 => 107,  349 => 102,  347 => 101,  344 => 100,  326 => 92,  323 => 91,  321 => 90,  316 => 87,  309 => 83,  292 => 81,  283 => 168,  262 => 78,  257 => 120,  236 => 69,  216 => 101,  206 => 61,  197 => 56,  146 => 44,  111 => 30,  97 => 42,  105 => 44,  60 => 29,  10 => 41,  242 => 67,  239 => 149,  229 => 106,  226 => 62,  193 => 52,  190 => 51,  172 => 45,  167 => 80,  154 => 16,  138 => 68,  133 => 55,  21 => 18,  144 => 58,  126 => 58,  47 => 21,  18 => 11,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 379,  617 => 188,  615 => 187,  612 => 186,  606 => 370,  604 => 183,  601 => 368,  595 => 180,  593 => 179,  590 => 359,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 191,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 332,  536 => 111,  532 => 110,  529 => 180,  521 => 106,  515 => 105,  507 => 103,  504 => 308,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 161,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 39,  408 => 253,  398 => 248,  389 => 29,  375 => 232,  373 => 231,  366 => 205,  364 => 177,  360 => 106,  357 => 104,  348 => 171,  346 => 170,  337 => 165,  334 => 97,  311 => 160,  281 => 130,  273 => 150,  267 => 138,  264 => 124,  248 => 131,  234 => 108,  217 => 125,  171 => 110,  159 => 38,  108 => 51,  332 => 92,  327 => 200,  313 => 142,  307 => 140,  304 => 139,  284 => 84,  277 => 81,  272 => 79,  269 => 163,  260 => 157,  256 => 69,  244 => 73,  241 => 72,  219 => 102,  212 => 58,  207 => 56,  191 => 55,  188 => 54,  179 => 115,  173 => 83,  168 => 42,  165 => 41,  54 => 40,  517 => 176,  513 => 157,  511 => 156,  506 => 173,  489 => 299,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 280,  449 => 134,  446 => 144,  437 => 144,  433 => 270,  431 => 44,  428 => 268,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 252,  401 => 107,  394 => 31,  388 => 240,  386 => 28,  383 => 27,  377 => 236,  374 => 120,  372 => 119,  367 => 117,  356 => 115,  353 => 114,  351 => 172,  342 => 168,  336 => 98,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 86,  308 => 184,  306 => 82,  301 => 138,  298 => 89,  295 => 177,  289 => 86,  279 => 167,  275 => 128,  263 => 78,  259 => 77,  254 => 133,  251 => 75,  249 => 115,  246 => 153,  240 => 69,  231 => 146,  227 => 65,  224 => 104,  215 => 136,  205 => 129,  200 => 56,  185 => 118,  180 => 51,  177 => 84,  174 => 111,  164 => 42,  135 => 88,  132 => 60,  122 => 34,  95 => 41,  84 => 43,  75 => 58,  38 => 17,  67 => 20,  51 => 10,  299 => 100,  293 => 134,  290 => 95,  287 => 132,  285 => 156,  280 => 82,  274 => 165,  271 => 85,  268 => 84,  266 => 125,  261 => 123,  247 => 74,  243 => 77,  228 => 128,  220 => 138,  218 => 72,  213 => 63,  209 => 97,  202 => 55,  196 => 123,  183 => 61,  181 => 48,  175 => 50,  158 => 77,  107 => 45,  101 => 42,  80 => 57,  63 => 25,  36 => 32,  156 => 41,  148 => 93,  142 => 92,  140 => 42,  127 => 32,  123 => 51,  115 => 32,  110 => 52,  85 => 59,  65 => 51,  59 => 18,  45 => 20,  26 => 14,  89 => 37,  82 => 62,  42 => 27,  103 => 44,  91 => 20,  74 => 13,  70 => 37,  66 => 49,  25 => 14,  22 => 12,  23 => 12,  223 => 96,  214 => 59,  210 => 60,  203 => 60,  199 => 93,  194 => 91,  192 => 62,  189 => 119,  187 => 89,  184 => 88,  178 => 72,  170 => 44,  157 => 48,  152 => 46,  145 => 69,  130 => 86,  125 => 66,  119 => 33,  116 => 46,  112 => 45,  102 => 49,  98 => 66,  76 => 20,  73 => 19,  69 => 28,  56 => 12,  32 => 16,  17 => 11,  92 => 19,  86 => 17,  77 => 14,  57 => 28,  29 => 15,  24 => 20,  19 => 11,  68 => 33,  61 => 50,  44 => 35,  20 => 11,  161 => 85,  153 => 75,  150 => 34,  147 => 51,  143 => 43,  137 => 41,  129 => 49,  121 => 57,  118 => 56,  113 => 75,  104 => 43,  99 => 71,  94 => 21,  81 => 35,  78 => 41,  72 => 32,  64 => 28,  53 => 45,  50 => 17,  48 => 23,  41 => 33,  39 => 23,  35 => 24,  33 => 16,  30 => 16,  27 => 21,  182 => 115,  176 => 45,  169 => 49,  163 => 58,  160 => 57,  155 => 76,  151 => 54,  149 => 45,  141 => 72,  136 => 47,  134 => 40,  131 => 52,  128 => 38,  120 => 50,  117 => 49,  114 => 23,  109 => 45,  106 => 71,  100 => 22,  96 => 47,  93 => 64,  90 => 67,  87 => 132,  83 => 34,  79 => 72,  71 => 29,  62 => 15,  58 => 17,  55 => 16,  52 => 25,  49 => 38,  46 => 40,  43 => 19,  40 => 18,  37 => 21,  34 => 18,  31 => 15,  28 => 15,);
    }
}
