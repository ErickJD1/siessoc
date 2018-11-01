<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_7071ffb39aacd10bbaf2b1faa5eb052238c44aa7edfc4e46d741af95b55c7031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:form.html.twig", 1);
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
        $__internal_1beb307b0b2a235442aca589a522b41046eb372861fd687b848e63a75d4e37bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beb307b0b2a235442aca589a522b41046eb372861fd687b848e63a75d4e37bd->enter($__internal_1beb307b0b2a235442aca589a522b41046eb372861fd687b848e63a75d4e37bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1beb307b0b2a235442aca589a522b41046eb372861fd687b848e63a75d4e37bd->leave($__internal_1beb307b0b2a235442aca589a522b41046eb372861fd687b848e63a75d4e37bd_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f67d6ba2392c64ada078e6ce527c6f2b4e9e6cbcf63e5be1a72799f7a169d97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67d6ba2392c64ada078e6ce527c6f2b4e9e6cbcf63e5be1a72799f7a169d97c->enter($__internal_f67d6ba2392c64ada078e6ce527c6f2b4e9e6cbcf63e5be1a72799f7a169d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_f67d6ba2392c64ada078e6ce527c6f2b4e9e6cbcf63e5be1a72799f7a169d97c->leave($__internal_f67d6ba2392c64ada078e6ce527c6f2b4e9e6cbcf63e5be1a72799f7a169d97c_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_43089b2ab354cd32433eb012178d1209f50f041083dce4b17d1f7a2be06ee9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43089b2ab354cd32433eb012178d1209f50f041083dce4b17d1f7a2be06ee9d5->enter($__internal_43089b2ab354cd32433eb012178d1209f50f041083dce4b17d1f7a2be06ee9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_43089b2ab354cd32433eb012178d1209f50f041083dce4b17d1f7a2be06ee9d5->leave($__internal_43089b2ab354cd32433eb012178d1209f50f041083dce4b17d1f7a2be06ee9d5_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2bc9eaa4afdc281ec4f975e20959bdb562a6b4c6655cc0251e9cf2e0af6ce03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc9eaa4afdc281ec4f975e20959bdb562a6b4c6655cc0251e9cf2e0af6ce03c->enter($__internal_2bc9eaa4afdc281ec4f975e20959bdb562a6b4c6655cc0251e9cf2e0af6ce03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_2bc9eaa4afdc281ec4f975e20959bdb562a6b4c6655cc0251e9cf2e0af6ce03c->leave($__internal_2bc9eaa4afdc281ec4f975e20959bdb562a6b4c6655cc0251e9cf2e0af6ce03c_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:form.html.twig";
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
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:form.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/Default/form.html.twig");
    }
}
