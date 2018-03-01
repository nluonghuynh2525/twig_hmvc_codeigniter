<?php

/* struct/templates/related_post.twig */
class __TwigTemplate_5cfeba56fefff765e32282cae303102b9b0f129d2fbce5eec6fdd43ddb578630 extends Twig_Template
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
        echo "<article class=\"mt-4\">
    <div class=\"post_related\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                
                    ";
        // line 6
        if ((isset($context["related_post"]) ? $context["related_post"] : null)) {
            // line 7
            echo "                    <h4 class=\"style_h4\"> <strong>Tin liên quan</strong> </h4>
                    ";
        }
        // line 9
        echo "                
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related_post"]) ? $context["related_post"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
            // line 14
            echo "            <div class=\"col-sm-4\">
                <article>
                    <figure>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "slug", array()), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                        </a>
                    </figure>
                    <div class=\"post_title\">
                        <h6>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true);
            echo "</a>
                        </h6>
                    </div>
                </article>
            </div>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>    
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "struct/templates/related_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  63 => 23,  53 => 18,  47 => 17,  42 => 14,  38 => 13,  32 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"mt-4\">
    <div class=\"post_related\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                
                    {% if(related_post) %}
                    <h4 class=\"style_h4\"> <strong>Tin liên quan</strong> </h4>
                    {% endif %}
                
            </div>
        </div>
        <div class=\"row\">
            {% for related in related_post %}
            <div class=\"col-sm-4\">
                <article>
                    <figure>
                        <a href=\"{{base_url()}}detail/{{related.slug}}\">
                            <img src=\"{{base_url()}}public/static/uploads/images/{{related.image}}\" alt=\"\">
                        </a>
                    </figure>
                    <div class=\"post_title\">
                        <h6>
                            <a href=\"{{base_url()}}detail/{{related.slug}}\">{{related.title}}</a>
                        </h6>
                    </div>
                </article>
            </div>
            
            {% endfor %}
        </div>    
    </div>
</article>", "struct/templates/related_post.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\related_post.twig");
    }
}
