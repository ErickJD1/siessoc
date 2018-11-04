<?php

/* tipocuenta/newtipocuenta.html.twig */
class __TwigTemplate_6a75809e1815d87de76f2fa030179de8008392fa8b89e7f875aaf449592f450c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/newtipocuenta.html.twig", 1);
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
        $__internal_428b693aca19de50730eac1fce6d3aacaa9e6b159edf7233c4fe34022a984694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428b693aca19de50730eac1fce6d3aacaa9e6b159edf7233c4fe34022a984694->enter($__internal_428b693aca19de50730eac1fce6d3aacaa9e6b159edf7233c4fe34022a984694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/newtipocuenta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428b693aca19de50730eac1fce6d3aacaa9e6b159edf7233c4fe34022a984694->leave($__internal_428b693aca19de50730eac1fce6d3aacaa9e6b159edf7233c4fe34022a984694_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c9875bf5b99c869a887c0df47a4d42812eb2bf0654c88292f2977eef70e72fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9875bf5b99c869a887c0df47a4d42812eb2bf0654c88292f2977eef70e72fa2->enter($__internal_c9875bf5b99c869a887c0df47a4d42812eb2bf0654c88292f2977eef70e72fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <h1>Ingresar Tipo De Cuenta</h1>

         ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\" class=\"btn btn-info btn-sm\">Atras</a>
        </li>
    </ul>
";
        
        $__internal_c9875bf5b99c869a887c0df47a4d42812eb2bf0654c88292f2977eef70e72fa2->leave($__internal_c9875bf5b99c869a887c0df47a4d42812eb2bf0654c88292f2977eef70e72fa2_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/newtipocuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Ingresar Tipo De Cuenta</h1>

         {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
        {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tipocuenta_index') }}\" class=\"btn btn-info btn-sm\">Atras</a>
        </li>
    </ul>
{% endblock %}
", "tipocuenta/newtipocuenta.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipocuenta\\newtipocuenta.html.twig");
    }
}
