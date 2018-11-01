<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9ef131f4d79a649202d01b81cec672c29f24014d821d05c68562e62453d71e31 extends Twig_Template
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
        $__internal_f36c1ca2ad6a06d82d3bc5f6b76dc58ea3325d08fe73ffdc6937798de899f61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36c1ca2ad6a06d82d3bc5f6b76dc58ea3325d08fe73ffdc6937798de899f61d->enter($__internal_f36c1ca2ad6a06d82d3bc5f6b76dc58ea3325d08fe73ffdc6937798de899f61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36c1ca2ad6a06d82d3bc5f6b76dc58ea3325d08fe73ffdc6937798de899f61d->leave($__internal_f36c1ca2ad6a06d82d3bc5f6b76dc58ea3325d08fe73ffdc6937798de899f61d_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8e513e7a4766590be2b2e4a84ec006e70ad0d57c781c6cc209cc3ccfc804d18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e513e7a4766590be2b2e4a84ec006e70ad0d57c781c6cc209cc3ccfc804d18c->enter($__internal_8e513e7a4766590be2b2e4a84ec006e70ad0d57c781c6cc209cc3ccfc804d18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_8e513e7a4766590be2b2e4a84ec006e70ad0d57c781c6cc209cc3ccfc804d18c->leave($__internal_8e513e7a4766590be2b2e4a84ec006e70ad0d57c781c6cc209cc3ccfc804d18c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ff24e1839f8b41ad263ae5e6fe2a17168bccb281dbe790747b12f42b348b9d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff24e1839f8b41ad263ae5e6fe2a17168bccb281dbe790747b12f42b348b9d84->enter($__internal_ff24e1839f8b41ad263ae5e6fe2a17168bccb281dbe790747b12f42b348b9d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_ff24e1839f8b41ad263ae5e6fe2a17168bccb281dbe790747b12f42b348b9d84->leave($__internal_ff24e1839f8b41ad263ae5e6fe2a17168bccb281dbe790747b12f42b348b9d84_prof);

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
