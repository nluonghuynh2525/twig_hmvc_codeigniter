<?php

/* struct/head/script.html */
class __TwigTemplate_692086bdc53127a0d4ba85947ad7c5c231cf3aabe43a60a91c57aacea3560664 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/js/jquery-1.11.2.min.js\" ></script>";
    }

    public function getTemplateName()
    {
        return "struct/head/script.html";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<script src=\"{{base_url()}}public/static/templates/frontend/home/js/jquery-1.11.2.min.js\" ></script>", "struct/head/script.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\head\\script.html");
    }
}
