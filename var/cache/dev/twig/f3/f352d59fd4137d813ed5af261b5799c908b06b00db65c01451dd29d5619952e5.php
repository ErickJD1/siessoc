<?php

/* @SalexUser/layout.html.twig */
class __TwigTemplate_5836f73dd82bf477bee06e5e1ab7984d9f1582db7041565be22f0f8e66b0af5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "@SalexUser/layout.html.twig", 1);
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
        $__internal_eed8db1b93e5be1057a39688d49b94cafc7b28316e662b833968bc1486b2d1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed8db1b93e5be1057a39688d49b94cafc7b28316e662b833968bc1486b2d1a2->enter($__internal_eed8db1b93e5be1057a39688d49b94cafc7b28316e662b833968bc1486b2d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed8db1b93e5be1057a39688d49b94cafc7b28316e662b833968bc1486b2d1a2->leave($__internal_eed8db1b93e5be1057a39688d49b94cafc7b28316e662b833968bc1486b2d1a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a669155ae1170c53e5fd74ed259b03e467936798b84c1761c89a322f5944824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a669155ae1170c53e5fd74ed259b03e467936798b84c1761c89a322f5944824->enter($__internal_3a669155ae1170c53e5fd74ed259b03e467936798b84c1761c89a322f5944824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_3a669155ae1170c53e5fd74ed259b03e467936798b84c1761c89a322f5944824->leave($__internal_3a669155ae1170c53e5fd74ed259b03e467936798b84c1761c89a322f5944824_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_10daabffc75d6e784d9340cf24ba1c53a4f1dd757652551962c937bceeb2b493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10daabffc75d6e784d9340cf24ba1c53a4f1dd757652551962c937bceeb2b493->enter($__internal_10daabffc75d6e784d9340cf24ba1c53a4f1dd757652551962c937bceeb2b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_10daabffc75d6e784d9340cf24ba1c53a4f1dd757652551962c937bceeb2b493->leave($__internal_10daabffc75d6e784d9340cf24ba1c53a4f1dd757652551962c937bceeb2b493_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_041dc5a672512019d43441d1ba0808337635f81035b87187fde868b489d978df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041dc5a672512019d43441d1ba0808337635f81035b87187fde868b489d978df->enter($__internal_041dc5a672512019d43441d1ba0808337635f81035b87187fde868b489d978df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_041dc5a672512019d43441d1ba0808337635f81035b87187fde868b489d978df->leave($__internal_041dc5a672512019d43441d1ba0808337635f81035b87187fde868b489d978df_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_bf9807b180fb758a1363263393c93f38a1b5508f7caf1e2ccbde67c11e59f1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9807b180fb758a1363263393c93f38a1b5508f7caf1e2ccbde67c11e59f1ee->enter($__internal_bf9807b180fb758a1363263393c93f38a1b5508f7caf1e2ccbde67c11e59f1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_bf9807b180fb758a1363263393c93f38a1b5508f7caf1e2ccbde67c11e59f1ee->leave($__internal_bf9807b180fb758a1363263393c93f38a1b5508f7caf1e2ccbde67c11e59f1ee_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/layout.html.twig";
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
{% endblock %}", "@SalexUser/layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\layout.html.twig");
    }
}
