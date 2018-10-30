<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be7ffe4035887828cf6988a95415643e7f2dc57eac51c1b83e30885e99e6f646 extends Twig_Template
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
        $__internal_bdf0892d04638ea750368e70467734e943893ad506280b0aadfbc8fdaa4cc5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf0892d04638ea750368e70467734e943893ad506280b0aadfbc8fdaa4cc5fd->enter($__internal_bdf0892d04638ea750368e70467734e943893ad506280b0aadfbc8fdaa4cc5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf0892d04638ea750368e70467734e943893ad506280b0aadfbc8fdaa4cc5fd->leave($__internal_bdf0892d04638ea750368e70467734e943893ad506280b0aadfbc8fdaa4cc5fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36da8820642bee4bebd36287aee1a09541675bd1f2977f048b7f05cf0ad3baa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36da8820642bee4bebd36287aee1a09541675bd1f2977f048b7f05cf0ad3baa9->enter($__internal_36da8820642bee4bebd36287aee1a09541675bd1f2977f048b7f05cf0ad3baa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_36da8820642bee4bebd36287aee1a09541675bd1f2977f048b7f05cf0ad3baa9->leave($__internal_36da8820642bee4bebd36287aee1a09541675bd1f2977f048b7f05cf0ad3baa9_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e082fc36d6c8a5b2861b2860c6808f5462118c7ea49970cb99539b56c23e0492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e082fc36d6c8a5b2861b2860c6808f5462118c7ea49970cb99539b56c23e0492->enter($__internal_e082fc36d6c8a5b2861b2860c6808f5462118c7ea49970cb99539b56c23e0492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e082fc36d6c8a5b2861b2860c6808f5462118c7ea49970cb99539b56c23e0492->leave($__internal_e082fc36d6c8a5b2861b2860c6808f5462118c7ea49970cb99539b56c23e0492_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef7b6e319cf7cc9a646a2175350595a0de3bcdb4e368f613fb7de1fcbc7bad22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7b6e319cf7cc9a646a2175350595a0de3bcdb4e368f613fb7de1fcbc7bad22->enter($__internal_ef7b6e319cf7cc9a646a2175350595a0de3bcdb4e368f613fb7de1fcbc7bad22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ef7b6e319cf7cc9a646a2175350595a0de3bcdb4e368f613fb7de1fcbc7bad22->leave($__internal_ef7b6e319cf7cc9a646a2175350595a0de3bcdb4e368f613fb7de1fcbc7bad22_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_0bcd8cec8bb733d9d7882e9f64a40d3ee34bb6e813f335e405acece19db8ad8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcd8cec8bb733d9d7882e9f64a40d3ee34bb6e813f335e405acece19db8ad8f->enter($__internal_0bcd8cec8bb733d9d7882e9f64a40d3ee34bb6e813f335e405acece19db8ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_0bcd8cec8bb733d9d7882e9f64a40d3ee34bb6e813f335e405acece19db8ad8f->leave($__internal_0bcd8cec8bb733d9d7882e9f64a40d3ee34bb6e813f335e405acece19db8ad8f_prof);

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
