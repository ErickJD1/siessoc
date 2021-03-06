<?php

/* :webSite:bares.html.twig */
class __TwigTemplate_9286d57cf5aa1005257047fba95ae9f39f2fd0f68d81473baf7c80fa4df7c93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":webSite:bares.html.twig", 2);
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
        $__internal_1f284eeb4211cc0e96f80e6395c3d43d4b847ffb617807d2408ce2c98a55426d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f284eeb4211cc0e96f80e6395c3d43d4b847ffb617807d2408ce2c98a55426d->enter($__internal_1f284eeb4211cc0e96f80e6395c3d43d4b847ffb617807d2408ce2c98a55426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":webSite:bares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f284eeb4211cc0e96f80e6395c3d43d4b847ffb617807d2408ce2c98a55426d->leave($__internal_1f284eeb4211cc0e96f80e6395c3d43d4b847ffb617807d2408ce2c98a55426d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7156c99916311247dca8378f8c73100f32648157bcff4f5cf8092a41395f18c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7156c99916311247dca8378f8c73100f32648157bcff4f5cf8092a41395f18c1->enter($__internal_7156c99916311247dca8378f8c73100f32648157bcff4f5cf8092a41395f18c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Page Content -->
<div class=\"container\">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class=\"mt-4 mb-3\">Bar de Paco
    <small>Bares</small>
  </h1>

  <!-- Content Row VLC-->
  ";
        // line 12
        if ((((isset($context["sitio"]) ? $context["sitio"] : $this->getContext($context, "sitio")) == "vlc") || ((isset($context["sitio"]) ? $context["sitio"] : $this->getContext($context, "sitio")) == "todos"))) {
            // line 13
            echo "  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.811389240471!2d-0.3811612849864139!3d39.473589479485824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4ea7d4e61b%3A0x1243035689245d8d!2sMercado+Central+de+Valencia!5e0!3m2!1ses!2ses!4v1513632288762\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Plaça de la Ciutat de Bruges, s/n,
        <br>46001 València
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">Tlf</abbr>: 963 82 91 00
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Martes - Viernes: 12:00 AM to 17:00 PM
      </p>
    </div>
  </div>
  ";
        }
        // line 41
        echo "  ";
        if ((((isset($context["sitio"]) ? $context["sitio"] : $this->getContext($context, "sitio")) == "bcn") || ((isset($context["sitio"]) ? $context["sitio"] : $this->getContext($context, "sitio")) == "todos"))) {
            // line 42
            echo "  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47886.67244169914!2d2.1244635251433546!3d41.39760824121412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f7b51e5a01%3A0x860ac654dc73add5!2sMercado+de+La+Boqueria!5e0!3m2!1ses!2ses!4v1513632655394\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        La Rambla, 91
        <br>08001 Barcelona
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">Tlf</abbr>: 933 18 25 84
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Martes - Viernes: 12:00 AM to 17:00 PM
      </p>
    </div>
  </div>
  ";
        }
        // line 70
        echo "  <!-- /.row -->
  ";
        // line 71
        if ((((isset($context["sitio"]) ? $context["sitio"] : $this->getContext($context, "sitio")) == "mdr") || ((isset($context["sitio"]) ? $context["sitio"] : $this->getContext($context, "sitio")) == "todos"))) {
            // line 72
            echo "  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194348.50924616543!2d-3.819667963761443!3d40.43774195781924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287921196e2d%3A0x162fe6d34dd190e8!2sMercado+de+San+Miguel!5e0!3m2!1ses!2ses!4v1513633629433\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Plaza de San Miguel, s/n
        <br>28005 Madrid
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">Tlf</abbr>: 915 42 49 36
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Martes - Viernes: 12:00 AM to 17:00 PM
      </p>
    </div>
  </div>
  ";
        }
        // line 100
        echo "  <!-- /.row -->
</div>
";
        
        $__internal_7156c99916311247dca8378f8c73100f32648157bcff4f5cf8092a41395f18c1->leave($__internal_7156c99916311247dca8378f8c73100f32648157bcff4f5cf8092a41395f18c1_prof);

    }

    public function getTemplateName()
    {
        return ":webSite:bares.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 100,  120 => 72,  118 => 71,  115 => 70,  85 => 42,  82 => 41,  52 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 2,);
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
<!-- Page Content -->
<div class=\"container\">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class=\"mt-4 mb-3\">Bar de Paco
    <small>Bares</small>
  </h1>

  <!-- Content Row VLC-->
  {% if sitio=='vlc' or sitio=='todos'%}
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.811389240471!2d-0.3811612849864139!3d39.473589479485824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4ea7d4e61b%3A0x1243035689245d8d!2sMercado+Central+de+Valencia!5e0!3m2!1ses!2ses!4v1513632288762\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Plaça de la Ciutat de Bruges, s/n,
        <br>46001 València
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">Tlf</abbr>: 963 82 91 00
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Martes - Viernes: 12:00 AM to 17:00 PM
      </p>
    </div>
  </div>
  {% endif %}
  {% if sitio=='bcn' or sitio=='todos'%}
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47886.67244169914!2d2.1244635251433546!3d41.39760824121412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f7b51e5a01%3A0x860ac654dc73add5!2sMercado+de+La+Boqueria!5e0!3m2!1ses!2ses!4v1513632655394\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        La Rambla, 91
        <br>08001 Barcelona
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">Tlf</abbr>: 933 18 25 84
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Martes - Viernes: 12:00 AM to 17:00 PM
      </p>
    </div>
  </div>
  {% endif %}
  <!-- /.row -->
  {% if sitio=='mdr' or sitio=='todos'%}
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194348.50924616543!2d-3.819667963761443!3d40.43774195781924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287921196e2d%3A0x162fe6d34dd190e8!2sMercado+de+San+Miguel!5e0!3m2!1ses!2ses!4v1513633629433\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Plaza de San Miguel, s/n
        <br>28005 Madrid
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">Tlf</abbr>: 915 42 49 36
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Martes - Viernes: 12:00 AM to 17:00 PM
      </p>
    </div>
  </div>
  {% endif %}
  <!-- /.row -->
</div>
{% endblock %}
", ":webSite:bares.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/webSite/bares.html.twig");
    }
}
