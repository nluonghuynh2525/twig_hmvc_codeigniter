<?php

/* struct/templates/most_view.twig */
class __TwigTemplate_673de055f0dabc536e4b0c6d20989a5932c474bf883447b59c182520f1f908dc extends Twig_Template
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
        echo "<aside class=\"aside mt-4\">
    <h3 class=\"text-center title_most_shared\">XEM NHIỀU NHẤT</h3>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["most_view"]) ? $context["most_view"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["most"]) {
            // line 4
            echo "    <article>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["most"], "slug", array()), "html", null, true);
            echo "\" class=\"thumb_article\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["most"], "image", array()), "html", null, true);
            echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"category_title mt-2\"> <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["most"], "slug_cat", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["most"], "name", array()), "html", null, true);
            echo "</a> </div>
                <h3 class=\"title_inside_share\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["most"], "slug", array()), "html", null, true);
            echo "\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["most"], "title", array())) > 50)) ? ((twig_slice($this->env, $this->getAttribute($context["most"], "title", array()), 0, 50) . "...")) : ($this->getAttribute($context["most"], "title", array()))), "html", null, true);
            echo "
                    </a>
                </h3>
                <div class=\"num_view\">
                    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/templates/frontend/home/images/icon_view.png\" alt=\"\">
                    <span class=\"number\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["most"], "num_view", array()), "html", null, true);
            echo " view</span>
                </div>
                
            </div>
        </div>
    </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['most'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
</aside>";
    }

    public function getTemplateName()
    {
        return "struct/templates/most_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  73 => 20,  69 => 19,  62 => 15,  56 => 14,  47 => 12,  38 => 8,  32 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"aside mt-4\">
    <h3 class=\"text-center title_most_shared\">XEM NHIỀU NHẤT</h3>
    {% for most in most_view %}
    <article>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <a href=\"{{base_url()}}detail/{{most.slug}}\" class=\"thumb_article\">
                    <img src=\"{{base_url()}}public/static/uploads/images/{{most.image}}\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"category_title mt-2\"> <a href=\"{{base_url()}}category/{{most.slug_cat}}\">{{most.name}}</a> </div>
                <h3 class=\"title_inside_share\">
                    <a href=\"{{base_url()}}detail/{{most.slug}}\">
                        {{most.title| length > 50 ? most.title|slice(0, 50) ~ '...' : most.title}}
                    </a>
                </h3>
                <div class=\"num_view\">
                    <img src=\"{{base_url()}}public/static/templates/frontend/home/images/icon_view.png\" alt=\"\">
                    <span class=\"number\">{{most.num_view}} view</span>
                </div>
                
            </div>
        </div>
    </article>
    {% endfor %}
    
</aside>", "struct/templates/most_view.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\most_view.twig");
    }
}
