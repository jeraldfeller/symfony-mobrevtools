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
        $__internal_9349847945d99ede847e58f80e211ed5f56247ccc763361b1c3c3ca70fa7b517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9349847945d99ede847e58f80e211ed5f56247ccc763361b1c3c3ca70fa7b517->enter($__internal_9349847945d99ede847e58f80e211ed5f56247ccc763361b1c3c3ca70fa7b517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Skeleton/class.php.twig"));

        $__internal_17c90ebb656b2b168952f32bfc32df78463b3d2c92956098adafd1b676d4e1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c90ebb656b2b168952f32bfc32df78463b3d2c92956098adafd1b676d4e1b2->enter($__internal_17c90ebb656b2b168952f32bfc32df78463b3d2c92956098adafd1b676d4e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Skeleton/class.php.twig"));

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
        
        $__internal_9349847945d99ede847e58f80e211ed5f56247ccc763361b1c3c3ca70fa7b517->leave($__internal_9349847945d99ede847e58f80e211ed5f56247ccc763361b1c3c3ca70fa7b517_prof);

        
        $__internal_17c90ebb656b2b168952f32bfc32df78463b3d2c92956098adafd1b676d4e1b2->leave($__internal_17c90ebb656b2b168952f32bfc32df78463b3d2c92956098adafd1b676d4e1b2_prof);

    }

    // line 5
    public function block_use_statements($context, array $blocks = array())
    {
        $__internal_d4edff16eee34f98df55d23431b6409d22c2bd86a5e96059e8cdb461e202ad81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4edff16eee34f98df55d23431b6409d22c2bd86a5e96059e8cdb461e202ad81->enter($__internal_d4edff16eee34f98df55d23431b6409d22c2bd86a5e96059e8cdb461e202ad81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        $__internal_77f8d4638ef8b815c4099a65375e736e34e01c7d234e0ae7802ad3f6c0a95432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f8d4638ef8b815c4099a65375e736e34e01c7d234e0ae7802ad3f6c0a95432->enter($__internal_77f8d4638ef8b815c4099a65375e736e34e01c7d234e0ae7802ad3f6c0a95432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        // line 6
        echo "use Sg\\DatatablesBundle\\Datatable\\View\\AbstractDatatableView;
use Sg\\DatatablesBundle\\Datatable\\View\\Style;
";
        
        $__internal_77f8d4638ef8b815c4099a65375e736e34e01c7d234e0ae7802ad3f6c0a95432->leave($__internal_77f8d4638ef8b815c4099a65375e736e34e01c7d234e0ae7802ad3f6c0a95432_prof);

        
        $__internal_d4edff16eee34f98df55d23431b6409d22c2bd86a5e96059e8cdb461e202ad81->leave($__internal_d4edff16eee34f98df55d23431b6409d22c2bd86a5e96059e8cdb461e202ad81_prof);

    }

    // line 10
    public function block_class_definition($context, array $blocks = array())
    {
        $__internal_bd0d70155e390dd30aa548329c95d5a0a0257a21f746f160ed91a8d24791e7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0d70155e390dd30aa548329c95d5a0a0257a21f746f160ed91a8d24791e7ca->enter($__internal_bd0d70155e390dd30aa548329c95d5a0a0257a21f746f160ed91a8d24791e7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        $__internal_b34fe339c656004eacc4f6657992431d6dee7a205603d8eb386cebce0a90f7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34fe339c656004eacc4f6657992431d6dee7a205603d8eb386cebce0a90f7b0->enter($__internal_b34fe339c656004eacc4f6657992431d6dee7a205603d8eb386cebce0a90f7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

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
        
        $__internal_b34fe339c656004eacc4f6657992431d6dee7a205603d8eb386cebce0a90f7b0->leave($__internal_b34fe339c656004eacc4f6657992431d6dee7a205603d8eb386cebce0a90f7b0_prof);

        
        $__internal_bd0d70155e390dd30aa548329c95d5a0a0257a21f746f160ed91a8d24791e7ca->leave($__internal_bd0d70155e390dd30aa548329c95d5a0a0257a21f746f160ed91a8d24791e7ca_prof);

    }

    // line 19
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_dcb7f45f4859cad4e9ca7a232b415135baccb154d98e3f042de753a418505b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb7f45f4859cad4e9ca7a232b415135baccb154d98e3f042de753a418505b9a->enter($__internal_dcb7f45f4859cad4e9ca7a232b415135baccb154d98e3f042de753a418505b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        $__internal_a731fdf455cd4af69cf76c21dfb84f3e6a7f4c48a0f8323db8b352d6fba84162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a731fdf455cd4af69cf76c21dfb84f3e6a7f4c48a0f8323db8b352d6fba84162->enter($__internal_a731fdf455cd4af69cf76c21dfb84f3e6a7f4c48a0f8323db8b352d6fba84162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

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
        
        $__internal_a731fdf455cd4af69cf76c21dfb84f3e6a7f4c48a0f8323db8b352d6fba84162->leave($__internal_a731fdf455cd4af69cf76c21dfb84f3e6a7f4c48a0f8323db8b352d6fba84162_prof);

        
        $__internal_dcb7f45f4859cad4e9ca7a232b415135baccb154d98e3f042de753a418505b9a->leave($__internal_dcb7f45f4859cad4e9ca7a232b415135baccb154d98e3f042de753a418505b9a_prof);

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
