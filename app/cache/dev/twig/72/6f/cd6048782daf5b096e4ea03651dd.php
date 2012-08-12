<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_726fcd6048782daf5b096e4ea03651dd extends Twig_Template
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
        echo "<div class=\"search import clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/import.png"), "html", null, true);
        echo "\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty($this->getContext($context, "token")))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  480 => 216,  418 => 214,  410 => 200,  399 => 191,  338 => 67,  335 => 66,  329 => 195,  222 => 74,  198 => 49,  186 => 42,  385 => 126,  378 => 148,  363 => 121,  359 => 141,  354 => 119,  345 => 136,  339 => 133,  322 => 125,  318 => 124,  305 => 118,  291 => 111,  286 => 109,  270 => 101,  237 => 86,  88 => 10,  166 => 73,  636 => 387,  627 => 381,  621 => 375,  611 => 372,  597 => 366,  586 => 358,  580 => 355,  570 => 351,  560 => 344,  552 => 339,  535 => 328,  528 => 324,  522 => 319,  520 => 318,  514 => 315,  478 => 290,  473 => 288,  465 => 285,  461 => 284,  456 => 282,  439 => 273,  421 => 263,  396 => 158,  392 => 186,  382 => 125,  358 => 120,  352 => 219,  340 => 210,  303 => 182,  252 => 92,  201 => 128,  245 => 113,  238 => 109,  221 => 103,  162 => 59,  124 => 56,  576 => 354,  571 => 194,  565 => 192,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  524 => 322,  509 => 174,  503 => 172,  497 => 304,  491 => 156,  485 => 297,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  442 => 147,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 144,  365 => 107,  349 => 138,  347 => 101,  344 => 100,  326 => 126,  323 => 91,  321 => 90,  316 => 87,  309 => 83,  292 => 81,  283 => 168,  262 => 78,  257 => 120,  236 => 69,  216 => 101,  206 => 73,  197 => 56,  146 => 64,  111 => 40,  97 => 42,  105 => 44,  60 => 25,  10 => 41,  242 => 67,  239 => 149,  229 => 83,  226 => 82,  193 => 52,  190 => 84,  172 => 45,  167 => 36,  154 => 63,  138 => 61,  133 => 55,  21 => 3,  144 => 58,  126 => 57,  47 => 17,  18 => 1,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 379,  617 => 188,  615 => 187,  612 => 186,  606 => 370,  604 => 183,  601 => 368,  595 => 180,  593 => 179,  590 => 359,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 191,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 332,  536 => 111,  532 => 110,  529 => 180,  521 => 106,  515 => 105,  507 => 103,  504 => 308,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 161,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 202,  408 => 253,  398 => 159,  389 => 185,  375 => 125,  373 => 231,  366 => 205,  364 => 177,  360 => 106,  357 => 104,  348 => 117,  346 => 170,  337 => 165,  334 => 97,  311 => 160,  281 => 130,  273 => 102,  267 => 117,  264 => 98,  248 => 131,  234 => 108,  217 => 125,  171 => 75,  159 => 31,  108 => 51,  332 => 129,  327 => 185,  313 => 142,  307 => 140,  304 => 139,  284 => 84,  277 => 81,  272 => 79,  269 => 129,  260 => 157,  256 => 93,  244 => 73,  241 => 87,  219 => 78,  212 => 60,  207 => 56,  191 => 55,  188 => 69,  179 => 115,  173 => 83,  168 => 42,  165 => 60,  54 => 39,  517 => 176,  513 => 157,  511 => 156,  506 => 173,  489 => 299,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 280,  449 => 134,  446 => 144,  437 => 144,  433 => 270,  431 => 44,  428 => 268,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 199,  404 => 252,  401 => 160,  394 => 31,  388 => 240,  386 => 28,  383 => 27,  377 => 127,  374 => 147,  372 => 124,  367 => 117,  356 => 140,  353 => 114,  351 => 118,  342 => 135,  336 => 98,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 86,  308 => 184,  306 => 82,  301 => 138,  298 => 89,  295 => 177,  289 => 86,  279 => 167,  275 => 128,  263 => 78,  259 => 77,  254 => 133,  251 => 75,  249 => 115,  246 => 89,  240 => 69,  231 => 84,  227 => 65,  224 => 81,  215 => 136,  205 => 129,  200 => 72,  185 => 68,  180 => 199,  177 => 198,  174 => 62,  164 => 35,  135 => 59,  132 => 60,  122 => 44,  95 => 45,  84 => 39,  75 => 18,  38 => 8,  67 => 25,  51 => 38,  299 => 100,  293 => 134,  290 => 95,  287 => 132,  285 => 156,  280 => 106,  274 => 165,  271 => 85,  268 => 84,  266 => 125,  261 => 123,  247 => 74,  243 => 77,  228 => 128,  220 => 66,  218 => 72,  213 => 76,  209 => 97,  202 => 55,  196 => 48,  183 => 67,  181 => 48,  175 => 42,  158 => 70,  107 => 42,  101 => 42,  80 => 37,  63 => 22,  36 => 6,  156 => 30,  148 => 64,  142 => 63,  140 => 51,  127 => 42,  123 => 41,  115 => 44,  110 => 34,  85 => 33,  65 => 12,  59 => 18,  45 => 15,  26 => 3,  89 => 28,  82 => 23,  42 => 13,  103 => 41,  91 => 20,  74 => 35,  70 => 33,  66 => 21,  25 => 4,  22 => 2,  23 => 29,  223 => 96,  214 => 59,  210 => 59,  203 => 60,  199 => 93,  194 => 87,  192 => 62,  189 => 43,  187 => 89,  184 => 88,  178 => 72,  170 => 72,  157 => 64,  152 => 46,  145 => 69,  130 => 57,  125 => 25,  119 => 45,  116 => 29,  112 => 45,  102 => 37,  98 => 36,  76 => 26,  73 => 24,  69 => 23,  56 => 17,  32 => 8,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 13,  29 => 6,  24 => 3,  19 => 2,  68 => 13,  61 => 21,  44 => 12,  20 => 2,  161 => 71,  153 => 68,  150 => 34,  147 => 53,  143 => 43,  137 => 41,  129 => 49,  121 => 33,  118 => 18,  113 => 28,  104 => 11,  99 => 33,  94 => 35,  81 => 7,  78 => 28,  72 => 25,  64 => 25,  53 => 15,  50 => 18,  48 => 18,  41 => 7,  39 => 12,  35 => 6,  33 => 7,  30 => 4,  27 => 3,  182 => 218,  176 => 45,  169 => 61,  163 => 58,  160 => 57,  155 => 76,  151 => 27,  149 => 45,  141 => 40,  136 => 60,  134 => 48,  131 => 31,  128 => 30,  120 => 54,  117 => 42,  114 => 51,  109 => 15,  106 => 33,  100 => 47,  96 => 47,  93 => 30,  90 => 43,  87 => 30,  83 => 29,  79 => 21,  71 => 23,  62 => 11,  58 => 20,  55 => 20,  52 => 19,  49 => 16,  46 => 9,  43 => 13,  40 => 11,  37 => 10,  34 => 9,  31 => 6,  28 => 7,);
    }
}
