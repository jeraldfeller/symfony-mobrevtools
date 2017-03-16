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
        $__internal_594e2b8e25a53d9128d13f7a97561ba100eb70bb730fa59fcc5c6ac90770c4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594e2b8e25a53d9128d13f7a97561ba100eb70bb730fa59fcc5c6ac90770c4da->enter($__internal_594e2b8e25a53d9128d13f7a97561ba100eb70bb730fa59fcc5c6ac90770c4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c106c4cab02dfa4dda684779a03d6a36a5b4ebc70c480912da28c87144e35952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c106c4cab02dfa4dda684779a03d6a36a5b4ebc70c480912da28c87144e35952->enter($__internal_c106c4cab02dfa4dda684779a03d6a36a5b4ebc70c480912da28c87144e35952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_594e2b8e25a53d9128d13f7a97561ba100eb70bb730fa59fcc5c6ac90770c4da->leave($__internal_594e2b8e25a53d9128d13f7a97561ba100eb70bb730fa59fcc5c6ac90770c4da_prof);

        
        $__internal_c106c4cab02dfa4dda684779a03d6a36a5b4ebc70c480912da28c87144e35952->leave($__internal_c106c4cab02dfa4dda684779a03d6a36a5b4ebc70c480912da28c87144e35952_prof);

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
