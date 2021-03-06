<?php

/* @AvanzuAdminTheme/layout/login-layout.html.twig */
class __TwigTemplate_0301d9fdbc31d95254db232c40bc14789988291b20aa53bef2c56985eb261952 extends Twig_Template
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
        $__internal_eb34bc6096ab5447fcc44788d8402062686879ccb8acf449d69d921be8f530c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb34bc6096ab5447fcc44788d8402062686879ccb8acf449d69d921be8f530c7->enter($__internal_eb34bc6096ab5447fcc44788d8402062686879ccb8acf449d69d921be8f530c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@AvanzuAdminTheme/layout/login-layout.html.twig", 1);
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
        
        $__internal_eb34bc6096ab5447fcc44788d8402062686879ccb8acf449d69d921be8f530c7->leave($__internal_eb34bc6096ab5447fcc44788d8402062686879ccb8acf449d69d921be8f530c7_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe6fa9cb55cd6a47276d718814cb4135bcbdfc8f73094dbceb14d0009e5ac569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6fa9cb55cd6a47276d718814cb4135bcbdfc8f73094dbceb14d0009e5ac569->enter($__internal_fe6fa9cb55cd6a47276d718814cb4135bcbdfc8f73094dbceb14d0009e5ac569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_fe6fa9cb55cd6a47276d718814cb4135bcbdfc8f73094dbceb14d0009e5ac569->leave($__internal_fe6fa9cb55cd6a47276d718814cb4135bcbdfc8f73094dbceb14d0009e5ac569_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b1fc57a5968c88b06c52eb7ca4078f6fdd69b874b4da580e9d06f1c79b19efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1fc57a5968c88b06c52eb7ca4078f6fdd69b874b4da580e9d06f1c79b19efd->enter($__internal_2b1fc57a5968c88b06c52eb7ca4078f6fdd69b874b4da580e9d06f1c79b19efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_2b1fc57a5968c88b06c52eb7ca4078f6fdd69b874b4da580e9d06f1c79b19efd->leave($__internal_2b1fc57a5968c88b06c52eb7ca4078f6fdd69b874b4da580e9d06f1c79b19efd_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_998fba848dd0267cdc77c6b89e748d66b0a2d149e811a96d2da1d0f3b6de8baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998fba848dd0267cdc77c6b89e748d66b0a2d149e811a96d2da1d0f3b6de8baf->enter($__internal_998fba848dd0267cdc77c6b89e748d66b0a2d149e811a96d2da1d0f3b6de8baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_998fba848dd0267cdc77c6b89e748d66b0a2d149e811a96d2da1d0f3b6de8baf->leave($__internal_998fba848dd0267cdc77c6b89e748d66b0a2d149e811a96d2da1d0f3b6de8baf_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_be5e9c97f41be8850bd633c58615d6173185fbf26cc27874fbe208ec925802b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5e9c97f41be8850bd633c58615d6173185fbf26cc27874fbe208ec925802b5->enter($__internal_be5e9c97f41be8850bd633c58615d6173185fbf26cc27874fbe208ec925802b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_be5e9c97f41be8850bd633c58615d6173185fbf26cc27874fbe208ec925802b5->leave($__internal_be5e9c97f41be8850bd633c58615d6173185fbf26cc27874fbe208ec925802b5_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_140c6cbb3d7b90714d04809cb6506666bc5ed9d6287323d7c3d61d990ca828c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140c6cbb3d7b90714d04809cb6506666bc5ed9d6287323d7c3d61d990ca828c7->enter($__internal_140c6cbb3d7b90714d04809cb6506666bc5ed9d6287323d7c3d61d990ca828c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_140c6cbb3d7b90714d04809cb6506666bc5ed9d6287323d7c3d61d990ca828c7->leave($__internal_140c6cbb3d7b90714d04809cb6506666bc5ed9d6287323d7c3d61d990ca828c7_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_e0ba3568de0de0099643e7178b57b60d469c6756549d35b1238bed2d838aa4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ba3568de0de0099643e7178b57b60d469c6756549d35b1238bed2d838aa4ad->enter($__internal_e0ba3568de0de0099643e7178b57b60d469c6756549d35b1238bed2d838aa4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_e0ba3568de0de0099643e7178b57b60d469c6756549d35b1238bed2d838aa4ad->leave($__internal_e0ba3568de0de0099643e7178b57b60d469c6756549d35b1238bed2d838aa4ad_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/layout/login-layout.html.twig";
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
", "@AvanzuAdminTheme/layout/login-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\layout\\login-layout.html.twig");
    }
}
