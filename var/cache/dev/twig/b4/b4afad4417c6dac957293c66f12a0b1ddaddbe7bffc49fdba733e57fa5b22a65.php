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
        $__internal_478bd9bda3a6f54310c3885647cb13a17713ee4c40c64b447d7e33c3889f1bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478bd9bda3a6f54310c3885647cb13a17713ee4c40c64b447d7e33c3889f1bd0->enter($__internal_478bd9bda3a6f54310c3885647cb13a17713ee4c40c64b447d7e33c3889f1bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8c176c7e64808f936b5f14610d972a4f0348bd4448a0213d492d395b4a47b7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c176c7e64808f936b5f14610d972a4f0348bd4448a0213d492d395b4a47b7cc->enter($__internal_8c176c7e64808f936b5f14610d972a4f0348bd4448a0213d492d395b4a47b7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_478bd9bda3a6f54310c3885647cb13a17713ee4c40c64b447d7e33c3889f1bd0->leave($__internal_478bd9bda3a6f54310c3885647cb13a17713ee4c40c64b447d7e33c3889f1bd0_prof);

        
        $__internal_8c176c7e64808f936b5f14610d972a4f0348bd4448a0213d492d395b4a47b7cc->leave($__internal_8c176c7e64808f936b5f14610d972a4f0348bd4448a0213d492d395b4a47b7cc_prof);

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
