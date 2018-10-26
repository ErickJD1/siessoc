<?php

/* @SalexUser/Profile/edit.html.twig */
class __TwigTemplate_ed2d2b2d8d2b9a7a2fd6b2e06d48aab87f3c1d1ac4a02472ad1994dcc3a19c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "@SalexUser/Profile/edit.html.twig", 1);
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
        $__internal_51ae851b80722a35d411bbd5e4aedfd6187d8d4ee3f43d964f3d9267b0fd2700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ae851b80722a35d411bbd5e4aedfd6187d8d4ee3f43d964f3d9267b0fd2700->enter($__internal_51ae851b80722a35d411bbd5e4aedfd6187d8d4ee3f43d964f3d9267b0fd2700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51ae851b80722a35d411bbd5e4aedfd6187d8d4ee3f43d964f3d9267b0fd2700->leave($__internal_51ae851b80722a35d411bbd5e4aedfd6187d8d4ee3f43d964f3d9267b0fd2700_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a0a9117ee0b290c3087921743cb8ff2fcdbb61c59e38ac4338f164108a0931b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9117ee0b290c3087921743cb8ff2fcdbb61c59e38ac4338f164108a0931b7->enter($__internal_a0a9117ee0b290c3087921743cb8ff2fcdbb61c59e38ac4338f164108a0931b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_a0a9117ee0b290c3087921743cb8ff2fcdbb61c59e38ac4338f164108a0931b7->leave($__internal_a0a9117ee0b290c3087921743cb8ff2fcdbb61c59e38ac4338f164108a0931b7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_85d88599542589533dbf6c869e44834d715359213c77d8a35af716cd17015849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d88599542589533dbf6c869e44834d715359213c77d8a35af716cd17015849->enter($__internal_85d88599542589533dbf6c869e44834d715359213c77d8a35af716cd17015849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_85d88599542589533dbf6c869e44834d715359213c77d8a35af716cd17015849->leave($__internal_85d88599542589533dbf6c869e44834d715359213c77d8a35af716cd17015849_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3b10ceb5e309093f48543757019f90b224bb61d2f0275aca8bc3370bd8c23d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b10ceb5e309093f48543757019f90b224bb61d2f0275aca8bc3370bd8c23d0c->enter($__internal_3b10ceb5e309093f48543757019f90b224bb61d2f0275aca8bc3370bd8c23d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "@SalexUser/Profile/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
";
        
        $__internal_3b10ceb5e309093f48543757019f90b224bb61d2f0275aca8bc3370bd8c23d0c->leave($__internal_3b10ceb5e309093f48543757019f90b224bb61d2f0275aca8bc3370bd8c23d0c_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Profile/edit.html.twig";
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
{% endblock %}", "@SalexUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
