<?php

/* SalexUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_14d54a4e23b58a7d794e911d5c1173cfcbcc09ef8930deab6fb7331d884ed120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
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
        $__internal_92e46cc951782e6f066686d53faeeb8f3f0c3acc10bec63a37897d72a65e5e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e46cc951782e6f066686d53faeeb8f3f0c3acc10bec63a37897d72a65e5e68->enter($__internal_92e46cc951782e6f066686d53faeeb8f3f0c3acc10bec63a37897d72a65e5e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92e46cc951782e6f066686d53faeeb8f3f0c3acc10bec63a37897d72a65e5e68->leave($__internal_92e46cc951782e6f066686d53faeeb8f3f0c3acc10bec63a37897d72a65e5e68_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9e53617a7ce677703e8014f480f0635abc326d544c2e529fe5ea557e7d53d33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e53617a7ce677703e8014f480f0635abc326d544c2e529fe5ea557e7d53d33e->enter($__internal_9e53617a7ce677703e8014f480f0635abc326d544c2e529fe5ea557e7d53d33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_9e53617a7ce677703e8014f480f0635abc326d544c2e529fe5ea557e7d53d33e->leave($__internal_9e53617a7ce677703e8014f480f0635abc326d544c2e529fe5ea557e7d53d33e_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b1ed7073eab9d638813c4a808a3ee1deda816e98d32e4edafb5f23b5a00ae96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ed7073eab9d638813c4a808a3ee1deda816e98d32e4edafb5f23b5a00ae96b->enter($__internal_b1ed7073eab9d638813c4a808a3ee1deda816e98d32e4edafb5f23b5a00ae96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_b1ed7073eab9d638813c4a808a3ee1deda816e98d32e4edafb5f23b5a00ae96b->leave($__internal_b1ed7073eab9d638813c4a808a3ee1deda816e98d32e4edafb5f23b5a00ae96b_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c6208742ca9f78552941f0937b6cd993c80b75a4069bedd3ffeeea6616c455db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6208742ca9f78552941f0937b6cd993c80b75a4069bedd3ffeeea6616c455db->enter($__internal_c6208742ca9f78552941f0937b6cd993c80b75a4069bedd3ffeeea6616c455db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_c6208742ca9f78552941f0937b6cd993c80b75a4069bedd3ffeeea6616c455db->leave($__internal_c6208742ca9f78552941f0937b6cd993c80b75a4069bedd3ffeeea6616c455db_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 11,  68 => 8,  62 => 7,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Change Password  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}


{% block page_content %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                {% include \"SalexUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
{% endblock %}", "SalexUserBundle:ChangePassword:changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
