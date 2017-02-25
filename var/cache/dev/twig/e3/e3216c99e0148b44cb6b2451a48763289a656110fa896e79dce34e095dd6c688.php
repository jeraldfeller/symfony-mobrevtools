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
        $__internal_89c721fbf8035d8552f4577a0e62c0ad0e5378bb427ebe0504f98bcc26b68de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c721fbf8035d8552f4577a0e62c0ad0e5378bb427ebe0504f98bcc26b68de2->enter($__internal_89c721fbf8035d8552f4577a0e62c0ad0e5378bb427ebe0504f98bcc26b68de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d17c258cb05d601386d3d60ed9963ecf016c853d06dec9b21b20bf8281bacbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17c258cb05d601386d3d60ed9963ecf016c853d06dec9b21b20bf8281bacbfe->enter($__internal_d17c258cb05d601386d3d60ed9963ecf016c853d06dec9b21b20bf8281bacbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_89c721fbf8035d8552f4577a0e62c0ad0e5378bb427ebe0504f98bcc26b68de2->leave($__internal_89c721fbf8035d8552f4577a0e62c0ad0e5378bb427ebe0504f98bcc26b68de2_prof);

        
        $__internal_d17c258cb05d601386d3d60ed9963ecf016c853d06dec9b21b20bf8281bacbfe->leave($__internal_d17c258cb05d601386d3d60ed9963ecf016c853d06dec9b21b20bf8281bacbfe_prof);

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
