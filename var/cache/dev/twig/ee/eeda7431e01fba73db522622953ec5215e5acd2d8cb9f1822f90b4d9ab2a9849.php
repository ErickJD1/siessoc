<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_a462d7de3e35f14279159efdf967df7f7a2a9070046036f306715fbe4d6686a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_05c90fd70d864efd5250e29c794358b496cea3418582c00f861289f6f2e6600e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c90fd70d864efd5250e29c794358b496cea3418582c00f861289f6f2e6600e->enter($__internal_05c90fd70d864efd5250e29c794358b496cea3418582c00f861289f6f2e6600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c90fd70d864efd5250e29c794358b496cea3418582c00f861289f6f2e6600e->leave($__internal_05c90fd70d864efd5250e29c794358b496cea3418582c00f861289f6f2e6600e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0abe4d6261f0a7fc8968e359faf088a24732a8f57533d36741b933e4207bfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0abe4d6261f0a7fc8968e359faf088a24732a8f57533d36741b933e4207bfd9->enter($__internal_f0abe4d6261f0a7fc8968e359faf088a24732a8f57533d36741b933e4207bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f0abe4d6261f0a7fc8968e359faf088a24732a8f57533d36741b933e4207bfd9->leave($__internal_f0abe4d6261f0a7fc8968e359faf088a24732a8f57533d36741b933e4207bfd9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
