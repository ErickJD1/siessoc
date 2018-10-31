<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0f30468f4709ae8228a2122dc1c5a23e978286d34feec78286cb01198608c342 extends Twig_Template
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
        $__internal_84820f49df2041d4f6accf8989926514681406c561c5c444c1baa507f2a259a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84820f49df2041d4f6accf8989926514681406c561c5c444c1baa507f2a259a3->enter($__internal_84820f49df2041d4f6accf8989926514681406c561c5c444c1baa507f2a259a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84820f49df2041d4f6accf8989926514681406c561c5c444c1baa507f2a259a3->leave($__internal_84820f49df2041d4f6accf8989926514681406c561c5c444c1baa507f2a259a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6ba7326bce61ff911c53381c07d7f8e72f4a93c09cbd6ba534349dc5a27ea04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ba7326bce61ff911c53381c07d7f8e72f4a93c09cbd6ba534349dc5a27ea04->enter($__internal_b6ba7326bce61ff911c53381c07d7f8e72f4a93c09cbd6ba534349dc5a27ea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6ba7326bce61ff911c53381c07d7f8e72f4a93c09cbd6ba534349dc5a27ea04->leave($__internal_b6ba7326bce61ff911c53381c07d7f8e72f4a93c09cbd6ba534349dc5a27ea04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac2993e49eb850bc9051df4c7381cd6d99ede20cbc043465d94d6a761b6195b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2993e49eb850bc9051df4c7381cd6d99ede20cbc043465d94d6a761b6195b5->enter($__internal_ac2993e49eb850bc9051df4c7381cd6d99ede20cbc043465d94d6a761b6195b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac2993e49eb850bc9051df4c7381cd6d99ede20cbc043465d94d6a761b6195b5->leave($__internal_ac2993e49eb850bc9051df4c7381cd6d99ede20cbc043465d94d6a761b6195b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3b0de3e44f80f6f31b4c56e50c77da38e181bae3a1257674f4b9a9f4e414d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b0de3e44f80f6f31b4c56e50c77da38e181bae3a1257674f4b9a9f4e414d8a->enter($__internal_d3b0de3e44f80f6f31b4c56e50c77da38e181bae3a1257674f4b9a9f4e414d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d3b0de3e44f80f6f31b4c56e50c77da38e181bae3a1257674f4b9a9f4e414d8a->leave($__internal_d3b0de3e44f80f6f31b4c56e50c77da38e181bae3a1257674f4b9a9f4e414d8a_prof);

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
