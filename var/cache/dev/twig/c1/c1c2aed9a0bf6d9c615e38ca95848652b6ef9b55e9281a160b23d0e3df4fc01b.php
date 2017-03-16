<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ea9f09f42916f8f4acf778706cca9ddd20b59b9dcc0dac08f191931aa642121e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_440ecaf08455b847b196889f85b17d4e3e58a22782082b115ed466e4dc452d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440ecaf08455b847b196889f85b17d4e3e58a22782082b115ed466e4dc452d6d->enter($__internal_440ecaf08455b847b196889f85b17d4e3e58a22782082b115ed466e4dc452d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2126276cec90eff7f053935471067bf8b692ae6a52f6e01b022bcafbb44c2b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2126276cec90eff7f053935471067bf8b692ae6a52f6e01b022bcafbb44c2b88->enter($__internal_2126276cec90eff7f053935471067bf8b692ae6a52f6e01b022bcafbb44c2b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440ecaf08455b847b196889f85b17d4e3e58a22782082b115ed466e4dc452d6d->leave($__internal_440ecaf08455b847b196889f85b17d4e3e58a22782082b115ed466e4dc452d6d_prof);

        
        $__internal_2126276cec90eff7f053935471067bf8b692ae6a52f6e01b022bcafbb44c2b88->leave($__internal_2126276cec90eff7f053935471067bf8b692ae6a52f6e01b022bcafbb44c2b88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f2636f4cc4514d0f56627b2c2e2744ec68e8af6e0d47f1029378a6e314a1173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2636f4cc4514d0f56627b2c2e2744ec68e8af6e0d47f1029378a6e314a1173->enter($__internal_4f2636f4cc4514d0f56627b2c2e2744ec68e8af6e0d47f1029378a6e314a1173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f19acea517c7b3585317faba1e8ea89d2ec6b223737588e3a0846c7cfbe5250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f19acea517c7b3585317faba1e8ea89d2ec6b223737588e3a0846c7cfbe5250->enter($__internal_3f19acea517c7b3585317faba1e8ea89d2ec6b223737588e3a0846c7cfbe5250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3f19acea517c7b3585317faba1e8ea89d2ec6b223737588e3a0846c7cfbe5250->leave($__internal_3f19acea517c7b3585317faba1e8ea89d2ec6b223737588e3a0846c7cfbe5250_prof);

        
        $__internal_4f2636f4cc4514d0f56627b2c2e2744ec68e8af6e0d47f1029378a6e314a1173->leave($__internal_4f2636f4cc4514d0f56627b2c2e2744ec68e8af6e0d47f1029378a6e314a1173_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69db59ea3000f2a07cda1d35844fc2972489145439b3d601423aa649795274cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69db59ea3000f2a07cda1d35844fc2972489145439b3d601423aa649795274cb->enter($__internal_69db59ea3000f2a07cda1d35844fc2972489145439b3d601423aa649795274cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_499d9d480c9cf5445a9520aed1118e22eff8395039632f76c8b2115617eb4740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499d9d480c9cf5445a9520aed1118e22eff8395039632f76c8b2115617eb4740->enter($__internal_499d9d480c9cf5445a9520aed1118e22eff8395039632f76c8b2115617eb4740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_499d9d480c9cf5445a9520aed1118e22eff8395039632f76c8b2115617eb4740->leave($__internal_499d9d480c9cf5445a9520aed1118e22eff8395039632f76c8b2115617eb4740_prof);

        
        $__internal_69db59ea3000f2a07cda1d35844fc2972489145439b3d601423aa649795274cb->leave($__internal_69db59ea3000f2a07cda1d35844fc2972489145439b3d601423aa649795274cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
