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
        $__internal_cd7941bb5f24d82a7da80b458326bdee04bd53c00a26ccae599cb399ad3a0596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7941bb5f24d82a7da80b458326bdee04bd53c00a26ccae599cb399ad3a0596->enter($__internal_cd7941bb5f24d82a7da80b458326bdee04bd53c00a26ccae599cb399ad3a0596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fbb8ffac327c2b41862ab84f9e09e0811e384ece47106c99f6bec09920645591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb8ffac327c2b41862ab84f9e09e0811e384ece47106c99f6bec09920645591->enter($__internal_fbb8ffac327c2b41862ab84f9e09e0811e384ece47106c99f6bec09920645591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cd7941bb5f24d82a7da80b458326bdee04bd53c00a26ccae599cb399ad3a0596->leave($__internal_cd7941bb5f24d82a7da80b458326bdee04bd53c00a26ccae599cb399ad3a0596_prof);

        
        $__internal_fbb8ffac327c2b41862ab84f9e09e0811e384ece47106c99f6bec09920645591->leave($__internal_fbb8ffac327c2b41862ab84f9e09e0811e384ece47106c99f6bec09920645591_prof);

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
