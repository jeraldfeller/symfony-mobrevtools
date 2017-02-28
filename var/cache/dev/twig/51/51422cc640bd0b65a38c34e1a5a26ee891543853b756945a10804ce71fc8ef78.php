<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e460aea3c7a16d45fdce3094ff016b1d8fe5a097338e4d58bde1c88506e52319 extends Twig_Template
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
        $__internal_4c13da92e2ffda21077e17772ad80d465a7bd3db66338afcce36c15a1cf46948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c13da92e2ffda21077e17772ad80d465a7bd3db66338afcce36c15a1cf46948->enter($__internal_4c13da92e2ffda21077e17772ad80d465a7bd3db66338afcce36c15a1cf46948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f715cf3f95741e7269d3bcff57ce8caeb18c047a031ba1b653ecb07ae0e6aaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f715cf3f95741e7269d3bcff57ce8caeb18c047a031ba1b653ecb07ae0e6aaac->enter($__internal_f715cf3f95741e7269d3bcff57ce8caeb18c047a031ba1b653ecb07ae0e6aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4c13da92e2ffda21077e17772ad80d465a7bd3db66338afcce36c15a1cf46948->leave($__internal_4c13da92e2ffda21077e17772ad80d465a7bd3db66338afcce36c15a1cf46948_prof);

        
        $__internal_f715cf3f95741e7269d3bcff57ce8caeb18c047a031ba1b653ecb07ae0e6aaac->leave($__internal_f715cf3f95741e7269d3bcff57ce8caeb18c047a031ba1b653ecb07ae0e6aaac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
