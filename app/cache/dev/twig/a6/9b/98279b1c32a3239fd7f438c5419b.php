<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_a69b98279b1c32a3239fd7f438c5419b extends Twig_Template
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
        echo "<td class=\"sonata-ba-list-field sonata-ba-list-field-action\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "actions"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 3
            echo "        ";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "actions"), "template"));
            $template->display($context);
            // line 4
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "</td>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  41 => 4,  37 => 3,  20 => 2,  50 => 20,  45 => 25,  39 => 23,  35 => 21,  29 => 19,  27 => 13,  18 => 11,  21 => 12,  17 => 1,  576 => 196,  571 => 194,  565 => 192,  563 => 191,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  529 => 180,  524 => 178,  517 => 176,  509 => 174,  506 => 173,  503 => 172,  497 => 159,  491 => 156,  485 => 152,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  449 => 134,  444 => 161,  442 => 147,  437 => 144,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  408 => 119,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 108,  365 => 107,  360 => 106,  357 => 104,  349 => 102,  347 => 101,  344 => 100,  336 => 98,  334 => 97,  326 => 92,  323 => 91,  321 => 90,  316 => 87,  314 => 86,  309 => 83,  306 => 82,  292 => 81,  283 => 80,  266 => 79,  262 => 78,  259 => 77,  257 => 76,  251 => 75,  247 => 74,  244 => 73,  241 => 72,  236 => 69,  229 => 67,  220 => 65,  216 => 64,  213 => 63,  209 => 62,  206 => 61,  203 => 60,  197 => 56,  191 => 55,  188 => 54,  184 => 52,  180 => 51,  175 => 50,  169 => 49,  157 => 48,  155 => 47,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  122 => 34,  119 => 33,  115 => 32,  111 => 30,  108 => 29,  100 => 167,  97 => 166,  93 => 164,  90 => 163,  87 => 132,  85 => 131,  81 => 129,  79 => 72,  76 => 71,  74 => 60,  71 => 59,  69 => 29,  63 => 27,  60 => 26,  57 => 25,  54 => 24,  48 => 22,  42 => 18,  40 => 17,  36 => 15,  33 => 20,);
    }
}
