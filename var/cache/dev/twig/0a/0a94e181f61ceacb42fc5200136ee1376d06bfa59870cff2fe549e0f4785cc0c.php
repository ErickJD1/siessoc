<?php

/* user/show.html.twig */
class __TwigTemplate_73ea6c1f0128769d7a94a2881d9df6ca8766c88e2a14cd0502f00d2df179c226 extends Twig_Template
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
        $__internal_db19381c06f7ead5d182a2f9348287ce0ab40cfa722b5cdd1aa441401f929bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db19381c06f7ead5d182a2f9348287ce0ab40cfa722b5cdd1aa441401f929bd4->enter($__internal_db19381c06f7ead5d182a2f9348287ce0ab40cfa722b5cdd1aa441401f929bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "user/show.html.twig", 2);
        // line 3
        echo "
<div class=\"modal fade\" id=\"show";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:90% !important\" >
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->

";
        // line 19
        echo "
    <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  ";
        // line 26
        $context["profile_picture_path"] = false;
        // line 27
        echo "                  ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"))) {
            // line 28
            echo "                    ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"));
            // line 29
            echo "                  ";
        }
        // line 30
        echo "
                  ";
        // line 31
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
                  <h3 class=\"profile-username text-center\"> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "</h3>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Account Details</a></li>
                  <li><a href=\"#roles-and-permission";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Roles and Permissions</a></li>
                  <li><a href=\"#change-password";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tab\">Change Password</a></li>
                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
                    <div class=\"form-horizontal\">
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          ";
        // line 70
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isEnabled", array(), "method")) {
            // line 71
            echo "                            <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                          ";
        } else {
            // line 73
            echo "                              <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                          ";
        }
        // line 75
        echo "                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                              <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
        echo "\" readonly>
                          </div>
                        </div>
                      </div>
              
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <a class=\"btn btn-primary\" href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-fw fa-edit\"></i>Edit</a>
                        </div>
                      </div>

                    </div>
                  </div><!-- /.tab-pane -->

                  <div class=\"tab-pane\" id=\"roles-and-permission";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
                      ";
        // line 99
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"))) {
            // line 100
            echo "                      <table class=\"table table-bordered\">
                        <tbody>
                          <tr>
                            <th>Role</th>
                            <th>Enabled</th>
                          </tr>
                          ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 107
                echo "                            <tr>
                              <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["role"]), "html", null, true);
                echo "</td>
                              <td><span class=\"badge bg-green\">Enabled</span></td>
                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                        </tbody>
                      </table>
                      ";
        }
        // line 115
        echo "                  </div>

                   <div class=\"tab-pane\" id=\"change-password";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
                      <p class=\"text-aqua\">Please click the link below to change your current password</p>
                     <div><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                  </div>
              
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

                        <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_db19381c06f7ead5d182a2f9348287ce0ab40cfa722b5cdd1aa441401f929bd4->leave($__internal_db19381c06f7ead5d182a2f9348287ce0ab40cfa722b5cdd1aa441401f929bd4_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 119,  217 => 117,  213 => 115,  208 => 112,  198 => 108,  195 => 107,  191 => 106,  183 => 100,  181 => 99,  177 => 98,  167 => 91,  157 => 84,  146 => 75,  142 => 73,  138 => 71,  136 => 70,  127 => 64,  118 => 58,  109 => 52,  101 => 47,  95 => 44,  91 => 43,  87 => 42,  74 => 32,  70 => 31,  67 => 30,  64 => 29,  61 => 28,  58 => 27,  56 => 26,  47 => 19,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}

<div class=\"modal fade\" id=\"show{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:90% !important\" >
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Usuario</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->

{% trans_default_domain 'FOSUserBundle' %}

    <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  {% set profile_picture_path = false %}
                  {% if user.getProfilePicture() is not empty %}
                    {% set profile_picture_path = 'images/profile/'~ user.getProfilePicture() %}
                  {% endif %}

                  {{ macro.avatar(profile_picture_path, user.username, 'profile-user-img img-responsive img-circle') }}
                  <h3 class=\"profile-username text-center\"> {{ user.getName() }}</h3>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity{{user.id}}\" data-toggle=\"tab\">Account Details</a></li>
                  <li><a href=\"#roles-and-permission{{user.id}}\" data-toggle=\"tab\">Roles and Permissions</a></li>
                  <li><a href=\"#change-password{{user.id}}\" data-toggle=\"tab\">Change Password</a></li>
                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity{{user.id}}\">
                    <div class=\"form-horizontal\">
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"{{ user.getUsername() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"{{ user.getName() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"{{ user.getEmail() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          {% if user.isEnabled() %}
                            <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                          {% else %}
                              <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                          {% endif %}
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                              <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"{{ user.getMemberSince()|date('Y-m-d') }}\" readonly>
                          </div>
                        </div>
                      </div>
              
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"fa fa-fw fa-edit\"></i>Edit</a>
                        </div>
                      </div>

                    </div>
                  </div><!-- /.tab-pane -->

                  <div class=\"tab-pane\" id=\"roles-and-permission{{user.id}}\">
                      {% if user.getRoles() is not empty %}
                      <table class=\"table table-bordered\">
                        <tbody>
                          <tr>
                            <th>Role</th>
                            <th>Enabled</th>
                          </tr>
                          {% for role in user.getRoles() %}
                            <tr>
                              <td>{{ role|upper }}</td>
                              <td><span class=\"badge bg-green\">Enabled</span></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                      {% endif %}
                  </div>

                   <div class=\"tab-pane\" id=\"change-password{{user.id}}\">
                      <p class=\"text-aqua\">Please click the link below to change your current password</p>
                     <div><a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                  </div>
              
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

                        <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

", "user/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\user\\show.html.twig");
    }
}
