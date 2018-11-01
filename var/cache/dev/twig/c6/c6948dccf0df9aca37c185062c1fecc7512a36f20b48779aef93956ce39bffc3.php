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
        $__internal_afa4d1e329965112a6f8d74a2cf9b8b0fa6a63a9114b721794f57f8b22812dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa4d1e329965112a6f8d74a2cf9b8b0fa6a63a9114b721794f57f8b22812dc7->enter($__internal_afa4d1e329965112a6f8d74a2cf9b8b0fa6a63a9114b721794f57f8b22812dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa4d1e329965112a6f8d74a2cf9b8b0fa6a63a9114b721794f57f8b22812dc7->leave($__internal_afa4d1e329965112a6f8d74a2cf9b8b0fa6a63a9114b721794f57f8b22812dc7_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3b1197b07381c1cb38df3a15550c56c23c5b6314f4de80e2a6233819b15f9eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1197b07381c1cb38df3a15550c56c23c5b6314f4de80e2a6233819b15f9eea->enter($__internal_3b1197b07381c1cb38df3a15550c56c23c5b6314f4de80e2a6233819b15f9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_3b1197b07381c1cb38df3a15550c56c23c5b6314f4de80e2a6233819b15f9eea->leave($__internal_3b1197b07381c1cb38df3a15550c56c23c5b6314f4de80e2a6233819b15f9eea_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_120f8ec9f7917a3c90de7dd8b33673565dfb3851ecf972ebb93728bb8a49f6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120f8ec9f7917a3c90de7dd8b33673565dfb3851ecf972ebb93728bb8a49f6fd->enter($__internal_120f8ec9f7917a3c90de7dd8b33673565dfb3851ecf972ebb93728bb8a49f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_120f8ec9f7917a3c90de7dd8b33673565dfb3851ecf972ebb93728bb8a49f6fd->leave($__internal_120f8ec9f7917a3c90de7dd8b33673565dfb3851ecf972ebb93728bb8a49f6fd_prof);

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
