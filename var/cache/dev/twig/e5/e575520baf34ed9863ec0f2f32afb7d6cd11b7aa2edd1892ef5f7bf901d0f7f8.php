<?php

/* reports/whitelist.html.twig */
class __TwigTemplate_4af4f9532a793d00b171cad43aef6f9396ab33850f7a760f1c15c6fb05ed6376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/whitelist.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa9ee9ebfe15515694e057a7c6ebb4cbb7d93caaec713000e90529799eff08c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9ee9ebfe15515694e057a7c6ebb4cbb7d93caaec713000e90529799eff08c9->enter($__internal_fa9ee9ebfe15515694e057a7c6ebb4cbb7d93caaec713000e90529799eff08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/whitelist.html.twig"));

        $__internal_1ded47e080b55eda6330e93aa7bd4a9a2d5e13755e0faa989112bf18f4462300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ded47e080b55eda6330e93aa7bd4a9a2d5e13755e0faa989112bf18f4462300->enter($__internal_1ded47e080b55eda6330e93aa7bd4a9a2d5e13755e0faa989112bf18f4462300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/whitelist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9ee9ebfe15515694e057a7c6ebb4cbb7d93caaec713000e90529799eff08c9->leave($__internal_fa9ee9ebfe15515694e057a7c6ebb4cbb7d93caaec713000e90529799eff08c9_prof);

        
        $__internal_1ded47e080b55eda6330e93aa7bd4a9a2d5e13755e0faa989112bf18f4462300->leave($__internal_1ded47e080b55eda6330e93aa7bd4a9a2d5e13755e0faa989112bf18f4462300_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f27ee04cec97119671e2ff96ca065a9f9a2e6e70f568e8fcb9ad20a369fa9d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27ee04cec97119671e2ff96ca065a9f9a2e6e70f568e8fcb9ad20a369fa9d9b->enter($__internal_f27ee04cec97119671e2ff96ca065a9f9a2e6e70f568e8fcb9ad20a369fa9d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_698eff2318a578f6e297834cc1f13ff4c884ca7fe790696fe01405db9e768d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698eff2318a578f6e297834cc1f13ff4c884ca7fe790696fe01405db9e768d3e->enter($__internal_698eff2318a578f6e297834cc1f13ff4c884ca7fe790696fe01405db9e768d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/css/clockface.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }
    </style>
";
        
        $__internal_698eff2318a578f6e297834cc1f13ff4c884ca7fe790696fe01405db9e768d3e->leave($__internal_698eff2318a578f6e297834cc1f13ff4c884ca7fe790696fe01405db9e768d3e_prof);

        
        $__internal_f27ee04cec97119671e2ff96ca065a9f9a2e6e70f568e8fcb9ad20a369fa9d9b->leave($__internal_f27ee04cec97119671e2ff96ca065a9f9a2e6e70f568e8fcb9ad20a369fa9d9b_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_44b525032ede2ce6544f58ca8ca414b9efed5b9b20f5813eb18e314da00d126e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b525032ede2ce6544f58ca8ca414b9efed5b9b20f5813eb18e314da00d126e->enter($__internal_44b525032ede2ce6544f58ca8ca414b9efed5b9b20f5813eb18e314da00d126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_99311f974109be7244a48175bca7e869dc6357b32ed834cc2ce0b5d43da44731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99311f974109be7244a48175bca7e869dc6357b32ed834cc2ce0b5d43da44731->enter($__internal_99311f974109be7244a48175bca7e869dc6357b32ed834cc2ce0b5d43da44731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_99311f974109be7244a48175bca7e869dc6357b32ed834cc2ce0b5d43da44731->leave($__internal_99311f974109be7244a48175bca7e869dc6357b32ed834cc2ce0b5d43da44731_prof);

        
        $__internal_44b525032ede2ce6544f58ca8ca414b9efed5b9b20f5813eb18e314da00d126e->leave($__internal_44b525032ede2ce6544f58ca8ca414b9efed5b9b20f5813eb18e314da00d126e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d2cbc0b6f15d4cbf617f42a542bc40aace5a2aacf055a36a38d660343d8b0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2cbc0b6f15d4cbf617f42a542bc40aace5a2aacf055a36a38d660343d8b0db->enter($__internal_2d2cbc0b6f15d4cbf617f42a542bc40aace5a2aacf055a36a38d660343d8b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abeaf1fff5bab44b41f1131cacf4267e89558a5311e56467aba752ffc01ad51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abeaf1fff5bab44b41f1131cacf4267e89558a5311e56467aba752ffc01ad51a->enter($__internal_abeaf1fff5bab44b41f1131cacf4267e89558a5311e56467aba752ffc01ad51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <h1 class=\"page-title\"> Reports

    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Reports</span>
             <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "</span>
            </li>

        </ul>
        <div class=\"page-toolbar\">
            <div class=\"btn-group pull-right\">
                <button type=\"button\" class=\"btn btn-fit-height grey-salt dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\"> Actions
                    <i class=\"fa fa-angle-down\"></i>
                </button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bell\"></i> Action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-shield\"></i> Another action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> Something else here</a>
                    </li>
                    <li class=\"divider\"> </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bag\"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">

                    <div class=\"row\">
                        <div class=\"form-group\">
                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterTrafficSource\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "trafficSource", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "geos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "geo", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "geo", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                </select>
                            </div>


                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterVertical\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "verticals", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vertical", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vertical", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"ctr1\" placeholder=\"CTR\" onkeypress=\"return isNumberKey(event)\">
                                    <span class=\"input-group-addon\">
                                       %
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"input-group\">
                                    <input type=text\" class=\"form-control\" id=\"ctr2\" placeholder=\"CTR\" onkeypress=\"return isNumberKey(event)\">
                                    <span class=\"input-group-addon\">
                                       %
                                    </span>
                                </div>
                            </div>

                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"filterBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Filter</span></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"form-group\">

                            <div class=\"col-md-4 col-xs-12\">
                                            <div class=\"input-group\" id=\"defaultrange\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Select Date Range\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn default date-range-toggle\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                            </div>
                            <input type=\"hidden\" id=\"date-from\">
                            <input type=\"hidden\" id=\"date-to\">
                            <div class=\"col-md-4 col-xs-12\">
                                <div class=\"caption font-dark\">
                                    <button type=\"button\" id=\"updateWhitelistTable\" class=\"btn blue ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-refresh\"></i> Reload Table</span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>

                                            <th>Traffic Source </th>
                                            <th>Geo </th>
                                            <th>Vertical </th>
                                            <th>Placement </th>
                                            <th>Visits </th>
                                            <th>Clicks </th>
                                            <th>CTR </th>
                                            <th>Cost </th>
                                            <th>ROI</th>
                                            <th>Conversions </th>
                                            <th>Campaign </th>
                                        </tr>
                                        </thead>
                                        <tbody id=\"offersDisplay\">

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_abeaf1fff5bab44b41f1131cacf4267e89558a5311e56467aba752ffc01ad51a->leave($__internal_abeaf1fff5bab44b41f1131cacf4267e89558a5311e56467aba752ffc01ad51a_prof);

        
        $__internal_2d2cbc0b6f15d4cbf617f42a542bc40aace5a2aacf055a36a38d660343d8b0db->leave($__internal_2d2cbc0b6f15d4cbf617f42a542bc40aace5a2aacf055a36a38d660343d8b0db_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eaee789563fe5f6b567920d3f22c0ecef87c6ea19399bb6e8b16156552d8333d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaee789563fe5f6b567920d3f22c0ecef87c6ea19399bb6e8b16156552d8333d->enter($__internal_eaee789563fe5f6b567920d3f22c0ecef87c6ea19399bb6e8b16156552d8333d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d050009df55aba6bfad95ffa83d86bff4180dd791bc705c006348d70e001b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d050009df55aba6bfad95ffa83d86bff4180dd791bc705c006348d70e001b9c->enter($__internal_6d050009df55aba6bfad95ffa83d86bff4180dd791bc705c006348d70e001b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/js/clockface.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/components-date-time-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script type=\"text/javascript\">

        var ComponentsSelect2 = function() {

            var handleDemo = function() {

                // Set the \"bootstrap\" theme as the default theme for all Select2
                // widgets.
                //
                // @see https://github.com/select2/select2/issues/2927
                \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

                \$(\"#selectFilterTrafficSource\").select2({
                    allowClear: true,
                    placeholder: 'Select TrafficSource',
                    width: null
                });

                \$(\"#selectFilterGeo\").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
                    width: null
                });

                \$(\"#selectFilterVertical\").select2({
                    allowClear: true,
                    placeholder: 'Select Vertical',
                    width: null
                });


                // @see https://select2.github.io/examples.html#data-ajax
                function formatRepo(repo) {
                    if (repo.loading) return repo.text;

                    var markup = \"<div class='select2-result-repository clearfix'>\" +
                            \"<div class='select2-result-repository__avatar'><img src='\" + repo.owner.avatar_url + \"' /></div>\" +
                            \"<div class='select2-result-repository__meta'>\" +
                            \"<div class='select2-result-repository__title'>\" + repo.full_name + \"</div>\";

                    if (repo.description) {
                        markup += \"<div class='select2-result-repository__description'>\" + repo.description + \"</div>\";
                    }

                    markup += \"<div class='select2-result-repository__statistics'>\" +
                    \"<div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> \" + repo.forks_count + \" Forks</div>\" +
                    \"<div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> \" + repo.stargazers_count + \" Stars</div>\" +
                    \"<div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> \" + repo.watchers_count + \" Watchers</div>\" +
                    \"</div>\" +
                    \"</div></div>\";

                    return markup;
                }

                function formatRepoSelection(repo) {
                    return repo.full_name || repo.text;
                }

                \$(\".js-data-example-ajax\").select2({
                    width: \"off\",
                    ajax: {
                        url: \"https://api.github.com/search/repositories\",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function(data, page) {
                            // parse the results into the format expected by Select2.
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data
                            return {
                                results: data.items
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function(markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo,
                    templateSelection: formatRepoSelection
                });

                \$(\"button[data-select2-open]\").click(function() {
                    \$(\"#\" + \$(this).data(\"select2-open\")).select2(\"open\");
                });

                \$(\":checkbox\").on(\"click\", function() {
                    \$(this).parent().nextAll(\"select\").prop(\"disabled\", !this.checked);
                });

                // copy Bootstrap validation states to Select2 dropdown
                //
                // add .has-waring, .has-error, .has-succes to the Select2 dropdown
                // (was #select2-drop in Select2 v3.x, in Select2 v4 can be selected via
                // body > .select2-container) if _any_ of the opened Select2's parents
                // has one of these forementioned classes (YUCK! ;-))
                \$(\".select2, .select2-multiple, .select2-allow-clear, .js-data-example-ajax\").on(\"select2:open\", function() {
                    if (\$(this).parents(\"[class*='has-']\").length) {
                        var classNames = \$(this).parents(\"[class*='has-']\")[0].className.split(/\\s+/);

                        for (var i = 0; i < classNames.length; ++i) {
                            if (classNames[i].match(\"has-\")) {
                                \$(\"body > .select2-container\").addClass(classNames[i]);
                            }
                        }
                    }
                });

                \$(\".js-btn-set-scaling-classes\").on(\"click\", function() {
                    \$(\"#select2-multiple-input-sm, #select2-single-input-sm\").next(\".select2-container--bootstrap\").addClass(\"input-sm\");
                    \$(\"#select2-multiple-input-lg, #select2-single-input-lg\").next(\".select2-container--bootstrap\").addClass(\"input-lg\");
                    \$(this).removeClass(\"btn-primary btn-outline\").prop(\"disabled\", true);
                });
            }

            return {
                //main function to initiate the module
                init: function() {
                    handleDemo();
                }
            };

        }();

        if (App.isAngularJsApp() === false) {
            jQuery(document).ready(function() {
                ComponentsSelect2.init();
            });
        }


    </script>
    <script>
        var lastChecked = null;
        /* Custom filtering function which will filter data in column four between two values */



        \$(document).on('ready', function() {

            var fixedHeaderOffset = 0;
            if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
                if (\$('.page-header').hasClass('page-header-fixed-mobile')) {
                    fixedHeaderOffset = \$('.page-header').outerHeight(true);
                }
            } else if (\$('.page-header').hasClass('navbar-fixed-top')) {
                fixedHeaderOffset = \$('.page-header').outerHeight(true);
            } else if (\$('body').hasClass('page-header-fixed')) {
                fixedHeaderOffset = 64; // admin 5 fixed height
            }
            var table = \$('#datatable-responsive');
            var oTable = \$('#datatable-responsive').DataTable({
                fixedHeader: {
                    header: true,
                    headerOffset: fixedHeaderOffset
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"fnServerData\": function (sSource, aoData, fnCallback) {
                    /* Add some extra data to the sender */
                    aoData.push({\"name\": \"traffic\", \"value\": \$('#selectFilterTrafficSource').val()});
                    aoData.push({\"name\": \"geo\", \"value\": \$('#selectFilterGeo').val()});
                    aoData.push({\"name\": \"vertical\", \"value\": \$('#selectFilterVertical').val()});
                    aoData.push({\"name\": \"ctr1\", \"value\": \$('#ctr1').val()});
                    aoData.push({\"name\": \"ctr2\", \"value\": \$('#ctr2').val()});
                    \$.getJSON(sSource, aoData, function (json) {
                        /* Do whatever additional processing you want on the callback, then tell DataTables */
                        fnCallback(json)
                    });
                },
                \"sAjaxSource\": \"/ajax/get-reports-whitelist\",

                responsive: {
                    details: {

                    }
                },
                \"iDisplayLength\": 20,
                \"lengthMenu\": [
                    [20, 500, 1000, -1],
                    [20, 500, 1000, \"All\"] // change per page values here
                ],
                \"columnDefs\": [
                    {
                        \"className\": \"dt-right\"
                        //\"targets\": [2]
                    },

                ],
                \"order\": [[10, \"desc\"]],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                //dom: '<\"wrapper\"lBfrtip>',
                //dom: '<lB<frt>ip>',
                \"dom\": \"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",
                buttons: [
                    {
                        extend: 'print',
                        className: 'btn blue btn-outline',
                        text: '<i class=\"fa fa-print\"></i> Print',
                        title: 'Placement List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Placement List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Placement List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ]


            });


            \$('#filterBtn').click(function(){
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
            })

            \$('#updateWhitelistTable').click(function(){
                \$btn = \$(this)[0]
                \$from = \$('#date-from').val();
                \$to = \$('#date-to').val();

                \$data = {
                    from: \$from,
                    to: \$to
                }

                getWhitelistReport(\$btn, \$data);
            })
        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/reports/whitelist.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_6d050009df55aba6bfad95ffa83d86bff4180dd791bc705c006348d70e001b9c->leave($__internal_6d050009df55aba6bfad95ffa83d86bff4180dd791bc705c006348d70e001b9c_prof);

        
        $__internal_eaee789563fe5f6b567920d3f22c0ecef87c6ea19399bb6e8b16156552d8333d->leave($__internal_eaee789563fe5f6b567920d3f22c0ecef87c6ea19399bb6e8b16156552d8333d_prof);

    }

    public function getTemplateName()
    {
        return "reports/whitelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 470,  390 => 199,  386 => 198,  382 => 197,  378 => 196,  374 => 195,  370 => 194,  366 => 193,  362 => 192,  357 => 191,  348 => 190,  250 => 101,  239 => 99,  235 => 98,  226 => 91,  215 => 89,  211 => 88,  203 => 82,  192 => 80,  188 => 79,  143 => 37,  126 => 22,  117 => 21,  106 => 19,  103 => 17,  94 => 16,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link href=\"{{ asset('assets/global/plugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/clockface/css/clockface.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }
    </style>
{% endblock %}
{% block nav %}
    {{ render(controller(
    'AppBundle:Navmenu:getNavmenu'
    )) }}
{% endblock %}
{% block body %}
    <h1 class=\"page-title\"> Reports

    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Reports</span>
             <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>{{ page }}</span>
            </li>

        </ul>
        <div class=\"page-toolbar\">
            <div class=\"btn-group pull-right\">
                <button type=\"button\" class=\"btn btn-fit-height grey-salt dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\"> Actions
                    <i class=\"fa fa-angle-down\"></i>
                </button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bell\"></i> Action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-shield\"></i> Another action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> Something else here</a>
                    </li>
                    <li class=\"divider\"> </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bag\"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">

                    <div class=\"row\">
                        <div class=\"form-group\">
                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterTrafficSource\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.trafficSource %}
    <option value=\"{{ item.trafficSource }}\">{{ item.trafficSource }}</option>
{% endfor %}
                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.geos %}
    <option value=\"{{ item.geo }}\">{{ item.geo }}</option>
{% endfor %}
                                </select>
                            </div>


                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterVertical\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.verticals %}
    <option value=\"{{ item.vertical }}\">{{ item.vertical }}</option>
{% endfor %}
                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"ctr1\" placeholder=\"CTR\" onkeypress=\"return isNumberKey(event)\">
                                    <span class=\"input-group-addon\">
                                       %
                                    </span>
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"input-group\">
                                    <input type=text\" class=\"form-control\" id=\"ctr2\" placeholder=\"CTR\" onkeypress=\"return isNumberKey(event)\">
                                    <span class=\"input-group-addon\">
                                       %
                                    </span>
                                </div>
                            </div>

                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"filterBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Filter</span></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"form-group\">

                            <div class=\"col-md-4 col-xs-12\">
                                            <div class=\"input-group\" id=\"defaultrange\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Select Date Range\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn default date-range-toggle\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                            </div>
                            <input type=\"hidden\" id=\"date-from\">
                            <input type=\"hidden\" id=\"date-to\">
                            <div class=\"col-md-4 col-xs-12\">
                                <div class=\"caption font-dark\">
                                    <button type=\"button\" id=\"updateWhitelistTable\" class=\"btn blue ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-refresh\"></i> Reload Table</span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>

                                            <th>Traffic Source </th>
                                            <th>Geo </th>
                                            <th>Vertical </th>
                                            <th>Placement </th>
                                            <th>Visits </th>
                                            <th>Clicks </th>
                                            <th>CTR </th>
                                            <th>Cost </th>
                                            <th>ROI</th>
                                            <th>Conversions </th>
                                            <th>Campaign </th>
                                        </tr>
                                        </thead>
                                        <tbody id=\"offersDisplay\">

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/global/plugins/autosize/autosize.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/clockface/js/clockface.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/pages/scripts/components-date-time-pickers.js') }}\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script type=\"text/javascript\">

        var ComponentsSelect2 = function() {

            var handleDemo = function() {

                // Set the \"bootstrap\" theme as the default theme for all Select2
                // widgets.
                //
                // @see https://github.com/select2/select2/issues/2927
                \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

                \$(\"#selectFilterTrafficSource\").select2({
                    allowClear: true,
                    placeholder: 'Select TrafficSource',
                    width: null
                });

                \$(\"#selectFilterGeo\").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
                    width: null
                });

                \$(\"#selectFilterVertical\").select2({
                    allowClear: true,
                    placeholder: 'Select Vertical',
                    width: null
                });


                // @see https://select2.github.io/examples.html#data-ajax
                function formatRepo(repo) {
                    if (repo.loading) return repo.text;

                    var markup = \"<div class='select2-result-repository clearfix'>\" +
                            \"<div class='select2-result-repository__avatar'><img src='\" + repo.owner.avatar_url + \"' /></div>\" +
                            \"<div class='select2-result-repository__meta'>\" +
                            \"<div class='select2-result-repository__title'>\" + repo.full_name + \"</div>\";

                    if (repo.description) {
                        markup += \"<div class='select2-result-repository__description'>\" + repo.description + \"</div>\";
                    }

                    markup += \"<div class='select2-result-repository__statistics'>\" +
                    \"<div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> \" + repo.forks_count + \" Forks</div>\" +
                    \"<div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> \" + repo.stargazers_count + \" Stars</div>\" +
                    \"<div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> \" + repo.watchers_count + \" Watchers</div>\" +
                    \"</div>\" +
                    \"</div></div>\";

                    return markup;
                }

                function formatRepoSelection(repo) {
                    return repo.full_name || repo.text;
                }

                \$(\".js-data-example-ajax\").select2({
                    width: \"off\",
                    ajax: {
                        url: \"https://api.github.com/search/repositories\",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function(data, page) {
                            // parse the results into the format expected by Select2.
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data
                            return {
                                results: data.items
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function(markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo,
                    templateSelection: formatRepoSelection
                });

                \$(\"button[data-select2-open]\").click(function() {
                    \$(\"#\" + \$(this).data(\"select2-open\")).select2(\"open\");
                });

                \$(\":checkbox\").on(\"click\", function() {
                    \$(this).parent().nextAll(\"select\").prop(\"disabled\", !this.checked);
                });

                // copy Bootstrap validation states to Select2 dropdown
                //
                // add .has-waring, .has-error, .has-succes to the Select2 dropdown
                // (was #select2-drop in Select2 v3.x, in Select2 v4 can be selected via
                // body > .select2-container) if _any_ of the opened Select2's parents
                // has one of these forementioned classes (YUCK! ;-))
                \$(\".select2, .select2-multiple, .select2-allow-clear, .js-data-example-ajax\").on(\"select2:open\", function() {
                    if (\$(this).parents(\"[class*='has-']\").length) {
                        var classNames = \$(this).parents(\"[class*='has-']\")[0].className.split(/\\s+/);

                        for (var i = 0; i < classNames.length; ++i) {
                            if (classNames[i].match(\"has-\")) {
                                \$(\"body > .select2-container\").addClass(classNames[i]);
                            }
                        }
                    }
                });

                \$(\".js-btn-set-scaling-classes\").on(\"click\", function() {
                    \$(\"#select2-multiple-input-sm, #select2-single-input-sm\").next(\".select2-container--bootstrap\").addClass(\"input-sm\");
                    \$(\"#select2-multiple-input-lg, #select2-single-input-lg\").next(\".select2-container--bootstrap\").addClass(\"input-lg\");
                    \$(this).removeClass(\"btn-primary btn-outline\").prop(\"disabled\", true);
                });
            }

            return {
                //main function to initiate the module
                init: function() {
                    handleDemo();
                }
            };

        }();

        if (App.isAngularJsApp() === false) {
            jQuery(document).ready(function() {
                ComponentsSelect2.init();
            });
        }


    </script>
    <script>
        var lastChecked = null;
        /* Custom filtering function which will filter data in column four between two values */



        \$(document).on('ready', function() {

            var fixedHeaderOffset = 0;
            if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
                if (\$('.page-header').hasClass('page-header-fixed-mobile')) {
                    fixedHeaderOffset = \$('.page-header').outerHeight(true);
                }
            } else if (\$('.page-header').hasClass('navbar-fixed-top')) {
                fixedHeaderOffset = \$('.page-header').outerHeight(true);
            } else if (\$('body').hasClass('page-header-fixed')) {
                fixedHeaderOffset = 64; // admin 5 fixed height
            }
            var table = \$('#datatable-responsive');
            var oTable = \$('#datatable-responsive').DataTable({
                fixedHeader: {
                    header: true,
                    headerOffset: fixedHeaderOffset
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"fnServerData\": function (sSource, aoData, fnCallback) {
                    /* Add some extra data to the sender */
                    aoData.push({\"name\": \"traffic\", \"value\": \$('#selectFilterTrafficSource').val()});
                    aoData.push({\"name\": \"geo\", \"value\": \$('#selectFilterGeo').val()});
                    aoData.push({\"name\": \"vertical\", \"value\": \$('#selectFilterVertical').val()});
                    aoData.push({\"name\": \"ctr1\", \"value\": \$('#ctr1').val()});
                    aoData.push({\"name\": \"ctr2\", \"value\": \$('#ctr2').val()});
                    \$.getJSON(sSource, aoData, function (json) {
                        /* Do whatever additional processing you want on the callback, then tell DataTables */
                        fnCallback(json)
                    });
                },
                \"sAjaxSource\": \"/ajax/get-reports-whitelist\",

                responsive: {
                    details: {

                    }
                },
                \"iDisplayLength\": 20,
                \"lengthMenu\": [
                    [20, 500, 1000, -1],
                    [20, 500, 1000, \"All\"] // change per page values here
                ],
                \"columnDefs\": [
                    {
                        \"className\": \"dt-right\"
                        //\"targets\": [2]
                    },

                ],
                \"order\": [[10, \"desc\"]],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                //dom: '<\"wrapper\"lBfrtip>',
                //dom: '<lB<frt>ip>',
                \"dom\": \"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",
                buttons: [
                    {
                        extend: 'print',
                        className: 'btn blue btn-outline',
                        text: '<i class=\"fa fa-print\"></i> Print',
                        title: 'Placement List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Placement List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Placement List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ]


            });


            \$('#filterBtn').click(function(){
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
            })

            \$('#updateWhitelistTable').click(function(){
                \$btn = \$(this)[0]
                \$from = \$('#date-from').val();
                \$to = \$('#date-to').val();

                \$data = {
                    from: \$from,
                    to: \$to
                }

                getWhitelistReport(\$btn, \$data);
            })
        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/reports/whitelist.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", "reports/whitelist.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\whitelist.html.twig");
    }
}
