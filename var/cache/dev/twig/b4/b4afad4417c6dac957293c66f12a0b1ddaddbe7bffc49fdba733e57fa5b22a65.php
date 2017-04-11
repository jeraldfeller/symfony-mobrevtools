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
        $__internal_5639ab909d300960a5a4f451fe7c802edbe8e8941d4b3066e10b15fc42abd3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5639ab909d300960a5a4f451fe7c802edbe8e8941d4b3066e10b15fc42abd3c2->enter($__internal_5639ab909d300960a5a4f451fe7c802edbe8e8941d4b3066e10b15fc42abd3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_e6d017bdff21db9bfacdbc0966a2d6d0d0eda1168ac108b1b86c1e025d42df5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d017bdff21db9bfacdbc0966a2d6d0d0eda1168ac108b1b86c1e025d42df5a->enter($__internal_e6d017bdff21db9bfacdbc0966a2d6d0d0eda1168ac108b1b86c1e025d42df5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5639ab909d300960a5a4f451fe7c802edbe8e8941d4b3066e10b15fc42abd3c2->leave($__internal_5639ab909d300960a5a4f451fe7c802edbe8e8941d4b3066e10b15fc42abd3c2_prof);

        
        $__internal_e6d017bdff21db9bfacdbc0966a2d6d0d0eda1168ac108b1b86c1e025d42df5a->leave($__internal_e6d017bdff21db9bfacdbc0966a2d6d0d0eda1168ac108b1b86c1e025d42df5a_prof);

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
