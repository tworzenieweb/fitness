<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_9ba2f9427c3e11b9c92fc6d71907e745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name")))), 1 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name"), 1 => $this->getContext($context, "object"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  45 => 25,  39 => 23,  35 => 21,  29 => 19,  27 => 13,  18 => 11,  21 => 12,  17 => 11,  576 => 196,  571 => 194,  565 => 192,  563 => 191,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  529 => 180,  524 => 178,  517 => 176,  509 => 174,  506 => 173,  503 => 172,  497 => 159,  491 => 156,  485 => 152,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  449 => 134,  444 => 161,  442 => 147,  437 => 144,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  408 => 119,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 108,  365 => 107,  360 => 106,  357 => 104,  349 => 102,  347 => 101,  344 => 100,  336 => 98,  334 => 97,  326 => 92,  323 => 91,  321 => 90,  316 => 87,  314 => 86,  309 => 83,  306 => 82,  292 => 81,  283 => 80,  266 => 79,  262 => 78,  259 => 77,  257 => 76,  251 => 75,  247 => 74,  244 => 73,  241 => 72,  236 => 69,  229 => 67,  220 => 65,  216 => 64,  213 => 63,  209 => 62,  206 => 61,  203 => 60,  197 => 56,  191 => 55,  188 => 54,  184 => 52,  180 => 51,  175 => 50,  169 => 49,  157 => 48,  155 => 47,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  122 => 34,  119 => 33,  115 => 32,  111 => 30,  108 => 29,  100 => 167,  97 => 166,  93 => 164,  90 => 163,  87 => 132,  85 => 131,  81 => 129,  79 => 72,  76 => 71,  74 => 60,  71 => 59,  69 => 29,  63 => 27,  60 => 26,  57 => 25,  54 => 24,  48 => 22,  42 => 18,  40 => 17,  36 => 15,  33 => 20,);
    }
}
