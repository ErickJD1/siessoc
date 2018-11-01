<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_90a074a6ad7b12af14d2bfd202644a73277e6299eb02dc06e3d7288077ffdb65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cf5de2a61e1f48aa0c0223e44e393438f84eddf11eb6e18b0c6fe6423dc9dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf5de2a61e1f48aa0c0223e44e393438f84eddf11eb6e18b0c6fe6423dc9dc4->enter($__internal_5cf5de2a61e1f48aa0c0223e44e393438f84eddf11eb6e18b0c6fe6423dc9dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf5de2a61e1f48aa0c0223e44e393438f84eddf11eb6e18b0c6fe6423dc9dc4->leave($__internal_5cf5de2a61e1f48aa0c0223e44e393438f84eddf11eb6e18b0c6fe6423dc9dc4_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_14fa7960d114439395115bdad876f799a6aea8c0e43483067fb7ba93032f10b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fa7960d114439395115bdad876f799a6aea8c0e43483067fb7ba93032f10b0->enter($__internal_14fa7960d114439395115bdad876f799a6aea8c0e43483067fb7ba93032f10b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "\t<div class=\"alert alert-success alert-dismissible\">
        ";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
\t</div>
";
        
        $__internal_14fa7960d114439395115bdad876f799a6aea8c0e43483067fb7ba93032f10b0->leave($__internal_14fa7960d114439395115bdad876f799a6aea8c0e43483067fb7ba93032f10b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents %}
\t<div class=\"alert alert-success alert-dismissible\">
        {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
\t</div>
{% endblock user_auth_contents %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
