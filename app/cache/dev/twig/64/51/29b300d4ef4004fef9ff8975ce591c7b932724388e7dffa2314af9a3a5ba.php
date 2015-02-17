<?php

/* NataliaTadeuszBundle:Default:index.html.twig */
class __TwigTemplate_645129b300d4ef4004fef9ff8975ce591c7b932724388e7dffa2314af9a3a5ba extends Twig_Template
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
        echo "\t<h1 class=\"text-muted\" align=\"center\">Pan Tadeusz</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<p>Pan Tadeusz (full title in English: Sir Thaddeus, or the Last Lithuanian Foray: A Nobleman's Tale from the Years of 1811 and 1812 in Twelve Books of Verse; Polish original: Pan Tadeusz, czyli ostatni zajazd na Litwie. Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem) is an epic poem by the Polish poet, writer and philosopher Adam Mickiewicz. The book was first published in June 1834 in Paris, and is considered by many to be the last great epic poem in European literature.</p>
\t<p>Pan Tadeusz is recognized as the national epic of Poland. It is compulsory reading in Polish schools. A film based on the poem was made in 1999 by Andrzej Wajda.</p>
";
    }

    public function getTemplateName()
    {
        return "NataliaTadeuszBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
