<?php

/* NataliaTadeuszBundle::bars.html.twig */
class __TwigTemplate_08c98907dc66db84f821ec00c23be0a0555484b816ecaa36bfa09380386a1506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NataliaTadeuszBundle::layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NataliaTadeuszBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        echo "\t\t\t\t\t
\t<ul class=\"list-group\" >
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_homepage");
        echo "\">Main page</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_reflections_index");
        echo "\">List of Reflections</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_reflections_add");
        echo "\">Add Reflection</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "1"));
        echo "\">First Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "2"));
        echo "\">Second Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "3"));
        echo "\">Third Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "4"));
        echo "\">Fourth Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "5"));
        echo "\">Fifth Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "6"));
        echo "\">Sixth Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "7"));
        echo "\">Seventh Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "8"));
        echo "\">Eighth Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "9"));
        echo "\">Ninth Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "10"));
        echo "\">Tenth Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "11"));
        echo "\">Eleventh Book</a></li>
\t\t<li class=\"list-group-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("natalia_tadeusz_book", array("book" => "12"));
        echo "\">Twelfth Book</a></li>
\t</ul>
";
    }

    public function getTemplateName()
    {
        return "NataliaTadeuszBundle::bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 3,);
    }
}
