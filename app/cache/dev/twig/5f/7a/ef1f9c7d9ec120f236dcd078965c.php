<?php

/* TworzeniewebFitnessBundle:Default:page.html.twig */
class __TwigTemplate_5f7aef1f9c7d9ec120f236dcd078965c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TworzeniewebFitnessBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
        echo "</h3>

";
        // line 6
        echo $this->getAttribute($this->getContext($context, "page"), "body");
        echo "

";
    }

    public function getTemplateName()
    {
        return "TworzeniewebFitnessBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,  26 => 3,);
    }
}
