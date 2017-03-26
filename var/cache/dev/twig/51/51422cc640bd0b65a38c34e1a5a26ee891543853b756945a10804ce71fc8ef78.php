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
        $__internal_ddeaf9ed577d8aeb00c584d92e3363797fedde33b4fd555cb67f7f5ace510f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddeaf9ed577d8aeb00c584d92e3363797fedde33b4fd555cb67f7f5ace510f3d->enter($__internal_ddeaf9ed577d8aeb00c584d92e3363797fedde33b4fd555cb67f7f5ace510f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3c2d70869204f25cb1eb4beb07847d202f55a71431cbe4b1ef1aef430a3e1b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2d70869204f25cb1eb4beb07847d202f55a71431cbe4b1ef1aef430a3e1b67->enter($__internal_3c2d70869204f25cb1eb4beb07847d202f55a71431cbe4b1ef1aef430a3e1b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ddeaf9ed577d8aeb00c584d92e3363797fedde33b4fd555cb67f7f5ace510f3d->leave($__internal_ddeaf9ed577d8aeb00c584d92e3363797fedde33b4fd555cb67f7f5ace510f3d_prof);

        
        $__internal_3c2d70869204f25cb1eb4beb07847d202f55a71431cbe4b1ef1aef430a3e1b67->leave($__internal_3c2d70869204f25cb1eb4beb07847d202f55a71431cbe4b1ef1aef430a3e1b67_prof);

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
