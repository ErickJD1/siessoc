<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_64b2456b2cc18dcb3ef106cd4e42355bb41a01a71d70baa224f7275bd0ee63e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27151bf9bb86a7903276a98d1d09f5406bf511fbd7e2a54d7f862eb9585e0dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27151bf9bb86a7903276a98d1d09f5406bf511fbd7e2a54d7f862eb9585e0dd1->enter($__internal_27151bf9bb86a7903276a98d1d09f5406bf511fbd7e2a54d7f862eb9585e0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27151bf9bb86a7903276a98d1d09f5406bf511fbd7e2a54d7f862eb9585e0dd1->leave($__internal_27151bf9bb86a7903276a98d1d09f5406bf511fbd7e2a54d7f862eb9585e0dd1_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b57c55be4f66fc6fce46fc5f1d3555012b11469e53b75513a4041ea7012dfb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57c55be4f66fc6fce46fc5f1d3555012b11469e53b75513a4041ea7012dfb6b->enter($__internal_b57c55be4f66fc6fce46fc5f1d3555012b11469e53b75513a4041ea7012dfb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_b57c55be4f66fc6fce46fc5f1d3555012b11469e53b75513a4041ea7012dfb6b->leave($__internal_b57c55be4f66fc6fce46fc5f1d3555012b11469e53b75513a4041ea7012dfb6b_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2890551c24ede76bd35aacadbbaa15989555d937ebee0d5dbcef5686af64f5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2890551c24ede76bd35aacadbbaa15989555d937ebee0d5dbcef5686af64f5b0->enter($__internal_2890551c24ede76bd35aacadbbaa15989555d937ebee0d5dbcef5686af64f5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_2890551c24ede76bd35aacadbbaa15989555d937ebee0d5dbcef5686af64f5b0->leave($__internal_2890551c24ede76bd35aacadbbaa15989555d937ebee0d5dbcef5686af64f5b0_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_87a5878b4bde1908bab9ecc4caaaea3032f26d87ffd86bd1e913a77b24133cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a5878b4bde1908bab9ecc4caaaea3032f26d87ffd86bd1e913a77b24133cbb->enter($__internal_87a5878b4bde1908bab9ecc4caaaea3032f26d87ffd86bd1e913a77b24133cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
";
        
        $__internal_87a5878b4bde1908bab9ecc4caaaea3032f26d87ffd86bd1e913a77b24133cbb->leave($__internal_87a5878b4bde1908bab9ecc4caaaea3032f26d87ffd86bd1e913a77b24133cbb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  73 => 10,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %}Edit Profile  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t{% include \"SalexUserBundle:Profile:edit_content.html.twig\" %}
\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
