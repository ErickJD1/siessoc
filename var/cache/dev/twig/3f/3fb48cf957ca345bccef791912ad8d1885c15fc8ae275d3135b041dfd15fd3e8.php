<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_1006e3b7df9e4a7988b81bb1c02fe92c39e4851bacd1fdd902e34e2422e928e4 extends Twig_Template
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
        $__internal_854f6c919cfcdc018b2d11b8c7bad582ba6b152e86c977302afe249b4796c170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854f6c919cfcdc018b2d11b8c7bad582ba6b152e86c977302afe249b4796c170->enter($__internal_854f6c919cfcdc018b2d11b8c7bad582ba6b152e86c977302afe249b4796c170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

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
        // line 28
        echo "


    ";
        // line 32
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 47
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
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 73
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 108
        echo "
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            ";
        // line 113
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 120
        echo "        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 129
        $this->displayBlock('page_title', $context, $blocks);
        // line 130
        echo "                <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
            </h1>
            ";
        // line 132
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 135
        echo "        </section>

        <!-- Alert Boxes -->
        ";
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 139
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 140
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 142
            echo "            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 145
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 146
                echo "                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 150
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                            </div>
                        ";
            }
            // line 154
            echo "
                        ";
            // line 155
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 156
                echo "                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 160
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "                            </div>
                        ";
            }
            // line 164
            echo "
                        ";
            // line 165
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 166
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 170
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            </div>
                        ";
            }
            // line 174
            echo "
                        ";
            // line 175
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 176
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 180
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "                            </div>
                        ";
            }
            // line 184
            echo "                    </div>
                </div>
            </section>
        ";
        }
        // line 188
        echo "
        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 191
        $this->displayBlock('page_content', $context, $blocks);
        // line 192
        echo "        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    ";
        // line 197
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 202
        echo "
</div>
<!-- ./wrapper -->

";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 216
        echo "
";
        // line 218
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 220
        echo "</body>
