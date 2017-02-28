<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b31faf33acb6580f2518af58e518959bf663ec64bf509e9f868a531ec7373308 extends Twig_Template
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
        $__internal_650eb8a1d8f212893846a3e201577d61be77a051797ac516d6b92c632a57a62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650eb8a1d8f212893846a3e201577d61be77a051797ac516d6b92c632a57a62a->enter($__internal_650eb8a1d8f212893846a3e201577d61be77a051797ac516d6b92c632a57a62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b236acebcd4021746357c2eb0158270b8190b52589649b5f2d7eec5e95a69f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b236acebcd4021746357c2eb0158270b8190b52589649b5f2d7eec5e95a69f5b->enter($__internal_b236acebcd4021746357c2eb0158270b8190b52589649b5f2d7eec5e95a69f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_650eb8a1d8f212893846a3e201577d61be77a051797ac516d6b92c632a57a62a->leave($__internal_650eb8a1d8f212893846a3e201577d61be77a051797ac516d6b92c632a57a62a_prof);

        
        $__internal_b236acebcd4021746357c2eb0158270b8190b52589649b5f2d7eec5e95a69f5b->leave($__internal_b236acebcd4021746357c2eb0158270b8190b52589649b5f2d7eec5e95a69f5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
