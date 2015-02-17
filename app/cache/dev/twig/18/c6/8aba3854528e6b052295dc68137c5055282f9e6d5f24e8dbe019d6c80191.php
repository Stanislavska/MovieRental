<?php

/* ShrimpsBundle::layout.html.twig */
class __TwigTemplate_18c68aba3854528e6b052295dc68137c5055282f9e6d5f24e8dbe019d6c80191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>The Shrimp World</title>
\t\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shrimps/js/shrimps.js"), "html", null, true);
        echo "\"></script>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shrimps/css/shrimps.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>

\t\t<h1>The Shrimp World</h1>
\t\t<h2>Shrimp type</h2>
\t\t";
        // line 13
        $this->displayBlock('contents', $context, $blocks);
        // line 15
        echo "\t</body>
</html>";
    }

    // line 13
    public function block_contents($context, array $blocks = array())
    {
        // line 14
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "ShrimpsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  47 => 13,  42 => 15,  40 => 13,  31 => 7,  27 => 6,  20 => 1,);
    }
}
