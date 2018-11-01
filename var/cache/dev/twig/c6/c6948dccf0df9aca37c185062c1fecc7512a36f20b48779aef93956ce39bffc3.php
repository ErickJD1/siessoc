<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9aa3d7e2ccbcb4b73e44478d8480004dd2bc48eb3c1470c14b95c894ccf06822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1981160298ac61db7ca4f8be57b2381f027afc5a271ad9ba9ea1a0cbbaee5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1981160298ac61db7ca4f8be57b2381f027afc5a271ad9ba9ea1a0cbbaee5cc->enter($__internal_e1981160298ac61db7ca4f8be57b2381f027afc5a271ad9ba9ea1a0cbbaee5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1981160298ac61db7ca4f8be57b2381f027afc5a271ad9ba9ea1a0cbbaee5cc->leave($__internal_e1981160298ac61db7ca4f8be57b2381f027afc5a271ad9ba9ea1a0cbbaee5cc_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e46592b340e00f166fa0060bcd863c5bb4d0718832271984e9dcba17acc48966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46592b340e00f166fa0060bcd863c5bb4d0718832271984e9dcba17acc48966->enter($__internal_e46592b340e00f166fa0060bcd863c5bb4d0718832271984e9dcba17acc48966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_e46592b340e00f166fa0060bcd863c5bb4d0718832271984e9dcba17acc48966->leave($__internal_e46592b340e00f166fa0060bcd863c5bb4d0718832271984e9dcba17acc48966_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d26f7c8f67a91167b6ecf36d6798bb8b3b5d3ad504384611c69cd1dbfcb97f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26f7c8f67a91167b6ecf36d6798bb8b3b5d3ad504384611c69cd1dbfcb97f27->enter($__internal_d26f7c8f67a91167b6ecf36d6798bb8b3b5d3ad504384611c69cd1dbfcb97f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_d26f7c8f67a91167b6ecf36d6798bb8b3b5d3ad504384611c69cd1dbfcb97f27->leave($__internal_d26f7c8f67a91167b6ecf36d6798bb8b3b5d3ad504384611c69cd1dbfcb97f27_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", "default/dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\default\\dashboard.html.twig");
    }
}
