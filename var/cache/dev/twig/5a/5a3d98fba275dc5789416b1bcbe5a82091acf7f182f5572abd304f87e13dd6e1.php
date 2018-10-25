<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_cfab90a03e42cb22509dafb5c9d028c4c7f69d4c390b30213be354c3c6d95ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_fca5b0e6058fda7acd525108a2e31f57c8b2b9d79673e43f1214324660975a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca5b0e6058fda7acd525108a2e31f57c8b2b9d79673e43f1214324660975a3f->enter($__internal_fca5b0e6058fda7acd525108a2e31f57c8b2b9d79673e43f1214324660975a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca5b0e6058fda7acd525108a2e31f57c8b2b9d79673e43f1214324660975a3f->leave($__internal_fca5b0e6058fda7acd525108a2e31f57c8b2b9d79673e43f1214324660975a3f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3ccd33046c47ad0b8822bfc1bdcbdca7bafa014da726de787894acca28b71ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccd33046c47ad0b8822bfc1bdcbdca7bafa014da726de787894acca28b71ed2->enter($__internal_3ccd33046c47ad0b8822bfc1bdcbdca7bafa014da726de787894acca28b71ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_3ccd33046c47ad0b8822bfc1bdcbdca7bafa014da726de787894acca28b71ed2->leave($__internal_3ccd33046c47ad0b8822bfc1bdcbdca7bafa014da726de787894acca28b71ed2_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7f2fa4a5083c80861074866898939cb41d3b1fa66b4e063d7d4058ead1b03d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2fa4a5083c80861074866898939cb41d3b1fa66b4e063d7d4058ead1b03d64->enter($__internal_7f2fa4a5083c80861074866898939cb41d3b1fa66b4e063d7d4058ead1b03d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_7f2fa4a5083c80861074866898939cb41d3b1fa66b4e063d7d4058ead1b03d64->leave($__internal_7f2fa4a5083c80861074866898939cb41d3b1fa66b4e063d7d4058ead1b03d64_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5dde9e374c74deaaabe01dd7874615f98d8e05e27cadf80f93f9c86a881a98b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dde9e374c74deaaabe01dd7874615f98d8e05e27cadf80f93f9c86a881a98b1->enter($__internal_5dde9e374c74deaaabe01dd7874615f98d8e05e27cadf80f93f9c86a881a98b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_5dde9e374c74deaaabe01dd7874615f98d8e05e27cadf80f93f9c86a881a98b1->leave($__internal_5dde9e374c74deaaabe01dd7874615f98d8e05e27cadf80f93f9c86a881a98b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% endblock %}", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
