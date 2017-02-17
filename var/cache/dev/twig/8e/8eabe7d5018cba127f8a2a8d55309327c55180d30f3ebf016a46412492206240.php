<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c8287e6c1718ee83185ccee193ca0d8e662b762317d9561543762329bc9deb40 extends Twig_Template
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
        $__internal_217788f1d5ddc843138b952b7daf71ce6ba483f9c4466422b178d14e3721d29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217788f1d5ddc843138b952b7daf71ce6ba483f9c4466422b178d14e3721d29d->enter($__internal_217788f1d5ddc843138b952b7daf71ce6ba483f9c4466422b178d14e3721d29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_1afdd93bc2108ac0fe19b516212b16b7a202d9a1c4d1aef72c4caeff6824b8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afdd93bc2108ac0fe19b516212b16b7a202d9a1c4d1aef72c4caeff6824b8ef->enter($__internal_1afdd93bc2108ac0fe19b516212b16b7a202d9a1c4d1aef72c4caeff6824b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_217788f1d5ddc843138b952b7daf71ce6ba483f9c4466422b178d14e3721d29d->leave($__internal_217788f1d5ddc843138b952b7daf71ce6ba483f9c4466422b178d14e3721d29d_prof);

        
        $__internal_1afdd93bc2108ac0fe19b516212b16b7a202d9a1c4d1aef72c4caeff6824b8ef->leave($__internal_1afdd93bc2108ac0fe19b516212b16b7a202d9a1c4d1aef72c4caeff6824b8ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
