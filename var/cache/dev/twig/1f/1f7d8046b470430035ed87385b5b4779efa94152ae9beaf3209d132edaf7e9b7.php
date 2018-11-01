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
        $__internal_f980006263f55d444f947c7ae70fc23661ecd75451ea8303e2674b490d53df91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f980006263f55d444f947c7ae70fc23661ecd75451ea8303e2674b490d53df91->enter($__internal_f980006263f55d444f947c7ae70fc23661ecd75451ea8303e2674b490d53df91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f980006263f55d444f947c7ae70fc23661ecd75451ea8303e2674b490d53df91->leave($__internal_f980006263f55d444f947c7ae70fc23661ecd75451ea8303e2674b490d53df91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1377250649a6974331ac90907c3f31ffa6fecb3a65bff508318f4cdb6a5ab63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1377250649a6974331ac90907c3f31ffa6fecb3a65bff508318f4cdb6a5ab63c->enter($__internal_1377250649a6974331ac90907c3f31ffa6fecb3a65bff508318f4cdb6a5ab63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1377250649a6974331ac90907c3f31ffa6fecb3a65bff508318f4cdb6a5ab63c->leave($__internal_1377250649a6974331ac90907c3f31ffa6fecb3a65bff508318f4cdb6a5ab63c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a34ee73fc64e3a13f2ae9f9accdee36e7962ad751b7cf15e01dfa6ff5342327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a34ee73fc64e3a13f2ae9f9accdee36e7962ad751b7cf15e01dfa6ff5342327->enter($__internal_2a34ee73fc64e3a13f2ae9f9accdee36e7962ad751b7cf15e01dfa6ff5342327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a34ee73fc64e3a13f2ae9f9accdee36e7962ad751b7cf15e01dfa6ff5342327->leave($__internal_2a34ee73fc64e3a13f2ae9f9accdee36e7962ad751b7cf15e01dfa6ff5342327_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c8d17c84ffc1d2f0ecf69f27fdb8a4c0dee2a3e345e5145688de0f18e8ce2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8d17c84ffc1d2f0ecf69f27fdb8a4c0dee2a3e345e5145688de0f18e8ce2fa->enter($__internal_0c8d17c84ffc1d2f0ecf69f27fdb8a4c0dee2a3e345e5145688de0f18e8ce2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0c8d17c84ffc1d2f0ecf69f27fdb8a4c0dee2a3e345e5145688de0f18e8ce2fa->leave($__internal_0c8d17c84ffc1d2f0ecf69f27fdb8a4c0dee2a3e345e5145688de0f18e8ce2fa_prof);

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
