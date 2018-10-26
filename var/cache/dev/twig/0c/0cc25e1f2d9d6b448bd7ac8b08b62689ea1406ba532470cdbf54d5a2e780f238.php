<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e5c2d8b1aea804925193899019206f657fe1c578b6da0fd19439c95d4f9d0321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5907474abbbc61f1dffd280b2c49c1532d9a4b7d9702dca233fa893c13bfd848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5907474abbbc61f1dffd280b2c49c1532d9a4b7d9702dca233fa893c13bfd848->enter($__internal_5907474abbbc61f1dffd280b2c49c1532d9a4b7d9702dca233fa893c13bfd848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5907474abbbc61f1dffd280b2c49c1532d9a4b7d9702dca233fa893c13bfd848->leave($__internal_5907474abbbc61f1dffd280b2c49c1532d9a4b7d9702dca233fa893c13bfd848_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dea2179320fa75f92b19a16fe87b610bfa55cce3f13e0edabb38e83e85b79893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea2179320fa75f92b19a16fe87b610bfa55cce3f13e0edabb38e83e85b79893->enter($__internal_dea2179320fa75f92b19a16fe87b610bfa55cce3f13e0edabb38e83e85b79893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dea2179320fa75f92b19a16fe87b610bfa55cce3f13e0edabb38e83e85b79893->leave($__internal_dea2179320fa75f92b19a16fe87b610bfa55cce3f13e0edabb38e83e85b79893_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_68103f3ed5c58e865c5bd879739a90b2ba6e0a21619ff9da1e4eee7d5852754d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68103f3ed5c58e865c5bd879739a90b2ba6e0a21619ff9da1e4eee7d5852754d->enter($__internal_68103f3ed5c58e865c5bd879739a90b2ba6e0a21619ff9da1e4eee7d5852754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_68103f3ed5c58e865c5bd879739a90b2ba6e0a21619ff9da1e4eee7d5852754d->leave($__internal_68103f3ed5c58e865c5bd879739a90b2ba6e0a21619ff9da1e4eee7d5852754d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
