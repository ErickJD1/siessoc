<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_fc619ec5f6514e92fd58b3232083ece2dc0443440842449619a3177cc5d4a58a extends Twig_Template
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
        $__internal_a929a2fdf9312ef2223b52ef3733cdef5a1008c963d8738ff586bd9d532f7aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a929a2fdf9312ef2223b52ef3733cdef5a1008c963d8738ff586bd9d532f7aae->enter($__internal_a929a2fdf9312ef2223b52ef3733cdef5a1008c963d8738ff586bd9d532f7aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a929a2fdf9312ef2223b52ef3733cdef5a1008c963d8738ff586bd9d532f7aae->leave($__internal_a929a2fdf9312ef2223b52ef3733cdef5a1008c963d8738ff586bd9d532f7aae_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_343410bf3f20b29963ecddd9df1892b46dd2c4fe8168fd1a57c337ba257dc0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343410bf3f20b29963ecddd9df1892b46dd2c4fe8168fd1a57c337ba257dc0ec->enter($__internal_343410bf3f20b29963ecddd9df1892b46dd2c4fe8168fd1a57c337ba257dc0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_343410bf3f20b29963ecddd9df1892b46dd2c4fe8168fd1a57c337ba257dc0ec->leave($__internal_343410bf3f20b29963ecddd9df1892b46dd2c4fe8168fd1a57c337ba257dc0ec_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3e975aee5de6b0e3d4669bcf91d10dd476219493d62d1cb5a2b6378b6552ba04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e975aee5de6b0e3d4669bcf91d10dd476219493d62d1cb5a2b6378b6552ba04->enter($__internal_3e975aee5de6b0e3d4669bcf91d10dd476219493d62d1cb5a2b6378b6552ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_3e975aee5de6b0e3d4669bcf91d10dd476219493d62d1cb5a2b6378b6552ba04->leave($__internal_3e975aee5de6b0e3d4669bcf91d10dd476219493d62d1cb5a2b6378b6552ba04_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_acf3992ffcfee3b50f43c6868406c610e25c1d0a441e967130401ea818a9baa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf3992ffcfee3b50f43c6868406c610e25c1d0a441e967130401ea818a9baa3->enter($__internal_acf3992ffcfee3b50f43c6868406c610e25c1d0a441e967130401ea818a9baa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
";
        
        $__internal_acf3992ffcfee3b50f43c6868406c610e25c1d0a441e967130401ea818a9baa3->leave($__internal_acf3992ffcfee3b50f43c6868406c610e25c1d0a441e967130401ea818a9baa3_prof);

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
\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
