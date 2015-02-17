<?php

/* NataliaTadeuszBundle::layout.html.twig */
class __TwigTemplate_0f0b4ededcfdf163c8e88a4a761219f39a43bd231a68ecb9c4e8a44a2604cdea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t<title>Pan Tadeusz</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nataliatadeusz/css/bootstrap.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t<div class=\"container-fluid\">\t
\t\t\t
\t\t\t<div class=\"header\">
\t\t\t\t";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "\t\t\t</div>
\t\t\t\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\" >
\t\t\t\t\t";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<p class=\"text-muted\">Nataliia Stanislavska</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t
\t</body>
</html>
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t\t";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t\t\t";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "NataliaTadeuszBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  88 => 24,  84 => 19,  81 => 18,  77 => 13,  74 => 12,  56 => 26,  54 => 24,  48 => 20,  46 => 18,  40 => 14,  38 => 12,  29 => 6,  22 => 1,);
    }
}
