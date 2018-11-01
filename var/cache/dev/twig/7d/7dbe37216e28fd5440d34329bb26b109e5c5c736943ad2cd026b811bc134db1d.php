<?php

/* user/index.html.twig */
class __TwigTemplate_54784d35780fd3f6bcc9a300e3a4fe212c689d7f492bdd4daa82c7917dc2ccf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaeaa171792ad94ab1eb0b4060ee923eb42573550294f43d0174535074235711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeaa171792ad94ab1eb0b4060ee923eb42573550294f43d0174535074235711->enter($__internal_eaeaa171792ad94ab1eb0b4060ee923eb42573550294f43d0174535074235711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaeaa171792ad94ab1eb0b4060ee923eb42573550294f43d0174535074235711->leave($__internal_eaeaa171792ad94ab1eb0b4060ee923eb42573550294f43d0174535074235711_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3637a40f588eff39e34eec9c0f7331a45e1753ae687ea11e2f099ca3c6148d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3637a40f588eff39e34eec9c0f7331a45e1753ae687ea11e2f099ca3c6148d1->enter($__internal_d3637a40f588eff39e34eec9c0f7331a45e1753ae687ea11e2f099ca3c6148d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_d3637a40f588eff39e34eec9c0f7331a45e1753ae687ea11e2f099ca3c6148d1->leave($__internal_d3637a40f588eff39e34eec9c0f7331a45e1753ae687ea11e2f099ca3c6148d1_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c72f4f255430154b670e68acdc810032bd57a8444ce02fb9483de25b66eefaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72f4f255430154b670e68acdc810032bd57a8444ce02fb9483de25b66eefaf9->enter($__internal_c72f4f255430154b670e68acdc810032bd57a8444ce02fb9483de25b66eefaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_c72f4f255430154b670e68acdc810032bd57a8444ce02fb9483de25b66eefaf9->leave($__internal_c72f4f255430154b670e68acdc810032bd57a8444ce02fb9483de25b66eefaf9_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6ab31b82a463ad1e4dda22ff042d5798fb4c095a093d1bc2bbb37786ddba54fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab31b82a463ad1e4dda22ff042d5798fb4c095a093d1bc2bbb37786ddba54fb->enter($__internal_6ab31b82a463ad1e4dda22ff042d5798fb4c095a093d1bc2bbb37786ddba54fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Usuarios ";
        
        $__internal_6ab31b82a463ad1e4dda22ff042d5798fb4c095a093d1bc2bbb37786ddba54fb->leave($__internal_6ab31b82a463ad1e4dda22ff042d5798fb4c095a093d1bc2bbb37786ddba54fb_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b417992c1841fda269e49f2d1bdf2292564495790fa28ace5ae596881421a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b417992c1841fda269e49f2d1bdf2292564495790fa28ace5ae596881421a326->enter($__internal_b417992c1841fda269e49f2d1bdf2292564495790fa28ace5ae596881421a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Usuario</button>
         ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SalexUserBundle:User:new"));
        echo "
        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
            <thead>
                <tr role=\"row\">
                    
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Profilepicture</th>
                    <th>Createdat</th>
                    <th>Updateat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "                    <tr>
                        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "profilePicture", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            if ($this->getAttribute($context["user"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 41
            if ($this->getAttribute($context["user"], "updateAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updateAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>

        </table>

        </div>

    </div>                    
    


";
        
        $__internal_b417992c1841fda269e49f2d1bdf2292564495790fa28ace5ae596881421a326->leave($__internal_b417992c1841fda269e49f2d1bdf2292564495790fa28ace5ae596881421a326_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 54,  160 => 48,  154 => 45,  145 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  121 => 36,  118 => 35,  114 => 34,  94 => 17,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{% block stylesheets %}
    {{ parent() }}
 {%endblock%}
{% block page_title %} Usuarios | {% endblock %}
{% block page_subtitle %}Gestion de Usuarios {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Usuario</button>
         {{ render(controller('SalexUserBundle:User:new' )) }}
        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
            <thead>
                <tr role=\"row\">
                    
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Profilepicture</th>
                    <th>Createdat</th>
                    <th>Updateat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in pagination %}
                    <tr>
                        <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                        <td>{{ user.firstName }}</td>
                        <td>{{ user.lastName }}</td>
                        <td>{{ user.profilePicture }}</td>
                        <td>{% if user.createdAt %}{{ user.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                        <td>{% if user.updateAt %}{{ user.updateAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>

        </table>

        </div>

    </div>                    
    


{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\user\\index.html.twig");
    }
}
