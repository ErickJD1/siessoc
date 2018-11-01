<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_73efb3a21f22f431122cf34b7ef0a5fc4dbc096f0dfa64de58f7306e3fd0770d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c649bf756bc14d209e8d0dc94dec5efe61485854e5ed116d2a78b2126f69b3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c649bf756bc14d209e8d0dc94dec5efe61485854e5ed116d2a78b2126f69b3fa->enter($__internal_c649bf756bc14d209e8d0dc94dec5efe61485854e5ed116d2a78b2126f69b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
     
    ";
        // line 18
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "


    ";
        // line 34
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 49
        echo "
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 75
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 110
        echo "
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            ";
        // line 115
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 122
        echo "        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 131
        $this->displayBlock('page_title', $context, $blocks);
        // line 132
        echo "                <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
            </h1>
            ";
        // line 134
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 137
        echo "        </section>

        <!-- Alert Boxes -->
        ";
        // line 140
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 141
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 142
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 144
            echo "            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 147
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 148
                echo "                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 152
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "                            </div>
                        ";
            }
            // line 156
            echo "
                        ";
            // line 157
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 158
                echo "                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 162
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "                            </div>
                        ";
            }
            // line 166
            echo "
                        ";
            // line 167
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 168
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 172
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "                            </div>
                        ";
            }
            // line 176
            echo "
                        ";
            // line 177
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 178
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                ";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 182
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "                            </div>
                        ";
            }
            // line 186
            echo "                    </div>
                </div>
            </section>
        ";
        }
        // line 190
        echo "
        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 193
        $this->displayBlock('page_content', $context, $blocks);
        // line 194
        echo "        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    ";
        // line 199
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 204
        echo "
</div>
<!-- ./wrapper -->

";
        // line 209
        $this->displayBlock('javascripts', $context, $blocks);
        // line 218
        echo "
";
        // line 220
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 222
        echo "</body>
