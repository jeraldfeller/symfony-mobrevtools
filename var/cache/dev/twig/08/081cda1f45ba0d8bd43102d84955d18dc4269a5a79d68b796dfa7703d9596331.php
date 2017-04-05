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
        $__internal_6d6ce4afd7367f17c08c5269d938bb8e3cb4fd5b5a09d4eeb7f9b8fffe64122c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6ce4afd7367f17c08c5269d938bb8e3cb4fd5b5a09d4eeb7f9b8fffe64122c->enter($__internal_6d6ce4afd7367f17c08c5269d938bb8e3cb4fd5b5a09d4eeb7f9b8fffe64122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_562c4e46d93f408af3b69d5ba6568c1b1e6816904787022cada475be05503ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562c4e46d93f408af3b69d5ba6568c1b1e6816904787022cada475be05503ddb->enter($__internal_562c4e46d93f408af3b69d5ba6568c1b1e6816904787022cada475be05503ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6d6ce4afd7367f17c08c5269d938bb8e3cb4fd5b5a09d4eeb7f9b8fffe64122c->leave($__internal_6d6ce4afd7367f17c08c5269d938bb8e3cb4fd5b5a09d4eeb7f9b8fffe64122c_prof);

        
        $__internal_562c4e46d93f408af3b69d5ba6568c1b1e6816904787022cada475be05503ddb->leave($__internal_562c4e46d93f408af3b69d5ba6568c1b1e6816904787022cada475be05503ddb_prof);

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
