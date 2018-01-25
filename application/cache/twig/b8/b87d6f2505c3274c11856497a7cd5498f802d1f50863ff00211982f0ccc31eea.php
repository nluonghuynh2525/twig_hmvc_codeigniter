<?php

/* b.twig */
class __TwigTemplate_b9fc2463b8ef65b9d4aff983ad8fed17ec7747bc3ca3c967d31dea0879734f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("a.html", "b.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "a.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Extend custom";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\tb extend block content ";
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "b.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'a.html' %}

{% block title %}Extend custom{% endblock %}

{% block content %}
\tb extend block content {{ variable }} {{ description }}
{% endblock %}", "b.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\b.twig");
    }
}
