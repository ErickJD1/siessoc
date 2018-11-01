<?php

/* @AvanzuAdminTheme/Default/form.html.twig */
class __TwigTemplate_3c86b89397ae5b55c6e24d99806232489d86b281cbadc6494670cd7aaba31d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Default/form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d4427c88dc28db56733d9e3a5f3776543edd6cc9ccf57b074d9c22d96c9c916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4427c88dc28db56733d9e3a5f3776543edd6cc9ccf57b074d9c22d96c9c916->enter($__internal_5d4427c88dc28db56733d9e3a5f3776543edd6cc9ccf57b074d9c22d96c9c916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4427c88dc28db56733d9e3a5f3776543edd6cc9ccf57b074d9c22d96c9c916->leave($__internal_5d4427c88dc28db56733d9e3a5f3776543edd6cc9ccf57b074d9c22d96c9c916_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_36cf7721c2b7c5bf4170f9b5652a62627a44675ffae0debba9aac98bd2632c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cf7721c2b7c5bf4170f9b5652a62627a44675ffae0debba9aac98bd2632c1e->enter($__internal_36cf7721c2b7c5bf4170f9b5652a62627a44675ffae0debba9aac98bd2632c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_36cf7721c2b7c5bf4170f9b5652a62627a44675ffae0debba9aac98bd2632c1e->leave($__internal_36cf7721c2b7c5bf4170f9b5652a62627a44675ffae0debba9aac98bd2632c1e_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_93fe7dfff07578f9df57db2da361e7f16f4880eac476671d0e4cef645761a27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fe7dfff07578f9df57db2da361e7f16f4880eac476671d0e4cef645761a27c->enter($__internal_93fe7dfff07578f9df57db2da361e7f16f4880eac476671d0e4cef645761a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_93fe7dfff07578f9df57db2da361e7f16f4880eac476671d0e4cef645761a27c->leave($__internal_93fe7dfff07578f9df57db2da361e7f16f4880eac476671d0e4cef645761a27c_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_95c63d5627f1db76313f8903c32d13dda9b20801242f3f8f2baf78bd6851fdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c63d5627f1db76313f8903c32d13dda9b20801242f3f8f2baf78bd6851fdd7->enter($__internal_95c63d5627f1db76313f8903c32d13dda9b20801242f3f8f2baf78bd6851fdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_95c63d5627f1db76313f8903c32d13dda9b20801242f3f8f2baf78bd6851fdd7->leave($__internal_95c63d5627f1db76313f8903c32d13dda9b20801242f3f8f2baf78bd6851fdd7_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Forms {% endblock %}
{% block page_subtitle %} demonstration {% endblock %}", "@AvanzuAdminTheme/Default/form.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Default\\form.html.twig");
    }
}
