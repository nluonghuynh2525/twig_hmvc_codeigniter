<?php

/* struct/templates/template.twig */
class __TwigTemplate_f7d1d5827e99e42ee0d48e13ee1ecc9d8cf05c62ed830019efed0ab5c853e04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("struct/form.html", "struct/templates/template.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "struct/form.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t<!-- slick -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/slick/slick.css\"/>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/css/style.css\"/>

";
    }

    // line 14
    public function block_foot_script($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->loadTemplate("struct/head/script.html", "struct/templates/template.twig", 15)->display($context);
        // line 16
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/js/bootstrap.min.js\"></script>
    <!-- slick -->
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/slick/slick.min.js\"></script>
    <!-- parallax -->
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/js/parallax.min.js\"></script>
    <!-- is_stuck jquery -->
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "public/static/templates/frontend/home/js/jquery.sticky-kit.min.js\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.slick_slide').slick({
              
                autoplay: true,
                centerMode: true,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 1,
                // nextArrow: '<i class=\"i_control prev\"></i>',
                // prevArrow: '<i class=\"i_control next\"></i>',
              
              responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                  breakpoint: 480,
                    
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    
                    }
                }
                
              ]
            });

            \$('.slick_slide_bottom').slick({
              
                autoplay: true,
                centerMode: true,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                // nextArrow: '<i class=\"i_control prev\"></i>',
                // prevArrow: '<i class=\"i_control next\"></i>',
              
              responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                  breakpoint: 480,
                    
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    
                    }
                }
                
              ]
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
          \$(\".sidebar\").stick_in_parent();
        });

        // Xử lý Go Top
        var offset = 383,
          gotop = \$('.gotop');

        \$(window).scroll(function() {
          (\$(this).scrollTop() < offset) ? gotop.removeClass('active') : gotop.addClass('active');
        });

        gotop.click(function(){\$('html,body').animate({scrollTop: 0}, 700);});
    </script>
 
";
    }

    public function getTemplateName()
    {
        return "struct/templates/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  69 => 20,  64 => 18,  58 => 16,  55 => 15,  52 => 14,  45 => 9,  41 => 8,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'struct/form.html' %}

{% block head_script %}
\t
\t<!-- slick -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{base_url()}}public/static/templates/frontend/home/slick/slick.css\"/>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{base_url()}}public/static/templates/frontend/home/css/bootstrap.min.css\" >
    <link rel=\"stylesheet\" href=\"{{base_url()}}public/static/templates/frontend/home/css/style.css\"/>

{% endblock head_script %}


{% block foot_script %}
\t{% include 'struct/head/script.html' %}
    <script src=\"{{base_url()}}public/static/templates/frontend/home/js/bootstrap.min.js\"></script>
    <!-- slick -->
    <script type=\"text/javascript\" src=\"{{base_url()}}public/static/templates/frontend/home/slick/slick.min.js\"></script>
    <!-- parallax -->
    <script type=\"text/javascript\" src=\"{{base_url()}}public/static/templates/frontend/home/js/parallax.min.js\"></script>
    <!-- is_stuck jquery -->
    <script src=\"{{base_url()}}public/static/templates/frontend/home/js/jquery.sticky-kit.min.js\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.slick_slide').slick({
              
                autoplay: true,
                centerMode: true,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 1,
                // nextArrow: '<i class=\"i_control prev\"></i>',
                // prevArrow: '<i class=\"i_control next\"></i>',
              
              responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                  breakpoint: 480,
                    
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    
                    }
                }
                
              ]
            });

            \$('.slick_slide_bottom').slick({
              
                autoplay: true,
                centerMode: true,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                // nextArrow: '<i class=\"i_control prev\"></i>',
                // prevArrow: '<i class=\"i_control next\"></i>',
              
              responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                  breakpoint: 480,
                    
                    settings: {
                        centerMode: false,
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    
                    }
                }
                
              ]
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
          \$(\".sidebar\").stick_in_parent();
        });

        // Xử lý Go Top
        var offset = 383,
          gotop = \$('.gotop');

        \$(window).scroll(function() {
          (\$(this).scrollTop() < offset) ? gotop.removeClass('active') : gotop.addClass('active');
        });

        gotop.click(function(){\$('html,body').animate({scrollTop: 0}, 700);});
    </script>
 
{% endblock foot_script %}", "struct/templates/template.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\template.twig");
    }
}
