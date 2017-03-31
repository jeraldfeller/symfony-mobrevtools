<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85d12e649210931c67134325f95080093f5d5f05409e9d2829f43e0fa7ad76d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38b8dc9d68bfaefe699719be3889aa30880334b5160c1c5c6547c73a71add8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b8dc9d68bfaefe699719be3889aa30880334b5160c1c5c6547c73a71add8e4->enter($__internal_38b8dc9d68bfaefe699719be3889aa30880334b5160c1c5c6547c73a71add8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0be40c68b822f72d9fb41370a77fcbd5eb2bdfc483ddc340e8792cab8e943140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be40c68b822f72d9fb41370a77fcbd5eb2bdfc483ddc340e8792cab8e943140->enter($__internal_0be40c68b822f72d9fb41370a77fcbd5eb2bdfc483ddc340e8792cab8e943140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b8dc9d68bfaefe699719be3889aa30880334b5160c1c5c6547c73a71add8e4->leave($__internal_38b8dc9d68bfaefe699719be3889aa30880334b5160c1c5c6547c73a71add8e4_prof);

        
        $__internal_0be40c68b822f72d9fb41370a77fcbd5eb2bdfc483ddc340e8792cab8e943140->leave($__internal_0be40c68b822f72d9fb41370a77fcbd5eb2bdfc483ddc340e8792cab8e943140_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3d3fe73ae6aa8e5a17b73b57d4f9bbaa30059c2013224eef1effbcfe1eaf0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d3fe73ae6aa8e5a17b73b57d4f9bbaa30059c2013224eef1effbcfe1eaf0b1->enter($__internal_e3d3fe73ae6aa8e5a17b73b57d4f9bbaa30059c2013224eef1effbcfe1eaf0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e880a84fd66a4d253e5e47a124fa9c606c88bd017cbdba71ac0483c355425f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e880a84fd66a4d253e5e47a124fa9c606c88bd017cbdba71ac0483c355425f93->enter($__internal_e880a84fd66a4d253e5e47a124fa9c606c88bd017cbdba71ac0483c355425f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e880a84fd66a4d253e5e47a124fa9c606c88bd017cbdba71ac0483c355425f93->leave($__internal_e880a84fd66a4d253e5e47a124fa9c606c88bd017cbdba71ac0483c355425f93_prof);

        
        $__internal_e3d3fe73ae6aa8e5a17b73b57d4f9bbaa30059c2013224eef1effbcfe1eaf0b1->leave($__internal_e3d3fe73ae6aa8e5a17b73b57d4f9bbaa30059c2013224eef1effbcfe1eaf0b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67e648cd6eab97b9190e8c98ad0b323cf5045a0f4751cd97dfc4958787ce4f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e648cd6eab97b9190e8c98ad0b323cf5045a0f4751cd97dfc4958787ce4f44->enter($__internal_67e648cd6eab97b9190e8c98ad0b323cf5045a0f4751cd97dfc4958787ce4f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3fedd25d632cf49a5b5296cc344d8b114e287ca0efccb846b0e937b979490a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fedd25d632cf49a5b5296cc344d8b114e287ca0efccb846b0e937b979490a3f->enter($__internal_3fedd25d632cf49a5b5296cc344d8b114e287ca0efccb846b0e937b979490a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3fedd25d632cf49a5b5296cc344d8b114e287ca0efccb846b0e937b979490a3f->leave($__internal_3fedd25d632cf49a5b5296cc344d8b114e287ca0efccb846b0e937b979490a3f_prof);

        
        $__internal_67e648cd6eab97b9190e8c98ad0b323cf5045a0f4751cd97dfc4958787ce4f44->leave($__internal_67e648cd6eab97b9190e8c98ad0b323cf5045a0f4751cd97dfc4958787ce4f44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6db51c3ebc931fc0b1917728b70d1485f78c9e13c25e1a9f6dce725e7fa2f6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db51c3ebc931fc0b1917728b70d1485f78c9e13c25e1a9f6dce725e7fa2f6c3->enter($__internal_6db51c3ebc931fc0b1917728b70d1485f78c9e13c25e1a9f6dce725e7fa2f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51bbd45c76c28bdce7b112a6f672aec4268c0514e72b5f522d51945d5bc8c66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bbd45c76c28bdce7b112a6f672aec4268c0514e72b5f522d51945d5bc8c66f->enter($__internal_51bbd45c76c28bdce7b112a6f672aec4268c0514e72b5f522d51945d5bc8c66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51bbd45c76c28bdce7b112a6f672aec4268c0514e72b5f522d51945d5bc8c66f->leave($__internal_51bbd45c76c28bdce7b112a6f672aec4268c0514e72b5f522d51945d5bc8c66f_prof);

        
        $__internal_6db51c3ebc931fc0b1917728b70d1485f78c9e13c25e1a9f6dce725e7fa2f6c3->leave($__internal_6db51c3ebc931fc0b1917728b70d1485f78c9e13c25e1a9f6dce725e7fa2f6c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
