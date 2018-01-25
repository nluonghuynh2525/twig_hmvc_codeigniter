<?php

/* test/test.twig */
class __TwigTemplate_2d89b48b35ebe814cff89fbcd3f5ac7508a0c20acbba99c7a7faef0b65f083b4 extends Twig_Template
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
        echo "a b c";
    }

    public function getTemplateName()
    {
        return "test/test.twig";
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
        return new Twig_Source("a b c", "test/test.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\test\\test.twig");
    }
}
