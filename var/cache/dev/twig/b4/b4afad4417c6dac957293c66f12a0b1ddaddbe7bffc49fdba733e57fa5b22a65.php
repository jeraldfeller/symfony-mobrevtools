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
        $__internal_27f429d8108fa60622339d772ce1ec554b0042a67bb2ca8fee21c91dcb50c5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f429d8108fa60622339d772ce1ec554b0042a67bb2ca8fee21c91dcb50c5df->enter($__internal_27f429d8108fa60622339d772ce1ec554b0042a67bb2ca8fee21c91dcb50c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b93954437b81f1ae68ae3c2cab11504078ec6e1986eaad91a2bbdfe9705dd2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93954437b81f1ae68ae3c2cab11504078ec6e1986eaad91a2bbdfe9705dd2fe->enter($__internal_b93954437b81f1ae68ae3c2cab11504078ec6e1986eaad91a2bbdfe9705dd2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_27f429d8108fa60622339d772ce1ec554b0042a67bb2ca8fee21c91dcb50c5df->leave($__internal_27f429d8108fa60622339d772ce1ec554b0042a67bb2ca8fee21c91dcb50c5df_prof);

        
        $__internal_b93954437b81f1ae68ae3c2cab11504078ec6e1986eaad91a2bbdfe9705dd2fe->leave($__internal_b93954437b81f1ae68ae3c2cab11504078ec6e1986eaad91a2bbdfe9705dd2fe_prof);

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
