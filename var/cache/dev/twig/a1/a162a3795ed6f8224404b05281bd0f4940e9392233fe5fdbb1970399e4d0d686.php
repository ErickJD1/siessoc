<?php

/* user/index.html.twig */
class __TwigTemplate_4fce09e2fd03dc61732d8ae8fb20412c1e3a395e3ffd98a1f1f0f8aac7bf55eb extends Twig_Template
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
        $__internal_780e62fc05f43b645183d8741578d841ba9db3b54d873b71fdb9652672b7df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780e62fc05f43b645183d8741578d841ba9db3b54d873b71fdb9652672b7df4f->enter($__internal_780e62fc05f43b645183d8741578d841ba9db3b54d873b71fdb9652672b7df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780e62fc05f43b645183d8741578d841ba9db3b54d873b71fdb9652672b7df4f->leave($__internal_780e62fc05f43b645183d8741578d841ba9db3b54d873b71fdb9652672b7df4f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab6b5b491ca682acf02385935a3a855edce43d3bd4be5bab332d2944aa1cfa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6b5b491ca682acf02385935a3a855edce43d3bd4be5bab332d2944aa1cfa01->enter($__internal_ab6b5b491ca682acf02385935a3a855edce43d3bd4be5bab332d2944aa1cfa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_ab6b5b491ca682acf02385935a3a855edce43d3bd4be5bab332d2944aa1cfa01->leave($__internal_ab6b5b491ca682acf02385935a3a855edce43d3bd4be5bab332d2944aa1cfa01_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_38266ef9b59c4838664adba18e5c6e5cbcec681545cfc00a3721e44bcd288ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38266ef9b59c4838664adba18e5c6e5cbcec681545cfc00a3721e44bcd288ac1->enter($__internal_38266ef9b59c4838664adba18e5c6e5cbcec681545cfc00a3721e44bcd288ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Usuarios | ";
        
        $__internal_38266ef9b59c4838664adba18e5c6e5cbcec681545cfc00a3721e44bcd288ac1->leave($__internal_38266ef9b59c4838664adba18e5c6e5cbcec681545cfc00a3721e44bcd288ac1_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_439c330e7b519a496a8db94b6c3d4482fb051999e47aa0fffaad9f697d27f6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439c330e7b519a496a8db94b6c3d4482fb051999e47aa0fffaad9f697d27f6d0->enter($__internal_439c330e7b519a496a8db94b6c3d4482fb051999e47aa0fffaad9f697d27f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Usuarios ";
        
        $__internal_439c330e7b519a496a8db94b6c3d4482fb051999e47aa0fffaad9f697d27f6d0->leave($__internal_439c330e7b519a496a8db94b6c3d4482fb051999e47aa0fffaad9f697d27f6d0_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_208051682abe9414d26366c7a4dfe1a449a3bbaad7533ebbfd38d69625feb06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208051682abe9414d26366c7a4dfe1a449a3bbaad7533ebbfd38d69625feb06d->enter($__internal_208051682abe9414d26366c7a4dfe1a449a3bbaad7533ebbfd38d69625feb06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_208051682abe9414d26366c7a4dfe1a449a3bbaad7533ebbfd38d69625feb06d->leave($__internal_208051682abe9414d26366c7a4dfe1a449a3bbaad7533ebbfd38d69625feb06d_prof);

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