</html>
";
        
        $__internal_854f6c919cfcdc018b2d11b8c7bad582ba6b152e86c977302afe249b4796c170->leave($__internal_854f6c919cfcdc018b2d11b8c7bad582ba6b152e86c977302afe249b4796c170_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_3079514864e60d559089ae8020f5b63b6b587786c3c36c5f327a3907976ee6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3079514864e60d559089ae8020f5b63b6b587786c3c36c5f327a3907976ee6dc->enter($__internal_3079514864e60d559089ae8020f5b63b6b587786c3c36c5f327a3907976ee6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_3079514864e60d559089ae8020f5b63b6b587786c3c36c5f327a3907976ee6dc->leave($__internal_3079514864e60d559089ae8020f5b63b6b587786c3c36c5f327a3907976ee6dc_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5454f877f7ad88d82117655011a8223d1b5e2fcc64c87a72c4bb2926c5a02de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5454f877f7ad88d82117655011a8223d1b5e2fcc64c87a72c4bb2926c5a02de3->enter($__internal_5454f877f7ad88d82117655011a8223d1b5e2fcc64c87a72c4bb2926c5a02de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fonts/font-awesome.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"  href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css")), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_5454f877f7ad88d82117655011a8223d1b5e2fcc64c87a72c4bb2926c5a02de3->leave($__internal_5454f877f7ad88d82117655011a8223d1b5e2fcc64c87a72c4bb2926c5a02de3_prof);

    }

    // line 32
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_1eca4b64837388510ced63415e01c815bc0cee846daac4bba727b1be35876ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eca4b64837388510ced63415e01c815bc0cee846daac4bba727b1be35876ecd->enter($__internal_1eca4b64837388510ced63415e01c815bc0cee846daac4bba727b1be35876ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 33
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js")), "html", null, true);
        echo "\"></script>
        <script>
        \$(document).ready(function(){
           \$('[data-toggle=\"tooptip\"]').tooltip();
        });
        </script>
    ";
        
        $__internal_1eca4b64837388510ced63415e01c815bc0cee846daac4bba727b1be35876ecd->leave($__internal_1eca4b64837388510ced63415e01c815bc0cee846daac4bba727b1be35876ecd_prof);

    }

    // line 73
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_a3972fbdf08ee3a82659d7b7434c0d44d0d7dc83699a802eb40439aa8dd4c00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3972fbdf08ee3a82659d7b7434c0d44d0d7dc83699a802eb40439aa8dd4c00b->enter($__internal_a3972fbdf08ee3a82659d7b7434c0d44d0d7dc83699a802eb40439aa8dd4c00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 74
        echo "        <header class=\"main-header\">
            ";
        // line 75
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 87
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 93
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 94
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 96
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 102
            echo "                        </ul>
                    </div>
                ";
        }
        // line 105
        echo "            </nav>
        </header>
    ";
        
        $__internal_a3972fbdf08ee3a82659d7b7434c0d44d0d7dc83699a802eb40439aa8dd4c00b->leave($__internal_a3972fbdf08ee3a82659d7b7434c0d44d0d7dc83699a802eb40439aa8dd4c00b_prof);

    }

    // line 75
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_5e11ab2eb6941c922ada4bc5c843a7b6ae3bedb3da024722ff2ceb84a0deaf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e11ab2eb6941c922ada4bc5c843a7b6ae3bedb3da024722ff2ceb84a0deaf26->enter($__internal_5e11ab2eb6941c922ada4bc5c843a7b6ae3bedb3da024722ff2ceb84a0deaf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 76
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo-mini.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        ";
        // line 83
        $this->displayBlock("title", $context, $blocks);
        echo "
                    </span>
                </a>
            ";
        
        $__internal_5e11ab2eb6941c922ada4bc5c843a7b6ae3bedb3da024722ff2ceb84a0deaf26->leave($__internal_5e11ab2eb6941c922ada4bc5c843a7b6ae3bedb3da024722ff2ceb84a0deaf26_prof);

    }

    // line 96
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_50fc1d8df82e3422045b273711eaaa97c23783f3b27435c4fd3de22da9c829ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fc1d8df82e3422045b273711eaaa97c23783f3b27435c4fd3de22da9c829ca->enter($__internal_50fc1d8df82e3422045b273711eaaa97c23783f3b27435c4fd3de22da9c829ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 97
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_50fc1d8df82e3422045b273711eaaa97c23783f3b27435c4fd3de22da9c829ca->leave($__internal_50fc1d8df82e3422045b273711eaaa97c23783f3b27435c4fd3de22da9c829ca_prof);

    }

    // line 113
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_38c03d088894bc264972daa19b5951a5bd7b7c5dbb1746a78a6a14ed03160f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c03d088894bc264972daa19b5951a5bd7b7c5dbb1746a78a6a14ed03160f86->enter($__internal_38c03d088894bc264972daa19b5951a5bd7b7c5dbb1746a78a6a14ed03160f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 114
        echo "                ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 115
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                    ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                ";
        }
        // line 118
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
            ";
        
        $__internal_38c03d088894bc264972daa19b5951a5bd7b7c5dbb1746a78a6a14ed03160f86->leave($__internal_38c03d088894bc264972daa19b5951a5bd7b7c5dbb1746a78a6a14ed03160f86_prof);

    }

    // line 129
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1e61ef7af776d3d802dfa8e2542cc23ea5fcec8091bfc523973832b31dc6912f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e61ef7af776d3d802dfa8e2542cc23ea5fcec8091bfc523973832b31dc6912f->enter($__internal_1e61ef7af776d3d802dfa8e2542cc23ea5fcec8091bfc523973832b31dc6912f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_1e61ef7af776d3d802dfa8e2542cc23ea5fcec8091bfc523973832b31dc6912f->leave($__internal_1e61ef7af776d3d802dfa8e2542cc23ea5fcec8091bfc523973832b31dc6912f_prof);

    }

    // line 130
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_053b51c2657a4e5e2a7b58beafa17ab82021300cbf818df402c45e9bbddc4255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053b51c2657a4e5e2a7b58beafa17ab82021300cbf818df402c45e9bbddc4255->enter($__internal_053b51c2657a4e5e2a7b58beafa17ab82021300cbf818df402c45e9bbddc4255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_053b51c2657a4e5e2a7b58beafa17ab82021300cbf818df402c45e9bbddc4255->leave($__internal_053b51c2657a4e5e2a7b58beafa17ab82021300cbf818df402c45e9bbddc4255_prof);

    }

    // line 132
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_005323a9756f05b95f5c6dd38deac8fb58377f29a97ac3388af1b77d86be451d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005323a9756f05b95f5c6dd38deac8fb58377f29a97ac3388af1b77d86be451d->enter($__internal_005323a9756f05b95f5c6dd38deac8fb58377f29a97ac3388af1b77d86be451d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 133
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
            ";
        
        $__internal_005323a9756f05b95f5c6dd38deac8fb58377f29a97ac3388af1b77d86be451d->leave($__internal_005323a9756f05b95f5c6dd38deac8fb58377f29a97ac3388af1b77d86be451d_prof);

    }

    // line 191
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_15a269fc7598ee9eb81d295a0aef0b6b5b60ff218a0243f52482597de6c9166b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a269fc7598ee9eb81d295a0aef0b6b5b60ff218a0243f52482597de6c9166b->enter($__internal_15a269fc7598ee9eb81d295a0aef0b6b5b60ff218a0243f52482597de6c9166b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_15a269fc7598ee9eb81d295a0aef0b6b5b60ff218a0243f52482597de6c9166b->leave($__internal_15a269fc7598ee9eb81d295a0aef0b6b5b60ff218a0243f52482597de6c9166b_prof);

    }

    // line 197
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_764b48ad0258d2dff6930413daa9739138a7e22580aeb69386500a525b1cc322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764b48ad0258d2dff6930413daa9739138a7e22580aeb69386500a525b1cc322->enter($__internal_764b48ad0258d2dff6930413daa9739138a7e22580aeb69386500a525b1cc322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 198
        echo "        <footer class=\"main-footer\">
            <strong>Copyright &copy; ";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
        </footer>
    ";
        
        $__internal_764b48ad0258d2dff6930413daa9739138a7e22580aeb69386500a525b1cc322->leave($__internal_764b48ad0258d2dff6930413daa9739138a7e22580aeb69386500a525b1cc322_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_232583f35c701403b9101085a7b7f1abaaa99c02883b748604635df79e78e2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232583f35c701403b9101085a7b7f1abaaa99c02883b748604635df79e78e2fa->enter($__internal_232583f35c701403b9101085a7b7f1abaaa99c02883b748604635df79e78e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 208
        echo "
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
    <script>
    \$(function(){
      \$(\"#tabelMahasiswa\").dataTable();
    });
    </script>
";
        
        $__internal_232583f35c701403b9101085a7b7f1abaaa99c02883b748604635df79e78e2fa->leave($__internal_232583f35c701403b9101085a7b7f1abaaa99c02883b748604635df79e78e2fa_prof);

    }

    // line 218
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_06397b51390dd98476776b9b7f36c7ad5ab2ce08e1923f7848f7257f65047639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06397b51390dd98476776b9b7f36c7ad5ab2ce08e1923f7848f7257f65047639->enter($__internal_06397b51390dd98476776b9b7f36c7ad5ab2ce08e1923f7848f7257f65047639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_06397b51390dd98476776b9b7f36c7ad5ab2ce08e1923f7848f7257f65047639->leave($__internal_06397b51390dd98476776b9b7f36c7ad5ab2ce08e1923f7848f7257f65047639_prof);

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
        return array (  605 => 218,  591 => 209,  588 => 208,  582 => 207,  568 => 199,  565 => 198,  559 => 197,  548 => 191,  538 => 133,  532 => 132,  521 => 130,  509 => 129,  499 => 118,  494 => 116,  489 => 115,  486 => 114,  480 => 113,  471 => 100,  467 => 99,  463 => 98,  458 => 97,  452 => 96,  441 => 83,  435 => 80,  427 => 76,  421 => 75,  412 => 105,  407 => 102,  405 => 96,  401 => 94,  399 => 93,  391 => 87,  389 => 75,  386 => 74,  380 => 73,  366 => 40,  362 => 39,  358 => 38,  349 => 33,  343 => 32,  333 => 25,  329 => 24,  325 => 23,  321 => 22,  316 => 20,  313 => 19,  307 => 18,  295 => 15,  286 => 220,  284 => 218,  281 => 216,  279 => 207,  273 => 202,  271 => 197,  264 => 192,  262 => 191,  257 => 188,  251 => 184,  247 => 182,  238 => 180,  234 => 179,  229 => 176,  227 => 175,  224 => 174,  220 => 172,  211 => 170,  207 => 169,  202 => 166,  200 => 165,  197 => 164,  193 => 162,  184 => 160,  180 => 159,  175 => 156,  173 => 155,  170 => 154,  166 => 152,  157 => 150,  153 => 149,  148 => 146,  146 => 145,  141 => 142,  139 => 140,  138 => 139,  137 => 138,  132 => 135,  130 => 132,  124 => 130,  122 => 129,  111 => 120,  109 => 113,  102 => 108,  100 => 73,  94 => 70,  69 => 47,  66 => 32,  61 => 28,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\" />
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/dataTables.bootstrap.min.css'))}}\">
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/fonts/font-awesome.css'))}}\">
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
