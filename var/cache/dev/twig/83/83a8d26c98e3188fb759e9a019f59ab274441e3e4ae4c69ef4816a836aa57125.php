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
        $__internal_8a9c07054de491273e0491aa07c2fbed569b0fb82c143f945c2f1d5c6b7da080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9c07054de491273e0491aa07c2fbed569b0fb82c143f945c2f1d5c6b7da080->enter($__internal_8a9c07054de491273e0491aa07c2fbed569b0fb82c143f945c2f1d5c6b7da080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_39eeb7ad073f9ea95fb317f61fc7363d217656d3584415046195fd4b164b144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eeb7ad073f9ea95fb317f61fc7363d217656d3584415046195fd4b164b144a->enter($__internal_39eeb7ad073f9ea95fb317f61fc7363d217656d3584415046195fd4b164b144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8a9c07054de491273e0491aa07c2fbed569b0fb82c143f945c2f1d5c6b7da080->leave($__internal_8a9c07054de491273e0491aa07c2fbed569b0fb82c143f945c2f1d5c6b7da080_prof);

        
        $__internal_39eeb7ad073f9ea95fb317f61fc7363d217656d3584415046195fd4b164b144a->leave($__internal_39eeb7ad073f9ea95fb317f61fc7363d217656d3584415046195fd4b164b144a_prof);

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
