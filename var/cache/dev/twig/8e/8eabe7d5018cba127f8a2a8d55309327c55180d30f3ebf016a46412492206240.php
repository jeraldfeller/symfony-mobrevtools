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
        $__internal_1a2f2b481c24577223b04306264c7f849b6dd1e43039790f419a624ca729080f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2f2b481c24577223b04306264c7f849b6dd1e43039790f419a624ca729080f->enter($__internal_1a2f2b481c24577223b04306264c7f849b6dd1e43039790f419a624ca729080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_fadc53560b0d2cb45dea7a3cdb45ce2fa672f696b3dafcdf7fb2591ebc1ef7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadc53560b0d2cb45dea7a3cdb45ce2fa672f696b3dafcdf7fb2591ebc1ef7bc->enter($__internal_fadc53560b0d2cb45dea7a3cdb45ce2fa672f696b3dafcdf7fb2591ebc1ef7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_1a2f2b481c24577223b04306264c7f849b6dd1e43039790f419a624ca729080f->leave($__internal_1a2f2b481c24577223b04306264c7f849b6dd1e43039790f419a624ca729080f_prof);

        
        $__internal_fadc53560b0d2cb45dea7a3cdb45ce2fa672f696b3dafcdf7fb2591ebc1ef7bc->leave($__internal_fadc53560b0d2cb45dea7a3cdb45ce2fa672f696b3dafcdf7fb2591ebc1ef7bc_prof);

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
