<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_95d3c7ccd7cd9ff23cb3cc22a539d669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <input class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
    <input class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
";
    }

    // line 25
    public function block_preview($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "show", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "show"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "    </div>
";
    }

    // line 49
    public function block_form($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 51
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  60 => 27,  10 => 41,  242 => 67,  239 => 66,  229 => 63,  226 => 62,  193 => 52,  190 => 51,  172 => 45,  167 => 43,  154 => 16,  138 => 40,  133 => 55,  21 => 1,  144 => 58,  126 => 53,  47 => 21,  18 => 11,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 190,  617 => 188,  615 => 187,  612 => 186,  606 => 184,  604 => 183,  601 => 182,  595 => 180,  593 => 179,  590 => 178,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 143,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 138,  536 => 111,  532 => 110,  529 => 109,  521 => 106,  515 => 105,  507 => 103,  504 => 102,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 48,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 39,  408 => 36,  398 => 32,  389 => 29,  375 => 215,  373 => 210,  366 => 205,  364 => 177,  360 => 176,  357 => 175,  348 => 171,  346 => 170,  337 => 165,  334 => 164,  311 => 160,  281 => 154,  273 => 150,  267 => 138,  264 => 137,  248 => 131,  234 => 64,  217 => 125,  171 => 95,  159 => 38,  108 => 64,  332 => 92,  327 => 90,  313 => 89,  307 => 87,  304 => 86,  284 => 84,  277 => 81,  272 => 79,  269 => 148,  260 => 135,  256 => 69,  244 => 65,  241 => 64,  219 => 60,  212 => 58,  207 => 56,  191 => 121,  188 => 49,  179 => 46,  173 => 44,  168 => 42,  165 => 41,  54 => 25,  517 => 159,  513 => 157,  511 => 156,  506 => 155,  489 => 153,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 146,  449 => 145,  446 => 144,  437 => 139,  433 => 137,  431 => 44,  428 => 135,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 35,  401 => 107,  394 => 31,  388 => 126,  386 => 28,  383 => 27,  377 => 121,  374 => 120,  372 => 119,  367 => 117,  356 => 115,  353 => 114,  351 => 172,  342 => 168,  336 => 94,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 161,  308 => 92,  306 => 91,  301 => 90,  298 => 89,  295 => 88,  289 => 86,  279 => 153,  275 => 151,  263 => 78,  259 => 77,  254 => 133,  251 => 132,  249 => 74,  246 => 66,  240 => 69,  231 => 66,  227 => 65,  224 => 64,  215 => 62,  205 => 57,  200 => 56,  185 => 48,  180 => 54,  177 => 112,  174 => 111,  164 => 42,  135 => 39,  132 => 55,  122 => 34,  95 => 33,  84 => 22,  75 => 18,  38 => 17,  67 => 29,  51 => 10,  299 => 100,  293 => 159,  290 => 95,  287 => 157,  285 => 156,  280 => 82,  274 => 80,  271 => 85,  268 => 84,  266 => 79,  261 => 80,  247 => 79,  243 => 77,  228 => 128,  220 => 126,  218 => 72,  213 => 61,  209 => 69,  202 => 55,  196 => 123,  183 => 61,  181 => 48,  175 => 46,  158 => 42,  107 => 45,  101 => 42,  80 => 36,  63 => 24,  36 => 14,  156 => 41,  148 => 60,  142 => 57,  140 => 40,  127 => 32,  123 => 51,  115 => 43,  110 => 31,  85 => 28,  65 => 16,  59 => 39,  45 => 20,  26 => 14,  89 => 37,  82 => 21,  42 => 19,  103 => 35,  91 => 20,  74 => 19,  70 => 26,  66 => 28,  25 => 13,  22 => 12,  23 => 12,  223 => 96,  214 => 59,  210 => 60,  203 => 84,  199 => 54,  194 => 122,  192 => 62,  189 => 120,  187 => 50,  184 => 76,  178 => 72,  170 => 44,  157 => 61,  152 => 59,  145 => 69,  130 => 37,  125 => 66,  119 => 45,  116 => 33,  112 => 46,  102 => 15,  98 => 42,  76 => 21,  73 => 32,  69 => 30,  56 => 12,  32 => 16,  17 => 1,  92 => 40,  86 => 36,  77 => 33,  57 => 26,  29 => 15,  24 => 14,  19 => 2,  68 => 25,  61 => 22,  44 => 15,  20 => 2,  161 => 85,  153 => 63,  150 => 34,  147 => 51,  143 => 42,  137 => 56,  129 => 24,  121 => 21,  118 => 50,  113 => 48,  104 => 44,  99 => 33,  94 => 14,  81 => 29,  78 => 33,  72 => 32,  64 => 28,  53 => 18,  50 => 20,  48 => 22,  41 => 14,  39 => 23,  35 => 17,  33 => 4,  30 => 14,  27 => 2,  182 => 115,  176 => 45,  169 => 94,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 71,  141 => 72,  136 => 47,  134 => 50,  131 => 68,  128 => 67,  120 => 50,  117 => 49,  114 => 35,  109 => 39,  106 => 29,  100 => 43,  96 => 40,  93 => 39,  90 => 39,  87 => 38,  83 => 37,  79 => 34,  71 => 27,  62 => 15,  58 => 15,  55 => 23,  52 => 10,  49 => 29,  46 => 64,  43 => 21,  40 => 20,  37 => 3,  34 => 17,  31 => 5,  28 => 13,);
    }
}
