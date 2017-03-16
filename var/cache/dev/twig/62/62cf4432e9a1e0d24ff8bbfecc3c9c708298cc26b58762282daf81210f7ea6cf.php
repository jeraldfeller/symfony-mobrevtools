<?php

/* :settings:api_access_list.html.twig */
class __TwigTemplate_a7a13504ffc7eb7f0463328a47254e0d64d8a64187a492d74b51b47b037dd239 extends Twig_Template
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
        $__internal_05c0e605ec8167b866080db39d411fc3df5f7cb9c5ef475b175afdb16b82ff4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c0e605ec8167b866080db39d411fc3df5f7cb9c5ef475b175afdb16b82ff4b->enter($__internal_05c0e605ec8167b866080db39d411fc3df5f7cb9c5ef475b175afdb16b82ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api_access_list.html.twig"));

        $__internal_d1a3213a1819524303c8b17c5dfd0732215ac1baa5a85cd514a10a6c1e56e604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a3213a1819524303c8b17c5dfd0732215ac1baa5a85cd514a10a6c1e56e604->enter($__internal_d1a3213a1819524303c8b17c5dfd0732215ac1baa5a85cd514a10a6c1e56e604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api_access_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($context["item"], "trafficSource", array()) == "ExoClick")) {
                // line 3
                echo "        <div class=\"col-md-6\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-green-sharp\">
                        <i class=\"icon-share font-green-sharp\"></i>
                        <span class=\"caption-subject bold uppercase\"> ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
                echo "</span>

                    </div>
                    <div class=\"action\" id=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">
                        <button type=\"button\" class=\"btn btn-circle btn-info btn-sm ladda-button pull-right spinnerBtn\" id=\"save-spinner";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" data-style=\"expand-right\" data-size=\"s\" onClick=\"updateApiAccessSettings(this)\">
                                                    <span class=\"ladda-label\">
                                                        <i class=\"fa fa-save\"></i> Save</span>
                        </button>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    <div class=\"form-group form-md-line-input\">
                        <input type=\"text\" class=\"form-control\" id=\"user-";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter username\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
                echo "\">
                        <input type=\"hidden\" class=\"form-control\" id=\"password-";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter password\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "password", array()), "html", null, true);
                echo "\">
                        <input type=\"hidden\" class=\"form-control\" id=\"tid-";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter password\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "tid", array()), "getId", array(), "method"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" class=\"form-control\" id=\"traffic-";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter password\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
                echo "\">
                        <label for=\"user-";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">Token</label>

                    </div>
                </div>
            </div>
        </div>
        ";
            } else {
                // line 31
                echo "            <div class=\"col-md-6\">
                <div class=\"portlet light\">
                    <div class=\"portlet-title\">
                        <div class=\"caption font-green-sharp\">
                            <i class=\"icon-share font-green-sharp\"></i>
                            <span class=\"caption-subject bold uppercase\"> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
                echo "</span>

                        </div>
                        <div class=\"action\" id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">
                            <button type=\"button\" class=\"btn btn-circle btn-info btn-sm ladda-button pull-right spinnerBtn\" data-style=\"expand-right\" data-size=\"s\" onClick=\"updateApiAccessSettings(this)\">
                                                    <span class=\"ladda-label\">
                                                        <i class=\"fa fa-save\"></i> Save</span>
                            </button>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <div class=\"form-group form-md-line-input\">
                            <input type=\"text\" class=\"form-control\" id=\"user-";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter username\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
                echo "\">
                            <label for=\"user-";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">Username</label>

                        </div>
                        <div class=\"form-group form-md-line-input\">
                            <input type=\"password\" class=\"form-control\" id=\"password-";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter password\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "password", array()), "html", null, true);
                echo "\">
                            <input type=\"hidden\" class=\"form-control\" id=\"tid-";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter password\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "tid", array()), "getId", array(), "method"), "html", null, true);
                echo "\">
                            <input type=\"hidden\" class=\"form-control\" id=\"traffic-";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" placeholder=\"Enter password\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
                echo "\">
                            <label for=\"password-";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">Password</label>

                        </div>
                    </div>
                </div>
            </div>
    ";
            }
            // line 63
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_05c0e605ec8167b866080db39d411fc3df5f7cb9c5ef475b175afdb16b82ff4b->leave($__internal_05c0e605ec8167b866080db39d411fc3df5f7cb9c5ef475b175afdb16b82ff4b_prof);

        
        $__internal_d1a3213a1819524303c8b17c5dfd0732215ac1baa5a85cd514a10a6c1e56e604->leave($__internal_d1a3213a1819524303c8b17c5dfd0732215ac1baa5a85cd514a10a6c1e56e604_prof);

    }

    public function getTemplateName()
    {
        return ":settings:api_access_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  163 => 56,  157 => 55,  151 => 54,  145 => 53,  138 => 49,  132 => 48,  120 => 39,  114 => 36,  107 => 31,  97 => 24,  91 => 23,  85 => 22,  79 => 21,  73 => 20,  62 => 12,  58 => 11,  52 => 8,  45 => 3,  42 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in data %}
    {% if item.trafficSource == 'ExoClick' %}
        <div class=\"col-md-6\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-green-sharp\">
                        <i class=\"icon-share font-green-sharp\"></i>
                        <span class=\"caption-subject bold uppercase\"> {{ item.trafficSource }}</span>

                    </div>
                    <div class=\"action\" id=\"{{ loop.index0 }}\">
                        <button type=\"button\" class=\"btn btn-circle btn-info btn-sm ladda-button pull-right spinnerBtn\" id=\"save-spinner{{ loop.index0 }}\" data-style=\"expand-right\" data-size=\"s\" onClick=\"updateApiAccessSettings(this)\">
                                                    <span class=\"ladda-label\">
                                                        <i class=\"fa fa-save\"></i> Save</span>
                        </button>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    <div class=\"form-group form-md-line-input\">
                        <input type=\"text\" class=\"form-control\" id=\"user-{{ loop.index0 }}\" placeholder=\"Enter username\" value=\"{{ item.username }}\">
                        <input type=\"hidden\" class=\"form-control\" id=\"password-{{ loop.index0 }}\" placeholder=\"Enter password\" value=\"{{ item.password }}\">
                        <input type=\"hidden\" class=\"form-control\" id=\"tid-{{ loop.index0 }}\" placeholder=\"Enter password\" value=\"{{ item.tid.getId() }}\">
                        <input type=\"hidden\" class=\"form-control\" id=\"traffic-{{ loop.index0 }}\" placeholder=\"Enter password\" value=\"{{ item.trafficSource }}\">
                        <label for=\"user-{{ loop.index0 }}\">Token</label>

                    </div>
                </div>
            </div>
        </div>
        {% else %}
            <div class=\"col-md-6\">
                <div class=\"portlet light\">
                    <div class=\"portlet-title\">
                        <div class=\"caption font-green-sharp\">
                            <i class=\"icon-share font-green-sharp\"></i>
                            <span class=\"caption-subject bold uppercase\"> {{ item.trafficSource }}</span>

                        </div>
                        <div class=\"action\" id=\"{{ loop.index0 }}\">
                            <button type=\"button\" class=\"btn btn-circle btn-info btn-sm ladda-button pull-right spinnerBtn\" data-style=\"expand-right\" data-size=\"s\" onClick=\"updateApiAccessSettings(this)\">
                                                    <span class=\"ladda-label\">
                                                        <i class=\"fa fa-save\"></i> Save</span>
                            </button>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <div class=\"form-group form-md-line-input\">
                            <input type=\"text\" class=\"form-control\" id=\"user-{{ loop.index0 }}\" placeholder=\"Enter username\" value=\"{{ item.username }}\">
                            <label for=\"user-{{ loop.index0 }}\">Username</label>

                        </div>
                        <div class=\"form-group form-md-line-input\">
                            <input type=\"password\" class=\"form-control\" id=\"password-{{ loop.index0 }}\" placeholder=\"Enter password\" value=\"{{ item.password }}\">
                            <input type=\"hidden\" class=\"form-control\" id=\"tid-{{ loop.index0 }}\" placeholder=\"Enter password\" value=\"{{ item.tid.getId() }}\">
                            <input type=\"hidden\" class=\"form-control\" id=\"traffic-{{ loop.index0 }}\" placeholder=\"Enter password\" value=\"{{ item.trafficSource }}\">
                            <label for=\"password-{{ loop.index0 }}\">Password</label>

                        </div>
                    </div>
                </div>
            </div>
    {% endif %}

{% endfor %}", ":settings:api_access_list.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app/Resources\\views/settings/api_access_list.html.twig");
    }
}
