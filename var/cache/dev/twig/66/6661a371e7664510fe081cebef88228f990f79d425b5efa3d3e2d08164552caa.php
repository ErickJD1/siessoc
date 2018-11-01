<?php

/* base.html.twig */
class __TwigTemplate_182492746b41a94eb15987d9088bb70688216b20ff8e8fd68001fef05a8ae60a extends Twig_Template
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
        $__internal_d3bb74fa48a41c6c43fbd9b9c608d53d133211ad1120d8651e050ef5c2db12ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bb74fa48a41c6c43fbd9b9c608d53d133211ad1120d8651e050ef5c2db12ea->enter($__internal_d3bb74fa48a41c6c43fbd9b9c608d53d133211ad1120d8651e050ef5c2db12ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
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
        
        $__internal_d3bb74fa48a41c6c43fbd9b9c608d53d133211ad1120d8651e050ef5c2db12ea->leave($__internal_d3bb74fa48a41c6c43fbd9b9c608d53d133211ad1120d8651e050ef5c2db12ea_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b44fd147c7aa48c56eaace245d12d197fa6da2d96a767af2479cfc66eb60464b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44fd147c7aa48c56eaace245d12d197fa6da2d96a767af2479cfc66eb60464b->enter($__internal_b44fd147c7aa48c56eaace245d12d197fa6da2d96a767af2479cfc66eb60464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido a mi Bar";
        
        $__internal_b44fd147c7aa48c56eaace245d12d197fa6da2d96a767af2479cfc66eb60464b->leave($__internal_b44fd147c7aa48c56eaace245d12d197fa6da2d96a767af2479cfc66eb60464b_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af3fe5a9e1b6b291d66a1ec0db23b8e0179a2e4ff58ecfbfa87beda7e67b60e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3fe5a9e1b6b291d66a1ec0db23b8e0179a2e4ff58ecfbfa87beda7e67b60e3->enter($__internal_af3fe5a9e1b6b291d66a1ec0db23b8e0179a2e4ff58ecfbfa87beda7e67b60e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af3fe5a9e1b6b291d66a1ec0db23b8e0179a2e4ff58ecfbfa87beda7e67b60e3->leave($__internal_af3fe5a9e1b6b291d66a1ec0db23b8e0179a2e4ff58ecfbfa87beda7e67b60e3_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f84e7ea6f7bfdf43f3f8caed039c72f60004fa93a17b11ff57423711d81e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f84e7ea6f7bfdf43f3f8caed039c72f60004fa93a17b11ff57423711d81e83->enter($__internal_a0f84e7ea6f7bfdf43f3f8caed039c72f60004fa93a17b11ff57423711d81e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0f84e7ea6f7bfdf43f3f8caed039c72f60004fa93a17b11ff57423711d81e83->leave($__internal_a0f84e7ea6f7bfdf43f3f8caed039c72f60004fa93a17b11ff57423711d81e83_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9df73b95fa5c33d3143bf47b646b42c2561c6c94e9a07969850a84cbea70f0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df73b95fa5c33d3143bf47b646b42c2561c6c94e9a07969850a84cbea70f0ff->enter($__internal_9df73b95fa5c33d3143bf47b646b42c2561c6c94e9a07969850a84cbea70f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9df73b95fa5c33d3143bf47b646b42c2561c6c94e9a07969850a84cbea70f0ff->leave($__internal_9df73b95fa5c33d3143bf47b646b42c2561c6c94e9a07969850a84cbea70f0ff_prof);

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
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"{{ asset('css/modern-business.css') }}\" rel=\"stylesheet\">


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
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- Custom Fonts -->
        <script src=\"https://use.fontawesome.com/67a564e5bf.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\base.html.twig");
    }
}
