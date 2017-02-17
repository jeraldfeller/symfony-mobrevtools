<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_blacklistreport_showbotreport
        if ($pathinfo === '/reports/blacklist') {
            return array (  '_controller' => 'AppBundle\\Controller\\BlacklistReportController::showBotReportAction',  '_route' => 'app_blacklistreport_showbotreport',);
        }

        // app_blacklistreport_ajaxgetreportsbot
        if ($pathinfo === '/ajax/get-reports-blacklist') {
            return array (  '_controller' => 'AppBundle\\Controller\\BlacklistReportController::ajaxGetReportsBot',  '_route' => 'app_blacklistreport_ajaxgetreportsbot',);
        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_blacklistreport_deletedata
            if ($pathinfo === '/reports/delete-data') {
                return array (  '_controller' => 'AppBundle\\Controller\\BlacklistReportController::deleteDataAction',  '_route' => 'app_blacklistreport_deletedata',);
            }

            // app_botreport_showbotreport
            if ($pathinfo === '/reports/bot') {
                return array (  '_controller' => 'AppBundle\\Controller\\BotReportController::showBotReportAction',  '_route' => 'app_botreport_showbotreport',);
            }

        }

        // app_botreport_ajaxgetreportsbot
        if ($pathinfo === '/ajax/get-reports-bot') {
            return array (  '_controller' => 'AppBundle\\Controller\\BotReportController::ajaxGetReportsBot',  '_route' => 'app_botreport_ajaxgetreportsbot',);
        }

        // app_botreport_deletedata
        if ($pathinfo === '/reports/delete-data') {
            return array (  '_controller' => 'AppBundle\\Controller\\BotReportController::deleteDataAction',  '_route' => 'app_botreport_deletedata',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // campaignDetailsAll
            if ($pathinfo === '/campaign/get-details/all') {
                return array (  '_controller' => 'AppBundle\\Controller\\CampaignController::getCampaignDetailsAllAction',  '_route' => 'campaignDetailsAll',);
            }

            if (0 === strpos($pathinfo, '/common/create-')) {
                // commonCreateDateRange
                if ($pathinfo === '/common/create-date-range/{$startDate}/{$endDate}') {
                    return array (  'startDate' => NULL,  'endDate' => NULL,  '_controller' => 'AppBundle\\Controller\\CommonController::createDateRangeAction',  '_route' => 'commonCreateDateRange',);
                }

                // commonCreateTimeRange
                if ($pathinfo === '/common/create-time-range/{$start}/{$end}') {
                    return array (  'start' => NULL,  'end' => NULL,  '_controller' => 'AppBundle\\Controller\\CommonController::createTimeRangeAction',  '_route' => 'commonCreateTimeRange',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/ajax/get-')) {
            // commonGetActiveCampaigns
            if ($pathinfo === '/ajax/get-active-campaigns') {
                return array (  '_controller' => 'AppBundle\\Controller\\CommonController::getActiveCampaignsAction',  '_route' => 'commonGetActiveCampaigns',);
            }

            // commonGetImportedCampaigns
            if ($pathinfo === '/ajax/get-imported-campaigns') {
                return array (  '_controller' => 'AppBundle\\Controller\\CommonController::getImportedCampaignsAction',  '_route' => 'commonGetImportedCampaigns',);
            }

        }

        // app_conversionsreport_showconversionsreport
        if ($pathinfo === '/reports/conversions') {
            return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::showConversionsReportAction',  '_route' => 'app_conversionsreport_showconversionsreport',);
        }

        if (0 === strpos($pathinfo, '/ajax/get-')) {
            if (0 === strpos($pathinfo, '/ajax/get-imported-campaigns')) {
                // commonGetImportedCampaignsAll
                if ($pathinfo === '/ajax/get-imported-campaigns/all') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::getImportedCampaignsAllAction',  '_route' => 'commonGetImportedCampaignsAll',);
                }

                // commonGetImportedCampaignsLabelAll
                if ($pathinfo === '/ajax/get-imported-campaigns-label/all') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::getImportedCampaignsLabelAllAction',  '_route' => 'commonGetImportedCampaignsLabelAll',);
                }

            }

            // app_conversionsreport_ajaxgetreportsconversions
            if ($pathinfo === '/ajax/get-reports-conversions') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::ajaxGetReportsConversions',  '_route' => 'app_conversionsreport_ajaxgetreportsconversions',);
            }

        }

        if (0 === strpos($pathinfo, '/reports')) {
            // clearConversionReport
            if ($pathinfo === '/reports/clear-conversion-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::clearConversionReportAction',  '_route' => 'clearConversionReport',);
            }

            if (0 === strpos($pathinfo, '/reports/fetch-')) {
                // fetchConversions
                if ($pathinfo === '/reports/fetch-conversions') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::fetchConversionsAction',  '_route' => 'fetchConversions',);
                }

                // fetchIpData
                if ($pathinfo === '/reports/fetch-ip-data') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::fetchIpDataAction',  '_route' => 'fetchIpData',);
                }

            }

            if (0 === strpos($pathinfo, '/reports/merge-ip-conversion-data')) {
                // mergeIpConversionData
                if ($pathinfo === '/reports/merge-ip-conversion-data') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::mergeIpConversionDataAction',  '_route' => 'mergeIpConversionData',);
                }

                if (0 === strpos($pathinfo, '/reports/merge-ip-conversion-data-')) {
                    // mergeIpDataConversionSecondPhase
                    if ($pathinfo === '/reports/merge-ip-conversion-data-second-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::mergeIpConversionDataSecondPhaseAction',  '_route' => 'mergeIpDataConversionSecondPhase',);
                    }

                    // mergeIpDataConversionThirdPhase
                    if ($pathinfo === '/reports/merge-ip-conversion-data-third-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::mergeIpConversionDataThirdPhaseAction',  '_route' => 'mergeIpDataConversionThirdPhase',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/reports/final')) {
                if (0 === strpos($pathinfo, '/reports/finalizing-')) {
                    // finalizingFirstPhase
                    if ($pathinfo === '/reports/finalizing-first-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalizingFirstPhaseAction',  '_route' => 'finalizingFirstPhase',);
                    }

                    // finalizingSecondPhase
                    if ($pathinfo === '/reports/finalizing-second-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalizingSecondPhaseAction',  '_route' => 'finalizingSecondPhase',);
                    }

                    // finalizingThirdPhase
                    if ($pathinfo === '/reports/finalizing-third-phase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalizingThirdPhaseAction',  '_route' => 'finalizingThirdPhase',);
                    }

                }

                // finalPhase
                if ($pathinfo === '/reports/final-phase') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::finalPhaseAction',  '_route' => 'finalPhase',);
                }

            }

            // app_conversionsreport_getimporteddatareport
            if ($pathinfo === '/reports/get-imported-data-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::getImportedDataReportAction',  '_route' => 'app_conversionsreport_getimporteddatareport',);
            }

            // app_conversionsreport_importfile
            if ($pathinfo === '/reports/import-file') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::importFileAction',  '_route' => 'app_conversionsreport_importfile',);
            }

            // app_conversionsreport_updateimportfile
            if ($pathinfo === '/reports/update-import-file') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::updateImportFileAction',  '_route' => 'app_conversionsreport_updateimportfile',);
            }

            // app_conversionsreport_deletelabel
            if ($pathinfo === '/reports/delete-label') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::deleteLabelAction',  '_route' => 'app_conversionsreport_deletelabel',);
            }

            // clearTmpFiles
            if ($pathinfo === '/reports/clear-tmp-files') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConversionsReportController::clearTmpFilesAction',  '_route' => 'clearTmpFiles',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/delete')) {
            if (0 === strpos($pathinfo, '/delete/reports')) {
                // deleteReports
                if ($pathinfo === '/delete/reports/{$data}') {
                    return array (  'data' => NULL,  '_controller' => 'AppBundle\\Controller\\DeletesController::deleteReportsAction',  '_route' => 'deleteReports',);
                }

                // deleteReportsAll
                if ($pathinfo === '/delete/reports-all/{$data}') {
                    return array (  'data' => NULL,  '_controller' => 'AppBundle\\Controller\\DeletesController::deleteReportsAllAction',  '_route' => 'deleteReportsAll',);
                }

            }

            // deleteIndividual
            if ($pathinfo === '/delete/individual/{$appBundle}/{$column}/{$value}') {
                return array (  'appBundle' => NULL,  'column' => NULL,  'value' => NULL,  '_controller' => 'AppBundle\\Controller\\DeletesController::deleteIndividualColumnAction',  '_route' => 'deleteIndividual',);
            }

        }

        // getFilters
        if ($pathinfo === '/filters/{$bundle}/{$column}') {
            return array (  'bundle' => NULL,  'column' => NULL,  '_controller' => 'AppBundle\\Controller\\FiltersController::getFiltersAction',  '_route' => 'getFilters',);
        }

        // app_ip_showipreport
        if ($pathinfo === '/reports/ip') {
            return array (  '_controller' => 'AppBundle\\Controller\\IpController::showIpReportAction',  '_route' => 'app_ip_showipreport',);
        }

        // app_ip_ajaxgetreportsip
        if ($pathinfo === '/ajax/get-reports-ip') {
            return array (  '_controller' => 'AppBundle\\Controller\\IpController::ajaxGetReportsIp',  '_route' => 'app_ip_ajaxgetreportsip',);
        }

        // app_logtracker_showlogtrackerreport
        if ($pathinfo === '/reports/log-tracker') {
            return array (  '_controller' => 'AppBundle\\Controller\\LogTrackerController::showLogTrackerReportAction',  '_route' => 'app_logtracker_showlogtrackerreport',);
        }

        // app_logtracker_ajaxgetreportsip
        if ($pathinfo === '/ajax/get-reports-log-tracker') {
            return array (  '_controller' => 'AppBundle\\Controller\\LogTrackerController::ajaxGetReportsIp',  '_route' => 'app_logtracker_ajaxgetreportsip',);
        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_metrics_showmetricsreport
            if ($pathinfo === '/reports/metrics') {
                return array (  '_controller' => 'AppBundle\\Controller\\MetricsController::showMetricsReportAction',  '_route' => 'app_metrics_showmetricsreport',);
            }

            // app_metrics_getmetricsreport
            if ($pathinfo === '/reports/get-metrics-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\MetricsController::getMetricsReportAction',  '_route' => 'app_metrics_getmetricsreport',);
            }

        }

        // app_offers_showofferspage
        if ($pathinfo === '/offers') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::showOffersPageAction',  '_route' => 'app_offers_showofferspage',);
        }

        // app_offers_addoffers
        if ($pathinfo === '/add-offers') {
            return array (  '_controller' => 'AppBundle\\Controller\\OffersController::addOffersAction',  '_route' => 'app_offers_addoffers',);
        }

        if (0 === strpos($pathinfo, '/global-settings')) {
            // app_settings_showapiaccesscredentials
            if ($pathinfo === '/global-settings/api-access') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::showApiAccessCredentials',  '_route' => 'app_settings_showapiaccesscredentials',);
            }

            // app_settings_updateaccess
            if ($pathinfo === '/global-settings/update-access-action') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::updateAccessAction',  '_route' => 'app_settings_updateaccess',);
            }

            // app_settings_showtrafficsourcesettings
            if ($pathinfo === '/global-settings/traffic-source') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::showTrafficSourceSettings',  '_route' => 'app_settings_showtrafficsourcesettings',);
            }

        }

        // app_settings_ajaxgettrafficsource
        if ($pathinfo === '/ajax/get-traffic-source') {
            return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::ajaxGetTrafficSource',  '_route' => 'app_settings_ajaxgettrafficsource',);
        }

        if (0 === strpos($pathinfo, '/global-settings')) {
            if (0 === strpos($pathinfo, '/global-settings/traffic-')) {
                // app_settings_trafficdelete
                if ($pathinfo === '/global-settings/traffic-delete-action') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::trafficDeleteAction',  '_route' => 'app_settings_trafficdelete',);
                }

                // app_settings_gettraffic
                if ($pathinfo === '/global-settings/traffic-get-action') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::getTrafficAction',  '_route' => 'app_settings_gettraffic',);
                }

            }

            // app_settings_importtrafficsource
            if ($pathinfo === '/global-settings/add-trafficsource') {
                return array (  '_controller' => 'AppBundle\\Controller\\SettingsController::importTrafficsourceAction',  '_route' => 'app_settings_importtrafficsource',);
            }

        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_trafficmonitoring_showipreport
            if ($pathinfo === '/reports/traffic-monitoring') {
                return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::showIpReportAction',  '_route' => 'app_trafficmonitoring_showipreport',);
            }

            // app_trafficmonitoring_gettrafficmonitoringreportsfilters
            if ($pathinfo === '/reports/get-traffic-source-monitoring-reports-filter') {
                return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::getTrafficMonitoringReportsFiltersAction',  '_route' => 'app_trafficmonitoring_gettrafficmonitoringreportsfilters',);
            }

        }

        // app_trafficmonitoring_ajaxgetreportstrafficmonitoring
        if ($pathinfo === '/ajax/get-reports-traffic-monitoring') {
            return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::ajaxGetReportsTrafficMonitoring',  '_route' => 'app_trafficmonitoring_ajaxgetreportstrafficmonitoring',);
        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_trafficmonitoring_getcampaigntrafficsettings
            if ($pathinfo === '/reports/get-campaign-traffic-settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::getCampaignTrafficSettingsAction',  '_route' => 'app_trafficmonitoring_getcampaigntrafficsettings',);
            }

            if (0 === strpos($pathinfo, '/reports/update-traffic-monitoring-')) {
                // app_trafficmonitoring_updatecampaigntrafficsettingsvisits
                if ($pathinfo === '/reports/update-traffic-monitoring-settings') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficSettingsVisits',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficsettingsvisits',);
                }

                // app_trafficmonitoring_updatecampaigntrafficnotificationsettings
                if ($pathinfo === '/reports/update-traffic-monitoring-notification-settings') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TrafficMonitoringController::updateCampaignTrafficNotificationSettings',  '_route' => 'app_trafficmonitoring_updatecampaigntrafficnotificationsettings',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // app_users_renderloginform
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::renderLoginForm',  '_route' => 'app_users_renderloginform',);
            }

            // app_users_create
            if ($pathinfo === '/user/create-account') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::createAction',  '_route' => 'app_users_create',);
            }

            if (0 === strpos($pathinfo, '/user/get-account')) {
                // app_users_showactionbyid
                if (preg_match('#^/user/get\\-account/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_users_showactionbyid')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::showActionById',));
                }

                // app_users_showactionall
                if ($pathinfo === '/user/get-account-all') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::showActionAll',  '_route' => 'app_users_showactionall',);
                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                // app_users_login
                if ($pathinfo === '/user/login-action') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::loginAction',  '_route' => 'app_users_login',);
                }

                // app_users_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UsersController::logout',  '_route' => 'app_users_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/voluum-')) {
            // voluumReport
            if ($pathinfo === '/api/voluum-report/{$url}/{$query}/{$method}/{$sessionId}') {
                return array (  'url' => NULL,  'query' => NULL,  'method' => NULL,  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::getVoluumReportsAction',  '_route' => 'voluumReport',);
            }

            // voluumPost
            if ($pathinfo === '/api/voluum-post/{$url}/{$query}/{$method}/{$sessionId}') {
                return array (  'url' => NULL,  'query' => NULL,  'method' => NULL,  'sessionId' => NULL,  '_controller' => 'AppBundle\\Controller\\VoluumApiController::postVoluumAction',  '_route' => 'voluumPost',);
            }

        }

        if (0 === strpos($pathinfo, '/reports')) {
            // app_whitelistreport_showwhitelistreport
            if ($pathinfo === '/reports/whitelist') {
                return array (  '_controller' => 'AppBundle\\Controller\\WhitelistReportController::showWhitelistReportAction',  '_route' => 'app_whitelistreport_showwhitelistreport',);
            }

            // app_whitelistreport_getwhitelistreport
            if ($pathinfo === '/reports/get-whitelist-report') {
                return array (  '_controller' => 'AppBundle\\Controller\\WhitelistReportController::getWhitelistReportAction',  '_route' => 'app_whitelistreport_getwhitelistreport',);
            }

        }

        // app_whitelistreport_ajaxgetreportswhitelist
        if ($pathinfo === '/ajax/get-reports-whitelist') {
            return array (  '_controller' => 'AppBundle\\Controller\\WhitelistReportController::ajaxGetReportsWhitelist',  '_route' => 'app_whitelistreport_ajaxgetreportswhitelist',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
