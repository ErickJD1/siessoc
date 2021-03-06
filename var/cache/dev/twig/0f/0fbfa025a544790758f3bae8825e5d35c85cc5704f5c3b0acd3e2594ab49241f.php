<?php

/* @AvanzuAdminTheme/Default/login.html.twig */
class __TwigTemplate_cf180d855bcaf843cba99d962cf44934cb07ad84427c996e55fb88c2191b501e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@AvanzuAdminTheme/Default/login.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5405e1eadaf4e6fe2674f854f4ac02fa15386399448f2b2a032e554abd586d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5405e1eadaf4e6fe2674f854f4ac02fa15386399448f2b2a032e554abd586d94->enter($__internal_5405e1eadaf4e6fe2674f854f4ac02fa15386399448f2b2a032e554abd586d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5405e1eadaf4e6fe2674f854f4ac02fa15386399448f2b2a032e554abd586d94->leave($__internal_5405e1eadaf4e6fe2674f854f4ac02fa15386399448f2b2a032e554abd586d94_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4dadc61bdb4e85046581854a2a9450af4e93374715fa53b46b56820c8044775e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dadc61bdb4e85046581854a2a9450af4e93374715fa53b46b56820c8044775e->enter($__internal_4dadc61bdb4e85046581854a2a9450af4e93374715fa53b46b56820c8044775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_4dadc61bdb4e85046581854a2a9450af4e93374715fa53b46b56820c8044775e->leave($__internal_4dadc61bdb4e85046581854a2a9450af4e93374715fa53b46b56820c8044775e_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:login-layout.html.twig' %}

{% block page_content %}
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>
{% endblock %}", "@AvanzuAdminTheme/Default/login.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Default\\login.html.twig");
    }
}
