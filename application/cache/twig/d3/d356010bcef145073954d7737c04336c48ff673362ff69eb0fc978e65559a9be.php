<?php

/* struct/templates/tags_right.twig */
class __TwigTemplate_86a151bdcef0afe5639ba9bc7e2c0b018c66e7a2a0aeaeca97c53c43d08ca48b extends Twig_Template
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
    <div class=\"tags_right\">
        <h3>Xu hướng tìm kiếm</h3>
        <ul>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 6
            echo "            <li>
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "tags/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug_tag", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name_tag", array()), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            
        </ul>
    </div>
    
</aside>";
    }

    public function getTemplateName()
    {
        return "struct/templates/tags_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
    <div class=\"tags_right\">
        <h3>Xu hướng tìm kiếm</h3>
        <ul>
            {% for tag in tags %}
            <li>
                <a href=\"{{base_url()}}tags/{{tag.slug_tag}}\">{{ tag.name_tag }}</a>
            </li>
            {% endfor %}
            
        </ul>
    </div>
    
</aside>", "struct/templates/tags_right.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\tags_right.twig");
    }
}
