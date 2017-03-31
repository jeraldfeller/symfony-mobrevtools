<?php

/* SgDatatablesBundle:Helper:render_image.html.twig */
class __TwigTemplate_8d0be78935a654b1dc8478efa35c910006b9f557bbb6d1a5b8d62732155b7a89 extends Twig_Template
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
        $__internal_a3a94f864ab795ff261ed7f5769d3daa8471be3cb45411c7d1ebe3db4e527237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a94f864ab795ff261ed7f5769d3daa8471be3cb45411c7d1ebe3db4e527237->enter($__internal_a3a94f864ab795ff261ed7f5769d3daa8471be3cb45411c7d1ebe3db4e527237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Helper:render_image.html.twig"));

        $__internal_f8b4b84ec829633053d21af5fad8c2ecf93ca3ec188268f4285ac22992e9470e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b4b84ec829633053d21af5fad8c2ecf93ca3ec188268f4285ac22992e9470e->enter($__internal_f8b4b84ec829633053d21af5fad8c2ecf93ca3ec188268f4285ac22992e9470e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Helper:render_image.html.twig"));

        // line 9
        if ((isset($context["image_name"]) ? $context["image_name"] : $this->getContext($context, "image_name"))) {
            // line 10
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . "/") . (isset($context["image_name"]) ? $context["image_name"] : $this->getContext($context, "image_name")))), "html", null, true);
            echo "\" />
";
        }
        
        $__internal_a3a94f864ab795ff261ed7f5769d3daa8471be3cb45411c7d1ebe3db4e527237->leave($__internal_a3a94f864ab795ff261ed7f5769d3daa8471be3cb45411c7d1ebe3db4e527237_prof);

        
        $__internal_f8b4b84ec829633053d21af5fad8c2ecf93ca3ec188268f4285ac22992e9470e->leave($__internal_f8b4b84ec829633053d21af5fad8c2ecf93ca3ec188268f4285ac22992e9470e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Helper:render_image.html.twig";
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
", "SgDatatablesBundle:Helper:render_image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Helper/render_image.html.twig");
    }
}
