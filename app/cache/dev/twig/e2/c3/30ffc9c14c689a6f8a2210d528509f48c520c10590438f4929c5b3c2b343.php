<?php

/* ShrimpsBundle:Default:index.html.twig */
class __TwigTemplate_e2c330ffc9c14c689a6f8a2210d528509f48c520c10590438f4929c5b3c2b343 extends Twig_Template
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
";
    }

    public function getTemplateName()
    {
        return "ShrimpsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  31 => 3,  28 => 2,);
    }
}
