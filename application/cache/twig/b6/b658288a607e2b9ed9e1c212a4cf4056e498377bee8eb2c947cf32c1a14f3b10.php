<?php

/* struct/templates/parallax_detail.twig */
class __TwigTemplate_07ac404ca0e9c4fc02be01653ad5152a3451314e22fa9a44189678b21c8e9b03 extends Twig_Template
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
        echo "<!-- parallax -->
<div class=\"parallax\">
    <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/uploads/images/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "image", array()), "html", null, true);
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "struct/templates/parallax_detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- parallax -->
<div class=\"parallax\">
    <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{base_url()}}public/static/uploads/images/{{details.image}}\"></div>
</div>", "struct/templates/parallax_detail.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\parallax_detail.twig");
    }
}
