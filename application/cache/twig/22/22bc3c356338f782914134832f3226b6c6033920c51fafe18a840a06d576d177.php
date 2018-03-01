<?php

/* struct/body/footer.html */
class __TwigTemplate_1e7e95211577ee5e31b55d82850df2b4488d4b6705fb04fdcaa0d2dc4377d44c extends Twig_Template
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
        echo "<!-- footer  -->
<!-- footer -->
<div class=\"gotop\">
    <span></span>
</div>
<footer>
    ";
        // line 7
        $this->loadTemplate("struct/templates/nav_head.twig", "struct/body/footer.html", 7)->display($context);
        // line 8
        echo "    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p class=\"text-center\">@The Hyns All Right 2018</p>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "struct/body/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- footer  -->
<!-- footer -->
<div class=\"gotop\">
    <span></span>
</div>
<footer>
    {% include 'struct/templates/nav_head.twig' %}
    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p class=\"text-center\">@The Hyns All Right 2018</p>
                </div>
            </div>
        </div>
    </div>
</footer>", "struct/body/footer.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\body\\footer.html");
    }
}
