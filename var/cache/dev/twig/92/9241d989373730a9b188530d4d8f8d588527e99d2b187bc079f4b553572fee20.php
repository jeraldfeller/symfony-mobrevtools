<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_481308b08f13e5baa20b17f98841bae66981ec0f855782cd9300affa412bfc1d extends Twig_Template
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
        $__internal_ac1b1b1db10ea827e5937ecd02769b6e9c555e0328cf8d2d4cb3313db18b191e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1b1b1db10ea827e5937ecd02769b6e9c555e0328cf8d2d4cb3313db18b191e->enter($__internal_ac1b1b1db10ea827e5937ecd02769b6e9c555e0328cf8d2d4cb3313db18b191e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_620760f2f35e2d782ea1a1b19034dfcc95896049561d8dafe2af45e2277ba3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620760f2f35e2d782ea1a1b19034dfcc95896049561d8dafe2af45e2277ba3c3->enter($__internal_620760f2f35e2d782ea1a1b19034dfcc95896049561d8dafe2af45e2277ba3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_ac1b1b1db10ea827e5937ecd02769b6e9c555e0328cf8d2d4cb3313db18b191e->leave($__internal_ac1b1b1db10ea827e5937ecd02769b6e9c555e0328cf8d2d4cb3313db18b191e_prof);

        
        $__internal_620760f2f35e2d782ea1a1b19034dfcc95896049561d8dafe2af45e2277ba3c3->leave($__internal_620760f2f35e2d782ea1a1b19034dfcc95896049561d8dafe2af45e2277ba3c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
