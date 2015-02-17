<?php

/* ShrimpsBundle:Default:tiger.html.twig */
class __TwigTemplate_e45abd3dab86cc98818e3de13871b26e0755d3e7fa1c6848e2724c0a264db092 extends Twig_Template
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
        echo "\t<h3>Tiger shrimp</h3>
\t\t<dl>
\t\t\t<dt>Size</dt>
\t\t\t<dd>2.5-3.5cmm</dd>
\t\t\t<dt>Water parameters</dt>
\t\t\t<dd>Prefers acidic water to feel well and breed. General hardness and conductivity of the water are of no importance.</dd>
\t\t\t<dt>Photo</dt>
\t\t\t<dd><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shrimps/images/tiger_shrimp.jpg"), "html", null, true);
        echo "\" /></dd>
\t\t</dl>
\t<h4>Shrimps</h4>
\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tiger_homepage");
        echo "\">Tiger Shrimp</a><br>
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("sri_lanka_dwarf_homepage");
        echo "\">Sri Lanka Dwarf Shrimp</a><br>
\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("blue_tail_homepage");
        echo "\">Blue Tail Shrimp</a><br>
";
    }

    public function getTemplateName()
    {
        return "ShrimpsBundle:Default:tiger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  50 => 14,  46 => 13,  40 => 10,  31 => 3,  28 => 2,);
    }
}
