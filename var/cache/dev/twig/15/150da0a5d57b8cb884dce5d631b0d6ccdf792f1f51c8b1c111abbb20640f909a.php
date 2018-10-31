<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ed12cd1b91a9af7027ed45f503d99dce532ce1c5a1d922a7271457669678ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f297e3620fb8cc3f3fc9d4467e98f7c8162d79bc9efc4cea5498fe3e1d66a32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f297e3620fb8cc3f3fc9d4467e98f7c8162d79bc9efc4cea5498fe3e1d66a32c->enter($__internal_f297e3620fb8cc3f3fc9d4467e98f7c8162d79bc9efc4cea5498fe3e1d66a32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f297e3620fb8cc3f3fc9d4467e98f7c8162d79bc9efc4cea5498fe3e1d66a32c->leave($__internal_f297e3620fb8cc3f3fc9d4467e98f7c8162d79bc9efc4cea5498fe3e1d66a32c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87abf750aaf648c90627bc8a06e3e0f9824ea6ccf7e1f70960a1eb007c3f4431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87abf750aaf648c90627bc8a06e3e0f9824ea6ccf7e1f70960a1eb007c3f4431->enter($__internal_87abf750aaf648c90627bc8a06e3e0f9824ea6ccf7e1f70960a1eb007c3f4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87abf750aaf648c90627bc8a06e3e0f9824ea6ccf7e1f70960a1eb007c3f4431->leave($__internal_87abf750aaf648c90627bc8a06e3e0f9824ea6ccf7e1f70960a1eb007c3f4431_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b1d2b2154fba1b1533ee453c333e7fffcfdcba009e217d974e6a7edae08021b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1d2b2154fba1b1533ee453c333e7fffcfdcba009e217d974e6a7edae08021b->enter($__internal_0b1d2b2154fba1b1533ee453c333e7fffcfdcba009e217d974e6a7edae08021b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b1d2b2154fba1b1533ee453c333e7fffcfdcba009e217d974e6a7edae08021b->leave($__internal_0b1d2b2154fba1b1533ee453c333e7fffcfdcba009e217d974e6a7edae08021b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75e540f04d763c79892f8a70059ab3ec6febff21cec9aa4f4759b38abc4068df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e540f04d763c79892f8a70059ab3ec6febff21cec9aa4f4759b38abc4068df->enter($__internal_75e540f04d763c79892f8a70059ab3ec6febff21cec9aa4f4759b38abc4068df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_75e540f04d763c79892f8a70059ab3ec6febff21cec9aa4f4759b38abc4068df->leave($__internal_75e540f04d763c79892f8a70059ab3ec6febff21cec9aa4f4759b38abc4068df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
