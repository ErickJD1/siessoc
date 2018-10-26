<?php

/* :webSite:index.html.twig */
class __TwigTemplate_8f82821613faacd426fa961965da93dfa3851d6871cf215d8269b3566096d37d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":webSite:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3395c8a9bed92faf6ae6f2b8a64d27a2b9bf5baec9e6e60e5d2b9e7fd8948414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3395c8a9bed92faf6ae6f2b8a64d27a2b9bf5baec9e6e60e5d2b9e7fd8948414->enter($__internal_3395c8a9bed92faf6ae6f2b8a64d27a2b9bf5baec9e6e60e5d2b9e7fd8948414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":webSite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3395c8a9bed92faf6ae6f2b8a64d27a2b9bf5baec9e6e60e5d2b9e7fd8948414->leave($__internal_3395c8a9bed92faf6ae6f2b8a64d27a2b9bf5baec9e6e60e5d2b9e7fd8948414_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aae78b983950c0e4b1248726bfc216d8bb739e56f685921f1326dd7270e25f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae78b983950c0e4b1248726bfc216d8bb739e56f685921f1326dd7270e25f83->enter($__internal_aae78b983950c0e4b1248726bfc216d8bb739e56f685921f1326dd7270e25f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header>
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class=\"carousel-item active\" style=\"background-image: url(";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide01.png"), "html", null, true);
        echo ")\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>El Bar de Paco</h3>
          <p>Un lugar donde tomar buenas tapas</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide02.png"), "html", null, true);
        echo ")\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>El Bar de Paco</h3>
          <p>Con comida tradicional y de autor</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url(";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/slide03.png"), "html", null, true);
        echo ")\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>El Bar de Paco</h3>
          <p>Carta renovada todas los meses</p>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Nuestras mejores tapas</h1>

  <div class=\"row\">
  
  </div>
</div>
";
        
        $__internal_aae78b983950c0e4b1248726bfc216d8bb739e56f685921f1326dd7270e25f83->leave($__internal_aae78b983950c0e4b1248726bfc216d8bb739e56f685921f1326dd7270e25f83_prof);

    }

    public function getTemplateName()
    {
        return ":webSite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/blog/index.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
<header>
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class=\"carousel-item active\" style=\"background-image: url({{ asset('img/slide01.png') }})\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>El Bar de Paco</h3>
          <p>Un lugar donde tomar buenas tapas</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url({{ asset('img/slide02.png') }})\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>El Bar de Paco</h3>
          <p>Con comida tradicional y de autor</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class=\"carousel-item\" style=\"background-image: url({{ asset('img/slide03.png') }})\">
        <div class=\"carousel-caption d-none d-md-block\">
          <h3>El Bar de Paco</h3>
          <p>Carta renovada todas los meses</p>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</header>
<!-- Page Content -->
<div class=\"container\">
  <h1 class=\"my-4\">Nuestras mejores tapas</h1>

  <div class=\"row\">
  
  </div>
</div>
{% endblock %}
", ":webSite:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/webSite/index.html.twig");
    }
}
