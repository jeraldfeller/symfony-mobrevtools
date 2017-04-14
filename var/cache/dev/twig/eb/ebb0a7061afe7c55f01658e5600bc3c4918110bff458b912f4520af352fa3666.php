<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3b561f975f00eb3eb9c0ebcf1d9dc531557c2ed5a49d2ebddef592aad978d461 extends Twig_Template
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
        $__internal_eff8b6ed95aa4b315e047f3a5aa7f025bc2eed3d9b80245f874664aac411608a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff8b6ed95aa4b315e047f3a5aa7f025bc2eed3d9b80245f874664aac411608a->enter($__internal_eff8b6ed95aa4b315e047f3a5aa7f025bc2eed3d9b80245f874664aac411608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_08e14d328c9dbd32cdf4e4bcdc28bd9a966666acd2ee7541d66ef430c7326bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e14d328c9dbd32cdf4e4bcdc28bd9a966666acd2ee7541d66ef430c7326bab->enter($__internal_08e14d328c9dbd32cdf4e4bcdc28bd9a966666acd2ee7541d66ef430c7326bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_eff8b6ed95aa4b315e047f3a5aa7f025bc2eed3d9b80245f874664aac411608a->leave($__internal_eff8b6ed95aa4b315e047f3a5aa7f025bc2eed3d9b80245f874664aac411608a_prof);

        
        $__internal_08e14d328c9dbd32cdf4e4bcdc28bd9a966666acd2ee7541d66ef430c7326bab->leave($__internal_08e14d328c9dbd32cdf4e4bcdc28bd9a966666acd2ee7541d66ef430c7326bab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
