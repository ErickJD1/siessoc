<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_974f70c457d7e84cc1822918ef32cf12d331aa7ad78fb1ae7b53e84be9299afe extends Twig_Template
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
        $__internal_1a9432d6c0f913a1a9c5d5ca0860b1efded6c29aa22e80b6b6c097d438f08f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9432d6c0f913a1a9c5d5ca0860b1efded6c29aa22e80b6b6c097d438f08f68->enter($__internal_1a9432d6c0f913a1a9c5d5ca0860b1efded6c29aa22e80b6b6c097d438f08f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1a9432d6c0f913a1a9c5d5ca0860b1efded6c29aa22e80b6b6c097d438f08f68->leave($__internal_1a9432d6c0f913a1a9c5d5ca0860b1efded6c29aa22e80b6b6c097d438f08f68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
