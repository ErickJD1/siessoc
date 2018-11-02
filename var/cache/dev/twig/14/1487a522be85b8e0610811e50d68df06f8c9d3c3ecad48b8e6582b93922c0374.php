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
        $__internal_eec651405b704e82eec8ef7b424c4c23d027a7186294614e01f8e807e5e3501d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec651405b704e82eec8ef7b424c4c23d027a7186294614e01f8e807e5e3501d->enter($__internal_eec651405b704e82eec8ef7b424c4c23d027a7186294614e01f8e807e5e3501d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec651405b704e82eec8ef7b424c4c23d027a7186294614e01f8e807e5e3501d->leave($__internal_eec651405b704e82eec8ef7b424c4c23d027a7186294614e01f8e807e5e3501d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3338fd94c933369874fb79edf82fc55b68af9f6a585004aa4f8daf579de65b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3338fd94c933369874fb79edf82fc55b68af9f6a585004aa4f8daf579de65b17->enter($__internal_3338fd94c933369874fb79edf82fc55b68af9f6a585004aa4f8daf579de65b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_3338fd94c933369874fb79edf82fc55b68af9f6a585004aa4f8daf579de65b17->leave($__internal_3338fd94c933369874fb79edf82fc55b68af9f6a585004aa4f8daf579de65b17_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_50fcf50f5c9f1c396ebbc9466b0968777124cf3745b3ed972325b1cf5ef93a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fcf50f5c9f1c396ebbc9466b0968777124cf3745b3ed972325b1cf5ef93a5c->enter($__internal_50fcf50f5c9f1c396ebbc9466b0968777124cf3745b3ed972325b1cf5ef93a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_50fcf50f5c9f1c396ebbc9466b0968777124cf3745b3ed972325b1cf5ef93a5c->leave($__internal_50fcf50f5c9f1c396ebbc9466b0968777124cf3745b3ed972325b1cf5ef93a5c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_914be7d01cdea43e5d42c654394e35de67c07b68d272a5f0e10b03c6a9490a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914be7d01cdea43e5d42c654394e35de67c07b68d272a5f0e10b03c6a9490a63->enter($__internal_914be7d01cdea43e5d42c654394e35de67c07b68d272a5f0e10b03c6a9490a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_914be7d01cdea43e5d42c654394e35de67c07b68d272a5f0e10b03c6a9490a63->leave($__internal_914be7d01cdea43e5d42c654394e35de67c07b68d272a5f0e10b03c6a9490a63_prof);

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
