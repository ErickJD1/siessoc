<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1052ec391a585ef69cbea05b5569be77caa141b2686f2d3702cfaf6c5f901b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_792bd587abd97e9c8cc8170d9e093deb5c2b6e9c91fefd3628aa1066402637fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792bd587abd97e9c8cc8170d9e093deb5c2b6e9c91fefd3628aa1066402637fe->enter($__internal_792bd587abd97e9c8cc8170d9e093deb5c2b6e9c91fefd3628aa1066402637fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792bd587abd97e9c8cc8170d9e093deb5c2b6e9c91fefd3628aa1066402637fe->leave($__internal_792bd587abd97e9c8cc8170d9e093deb5c2b6e9c91fefd3628aa1066402637fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3df622d81de524b4645678ee912224e9af8ed40386e0fbf04b9c6ed5175d7fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df622d81de524b4645678ee912224e9af8ed40386e0fbf04b9c6ed5175d7fe4->enter($__internal_3df622d81de524b4645678ee912224e9af8ed40386e0fbf04b9c6ed5175d7fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_3df622d81de524b4645678ee912224e9af8ed40386e0fbf04b9c6ed5175d7fe4->leave($__internal_3df622d81de524b4645678ee912224e9af8ed40386e0fbf04b9c6ed5175d7fe4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
