<?php

/* struct/templates/slider_head.twig */
class __TwigTemplate_35dcca14ea66b7a47e15da87c7e8616900ccab9fd5c67285cf8dd0acbd89b7cf extends Twig_Template
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
        echo "<!-- slider -->
        <section>
            <div class=\"slick_slide\">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slide_head"]) ? $context["slide_head"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 5
            echo "                <div class=\"slick_custom\">
                    <div class=\"thumb_bg\" style=\"background-image: url('";
            // line 6
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "public/static/uploads/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "image", array()), "html", null, true);
            echo "');\">
                        
                    </div>
                    <div class=\"info\">
                        <div class=\"category\">
                            <h4>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
            echo "</h4>
                        </div>
                        <div class=\"detail\">
                            <h3 class=\"headline\">";
            // line 14
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["slide"], "title", array())) > 80)) ? ((twig_slice($this->env, $this->getAttribute($context["slide"], "title", array()), 0, 80) . "...")) : ($this->getAttribute($context["slide"], "title", array()))), "html", null, true);
            echo "</h3>
                            <p>";
            // line 15
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["slide"], "description", array())) > 100)) ? ((twig_slice($this->env, $this->getAttribute($context["slide"], "description", array()), 0, 100) . "...")) : ($this->getAttribute($context["slide"], "description", array()))), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "slug", array()), "html", null, true);
            echo "\" class=\"read_more\">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- <img src=\"images/two.jpg\"> -->
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                
                
            </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "struct/templates/slider_head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  55 => 16,  51 => 15,  47 => 14,  41 => 11,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- slider -->
        <section>
            <div class=\"slick_slide\">
                {% for slide in slide_head %}
                <div class=\"slick_custom\">
                    <div class=\"thumb_bg\" style=\"background-image: url('{{base_url()}}public/static/uploads/images/{{slide.image}}');\">
                        
                    </div>
                    <div class=\"info\">
                        <div class=\"category\">
                            <h4>{{slide.name}}</h4>
                        </div>
                        <div class=\"detail\">
                            <h3 class=\"headline\">{{slide.title| length > 80 ? slide.title|slice(0, 80) ~ '...' : slide.title}}</h3>
                            <p>{{slide.description| length > 100 ? slide.description|slice(0, 100) ~ '...' : slide.description}}</p>
                            <a href=\"{{base_url()}}detail/{{slide.slug}}\" class=\"read_more\">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- <img src=\"images/two.jpg\"> -->
                </div>
                {% endfor %}
                
                
            </div>
        </section>", "struct/templates/slider_head.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\slider_head.twig");
    }
}
