<?php

/* navmenu/navmenu.html.twig */
class __TwigTemplate_2b1736065fe8aaf573410ea6704c554d8aee93a1f06ebc7249d664170d879508 extends Twig_Template
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
        $__internal_2f516d94e564d5505244eb46cd21084c2b9e67d304a632d5f1313a7714174693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f516d94e564d5505244eb46cd21084c2b9e67d304a632d5f1313a7714174693->enter($__internal_2f516d94e564d5505244eb46cd21084c2b9e67d304a632d5f1313a7714174693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navmenu/navmenu.html.twig"));

        $__internal_fc2c4fd0cec8a9201c24b559d9918025ab55958c4871535435477efb8be9fef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2c4fd0cec8a9201c24b559d9918025ab55958c4871535435477efb8be9fef0->enter($__internal_fc2c4fd0cec8a9201c24b559d9918025ab55958c4871535435477efb8be9fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navmenu/navmenu.html.twig"));

        // line 1
        echo "<li class=\"nav-item\">
    <a href=\"/\" class=\"nav-link nav-toggle\">
        <i class=\"icon-home\"></i>
        <span class=\"title\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["uri"]) ? $context["uri"] : $this->getContext($context, "uri")), "html", null, true);
        echo "</span>
    </a>
</li>

<li class=\"nav-item start active open\">
    <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
        <i class=\"fa fa-gears\"></i>
        <span class=\"title\">Global Settings</span>
        <span class=\"selected\"></span>
        <span class=\"arrow open\"></span>
    </a>
    <ul class=\"sub-menu\">
        <li class=\"nav-item\">
            <a href=\"/global-settings/api-access\" class=\"nav-link \">
                <span class=\"title\">API Access</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"/global-settings/traffic-source\" class=\"nav-link \">
                <span class=\"title\">Traffic Source</span>
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_2f516d94e564d5505244eb46cd21084c2b9e67d304a632d5f1313a7714174693->leave($__internal_2f516d94e564d5505244eb46cd21084c2b9e67d304a632d5f1313a7714174693_prof);

        
        $__internal_fc2c4fd0cec8a9201c24b559d9918025ab55958c4871535435477efb8be9fef0->leave($__internal_fc2c4fd0cec8a9201c24b559d9918025ab55958c4871535435477efb8be9fef0_prof);

    }

    public function getTemplateName()
    {
        return "navmenu/navmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"nav-item\">
    <a href=\"/\" class=\"nav-link nav-toggle\">
        <i class=\"icon-home\"></i>
        <span class=\"title\">{{ uri }}</span>
    </a>
</li>

<li class=\"nav-item start active open\">
    <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
        <i class=\"fa fa-gears\"></i>
        <span class=\"title\">Global Settings</span>
        <span class=\"selected\"></span>
        <span class=\"arrow open\"></span>
    </a>
    <ul class=\"sub-menu\">
        <li class=\"nav-item\">
            <a href=\"/global-settings/api-access\" class=\"nav-link \">
                <span class=\"title\">API Access</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"/global-settings/traffic-source\" class=\"nav-link \">
                <span class=\"title\">Traffic Source</span>
            </a>
        </li>
    </ul>
</li>", "navmenu/navmenu.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\navmenu\\navmenu.html.twig");
    }
}
