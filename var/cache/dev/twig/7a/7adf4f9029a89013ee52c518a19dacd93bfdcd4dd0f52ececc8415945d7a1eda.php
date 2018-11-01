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
        $__internal_9bc0c6941fae89fffb0c02bd0c6fbdcfc24993986aa20c28dbf289e803ff9a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc0c6941fae89fffb0c02bd0c6fbdcfc24993986aa20c28dbf289e803ff9a85->enter($__internal_9bc0c6941fae89fffb0c02bd0c6fbdcfc24993986aa20c28dbf289e803ff9a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9bc0c6941fae89fffb0c02bd0c6fbdcfc24993986aa20c28dbf289e803ff9a85->leave($__internal_9bc0c6941fae89fffb0c02bd0c6fbdcfc24993986aa20c28dbf289e803ff9a85_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebceeac9c96d53963ca97e64f6f97b924c4798169aab9263f7367ece33e1afa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebceeac9c96d53963ca97e64f6f97b924c4798169aab9263f7367ece33e1afa2->enter($__internal_ebceeac9c96d53963ca97e64f6f97b924c4798169aab9263f7367ece33e1afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ebceeac9c96d53963ca97e64f6f97b924c4798169aab9263f7367ece33e1afa2->leave($__internal_ebceeac9c96d53963ca97e64f6f97b924c4798169aab9263f7367ece33e1afa2_prof);

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
