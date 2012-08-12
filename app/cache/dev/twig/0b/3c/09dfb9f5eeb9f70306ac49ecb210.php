<?php

/* TworzeniewebFitnessBundle::layout.html.twig */
class __TwigTemplate_0b3c09dfb9f5eeb9f70306ac49ecb210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_meta' => array($this, 'block_head_meta'),
            'head_meta_description' => array($this, 'block_head_meta_description'),
            'head_meta_keywords' => array($this, 'block_head_meta_keywords'),
            'head_title' => array($this, 'block_head_title'),
            'head_css' => array($this, 'block_head_css'),
            'head_js' => array($this, 'block_head_js'),
            'body' => array($this, 'block_body'),
            'body_container' => array($this, 'block_body_container'),
            'header_text' => array($this, 'block_header_text'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
            'body_js' => array($this, 'block_body_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("bp_html_classes", $context)) ? (_twig_default_filter($this->getContext($context, "bp_html_classes"), "")) : ("")), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("bp_language", $context)) ? (_twig_default_filter($this->getContext($context, "bp_language"), "en")) : ("en")), "html", null, true);
        echo "\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"pl\"> <!--<![endif]-->
    <head>
        ";
        // line 7
        $this->displayBlock('head_meta', $context, $blocks);
        // line 14
        echo "
        <title>";
        // line 15
        $this->displayBlock('head_title', $context, $blocks);
        echo "</title>

        ";
        // line 17
        $this->displayBlock('head_css', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('head_js', $context, $blocks);
        // line 33
        echo "    </head>
    <body>
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 221
        echo "    </body>
</html>";
    }

    // line 7
    public function block_head_meta($context, array $blocks = array())
    {
        // line 8
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
            <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('head_meta_description', $context, $blocks);
        echo "\">
            <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('head_meta_keywords', $context, $blocks);
        echo "\">
            <meta name=\"viewport\" content=\"width=device-width\">
        ";
    }

    // line 10
    public function block_head_meta_description($context, array $blocks = array())
    {
    }

    // line 11
    public function block_head_meta_keywords($context, array $blocks = array())
    {
    }

    // line 15
    public function block_head_title($context, array $blocks = array())
    {
        echo "Fitness Zielony-Romanów";
    }

    // line 17
    public function block_head_css($context, array $blocks = array())
    {
        // line 18
        echo "
            ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6a16c13_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a16c13_0") : $this->env->getExtension('assets')->getAssetUrl("css/total_foundation_1.css");
            // line 25
            echo "                <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" media=\"screen\" >
            ";
            // asset "6a16c13_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a16c13_1") : $this->env->getExtension('assets')->getAssetUrl("css/total_boilerplate_2.css");
            echo "                <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" media=\"screen\" >
            ";
            // asset "6a16c13_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a16c13_2") : $this->env->getExtension('assets')->getAssetUrl("css/total_app_3.css");
            echo "                <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" media=\"screen\" >
            ";
        } else {
            // asset "6a16c13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a16c13") : $this->env->getExtension('assets')->getAssetUrl("css/total.css");
            echo "                <link rel=\"stylesheet\"  href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" media=\"screen\" >
            ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "        
        ";
    }

    // line 30
    public function block_head_js($context, array $blocks = array())
    {
        // line 31
        echo "            
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "
        <!--[if lt IE 7]>
        <p class=\"chromeframe\">Twoj przeglądarka jest za stara 
        <a href=\"http://www.google.com/chromeframe/?redirect=true\">zainstaluj ten dodatek w celu poprawy sytuacji.</p>
        <![endif]-->

        ";
        // line 42
        $this->displayBlock('body_container', $context, $blocks);
        // line 199
        echo "
        ";
        // line 200
        $this->displayBlock('body_js', $context, $blocks);
        // line 220
        echo "    ";
    }

    // line 42
    public function block_body_container($context, array $blocks = array())
    {
        // line 43
        echo "
        <div id=\"container\" class=\"row\">

            <header class=\"row\">
                
                ";
        // line 48
        echo $this->env->getExtension('actions')->renderAction("TworzeniewebUserBundle:Default:loginForm", array(), array());
        // line 49
        echo "
                <div class=\"row top\">
                    <div class=\"five columns\">
                        <h1>FITNESS KLUB</h1>
                    </div>
                    <div class=\"seven columns\">
                        <h2 class=\"top-text\">FITNESS KLUB<br /> ZIELONY ROMANÓW</h2>
                    </div>
                </div>
                <nav class=\"twelve columns\">
                    ";
        // line 59
        $this->env->loadTemplate("TworzeniewebFitnessBundle::_menu.html.twig")->display($context);
        // line 60
        echo "                </nav>

                <div class=\"row info\">

                    <div class=\"four columns\">

                        ";
        // line 66
        $this->displayBlock('header_text', $context, $blocks);
        // line 74
        echo "
                    </div>

                </div>

            </header>


            <div class=\"row\">

                <div class=\"four columns\" id=\"col1\">
                    <div class=\"c1\"></div>
                    <div class=\"col-padd\">
                        <h2><strong>TRENING</strong></h2>
                        <h2>Ciesz się życiem!</h2>
                        <h4>Pobudź organizm do pracy</h4>
                        <p>zrób coś dla siebie i swojego zdrowia</p>
                    </div>
                </div>

                <div class=\"four columns\" id=\"col2\">
                    <div class=\"c2\"></div>
                    <div class=\"col-padd\">
                        <h2><strong>ZABAWA</strong></h2>
                        <h2>Wybierz co lubisz!</h2>
                        <h4>Wybierz zajęcia dla siebie</h4>
                        <p>wolisz mocny wycisk czy relaksujące ćwiczenia?</p>
                    </div>
                </div>

                <div class=\"four columns\" id=\"col3\">
                    <div class=\"col-padd\">
                        <h2><strong>LEPSZA KONDYCJA</strong></h2>
                        <h2>Już po kilku zajęciach!</h2>
                        <h4>Popraw wydolność organizmu</h4>
                        <p>rezultat już po kilku treningach!</p>
                    </div>
                </div>

            </div>
            
            <div class=\"row border-top\">
                
                ";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 129
        echo "                
            </div>
            

            <div class=\"row section3\">
                <div class=\"four columns\">

                    <div class=\"eleven columns offset-by-one\" id=\"contact-box\">

                        <h3>Kontakt</h3>

                        <p><span>FITNESS KLUB ZIELONY - ROMANÓW</span></p>

                        <p>Łódź, ul. Romanowska 55F lokal 4-5<br />
                            pasaż usługowy</p>

                        <div class=\"contact-no\">518-729-946</div>

                    </div>

                </div>

                <div class=\"four columns shadow\">

                    <div class=\"eleven columns offset-by-one\">

                        <h3>Reklamy</h3>

                        <h4>Szybsze spalanie kalorii</h4>
                        <p>Suplementy diety pomagające w szybszym spalaniu tkanki tłuszczowej</p>
                        <p>Masaże antycellulitowe, enzos eskulap</p>


                    </div>

                </div>

                <div class=\"four columns shadow\">

                    <div class=\"eleven columns offset-by-one\">

                        <h3>Opinie klientów</h3>

                        <h4>Gorąco Polecam !!!</h4>
                        <p>Miła atmosfera, z pewnością pojawie się na następnych zajęciach</p>
                        <p><span class=\"alert label\">Kasia</span></p>


                    </div>

                </div>
            </div>

        </div>

        <div id=\"footer\">
            
            ";
        // line 186
        $this->displayBlock('footer', $context, $blocks);
        // line 196
        echo "        </div>

        ";
    }

    // line 66
    public function block_header_text($context, array $blocks = array())
    {
        // line 67
        echo "
                        <h2>Nowości i aktualności</h2>
                        
                        <div class=\"news\">
                        </div>

                        ";
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
        // line 118
        echo "
                ";
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 120
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
                        ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 124
        echo "
                ";
        // line 125
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 127
        echo "
                ";
    }

    // line 125
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 126
        echo "                ";
    }

    // line 186
    public function block_footer($context, array $blocks = array())
    {
        // line 187
        echo "            <div class=\"row\">
                <div class=\"columns five\">
                    <p><a href=\"#\">Regulamin</a> | <a href=\"privacy.html\">Zasady korzystania z serwisu</a> </p>
                </div>
                <div class=\"columns seven\">
                    <p class=\"right\">&copy; ";
        // line 192
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Fitness Zielony-Romanów. Wszelkie prawa zastrzeżone</p>
                </div>
            </div>
            ";
    }

    // line 200
    public function block_body_js($context, array $blocks = array())
    {
        // line 201
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html", null, true);
        echo "\"></script>
            ";
        // line 204
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e14eb5e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_0") : $this->env->getExtension('assets')->getAssetUrl("js/total_jquery.min_1.js");
            // line 216
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_1") : $this->env->getExtension('assets')->getAssetUrl("js/total_all_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_2") : $this->env->getExtension('assets')->getAssetUrl("js/total_app_3.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_3") : $this->env->getExtension('assets')->getAssetUrl("js/total_jquery.placeholder.min_4.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_4") : $this->env->getExtension('assets')->getAssetUrl("js/total_jquery.customforms_5.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_5") : $this->env->getExtension('assets')->getAssetUrl("js/total_jquery.reveal_6.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_6") : $this->env->getExtension('assets')->getAssetUrl("js/total_jquery.tooltips_7.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_7") : $this->env->getExtension('assets')->getAssetUrl("js/total_jquery.orbit-1.4.0_8.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "e14eb5e_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e_8") : $this->env->getExtension('assets')->getAssetUrl("js/total_modernizr.foundation_9.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "e14eb5e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e14eb5e") : $this->env->getExtension('assets')->getAssetUrl("js/total.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 218
        echo "     
        ";
    }

    public function getTemplateName()
    {
        return "TworzeniewebFitnessBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 218,  426 => 216,  422 => 204,  418 => 203,  414 => 202,  411 => 201,  408 => 200,  400 => 192,  393 => 187,  390 => 186,  386 => 126,  383 => 125,  378 => 127,  376 => 125,  373 => 124,  364 => 121,  359 => 120,  355 => 119,  352 => 118,  349 => 117,  339 => 67,  336 => 66,  330 => 196,  328 => 186,  269 => 129,  267 => 117,  222 => 74,  220 => 66,  212 => 60,  210 => 59,  198 => 49,  196 => 48,  189 => 43,  186 => 42,  182 => 220,  180 => 200,  177 => 199,  175 => 42,  167 => 36,  164 => 35,  159 => 31,  156 => 30,  151 => 27,  125 => 25,  121 => 19,  118 => 18,  115 => 17,  109 => 15,  104 => 11,  99 => 10,  92 => 11,  88 => 10,  84 => 8,  81 => 7,  76 => 221,  74 => 35,  70 => 33,  68 => 30,  65 => 29,  63 => 17,  58 => 15,  55 => 14,  53 => 7,  45 => 4,  39 => 3,  33 => 2,  30 => 1,);
    }
}
