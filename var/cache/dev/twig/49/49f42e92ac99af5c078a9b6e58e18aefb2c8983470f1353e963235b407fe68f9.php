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
        $__internal_f2d6e4c8792ddae70ec5696f78411a2933c1584d4eaded7d67e194e74808bbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d6e4c8792ddae70ec5696f78411a2933c1584d4eaded7d67e194e74808bbd9->enter($__internal_f2d6e4c8792ddae70ec5696f78411a2933c1584d4eaded7d67e194e74808bbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d6e4c8792ddae70ec5696f78411a2933c1584d4eaded7d67e194e74808bbd9->leave($__internal_f2d6e4c8792ddae70ec5696f78411a2933c1584d4eaded7d67e194e74808bbd9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_02a42b71edf0516a0d9c8d20868464d98d8ae4fc744ef09faf3c0802ea4229d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a42b71edf0516a0d9c8d20868464d98d8ae4fc744ef09faf3c0802ea4229d7->enter($__internal_02a42b71edf0516a0d9c8d20868464d98d8ae4fc744ef09faf3c0802ea4229d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_02a42b71edf0516a0d9c8d20868464d98d8ae4fc744ef09faf3c0802ea4229d7->leave($__internal_02a42b71edf0516a0d9c8d20868464d98d8ae4fc744ef09faf3c0802ea4229d7_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_809688adb9569762d29491c35c92b92cc903bbb64a783e7c74fa346a57c7ff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809688adb9569762d29491c35c92b92cc903bbb64a783e7c74fa346a57c7ff9c->enter($__internal_809688adb9569762d29491c35c92b92cc903bbb64a783e7c74fa346a57c7ff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_809688adb9569762d29491c35c92b92cc903bbb64a783e7c74fa346a57c7ff9c->leave($__internal_809688adb9569762d29491c35c92b92cc903bbb64a783e7c74fa346a57c7ff9c_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_efaaabaad3d2c2ec2f323930663f5d2d6154687ca7ca5902495d92f24d6432bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaaabaad3d2c2ec2f323930663f5d2d6154687ca7ca5902495d92f24d6432bb->enter($__internal_efaaabaad3d2c2ec2f323930663f5d2d6154687ca7ca5902495d92f24d6432bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_efaaabaad3d2c2ec2f323930663f5d2d6154687ca7ca5902495d92f24d6432bb->leave($__internal_efaaabaad3d2c2ec2f323930663f5d2d6154687ca7ca5902495d92f24d6432bb_prof);

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
