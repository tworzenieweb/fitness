<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1a191a66f94840d437ccf2251d6e6cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TworzeniewebFitnessBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TworzeniewebFitnessBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "        
        <div class=\"five columns\">
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
            
            <div class=\"row\">

                ";
        // line 11
        if ($this->getContext($context, "error")) {
            // line 12
            echo "                <div class=\"alert-box alert\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</div>
                ";
        }
        // line 14
        echo "
                <h5>Panel Klienta</h5>
                <label for=\"username\">Nazwa użytkownika</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

            </div>
            
            <div class=\"row\">
                    <label for=\"password\">Hasło</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            
            <div class=\"row\">
                <div class=\"one columns \">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                </div>
                <div class=\"ten columns\">
                    <label for=\"remember_me\">Pamiętaj mnie</label>
                </div>
            </div>

            <div class=\"row\">
                    <div class=\"right\">
                        <button class=\"button tiny\" type=\"submit\" id=\"_submit\">Zaloguj</button>
                    </div>
            </div>

        </form>
        </div>

        <div class=\"six columns\">

        <h5>Informacje</h5>

        <p>Jeśli jesteś klientem fitnessu możesz utworzyć swoje konto i sprawdzić stan swojego karnetu</p>
        <p>Rejestrując się na stronie będziesz także na bierząco z promocjami i informacjami, 
        ponieważ będziesz powiadamiany mailowo o aktualnościach</p>

        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" class=\"small success button\">Utwórz konto</a>

        </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 52,  57 => 17,  52 => 14,  46 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
