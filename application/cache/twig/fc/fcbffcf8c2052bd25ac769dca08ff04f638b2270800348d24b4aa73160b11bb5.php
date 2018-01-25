<?php

/* a.html */
class __TwigTemplate_08f0a1180e0042d9eb7b7c5fc0eda338581ac1fbb9f9882ef91a8b2d2f372437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

</head>
<body>
<div id=\"header\"></div>
<div id=\"content\">
<div id=\"sidebar\">
<ul>

<li><a href=\"javascript:void(0)\">Portfolio</a></li>
<li><a href=\"javascript:void(0)\">About Us</a></li>
<li><a href=\"javascript:void(0)\">Contact Us</a></li>
</ul>
</div>
<div id=\"main-content\">
";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "</div>
<div></div>
</div>
<div id=\"footer\">
&copy;Copyright <a href=\"http://www.cygnusteam.com\" target=\"\">Cygnus Team</a>
</div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Layout";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "a.html";
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  60 => 5,  49 => 23,  47 => 22,  29 => 6,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<title>
{% block title %}Layout{% endblock %}
</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

</head>
<body>
<div id=\"header\"></div>
<div id=\"content\">
<div id=\"sidebar\">
<ul>

<li><a href=\"javascript:void(0)\">Portfolio</a></li>
<li><a href=\"javascript:void(0)\">About Us</a></li>
<li><a href=\"javascript:void(0)\">Contact Us</a></li>
</ul>
</div>
<div id=\"main-content\">
{% block content %}{% endblock %}
</div>
<div></div>
</div>
<div id=\"footer\">
&copy;Copyright <a href=\"http://www.cygnusteam.com\" target=\"\">Cygnus Team</a>
</div>
</body>
</html>", "a.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\a.html");
    }
}
