<?php

/* :user:new.html.twig */
class __TwigTemplate_c8ee3e80bc982fbc94ac4dc7dbc19c535c58da967786b17935ba31a38e89eb7e extends Twig_Template
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
        $__internal_faae68159bd989a8fd0f8d906ec313def48bbe28cfa26c794d53e5f67aa2c5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faae68159bd989a8fd0f8d906ec313def48bbe28cfa26c794d53e5f67aa2c5cc->enter($__internal_faae68159bd989a8fd0f8d906ec313def48bbe28cfa26c794d53e5f67aa2c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new"), "method" => "POST"));
        echo "
                                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                <input class=\"btn btn-success btn-xl\" type=\"submit\" value=\"Create\" />
                                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                </br>
                                <ul>
                                    <li>
                                        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
                                    </li>
                                </ul>
                            </div>
                            </br>    
                        </div>

                        <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_faae68159bd989a8fd0f8d906ec313def48bbe28cfa26c794d53e5f67aa2c5cc->leave($__internal_faae68159bd989a8fd0f8d906ec313def48bbe28cfa26c794d53e5f67aa2c5cc_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  49 => 20,  44 => 18,  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                {{ form_start(form, {'action': path('user_new'), 'method': 'POST'}) }}
                                {{ form_widget(form) }}
                                <input class=\"btn btn-success btn-xl\" type=\"submit\" value=\"Create\" />
                                {{ form_end(form) }}
                                </br>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('user_index') }}\">Back to the list</a>
                                    </li>
                                </ul>
                            </div>
                            </br>    
                        </div>

                        <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
", ":user:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/user/new.html.twig");
    }
}
