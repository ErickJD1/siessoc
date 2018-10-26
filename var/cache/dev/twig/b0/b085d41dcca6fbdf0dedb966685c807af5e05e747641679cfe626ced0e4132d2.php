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
        $__internal_4d56a149073ebd3cd3224776cde14bef6a84256dad8612cdfe8b4d6ae316a96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d56a149073ebd3cd3224776cde14bef6a84256dad8612cdfe8b4d6ae316a96b->enter($__internal_4d56a149073ebd3cd3224776cde14bef6a84256dad8612cdfe8b4d6ae316a96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d56a149073ebd3cd3224776cde14bef6a84256dad8612cdfe8b4d6ae316a96b->leave($__internal_4d56a149073ebd3cd3224776cde14bef6a84256dad8612cdfe8b4d6ae316a96b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ece2135b6b2ee649b34b8d4cf142300a565f78daa2e21e1d75bcdc065c6b24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ece2135b6b2ee649b34b8d4cf142300a565f78daa2e21e1d75bcdc065c6b24a->enter($__internal_9ece2135b6b2ee649b34b8d4cf142300a565f78daa2e21e1d75bcdc065c6b24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_9ece2135b6b2ee649b34b8d4cf142300a565f78daa2e21e1d75bcdc065c6b24a->leave($__internal_9ece2135b6b2ee649b34b8d4cf142300a565f78daa2e21e1d75bcdc065c6b24a_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8a0965c5d06aac676a21e963fcb8fbbaaa898ba03e0ba1d57f48d7538f3c5ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0965c5d06aac676a21e963fcb8fbbaaa898ba03e0ba1d57f48d7538f3c5ada->enter($__internal_8a0965c5d06aac676a21e963fcb8fbbaaa898ba03e0ba1d57f48d7538f3c5ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8a0965c5d06aac676a21e963fcb8fbbaaa898ba03e0ba1d57f48d7538f3c5ada->leave($__internal_8a0965c5d06aac676a21e963fcb8fbbaaa898ba03e0ba1d57f48d7538f3c5ada_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c19732f72106fc67888512243a0ef79d2d151369d2001e0acd0ef6902960ab16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19732f72106fc67888512243a0ef79d2d151369d2001e0acd0ef6902960ab16->enter($__internal_c19732f72106fc67888512243a0ef79d2d151369d2001e0acd0ef6902960ab16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c19732f72106fc67888512243a0ef79d2d151369d2001e0acd0ef6902960ab16->leave($__internal_c19732f72106fc67888512243a0ef79d2d151369d2001e0acd0ef6902960ab16_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_afe2fffa783aee8dc0c86f63575c7c95136d2bcba4a4bd403bb5338b7bf9aef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe2fffa783aee8dc0c86f63575c7c95136d2bcba4a4bd403bb5338b7bf9aef6->enter($__internal_afe2fffa783aee8dc0c86f63575c7c95136d2bcba4a4bd403bb5338b7bf9aef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_afe2fffa783aee8dc0c86f63575c7c95136d2bcba4a4bd403bb5338b7bf9aef6->leave($__internal_afe2fffa783aee8dc0c86f63575c7c95136d2bcba4a4bd403bb5338b7bf9aef6_prof);

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
