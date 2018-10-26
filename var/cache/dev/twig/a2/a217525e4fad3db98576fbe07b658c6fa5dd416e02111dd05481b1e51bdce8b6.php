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
        $__internal_26f6889dc0b2b1c20cbc58c56cad59050a330138290a11eee7334373832b1fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f6889dc0b2b1c20cbc58c56cad59050a330138290a11eee7334373832b1fac->enter($__internal_26f6889dc0b2b1c20cbc58c56cad59050a330138290a11eee7334373832b1fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f6889dc0b2b1c20cbc58c56cad59050a330138290a11eee7334373832b1fac->leave($__internal_26f6889dc0b2b1c20cbc58c56cad59050a330138290a11eee7334373832b1fac_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_14c481901325e576f206f6dfe2f441b7c088808b7efaaed87cdd80af85473720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c481901325e576f206f6dfe2f441b7c088808b7efaaed87cdd80af85473720->enter($__internal_14c481901325e576f206f6dfe2f441b7c088808b7efaaed87cdd80af85473720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_14c481901325e576f206f6dfe2f441b7c088808b7efaaed87cdd80af85473720->leave($__internal_14c481901325e576f206f6dfe2f441b7c088808b7efaaed87cdd80af85473720_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_94b9cb5c67f81e95d8df28ff676c8205e3db1bf4bef47079b1f0150f4d928054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b9cb5c67f81e95d8df28ff676c8205e3db1bf4bef47079b1f0150f4d928054->enter($__internal_94b9cb5c67f81e95d8df28ff676c8205e3db1bf4bef47079b1f0150f4d928054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_94b9cb5c67f81e95d8df28ff676c8205e3db1bf4bef47079b1f0150f4d928054->leave($__internal_94b9cb5c67f81e95d8df28ff676c8205e3db1bf4bef47079b1f0150f4d928054_prof);

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
