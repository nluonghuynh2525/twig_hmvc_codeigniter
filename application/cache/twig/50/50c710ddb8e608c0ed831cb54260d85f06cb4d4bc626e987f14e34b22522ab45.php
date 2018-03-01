<?php

/* struct/templates/adds_detail.twig */
class __TwigTemplate_50e82f8277dbecfc2313c0262eef839893156ce75c2e41a7838f89beaa226676 extends Twig_Template
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
        echo "<aside class=\"sidebar d-none d-md-block\">
    <div class=\"sidebar_inner\">
        <a href=\"\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/samnhung.png\" alt=\"\">
        </a>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "struct/templates/adds_detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"sidebar d-none d-md-block\">
    <div class=\"sidebar_inner\">
        <a href=\"\">
            <img src=\"{{base_url()}}public/static/templates/frontend/home/images/samnhung.png\" alt=\"\">
        </a>
    </div>
</aside>", "struct/templates/adds_detail.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\adds_detail.twig");
    }
}
