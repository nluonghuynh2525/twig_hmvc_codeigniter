<?php

/* struct/body/header.html */
class __TwigTemplate_f1c39a59b86fed17f0f1dff08abce6e757e1cd0e43b87ca41560b8408d555315 extends Twig_Template
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
        echo "<!-- menu header -->
menu header";
    }

    public function getTemplateName()
    {
        return "struct/body/header.html";
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
        return new Twig_Source("<!-- menu header -->
menu header", "struct/body/header.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\body\\header.html");
    }
}
