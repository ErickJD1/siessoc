<?php

/* :webSite:base.html.twig */
class __TwigTemplate_d139bd8e9c3539cc03d4a0be4c23b54a5747609420e550eaa7f9952a13a0736f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2161268f14507affb4ca1d36a6997ac506d11c38400446e8a6bb109a09517cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2161268f14507affb4ca1d36a6997ac506d11c38400446e8a6bb109a09517cb->enter($__internal_e2161268f14507affb4ca1d36a6997ac506d11c38400446e8a6bb109a09517cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":webSite:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Pacos Tapas Bar\">
        <meta name=\"author\" content=\"Paco Gomez\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <!-- Navigation -->
      <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Bar de Paco</a>
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_nosotros");
        echo "\">Nosotros</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_contactar");
        echo "\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Bares
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                  <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_contactar", array("sitio" => "vlc"));
        echo "\">Valencia</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_contactar", array("sitio" => "bcn"));
        echo "\">Barcelona</a>
                  <a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_contactar", array("sitio" => "mdr"));
        echo "\">Madrid</a>
                </div>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_tapas");
        echo "\">Tapas</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_reserva");
        echo "\">Reservas</a>
              </li>
              ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_nueva_tapa");
            echo "\">Nueva Tapa</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_reservas");
            echo "\">Gestion reservas</a>
              </li>
              ";
        }
        // line 55
        echo "              ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 56
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_logout");
            echo "\">Logout</a>
              </li>
              ";
        }
        // line 60
        echo "            </ul>
          </div>
        </div>
      </nav>

        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "        <!-- Footer -->
        <footer class=\"py-5 bg-dark\">
          <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Cooking Software</p>
          </div>
          <!-- /.container -->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Fonts -->
        <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
        ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>
";
        
        $__internal_e2161268f14507affb4ca1d36a6997ac506d11c38400446e8a6bb109a09517cb->leave($__internal_e2161268f14507affb4ca1d36a6997ac506d11c38400446e8a6bb109a09517cb_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0e60f6addebdefa5e7e21072beb96c50187a20ce62d4417de12c14f1734a5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e60f6addebdefa5e7e21072beb96c50187a20ce62d4417de12c14f1734a5a5->enter($__internal_b0e60f6addebdefa5e7e21072beb96c50187a20ce62d4417de12c14f1734a5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido a mi Bar";
        
        $__internal_b0e60f6addebdefa5e7e21072beb96c50187a20ce62d4417de12c14f1734a5a5->leave($__internal_b0e60f6addebdefa5e7e21072beb96c50187a20ce62d4417de12c14f1734a5a5_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e9dd600187005abe86ba145ef23d93cfeecb3373ea1f73127e7234358713342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9dd600187005abe86ba145ef23d93cfeecb3373ea1f73127e7234358713342->enter($__internal_7e9dd600187005abe86ba145ef23d93cfeecb3373ea1f73127e7234358713342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e9dd600187005abe86ba145ef23d93cfeecb3373ea1f73127e7234358713342->leave($__internal_7e9dd600187005abe86ba145ef23d93cfeecb3373ea1f73127e7234358713342_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6970727045f4e07c28919692e57a9fa627c891881545cef7dcff6db9e3118ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6970727045f4e07c28919692e57a9fa627c891881545cef7dcff6db9e3118ec->enter($__internal_d6970727045f4e07c28919692e57a9fa627c891881545cef7dcff6db9e3118ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6970727045f4e07c28919692e57a9fa627c891881545cef7dcff6db9e3118ec->leave($__internal_d6970727045f4e07c28919692e57a9fa627c891881545cef7dcff6db9e3118ec_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0172baf889bde3ff1ec6e8c93cca0d4b20950b12e0e3f0d90c0f672271e77758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0172baf889bde3ff1ec6e8c93cca0d4b20950b12e0e3f0d90c0f672271e77758->enter($__internal_0172baf889bde3ff1ec6e8c93cca0d4b20950b12e0e3f0d90c0f672271e77758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0172baf889bde3ff1ec6e8c93cca0d4b20950b12e0e3f0d90c0f672271e77758->leave($__internal_0172baf889bde3ff1ec6e8c93cca0d4b20950b12e0e3f0d90c0f672271e77758_prof);

    }

    public function getTemplateName()
    {
        return ":webSite:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 78,  204 => 65,  193 => 15,  181 => 8,  172 => 79,  170 => 78,  164 => 75,  160 => 74,  150 => 66,  148 => 65,  141 => 60,  135 => 57,  132 => 56,  129 => 55,  123 => 52,  117 => 49,  114 => 48,  112 => 47,  107 => 45,  101 => 42,  94 => 38,  90 => 37,  86 => 36,  79 => 32,  73 => 29,  63 => 22,  53 => 16,  51 => 15,  45 => 12,  40 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Pacos Tapas Bar\">
        <meta name=\"author\" content=\"Paco Gomez\">
        <title>{% block title %}Bienvenido a mi Bar{% endblock %}</title>
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"{{ asset('css/modern-business.css') }}\" rel=\"stylesheet\">


        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
      <!-- Navigation -->
      <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"{{path(\"home\")}}\">Bar de Paco</a>
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path(\"home_nosotros\")}}\">Nosotros</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"{{path(\"home_contactar\")}}\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Bares
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                  <a class=\"dropdown-item\" href=\"{{path(\"home_contactar\",{'sitio': 'vlc'})}}\">Valencia</a>
                  <a class=\"dropdown-item\" href=\"{{path(\"home_contactar\",{'sitio': 'bcn'})}}\">Barcelona</a>
                  <a class=\"dropdown-item\" href=\"{{path(\"home_contactar\",{'sitio': 'mdr'})}}\">Madrid</a>
                </div>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path(\"home_tapas\")}}\">Tapas</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path(\"gestion_reserva\")}}\">Reservas</a>
              </li>
              {% if is_granted('ROLE_ADMIN') %}
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"{{path(\"gestion_nueva_tapa\")}}\">Nueva Tapa</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"{{path(\"gestion_reservas\")}}\">Gestion reservas</a>
              </li>
              {% endif %}
              {% if app.user %}
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"{{path(\"gestion_logout\")}}\">Logout</a>
              </li>
              {% endif %}
            </ul>
          </div>
        </div>
      </nav>

        {% block body %}{% endblock %}
        <!-- Footer -->
        <footer class=\"py-5 bg-dark\">
          <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Cooking Software</p>
          </div>
          <!-- /.container -->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- Custom Fonts -->
        <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", ":webSite:base.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/webSite/base.html.twig");
    }
}
