<?php

/* paginations.twig */
class __TwigTemplate_c157f8bf58bee20f0a3ea2138644aaba2d35879aeef97206e1428e695724e4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/templates/template.twig", "paginations.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "struct/templates/template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"nav_head\">
     ";
        // line 5
        $this->loadTemplate("struct/templates/nav_head.twig", "paginations.twig", 5)->display($context);
        echo "   
    </div>

\t";
        // line 8
        $this->loadTemplate("struct/templates/slider_head.twig", "paginations.twig", 8)->display($context);
        // line 9
        echo "\t
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div align=\"right\" id=\"pagination_link\"></div>
\t\t\t\t\t\t<div class=\"table-responsive\" id=\"country_table\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                ";
        // line 22
        $this->loadTemplate("struct/templates/most_share.twig", "paginations.twig", 22)->display($context);
        // line 23
        echo "                ";
        $this->loadTemplate("struct/templates/adds_home.twig", "paginations.twig", 23)->display($context);
        // line 24
        echo "            </div>
        </div>
    </section>

\t";
        // line 28
        $this->loadTemplate("struct/templates/subcribe.twig", "paginations.twig", 28)->display($context);
        // line 29
        echo "
";
    }

    // line 32
    public function block_foot_script($context, array $blocks = array())
    {
        // line 33
        $this->displayParentBlock("foot_script", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\$(document).ready(function(){

\t \tfunction load_country_data(page)
\t \t\t{
\t\t\t  \$.ajax({
\t\t\t   url:\"";
        // line 40
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "paginations/pagination/\"+page,
\t\t\t   method:\"GET\",
\t\t\t   dataType:\"json\",
\t\t\t   success:function(data)
\t\t\t   {
\t\t\t    \$('#country_table').html(data.country_table);
\t\t\t    \$('#pagination_link').html(data.pagination_link);
\t\t\t   }
\t\t\t  });
\t\t\t}
\t 
\t \tload_country_data(1);
\t \t\$(document).on(\"click\", \".pagination li a\", function(event){
\t\t  event.preventDefault();
\t\t  var page = \$(this).data(\"ci-pagination-page\");
\t\t  load_country_data(page);
\t\t });
\t \t
\t});

\t
</script>
";
    }

    public function getTemplateName()
    {
        return "paginations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  79 => 33,  76 => 32,  71 => 29,  69 => 28,  63 => 24,  60 => 23,  58 => 22,  43 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'struct/templates/template.twig' %}

{% block main %}
\t<div class=\"nav_head\">
     {% include 'struct/templates/nav_head.twig' %}   
    </div>

\t{% include 'struct/templates/slider_head.twig' %}
\t
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <div align=\"right\" id=\"pagination_link\"></div>
\t\t\t\t\t\t<div class=\"table-responsive\" id=\"country_table\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                {% include 'struct/templates/most_share.twig' %}
                {% include 'struct/templates/adds_home.twig' %}
            </div>
        </div>
    </section>

\t{% include 'struct/templates/subcribe.twig' %}

{% endblock main %}

{% block foot_script %}
{{ parent() }}
\t<script type=\"text/javascript\">
\t\$(document).ready(function(){

\t \tfunction load_country_data(page)
\t \t\t{
\t\t\t  \$.ajax({
\t\t\t   url:\"{{ base_url() }}paginations/pagination/\"+page,
\t\t\t   method:\"GET\",
\t\t\t   dataType:\"json\",
\t\t\t   success:function(data)
\t\t\t   {
\t\t\t    \$('#country_table').html(data.country_table);
\t\t\t    \$('#pagination_link').html(data.pagination_link);
\t\t\t   }
\t\t\t  });
\t\t\t}
\t 
\t \tload_country_data(1);
\t \t\$(document).on(\"click\", \".pagination li a\", function(event){
\t\t  event.preventDefault();
\t\t  var page = \$(this).data(\"ci-pagination-page\");
\t\t  load_country_data(page);
\t\t });
\t \t
\t});

\t
</script>
{% endblock foot_script %}
", "paginations.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\paginations\\views\\paginations.twig");
    }
}
