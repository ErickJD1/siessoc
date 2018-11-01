<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7bcd0571319550da35307f88f79bd62cbe3f14cb37fe237a2b534af1527a6ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_15764acd54f695fd8e6666e1ca6fbfc3f611a77f849bb282217733e2845d1a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15764acd54f695fd8e6666e1ca6fbfc3f611a77f849bb282217733e2845d1a38->enter($__internal_15764acd54f695fd8e6666e1ca6fbfc3f611a77f849bb282217733e2845d1a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15764acd54f695fd8e6666e1ca6fbfc3f611a77f849bb282217733e2845d1a38->leave($__internal_15764acd54f695fd8e6666e1ca6fbfc3f611a77f849bb282217733e2845d1a38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e170753b98bdee48fed3fde397585c4098d4e7b1ca4a5cf53f2a87fc35362c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e170753b98bdee48fed3fde397585c4098d4e7b1ca4a5cf53f2a87fc35362c0->enter($__internal_3e170753b98bdee48fed3fde397585c4098d4e7b1ca4a5cf53f2a87fc35362c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e170753b98bdee48fed3fde397585c4098d4e7b1ca4a5cf53f2a87fc35362c0->leave($__internal_3e170753b98bdee48fed3fde397585c4098d4e7b1ca4a5cf53f2a87fc35362c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b132e928915ef4383d78f2d2ba09bf65957f2605cda69950b23f9c36a2aaec30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b132e928915ef4383d78f2d2ba09bf65957f2605cda69950b23f9c36a2aaec30->enter($__internal_b132e928915ef4383d78f2d2ba09bf65957f2605cda69950b23f9c36a2aaec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b132e928915ef4383d78f2d2ba09bf65957f2605cda69950b23f9c36a2aaec30->leave($__internal_b132e928915ef4383d78f2d2ba09bf65957f2605cda69950b23f9c36a2aaec30_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53c98537cdfa6a88eb3512cb8eb8888bab9bea4f1e42a39af1281ad0b5563e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53c98537cdfa6a88eb3512cb8eb8888bab9bea4f1e42a39af1281ad0b5563e2->enter($__internal_e53c98537cdfa6a88eb3512cb8eb8888bab9bea4f1e42a39af1281ad0b5563e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e53c98537cdfa6a88eb3512cb8eb8888bab9bea4f1e42a39af1281ad0b5563e2->leave($__internal_e53c98537cdfa6a88eb3512cb8eb8888bab9bea4f1e42a39af1281ad0b5563e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
