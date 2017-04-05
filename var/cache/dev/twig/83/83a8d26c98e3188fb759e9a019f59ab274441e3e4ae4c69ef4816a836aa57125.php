<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_147c6566f0d121f9d3fb0b62451eff05c8095f134a9f98cbdb8f502375c3b250 extends Twig_Template
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
        $__internal_7a00f51aed406ccd8e165d8126f9ced2c9ede8bdb65eaa6fe1a6aa2f3cae6c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a00f51aed406ccd8e165d8126f9ced2c9ede8bdb65eaa6fe1a6aa2f3cae6c23->enter($__internal_7a00f51aed406ccd8e165d8126f9ced2c9ede8bdb65eaa6fe1a6aa2f3cae6c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_507bf3feee95a80634030f8957a966cce6ebff05b456bec5ced2ec783a81336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507bf3feee95a80634030f8957a966cce6ebff05b456bec5ced2ec783a81336c->enter($__internal_507bf3feee95a80634030f8957a966cce6ebff05b456bec5ced2ec783a81336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7a00f51aed406ccd8e165d8126f9ced2c9ede8bdb65eaa6fe1a6aa2f3cae6c23->leave($__internal_7a00f51aed406ccd8e165d8126f9ced2c9ede8bdb65eaa6fe1a6aa2f3cae6c23_prof);

        
        $__internal_507bf3feee95a80634030f8957a966cce6ebff05b456bec5ced2ec783a81336c->leave($__internal_507bf3feee95a80634030f8957a966cce6ebff05b456bec5ced2ec783a81336c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
