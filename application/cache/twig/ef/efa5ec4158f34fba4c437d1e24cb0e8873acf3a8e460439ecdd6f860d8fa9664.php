<?php

/* struct/templates/adds_home.twig */
class __TwigTemplate_2df29d0516b8fcfe9661e75717e018d97817766e4d2f7ef108ef792d4e74d3b7 extends Twig_Template
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
        echo "<!-- <aside class=\" d-none d-sm-block\">
    <div class=\"sidebar_inner\">
        <a href=\"\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/vietnam_afc2018.jpg\" alt=\"\">
        </a>
    </div>
</aside> -->

<aside class=\"sidebar d-none d-sm-block\">
    <div class=\"sidebar_inner\">
        <a href=\"\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/redme.jpg\" alt=\"\">
        </a>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "struct/templates/adds_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- <aside class=\" d-none d-sm-block\">
    <div class=\"sidebar_inner\">
        <a href=\"\">
            <img src=\"{{base_url()}}public/static/templates/frontend/home/images/vietnam_afc2018.jpg\" alt=\"\">
        </a>
    </div>
</aside> -->

<aside class=\"sidebar d-none d-sm-block\">
    <div class=\"sidebar_inner\">
        <a href=\"\">
            <img src=\"{{base_url()}}public/static/templates/frontend/home/images/redme.jpg\" alt=\"\">
        </a>
    </div>
</aside>", "struct/templates/adds_home.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\adds_home.twig");
    }
}
