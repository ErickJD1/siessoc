<?php

/* @SalexUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c6f57de351d5809e5bcedb14ba1854c8202585e62219a032ec7584eaaf7a7670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "@SalexUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_2391c449394eedda6e96a98f7ae42b47a6c1592204b4789d11ce3afea0e3c637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2391c449394eedda6e96a98f7ae42b47a6c1592204b4789d11ce3afea0e3c637->enter($__internal_2391c449394eedda6e96a98f7ae42b47a6c1592204b4789d11ce3afea0e3c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2391c449394eedda6e96a98f7ae42b47a6c1592204b4789d11ce3afea0e3c637->leave($__internal_2391c449394eedda6e96a98f7ae42b47a6c1592204b4789d11ce3afea0e3c637_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4e2353c5dc44b1480173d6b945cb2d0d4141c6d2502ae581ac8fd6a1a68007c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2353c5dc44b1480173d6b945cb2d0d4141c6d2502ae581ac8fd6a1a68007c1->enter($__internal_4e2353c5dc44b1480173d6b945cb2d0d4141c6d2502ae581ac8fd6a1a68007c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_4e2353c5dc44b1480173d6b945cb2d0d4141c6d2502ae581ac8fd6a1a68007c1->leave($__internal_4e2353c5dc44b1480173d6b945cb2d0d4141c6d2502ae581ac8fd6a1a68007c1_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c72e9dbc7be71b4c2da967a186bacb9ace3d31ad056075fe508a60cea9457d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72e9dbc7be71b4c2da967a186bacb9ace3d31ad056075fe508a60cea9457d27->enter($__internal_c72e9dbc7be71b4c2da967a186bacb9ace3d31ad056075fe508a60cea9457d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_c72e9dbc7be71b4c2da967a186bacb9ace3d31ad056075fe508a60cea9457d27->leave($__internal_c72e9dbc7be71b4c2da967a186bacb9ace3d31ad056075fe508a60cea9457d27_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_367ce52648a0dd116ec530b462da1b7fcfd7efae02e36847d677984da147bc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367ce52648a0dd116ec530b462da1b7fcfd7efae02e36847d677984da147bc09->enter($__internal_367ce52648a0dd116ec530b462da1b7fcfd7efae02e36847d677984da147bc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "@SalexUser/ChangePassword/changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_367ce52648a0dd116ec530b462da1b7fcfd7efae02e36847d677984da147bc09->leave($__internal_367ce52648a0dd116ec530b462da1b7fcfd7efae02e36847d677984da147bc09_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/ChangePassword/changePassword.html.twig";
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
{% endblock %}", "@SalexUser/ChangePassword/changePassword.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
