<?php

/* index.twig */
class __TwigTemplate_9ad021f1dd11f3ba37273ff37d06badf569f4d1a417f96f39f6aa14448f64912 extends Twig_Template
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
        echo "    <div class=\"nav_head\">
     ";
        // line 5
        $this->loadTemplate("struct/templates/nav_head.twig", "index.twig", 5)->display($context);
        echo "   
    </div>

    ";
        // line 8
        $this->loadTemplate("struct/templates/slider_head.twig", "index.twig", 8)->display($context);
        // line 9
        echo "
    <section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"category_list\">
                        
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detail"]) ? $context["detail"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "new_slug", array()), "html", null, true);
            echo "
                            <article class=\"list_new\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug", array()), "html", null, true);
            echo "\" class=\"thumb_article\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "image", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug_cat", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a> </span> - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "date_create", array()), "M j, Y"), "html", null, true);
            echo "</p>
                                            </time>
                                            <h3 class=\"headline\">
                                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                            <div class=\"post_content\">
                                                <p>";
            // line 37
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["tag"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["tag"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["tag"], "description", array()))), "html", null, true);
            echo "</p>
                                            </div>
                                            <div class=\"read_more_detail float-right\">
                                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug", array()), "html", null, true);
            echo "\">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        
                        <div class=\"pagi_custom_search text-center\">
                            ";
        // line 49
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
                        </div>
                        
                        <div class=\"loading\" style=\"display: none;\">
                            <div class=\"content\">
                                <img src=";
        // line 54
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/loading.gif>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                ";
        // line 62
        $this->loadTemplate("struct/templates/most_view.twig", "index.twig", 62)->display($context);
        // line 63
        echo "                ";
        $this->loadTemplate("struct/templates/category.twig", "index.twig", 63)->display($context);
        // line 64
        echo "                ";
        $this->loadTemplate("struct/templates/tags_right.twig", "index.twig", 64)->display($context);
        // line 65
        echo "                ";
        $this->loadTemplate("struct/templates/adds_home.twig", "index.twig", 65)->display($context);
        // line 66
        echo "            </div>
        </div>
    </section>

    ";
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
        return array (  181 => 72,  174 => 71,  172 => 70,  166 => 66,  163 => 65,  160 => 64,  157 => 63,  155 => 62,  144 => 54,  136 => 49,  132 => 47,  117 => 40,  111 => 37,  104 => 33,  96 => 32,  84 => 29,  72 => 22,  64 => 21,  56 => 17,  52 => 16,  43 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
    <div class=\"nav_head\">
     {% include 'struct/templates/nav_head.twig' %}   
    </div>

    {% include 'struct/templates/slider_head.twig' %}

    <section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"category_list\">
                        
                        {% for tag in detail %}
                            {{tag.new_slug}}
                            <article class=\"list_new\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <a href=\"{{base_url()}}detail/{{tag.slug}}\" class=\"thumb_article\" title=\"{{tag.title}}\">
                                            <img src=\"{{base_url()}}public/static/uploads/images/{{tag.image}}\" alt=\"\">
                                            
                                        </a>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"list_new_detail mt-2\">
                                            <time class=\"time\">
                                                <p class=\"\"><span class=\"span_category\"> <a href=\"{{base_url()}}category/{{tag.slug_cat}}\">{{tag.name}}</a> </span> - {{ tag.date_create|date(\"M j, Y\") }}</p>
                                            </time>
                                            <h3 class=\"headline\">
                                                <a href=\"{{base_url()}}detail/{{tag.slug}}\" title=\"{{tag.title}}\">
                                                    {{tag.title}}
                                                </a>
                                            </h3>
                                            <div class=\"post_content\">
                                                <p>{{tag.description| length > 100 ? tag.description|slice(0, 100) ~ '...' : tag.description}}</p>
                                            </div>
                                            <div class=\"read_more_detail float-right\">
                                                <a href=\"{{base_url()}}detail/{{tag.slug}}\">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        {% endfor %}
                        
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
                {% include 'struct/templates/tags_right.twig' %}
                {% include 'struct/templates/adds_home.twig' %}
            </div>
        </div>
    </section>

    {% include 'struct/templates/subcribe.twig' %}
    {% block foot_script %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            
        });
    </script>
    {% endblock foot_script %}
{% endblock main %}", "index.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\tags\\views\\index.twig");
    }
}
