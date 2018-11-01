<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a7619a8abca1d12940443149b049ab036f5ca95811c86454a6f282cef5f5b58f extends Twig_Template
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
        $__internal_f5743342c3721b200eacc37087482505a2e7c55da59ebdf64bf3ace428dd169f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5743342c3721b200eacc37087482505a2e7c55da59ebdf64bf3ace428dd169f->enter($__internal_f5743342c3721b200eacc37087482505a2e7c55da59ebdf64bf3ace428dd169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f5743342c3721b200eacc37087482505a2e7c55da59ebdf64bf3ace428dd169f->leave($__internal_f5743342c3721b200eacc37087482505a2e7c55da59ebdf64bf3ace428dd169f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f083b5e7e1f44f2f179e76999fbcf78798c6e7147326d73d44f8640462e4290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f083b5e7e1f44f2f179e76999fbcf78798c6e7147326d73d44f8640462e4290->enter($__internal_0f083b5e7e1f44f2f179e76999fbcf78798c6e7147326d73d44f8640462e4290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0f083b5e7e1f44f2f179e76999fbcf78798c6e7147326d73d44f8640462e4290->leave($__internal_0f083b5e7e1f44f2f179e76999fbcf78798c6e7147326d73d44f8640462e4290_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
