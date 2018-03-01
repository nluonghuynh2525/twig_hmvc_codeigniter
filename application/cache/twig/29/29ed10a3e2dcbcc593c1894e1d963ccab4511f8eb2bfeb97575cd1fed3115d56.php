<?php

/* index.twig */
class __TwigTemplate_dc8f305ed17676f1943cdbb13a52a5a14711e6141b45af50ac0f1fbe84bf7383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/templates/template.twig", "index.twig", 1);
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
        $this->loadTemplate("struct/templates/nav_head.twig", "index.twig", 5)->display($context);
        echo "   
    </div>

\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"news_list\">
                        <h3>Kết quả cho: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo " </h3>
                        ";
        // line 14
        if ((isset($context["search"]) ? $context["search"] : null)) {
            // line 15
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["search"]) ? $context["search"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sear"]) {
                // line 16
                echo "                                
                                <article class=\"list_new\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "slug", array()), "html", null, true);
                echo "\" class=\"thumb_article\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "title", array()), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "public/static/uploads/images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "image", array()), "html", null, true);
                echo "\" alt=\"\">
                                                
                                            </a>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"list_new_detail mt-2\">
                                                <time class=\"time\">
                                                    <p class=\"\"><span class=\"span_category\"> <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "category/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "slug_cat", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "name", array()), "html", null, true);
                echo "</a> </span> - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sear"], "date_create", array()), "M j, Y"), "html", null, true);
                echo "</p>
                                                </time>
                                                <h3 class=\"headline\">
                                                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "slug", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "title", array()), "html", null, true);
                echo "\">
                                                        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "title", array()), "html", null, true);
                echo "
                                                    </a>
                                                </h3>
                                                <div class=\"post_content\">
                                                    <p>";
                // line 36
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["sear"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["sear"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["sear"], "description", array()))), "html", null, true);
                echo "</p>
                                                </div>
                                                <div class=\"read_more_detail float-right\">
                                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "detail/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sear"], "slug", array()), "html", null, true);
                echo "\">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sear'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        } else {
            // line 47
            echo "                            <h4>Vui lòng kiểm tra lại</h4>
                        ";
        }
        // line 49
        echo "                        <div class=\"pagi_custom_search text-center\">
                            ";
        // line 50
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
                        </div>
                        
                        <div class=\"loading\" style=\"display: none;\">
                            <div class=\"content\">
                                <img src=";
        // line 55
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/loading.gif>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                ";
        // line 63
        $this->loadTemplate("struct/templates/most_view.twig", "index.twig", 63)->display($context);
        // line 64
        echo "                ";
        $this->loadTemplate("struct/templates/category.twig", "index.twig", 64)->display($context);
        // line 65
        echo "                ";
        $this->loadTemplate("struct/templates/adds_home.twig", "index.twig", 65)->display($context);
        // line 66
        echo "            </div>
        </div>
    </section>

\t";
        // line 70
        $this->loadTemplate("struct/templates/subcribe.twig", "index.twig", 70)->display($context);
        // line 71
        echo "    ";
        $this->displayBlock('foot_script', $context, $blocks);
    }

    public function block_foot_script($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("foot_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            
        });
    </script>
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
        return array (  183 => 72,  176 => 71,  174 => 70,  168 => 66,  165 => 65,  162 => 64,  160 => 63,  149 => 55,  141 => 50,  138 => 49,  134 => 47,  131 => 46,  116 => 39,  110 => 36,  103 => 32,  95 => 31,  83 => 28,  71 => 21,  63 => 20,  57 => 16,  52 => 15,  50 => 14,  46 => 13,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"news_list\">
                        <h3>Kết quả cho: {{keyword}} </h3>
                        {% if(search) %}
                            {% for sear in search %}
                                
                                <article class=\"list_new\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <a href=\"{{base_url()}}detail/{{sear.slug}}\" class=\"thumb_article\" title=\"{{sear.title}}\">
                                                <img src=\"{{base_url()}}public/static/uploads/images/{{sear.image}}\" alt=\"\">
                                                
                                            </a>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"list_new_detail mt-2\">
                                                <time class=\"time\">
                                                    <p class=\"\"><span class=\"span_category\"> <a href=\"{{base_url()}}category/{{sear.slug_cat}}\">{{sear.name}}</a> </span> - {{ sear.date_create|date(\"M j, Y\") }}</p>
                                                </time>
                                                <h3 class=\"headline\">
                                                    <a href=\"{{base_url()}}detail/{{sear.slug}}\" title=\"{{sear.title}}\">
                                                        {{sear.title}}
                                                    </a>
                                                </h3>
                                                <div class=\"post_content\">
                                                    <p>{{sear.description| length > 100 ? sear.description|slice(0, 100) ~ '...' : sear.description}}</p>
                                                </div>
                                                <div class=\"read_more_detail float-right\">
                                                    <a href=\"{{base_url()}}detail/{{sear.slug}}\">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            {% endfor %}
                        {% else %}
                            <h4>Vui lòng kiểm tra lại</h4>
                        {% endif %}
                        <div class=\"pagi_custom_search text-center\">
                            {{ links|raw }}
                        </div>
                        
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
                {% include 'struct/templates/adds_home.twig' %}
            </div>
        </div>
    </section>

\t{% include 'struct/templates/subcribe.twig' %}
    {% block foot_script %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            
        });
    </script>
    {% endblock foot_script %}
{% endblock main %}", "index.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\search\\views\\index.twig");
    }
}
