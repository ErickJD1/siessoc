<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5ab75b0f4238ee8ba9591869520a786008096907037d8bb94b7dd92277fa2d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/loginBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a0f9f24b49d17f71d7216494383564f903fd031f9d9f3d7710291c5c74fb0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0f9f24b49d17f71d7216494383564f903fd031f9d9f3d7710291c5c74fb0c3->enter($__internal_6a0f9f24b49d17f71d7216494383564f903fd031f9d9f3d7710291c5c74fb0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0f9f24b49d17f71d7216494383564f903fd031f9d9f3d7710291c5c74fb0c3->leave($__internal_6a0f9f24b49d17f71d7216494383564f903fd031f9d9f3d7710291c5c74fb0c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f6eee903fd4446d675b919ac4f4caeef6e668d5eee73d9ead5bbb24108a03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f6eee903fd4446d675b919ac4f4caeef6e668d5eee73d9ead5bbb24108a03a->enter($__internal_93f6eee903fd4446d675b919ac4f4caeef6e668d5eee73d9ead5bbb24108a03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_93f6eee903fd4446d675b919ac4f4caeef6e668d5eee73d9ead5bbb24108a03a->leave($__internal_93f6eee903fd4446d675b919ac4f4caeef6e668d5eee73d9ead5bbb24108a03a_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2b09fa3073d7b921ad67ba125ab90197b05dcdd30d6d175226725079348f9a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b09fa3073d7b921ad67ba125ab90197b05dcdd30d6d175226725079348f9a02->enter($__internal_2b09fa3073d7b921ad67ba125ab90197b05dcdd30d6d175226725079348f9a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2b09fa3073d7b921ad67ba125ab90197b05dcdd30d6d175226725079348f9a02->leave($__internal_2b09fa3073d7b921ad67ba125ab90197b05dcdd30d6d175226725079348f9a02_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f1566c053d032da54af6442c9fbb256fd466904f259478b5ce50fad9a0ebe1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1566c053d032da54af6442c9fbb256fd466904f259478b5ce50fad9a0ebe1e->enter($__internal_1f1566c053d032da54af6442c9fbb256fd466904f259478b5ce50fad9a0ebe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t";
        // line 13
        $this->displayBlock('user_auth_contents', $context, $blocks);
        // line 14
        echo "\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t";
        
        $__internal_1f1566c053d032da54af6442c9fbb256fd466904f259478b5ce50fad9a0ebe1e->leave($__internal_1f1566c053d032da54af6442c9fbb256fd466904f259478b5ce50fad9a0ebe1e_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_b309fbb850c2f61c308066adc3e9ea563a926c43be9353ec22f749e6a6d1e351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b309fbb850c2f61c308066adc3e9ea563a926c43be9353ec22f749e6a6d1e351->enter($__internal_b309fbb850c2f61c308066adc3e9ea563a926c43be9353ec22f749e6a6d1e351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_b309fbb850c2f61c308066adc3e9ea563a926c43be9353ec22f749e6a6d1e351->leave($__internal_b309fbb850c2f61c308066adc3e9ea563a926c43be9353ec22f749e6a6d1e351_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 14,  81 => 13,  72 => 9,  68 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/loginBase.html.twig' %}

{% block title %}{{ site_name }}{% endblock %}

{% block page_content %}
\t{% block fos_user_content %}
\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('bundles/app/images/logo.jpg') }}\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t{% block user_auth_contents %} {% endblock %}
\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/layout.html.twig");
    }
}
