<?php

/* struct/templates/nav_head.twig */
class __TwigTemplate_57a64e8e4de656a269f8344f500d1c81def4ca70335f9ae59bb4ca36d1240f8e extends Twig_Template
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
        echo "<!-- nav head -->
        <ul class=\"nav justify-content-center\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">Trang Chủ</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Tin Tức</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Thông Tin</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Liên Hệ</a>
            </li>
        </ul>";
    }

    public function getTemplateName()
    {
        return "struct/templates/nav_head.twig";
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
        return new Twig_Source("<!-- nav head -->
        <ul class=\"nav justify-content-center\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">Trang Chủ</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Tin Tức</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Thông Tin</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Liên Hệ</a>
            </li>
        </ul>", "struct/templates/nav_head.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\nav_head.twig");
    }
}
