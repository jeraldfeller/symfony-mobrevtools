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
        $__internal_80963dafe0f90346cb08e20c78b1af615f24d6c44e766606e985c78236af3cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80963dafe0f90346cb08e20c78b1af615f24d6c44e766606e985c78236af3cc4->enter($__internal_80963dafe0f90346cb08e20c78b1af615f24d6c44e766606e985c78236af3cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_9dd65f39e9de9a6bb8d91db4605b213618b26b2b4cda480ae6c173f00dc31b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd65f39e9de9a6bb8d91db4605b213618b26b2b4cda480ae6c173f00dc31b8a->enter($__internal_9dd65f39e9de9a6bb8d91db4605b213618b26b2b4cda480ae6c173f00dc31b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_80963dafe0f90346cb08e20c78b1af615f24d6c44e766606e985c78236af3cc4->leave($__internal_80963dafe0f90346cb08e20c78b1af615f24d6c44e766606e985c78236af3cc4_prof);

        
        $__internal_9dd65f39e9de9a6bb8d91db4605b213618b26b2b4cda480ae6c173f00dc31b8a->leave($__internal_9dd65f39e9de9a6bb8d91db4605b213618b26b2b4cda480ae6c173f00dc31b8a_prof);

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
