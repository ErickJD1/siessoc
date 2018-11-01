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
        $__internal_6f678b03cc5712690a6103ed9aaed612504f86327ab3f534231d2f9e0191ee07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f678b03cc5712690a6103ed9aaed612504f86327ab3f534231d2f9e0191ee07->enter($__internal_6f678b03cc5712690a6103ed9aaed612504f86327ab3f534231d2f9e0191ee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/layout/login-layout.html.twig"));

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
        
        $__internal_6f678b03cc5712690a6103ed9aaed612504f86327ab3f534231d2f9e0191ee07->leave($__internal_6f678b03cc5712690a6103ed9aaed612504f86327ab3f534231d2f9e0191ee07_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e7881880dd70cac5cfc5216e17e47f35458fdee740103b148eaeede88820ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7881880dd70cac5cfc5216e17e47f35458fdee740103b148eaeede88820ee9->enter($__internal_4e7881880dd70cac5cfc5216e17e47f35458fdee740103b148eaeede88820ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_4e7881880dd70cac5cfc5216e17e47f35458fdee740103b148eaeede88820ee9->leave($__internal_4e7881880dd70cac5cfc5216e17e47f35458fdee740103b148eaeede88820ee9_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e059907bdb0e11c211c1d7cf3f0584257a119ca6edb41c219214b2e88d83a931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e059907bdb0e11c211c1d7cf3f0584257a119ca6edb41c219214b2e88d83a931->enter($__internal_e059907bdb0e11c211c1d7cf3f0584257a119ca6edb41c219214b2e88d83a931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_e059907bdb0e11c211c1d7cf3f0584257a119ca6edb41c219214b2e88d83a931->leave($__internal_e059907bdb0e11c211c1d7cf3f0584257a119ca6edb41c219214b2e88d83a931_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_f8d3d292975cfb139b186910da91215cf14f3c6d3dee3528a4fe2bb3d25d883f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d3d292975cfb139b186910da91215cf14f3c6d3dee3528a4fe2bb3d25d883f->enter($__internal_f8d3d292975cfb139b186910da91215cf14f3c6d3dee3528a4fe2bb3d25d883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_f8d3d292975cfb139b186910da91215cf14f3c6d3dee3528a4fe2bb3d25d883f->leave($__internal_f8d3d292975cfb139b186910da91215cf14f3c6d3dee3528a4fe2bb3d25d883f_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_93d039953e55d31fe6a646947aeec7de28f71c162dd4051406ab7ef59b835439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d039953e55d31fe6a646947aeec7de28f71c162dd4051406ab7ef59b835439->enter($__internal_93d039953e55d31fe6a646947aeec7de28f71c162dd4051406ab7ef59b835439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_93d039953e55d31fe6a646947aeec7de28f71c162dd4051406ab7ef59b835439->leave($__internal_93d039953e55d31fe6a646947aeec7de28f71c162dd4051406ab7ef59b835439_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88b9e5d1e389e4fe3292976386df36d84c49c1d72b5bb37d4b1b45d74478bbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b9e5d1e389e4fe3292976386df36d84c49c1d72b5bb37d4b1b45d74478bbe1->enter($__internal_88b9e5d1e389e4fe3292976386df36d84c49c1d72b5bb37d4b1b45d74478bbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_88b9e5d1e389e4fe3292976386df36d84c49c1d72b5bb37d4b1b45d74478bbe1->leave($__internal_88b9e5d1e389e4fe3292976386df36d84c49c1d72b5bb37d4b1b45d74478bbe1_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_14bab8dfaa375726593f42b6a45cc43a509ec620efac639e80dcb45fe3c89396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bab8dfaa375726593f42b6a45cc43a509ec620efac639e80dcb45fe3c89396->enter($__internal_14bab8dfaa375726593f42b6a45cc43a509ec620efac639e80dcb45fe3c89396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_14bab8dfaa375726593f42b6a45cc43a509ec620efac639e80dcb45fe3c89396->leave($__internal_14bab8dfaa375726593f42b6a45cc43a509ec620efac639e80dcb45fe3c89396_prof);

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
