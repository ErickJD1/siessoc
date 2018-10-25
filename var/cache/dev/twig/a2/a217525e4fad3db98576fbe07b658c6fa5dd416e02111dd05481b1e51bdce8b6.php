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
        $__internal_62d9d7e55b2c83d396814c1397c05cc10d85a88d4684a873e6d42189cca27c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d9d7e55b2c83d396814c1397c05cc10d85a88d4684a873e6d42189cca27c0f->enter($__internal_62d9d7e55b2c83d396814c1397c05cc10d85a88d4684a873e6d42189cca27c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d9d7e55b2c83d396814c1397c05cc10d85a88d4684a873e6d42189cca27c0f->leave($__internal_62d9d7e55b2c83d396814c1397c05cc10d85a88d4684a873e6d42189cca27c0f_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2bae56a63390d09c32be1e54a1dfc25b7d41311465245def9911d77c515c6cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bae56a63390d09c32be1e54a1dfc25b7d41311465245def9911d77c515c6cb3->enter($__internal_2bae56a63390d09c32be1e54a1dfc25b7d41311465245def9911d77c515c6cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_2bae56a63390d09c32be1e54a1dfc25b7d41311465245def9911d77c515c6cb3->leave($__internal_2bae56a63390d09c32be1e54a1dfc25b7d41311465245def9911d77c515c6cb3_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2c67e4ae83bbbb3c9383c7173bf8fe9869a832f31dfc521db03dfdf805117e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c67e4ae83bbbb3c9383c7173bf8fe9869a832f31dfc521db03dfdf805117e9e->enter($__internal_2c67e4ae83bbbb3c9383c7173bf8fe9869a832f31dfc521db03dfdf805117e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_2c67e4ae83bbbb3c9383c7173bf8fe9869a832f31dfc521db03dfdf805117e9e->leave($__internal_2c67e4ae83bbbb3c9383c7173bf8fe9869a832f31dfc521db03dfdf805117e9e_prof);

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
