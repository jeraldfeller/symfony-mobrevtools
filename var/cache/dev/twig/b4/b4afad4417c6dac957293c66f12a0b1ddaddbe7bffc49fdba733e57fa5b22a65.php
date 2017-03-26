<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b31faf33acb6580f2518af58e518959bf663ec64bf509e9f868a531ec7373308 extends Twig_Template
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
        $__internal_ae3e00a54d8a936e987704a78e557297760fd03052074716b12e9fc7852bbb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3e00a54d8a936e987704a78e557297760fd03052074716b12e9fc7852bbb79->enter($__internal_ae3e00a54d8a936e987704a78e557297760fd03052074716b12e9fc7852bbb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ca5f45945370a0a85a66c20b3e23b14b3dcaa691babc07aad9bd825a09aa319f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5f45945370a0a85a66c20b3e23b14b3dcaa691babc07aad9bd825a09aa319f->enter($__internal_ca5f45945370a0a85a66c20b3e23b14b3dcaa691babc07aad9bd825a09aa319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ae3e00a54d8a936e987704a78e557297760fd03052074716b12e9fc7852bbb79->leave($__internal_ae3e00a54d8a936e987704a78e557297760fd03052074716b12e9fc7852bbb79_prof);

        
        $__internal_ca5f45945370a0a85a66c20b3e23b14b3dcaa691babc07aad9bd825a09aa319f->leave($__internal_ca5f45945370a0a85a66c20b3e23b14b3dcaa691babc07aad9bd825a09aa319f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
