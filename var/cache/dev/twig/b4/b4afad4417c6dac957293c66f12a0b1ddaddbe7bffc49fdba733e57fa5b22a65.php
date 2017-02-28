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
        $__internal_1c5242b77ef1fc7c7bdb9f92da4c8470e51247658ebca3609101e52a5c00c0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5242b77ef1fc7c7bdb9f92da4c8470e51247658ebca3609101e52a5c00c0a3->enter($__internal_1c5242b77ef1fc7c7bdb9f92da4c8470e51247658ebca3609101e52a5c00c0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f8521719dd459d83bd8e55a92f07d543f7aa64f6e40e691be0a1e1bf87a70ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8521719dd459d83bd8e55a92f07d543f7aa64f6e40e691be0a1e1bf87a70ab3->enter($__internal_f8521719dd459d83bd8e55a92f07d543f7aa64f6e40e691be0a1e1bf87a70ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1c5242b77ef1fc7c7bdb9f92da4c8470e51247658ebca3609101e52a5c00c0a3->leave($__internal_1c5242b77ef1fc7c7bdb9f92da4c8470e51247658ebca3609101e52a5c00c0a3_prof);

        
        $__internal_f8521719dd459d83bd8e55a92f07d543f7aa64f6e40e691be0a1e1bf87a70ab3->leave($__internal_f8521719dd459d83bd8e55a92f07d543f7aa64f6e40e691be0a1e1bf87a70ab3_prof);

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
