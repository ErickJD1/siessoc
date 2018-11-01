<?php

/* :tipocuenta:showtipocuenta.html.twig */
class __TwigTemplate_14c1d200753c54e7f6f2d2cff1e56364117b173b918ef09bdb066ac93635a3e3 extends Twig_Template
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
        $__internal_119f765f2e77d85dfc7cb2883b4578ad51901bd8914cc4de9091da57985a5d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119f765f2e77d85dfc7cb2883b4578ad51901bd8914cc4de9091da57985a5d44->enter($__internal_119f765f2e77d85dfc7cb2883b4578ad51901bd8914cc4de9091da57985a5d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:showtipocuenta.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
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

  CUENTA

<p class=\"list-group-item\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "</p>
<p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "nombrecuenta", array()), "html", null, true);
        echo "</p>
<p class=\"list-group-item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "descripcion", array()), "html", null, true);
        echo "</p>
<p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "estado", array()), "html", null, true);
        echo "</p>
</div>

<div class=\"modal-footer\">
<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
</div>
</div>
</div>
</div>
</div>
";
        
        $__internal_119f765f2e77d85dfc7cb2883b4578ad51901bd8914cc4de9091da57985a5d44->leave($__internal_119f765f2e77d85dfc7cb2883b4578ad51901bd8914cc4de9091da57985a5d44_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:showtipocuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  49 => 18,  45 => 17,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"miventana{{ tipocuenta.idtipocuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

  CUENTA

<p class=\"list-group-item\">{{  tipocuenta.idtipocuenta }}</p>
<p class=\"list-group-item\">{{  tipocuenta.nombrecuenta }}</p>
<p class=\"list-group-item\">{{  tipocuenta.descripcion }}</p>
<p class=\"list-group-item\">{{  tipocuenta.estado }}</p>
</div>

<div class=\"modal-footer\">
<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cerrar</button>
</div>
</div>
</div>
</div>
</div>
", ":tipocuenta:showtipocuenta.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipocuenta/showtipocuenta.html.twig");
    }
}
