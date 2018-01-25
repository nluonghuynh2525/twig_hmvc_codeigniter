<?php

/* test.twig */
class __TwigTemplate_8517632afa77ea1fd4098479e62f21b746dde792abc8a2d5aa40fa1d78ee134f extends Twig_Template
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
        echo "test trong modules";
    }

    public function getTemplateName()
    {
        return "test.twig";
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
        return new Twig_Source("test trong modules", "test.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\home\\views\\test.twig");
    }
}
