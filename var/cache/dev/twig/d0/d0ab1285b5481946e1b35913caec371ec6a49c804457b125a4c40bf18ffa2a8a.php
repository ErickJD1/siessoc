<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e08e5253b06aece35e0287508848d12286c2cc6206df29b61dee4dfdce15736b extends Twig_Template
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
        $__internal_baf0859ae5607db2ffb95ff04a9c5fa3f4e3f6f71a8b6cf4749ba5460a5435fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf0859ae5607db2ffb95ff04a9c5fa3f4e3f6f71a8b6cf4749ba5460a5435fb->enter($__internal_baf0859ae5607db2ffb95ff04a9c5fa3f4e3f6f71a8b6cf4749ba5460a5435fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_baf0859ae5607db2ffb95ff04a9c5fa3f4e3f6f71a8b6cf4749ba5460a5435fb->leave($__internal_baf0859ae5607db2ffb95ff04a9c5fa3f4e3f6f71a8b6cf4749ba5460a5435fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
