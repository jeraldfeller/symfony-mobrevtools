<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4e19a8f4756a5d0eb0db6f699d77a0eb54e481e647a569bd8d066a9683a94b13 extends Twig_Template
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
        $__internal_2a789c80ccef23838095185fd81932e11c9857778d817d11e173e3fce4e1228e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a789c80ccef23838095185fd81932e11c9857778d817d11e173e3fce4e1228e->enter($__internal_2a789c80ccef23838095185fd81932e11c9857778d817d11e173e3fce4e1228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e2e7f0305c6c21677c581c9e19122414e51bad902385b2bd9ca34bef1ab06073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e7f0305c6c21677c581c9e19122414e51bad902385b2bd9ca34bef1ab06073->enter($__internal_e2e7f0305c6c21677c581c9e19122414e51bad902385b2bd9ca34bef1ab06073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2a789c80ccef23838095185fd81932e11c9857778d817d11e173e3fce4e1228e->leave($__internal_2a789c80ccef23838095185fd81932e11c9857778d817d11e173e3fce4e1228e_prof);

        
        $__internal_e2e7f0305c6c21677c581c9e19122414e51bad902385b2bd9ca34bef1ab06073->leave($__internal_e2e7f0305c6c21677c581c9e19122414e51bad902385b2bd9ca34bef1ab06073_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
