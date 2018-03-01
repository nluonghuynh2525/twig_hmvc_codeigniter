<?php

/* index.twig */
class __TwigTemplate_3c8177745c6f707bfb995c113e04c88d73f5a02489ff84b2c211951f4e50f236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/templates/template.twig", "index.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        $this->loadTemplate("struct/templates/nav_head.twig", "index.twig", 5)->display($context);
        echo "   
    </div>

\t";
        // line 8
        $this->loadTemplate("struct/templates/slider_head.twig", "index.twig", 8)->display($context);
        // line 9
        echo "
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"news_list\">
                        
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 17
            echo "                            
                            <article class=\"list_new\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <a href=\"detail/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\" class=\"thumb_article\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                                            
                                        </a>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"list_new_detail mt-2\">
                                            <time class=\"time\">
                                                <p class=\"\"><span class=\"span_category\"> <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug_cat", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "name", array()), "html", null, true);
            echo "</a> </span> - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "date_create", array()), "M j, Y"), "html", null, true);
            echo "</p>
                                            </time>
                                            <h3 class=\"headline\">
                                                <a href=\"detail/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                            <div class=\"post_content\">
                                                <p>";
            // line 37
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["new"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["new"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["new"], "description", array()))), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"read_more_detail float-right\">
                                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        ";
        echo (isset($context["link_pagi"]) ? $context["link_pagi"] : null);
        echo "
                        
                        <div class=\"loading\" style=\"display: none;\">
                            <div class=\"content\">
                                <img src=";
        // line 51
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/loading.gif>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                ";
        // line 59
        $this->loadTemplate("struct/templates/most_view.twig", "index.twig", 59)->display($context);
        // line 60
        echo "                ";
        $this->loadTemplate("struct/templates/category.twig", "index.twig", 60)->display($context);
        // line 61
        echo "                ";
        $this->loadTemplate("struct/templates/tags_right.twig", "index.twig", 61)->display($context);
        // line 62
        echo "                ";
        $this->loadTemplate("struct/templates/adds_home.twig", "index.twig", 62)->display($context);
        // line 63
        echo "            </div>
        </div>
    </section>

\t";
        // line 67
        $this->loadTemplate("struct/templates/subcribe.twig", "index.twig", 67)->display($context);
        // line 68
        echo "    
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 68,  161 => 67,  155 => 63,  152 => 62,  149 => 61,  146 => 60,  144 => 59,  133 => 51,  125 => 47,  110 => 40,  104 => 37,  97 => 33,  91 => 32,  79 => 29,  67 => 22,  61 => 21,  55 => 17,  51 => 16,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"news_list\">
                        
                        {% for new in news %}
                            
                            <article class=\"list_new\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <a href=\"detail/{{new.slug}}\" class=\"thumb_article\" title=\"{{new.title}}\">
                                            <img src=\"{{base_url()}}public/static/uploads/images/{{new.image}}\" alt=\"\">
                                            
                                        </a>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"list_new_detail mt-2\">
                                            <time class=\"time\">
                                                <p class=\"\"><span class=\"span_category\"> <a href=\"{{base_url()}}category/{{new.slug_cat}}\">{{new.name}}</a> </span> - {{ new.date_create|date(\"M j, Y\") }}</p>
                                            </time>
                                            <h3 class=\"headline\">
                                                <a href=\"detail/{{new.slug}}\" title=\"{{new.title}}\">
                                                    {{new.title}}
                                                </a>
                                            </h3>
                                            <div class=\"post_content\">
                                                <p>{{new.description| length > 100 ? new.description|slice(0, 100) ~ '...' : new.description}}</p>
                                            </div>
                                            <div class=\"read_more_detail float-right\">
                                                <a href=\"{{base_url()}}detail/{{new.slug}}\">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        {% endfor %}
                        {{ link_pagi|raw }}
                        
                        <div class=\"loading\" style=\"display: none;\">
                            <div class=\"content\">
                                <img src={{base_url()}}public/static/loading.gif>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                {% include 'struct/templates/most_view.twig' %}
                {% include 'struct/templates/category.twig' %}
                {% include 'struct/templates/tags_right.twig' %}
                {% include 'struct/templates/adds_home.twig' %}
            </div>
        </div>
    </section>

\t{% include 'struct/templates/subcribe.twig' %}
    
{% endblock main %}", "index.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\home\\views\\index.twig");
    }
}
