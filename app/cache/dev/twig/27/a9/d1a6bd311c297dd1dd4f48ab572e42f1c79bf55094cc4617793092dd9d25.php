<?php

/* ShrimpsBundle:Default:sri_lanka_dwarf.html.twig */
class __TwigTemplate_27a9d1a6bd311c297dd1dd4f48ab572e42f1c79bf55094cc4617793092dd9d25 extends Twig_Template
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
        echo "\t<h3>Sri Lanka Dwarf Shrimp</h3>
\t\t<dl>
\t\t\t<dt>Size</dt>
\t\t\t<dd>2.5-3.5cmm</dd>
\t\t\t<dt>Water parameters</dt>
\t\t\t<dd>Water parameters are not important as long as you have clean, dechlorinated tap water and a cycled and *mature* tank.</dd>
\t\t\t<dt>Photo</dt>
\t\t\t<dd><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shrimps/images/sri_lanka_dwarf_shrimp.jpg"), "html", null, true);
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
        return "ShrimpsBundle:Default:sri_lanka_dwarf.html.twig";
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
