<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1f3ad4fd9a56b1642971543b4eae08692cc0fe51218bc2df3825761dfc75366d extends Twig_Template
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
        $__internal_5d8a1e06f35390b88ee7753dd803847ee2ad49ce62311ae101bb070b361b54e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8a1e06f35390b88ee7753dd803847ee2ad49ce62311ae101bb070b361b54e5->enter($__internal_5d8a1e06f35390b88ee7753dd803847ee2ad49ce62311ae101bb070b361b54e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_15672e3ba553ca7543ad68535fd04683125abec89878bcb549c5dc94b22d41a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15672e3ba553ca7543ad68535fd04683125abec89878bcb549c5dc94b22d41a9->enter($__internal_15672e3ba553ca7543ad68535fd04683125abec89878bcb549c5dc94b22d41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5d8a1e06f35390b88ee7753dd803847ee2ad49ce62311ae101bb070b361b54e5->leave($__internal_5d8a1e06f35390b88ee7753dd803847ee2ad49ce62311ae101bb070b361b54e5_prof);

        
        $__internal_15672e3ba553ca7543ad68535fd04683125abec89878bcb549c5dc94b22d41a9->leave($__internal_15672e3ba553ca7543ad68535fd04683125abec89878bcb549c5dc94b22d41a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
