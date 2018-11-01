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
        $__internal_6ad4bb7cae5107b70a2b6e238906ce40eb0bebf7706f6e514b0a5f9544542e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad4bb7cae5107b70a2b6e238906ce40eb0bebf7706f6e514b0a5f9544542e0f->enter($__internal_6ad4bb7cae5107b70a2b6e238906ce40eb0bebf7706f6e514b0a5f9544542e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_6ad4bb7cae5107b70a2b6e238906ce40eb0bebf7706f6e514b0a5f9544542e0f->leave($__internal_6ad4bb7cae5107b70a2b6e238906ce40eb0bebf7706f6e514b0a5f9544542e0f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_75dccfb7ecc07a4c680fed706a578442664d751dec2f57029b0d6a63e2a529c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dccfb7ecc07a4c680fed706a578442664d751dec2f57029b0d6a63e2a529c6->enter($__internal_75dccfb7ecc07a4c680fed706a578442664d751dec2f57029b0d6a63e2a529c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_75dccfb7ecc07a4c680fed706a578442664d751dec2f57029b0d6a63e2a529c6->leave($__internal_75dccfb7ecc07a4c680fed706a578442664d751dec2f57029b0d6a63e2a529c6_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dd6e773191c82e25c26a79208f916befcf1d31119ae0042bad472459f0c55cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd6e773191c82e25c26a79208f916befcf1d31119ae0042bad472459f0c55cb->enter($__internal_9dd6e773191c82e25c26a79208f916befcf1d31119ae0042bad472459f0c55cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_9dd6e773191c82e25c26a79208f916befcf1d31119ae0042bad472459f0c55cb->leave($__internal_9dd6e773191c82e25c26a79208f916befcf1d31119ae0042bad472459f0c55cb_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_f70e68266d14917881694c07141368e6bcf67d3a6e40428eb1aa34c9aa05a3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70e68266d14917881694c07141368e6bcf67d3a6e40428eb1aa34c9aa05a3b2->enter($__internal_f70e68266d14917881694c07141368e6bcf67d3a6e40428eb1aa34c9aa05a3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_f70e68266d14917881694c07141368e6bcf67d3a6e40428eb1aa34c9aa05a3b2->leave($__internal_f70e68266d14917881694c07141368e6bcf67d3a6e40428eb1aa34c9aa05a3b2_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e8146369075dbf2755b004a0d49bea4dc3a359ac6d47bf698decb862c7715269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8146369075dbf2755b004a0d49bea4dc3a359ac6d47bf698decb862c7715269->enter($__internal_e8146369075dbf2755b004a0d49bea4dc3a359ac6d47bf698decb862c7715269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_e8146369075dbf2755b004a0d49bea4dc3a359ac6d47bf698decb862c7715269->leave($__internal_e8146369075dbf2755b004a0d49bea4dc3a359ac6d47bf698decb862c7715269_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_262e1fc84cb8e98b8411c339c70cf64ea6a1ab86b4ba8e0d7265daf14113e54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262e1fc84cb8e98b8411c339c70cf64ea6a1ab86b4ba8e0d7265daf14113e54f->enter($__internal_262e1fc84cb8e98b8411c339c70cf64ea6a1ab86b4ba8e0d7265daf14113e54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_262e1fc84cb8e98b8411c339c70cf64ea6a1ab86b4ba8e0d7265daf14113e54f->leave($__internal_262e1fc84cb8e98b8411c339c70cf64ea6a1ab86b4ba8e0d7265daf14113e54f_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_9a1a7a4a980a919a980c2693f6475538d0c3f9d20815fed655fe223f6afbb9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1a7a4a980a919a980c2693f6475538d0c3f9d20815fed655fe223f6afbb9b1->enter($__internal_9a1a7a4a980a919a980c2693f6475538d0c3f9d20815fed655fe223f6afbb9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_9a1a7a4a980a919a980c2693f6475538d0c3f9d20815fed655fe223f6afbb9b1->leave($__internal_9a1a7a4a980a919a980c2693f6475538d0c3f9d20815fed655fe223f6afbb9b1_prof);

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
