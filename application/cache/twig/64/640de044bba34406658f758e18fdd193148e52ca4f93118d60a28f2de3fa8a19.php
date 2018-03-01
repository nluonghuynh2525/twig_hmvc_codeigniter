<?php

/* pagination_data.twig */
class __TwigTemplate_0bff4743b293623fc16a920d21f48c5f327b185f1ce2292ba50de5ff4e1612ad extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 2
            echo "                            
    <article class=\"list_new\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <a href=\"detail/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\" class=\"thumb_article\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 7
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
            // line 14
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
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "
                        </a>
                    </h3>
                    <div class=\"post_content\">
                        <p>";
            // line 22
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["new"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["new"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["new"], "description", array()))), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"read_more_detail float-right\">
                        <a href=\"";
            // line 25
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
        // line 32
        echo (isset($context["link_pagi"]) ? $context["link_pagi"] : null);
    }

    public function getTemplateName()
    {
        return "pagination_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  78 => 25,  72 => 22,  65 => 18,  59 => 17,  47 => 14,  35 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for new in news %}
                            
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
{{ link_pagi|raw }}", "pagination_data.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\home\\views\\pagination_data.twig");
    }
}
