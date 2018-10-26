<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_21e1e3772331346655e549a0e7a36800befa0daaeae5a5f312cb02ac8f6e0dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_990a37a95667468f02f9d46056066548e5e111c23719a95d4ff01b1aebde5537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990a37a95667468f02f9d46056066548e5e111c23719a95d4ff01b1aebde5537->enter($__internal_990a37a95667468f02f9d46056066548e5e111c23719a95d4ff01b1aebde5537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_990a37a95667468f02f9d46056066548e5e111c23719a95d4ff01b1aebde5537->leave($__internal_990a37a95667468f02f9d46056066548e5e111c23719a95d4ff01b1aebde5537_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e222a0097163a46cca0edabce41ad09e72d8553a505783165c510086d3873ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e222a0097163a46cca0edabce41ad09e72d8553a505783165c510086d3873ea->enter($__internal_9e222a0097163a46cca0edabce41ad09e72d8553a505783165c510086d3873ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e222a0097163a46cca0edabce41ad09e72d8553a505783165c510086d3873ea->leave($__internal_9e222a0097163a46cca0edabce41ad09e72d8553a505783165c510086d3873ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
