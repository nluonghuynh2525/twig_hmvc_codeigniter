<?php

/* test.twig */
class __TwigTemplate_8517632afa77ea1fd4098479e62f21b746dde792abc8a2d5aa40fa1d78ee134f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/templates/template.twig", "test.twig", 1);
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
        echo "\t";
        $this->loadTemplate("struct/templates/nav_head.twig", "test.twig", 4)->display($context);
        // line 5
        echo "
\t";
        // line 6
        $this->loadTemplate("struct/templates/slider_head.twig", "test.twig", 6)->display($context);
        // line 7
        echo "\t
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <article>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <a href=\"\" class=\"thumb_article\">
                                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/1.jpeg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"col-sm-6\">
                                    <time class=\"time\">
                                        <p class=\"text-right\">January 22, 2018</p>
                                    </time>
                                    <h3 class=\"headline\">
                                        <a href=\"\">
                                            Elevate Your Listening With These Top-Notch Sound Systems
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>Throwing consider dwelling bachelor joy her proposal laughter. Raptures returned disposed one entirely her men…</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <a href=\"\" class=\"thumb_article\">
                                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/2.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"col-sm-6\">
                                    <time class=\"time\">
                                        <p class=\"text-right\">January 20, 2018</p>
                                    </time>
                                    <h3 class=\"headline\">
                                        <a href=\"\">
                                            Step Inside a Layered Family Home With Character
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>No opinions answered oh felicity is resolved hastened. Produced it friendly my if opinions humoured.…</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <a href=\"\" class=\"thumb_article\">
                                        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/images/two.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"col-sm-6\">
                                    <time class=\"time\">
                                        <p class=\"text-right\">January 20, 2018</p>
                                    </time>
                                    <h3 class=\"headline\">
                                        <a href=\"\">
                                            Step Inside a Layered Family Home With Character
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>No opinions answered oh felicity is resolved hastened. Produced it friendly my if opinions humoured.…</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                ";
        // line 86
        $this->loadTemplate("struct/templates/most_share.twig", "test.twig", 86)->display($context);
        // line 87
        echo "            </div>
        </div>
    </section>

\t";
        // line 91
        $this->loadTemplate("struct/templates/subcribe.twig", "test.twig", 91)->display($context);
        // line 92
        echo "
";
    }

    public function getTemplateName()
    {
        return "test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 92,  137 => 91,  131 => 87,  129 => 86,  103 => 63,  77 => 40,  51 => 17,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
\t{% include 'struct/templates/nav_head.twig' %}

\t{% include 'struct/templates/slider_head.twig' %}
\t
\t<section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <article>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <a href=\"\" class=\"thumb_article\">
                                        <img src=\"{{base_url()}}public/static/templates/frontend/home/images/1.jpeg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"col-sm-6\">
                                    <time class=\"time\">
                                        <p class=\"text-right\">January 22, 2018</p>
                                    </time>
                                    <h3 class=\"headline\">
                                        <a href=\"\">
                                            Elevate Your Listening With These Top-Notch Sound Systems
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>Throwing consider dwelling bachelor joy her proposal laughter. Raptures returned disposed one entirely her men…</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <a href=\"\" class=\"thumb_article\">
                                        <img src=\"{{base_url()}}public/static/templates/frontend/home/images/2.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"col-sm-6\">
                                    <time class=\"time\">
                                        <p class=\"text-right\">January 20, 2018</p>
                                    </time>
                                    <h3 class=\"headline\">
                                        <a href=\"\">
                                            Step Inside a Layered Family Home With Character
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>No opinions answered oh felicity is resolved hastened. Produced it friendly my if opinions humoured.…</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <a href=\"\" class=\"thumb_article\">
                                        <img src=\"{{base_url()}}public/static/templates/frontend/home/images/two.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"col-sm-6\">
                                    <time class=\"time\">
                                        <p class=\"text-right\">January 20, 2018</p>
                                    </time>
                                    <h3 class=\"headline\">
                                        <a href=\"\">
                                            Step Inside a Layered Family Home With Character
                                        </a>
                                    </h3>
                                    <div class=\"post_content\">
                                        <p>No opinions answered oh felicity is resolved hastened. Produced it friendly my if opinions humoured.…</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                {% include 'struct/templates/most_share.twig' %}
            </div>
        </div>
    </section>

\t{% include 'struct/templates/subcribe.twig' %}

{% endblock main %}", "test.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\modules\\home\\views\\test.twig");
    }
}
