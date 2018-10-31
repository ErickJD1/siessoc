<?php

/* tipocuenta/indextipocuenta.html.twig */
class __TwigTemplate_4fb32cbdab7136f18708246322bf963431a795fa85ba82237e13311431ed00a7 extends Twig_Template
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
        $__internal_7a5fdcec28954a4074c17b507c802a84f90d075a435724044665147724206229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5fdcec28954a4074c17b507c802a84f90d075a435724044665147724206229->enter($__internal_7a5fdcec28954a4074c17b507c802a84f90d075a435724044665147724206229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/indextipocuenta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5fdcec28954a4074c17b507c802a84f90d075a435724044665147724206229->leave($__internal_7a5fdcec28954a4074c17b507c802a84f90d075a435724044665147724206229_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e80f1d91969887cbe16a52aaf664e7ccaac1103b23e3275ef9b6dc2910f27ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80f1d91969887cbe16a52aaf664e7ccaac1103b23e3275ef9b6dc2910f27ce3->enter($__internal_e80f1d91969887cbe16a52aaf664e7ccaac1103b23e3275ef9b6dc2910f27ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_e80f1d91969887cbe16a52aaf664e7ccaac1103b23e3275ef9b6dc2910f27ce3->leave($__internal_e80f1d91969887cbe16a52aaf664e7ccaac1103b23e3275ef9b6dc2910f27ce3_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f409a1215a18553d19a30d3b6321ab19e81f166a1b2d6dea45f7bb359d73271b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f409a1215a18553d19a30d3b6321ab19e81f166a1b2d6dea45f7bb359d73271b->enter($__internal_f409a1215a18553d19a30d3b6321ab19e81f166a1b2d6dea45f7bb359d73271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Listado de cuentas ";
        
        $__internal_f409a1215a18553d19a30d3b6321ab19e81f166a1b2d6dea45f7bb359d73271b->leave($__internal_f409a1215a18553d19a30d3b6321ab19e81f166a1b2d6dea45f7bb359d73271b_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8b3520410bbed67b7a4d84ce1962b5f34296faf72556fd2cf9e97bc36044757d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3520410bbed67b7a4d84ce1962b5f34296faf72556fd2cf9e97bc36044757d->enter($__internal_8b3520410bbed67b7a4d84ce1962b5f34296faf72556fd2cf9e97bc36044757d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

    <a href=\"";
        // line 10
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "nombrecuenta", array()), "html", null, true);
            echo "</td>
                <td style=\"width:300px\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "estado", array()), "html", null, true);
            echo "</td>
                <td>

                <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\">Mostrar</button>

                ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "

              <!--  <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Mostarar</a>-->
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\">edit</a>
                <a href=\"";
            // line 39
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
        // line 46
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_8b3520410bbed67b7a4d84ce1962b5f34296faf72556fd2cf9e97bc36044757d->leave($__internal_8b3520410bbed67b7a4d84ce1962b5f34296faf72556fd2cf9e97bc36044757d_prof);

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
        return array (  146 => 46,  133 => 39,  129 => 38,  125 => 37,  120 => 35,  115 => 33,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  94 => 26,  90 => 25,  72 => 10,  66 => 6,  60 => 5,  48 => 3,  36 => 2,  11 => 1,);
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
