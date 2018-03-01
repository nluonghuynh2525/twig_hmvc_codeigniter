<?php

/* detail.twig */
class __TwigTemplate_a7d770de6b075df6c437b691d069653685073c36838adfa0668f2abb29aa74e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/templates/template.twig", "detail.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        $this->loadTemplate("struct/templates/nav_head.twig", "detail.twig", 5)->display($context);
        echo "   
    </div>

\t";
        // line 8
        $this->loadTemplate("struct/templates/parallax_detail.twig", "detail.twig", 8)->display($context);
        // line 9
        echo "\t
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <article class=\"article_detail border_bottom \">
                            <aside class=\"cat_link\">
                                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "category/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "slug_cat", array()), "html", null, true);
        echo "\" class=\"cat_a_link\">
                                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "name", array()), "html", null, true);
        echo "
                                </a>
                            </aside>
                            <h1 class=\"h1\">
                                <!-- <strong>Elevate</strong> Your Listening With These <em>Top-Notch</em> Sound Systems -->
                                ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "title", array()), "html", null, true);
        echo "
                            </h1>
                            <aside class=\"post_auther\">
                                <time>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "date_create", array()), "html", null, true);
        echo "</time>
                                <em>by</em>
                                <span>
                                    <a href=\"\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "full_name", array()), "html", null, true);
        echo "</a>
                                </span>
                            </aside>
                            <div class=\"post_content\">
                                ";
        // line 34
        echo $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "content", array());
        echo "
                            </div>
                            
                            <div class=\"tags\">
                                <strong>TAGS:</strong> 
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 40
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "tag/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug_tag", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name_tag", array()), "html", null, true);
            echo "</a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </div>
                        </article>
                        
                        
                        ";
        // line 46
        $this->loadTemplate("struct/templates/related_post.twig", "detail.twig", 46)->display($context);
        // line 47
        echo "                        

                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                ";
        // line 53
        $this->loadTemplate("struct/templates/adds_detail.twig", "detail.twig", 53)->display($context);
        // line 54
        echo "            </div>
        </div>
         
        ";
        // line 57
        $this->loadTemplate("struct/templates/host_post.twig", "detail.twig", 57)->display($context);
        // line 58
        echo "        ";
        $this->loadTemplate("struct/templates/new_post.twig", "detail.twig", 58)->display($context);
        // line 59
        echo "    </section>



\t";
        // line 63
        $this->loadTemplate("struct/templates/subcribe.twig", "detail.twig", 63)->display($context);
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  145 => 63,  139 => 59,  136 => 58,  134 => 57,  129 => 54,  127 => 53,  119 => 47,  117 => 46,  111 => 42,  98 => 40,  94 => 39,  86 => 34,  79 => 30,  73 => 27,  67 => 24,  59 => 19,  53 => 18,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

\t{% include 'struct/templates/parallax_detail.twig' %}
\t
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        
                        <article class=\"article_detail border_bottom \">
                            <aside class=\"cat_link\">
                                <a href=\"{{base_url()}}category/{{details.slug_cat}}\" class=\"cat_a_link\">
                                    {{details.name}}
                                </a>
                            </aside>
                            <h1 class=\"h1\">
                                <!-- <strong>Elevate</strong> Your Listening With These <em>Top-Notch</em> Sound Systems -->
                                {{details.title}}
                            </h1>
                            <aside class=\"post_auther\">
                                <time>{{details.date_create}}</time>
                                <em>by</em>
                                <span>
                                    <a href=\"\">{{details.full_name}}</a>
                                </span>
                            </aside>
                            <div class=\"post_content\">
                                {{details.content|raw}}
                            </div>
                            
                            <div class=\"tags\">
                                <strong>TAGS:</strong> 
                                {% for tag in tags %}
                                <a href=\"{{base_url()}}tag/{{tag.slug_tag}}\">{{tag.name_tag}}</a>
                                {% endfor %}
                            </div>
                        </article>
                        
                        
                        {% include 'struct/templates/related_post.twig' %}
                        

                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                {% include 'struct/templates/adds_detail.twig' %}
            </div>
        </div>
         
        {% include 'struct/templates/host_post.twig' %}
        {% include 'struct/templates/new_post.twig' %}
    </section>



\t{% include 'struct/templates/subcribe.twig' %}

{% endblock main %}", "detail.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\home\\views\\detail.twig");
    }
}
