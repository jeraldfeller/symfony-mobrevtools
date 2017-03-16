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
        $__internal_dc069eff7b739bb986c6e4a5e7f73f967c9a17966faebc37fe4b0738bee7f478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc069eff7b739bb986c6e4a5e7f73f967c9a17966faebc37fe4b0738bee7f478->enter($__internal_dc069eff7b739bb986c6e4a5e7f73f967c9a17966faebc37fe4b0738bee7f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dfc8f869f1dca18748cda0c850788a43fe125d769ae576e870db00120efad82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc8f869f1dca18748cda0c850788a43fe125d769ae576e870db00120efad82c->enter($__internal_dfc8f869f1dca18748cda0c850788a43fe125d769ae576e870db00120efad82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dc069eff7b739bb986c6e4a5e7f73f967c9a17966faebc37fe4b0738bee7f478->leave($__internal_dc069eff7b739bb986c6e4a5e7f73f967c9a17966faebc37fe4b0738bee7f478_prof);

        
        $__internal_dfc8f869f1dca18748cda0c850788a43fe125d769ae576e870db00120efad82c->leave($__internal_dfc8f869f1dca18748cda0c850788a43fe125d769ae576e870db00120efad82c_prof);

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
