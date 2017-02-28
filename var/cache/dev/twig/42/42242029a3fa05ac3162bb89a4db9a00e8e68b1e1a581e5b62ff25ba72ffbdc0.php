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
        $__internal_e275dd76b069cdb9ee0685027b41da7de72be8b33d55aa7e33949eed3360d57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e275dd76b069cdb9ee0685027b41da7de72be8b33d55aa7e33949eed3360d57e->enter($__internal_e275dd76b069cdb9ee0685027b41da7de72be8b33d55aa7e33949eed3360d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4ef645835a7969d827a7b20c144fcf36612605b64dc38c8a252fdc021e436dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef645835a7969d827a7b20c144fcf36612605b64dc38c8a252fdc021e436dca->enter($__internal_4ef645835a7969d827a7b20c144fcf36612605b64dc38c8a252fdc021e436dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e275dd76b069cdb9ee0685027b41da7de72be8b33d55aa7e33949eed3360d57e->leave($__internal_e275dd76b069cdb9ee0685027b41da7de72be8b33d55aa7e33949eed3360d57e_prof);

        
        $__internal_4ef645835a7969d827a7b20c144fcf36612605b64dc38c8a252fdc021e436dca->leave($__internal_4ef645835a7969d827a7b20c144fcf36612605b64dc38c8a252fdc021e436dca_prof);

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
