<?php

/* struct/templates/host_post.twig */
class __TwigTemplate_eb3c3f43d2dfb741706c968c81b2491c545534dd7267c0fc37662f2706305447 extends Twig_Template
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
        echo "<section class=\"host_post\">
    <h4 class=\"style_h4\"> <strong>Tin nổi bật</strong> </h4>
    <div class=\"slick_slide_bottom\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slide_bottom"]) ? $context["slide_bottom"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "        <div class=\"slick_custom\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "slug", array()), "html", null, true);
            echo "\">
                <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
            echo "\"\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
            echo "\">
            </a>
            <div class=\"info\">
               
                <div class=\"detail\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "image", array()), "html", null, true);
            echo "\"><h3 class=\"headline\">";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["slide"], "title", array())) > 80)) ? ((twig_slice($this->env, $this->getAttribute($context["slide"], "title", array()), 0, 80) . "...")) : ($this->getAttribute($context["slide"], "title", array()))), "html", null, true);
            echo "</h3></a>
                    <div class=\"num_view\">
                        <img src=\"http://localhost/ci_blog2/public/static/templates/frontend/home/images/icon_view.png\" alt=\"\">
                        <span class=\"number\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "num_view", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>

        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        
        
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "struct/templates/host_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  61 => 15,  51 => 12,  37 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"host_post\">
    <h4 class=\"style_h4\"> <strong>Tin nổi bật</strong> </h4>
    <div class=\"slick_slide_bottom\">
        {% for slide in slide_bottom %}
        <div class=\"slick_custom\">
            <a href=\"{{base_url()}}detail/{{slide.slug}}\">
                <img src=\"{{base_url()}}public/static/uploads/images/{{slide.image}}\" alt=\"{{slide.title}}\"\" title=\"{{slide.title}}\">
            </a>
            <div class=\"info\">
               
                <div class=\"detail\">
                    <a href=\"{{base_url()}}public/static/uploads/images/{{slide.image}}\"><h3 class=\"headline\">{{slide.title| length > 80 ? slide.title|slice(0, 80) ~ '...' : slide.title}}</h3></a>
                    <div class=\"num_view\">
                        <img src=\"http://localhost/ci_blog2/public/static/templates/frontend/home/images/icon_view.png\" alt=\"\">
                        <span class=\"number\">{{slide.num_view}}</span>
                    </div>
                </div>
            </div>

        </div>
        {% endfor %}
        
        
    </div>
</section>", "struct/templates/host_post.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\host_post.twig");
    }
}
