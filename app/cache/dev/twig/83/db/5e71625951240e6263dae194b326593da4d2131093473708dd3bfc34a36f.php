<?php

/* NataliaHelloBundle:Default:index.html.twig */
class __TwigTemplate_83db5e71625951240e6263dae194b326593da4d2131093473708dd3bfc34a36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>
\t\t<title>Hello!</title>
\t</head>
\t<body>
\t\t<p>Hello ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname")), "html", null, true);
        echo "!</p>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "NataliaHelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
