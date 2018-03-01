<?php

/* struct/templates/category.twig */
class __TwigTemplate_05384dd7dc5b6be4f64ddf2215a2056cd5854bac96fb924bd773bb638afe395f extends Twig_Template
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
        echo "<aside class=\"aside\">
    <h3 class=\"text-center title_most_shared\">DANH MỤC</h3>
    
    <ul class=\"list-group list-group-flush list_custom\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_new"]) ? $context["category_new"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat_new"]) {
            // line 6
            echo "            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat_new"], "slug_cat", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat_new"], "name", array()), "html", null, true);
            echo "</a>
                <span class=\"badge badge-primary badge-pill\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat_new"], "count", array()), "html", null, true);
            echo "</span>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat_new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    
    </ul>

    
</aside>";
    }

    public function getTemplateName()
    {
        return "struct/templates/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  40 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"aside\">
    <h3 class=\"text-center title_most_shared\">DANH MỤC</h3>
    
    <ul class=\"list-group list-group-flush list_custom\">
        {% for cat_new in category_new %}
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                <a href=\"{{base_url()}}category/{{cat_new.slug_cat}}\">{{cat_new.name}}</a>
                <span class=\"badge badge-primary badge-pill\">{{cat_new.count}}</span>
            </li>
        {% endfor %}
    
    </ul>

    
</aside>", "struct/templates/category.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\category.twig");
    }
}
