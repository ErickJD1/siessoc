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
        $__internal_9bc002b4d66d8d63b42bb2efd5109322980311fcdee4fbcad1fe1e536062102e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc002b4d66d8d63b42bb2efd5109322980311fcdee4fbcad1fe1e536062102e->enter($__internal_9bc002b4d66d8d63b42bb2efd5109322980311fcdee4fbcad1fe1e536062102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9bc002b4d66d8d63b42bb2efd5109322980311fcdee4fbcad1fe1e536062102e->leave($__internal_9bc002b4d66d8d63b42bb2efd5109322980311fcdee4fbcad1fe1e536062102e_prof);

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
