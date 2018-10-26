<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_850c1d171d2bcf91ecaa77416c6529803dddcbed06af798d75a270840180a7ea extends Twig_Template
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
        $__internal_76ca716a8cc7dcdb42b4d2d8d5ecdf367ade3f390fab0f740a3dcf75bb9d6888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ca716a8cc7dcdb42b4d2d8d5ecdf367ade3f390fab0f740a3dcf75bb9d6888->enter($__internal_76ca716a8cc7dcdb42b4d2d8d5ecdf367ade3f390fab0f740a3dcf75bb9d6888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ca716a8cc7dcdb42b4d2d8d5ecdf367ade3f390fab0f740a3dcf75bb9d6888->leave($__internal_76ca716a8cc7dcdb42b4d2d8d5ecdf367ade3f390fab0f740a3dcf75bb9d6888_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6486d92f3f3f2e66de561bc24a64f4cde80e046809b2c1858bdc9d3b9706051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6486d92f3f3f2e66de561bc24a64f4cde80e046809b2c1858bdc9d3b9706051->enter($__internal_d6486d92f3f3f2e66de561bc24a64f4cde80e046809b2c1858bdc9d3b9706051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6486d92f3f3f2e66de561bc24a64f4cde80e046809b2c1858bdc9d3b9706051->leave($__internal_d6486d92f3f3f2e66de561bc24a64f4cde80e046809b2c1858bdc9d3b9706051_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a3c6d8af38ab2b7bcff0fab55132f07c5067c92c28a9b1b475e246dc400a5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3c6d8af38ab2b7bcff0fab55132f07c5067c92c28a9b1b475e246dc400a5a7->enter($__internal_7a3c6d8af38ab2b7bcff0fab55132f07c5067c92c28a9b1b475e246dc400a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a3c6d8af38ab2b7bcff0fab55132f07c5067c92c28a9b1b475e246dc400a5a7->leave($__internal_7a3c6d8af38ab2b7bcff0fab55132f07c5067c92c28a9b1b475e246dc400a5a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5c80274f3c007b5d889ddc37d527cc1c7a70218c9b927f26251ead4c7be6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5c80274f3c007b5d889ddc37d527cc1c7a70218c9b927f26251ead4c7be6b7->enter($__internal_0b5c80274f3c007b5d889ddc37d527cc1c7a70218c9b927f26251ead4c7be6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b5c80274f3c007b5d889ddc37d527cc1c7a70218c9b927f26251ead4c7be6b7->leave($__internal_0b5c80274f3c007b5d889ddc37d527cc1c7a70218c9b927f26251ead4c7be6b7_prof);

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
