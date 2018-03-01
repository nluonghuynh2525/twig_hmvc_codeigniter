<?php

/* struct/templates/new_post.twig */
class __TwigTemplate_aadbeb7ac137f5243150c7b7a7e67d1c86717ff732bb166055d3f626c0d17085 extends Twig_Template
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
        echo "<section class=\"new_post\">
    
    <h4 class=\"style_h4\"> <strong>Tin mới nhất</strong> </h4>
        
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new_post"]) ? $context["new_post"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 10
            echo "\t\t\t\t\t<article class=\"list_new\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <a href=\"detail/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\" class=\"thumb_article\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 14
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
            // line 21
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
                                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "\">
                                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>";
            // line 29
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["new"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["new"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["new"], "description", array()))), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"read_more_detail float-right\">
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "slug", array()), "html", null, true);
            echo "\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>
            </div>   \t
        </div>
        <div class=\"col-md-4\">
        \t
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "struct/templates/new_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  89 => 32,  83 => 29,  76 => 25,  68 => 24,  56 => 21,  44 => 14,  38 => 13,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"new_post\">
    
    <h4 class=\"style_h4\"> <strong>Tin mới nhất</strong> </h4>
        
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
\t\t\t\t{% for new in new_post %}
\t\t\t\t\t<article class=\"list_new\">
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
                                        <a href=\"{{base_url()}}detail/{{new.slug}}\" title=\"{{new.title}}\">
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
\t\t\t\t{% endfor %}
                </div>
            </div>   \t
        </div>
        <div class=\"col-md-4\">
        \t
        </div>
    </div>
</section>", "struct/templates/new_post.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\new_post.twig");
    }
}
