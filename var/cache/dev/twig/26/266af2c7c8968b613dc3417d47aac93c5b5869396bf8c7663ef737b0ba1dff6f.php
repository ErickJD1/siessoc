<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_64b2456b2cc18dcb3ef106cd4e42355bb41a01a71d70baa224f7275bd0ee63e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a628c2ddd44737c6b2baccac14de718dea6359a004baa2b51cdcf00185c5b322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a628c2ddd44737c6b2baccac14de718dea6359a004baa2b51cdcf00185c5b322->enter($__internal_a628c2ddd44737c6b2baccac14de718dea6359a004baa2b51cdcf00185c5b322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a628c2ddd44737c6b2baccac14de718dea6359a004baa2b51cdcf00185c5b322->leave($__internal_a628c2ddd44737c6b2baccac14de718dea6359a004baa2b51cdcf00185c5b322_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4feb6f3a78d16af04115d8387ff99038471213761cf84924bc5807ac101ea9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feb6f3a78d16af04115d8387ff99038471213761cf84924bc5807ac101ea9b0->enter($__internal_4feb6f3a78d16af04115d8387ff99038471213761cf84924bc5807ac101ea9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_4feb6f3a78d16af04115d8387ff99038471213761cf84924bc5807ac101ea9b0->leave($__internal_4feb6f3a78d16af04115d8387ff99038471213761cf84924bc5807ac101ea9b0_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_82853b811a5eb39947e8620642d490957b36fb30dcdc67b70052327b99a3480d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82853b811a5eb39947e8620642d490957b36fb30dcdc67b70052327b99a3480d->enter($__internal_82853b811a5eb39947e8620642d490957b36fb30dcdc67b70052327b99a3480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_82853b811a5eb39947e8620642d490957b36fb30dcdc67b70052327b99a3480d->leave($__internal_82853b811a5eb39947e8620642d490957b36fb30dcdc67b70052327b99a3480d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_caeda2722579e4e078ce9ce171a8d770efe36ef4b593b60b9b2f92fe60d9c539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caeda2722579e4e078ce9ce171a8d770efe36ef4b593b60b9b2f92fe60d9c539->enter($__internal_caeda2722579e4e078ce9ce171a8d770efe36ef4b593b60b9b2f92fe60d9c539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
";
        
        $__internal_caeda2722579e4e078ce9ce171a8d770efe36ef4b593b60b9b2f92fe60d9c539->leave($__internal_caeda2722579e4e078ce9ce171a8d770efe36ef4b593b60b9b2f92fe60d9c539_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  73 => 10,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %}Edit Profile  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t{% include \"SalexUserBundle:Profile:edit_content.html.twig\" %}
\t\t</div> <!-- End of box-primary -->
\t</div> <!-- end of col-md-6 -->
</div> <!-- End of Row -->
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