</html>
";
        
        $__internal_c649bf756bc14d209e8d0dc94dec5efe61485854e5ed116d2a78b2126f69b3fa->leave($__internal_c649bf756bc14d209e8d0dc94dec5efe61485854e5ed116d2a78b2126f69b3fa_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_be2250b46ec3039f367e3b06cba4b34f09f66f5d71dcff70b9b6c7f692770a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2250b46ec3039f367e3b06cba4b34f09f66f5d71dcff70b9b6c7f692770a62->enter($__internal_be2250b46ec3039f367e3b06cba4b34f09f66f5d71dcff70b9b6c7f692770a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_be2250b46ec3039f367e3b06cba4b34f09f66f5d71dcff70b9b6c7f692770a62->leave($__internal_be2250b46ec3039f367e3b06cba4b34f09f66f5d71dcff70b9b6c7f692770a62_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60b458b40ece7407690ad47447129ae8755429ff9cd1c2cac6a0b6c843dbf52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b458b40ece7407690ad47447129ae8755429ff9cd1c2cac6a0b6c843dbf52e->enter($__internal_60b458b40ece7407690ad47447129ae8755429ff9cd1c2cac6a0b6c843dbf52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.dataTables.min.css")), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_60b458b40ece7407690ad47447129ae8755429ff9cd1c2cac6a0b6c843dbf52e->leave($__internal_60b458b40ece7407690ad47447129ae8755429ff9cd1c2cac6a0b6c843dbf52e_prof);

    }

    // line 34
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_30774a81061315424638166b4bec0d96068f179a83e09236f42fcdcf26910914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30774a81061315424638166b4bec0d96068f179a83e09236f42fcdcf26910914->enter($__internal_30774a81061315424638166b4bec0d96068f179a83e09236f42fcdcf26910914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 35
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js")), "html", null, true);
        echo "\"></script>
        <script>
        \$(document).ready(function(){
           \$('[data-toggle=\"tooptip\"]').tooltip();
        });
        </script>
    ";
        
        $__internal_30774a81061315424638166b4bec0d96068f179a83e09236f42fcdcf26910914->leave($__internal_30774a81061315424638166b4bec0d96068f179a83e09236f42fcdcf26910914_prof);

    }

    // line 75
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_23053375ee3a1ed5d2739b083baca51ff680ea316b09a18a7eb1e535d04a924f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23053375ee3a1ed5d2739b083baca51ff680ea316b09a18a7eb1e535d04a924f->enter($__internal_23053375ee3a1ed5d2739b083baca51ff680ea316b09a18a7eb1e535d04a924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 76
        echo "        <header class=\"main-header\">
            ";
        // line 77
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 89
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 95
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 96
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 98
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 104
            echo "                        </ul>
                    </div>
                ";
        }
        // line 107
        echo "            </nav>
        </header>
    ";
        
        $__internal_23053375ee3a1ed5d2739b083baca51ff680ea316b09a18a7eb1e535d04a924f->leave($__internal_23053375ee3a1ed5d2739b083baca51ff680ea316b09a18a7eb1e535d04a924f_prof);

    }

    // line 77
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_cdc9ff208d0a14ef1f142d314f779f17ebf97a1864d360d7b23da48847c49ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc9ff208d0a14ef1f142d314f779f17ebf97a1864d360d7b23da48847c49ab0->enter($__internal_cdc9ff208d0a14ef1f142d314f779f17ebf97a1864d360d7b23da48847c49ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 78
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        ";
        // line 85
        $this->displayBlock("title", $context, $blocks);
        echo "
                    </span>
                </a>
            ";
        
        $__internal_cdc9ff208d0a14ef1f142d314f779f17ebf97a1864d360d7b23da48847c49ab0->leave($__internal_cdc9ff208d0a14ef1f142d314f779f17ebf97a1864d360d7b23da48847c49ab0_prof);

    }

    // line 98
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_8963a7a7fd7240b4c7a2b9f3fd878ca6db08243c4669d14e2ea08aa3d0876bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8963a7a7fd7240b4c7a2b9f3fd878ca6db08243c4669d14e2ea08aa3d0876bcc->enter($__internal_8963a7a7fd7240b4c7a2b9f3fd878ca6db08243c4669d14e2ea08aa3d0876bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 99
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_8963a7a7fd7240b4c7a2b9f3fd878ca6db08243c4669d14e2ea08aa3d0876bcc->leave($__internal_8963a7a7fd7240b4c7a2b9f3fd878ca6db08243c4669d14e2ea08aa3d0876bcc_prof);

    }

    // line 115
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_f0ed8a188242442f8e892838b812152eb37af669e215abe9f1a639fba7df5f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ed8a188242442f8e892838b812152eb37af669e215abe9f1a639fba7df5f0b->enter($__internal_f0ed8a188242442f8e892838b812152eb37af669e215abe9f1a639fba7df5f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 116
        echo "                ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 117
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                    ";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                ";
        }
        // line 120
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
            ";
        
        $__internal_f0ed8a188242442f8e892838b812152eb37af669e215abe9f1a639fba7df5f0b->leave($__internal_f0ed8a188242442f8e892838b812152eb37af669e215abe9f1a639fba7df5f0b_prof);

    }

    // line 131
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_be0b799c50ede6e5532faba362e296aedc84d0098872a967b5dc480b4fa5b582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0b799c50ede6e5532faba362e296aedc84d0098872a967b5dc480b4fa5b582->enter($__internal_be0b799c50ede6e5532faba362e296aedc84d0098872a967b5dc480b4fa5b582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_be0b799c50ede6e5532faba362e296aedc84d0098872a967b5dc480b4fa5b582->leave($__internal_be0b799c50ede6e5532faba362e296aedc84d0098872a967b5dc480b4fa5b582_prof);

    }

    // line 132
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3706a4307a60e41c999fa64b86c40b43ae3ce0743eae8c2775d6221070c42a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3706a4307a60e41c999fa64b86c40b43ae3ce0743eae8c2775d6221070c42a2b->enter($__internal_3706a4307a60e41c999fa64b86c40b43ae3ce0743eae8c2775d6221070c42a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_3706a4307a60e41c999fa64b86c40b43ae3ce0743eae8c2775d6221070c42a2b->leave($__internal_3706a4307a60e41c999fa64b86c40b43ae3ce0743eae8c2775d6221070c42a2b_prof);

    }

    // line 134
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_5315b41d6e2f98394e541d2dd5536fd31810c76dba4fd5916793542694938df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5315b41d6e2f98394e541d2dd5536fd31810c76dba4fd5916793542694938df3->enter($__internal_5315b41d6e2f98394e541d2dd5536fd31810c76dba4fd5916793542694938df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 135
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
            ";
        
        $__internal_5315b41d6e2f98394e541d2dd5536fd31810c76dba4fd5916793542694938df3->leave($__internal_5315b41d6e2f98394e541d2dd5536fd31810c76dba4fd5916793542694938df3_prof);

    }

    // line 193
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5499b35d86274c3fea290e4ced7d573e083e40d546ae757ac4b13e7f7f59f0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5499b35d86274c3fea290e4ced7d573e083e40d546ae757ac4b13e7f7f59f0de->enter($__internal_5499b35d86274c3fea290e4ced7d573e083e40d546ae757ac4b13e7f7f59f0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_5499b35d86274c3fea290e4ced7d573e083e40d546ae757ac4b13e7f7f59f0de->leave($__internal_5499b35d86274c3fea290e4ced7d573e083e40d546ae757ac4b13e7f7f59f0de_prof);

    }

    // line 199
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_e8e0d618e78ed550e1cfcee37677e195e3184e913ba620298c554757bad87afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e0d618e78ed550e1cfcee37677e195e3184e913ba620298c554757bad87afd->enter($__internal_e8e0d618e78ed550e1cfcee37677e195e3184e913ba620298c554757bad87afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 200
        echo "        <footer class=\"main-footer\">
            <strong>Copyright &copy; ";
        // line 201
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
        </footer>
    ";
        
        $__internal_e8e0d618e78ed550e1cfcee37677e195e3184e913ba620298c554757bad87afd->leave($__internal_e8e0d618e78ed550e1cfcee37677e195e3184e913ba620298c554757bad87afd_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27d3686488cbf51102962ab9712299f5a51649e21cc72d28e6b17200ab0167ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d3686488cbf51102962ab9712299f5a51649e21cc72d28e6b17200ab0167ec->enter($__internal_27d3686488cbf51102962ab9712299f5a51649e21cc72d28e6b17200ab0167ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
    <script>
    \$(function(){
      \$(\"#tabelMahasiswa\").dataTable();
    });
    </script>
";
        
        $__internal_27d3686488cbf51102962ab9712299f5a51649e21cc72d28e6b17200ab0167ec->leave($__internal_27d3686488cbf51102962ab9712299f5a51649e21cc72d28e6b17200ab0167ec_prof);

    }

    // line 220
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_ff8615dc904dc1e0140c84231aafc0c4d9a6ed228c81df12c3fa85eeabf214d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8615dc904dc1e0140c84231aafc0c4d9a6ed228c81df12c3fa85eeabf214d9->enter($__internal_ff8615dc904dc1e0140c84231aafc0c4d9a6ed228c81df12c3fa85eeabf214d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_ff8615dc904dc1e0140c84231aafc0c4d9a6ed228c81df12c3fa85eeabf214d9->leave($__internal_ff8615dc904dc1e0140c84231aafc0c4d9a6ed228c81df12c3fa85eeabf214d9_prof);

    }

    public function getTemplateName()
    {
        return "layout/base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 220,  602 => 211,  599 => 210,  593 => 209,  579 => 201,  576 => 200,  570 => 199,  559 => 193,  549 => 135,  543 => 134,  532 => 132,  520 => 131,  510 => 120,  505 => 118,  500 => 117,  497 => 116,  491 => 115,  482 => 102,  478 => 101,  474 => 100,  469 => 99,  463 => 98,  452 => 85,  446 => 82,  438 => 78,  432 => 77,  423 => 107,  418 => 104,  416 => 98,  412 => 96,  410 => 95,  402 => 89,  400 => 77,  397 => 76,  391 => 75,  377 => 42,  373 => 41,  369 => 40,  360 => 35,  354 => 34,  344 => 27,  340 => 26,  336 => 25,  332 => 24,  328 => 23,  324 => 22,  320 => 21,  316 => 20,  313 => 19,  307 => 18,  295 => 15,  286 => 222,  284 => 220,  281 => 218,  279 => 209,  273 => 204,  271 => 199,  264 => 194,  262 => 193,  257 => 190,  251 => 186,  247 => 184,  238 => 182,  234 => 181,  229 => 178,  227 => 177,  224 => 176,  220 => 174,  211 => 172,  207 => 171,  202 => 168,  200 => 167,  197 => 166,  193 => 164,  184 => 162,  180 => 161,  175 => 158,  173 => 157,  170 => 156,  166 => 154,  157 => 152,  153 => 151,  148 => 148,  146 => 147,  141 => 144,  139 => 142,  138 => 141,  137 => 140,  132 => 137,  130 => 134,  124 => 132,  122 => 131,  111 => 122,  109 => 115,  102 => 110,  100 => 75,  94 => 72,  69 => 49,  66 => 34,  61 => 30,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>{% block title %}{{ site_name }}{% endblock %}</title>
     
    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/jquery.dataTables.min.css'))}}\" />
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/dataTables.bootstrap.min.css'))}}\">
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/dataTables.bootstrap.min.css'))}}\">
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/fonts/font-awesome.css'))}}\">
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/fonts/font-awesome.min.css'))}}\">
        <link rel=\"stylesheet\"  href=\"{{ absolute_url(asset('css/bootstrap.css'))}}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {% endblock %}



    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

        <script src=\"{{absolute_url(asset('js/jquery.dataTables.min.js'))}}\"></script>
        <script src=\"{{absolute_url(asset('js/dataTables.bootstrap.min.js'))}}\"></script>
        <script src=\"{{absolute_url(asset('js/bootstrap.js'))}}\"></script>
        <script>
        \$(document).ready(function(){
           \$('[data-toggle=\"tooptip\"]').tooltip();
        });
        </script>
    {% endblock %}

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"{{ admin_skin|default('skin-blue')}} fixed sidebar-mini\">
<div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"{{ path('homepage') }}\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"{{ asset('bundles/app/images/logo-mini.jpg') }}\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        {{ block('title') }}
                    </span>
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AppBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
        </header>
    {% endblock %}

    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            {% block avanzu_sidebar %}
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ render(controller('AppBundle:Sidebar:userPanel')) }}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                {% endif %}
                {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
            {% endblock %}
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                {% block page_title %}Page Title{% endblock %}
                <small>{% block page_subtitle %}{% endblock %}</small>
            </h1>
            {% block avanzu_breadcrumb %}
                {{ render(controller('AppBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
            {% endblock %}
        </section>

        <!-- Alert Boxes -->
        {% if app.session.flashBag.has('success')
        or app.session.flashBag.has('error')
        or app.session.flashBag.has('notice')
        %}
            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% if app.session.flashBag.has('success') %}
                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                {% for msg in app.session.flashBag.get('success') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('error') %}
                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                {% for msg in app.session.flashBag.get('error') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('notice') %}
                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                {% for msg in app.session.flashBag.get('notice') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('warning') %}
                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                {% for msg in app.session.flashBag.get('warning') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </section>
        {% endif %}

        <!-- Main content -->
        <section class=\"content\">
            {% block page_content %}{% endblock %}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <strong>Copyright &copy; {{ \"now\"|date(\"Y\") }} <a href=\"http://{{ footer_url }}\" target=\"_blank\">{{ site_name }}
        </footer>
    {% endblock %}

</div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>
    <script>
    \$(function(){
      \$(\"#tabelMahasiswa\").dataTable();
    });
    </script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "layout/base-layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\layout\\base-layout.html.twig");
    }
}
