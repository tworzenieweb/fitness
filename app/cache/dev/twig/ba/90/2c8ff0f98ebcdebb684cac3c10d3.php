<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_ba902c8ff0f98ebcdebb684cac3c10d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        <table class=\"table table-bordered table-striped sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 25
                echo "                    ";
                if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                    // line 26
                    echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</td>
                            <td>
                                ";
                    // line 29
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 30
                        echo "                                    ";
                        if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                            // line 31
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">
                                            <img src=\"";
                            // line 32
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                            echo "\"  alt=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            echo "\" />";
                            // line 33
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 34
                            echo "</a>
                                    ";
                        } else {
                            // line 36
                            echo "                                        <div class=\"btn-group\">
                                            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <img src=\"";
                            // line 38
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                            echo "\"  alt=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            echo "\" />
                                                ";
                            // line 39
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                            echo "
                                                <span class=\"caret\"></span>
                                            </a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                            // line 43
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 44
                                echo "                                                <li>
                                                    <a href=\"";
                                // line 45
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getContext($context, "subclass"), "html", null, true);
                                echo "</a>
                                                </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 48
                            echo "                                            </ul>
                                        </div>
                                    ";
                        }
                        // line 51
                        echo "                                ";
                    }
                    // line 52
                    echo "                            </td>
                            <td>
                                ";
                    // line 54
                    if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                        // line 55
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">
                                        <img src=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                        echo "\" alt=\"";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        echo "\" />";
                        // line 57
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                        // line 58
                        echo "</a>
                                ";
                    }
                    // line 60
                    echo "                            </td>
                        </tr>
                    ";
                }
                // line 63
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 64
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 60,  144 => 58,  142 => 57,  137 => 56,  132 => 55,  130 => 54,  126 => 52,  123 => 51,  118 => 48,  107 => 45,  100 => 43,  93 => 39,  87 => 38,  83 => 36,  79 => 34,  77 => 33,  64 => 30,  62 => 29,  47 => 24,  34 => 16,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 190,  617 => 188,  615 => 187,  612 => 186,  606 => 184,  604 => 183,  601 => 182,  595 => 180,  593 => 179,  590 => 178,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 143,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 138,  536 => 111,  532 => 110,  529 => 109,  521 => 106,  515 => 105,  507 => 103,  504 => 102,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  468 => 88,  462 => 87,  457 => 86,  454 => 85,  448 => 49,  444 => 48,  440 => 47,  436 => 46,  431 => 44,  426 => 42,  422 => 41,  417 => 40,  414 => 39,  408 => 36,  404 => 35,  398 => 32,  394 => 31,  389 => 29,  386 => 28,  383 => 27,  375 => 215,  373 => 210,  366 => 205,  364 => 177,  360 => 176,  357 => 175,  351 => 172,  348 => 171,  346 => 170,  342 => 168,  337 => 165,  334 => 164,  320 => 163,  314 => 161,  311 => 160,  293 => 159,  287 => 157,  285 => 156,  281 => 154,  279 => 153,  275 => 151,  273 => 150,  269 => 148,  267 => 138,  264 => 137,  260 => 135,  254 => 133,  251 => 132,  248 => 131,  234 => 130,  228 => 128,  220 => 126,  217 => 125,  199 => 124,  196 => 123,  194 => 122,  191 => 121,  189 => 120,  182 => 115,  177 => 112,  174 => 111,  171 => 95,  169 => 94,  164 => 91,  161 => 85,  159 => 64,  153 => 63,  141 => 72,  135 => 70,  131 => 68,  128 => 67,  125 => 66,  108 => 64,  104 => 44,  101 => 61,  84 => 60,  81 => 59,  78 => 58,  72 => 32,  70 => 55,  65 => 53,  61 => 51,  59 => 39,  56 => 38,  54 => 26,  45 => 20,  43 => 19,  41 => 18,  39 => 19,  35 => 15,  33 => 14,  31 => 13,  29 => 15,  27 => 11,  86 => 31,  80 => 30,  74 => 28,  71 => 27,  67 => 31,  63 => 24,  57 => 27,  51 => 25,  48 => 20,  44 => 19,  40 => 17,  37 => 16,  32 => 15,  26 => 14,);
    }
}
