<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7f65b22b222b4587006b29e47c0a12451f874f04c5b0970b7ccbac6f1ba651e2 extends Twig_Template
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
        $__internal_5fd162fe696583a49f389efc4258e74aa647cbd479eb04a54d79224a2a91c5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd162fe696583a49f389efc4258e74aa647cbd479eb04a54d79224a2a91c5cb->enter($__internal_5fd162fe696583a49f389efc4258e74aa647cbd479eb04a54d79224a2a91c5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1850e1b2882420f4cf5ae47afc731386979191c678d6c8271f3413be7c5ee4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1850e1b2882420f4cf5ae47afc731386979191c678d6c8271f3413be7c5ee4cd->enter($__internal_1850e1b2882420f4cf5ae47afc731386979191c678d6c8271f3413be7c5ee4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5fd162fe696583a49f389efc4258e74aa647cbd479eb04a54d79224a2a91c5cb->leave($__internal_5fd162fe696583a49f389efc4258e74aa647cbd479eb04a54d79224a2a91c5cb_prof);

        
        $__internal_1850e1b2882420f4cf5ae47afc731386979191c678d6c8271f3413be7c5ee4cd->leave($__internal_1850e1b2882420f4cf5ae47afc731386979191c678d6c8271f3413be7c5ee4cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
