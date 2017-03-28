<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_7af98f1931d283f6fd5c5b82469d7a0c90089a21863f091acb8f6df70bce251b extends Twig_Template
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
        $__internal_c4197bcc38d193a293808d71cb9a9fe1091abfab821b22cb13b581542e5fa75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4197bcc38d193a293808d71cb9a9fe1091abfab821b22cb13b581542e5fa75b->enter($__internal_c4197bcc38d193a293808d71cb9a9fe1091abfab821b22cb13b581542e5fa75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_8443f8df8bf461df3f14a321d736607af25bf9dbe9efe39f6588ed224874c44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8443f8df8bf461df3f14a321d736607af25bf9dbe9efe39f6588ed224874c44d->enter($__internal_8443f8df8bf461df3f14a321d736607af25bf9dbe9efe39f6588ed224874c44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_c4197bcc38d193a293808d71cb9a9fe1091abfab821b22cb13b581542e5fa75b->leave($__internal_c4197bcc38d193a293808d71cb9a9fe1091abfab821b22cb13b581542e5fa75b_prof);

        
        $__internal_8443f8df8bf461df3f14a321d736607af25bf9dbe9efe39f6588ed224874c44d->leave($__internal_8443f8df8bf461df3f14a321d736607af25bf9dbe9efe39f6588ed224874c44d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.html.twig");
    }
}
