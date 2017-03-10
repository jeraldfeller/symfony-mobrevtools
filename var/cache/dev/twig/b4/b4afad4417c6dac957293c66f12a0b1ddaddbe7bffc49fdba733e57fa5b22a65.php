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
        $__internal_74a29a134c482681854e54d2128ed4646a3c1740e9368b87f3d2bf8f050375fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a29a134c482681854e54d2128ed4646a3c1740e9368b87f3d2bf8f050375fb->enter($__internal_74a29a134c482681854e54d2128ed4646a3c1740e9368b87f3d2bf8f050375fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8952c5d129e30f78992e766983164c378fc80a236598f5c30f68ad3296434dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8952c5d129e30f78992e766983164c378fc80a236598f5c30f68ad3296434dd5->enter($__internal_8952c5d129e30f78992e766983164c378fc80a236598f5c30f68ad3296434dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_74a29a134c482681854e54d2128ed4646a3c1740e9368b87f3d2bf8f050375fb->leave($__internal_74a29a134c482681854e54d2128ed4646a3c1740e9368b87f3d2bf8f050375fb_prof);

        
        $__internal_8952c5d129e30f78992e766983164c378fc80a236598f5c30f68ad3296434dd5->leave($__internal_8952c5d129e30f78992e766983164c378fc80a236598f5c30f68ad3296434dd5_prof);

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
