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
        $__internal_261d0449410fcbafc0e0ce990e47de9c9f86a9a2f7868a55404309dda2aee8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261d0449410fcbafc0e0ce990e47de9c9f86a9a2f7868a55404309dda2aee8bb->enter($__internal_261d0449410fcbafc0e0ce990e47de9c9f86a9a2f7868a55404309dda2aee8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261d0449410fcbafc0e0ce990e47de9c9f86a9a2f7868a55404309dda2aee8bb->leave($__internal_261d0449410fcbafc0e0ce990e47de9c9f86a9a2f7868a55404309dda2aee8bb_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_39233d22274335cb9932c1e5808784e47760ac33019ea24097ae22cff5e585d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39233d22274335cb9932c1e5808784e47760ac33019ea24097ae22cff5e585d4->enter($__internal_39233d22274335cb9932c1e5808784e47760ac33019ea24097ae22cff5e585d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_39233d22274335cb9932c1e5808784e47760ac33019ea24097ae22cff5e585d4->leave($__internal_39233d22274335cb9932c1e5808784e47760ac33019ea24097ae22cff5e585d4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_aff3a8f8a25cd3f756b01e9a28f56a9cd2cac4531cca5bf5e0290f0078deb35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff3a8f8a25cd3f756b01e9a28f56a9cd2cac4531cca5bf5e0290f0078deb35c->enter($__internal_aff3a8f8a25cd3f756b01e9a28f56a9cd2cac4531cca5bf5e0290f0078deb35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_aff3a8f8a25cd3f756b01e9a28f56a9cd2cac4531cca5bf5e0290f0078deb35c->leave($__internal_aff3a8f8a25cd3f756b01e9a28f56a9cd2cac4531cca5bf5e0290f0078deb35c_prof);

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
