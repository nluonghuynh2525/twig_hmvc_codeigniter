<?php

/* struct/head/seo.html */
class __TwigTemplate_0c7b20338e9538e4d1c5574720f6b180b22ee5a803d2e9462cb4b43d84b9a9ad extends Twig_Template
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
        echo "<title>Website News Feed | The Voux</title>
<meta name=\"description\" content=\"The Voux is website show news feed all the world.\"/>
<meta name=\"keywords\" content=\"the voux, voux, news, the world, news feed, football, sport, clothes.\"/>

<meta property=\"og:title\" content=\"The Voux\" />\t
<meta property=\"og:description\" content=\"The Voux\" />

<meta property=\"og:image\" content=\"/public/static/uploads/thefoux.jpg\" />
<meta property=\"og:image:type\" content=\"image/jpeg\" />

<meta property=\"og:url\" content=\"current_url\" />
<meta property=\"og:type\" content=\"website\" />
<link rel=\"icon\" type=\"image/png\" href=\"/favicon.ico\">";
    }

    public function getTemplateName()
    {
        return "struct/head/seo.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<title>Website News Feed | The Voux</title>
<meta name=\"description\" content=\"The Voux is website show news feed all the world.\"/>
<meta name=\"keywords\" content=\"the voux, voux, news, the world, news feed, football, sport, clothes.\"/>

<meta property=\"og:title\" content=\"The Voux\" />\t
<meta property=\"og:description\" content=\"The Voux\" />

<meta property=\"og:image\" content=\"/public/static/uploads/thefoux.jpg\" />
<meta property=\"og:image:type\" content=\"image/jpeg\" />

<meta property=\"og:url\" content=\"current_url\" />
<meta property=\"og:type\" content=\"website\" />
<link rel=\"icon\" type=\"image/png\" href=\"/favicon.ico\">", "struct/head/seo.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\head\\seo.html");
    }
}
