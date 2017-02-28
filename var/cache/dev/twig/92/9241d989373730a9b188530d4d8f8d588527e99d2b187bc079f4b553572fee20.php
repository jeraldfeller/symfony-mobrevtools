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
        $__internal_d6309832e59fd0927d0ed88e35ed60c01ed537759f14144345f6675bdb61a354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6309832e59fd0927d0ed88e35ed60c01ed537759f14144345f6675bdb61a354->enter($__internal_d6309832e59fd0927d0ed88e35ed60c01ed537759f14144345f6675bdb61a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_31f89b11d2fef16d5e82de0c1601fbc9dbf0dbebc54503b43cd64683a8afa4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f89b11d2fef16d5e82de0c1601fbc9dbf0dbebc54503b43cd64683a8afa4b5->enter($__internal_31f89b11d2fef16d5e82de0c1601fbc9dbf0dbebc54503b43cd64683a8afa4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_d6309832e59fd0927d0ed88e35ed60c01ed537759f14144345f6675bdb61a354->leave($__internal_d6309832e59fd0927d0ed88e35ed60c01ed537759f14144345f6675bdb61a354_prof);

        
        $__internal_31f89b11d2fef16d5e82de0c1601fbc9dbf0dbebc54503b43cd64683a8afa4b5->leave($__internal_31f89b11d2fef16d5e82de0c1601fbc9dbf0dbebc54503b43cd64683a8afa4b5_prof);

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
