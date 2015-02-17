<?php

/* NataliaTadeuszBundle:Reflections:index.html.twig */
class __TwigTemplate_759c47f3166021967ea59f1196ed032dca2978a4c0fd8efc469f3cf99aeb0c4d extends Twig_Template
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
        echo "\t<h1 class=\"text-muted\" align=\"center\">List of Reflection</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t
\t<table class=\"table table-hover\">
\t\t<head>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Text</th>
\t\t\t\t<th>Author</th>
\t\t\t\t<th>Created date</th>
\t\t\t</tr>
\t\t</head>
\t\t<tbody>
\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reflections"]) ? $context["reflections"] : $this->getContext($context, "reflections")));
        foreach ($context['_seq'] as $context["_key"] => $context["reflection"]) {
            // line 21
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reflection"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["reflection"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["reflection"], "text", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["reflection"], "autor", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reflection"], "createDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reflection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</tbody>
\t\t
";
    }

    public function getTemplateName()
    {
        return "NataliaTadeuszBundle:Reflections:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  58 => 21,  54 => 20,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
