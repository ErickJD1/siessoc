<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1d00666fa383efde39bd77cf5943f3cf40c96286002066b336db33c7ace70e93 extends Twig_Template
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
        $__internal_b80a365f70b58c84a0bfebfaae4c7071b9e11e514f2e973e5c6e73cc6b9372f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80a365f70b58c84a0bfebfaae4c7071b9e11e514f2e973e5c6e73cc6b9372f4->enter($__internal_b80a365f70b58c84a0bfebfaae4c7071b9e11e514f2e973e5c6e73cc6b9372f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b80a365f70b58c84a0bfebfaae4c7071b9e11e514f2e973e5c6e73cc6b9372f4->leave($__internal_b80a365f70b58c84a0bfebfaae4c7071b9e11e514f2e973e5c6e73cc6b9372f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
