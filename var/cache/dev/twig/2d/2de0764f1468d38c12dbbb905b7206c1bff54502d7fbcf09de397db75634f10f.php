<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a578bfc61804d5df950c677c7ebfcb5507a07f27cad2c6c4f7fbcdfa2ae8689f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_769db13bfff1daf4b6e6702bbd4bd3d3865a57b5e1f92cdf1cd3310f9cd1ffcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769db13bfff1daf4b6e6702bbd4bd3d3865a57b5e1f92cdf1cd3310f9cd1ffcd->enter($__internal_769db13bfff1daf4b6e6702bbd4bd3d3865a57b5e1f92cdf1cd3310f9cd1ffcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_769db13bfff1daf4b6e6702bbd4bd3d3865a57b5e1f92cdf1cd3310f9cd1ffcd->leave($__internal_769db13bfff1daf4b6e6702bbd4bd3d3865a57b5e1f92cdf1cd3310f9cd1ffcd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
