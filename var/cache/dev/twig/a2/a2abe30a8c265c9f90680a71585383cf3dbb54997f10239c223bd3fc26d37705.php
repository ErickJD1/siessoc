<?php

/* tipocuenta/edittipocuenta.html.twig */
class __TwigTemplate_d8f12519b2eb4dee971cfe5329d9788ae7ad3a7a72a00de598562e32f0daef5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/edittipocuenta.html.twig", 1);
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
        $__internal_5eb393207bdf01387d93589ddd734a9e5f0346f30863298f72d4b91d72680f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb393207bdf01387d93589ddd734a9e5f0346f30863298f72d4b91d72680f02->enter($__internal_5eb393207bdf01387d93589ddd734a9e5f0346f30863298f72d4b91d72680f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/edittipocuenta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb393207bdf01387d93589ddd734a9e5f0346f30863298f72d4b91d72680f02->leave($__internal_5eb393207bdf01387d93589ddd734a9e5f0346f30863298f72d4b91d72680f02_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_64b1fe7450a9f0e9ae166d37c4c45bd63a596b61bb2eab7c86a357cdcc91e56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b1fe7450a9f0e9ae166d37c4c45bd63a596b61bb2eab7c86a357cdcc91e56c->enter($__internal_64b1fe7450a9f0e9ae166d37c4c45bd63a596b61bb2eab7c86a357cdcc91e56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_64b1fe7450a9f0e9ae166d37c4c45bd63a596b61bb2eab7c86a357cdcc91e56c->leave($__internal_64b1fe7450a9f0e9ae166d37c4c45bd63a596b61bb2eab7c86a357cdcc91e56c_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b28743e6599bd190925e6c6f9296eb08ba1c4de203b08acb0793c28efef5d56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28743e6599bd190925e6c6f9296eb08ba1c4de203b08acb0793c28efef5d56f->enter($__internal_b28743e6599bd190925e6c6f9296eb08ba1c4de203b08acb0793c28efef5d56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuenta ";
        
        $__internal_b28743e6599bd190925e6c6f9296eb08ba1c4de203b08acb0793c28efef5d56f->leave($__internal_b28743e6599bd190925e6c6f9296eb08ba1c4de203b08acb0793c28efef5d56f_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8c29ca919080537d51d2f7f9bce7ab68d9b03f0a56b482374ebf68e2a7f7988f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c29ca919080537d51d2f7f9bce7ab68d9b03f0a56b482374ebf68e2a7f7988f->enter($__internal_8c29ca919080537d51d2f7f9bce7ab68d9b03f0a56b482374ebf68e2a7f7988f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8c29ca919080537d51d2f7f9bce7ab68d9b03f0a56b482374ebf68e2a7f7988f->leave($__internal_8c29ca919080537d51d2f7f9bce7ab68d9b03f0a56b482374ebf68e2a7f7988f_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/edittipocuenta.html.twig";
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
", "tipocuenta/edittipocuenta.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipocuenta\\edittipocuenta.html.twig");
    }
}
