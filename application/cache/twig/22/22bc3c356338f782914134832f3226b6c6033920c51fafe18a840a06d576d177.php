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
footer";
    }

    public function getTemplateName()
    {
        return "struct/body/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
footer", "struct/body/footer.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\body\\footer.html");
    }
}
