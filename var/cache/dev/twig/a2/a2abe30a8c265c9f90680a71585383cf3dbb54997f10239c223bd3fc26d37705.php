<?php

/* tipocuenta/edittipocuenta.html.twig */
class __TwigTemplate_d8f12519b2eb4dee971cfe5329d9788ae7ad3a7a72a00de598562e32f0daef5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b39343cfa5c70a96d7f56d49ae738805ee5f75a6ac6111dfae19ce6f0b22664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b39343cfa5c70a96d7f56d49ae738805ee5f75a6ac6111dfae19ce6f0b22664->enter($__internal_8b39343cfa5c70a96d7f56d49ae738805ee5f75a6ac6111dfae19ce6f0b22664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/edittipocuenta.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"mieditar";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()))), "method" => "POST"));
        echo "

    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrecuenta", array()), 'row');
        echo "<br>
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'row');
        echo "<br>
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estado", array()), 'row');
        echo "<br>

    <input type=\"submit\" value=\"Guardar\" class=\"btn btn-info btn-sm\" />

    ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>

    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_8b39343cfa5c70a96d7f56d49ae738805ee5f75a6ac6111dfae19ce6f0b22664->leave($__internal_8b39343cfa5c70a96d7f56d49ae738805ee5f75a6ac6111dfae19ce6f0b22664_prof);

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
        return array (  64 => 24,  57 => 20,  53 => 19,  49 => 18,  44 => 16,  39 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"mieditar{{ tipocuenta.idtipocuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

    {{ form_start(edit_form, {'action': path('tipocuenta_edit', { 'id': tipocuenta.idtipocuenta }), 'method': 'POST'}) }}

    {{ form_errors(edit_form) }}

    {{ form_row(edit_form.nombrecuenta) }}<br>
    {{ form_row(edit_form.descripcion) }}<br>
    {{ form_row(edit_form.estado) }}<br>

    <input type=\"submit\" value=\"Guardar\" class=\"btn btn-info btn-sm\" />

    {{ form_end(edit_form) }}
    </div>

    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    </div>
    </div>
    </div>
    </div>
", "tipocuenta/edittipocuenta.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipocuenta\\edittipocuenta.html.twig");
    }
}
