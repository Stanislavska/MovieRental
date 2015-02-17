<?php

/* ShrimpsBundle:Default:blue_tail.html.twig */
class __TwigTemplate_add33eb6d4ea6fc35cb7b8d6b0c0561cf868d4a543985a0192eee16014f62a6c extends Twig_Template
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
        echo "\t<h3>Blue Tail Shrimp</h3>
\t\t<dl>
\t\t\t<dt>Size</dt>
\t\t\t<dd>up to 3cmm</dd>
\t\t\t<dt>Water parameters</dt>
\t\t\t<dd>Water with alkaline pH recommended. Exact pH not important.</dd>
\t\t\t<dt>Photo</dt>
\t\t\t<dd><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shrimps/images/blue_tail_shrimp.jpg"), "html", null, true);
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
        return "ShrimpsBundle:Default:blue_tail.html.twig";
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
