<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb2592bed280ed0d30d9ec8af8178824544eb5507e32b1501beebf4dc584ac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_31abb8ae0b5310551af75ff7c36c0ef40a464f95f50dfc41156230bfd182293f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31abb8ae0b5310551af75ff7c36c0ef40a464f95f50dfc41156230bfd182293f->enter($__internal_31abb8ae0b5310551af75ff7c36c0ef40a464f95f50dfc41156230bfd182293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2796a3d26edf808d328ad34e4fbfe19a211a0a46c8873d810b47f1d9d33dbdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2796a3d26edf808d328ad34e4fbfe19a211a0a46c8873d810b47f1d9d33dbdb3->enter($__internal_2796a3d26edf808d328ad34e4fbfe19a211a0a46c8873d810b47f1d9d33dbdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31abb8ae0b5310551af75ff7c36c0ef40a464f95f50dfc41156230bfd182293f->leave($__internal_31abb8ae0b5310551af75ff7c36c0ef40a464f95f50dfc41156230bfd182293f_prof);

        
        $__internal_2796a3d26edf808d328ad34e4fbfe19a211a0a46c8873d810b47f1d9d33dbdb3->leave($__internal_2796a3d26edf808d328ad34e4fbfe19a211a0a46c8873d810b47f1d9d33dbdb3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_788007a6b0b2672e354f3a698dad72691da3e5eeeb07f63029e261196fc841e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788007a6b0b2672e354f3a698dad72691da3e5eeeb07f63029e261196fc841e5->enter($__internal_788007a6b0b2672e354f3a698dad72691da3e5eeeb07f63029e261196fc841e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_11704df4ff0dd4e1a32f5c928959ef08d6cc74946030c022eab42ea30229764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11704df4ff0dd4e1a32f5c928959ef08d6cc74946030c022eab42ea30229764a->enter($__internal_11704df4ff0dd4e1a32f5c928959ef08d6cc74946030c022eab42ea30229764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11704df4ff0dd4e1a32f5c928959ef08d6cc74946030c022eab42ea30229764a->leave($__internal_11704df4ff0dd4e1a32f5c928959ef08d6cc74946030c022eab42ea30229764a_prof);

        
        $__internal_788007a6b0b2672e354f3a698dad72691da3e5eeeb07f63029e261196fc841e5->leave($__internal_788007a6b0b2672e354f3a698dad72691da3e5eeeb07f63029e261196fc841e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eeedeea202f57ce7102c2a34b221d689193405b6605d2c9100ea8b8e76e97f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeedeea202f57ce7102c2a34b221d689193405b6605d2c9100ea8b8e76e97f4d->enter($__internal_eeedeea202f57ce7102c2a34b221d689193405b6605d2c9100ea8b8e76e97f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2fd11ff6044d820506c31673bd03dd6869a4af395e6172c2073f0f02fdcc8c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd11ff6044d820506c31673bd03dd6869a4af395e6172c2073f0f02fdcc8c96->enter($__internal_2fd11ff6044d820506c31673bd03dd6869a4af395e6172c2073f0f02fdcc8c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fd11ff6044d820506c31673bd03dd6869a4af395e6172c2073f0f02fdcc8c96->leave($__internal_2fd11ff6044d820506c31673bd03dd6869a4af395e6172c2073f0f02fdcc8c96_prof);

        
        $__internal_eeedeea202f57ce7102c2a34b221d689193405b6605d2c9100ea8b8e76e97f4d->leave($__internal_eeedeea202f57ce7102c2a34b221d689193405b6605d2c9100ea8b8e76e97f4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57f071445520fe33c9452b35f7527cdfcc1755c4ac8bd86960f8c5cfd77a944b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f071445520fe33c9452b35f7527cdfcc1755c4ac8bd86960f8c5cfd77a944b->enter($__internal_57f071445520fe33c9452b35f7527cdfcc1755c4ac8bd86960f8c5cfd77a944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a1fa351170eb5b534c881b8803cc2bfaebd4f849d375453ea487b1711757f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1fa351170eb5b534c881b8803cc2bfaebd4f849d375453ea487b1711757f88->enter($__internal_2a1fa351170eb5b534c881b8803cc2bfaebd4f849d375453ea487b1711757f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a1fa351170eb5b534c881b8803cc2bfaebd4f849d375453ea487b1711757f88->leave($__internal_2a1fa351170eb5b534c881b8803cc2bfaebd4f849d375453ea487b1711757f88_prof);

        
        $__internal_57f071445520fe33c9452b35f7527cdfcc1755c4ac8bd86960f8c5cfd77a944b->leave($__internal_57f071445520fe33c9452b35f7527cdfcc1755c4ac8bd86960f8c5cfd77a944b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
