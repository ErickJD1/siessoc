<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_64b2456b2cc18dcb3ef106cd4e42355bb41a01a71d70baa224f7275bd0ee63e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_08a7cb8f7b7b64df793e4fe6701e2b783abe412b5d93d199177c243cf9bf42d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a7cb8f7b7b64df793e4fe6701e2b783abe412b5d93d199177c243cf9bf42d6->enter($__internal_08a7cb8f7b7b64df793e4fe6701e2b783abe412b5d93d199177c243cf9bf42d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a7cb8f7b7b64df793e4fe6701e2b783abe412b5d93d199177c243cf9bf42d6->leave($__internal_08a7cb8f7b7b64df793e4fe6701e2b783abe412b5d93d199177c243cf9bf42d6_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f31f86fbf1ba77711f1e834246eba23fda86986d7f580f38f9a92be70018f021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31f86fbf1ba77711f1e834246eba23fda86986d7f580f38f9a92be70018f021->enter($__internal_f31f86fbf1ba77711f1e834246eba23fda86986d7f580f38f9a92be70018f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_f31f86fbf1ba77711f1e834246eba23fda86986d7f580f38f9a92be70018f021->leave($__internal_f31f86fbf1ba77711f1e834246eba23fda86986d7f580f38f9a92be70018f021_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_af40fad2ea090ace3dd2de32aa0504ae2ecf2d2a5493bbb2228cc558fb662257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af40fad2ea090ace3dd2de32aa0504ae2ecf2d2a5493bbb2228cc558fb662257->enter($__internal_af40fad2ea090ace3dd2de32aa0504ae2ecf2d2a5493bbb2228cc558fb662257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_af40fad2ea090ace3dd2de32aa0504ae2ecf2d2a5493bbb2228cc558fb662257->leave($__internal_af40fad2ea090ace3dd2de32aa0504ae2ecf2d2a5493bbb2228cc558fb662257_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_45bc7718f80e00336a428c443743678fd751e6b10538586a09aca80abe337659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bc7718f80e00336a428c443743678fd751e6b10538586a09aca80abe337659->enter($__internal_45bc7718f80e00336a428c443743678fd751e6b10538586a09aca80abe337659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
";
        
        $__internal_45bc7718f80e00336a428c443743678fd751e6b10538586a09aca80abe337659->leave($__internal_45bc7718f80e00336a428c443743678fd751e6b10538586a09aca80abe337659_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  73 => 10,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Edit Profile  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t{% include \"SalexUserBundle:Profile:edit_content.html.twig\" %}
\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
