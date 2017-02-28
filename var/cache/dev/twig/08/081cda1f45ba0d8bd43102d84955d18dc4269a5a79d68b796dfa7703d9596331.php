<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8aca62dec61eb97bc00bf257f9163e2a2a2fd0ff96c4f4ca3558630e66cf6001 extends Twig_Template
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
        $__internal_96a91cdd9f6762b37d473e6495c2a756020e35f9cd44021ca82711b568e195bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a91cdd9f6762b37d473e6495c2a756020e35f9cd44021ca82711b568e195bd->enter($__internal_96a91cdd9f6762b37d473e6495c2a756020e35f9cd44021ca82711b568e195bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a4a547c4e2a260f416ca68e04ee1b889acdb03177558ef6caa27bcc1de5b7a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a547c4e2a260f416ca68e04ee1b889acdb03177558ef6caa27bcc1de5b7a42->enter($__internal_a4a547c4e2a260f416ca68e04ee1b889acdb03177558ef6caa27bcc1de5b7a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_96a91cdd9f6762b37d473e6495c2a756020e35f9cd44021ca82711b568e195bd->leave($__internal_96a91cdd9f6762b37d473e6495c2a756020e35f9cd44021ca82711b568e195bd_prof);

        
        $__internal_a4a547c4e2a260f416ca68e04ee1b889acdb03177558ef6caa27bcc1de5b7a42->leave($__internal_a4a547c4e2a260f416ca68e04ee1b889acdb03177558ef6caa27bcc1de5b7a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
