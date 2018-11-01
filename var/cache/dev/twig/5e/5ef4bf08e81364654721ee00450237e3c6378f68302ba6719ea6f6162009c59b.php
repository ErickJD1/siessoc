<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_337fe0bece62718bbc951aadde69afac00f9710debe5d03e626bd9da26d18905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3935dbef0c36e16f58c7dddc3917fa317574f2cc894b02e3bd5d8c72695f7f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3935dbef0c36e16f58c7dddc3917fa317574f2cc894b02e3bd5d8c72695f7f8a->enter($__internal_3935dbef0c36e16f58c7dddc3917fa317574f2cc894b02e3bd5d8c72695f7f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3935dbef0c36e16f58c7dddc3917fa317574f2cc894b02e3bd5d8c72695f7f8a->leave($__internal_3935dbef0c36e16f58c7dddc3917fa317574f2cc894b02e3bd5d8c72695f7f8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52d730b65b9cec767f7596ffac72c47acf98805a5cae9db3090ecb70f63daec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d730b65b9cec767f7596ffac72c47acf98805a5cae9db3090ecb70f63daec1->enter($__internal_52d730b65b9cec767f7596ffac72c47acf98805a5cae9db3090ecb70f63daec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_52d730b65b9cec767f7596ffac72c47acf98805a5cae9db3090ecb70f63daec1->leave($__internal_52d730b65b9cec767f7596ffac72c47acf98805a5cae9db3090ecb70f63daec1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
