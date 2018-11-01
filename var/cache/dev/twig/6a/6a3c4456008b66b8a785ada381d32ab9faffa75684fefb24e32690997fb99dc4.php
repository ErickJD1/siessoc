<?php

/* actividad/show.html.twig */
class __TwigTemplate_90d3a845284ba18d13eade086593a0def85cbe71ec9e2ae8a2304ef270c004ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "actividad/show.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe9769ef299c6ab4a520428193a538014d472cb1b07e588b15ab25bf1d8339a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe9769ef299c6ab4a520428193a538014d472cb1b07e588b15ab25bf1d8339a->enter($__internal_efe9769ef299c6ab4a520428193a538014d472cb1b07e588b15ab25bf1d8339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actividad/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe9769ef299c6ab4a520428193a538014d472cb1b07e588b15ab25bf1d8339a->leave($__internal_efe9769ef299c6ab4a520428193a538014d472cb1b07e588b15ab25bf1d8339a_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_db59674f3057ef9f9074d2dabe34b46af0646d1672a3129828f8e1d930c82c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db59674f3057ef9f9074d2dabe34b46af0646d1672a3129828f8e1d930c82c14->enter($__internal_db59674f3057ef9f9074d2dabe34b46af0646d1672a3129828f8e1d930c82c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <h1>Actividad</h1>

    <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
        <tbody>
            <tr>
                <th>Nomactividad</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "nomactividad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaactividad</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fechaactividad", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fechaactividad", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Descripcionactividad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "descripcionactividad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Validacion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "validacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Becario</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "becario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idactividad</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "idactividad", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_edit", array("id" => $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "idactividad", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_db59674f3057ef9f9074d2dabe34b46af0646d1672a3129828f8e1d930c82c14->leave($__internal_db59674f3057ef9f9074d2dabe34b46af0646d1672a3129828f8e1d930c82c14_prof);

    }

    public function getTemplateName()
    {
        return "actividad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 47,  108 => 44,  102 => 41,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Actividad</h1>

    <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
        <tbody>
            <tr>
                <th>Nomactividad</th>
                <td>{{ actividad.nomactividad }}</td>
            </tr>
            <tr>
                <th>Fechaactividad</th>
                <td>{% if actividad.fechaactividad %}{{ actividad.fechaactividad|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Descripcionactividad</th>
                <td>{{ actividad.descripcionactividad }}</td>
            </tr>
            <tr>
                <th>Validacion</th>
                <td>{{ actividad.validacion }}</td>
            </tr>
            <tr>
                <th>Becario</th>
                <td>{{ actividad.becario }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ actividad.estado }}</td>
            </tr>
            <tr>
                <th>Idactividad</th>
                <td>{{ actividad.idactividad }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('actividad_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('actividad_edit', { 'id': actividad.idactividad }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "actividad/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\actividad\\show.html.twig");
    }
}
