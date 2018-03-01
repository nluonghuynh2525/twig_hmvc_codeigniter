<?php

/* struct/templates/subcribe.twig */
class __TwigTemplate_7b8bfe6ca377d8049b11e38edaba9a74fb702481893aed9f505b2e9d6c546c80 extends Twig_Template
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
        echo "<!-- subcribe -->
        <section>
            <div class=\"subcribe\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 offset-sm-3 subcribe_detail\">
                            <h3>Đăng ký</h3>
                            <p>Đăng ký ngay để được thông báo về các tin tức mới từ The Hyns mỗi tuần!</p>
                            <div class=\"row form_subcribe\">
                                <div class=\"col-sm-12\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-sm-8\">
                                                <input placeholder=\"E-Mail Của Bạn\" type=\"text\" name=\"email_subscribe\" class=\"widget_subscribe float-md-right float-lg-right float-xl-right\" >

                                            </div>
                                            <div class=\"col-sm-4\">
                                                <button type=\"submit\" name=\"submit\" class=\"btn btn_subcribe float-md-left float-lg-left float-xl-left\">NHẬN TIN MỚI</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"col-sm-12 error_msg\">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js\"></script>
        <script type=\"text/javascript\">

            \$(document).ready(function() {
                \$(\".btn_subcribe\").click(function(form){
                    form.preventDefault();

                    var email_subscribe = \$(\".widget_subscribe\").val();

                    \$.ajax({
                        url: \"";
        // line 42
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "home/CheckFormSubcribe\",
                        type:'POST',
                        dataType: \"json\",
                        data: {email_subscribe:email_subscribe},
                        success: function(data) {
                            if(\$.isEmptyObject(data.error)){
                                alert(data.success);
                            }else{
                                
                                \$(\".error_msg\").css('display','block');
                                \$(\".error_msg\").html(\"<div class='alert alert-warning alert-dismissable fade show'> <button type='button' class='close' data-dismiss='alert'>&times;</button> <strong>\"+data.error+\"</strong> </div>\");
                            }
                        }
                    });


                }); 


            });


        </script>";
    }

    public function getTemplateName()
    {
        return "struct/templates/subcribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 42,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- subcribe -->
        <section>
            <div class=\"subcribe\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 offset-sm-3 subcribe_detail\">
                            <h3>Đăng ký</h3>
                            <p>Đăng ký ngay để được thông báo về các tin tức mới từ The Hyns mỗi tuần!</p>
                            <div class=\"row form_subcribe\">
                                <div class=\"col-sm-12\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-sm-8\">
                                                <input placeholder=\"E-Mail Của Bạn\" type=\"text\" name=\"email_subscribe\" class=\"widget_subscribe float-md-right float-lg-right float-xl-right\" >

                                            </div>
                                            <div class=\"col-sm-4\">
                                                <button type=\"submit\" name=\"submit\" class=\"btn btn_subcribe float-md-left float-lg-left float-xl-left\">NHẬN TIN MỚI</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"col-sm-12 error_msg\">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js\"></script>
        <script type=\"text/javascript\">

            \$(document).ready(function() {
                \$(\".btn_subcribe\").click(function(form){
                    form.preventDefault();

                    var email_subscribe = \$(\".widget_subscribe\").val();

                    \$.ajax({
                        url: \"{{base_url()}}home/CheckFormSubcribe\",
                        type:'POST',
                        dataType: \"json\",
                        data: {email_subscribe:email_subscribe},
                        success: function(data) {
                            if(\$.isEmptyObject(data.error)){
                                alert(data.success);
                            }else{
                                
                                \$(\".error_msg\").css('display','block');
                                \$(\".error_msg\").html(\"<div class='alert alert-warning alert-dismissable fade show'> <button type='button' class='close' data-dismiss='alert'>&times;</button> <strong>\"+data.error+\"</strong> </div>\");
                            }
                        }
                    });


                }); 


            });


        </script>", "struct/templates/subcribe.twig", "E:\\xampp\\htdocs\\ci_blog2\\application\\views\\struct\\templates\\subcribe.twig");
    }
}
