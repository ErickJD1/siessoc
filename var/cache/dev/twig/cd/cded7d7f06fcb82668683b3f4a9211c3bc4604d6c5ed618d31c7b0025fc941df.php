<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ffc2f2d55ad3dcc3ef9e96153f2aff27ea16a69e49df53e1b4b88b85e8a06375 extends Twig_Template
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
        $__internal_f5d772a18851c9c68c89f1885c0771887a785369abd4d21855f9d633551dd0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d772a18851c9c68c89f1885c0771887a785369abd4d21855f9d633551dd0f6->enter($__internal_f5d772a18851c9c68c89f1885c0771887a785369abd4d21855f9d633551dd0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f5d772a18851c9c68c89f1885c0771887a785369abd4d21855f9d633551dd0f6->leave($__internal_f5d772a18851c9c68c89f1885c0771887a785369abd4d21855f9d633551dd0f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
