<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_65bfc4a9a0bc488f281744b29523ec51b48d53ece84b5c098cd12d84506f5f7c extends Twig_Template
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
        $__internal_5330a3a23186d15e3d6283e9bba616c7dd3a4e9738b9074a7f5b802abdd16aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5330a3a23186d15e3d6283e9bba616c7dd3a4e9738b9074a7f5b802abdd16aea->enter($__internal_5330a3a23186d15e3d6283e9bba616c7dd3a4e9738b9074a7f5b802abdd16aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_da637e4c11ab79fbf4bb4e06e8ddb5e79de4eb4861fb70e032f107419403cf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da637e4c11ab79fbf4bb4e06e8ddb5e79de4eb4861fb70e032f107419403cf3d->enter($__internal_da637e4c11ab79fbf4bb4e06e8ddb5e79de4eb4861fb70e032f107419403cf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5330a3a23186d15e3d6283e9bba616c7dd3a4e9738b9074a7f5b802abdd16aea->leave($__internal_5330a3a23186d15e3d6283e9bba616c7dd3a4e9738b9074a7f5b802abdd16aea_prof);

        
        $__internal_da637e4c11ab79fbf4bb4e06e8ddb5e79de4eb4861fb70e032f107419403cf3d->leave($__internal_da637e4c11ab79fbf4bb4e06e8ddb5e79de4eb4861fb70e032f107419403cf3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
