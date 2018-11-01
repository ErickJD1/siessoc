<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_224b7fc58b233e05a9d4e59f755735e7b378bc1f6df559c0d4d52c4b9aacf064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7534d0c6b59bf66c92d90b9919c24e271a19ab5aac2c9af0702632c451cf7a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7534d0c6b59bf66c92d90b9919c24e271a19ab5aac2c9af0702632c451cf7a0f->enter($__internal_7534d0c6b59bf66c92d90b9919c24e271a19ab5aac2c9af0702632c451cf7a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7534d0c6b59bf66c92d90b9919c24e271a19ab5aac2c9af0702632c451cf7a0f->leave($__internal_7534d0c6b59bf66c92d90b9919c24e271a19ab5aac2c9af0702632c451cf7a0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcfe2b89f13bd4cd3b0072f5256aaf3fdce1c683c5c4b728a6105cc797bbd5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfe2b89f13bd4cd3b0072f5256aaf3fdce1c683c5c4b728a6105cc797bbd5c2->enter($__internal_dcfe2b89f13bd4cd3b0072f5256aaf3fdce1c683c5c4b728a6105cc797bbd5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_dcfe2b89f13bd4cd3b0072f5256aaf3fdce1c683c5c4b728a6105cc797bbd5c2->leave($__internal_dcfe2b89f13bd4cd3b0072f5256aaf3fdce1c683c5c4b728a6105cc797bbd5c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
