<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0a82536cf14b0ce7ca73336902aeae34b8fe3aacfcebcc5378e7f2355a3002fa extends Twig_Template
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
        $__internal_8b600479408624d42abade4334a421dfcfcac215351b33dee469e874681f7b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b600479408624d42abade4334a421dfcfcac215351b33dee469e874681f7b17->enter($__internal_8b600479408624d42abade4334a421dfcfcac215351b33dee469e874681f7b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8b600479408624d42abade4334a421dfcfcac215351b33dee469e874681f7b17->leave($__internal_8b600479408624d42abade4334a421dfcfcac215351b33dee469e874681f7b17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
