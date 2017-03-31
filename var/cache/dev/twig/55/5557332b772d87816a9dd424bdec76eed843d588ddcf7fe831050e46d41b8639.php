<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40e04ab35e201a050e0c92843a8e62800a6de49c6101e521cb09805916766f75 extends Twig_Template
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
        $__internal_afecc8244fb1dba126a550eff3900ccdac001e0bf3b12d86b42f62b949b7bb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afecc8244fb1dba126a550eff3900ccdac001e0bf3b12d86b42f62b949b7bb92->enter($__internal_afecc8244fb1dba126a550eff3900ccdac001e0bf3b12d86b42f62b949b7bb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1d6fdbc2b8adb130d3244b14f5cfe652d8a19c8efa0047b4dcb73dbbabbf55ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6fdbc2b8adb130d3244b14f5cfe652d8a19c8efa0047b4dcb73dbbabbf55ea->enter($__internal_1d6fdbc2b8adb130d3244b14f5cfe652d8a19c8efa0047b4dcb73dbbabbf55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_afecc8244fb1dba126a550eff3900ccdac001e0bf3b12d86b42f62b949b7bb92->leave($__internal_afecc8244fb1dba126a550eff3900ccdac001e0bf3b12d86b42f62b949b7bb92_prof);

        
        $__internal_1d6fdbc2b8adb130d3244b14f5cfe652d8a19c8efa0047b4dcb73dbbabbf55ea->leave($__internal_1d6fdbc2b8adb130d3244b14f5cfe652d8a19c8efa0047b4dcb73dbbabbf55ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
