<?php

/* actividad/edit.html.twig */
class __TwigTemplate_9b1c764db5dada2da27a0d67233766456626f4694f86513a8180a164af0fa44f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "actividad/edit.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d56363c0e9b638d636ccdbd92578e39027313f069f623896058c3337543b50f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56363c0e9b638d636ccdbd92578e39027313f069f623896058c3337543b50f3->enter($__internal_d56363c0e9b638d636ccdbd92578e39027313f069f623896058c3337543b50f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actividad/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56363c0e9b638d636ccdbd92578e39027313f069f623896058c3337543b50f3->leave($__internal_d56363c0e9b638d636ccdbd92578e39027313f069f623896058c3337543b50f3_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_de11d070fe9d00e592d6a26af681a86ed1cb12205700173e20fe8f41bf083d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de11d070fe9d00e592d6a26af681a86ed1cb12205700173e20fe8f41bf083d7b->enter($__internal_de11d070fe9d00e592d6a26af681a86ed1cb12205700173e20fe8f41bf083d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_de11d070fe9d00e592d6a26af681a86ed1cb12205700173e20fe8f41bf083d7b->leave($__internal_de11d070fe9d00e592d6a26af681a86ed1cb12205700173e20fe8f41bf083d7b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_443a4285dc3f2392a24098b881a34e368978c0a63d749b1c04b391614f3f7d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443a4285dc3f2392a24098b881a34e368978c0a63d749b1c04b391614f3f7d32->enter($__internal_443a4285dc3f2392a24098b881a34e368978c0a63d749b1c04b391614f3f7d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Actividad</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-delete btn-xs\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_index");
        echo "\" class=\"btn btn-info btn-xs\">Atrás</a>
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_443a4285dc3f2392a24098b881a34e368978c0a63d749b1c04b391614f3f7d32->leave($__internal_443a4285dc3f2392a24098b881a34e368978c0a63d749b1c04b391614f3f7d32_prof);

    }

    public function getTemplateName()
    {
        return "actividad/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  76 => 13,  71 => 11,  66 => 9,  61 => 7,  57 => 6,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block page_content %}
{% block body %}
    <h1>Editar Actividad</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-delete btn-xs\">
                <a href=\"{{ path('actividad_index') }}\" class=\"btn btn-info btn-xs\">Atrás</a>
            {{ form_end(delete_form) }}
{% endblock %}
{% endblock %}
", "actividad/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\actividad\\edit.html.twig");
    }
}
