<?php

/* TworzeniewebUserBundle:Default:_login.html.twig */
class __TwigTemplate_48305a05394d20942434e42b81d8edbf extends Twig_Template
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
        $context["extended"] = $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED");
        // line 2
        echo "
<div id=\"login-box\" class=\"login ";
        // line 3
        if ($this->getContext($context, "extended")) {
            echo "extended";
        }
        echo "\">
    <div class=\"login-inner\">
    ";
        // line 5
        if ($this->getContext($context, "extended")) {
            // line 6
            echo "        <a class=\"login-box\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Wyloguj</a>
        <div class=\"row\">
                <div class=\"ten columns offset-by-one\">

                <p>Zalogowano jako: <span class=\"secondary radius label\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</span></p>

                </div>
        </div>

    ";
        } else {
            // line 16
            echo "        <span class=\"login-box\">Strefa klienta</span>
        ";
            // line 17
            if ((array_key_exists("error", $context) && $this->getContext($context, "error"))) {
                // line 18
                echo "            <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
                echo "</div>
        ";
            }
            // line 20
            echo "        
        <form action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
            echo "\" />
            
            <div class=\"row\">
                <div class=\"ten columns offset-by-one\">
                <h5>Panel Klienta</h5>
                <label for=\"username\">Nazwa użytkownika</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
            echo "\" />
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"ten columns offset-by-one\">
                    <label for=\"password\">Hasło</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"one columns offset-by-one\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </div>
                <div class=\"nine columns\">
                    <label for=\"remember_me\">Pamiętaj mnie</label>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"ten columns offset-by-one\">
                    <div class=\"right\">
                        <button class=\"button tiny secondary\" type=\"submit\" id=\"_submit\">Zaloguj</button>
                    </div>
                </div>
            </div>


            
        </form>
    ";
        }
        // line 60
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TworzeniewebUserBundle:Default:_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 60,  75 => 28,  66 => 22,  62 => 21,  59 => 20,  51 => 17,  48 => 16,  31 => 6,  22 => 3,  19 => 2,  17 => 1,  480 => 216,  418 => 214,  414 => 202,  410 => 200,  407 => 199,  399 => 191,  392 => 186,  389 => 185,  385 => 126,  382 => 125,  377 => 127,  375 => 125,  372 => 124,  363 => 121,  358 => 120,  354 => 119,  351 => 118,  348 => 117,  338 => 67,  335 => 66,  329 => 195,  327 => 185,  269 => 129,  267 => 117,  222 => 74,  220 => 66,  212 => 60,  210 => 59,  198 => 49,  196 => 48,  189 => 43,  186 => 42,  182 => 218,  180 => 199,  177 => 198,  175 => 42,  167 => 36,  164 => 35,  159 => 31,  156 => 30,  151 => 27,  125 => 25,  121 => 19,  118 => 18,  115 => 17,  109 => 15,  104 => 11,  99 => 10,  92 => 11,  88 => 10,  84 => 8,  81 => 7,  76 => 219,  74 => 35,  70 => 33,  68 => 30,  65 => 29,  63 => 17,  58 => 15,  55 => 14,  53 => 18,  45 => 4,  39 => 10,  30 => 1,  95 => 52,  57 => 17,  52 => 14,  46 => 12,  44 => 11,  37 => 7,  33 => 2,  29 => 5,  26 => 3,);
    }
}
