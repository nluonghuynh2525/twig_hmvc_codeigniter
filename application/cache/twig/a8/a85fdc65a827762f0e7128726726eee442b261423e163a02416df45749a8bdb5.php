<?php

/* struct/abstract.html */
class __TwigTemplate_f104afc7639c0c4242c6c82f7987de1f3ed98ee909522279ae71b3a94955140d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'seo' => array($this, 'block_seo'),
            'head_script' => array($this, 'block_head_script'),
            'body' => array($this, 'block_body'),
            'body_html' => array($this, 'block_body_html'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'foot_script' => array($this, 'block_foot_script'),
            'google_analytics' => array($this, 'block_google_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\"/>   
    
\t  ";
        // line 8
        $this->displayBlock('seo', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('head_script', $context, $blocks);
        echo "\t

    
  </head>

  ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "</html>";
    }

    // line 8
    public function block_seo($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head_script($context, array $blocks = array())
    {
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('body_html', $context, $blocks);
        // line 20
        echo "    
      <div class=\"page\">
          
  \t\t";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "
  \t\t";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 26
        echo "
  \t\t";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 28
        echo "
  \t\t";
        // line 29
        $this->displayBlock('foot_script', $context, $blocks);
        // line 30
        echo "
      </div> <!-- end wrap-bg -->

      ";
        // line 33
        $this->displayBlock('google_analytics', $context, $blocks);
        // line 36
        echo "      
    </body><!--end-body-->
  ";
    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        // line 17
        echo "    <body >
 
    ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $this->loadTemplate("struct/body/header.html", "struct/abstract.html", 23)->display($context);
    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $this->loadTemplate("struct/body/footer.html", "struct/abstract.html", 27)->display($context);
    }

    // line 29
    public function block_foot_script($context, array $blocks = array())
    {
    }

    // line 33
    public function block_google_analytics($context, array $blocks = array())
    {
        // line 34
        echo "        
      ";
    }

    public function getTemplateName()
    {
        return "struct/abstract.html";
    }

    public function getDebugInfo()
    {
        return array (  141 => 34,  138 => 33,  133 => 29,  127 => 27,  122 => 25,  116 => 23,  110 => 17,  107 => 16,  101 => 36,  99 => 33,  94 => 30,  92 => 29,  89 => 28,  87 => 27,  84 => 26,  82 => 25,  79 => 24,  77 => 23,  72 => 20,  70 => 16,  67 => 15,  64 => 14,  59 => 9,  54 => 8,  50 => 39,  48 => 14,  39 => 9,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\"/>   
    
\t  {% block seo %}{% endblock seo %}
    {% block head_script %}{% endblock head_script %}\t

    
  </head>

  {% block body %}

    {% block body_html %}
    <body >
 
    {% endblock body_html %}
    
      <div class=\"page\">
          
  \t\t{% block header %}{% include 'struct/body/header.html' %}{% endblock header %}

  \t\t{% block main %}{% endblock main %}

  \t\t{% block footer %}{% include 'struct/body/footer.html' %}{% endblock footer %}

  \t\t{% block foot_script %}{% endblock foot_script %}

      </div> <!-- end wrap-bg -->

      {% block google_analytics %}
        
      {% endblock google_analytics %}
      
    </body><!--end-body-->
  {% endblock body %}
</html>", "struct/abstract.html", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\abstract.html");
    }
}
