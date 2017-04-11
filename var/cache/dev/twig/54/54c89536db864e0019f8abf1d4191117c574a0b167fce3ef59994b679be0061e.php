<?php

/* reports/bot.html.twig */
class __TwigTemplate_9aedb339bb6ca105b0cf56540f29d9f4ed77acbcf1287d4b599ecb809fa31d23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/bot.html.twig", 1);
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
        $__internal_45ecd532b95224919a6e9aeabc2f13d0fbe976d0761c1f63be539714c2cd2ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ecd532b95224919a6e9aeabc2f13d0fbe976d0761c1f63be539714c2cd2ece->enter($__internal_45ecd532b95224919a6e9aeabc2f13d0fbe976d0761c1f63be539714c2cd2ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/bot.html.twig"));

        $__internal_962c0394a94e8228a2657fb8aa0b8f0616fadceef89174ace72e90b4d77fe7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962c0394a94e8228a2657fb8aa0b8f0616fadceef89174ace72e90b4d77fe7f2->enter($__internal_962c0394a94e8228a2657fb8aa0b8f0616fadceef89174ace72e90b4d77fe7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/bot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ecd532b95224919a6e9aeabc2f13d0fbe976d0761c1f63be539714c2cd2ece->leave($__internal_45ecd532b95224919a6e9aeabc2f13d0fbe976d0761c1f63be539714c2cd2ece_prof);

        
        $__internal_962c0394a94e8228a2657fb8aa0b8f0616fadceef89174ace72e90b4d77fe7f2->leave($__internal_962c0394a94e8228a2657fb8aa0b8f0616fadceef89174ace72e90b4d77fe7f2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d50456f50ba22357cc012064c91b51daf266d1b65005e5824da556cf0d26fe6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50456f50ba22357cc012064c91b51daf266d1b65005e5824da556cf0d26fe6b->enter($__internal_d50456f50ba22357cc012064c91b51daf266d1b65005e5824da556cf0d26fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_038583dce891a7b324f75c03a7b61d5c71601bbeb7b0bc74a6532112213148b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038583dce891a7b324f75c03a7b61d5c71601bbeb7b0bc74a6532112213148b4->enter($__internal_038583dce891a7b324f75c03a7b61d5c71601bbeb7b0bc74a6532112213148b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }
    </style>
";
        
        $__internal_038583dce891a7b324f75c03a7b61d5c71601bbeb7b0bc74a6532112213148b4->leave($__internal_038583dce891a7b324f75c03a7b61d5c71601bbeb7b0bc74a6532112213148b4_prof);

        
        $__internal_d50456f50ba22357cc012064c91b51daf266d1b65005e5824da556cf0d26fe6b->leave($__internal_d50456f50ba22357cc012064c91b51daf266d1b65005e5824da556cf0d26fe6b_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a23c032437b83df185249bab92cbc7529b4981add5bd9005b3c4f60c23d22773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23c032437b83df185249bab92cbc7529b4981add5bd9005b3c4f60c23d22773->enter($__internal_a23c032437b83df185249bab92cbc7529b4981add5bd9005b3c4f60c23d22773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_ad7504148531564564ed316d9c5fa5743dca98e8cc669b18fc609244a84ba71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7504148531564564ed316d9c5fa5743dca98e8cc669b18fc609244a84ba71a->enter($__internal_ad7504148531564564ed316d9c5fa5743dca98e8cc669b18fc609244a84ba71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 14
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 16
        echo "
";
        
        $__internal_ad7504148531564564ed316d9c5fa5743dca98e8cc669b18fc609244a84ba71a->leave($__internal_ad7504148531564564ed316d9c5fa5743dca98e8cc669b18fc609244a84ba71a_prof);

        
        $__internal_a23c032437b83df185249bab92cbc7529b4981add5bd9005b3c4f60c23d22773->leave($__internal_a23c032437b83df185249bab92cbc7529b4981add5bd9005b3c4f60c23d22773_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d673efa2ef977335dfa9c6449a506d3368ac89bb169cb318ad908091a246a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d673efa2ef977335dfa9c6449a506d3368ac89bb169cb318ad908091a246a45->enter($__internal_2d673efa2ef977335dfa9c6449a506d3368ac89bb169cb318ad908091a246a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e1fdbec883491a5877e061ad89c3af446de0d73e22b52557552d3036c77f6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1fdbec883491a5877e061ad89c3af446de0d73e22b52557552d3036c77f6fc->enter($__internal_1e1fdbec883491a5877e061ad89c3af446de0d73e22b52557552d3036c77f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
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
        // line 34
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
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "trafficSource", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSource", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "geos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "geo", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "geo", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                </select>
                            </div>


                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterVertical\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "verticals", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vertical", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "vertical", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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

                            <div class=\"col-md-12 col-xs-12\">
                                <div class=\"caption font-dark\">
                                    <button type=\"button\" id=\"bulkPlacementSearchBtn\" class=\"btn green\" data-toggle=\"modal\" href=\"#bulk-modal\"><i class=\"fa fa-cubes\"></i> Bulk Search</button>
                                    <button type=\"button\" id=\"deleteRecordsBtn\" class=\"btn red\" data-toggle=\"modal\" href=\"#delete-modal\"> <i class=\"fa fa-trash\"></i> Delete</button>
                                    <button type=\"button\" id=\"refreshTable\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-refresh\"></i> Reload Table</span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                        <div id=\"bulk-modal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-md\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-cubes\"></i> Bulk Search</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"row\">

                                            <div class=\"col-lg-12\">
                                                <div class=\"form-group\">
                                                        <label>Placements</label>
                                                        <br>
                                                        <input id=\"bulkPlacementInput\" type=\"text\" class=\"form-control\" data-role=\"tagsinput\"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">

                                        <button type=\"button\" id=\"queryBulkPlacementSearch\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Search</span>  </button>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id=\"delete-modal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-sm\">
                                <div class=\"modal-content\">

                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-warning\"></i> Warning</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <p>Are you sure do want to delete selected records?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">

                                        <button type=\"button\" id=\"confirmDeleteRecordsBtn\" class=\"btn red spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-trash\"></i> Delete </span> </button>

                                    </div>

                                </div>
                            </div>
                        </div>



                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#datatable-responsive .checkboxes\" />
                                                    <span></span>
                                                </label>
                                            </th>
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
                                            <th>Frequency </th>
                                            <th>Starting Time </th>
                                            <th>Executed Time </th>
                                            <th>Status</th>
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
        
        $__internal_1e1fdbec883491a5877e061ad89c3af446de0d73e22b52557552d3036c77f6fc->leave($__internal_1e1fdbec883491a5877e061ad89c3af446de0d73e22b52557552d3036c77f6fc_prof);

        
        $__internal_2d673efa2ef977335dfa9c6449a506d3368ac89bb169cb318ad908091a246a45->leave($__internal_2d673efa2ef977335dfa9c6449a506d3368ac89bb169cb318ad908091a246a45_prof);

    }

    // line 244
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e08621065974b127f960ab4121abdcb7dc85dd7800f69699f1bf920280bc10f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08621065974b127f960ab4121abdcb7dc85dd7800f69699f1bf920280bc10f9->enter($__internal_e08621065974b127f960ab4121abdcb7dc85dd7800f69699f1bf920280bc10f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51aa1c06230074f9aedd5478cec1a87877ee9e6ea4804afee214a34187cf47d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51aa1c06230074f9aedd5478cec1a87877ee9e6ea4804afee214a34187cf47d7->enter($__internal_51aa1c06230074f9aedd5478cec1a87877ee9e6ea4804afee214a34187cf47d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 245
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/typeahead/typeahead.bundle.min.js"), "html", null, true);
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
                    aoData.push({\"name\": \"bulkPlacement\", \"value\": \$('#bulkPlacementInput').val()});
                    \$.getJSON(sSource, aoData, function (json) {
                        /* Do whatever additional processing you want on the callback, then tell DataTables */
                        fnCallback(json)
                    });
                },
                \"sAjaxSource\": \"/ajax/get-reports-bot\",

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
                    {  // set default column settings
                        'orderable': false,
                        'targets': [0]
                    },
                    {
                        \"searchable\": false,
                        \"targets\": [0]
                    },
                    {
                        \"className\": \"dt-right\"
                        //\"targets\": [2]
                    }
                ],
                \"order\": [[14, \"desc\"]],
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
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Placement List',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Placement List',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ]


            });

            table.find('.group-checkable').change(function () {
                var set = jQuery(this).attr(\"data-set\");
                var checked = jQuery(this).is(\":checked\");
                jQuery(set).each(function () {
                    if (checked) {
                        \$(this).prop(\"checked\", true);
                        \$(this).parents('tr').addClass(\"active\");
                    } else {
                        \$(this).prop(\"checked\", false);
                        \$(this).parents('tr').removeClass(\"active\");
                    }
                });
            });

            table.on('change', 'tbody tr .checkboxes', function () {
                \$(this).parents('tr').toggleClass(\"active\");
            });


            \$('#datatable-responsive').checkboxes('range', true);

            \$('#filterBtn').click(function () {
                var l = Ladda.create(\$(this)[0]);
                l.start();

                oTable.ajax.reload(function () {
                    l.stop();
                });
            });

            \$('#refreshTable').click(function () {
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
                \$chkboxes = \$('.report-record');
                \$chkboxes.click(function (e) {
                    if (!lastChecked) {
                        lastChecked = this;
                        return;
                    }

                    if (e.shiftKey) {
                        var start = \$chkboxes.index(this);
                        var end = \$chkboxes.index(lastChecked);

                        \$chkboxes.slice(Math.min(start, end), Math.max(start, end) + 1).prop('checked', lastChecked.checked);

                    }

                    lastChecked = this;
                });
            });


            \$('#queryBulkPlacementSearch').click(function(){
                console.log(\$('#bulkPlacementInput').tagsinput('items'));
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                    \$('#bulk-modal').modal('hide');
                    \$('#bulkPlacementInput').tagsinput('removeAll');
                });

            })


            \$('#confirmDeleteRecordsBtn').on('click', function(){
                \$btnSpinner = \$(this)[0];
                var data = {bundle: 'AppBundle:Reportsbot', items:[]};
                \$i = 0;
                \$('input:checkbox.report-record').each(function () {


                    if(\$(this).is(':checked') == true){
                        var id = (this.checked ? \$(this).data('id') : \"\");

                        data.items.push({id: id});
                        // \$campaigns.push({\$i: {vid: voluumId, campid: campId, campname: campName}});
                    }


                });

                console.log(data);
                reportsDelete(\$btnSpinner, data);

            });

        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/reports/bot.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_51aa1c06230074f9aedd5478cec1a87877ee9e6ea4804afee214a34187cf47d7->leave($__internal_51aa1c06230074f9aedd5478cec1a87877ee9e6ea4804afee214a34187cf47d7_prof);

        
        $__internal_e08621065974b127f960ab4121abdcb7dc85dd7800f69699f1bf920280bc10f9->leave($__internal_e08621065974b127f960ab4121abdcb7dc85dd7800f69699f1bf920280bc10f9_prof);

    }

    public function getTemplateName()
    {
        return "reports/bot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  771 => 598,  419 => 249,  415 => 248,  411 => 247,  407 => 246,  402 => 245,  393 => 244,  238 => 98,  227 => 96,  223 => 95,  214 => 88,  203 => 86,  199 => 85,  191 => 79,  180 => 77,  176 => 76,  131 => 34,  114 => 19,  105 => 18,  94 => 16,  91 => 14,  82 => 13,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
    <link href=\"{{ asset('assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
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

                            <div class=\"col-md-12 col-xs-12\">
                                <div class=\"caption font-dark\">
                                    <button type=\"button\" id=\"bulkPlacementSearchBtn\" class=\"btn green\" data-toggle=\"modal\" href=\"#bulk-modal\"><i class=\"fa fa-cubes\"></i> Bulk Search</button>
                                    <button type=\"button\" id=\"deleteRecordsBtn\" class=\"btn red\" data-toggle=\"modal\" href=\"#delete-modal\"> <i class=\"fa fa-trash\"></i> Delete</button>
                                    <button type=\"button\" id=\"refreshTable\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-refresh\"></i> Reload Table</span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                        <div id=\"bulk-modal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-md\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-cubes\"></i> Bulk Search</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"row\">

                                            <div class=\"col-lg-12\">
                                                <div class=\"form-group\">
                                                        <label>Placements</label>
                                                        <br>
                                                        <input id=\"bulkPlacementInput\" type=\"text\" class=\"form-control\" data-role=\"tagsinput\"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">

                                        <button type=\"button\" id=\"queryBulkPlacementSearch\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Search</span>  </button>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id=\"delete-modal\" class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-sm\">
                                <div class=\"modal-content\">

                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-warning\"></i> Warning</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <p>Are you sure do want to delete selected records?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">

                                        <button type=\"button\" id=\"confirmDeleteRecordsBtn\" class=\"btn red spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-trash\"></i> Delete </span> </button>

                                    </div>

                                </div>
                            </div>
                        </div>



                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#datatable-responsive .checkboxes\" />
                                                    <span></span>
                                                </label>
                                            </th>
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
                                            <th>Frequency </th>
                                            <th>Starting Time </th>
                                            <th>Executed Time </th>
                                            <th>Status</th>
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
    <script src=\"{{ asset('assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/typeahead/handlebars.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/typeahead/typeahead.bundle.min.js') }}\" type=\"text/javascript\"></script>
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
                    aoData.push({\"name\": \"bulkPlacement\", \"value\": \$('#bulkPlacementInput').val()});
                    \$.getJSON(sSource, aoData, function (json) {
                        /* Do whatever additional processing you want on the callback, then tell DataTables */
                        fnCallback(json)
                    });
                },
                \"sAjaxSource\": \"/ajax/get-reports-bot\",

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
                    {  // set default column settings
                        'orderable': false,
                        'targets': [0]
                    },
                    {
                        \"searchable\": false,
                        \"targets\": [0]
                    },
                    {
                        \"className\": \"dt-right\"
                        //\"targets\": [2]
                    }
                ],
                \"order\": [[14, \"desc\"]],
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
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Placement List',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Placement List',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ]


            });

            table.find('.group-checkable').change(function () {
                var set = jQuery(this).attr(\"data-set\");
                var checked = jQuery(this).is(\":checked\");
                jQuery(set).each(function () {
                    if (checked) {
                        \$(this).prop(\"checked\", true);
                        \$(this).parents('tr').addClass(\"active\");
                    } else {
                        \$(this).prop(\"checked\", false);
                        \$(this).parents('tr').removeClass(\"active\");
                    }
                });
            });

            table.on('change', 'tbody tr .checkboxes', function () {
                \$(this).parents('tr').toggleClass(\"active\");
            });


            \$('#datatable-responsive').checkboxes('range', true);

            \$('#filterBtn').click(function () {
                var l = Ladda.create(\$(this)[0]);
                l.start();

                oTable.ajax.reload(function () {
                    l.stop();
                });
            });

            \$('#refreshTable').click(function () {
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
                \$chkboxes = \$('.report-record');
                \$chkboxes.click(function (e) {
                    if (!lastChecked) {
                        lastChecked = this;
                        return;
                    }

                    if (e.shiftKey) {
                        var start = \$chkboxes.index(this);
                        var end = \$chkboxes.index(lastChecked);

                        \$chkboxes.slice(Math.min(start, end), Math.max(start, end) + 1).prop('checked', lastChecked.checked);

                    }

                    lastChecked = this;
                });
            });


            \$('#queryBulkPlacementSearch').click(function(){
                console.log(\$('#bulkPlacementInput').tagsinput('items'));
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                    \$('#bulk-modal').modal('hide');
                    \$('#bulkPlacementInput').tagsinput('removeAll');
                });

            })


            \$('#confirmDeleteRecordsBtn').on('click', function(){
                \$btnSpinner = \$(this)[0];
                var data = {bundle: 'AppBundle:Reportsbot', items:[]};
                \$i = 0;
                \$('input:checkbox.report-record').each(function () {


                    if(\$(this).is(':checked') == true){
                        var id = (this.checked ? \$(this).data('id') : \"\");

                        data.items.push({id: id});
                        // \$campaigns.push({\$i: {vid: voluumId, campid: campId, campname: campName}});
                    }


                });

                console.log(data);
                reportsDelete(\$btnSpinner, data);

            });

        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/reports/bot.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", "reports/bot.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\bot.html.twig");
    }
}
