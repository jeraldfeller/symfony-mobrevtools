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
        $__internal_891bdf60b739d481af1315874c125136228118a4794568176fca51a5931bcee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891bdf60b739d481af1315874c125136228118a4794568176fca51a5931bcee5->enter($__internal_891bdf60b739d481af1315874c125136228118a4794568176fca51a5931bcee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ca643602de8463e36f7efb98625c9f4f9f40f62e9808d0a38fc4ab9ab4aa2adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca643602de8463e36f7efb98625c9f4f9f40f62e9808d0a38fc4ab9ab4aa2adc->enter($__internal_ca643602de8463e36f7efb98625c9f4f9f40f62e9808d0a38fc4ab9ab4aa2adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_891bdf60b739d481af1315874c125136228118a4794568176fca51a5931bcee5->leave($__internal_891bdf60b739d481af1315874c125136228118a4794568176fca51a5931bcee5_prof);

        
        $__internal_ca643602de8463e36f7efb98625c9f4f9f40f62e9808d0a38fc4ab9ab4aa2adc->leave($__internal_ca643602de8463e36f7efb98625c9f4f9f40f62e9808d0a38fc4ab9ab4aa2adc_prof);

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
