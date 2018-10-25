<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2c7040d59617364c84a2060bd8fe9458c191d000226bb1ba6bb40c139413e237 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9df77c1c478bd71c777841273225fbbd5f153f943c90bfa972ff93de12d6d2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df77c1c478bd71c777841273225fbbd5f153f943c90bfa972ff93de12d6d2f2->enter($__internal_9df77c1c478bd71c777841273225fbbd5f153f943c90bfa972ff93de12d6d2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df77c1c478bd71c777841273225fbbd5f153f943c90bfa972ff93de12d6d2f2->leave($__internal_9df77c1c478bd71c777841273225fbbd5f153f943c90bfa972ff93de12d6d2f2_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_23f82403500bd18b7f438275028dc3ca2d49cd8ab8f131fcb1c57e3f85c57a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f82403500bd18b7f438275028dc3ca2d49cd8ab8f131fcb1c57e3f85c57a83->enter($__internal_23f82403500bd18b7f438275028dc3ca2d49cd8ab8f131fcb1c57e3f85c57a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_23f82403500bd18b7f438275028dc3ca2d49cd8ab8f131fcb1c57e3f85c57a83->leave($__internal_23f82403500bd18b7f438275028dc3ca2d49cd8ab8f131fcb1c57e3f85c57a83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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

{% block user_auth_contents %}
{% include \"SalexUserBundle:Resetting:request_content.html.twig\" %}
{% endblock user_auth_contents %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/request.html.twig");
    }
}
