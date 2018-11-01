<?php

/* tipocuenta/indextipocuenta.html.twig */
class __TwigTemplate_bea20a22e74825577f3c16e94d78952e093285f4b9f0df1fd01ab749af4c450e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/indextipocuenta.html.twig", 1);
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
        $__internal_eafd6d6e9c69b669bba561791469f96d92316d91008eee3c495e4769439e0a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafd6d6e9c69b669bba561791469f96d92316d91008eee3c495e4769439e0a49->enter($__internal_eafd6d6e9c69b669bba561791469f96d92316d91008eee3c495e4769439e0a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/indextipocuenta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eafd6d6e9c69b669bba561791469f96d92316d91008eee3c495e4769439e0a49->leave($__internal_eafd6d6e9c69b669bba561791469f96d92316d91008eee3c495e4769439e0a49_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_193944affa563e698e3eceebb11f30c9a32fa554409c5675ff89816aed508fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193944affa563e698e3eceebb11f30c9a32fa554409c5675ff89816aed508fea->enter($__internal_193944affa563e698e3eceebb11f30c9a32fa554409c5675ff89816aed508fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_193944affa563e698e3eceebb11f30c9a32fa554409c5675ff89816aed508fea->leave($__internal_193944affa563e698e3eceebb11f30c9a32fa554409c5675ff89816aed508fea_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_cc147cf342550d321ba781dd8462d8a2bfc79198efd62da13decba210fff216e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc147cf342550d321ba781dd8462d8a2bfc79198efd62da13decba210fff216e->enter($__internal_cc147cf342550d321ba781dd8462d8a2bfc79198efd62da13decba210fff216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Listado de cuentas ";
        
        $__internal_cc147cf342550d321ba781dd8462d8a2bfc79198efd62da13decba210fff216e->leave($__internal_cc147cf342550d321ba781dd8462d8a2bfc79198efd62da13decba210fff216e_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0c1d58648a54fc07a07fc19646bac886341ad82e660432a39140182f4d5e0e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1d58648a54fc07a07fc19646bac886341ad82e660432a39140182f4d5e0e76->enter($__internal_0c1d58648a54fc07a07fc19646bac886341ad82e660432a39140182f4d5e0e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo twig_include($this->env, $context, "layout/mensajes.html.twig");
        echo "

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_new");
        echo "\" class=\"btn btn-primary btn-sm\">Creat Tipo De Cuenta</a>
    <hr>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>Id</th>
                <th>Nombre cuenta</th>
                <th style=\"width:300px\">Descripcion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "nombrecuenta", array()), "html", null, true);
            echo "</td>
                <td style=\"width:300px\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "estado", array()), "html", null, true);
            echo "</td>
                <td>

                <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\">Mostrar</button>

                ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "

              <!--  <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Mostarar</a>-->
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\">edit</a>
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_delete", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">delete</a>

                </td>
            </tr>
    </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_0c1d58648a54fc07a07fc19646bac886341ad82e660432a39140182f4d5e0e76->leave($__internal_0c1d58648a54fc07a07fc19646bac886341ad82e660432a39140182f4d5e0e76_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/indextipocuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  135 => 41,  131 => 40,  127 => 39,  122 => 37,  117 => 35,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  96 => 28,  92 => 27,  74 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Listado de cuentas {% endblock %}

{% block page_content %}
{{ include ('layout/mensajes.html.twig')}}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

    <a href=\"{{ path('tipocuenta_new') }}\" class=\"btn btn-primary btn-sm\">Creat Tipo De Cuenta</a>
    <hr>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>Id</th>
                <th>Nombre cuenta</th>
                <th style=\"width:300px\">Descripcion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for tipocuentum in tipocuenta %}
            <tr>
                <td>{{ tipocuentum.idtipocuenta }}</td>
                <td>{{ tipocuentum.nombrecuenta }}</td>
                <td style=\"width:300px\">{{ tipocuentum.descripcion }}</td>
                <td>{{ tipocuentum.estado }}</td>
                <td>

                <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#miventana{{ tipocuentum.idtipocuenta }}\">Mostrar</button>

                {{ render(controller('AppBundle:Tipocuenta:show', { 'id' : tipocuentum.idtipocuenta } )) }}

              <!--  <a href=\"{{ path('tipocuenta_show', { 'id': tipocuentum.idtipocuenta }) }}\" class=\"btn btn-info btn-sm\">Mostarar</a>-->
                <a href=\"{{ path('tipocuenta_edit', { 'id': tipocuentum.idtipocuenta }) }}\" class=\"btn btn-success btn-sm\">edit</a>
                <a href=\"{{ path('tipocuenta_delete', { 'id': tipocuentum.idtipocuenta }) }}\" class=\"btn btn-danger btn-sm\">delete</a>

                </td>
            </tr>
    </div>

        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", "tipocuenta/indextipocuenta.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipocuenta\\indextipocuenta.html.twig");
    }
}
