<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_6147349ff8509dc4bb4816549de7ff316ea752c7e046483707208566a31d05dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c625567f83eac65e8d442cf88aadc87e38d3836091808a7143e5fc1b2ed4b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c625567f83eac65e8d442cf88aadc87e38d3836091808a7143e5fc1b2ed4b5e->enter($__internal_3c625567f83eac65e8d442cf88aadc87e38d3836091808a7143e5fc1b2ed4b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"login-page\">
";
        // line 34
        $this->displayBlock('page_content', $context, $blocks);
        // line 35
        echo "

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_3c625567f83eac65e8d442cf88aadc87e38d3836091808a7143e5fc1b2ed4b5e->leave($__internal_3c625567f83eac65e8d442cf88aadc87e38d3836091808a7143e5fc1b2ed4b5e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fdb9b7ae577268f64ec438350ceda7b99c545961d3570393096222d75cea481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdb9b7ae577268f64ec438350ceda7b99c545961d3570393096222d75cea481->enter($__internal_6fdb9b7ae577268f64ec438350ceda7b99c545961d3570393096222d75cea481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_6fdb9b7ae577268f64ec438350ceda7b99c545961d3570393096222d75cea481->leave($__internal_6fdb9b7ae577268f64ec438350ceda7b99c545961d3570393096222d75cea481_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c459596ee9eeba9663e773c2987dd272637c4047bb68e229e35263571e973da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c459596ee9eeba9663e773c2987dd272637c4047bb68e229e35263571e973da->enter($__internal_8c459596ee9eeba9663e773c2987dd272637c4047bb68e229e35263571e973da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_8c459596ee9eeba9663e773c2987dd272637c4047bb68e229e35263571e973da->leave($__internal_8c459596ee9eeba9663e773c2987dd272637c4047bb68e229e35263571e973da_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_99591dbfc6ac7b46c1c501775e2dd20af1ad9d5e1f747087d0cdae62c68f66ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99591dbfc6ac7b46c1c501775e2dd20af1ad9d5e1f747087d0cdae62c68f66ae->enter($__internal_99591dbfc6ac7b46c1c501775e2dd20af1ad9d5e1f747087d0cdae62c68f66ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_99591dbfc6ac7b46c1c501775e2dd20af1ad9d5e1f747087d0cdae62c68f66ae->leave($__internal_99591dbfc6ac7b46c1c501775e2dd20af1ad9d5e1f747087d0cdae62c68f66ae_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ad3557f3116cd279bac354db4694fa2664375f4f5c148d51cc983f9cb468e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3557f3116cd279bac354db4694fa2664375f4f5c148d51cc983f9cb468e874->enter($__internal_ad3557f3116cd279bac354db4694fa2664375f4f5c148d51cc983f9cb468e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_ad3557f3116cd279bac354db4694fa2664375f4f5c148d51cc983f9cb468e874->leave($__internal_ad3557f3116cd279bac354db4694fa2664375f4f5c148d51cc983f9cb468e874_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcfd68a6930c5c4612bbc523e82976a72077bedbbe87ce1caff3f07bd952b513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfd68a6930c5c4612bbc523e82976a72077bedbbe87ce1caff3f07bd952b513->enter($__internal_fcfd68a6930c5c4612bbc523e82976a72077bedbbe87ce1caff3f07bd952b513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fcfd68a6930c5c4612bbc523e82976a72077bedbbe87ce1caff3f07bd952b513->leave($__internal_fcfd68a6930c5c4612bbc523e82976a72077bedbbe87ce1caff3f07bd952b513_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_a5305feb72fb1d6dff9eb585a875aff2c9610749914723b590abfb7172a7a2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5305feb72fb1d6dff9eb585a875aff2c9610749914723b590abfb7172a7a2e7->enter($__internal_a5305feb72fb1d6dff9eb585a875aff2c9610749914723b590abfb7172a7a2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_a5305feb72fb1d6dff9eb585a875aff2c9610749914723b590abfb7172a7a2e7->leave($__internal_a5305feb72fb1d6dff9eb585a875aff2c9610749914723b590abfb7172a7a2e7_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 43,  155 => 39,  149 => 38,  138 => 34,  124 => 25,  118 => 24,  108 => 17,  102 => 16,  90 => 13,  81 => 45,  79 => 43,  76 => 41,  74 => 38,  70 => 35,  68 => 34,  63 => 31,  60 => 24,  55 => 21,  51 => 19,  48 => 16,  43 => 13,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"login-page\">
{% block page_content %}{% endblock %}


{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}\"></script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/layout/login-layout.html.twig");
    }
}
