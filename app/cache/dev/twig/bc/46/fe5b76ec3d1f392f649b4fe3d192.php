<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_bc46fe5b76ec3d1f392f649b4fe3d192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'field_row' => array($this, 'block_field_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('field_row', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label")));
        // line 16
        echo "
    ";
        // line 17
        if ((!$this->getContext($context, "compound"))) {
            // line 18
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 21
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 25
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 29
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 30
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 32
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
            } else {
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
            }
            // line 37
            echo "            </span>
        </label>
    ";
        } else {
            // line 40
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 41
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
            } else {
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
            }
            // line 46
            echo "            ";
            echo (($this->getContext($context, "required")) ? ("*") : (""));
            echo "
        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "        ";
        if (!twig_in_filter("class", $this->getContext($context, "attr"))) {
            echo "class=\"unstyled\"";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 64
            echo "            <li>
                ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 76
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 78
                echo "            <li>
                ";
                // line 79
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label', array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget')) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "        </ul>
    ";
        } else {
            // line 84
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 85
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 86
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 88
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 89
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 90
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 91
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 92
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 94
                echo "        ";
            }
            // line 95
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 96
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 102
    public function block_field_row($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 104
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'row');
            echo "
    ";
        } else {
            // line 106
            echo "        <div class=\"control-group";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 107
            $this->displayBlock('label', $context, $blocks);
            // line 114
            echo "
            <div class=\"controls sonata-ba-field sonata-ba-field-";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "

                ";
            // line 119
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 120
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 124
            echo "
                ";
            // line 125
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 126
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), "html", null, true);
                echo "</span>
                ";
            }
            // line 128
            echo "            </div>
        </div>
    ";
        }
    }

    // line 107
    public function block_label($context, array $blocks = array())
    {
        // line 108
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 109
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 111
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 113
        echo "            ";
    }

    // line 133
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 134
        ob_start();
        // line 135
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 136
        if ($this->getContext($context, "allow_delete")) {
            // line 137
            echo "            <a href=\"#\" class=\"sonata-collection-delete\"></a>
        ";
        }
        // line 139
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 144
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 145
        ob_start();
        // line 146
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 147
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 148
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks)));
            // line 149
            echo "    ";
        }
        // line 150
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 153
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 155
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 156
        if ($this->getContext($context, "allow_add")) {
            // line 157
            echo "            <div><a href=\"#\" class=\"sonata-collection-add\"></a></div>
        ";
        }
        // line 159
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  517 => 159,  513 => 157,  511 => 156,  506 => 155,  489 => 153,  472 => 152,  468 => 151,  463 => 150,  460 => 149,  457 => 148,  454 => 147,  451 => 146,  449 => 145,  446 => 144,  437 => 139,  433 => 137,  431 => 136,  428 => 135,  426 => 134,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 108,  401 => 107,  394 => 128,  388 => 126,  386 => 125,  383 => 124,  377 => 121,  374 => 120,  372 => 119,  367 => 117,  356 => 115,  353 => 114,  351 => 107,  342 => 106,  336 => 104,  333 => 103,  330 => 102,  320 => 96,  317 => 95,  314 => 94,  308 => 92,  306 => 91,  298 => 89,  295 => 88,  289 => 86,  279 => 84,  263 => 78,  259 => 77,  254 => 76,  251 => 75,  246 => 73,  240 => 69,  231 => 66,  227 => 65,  220 => 63,  215 => 62,  213 => 61,  210 => 60,  200 => 56,  185 => 55,  180 => 54,  174 => 52,  161 => 44,  156 => 41,  140 => 40,  129 => 33,  127 => 32,  106 => 29,  104 => 28,  101 => 27,  93 => 24,  87 => 22,  75 => 18,  58 => 144,  55 => 143,  50 => 132,  48 => 102,  45 => 101,  43 => 73,  40 => 72,  28 => 13,  25 => 11,  313 => 142,  307 => 140,  304 => 139,  301 => 90,  293 => 134,  287 => 85,  281 => 130,  275 => 82,  269 => 126,  266 => 79,  264 => 124,  261 => 123,  257 => 120,  249 => 74,  245 => 113,  238 => 109,  224 => 64,  221 => 103,  216 => 101,  209 => 97,  205 => 57,  194 => 91,  189 => 90,  184 => 88,  177 => 53,  173 => 83,  162 => 78,  158 => 42,  155 => 76,  153 => 75,  148 => 73,  142 => 70,  132 => 35,  126 => 58,  121 => 57,  108 => 51,  102 => 49,  96 => 47,  90 => 23,  76 => 40,  73 => 17,  60 => 29,  57 => 28,  52 => 25,  49 => 24,  36 => 17,  242 => 67,  239 => 66,  234 => 108,  229 => 106,  226 => 62,  219 => 102,  214 => 59,  212 => 58,  207 => 56,  202 => 55,  199 => 93,  193 => 52,  190 => 51,  187 => 89,  181 => 48,  175 => 46,  172 => 45,  170 => 44,  167 => 80,  164 => 46,  159 => 38,  154 => 16,  149 => 71,  145 => 69,  143 => 42,  138 => 68,  135 => 37,  133 => 38,  130 => 59,  122 => 30,  116 => 33,  110 => 52,  107 => 30,  98 => 26,  84 => 21,  82 => 21,  74 => 19,  67 => 15,  65 => 14,  62 => 13,  56 => 12,  51 => 10,  38 => 60,  35 => 59,  33 => 52,  30 => 51,  27 => 2,  21 => 1,  118 => 56,  115 => 43,  109 => 39,  103 => 29,  95 => 25,  92 => 24,  89 => 31,  81 => 20,  78 => 19,  70 => 16,  68 => 33,  64 => 23,  61 => 22,  53 => 133,  47 => 16,  44 => 21,  41 => 20,  10 => 41,);
    }
}
