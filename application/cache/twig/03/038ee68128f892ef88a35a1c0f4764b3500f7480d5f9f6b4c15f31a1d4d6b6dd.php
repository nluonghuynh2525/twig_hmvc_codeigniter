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
        echo "<!-- header -->
        <header>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-4\">
                        <div class=\"mobile_toggle\">
                            <a href=\"\">
                                <div>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-4 col-md-4 text-center\">
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\" class=\"logo_link\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/hyn.png\" alt=\"\">
                        </a>
                        
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"search text-center\">
                            <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "search\" method=\"get\">
                                <input type=\"text\" name=\"keyword\" class=\"search_input\" placeholder=\"Tìm kiếm\" >
                                <input type=\"submit\" class=\"btn_search\">
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </header>";
    }

    public function getTemplateName()
    {
        return "struct/body/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  41 => 18,  37 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- header -->
        <header>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-4\">
                        <div class=\"mobile_toggle\">
                            <a href=\"\">
                                <div>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-4 col-md-4 text-center\">
                        <a href=\"{{base_url()}}\" class=\"logo_link\">
                            <img src=\"{{base_url()}}public/static/templates/frontend/home/images/hyn.png\" alt=\"\">
                        </a>
                        
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"search text-center\">
                            <form action=\"{{base_url()}}search\" method=\"get\">
                                <input type=\"text\" name=\"keyword\" class=\"search_input\" placeholder=\"Tìm kiếm\" >
                                <input type=\"submit\" class=\"btn_search\">
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </header>", "struct/body/header.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\body\\header.html");
    }
}
