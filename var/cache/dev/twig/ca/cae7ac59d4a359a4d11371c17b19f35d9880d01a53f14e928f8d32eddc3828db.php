<?php

/* :tipocuenta:edittipocuenta.html.twig */
class __TwigTemplate_77e17a86aeb1dc0590f27d77756976c4a726ea32b63629fbed272145e79c696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipocuenta:edittipocuenta.html.twig", 1);
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
        $__internal_f77c0d3ccdd3e4ef290e181f3ca88c2274163982eeb0c1c008650ba84b5952f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77c0d3ccdd3e4ef290e181f3ca88c2274163982eeb0c1c008650ba84b5952f2->enter($__internal_f77c0d3ccdd3e4ef290e181f3ca88c2274163982eeb0c1c008650ba84b5952f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:edittipocuenta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77c0d3ccdd3e4ef290e181f3ca88c2274163982eeb0c1c008650ba84b5952f2->leave($__internal_f77c0d3ccdd3e4ef290e181f3ca88c2274163982eeb0c1c008650ba84b5952f2_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e1d0a8cb580b0835e421aa8b1eca4d908792d71bbf92bef974680d7628b58d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d0a8cb580b0835e421aa8b1eca4d908792d71bbf92bef974680d7628b58d42->enter($__internal_e1d0a8cb580b0835e421aa8b1eca4d908792d71bbf92bef974680d7628b58d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_e1d0a8cb580b0835e421aa8b1eca4d908792d71bbf92bef974680d7628b58d42->leave($__internal_e1d0a8cb580b0835e421aa8b1eca4d908792d71bbf92bef974680d7628b58d42_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_78944efa983e3b89cd2bb49c573f983688bd29b487621cf6e865e53843a4807d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78944efa983e3b89cd2bb49c573f983688bd29b487621cf6e865e53843a4807d->enter($__internal_78944efa983e3b89cd2bb49c573f983688bd29b487621cf6e865e53843a4807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuenta ";
        
        $__internal_78944efa983e3b89cd2bb49c573f983688bd29b487621cf6e865e53843a4807d->leave($__internal_78944efa983e3b89cd2bb49c573f983688bd29b487621cf6e865e53843a4807d_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_38c3c0411f2daf58c5d970255024395ec666224646dca527bdfdbc394d4b7062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c3c0411f2daf58c5d970255024395ec666224646dca527bdfdbc394d4b7062->enter($__internal_38c3c0411f2daf58c5d970255024395ec666224646dca527bdfdbc394d4b7062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "
<div class=\"box box-primary\">
<div style=\"width:80%; margin-left:8%; margin-top: 3% \">


    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrecuenta", array()), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estado", array()), 'row');
        echo "

<input type=\"submit\" value=\"Guardar\" class=\"btn btn-info btn-sm\" /> <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\" class=\"btn btn-success btn-sm\">Atras</a>

    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


</div>
</div>



";
        
        $__internal_38c3c0411f2daf58c5d970255024395ec666224646dca527bdfdbc394d4b7062->leave($__internal_38c3c0411f2daf58c5d970255024395ec666224646dca527bdfdbc394d4b7062_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:edittipocuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  96 => 19,  91 => 17,  87 => 16,  83 => 15,  78 => 13,  73 => 11,  66 => 6,  60 => 5,  48 => 3,  36 => 2,  11 => 1,);
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
{% block page_title %} Tipo Cuenta | {% endblock %}
{% block page_subtitle %}Modificar Cuenta {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:80%; margin-left:8%; margin-top: 3% \">


    {{ form_start(edit_form) }}

    {{ form_errors(edit_form) }}

    {{ form_row(edit_form.nombrecuenta) }}
    {{ form_row(edit_form.descripcion) }}
    {{ form_row(edit_form.estado) }}

<input type=\"submit\" value=\"Guardar\" class=\"btn btn-info btn-sm\" /> <a href=\"{{ path('tipocuenta_index') }}\" class=\"btn btn-success btn-sm\">Atras</a>

    {{ form_end(edit_form) }}


</div>
</div>



{% endblock %}
", ":tipocuenta:edittipocuenta.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipocuenta/edittipocuenta.html.twig");
    }
}
