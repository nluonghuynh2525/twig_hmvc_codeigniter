<?php

/* struct/templates/template.twig */
class __TwigTemplate_f7d1d5827e99e42ee0d48e13ee1ecc9d8cf05c62ed830019efed0ab5c853e04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/form.html", "struct/templates/template.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "struct/form.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "
    <link rel=\"stylesheet\" href=\"css/style.css\"/>

";
    }

    // line 10
    public function block_foot_script($context, array $blocks = array())
    {
        // line 11
        echo "
  <script type=\"text/javascript\" src=\"js/jquery-migrate-1.2.1.min.js\"></script>
   
  <script type=\"text/javascript\">
    
  </script>

 
";
    }

    public function getTemplateName()
    {
        return "struct/templates/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  39 => 10,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'struct/form.html' %}

{% block head_script %}

    <link rel=\"stylesheet\" href=\"css/style.css\"/>

{% endblock head_script %}


{% block foot_script %}

  <script type=\"text/javascript\" src=\"js/jquery-migrate-1.2.1.min.js\"></script>
   
  <script type=\"text/javascript\">
    
  </script>

 
{% endblock foot_script %}", "struct/templates/template.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\template.twig");
    }
}
