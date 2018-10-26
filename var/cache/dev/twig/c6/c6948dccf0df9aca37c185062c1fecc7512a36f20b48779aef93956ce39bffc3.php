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
        $__internal_09a99bd5b36957ded8117bb6f53041030de60e0d22c388531402f7fa093a4b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a99bd5b36957ded8117bb6f53041030de60e0d22c388531402f7fa093a4b9b->enter($__internal_09a99bd5b36957ded8117bb6f53041030de60e0d22c388531402f7fa093a4b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a99bd5b36957ded8117bb6f53041030de60e0d22c388531402f7fa093a4b9b->leave($__internal_09a99bd5b36957ded8117bb6f53041030de60e0d22c388531402f7fa093a4b9b_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fbc1313cf1a9b0302e9319d95a55bb2950732c81df9a975db7bddca71d8df220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc1313cf1a9b0302e9319d95a55bb2950732c81df9a975db7bddca71d8df220->enter($__internal_fbc1313cf1a9b0302e9319d95a55bb2950732c81df9a975db7bddca71d8df220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_fbc1313cf1a9b0302e9319d95a55bb2950732c81df9a975db7bddca71d8df220->leave($__internal_fbc1313cf1a9b0302e9319d95a55bb2950732c81df9a975db7bddca71d8df220_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_597c81864b02b9149c1cf194b419ad0c3084ec74c05cd3d62f4eb18be8348167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597c81864b02b9149c1cf194b419ad0c3084ec74c05cd3d62f4eb18be8348167->enter($__internal_597c81864b02b9149c1cf194b419ad0c3084ec74c05cd3d62f4eb18be8348167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_597c81864b02b9149c1cf194b419ad0c3084ec74c05cd3d62f4eb18be8348167->leave($__internal_597c81864b02b9149c1cf194b419ad0c3084ec74c05cd3d62f4eb18be8348167_prof);

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
