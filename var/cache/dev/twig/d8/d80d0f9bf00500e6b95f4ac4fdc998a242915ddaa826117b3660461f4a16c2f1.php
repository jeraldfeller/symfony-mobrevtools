<?php

/* @SgDatatables/Helper/render_image.html.twig */
class __TwigTemplate_002e4e4543de6de4623269d92582496159b6629015beb4d7eef99c8a3ca491cf extends Twig_Template
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
        $__internal_71a52c2d27177751227f831306eeb4ea1553154d43353b704cdb03d619ba8067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a52c2d27177751227f831306eeb4ea1553154d43353b704cdb03d619ba8067->enter($__internal_71a52c2d27177751227f831306eeb4ea1553154d43353b704cdb03d619ba8067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Helper/render_image.html.twig"));

        $__internal_dc54e08d98bb68d327fa429af6ac6b5ed05a98e661435561bc0b2f5c4737c168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc54e08d98bb68d327fa429af6ac6b5ed05a98e661435561bc0b2f5c4737c168->enter($__internal_dc54e08d98bb68d327fa429af6ac6b5ed05a98e661435561bc0b2f5c4737c168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Helper/render_image.html.twig"));

        // line 9
        if ((isset($context["image_name"]) ? $context["image_name"] : $this->getContext($context, "image_name"))) {
            // line 10
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . "/") . (isset($context["image_name"]) ? $context["image_name"] : $this->getContext($context, "image_name")))), "html", null, true);
            echo "\" />
";
        }
        
        $__internal_71a52c2d27177751227f831306eeb4ea1553154d43353b704cdb03d619ba8067->leave($__internal_71a52c2d27177751227f831306eeb4ea1553154d43353b704cdb03d619ba8067_prof);

        
        $__internal_dc54e08d98bb68d327fa429af6ac6b5ed05a98e661435561bc0b2f5c4737c168->leave($__internal_dc54e08d98bb68d327fa429af6ac6b5ed05a98e661435561bc0b2f5c4737c168_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Helper/render_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% if image_name %}
    <img src=\"{{ asset(path ~ '/' ~ image_name) }}\" />
{% endif %}
", "@SgDatatables/Helper/render_image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Helper\\render_image.html.twig");
    }
}
