<?php

/* struct/form.html */
class __TwigTemplate_a187bb7be5a82ab7f76e0c9fe8ee0ada6bdf98a2c4113ab24be95232543be419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/abstract.html", "struct/form.html", 1);
        $this->blocks = array(
            'seo' => array($this, 'block_seo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "struct/abstract.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_seo($context, array $blocks = array())
    {
        $this->loadTemplate("struct/head/seo.html", "struct/form.html", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "struct/form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'struct/abstract.html' %}

{% block seo %}{% include 'struct/head/seo.html' %}{% endblock seo %}
", "struct/form.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\form.html");
    }
}
