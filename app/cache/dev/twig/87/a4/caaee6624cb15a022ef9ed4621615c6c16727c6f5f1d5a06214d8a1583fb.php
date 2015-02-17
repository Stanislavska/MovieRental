<?php

/* NataliaTadeuszBundle:Reflections:add.html.twig */
class __TwigTemplate_87a4caaee6624cb15a022ef9ed4621615c6c16727c6f5f1d5a06214d8a1583fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NataliaTadeuszBundle::bars.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NataliaTadeuszBundle::bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1 class=\"text-muted\" align=\"center\">Add Reflection</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<form role=\"form\" method=\"POST\">
\t\t
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "NataliaTadeuszBundle:Reflections:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  51 => 12,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
