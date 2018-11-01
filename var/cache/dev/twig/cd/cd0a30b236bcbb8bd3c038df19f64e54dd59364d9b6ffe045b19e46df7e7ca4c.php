<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_be6b2ac8235e4324601c5b54773d4c9ba03fc6dc4de0218eaa920225450efa64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_0cbba8781919d845ed858dbee168c3ca40bb7ad52a5929d4bc03c35a816c45da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbba8781919d845ed858dbee168c3ca40bb7ad52a5929d4bc03c35a816c45da->enter($__internal_0cbba8781919d845ed858dbee168c3ca40bb7ad52a5929d4bc03c35a816c45da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbba8781919d845ed858dbee168c3ca40bb7ad52a5929d4bc03c35a816c45da->leave($__internal_0cbba8781919d845ed858dbee168c3ca40bb7ad52a5929d4bc03c35a816c45da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29441cfe0b125fb674dd73e2475e9cc38bfc652c523ff240e481dbaba295d00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29441cfe0b125fb674dd73e2475e9cc38bfc652c523ff240e481dbaba295d00c->enter($__internal_29441cfe0b125fb674dd73e2475e9cc38bfc652c523ff240e481dbaba295d00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_29441cfe0b125fb674dd73e2475e9cc38bfc652c523ff240e481dbaba295d00c->leave($__internal_29441cfe0b125fb674dd73e2475e9cc38bfc652c523ff240e481dbaba295d00c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
