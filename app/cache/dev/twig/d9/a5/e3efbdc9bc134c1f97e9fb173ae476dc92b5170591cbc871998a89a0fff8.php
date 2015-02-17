<?php

/* ShrimpsBundle:Default:main.html.twig */
class __TwigTemplate_d9a5e3efbdc9bc134c1f97e9fb173ae476dc92b5170591cbc871998a89a0fff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ShrimpsBundle::layout.html.twig");

        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShrimpsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contents($context, array $blocks = array())
    {
        // line 3
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("tiger_homepage");
        echo "\">Tiger Shrimp</a><br>
\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("sri_lanka_dwarf_homepage");
        echo "\">Sri Lanka Dwarf Shrimp</a><br>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("blue_tail_homepage");
        echo "\">Blue Tail Shrimp</a><br>
";
    }

    public function getTemplateName()
    {
        return "ShrimpsBundle:Default:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
