<?php

/* @SgDatatables/Skeleton/class.php.twig */
class __TwigTemplate_0bb5deb437be5692feb646d7ce8ae08eb4fe0451108644b9959d353588d57ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'use_statements' => array($this, 'block_use_statements'),
            'class_definition' => array($this, 'block_class_definition'),
            'class_body' => array($this, 'block_class_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4de0985980a3a30ccd0b9e456e2b1e1ed4424a0a16005bd66623ff5b545c925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4de0985980a3a30ccd0b9e456e2b1e1ed4424a0a16005bd66623ff5b545c925->enter($__internal_b4de0985980a3a30ccd0b9e456e2b1e1ed4424a0a16005bd66623ff5b545c925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Skeleton/class.php.twig"));

        $__internal_b02d1fa8c2d0770714fd431a4f49c6c98f5ea3c774f835c6784e8c1a0735c32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02d1fa8c2d0770714fd431a4f49c6c98f5ea3c774f835c6784e8c1a0735c32f->enter($__internal_b02d1fa8c2d0770714fd431a4f49c6c98f5ea3c774f835c6784e8c1a0735c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Skeleton/class.php.twig"));

        // line 1
        echo "<?php

namespace ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Datatables;

";
        // line 5
        $this->displayBlock('use_statements', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('class_definition', $context, $blocks);
        // line 18
        echo "{
";
        // line 19
        $this->displayBlock('class_body', $context, $blocks);
        // line 157
        echo "}
";
        
        $__internal_b4de0985980a3a30ccd0b9e456e2b1e1ed4424a0a16005bd66623ff5b545c925->leave($__internal_b4de0985980a3a30ccd0b9e456e2b1e1ed4424a0a16005bd66623ff5b545c925_prof);

        
        $__internal_b02d1fa8c2d0770714fd431a4f49c6c98f5ea3c774f835c6784e8c1a0735c32f->leave($__internal_b02d1fa8c2d0770714fd431a4f49c6c98f5ea3c774f835c6784e8c1a0735c32f_prof);

    }

    // line 5
    public function block_use_statements($context, array $blocks = array())
    {
        $__internal_14068d5960b52d3ddef33431392a29b993c1b90ff22ac890a97ecdde215effe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14068d5960b52d3ddef33431392a29b993c1b90ff22ac890a97ecdde215effe4->enter($__internal_14068d5960b52d3ddef33431392a29b993c1b90ff22ac890a97ecdde215effe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        $__internal_90d3ca9c34af88c80378ca52347ddc06c3c69ff4bafe51c00dc949e9d9f18784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d3ca9c34af88c80378ca52347ddc06c3c69ff4bafe51c00dc949e9d9f18784->enter($__internal_90d3ca9c34af88c80378ca52347ddc06c3c69ff4bafe51c00dc949e9d9f18784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        // line 6
        echo "use Sg\\DatatablesBundle\\Datatable\\View\\AbstractDatatableView;
use Sg\\DatatablesBundle\\Datatable\\View\\Style;
";
        
        $__internal_90d3ca9c34af88c80378ca52347ddc06c3c69ff4bafe51c00dc949e9d9f18784->leave($__internal_90d3ca9c34af88c80378ca52347ddc06c3c69ff4bafe51c00dc949e9d9f18784_prof);

        
        $__internal_14068d5960b52d3ddef33431392a29b993c1b90ff22ac890a97ecdde215effe4->leave($__internal_14068d5960b52d3ddef33431392a29b993c1b90ff22ac890a97ecdde215effe4_prof);

    }

    // line 10
    public function block_class_definition($context, array $blocks = array())
    {
        $__internal_ab080d04a0545c45099f23c145672cad5e9ba117f9d3a9cd09af4cc279fbea08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab080d04a0545c45099f23c145672cad5e9ba117f9d3a9cd09af4cc279fbea08->enter($__internal_ab080d04a0545c45099f23c145672cad5e9ba117f9d3a9cd09af4cc279fbea08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        $__internal_b14a65292c6fd0d2306900642e2f17daa0546d08c52ae5506f99b0bd239840cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14a65292c6fd0d2306900642e2f17daa0546d08c52ae5506f99b0bd239840cf->enter($__internal_b14a65292c6fd0d2306900642e2f17daa0546d08c52ae5506f99b0bd239840cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        // line 11
        echo "/**
 * Class ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["datatable_class"]) ? $context["datatable_class"] : $this->getContext($context, "datatable_class")), "html", null, true);
        echo "
 *
 * @package ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Datatables
 */
class ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["datatable_class"]) ? $context["datatable_class"] : $this->getContext($context, "datatable_class")), "html", null, true);
        echo " extends AbstractDatatableView
";
        
        $__internal_b14a65292c6fd0d2306900642e2f17daa0546d08c52ae5506f99b0bd239840cf->leave($__internal_b14a65292c6fd0d2306900642e2f17daa0546d08c52ae5506f99b0bd239840cf_prof);

        
        $__internal_ab080d04a0545c45099f23c145672cad5e9ba117f9d3a9cd09af4cc279fbea08->leave($__internal_ab080d04a0545c45099f23c145672cad5e9ba117f9d3a9cd09af4cc279fbea08_prof);

    }

    // line 19
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_fdc417f6178414f4ba03f093043a011fead70f74ac4187d70f41e7874e1c456c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc417f6178414f4ba03f093043a011fead70f74ac4187d70f41e7874e1c456c->enter($__internal_fdc417f6178414f4ba03f093043a011fead70f74ac4187d70f41e7874e1c456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        $__internal_ed95f43d4aed488c0bd1ed7c8f5b6638e5d1177b4f213d1c32aca5c2fae07281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed95f43d4aed488c0bd1ed7c8f5b6638e5d1177b4f213d1c32aca5c2fae07281->enter($__internal_ed95f43d4aed488c0bd1ed7c8f5b6638e5d1177b4f213d1c32aca5c2fae07281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        // line 20
        echo "    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->topActions->set(array(
            'start_html' => '<div class=\"row\"><div class=\"col-sm-3\">',
            'end_html' => '<hr></div></div>',
            'actions' => array(
                array(
                    'route' => \$this->router->generate('";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["route_pref"]) ? $context["route_pref"] : $this->getContext($context, "route_pref")), "html", null, true);
        echo "_new'),
                    'label' => \$this->translator->trans('datatables.actions.new'),
                    'icon' => 'glyphicon glyphicon-plus',
                    'attributes' => array(
                        'rel' => 'tooltip',
                        'title' => \$this->translator->trans('datatables.actions.new'),
                        'class' => 'btn btn-primary',
                        'role' => 'button'
                    ),
                )
            )
        ));

        \$this->features->set(array(
            'auto_width' => true,
            'defer_render' => false,
            'info' => true,
            'jquery_ui' => false,
            'length_change' => true,
            'ordering' => true,
            'paging' => true,
            'processing' => true,
            'scroll_x' => false,
            'scroll_y' => '',
            'searching' => true,
            'state_save' => false,
            'delay' => 0,
            'extensions' => array(),
            'highlight' => false,
            'highlight_color' => 'red'
        ));

        \$this->ajax->set(array(
            'url' => \$this->router->generate('";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["ajax_url"]) ? $context["ajax_url"] : $this->getContext($context, "ajax_url")), "html", null, true);
        echo "'),
            'type' => 'GET',
            'pipeline' => 0
        ));

        \$this->options->set(array(
            'display_start' => 0,
            'defer_loading' => -1,
            'dom' => 'lfrtip',
            'length_menu' => array(10, 25, 50, 100),
            'order_classes' => true,
            'order' => array(array(0, 'asc')),
            'order_multi' => true,
            'page_length' => 10,
            'paging_type' => Style::FULL_NUMBERS_PAGINATION,
            'renderer' => '',
            'scroll_collapse' => false,
            'search_delay' => 0,
            'state_duration' => 7200,
            'stripe_classes' => array(),
            ";
        // line 83
        if ((true == (isset($context["bootstrap3"]) ? $context["bootstrap3"] : $this->getContext($context, "bootstrap3")))) {
            // line 84
            echo "'class' => Style::BOOTSTRAP_3_STYLE,
            ";
        } else {
            // line 86
            echo "'class' => Style::BASE_STYLE,
            ";
        }
        // line 88
        echo "'individual_filtering' => false,
            'individual_filtering_position' => 'head',
            ";
        // line 90
        if ((true == (isset($context["bootstrap3"]) ? $context["bootstrap3"] : $this->getContext($context, "bootstrap3")))) {
            // line 91
            echo "'use_integration_options' => true,
            ";
        } else {
            // line 93
            echo "'use_integration_options' => false,
            ";
        }
        // line 95
        echo "'force_dom' => false,
            'row_id' => '";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["primary_key"]) ? $context["primary_key"] : $this->getContext($context, "primary_key")), "html", null, true);
        echo "'
        ));

        \$this->columnBuilder
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 101
            echo "->add('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "property", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "column_name", array()), "html", null, true);
            echo "', array(
                'title' => '";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
            echo "',
            ))
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "->add(null, 'action', array(
                'title' => \$this->translator->trans('datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["route_pref"]) ? $context["route_pref"] : $this->getContext($context, "route_pref")), "html", null, true);
        echo "_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["route_pref"]) ? $context["route_pref"] : $this->getContext($context, "route_pref")), "html", null, true);
        echo "_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Entity";
        echo twig_escape_filter($this->env, (((isset($context["entity_namespace"]) ? $context["entity_namespace"] : $this->getContext($context, "entity_namespace"))) ? (("\\" . (isset($context["entity_namespace"]) ? $context["entity_namespace"] : $this->getContext($context, "entity_namespace")))) : ("")), "html", null, true);
        echo "\\";
        echo twig_escape_filter($this->env, (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class")), "html", null, true);
        echo "';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["datatable_name"]) ? $context["datatable_name"] : $this->getContext($context, "datatable_name")), "html", null, true);
        echo "';
    }
";
        
        $__internal_ed95f43d4aed488c0bd1ed7c8f5b6638e5d1177b4f213d1c32aca5c2fae07281->leave($__internal_ed95f43d4aed488c0bd1ed7c8f5b6638e5d1177b4f213d1c32aca5c2fae07281_prof);

        
        $__internal_fdc417f6178414f4ba03f093043a011fead70f74ac4187d70f41e7874e1c456c->leave($__internal_fdc417f6178414f4ba03f093043a011fead70f74ac4187d70f41e7874e1c456c_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Skeleton/class.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 154,  298 => 146,  272 => 123,  255 => 109,  249 => 105,  240 => 102,  233 => 101,  229 => 100,  222 => 96,  219 => 95,  215 => 93,  211 => 91,  209 => 90,  205 => 88,  201 => 86,  197 => 84,  195 => 83,  172 => 63,  136 => 30,  124 => 20,  115 => 19,  103 => 16,  98 => 14,  93 => 12,  90 => 11,  81 => 10,  69 => 6,  60 => 5,  49 => 157,  47 => 19,  44 => 18,  42 => 10,  39 => 9,  37 => 5,  32 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

namespace {{ namespace }}\\Datatables;

{% block use_statements %}
use Sg\\DatatablesBundle\\Datatable\\View\\AbstractDatatableView;
use Sg\\DatatablesBundle\\Datatable\\View\\Style;
{% endblock use_statements %}

{% block class_definition %}
/**
 * Class {{ datatable_class }}
 *
 * @package {{ namespace }}\\Datatables
 */
class {{ datatable_class }} extends AbstractDatatableView
{% endblock class_definition %}
{
{% block class_body %}
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->topActions->set(array(
            'start_html' => '<div class=\"row\"><div class=\"col-sm-3\">',
            'end_html' => '<hr></div></div>',
            'actions' => array(
                array(
                    'route' => \$this->router->generate('{{ route_pref }}_new'),
                    'label' => \$this->translator->trans('datatables.actions.new'),
                    'icon' => 'glyphicon glyphicon-plus',
                    'attributes' => array(
                        'rel' => 'tooltip',
                        'title' => \$this->translator->trans('datatables.actions.new'),
                        'class' => 'btn btn-primary',
                        'role' => 'button'
                    ),
                )
            )
        ));

        \$this->features->set(array(
            'auto_width' => true,
            'defer_render' => false,
            'info' => true,
            'jquery_ui' => false,
            'length_change' => true,
            'ordering' => true,
            'paging' => true,
            'processing' => true,
            'scroll_x' => false,
            'scroll_y' => '',
            'searching' => true,
            'state_save' => false,
            'delay' => 0,
            'extensions' => array(),
            'highlight' => false,
            'highlight_color' => 'red'
        ));

        \$this->ajax->set(array(
            'url' => \$this->router->generate('{{ ajax_url }}'),
            'type' => 'GET',
            'pipeline' => 0
        ));

        \$this->options->set(array(
            'display_start' => 0,
            'defer_loading' => -1,
            'dom' => 'lfrtip',
            'length_menu' => array(10, 25, 50, 100),
            'order_classes' => true,
            'order' => array(array(0, 'asc')),
            'order_multi' => true,
            'page_length' => 10,
            'paging_type' => Style::FULL_NUMBERS_PAGINATION,
            'renderer' => '',
            'scroll_collapse' => false,
            'search_delay' => 0,
            'state_duration' => 7200,
            'stripe_classes' => array(),
            {% if true == bootstrap3 -%}
            'class' => Style::BOOTSTRAP_3_STYLE,
            {% else -%}
            'class' => Style::BASE_STYLE,
            {% endif -%}
            'individual_filtering' => false,
            'individual_filtering_position' => 'head',
            {% if true == bootstrap3 -%}
            'use_integration_options' => true,
            {% else -%}
            'use_integration_options' => false,
            {% endif -%}
            'force_dom' => false,
            'row_id' => '{{ primary_key }}'
        ));

        \$this->columnBuilder
            {% for field in fields -%}
            ->add('{{ field.property }}', '{{ field.column_name }}', array(
                'title' => '{{ field.title }}',
            ))
            {% endfor -%}
            ->add(null, 'action', array(
                'title' => \$this->translator->trans('datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '{{ route_pref }}_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '{{ route_pref }}_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '{{ namespace }}\\Entity{{ entity_namespace ? '\\\\' ~ entity_namespace : '' }}\\{{ entity_class }}';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '{{ datatable_name }}';
    }
{% endblock class_body %}
}
", "@SgDatatables/Skeleton/class.php.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Skeleton\\class.php.twig");
    }
}
