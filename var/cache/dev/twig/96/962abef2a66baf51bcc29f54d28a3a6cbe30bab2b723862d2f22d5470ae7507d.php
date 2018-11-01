<?php

/* base.html.twig */
class __TwigTemplate_090d79b66c18c9a7f2514d38b344e37567f660fd00b19baa96236cc3deb69dbe extends Twig_Template
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
        $__internal_b6669da9c28ef3521893ac2dd6f29d1b168e68e0d8bef64283a393393bd604e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6669da9c28ef3521893ac2dd6f29d1b168e68e0d8bef64283a393393bd604e4->enter($__internal_b6669da9c28ef3521893ac2dd6f29d1b168e68e0d8bef64283a393393bd604e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/modern-business.css"), "html", null, true);
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
          <a class=\"navbar-brand\" href=\"#\">Bar de Paco</a>
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Nosotros</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Bares
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                  <a class=\"dropdown-item\" href=\"#\">Valencia</a>
                  <a class=\"dropdown-item\" href=\"#\">Barcelona</a>
                  <a class=\"dropdown-item\" href=\"#\">Madrid</a>
                </div>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Tapas</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Reservas</a>
              </li>
              ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"#\">Nueva Tapa</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"#\">Gestion reservas</a>
              </li>
              ";
        }
        // line 55
        echo "              ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 56
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"#\">Logout</a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
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
        
        $__internal_b6669da9c28ef3521893ac2dd6f29d1b168e68e0d8bef64283a393393bd604e4->leave($__internal_b6669da9c28ef3521893ac2dd6f29d1b168e68e0d8bef64283a393393bd604e4_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c7e8136b6e07e1964c4bbf88225553ba07b578b905c9b3a7b087d43a505dd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7e8136b6e07e1964c4bbf88225553ba07b578b905c9b3a7b087d43a505dd27->enter($__internal_8c7e8136b6e07e1964c4bbf88225553ba07b578b905c9b3a7b087d43a505dd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido a mi Bar";
        
        $__internal_8c7e8136b6e07e1964c4bbf88225553ba07b578b905c9b3a7b087d43a505dd27->leave($__internal_8c7e8136b6e07e1964c4bbf88225553ba07b578b905c9b3a7b087d43a505dd27_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0791461325ce6724daccdb6b10984ee0db08ce45c3f9501823e568bb91af39f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0791461325ce6724daccdb6b10984ee0db08ce45c3f9501823e568bb91af39f2->enter($__internal_0791461325ce6724daccdb6b10984ee0db08ce45c3f9501823e568bb91af39f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0791461325ce6724daccdb6b10984ee0db08ce45c3f9501823e568bb91af39f2->leave($__internal_0791461325ce6724daccdb6b10984ee0db08ce45c3f9501823e568bb91af39f2_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_55313c7279f423f221875a1dc5c648830f15d45de21a3c7a559e161063f838c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55313c7279f423f221875a1dc5c648830f15d45de21a3c7a559e161063f838c4->enter($__internal_55313c7279f423f221875a1dc5c648830f15d45de21a3c7a559e161063f838c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55313c7279f423f221875a1dc5c648830f15d45de21a3c7a559e161063f838c4->leave($__internal_55313c7279f423f221875a1dc5c648830f15d45de21a3c7a559e161063f838c4_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8ee1d8f26f308265ade534e07b7d435e795b809df1a959cdd85903bf196d65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ee1d8f26f308265ade534e07b7d435e795b809df1a959cdd85903bf196d65f->enter($__internal_d8ee1d8f26f308265ade534e07b7d435e795b809df1a959cdd85903bf196d65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8ee1d8f26f308265ade534e07b7d435e795b809df1a959cdd85903bf196d65f->leave($__internal_d8ee1d8f26f308265ade534e07b7d435e795b809df1a959cdd85903bf196d65f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 78,  171 => 65,  160 => 15,  148 => 8,  139 => 79,  137 => 78,  131 => 75,  127 => 74,  117 => 66,  115 => 65,  108 => 60,  102 => 56,  99 => 55,  90 => 48,  88 => 47,  53 => 16,  51 => 15,  45 => 12,  40 => 10,  35 => 8,  26 => 1,);
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
        <link href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"{{ asset('bootstrap/css/modern-business.css') }}\" rel=\"stylesheet\">


        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
      <!-- Navigation -->
      <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"#\">Bar de Paco</a>
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Nosotros</a>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  Bares
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                  <a class=\"dropdown-item\" href=\"#\">Valencia</a>
                  <a class=\"dropdown-item\" href=\"#\">Barcelona</a>
                  <a class=\"dropdown-item\" href=\"#\">Madrid</a>
                </div>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Tapas</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Reservas</a>
              </li>
              {% if is_granted('ROLE_ADMIN') %}
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"#\">Nueva Tapa</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"#\">Gestion reservas</a>
              </li>
              {% endif %}
              {% if app.user %}
              <li class=\"nav-item\">
                <a class=\"nav-link text-warning\" href=\"#\">Logout</a>
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
        <script src=\"{{ asset('bootstrap/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- Custom Fonts -->
        <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\base.html.twig");
    }
}
