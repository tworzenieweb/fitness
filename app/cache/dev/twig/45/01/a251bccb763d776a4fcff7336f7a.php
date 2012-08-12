<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_4501a251bccb763d776a4fcff7336f7a extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo $this->getContext($context, "id");
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code"), "elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                jQuery('#field_container_";
        // line 45
        echo $this->getContext($context, "id");
        echo "').replaceWith(html); // replace the html
                if(jQuery(form + 'input[type=\"file\"]').length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 50
        echo $this->getContext($context, "id");
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 51
        echo $this->getContext($context, "id");
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 58
        echo $this->getContext($context, "id");
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 62
        echo $this->getContext($context, "id");
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 67
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_widget_";
        echo $this->getContext($context, "id");
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 71
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 113,  238 => 109,  221 => 103,  162 => 78,  124 => 50,  576 => 196,  571 => 194,  565 => 192,  557 => 187,  548 => 184,  544 => 183,  540 => 182,  533 => 181,  524 => 178,  509 => 174,  503 => 172,  497 => 159,  491 => 156,  485 => 152,  474 => 150,  470 => 149,  467 => 148,  464 => 147,  452 => 135,  442 => 147,  435 => 134,  432 => 133,  429 => 132,  425 => 128,  416 => 121,  406 => 118,  403 => 117,  395 => 115,  393 => 114,  390 => 113,  384 => 112,  376 => 110,  368 => 108,  365 => 107,  349 => 102,  347 => 101,  344 => 100,  326 => 92,  323 => 91,  321 => 90,  316 => 87,  309 => 83,  292 => 81,  283 => 80,  262 => 78,  257 => 120,  236 => 69,  216 => 101,  206 => 61,  197 => 56,  146 => 44,  111 => 30,  97 => 42,  105 => 44,  60 => 29,  10 => 41,  242 => 67,  239 => 66,  229 => 106,  226 => 62,  193 => 52,  190 => 51,  172 => 45,  167 => 80,  154 => 16,  138 => 68,  133 => 55,  21 => 18,  144 => 58,  126 => 58,  47 => 21,  18 => 11,  662 => 211,  659 => 210,  654 => 203,  648 => 200,  642 => 197,  639 => 196,  637 => 195,  634 => 194,  628 => 192,  626 => 191,  623 => 190,  617 => 188,  615 => 187,  612 => 186,  606 => 184,  604 => 183,  601 => 182,  595 => 180,  593 => 179,  590 => 178,  587 => 177,  582 => 150,  578 => 147,  572 => 146,  563 => 191,  558 => 142,  553 => 141,  550 => 140,  545 => 139,  542 => 138,  536 => 111,  532 => 110,  529 => 180,  521 => 106,  515 => 105,  507 => 103,  504 => 102,  500 => 101,  495 => 99,  492 => 98,  487 => 97,  484 => 96,  481 => 95,  475 => 94,  462 => 87,  448 => 49,  444 => 161,  440 => 47,  436 => 46,  422 => 41,  417 => 40,  414 => 39,  408 => 119,  398 => 32,  389 => 29,  375 => 215,  373 => 210,  366 => 205,  364 => 177,  360 => 106,  357 => 104,  348 => 171,  346 => 170,  337 => 165,  334 => 97,  311 => 160,  281 => 130,  273 => 150,  267 => 138,  264 => 124,  248 => 131,  234 => 108,  217 => 125,  171 => 95,  159 => 38,  108 => 51,  332 => 92,  327 => 90,  313 => 142,  307 => 140,  304 => 139,  284 => 84,  277 => 81,  272 => 79,  269 => 126,  260 => 135,  256 => 69,  244 => 73,  241 => 72,  219 => 102,  212 => 58,  207 => 56,  191 => 55,  188 => 54,  179 => 46,  173 => 83,  168 => 42,  165 => 41,  54 => 18,  517 => 176,  513 => 157,  511 => 156,  506 => 173,  489 => 153,  472 => 152,  468 => 88,  463 => 150,  460 => 149,  457 => 86,  454 => 85,  451 => 146,  449 => 134,  446 => 144,  437 => 144,  433 => 137,  431 => 44,  428 => 135,  426 => 42,  423 => 133,  419 => 113,  413 => 111,  407 => 109,  404 => 35,  401 => 107,  394 => 31,  388 => 126,  386 => 28,  383 => 27,  377 => 121,  374 => 120,  372 => 119,  367 => 117,  356 => 115,  353 => 114,  351 => 172,  342 => 168,  336 => 98,  333 => 103,  330 => 91,  320 => 163,  317 => 95,  314 => 86,  308 => 92,  306 => 82,  301 => 138,  298 => 89,  295 => 88,  289 => 86,  279 => 153,  275 => 128,  263 => 78,  259 => 77,  254 => 133,  251 => 75,  249 => 115,  246 => 66,  240 => 69,  231 => 66,  227 => 65,  224 => 104,  215 => 62,  205 => 96,  200 => 56,  185 => 48,  180 => 51,  177 => 84,  174 => 111,  164 => 42,  135 => 67,  132 => 60,  122 => 34,  95 => 41,  84 => 43,  75 => 58,  38 => 17,  67 => 20,  51 => 10,  299 => 100,  293 => 134,  290 => 95,  287 => 132,  285 => 156,  280 => 82,  274 => 80,  271 => 85,  268 => 84,  266 => 125,  261 => 123,  247 => 74,  243 => 77,  228 => 128,  220 => 65,  218 => 72,  213 => 63,  209 => 97,  202 => 55,  196 => 123,  183 => 61,  181 => 48,  175 => 50,  158 => 77,  107 => 45,  101 => 42,  80 => 15,  63 => 25,  36 => 17,  156 => 41,  148 => 73,  142 => 70,  140 => 42,  127 => 32,  123 => 51,  115 => 32,  110 => 52,  85 => 131,  65 => 51,  59 => 27,  45 => 20,  26 => 13,  89 => 37,  82 => 62,  42 => 27,  103 => 44,  91 => 20,  74 => 13,  70 => 37,  66 => 27,  25 => 14,  22 => 12,  23 => 12,  223 => 96,  214 => 59,  210 => 60,  203 => 60,  199 => 93,  194 => 91,  192 => 62,  189 => 90,  187 => 89,  184 => 88,  178 => 72,  170 => 44,  157 => 48,  152 => 46,  145 => 69,  130 => 59,  125 => 66,  119 => 33,  116 => 46,  112 => 45,  102 => 49,  98 => 42,  76 => 40,  73 => 39,  69 => 28,  56 => 12,  32 => 26,  17 => 11,  92 => 19,  86 => 17,  77 => 14,  57 => 28,  29 => 14,  24 => 20,  19 => 11,  68 => 33,  61 => 50,  44 => 35,  20 => 11,  161 => 85,  153 => 75,  150 => 34,  147 => 51,  143 => 43,  137 => 41,  129 => 49,  121 => 57,  118 => 56,  113 => 46,  104 => 43,  99 => 71,  94 => 14,  81 => 35,  78 => 41,  72 => 32,  64 => 28,  53 => 45,  50 => 24,  48 => 23,  41 => 20,  39 => 23,  35 => 24,  33 => 16,  30 => 16,  27 => 15,  182 => 115,  176 => 45,  169 => 49,  163 => 58,  160 => 57,  155 => 76,  151 => 54,  149 => 45,  141 => 72,  136 => 47,  134 => 40,  131 => 52,  128 => 38,  120 => 50,  117 => 49,  114 => 35,  109 => 45,  106 => 44,  100 => 167,  96 => 47,  93 => 37,  90 => 67,  87 => 132,  83 => 34,  79 => 72,  71 => 29,  62 => 15,  58 => 17,  55 => 16,  52 => 25,  49 => 24,  46 => 40,  43 => 19,  40 => 18,  37 => 21,  34 => 18,  31 => 15,  28 => 15,);
    }
}
