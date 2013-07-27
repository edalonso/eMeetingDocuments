<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_db0f246
        if ($pathinfo === '/js/db0f246.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_db0f246',);
        }

        // _assetic_db0f246_0
        if ($pathinfo === '/js/db0f246_part_1_0-jquery-1.7.1.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_db0f246_0',);
        }

        // _assetic_db0f246_1
        if ($pathinfo === '/js/db0f246_part_1_1-jquery-ui-1.8.18.custom.min_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_db0f246_1',);
        }

        // _assetic_db0f246_2
        if ($pathinfo === '/js/db0f246_part_1_2-jquery.tipTip_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_db0f246_2',);
        }

        // _assetic_db0f246_3
        if ($pathinfo === '/js/db0f246_part_1_2-js_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_db0f246_3',);
        }

        // _assetic_db0f246_4
        if ($pathinfo === '/js/db0f246_part_1_2-tabla_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_db0f246_4',);
        }

        // _assetic_db0f246_5
        if ($pathinfo === '/js/db0f246_part_1_3-addbox_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_db0f246_5',);
        }

        // _assetic_db0f246_6
        if ($pathinfo === '/js/db0f246_part_1_4-autocomplete_7.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_db0f246_6',);
        }

        // _assetic_db0f246_7
        if ($pathinfo === '/js/db0f246_part_1_5-modal_dialog_8.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_db0f246_7',);
        }

        // _assetic_db0f246_8
        if ($pathinfo === '/js/db0f246_part_1_6-desplegable_9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_db0f246_8',);
        }

        // _assetic_db0f246_9
        if ($pathinfo === '/js/db0f246_part_1_7-jquery.tokeninput_10.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_db0f246_9',);
        }

        // _assetic_db0f246_10
        if ($pathinfo === '/js/db0f246_part_1_8-filter_meeting_11.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_db0f246_10',);
        }

        // _assetic_db0f246_11
        if ($pathinfo === '/js/db0f246_part_1_88-bootstrap_12.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_db0f246_11',);
        }

        // _assetic_db0f246_12
        if ($pathinfo === '/js/db0f246_part_1_9-jquery.karmicgraphs_13.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_db0f246_12',);
        }

        // _assetic_db0f246_13
        if ($pathinfo === '/js/db0f246_part_1_99-anonymous_14.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_db0f246_13',);
        }

        // _assetic_db0f246_14
        if ($pathinfo === '/js/db0f246_part_1_onTop_15.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_db0f246_14',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // indexgroup
        if (0 === strpos($pathinfo, '/group') && preg_match('#^/group/(?P<key>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::indexAction',)), array('_route' => 'indexgroup'));
        }

        // indexgroup_recording
        if (0 === strpos($pathinfo, '/group/recording') && preg_match('#^/group/recording/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::recordingAction',)), array('_route' => 'indexgroup_recording'));
        }

        // indexgroup_immediate
        if (0 === strpos($pathinfo, '/group/immediate') && preg_match('#^/group/immediate/(?P<key>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::immediateAction',)), array('_route' => 'indexgroup_immediate'));
        }

        // indexgroup_cancel
        if (0 === strpos($pathinfo, '/group/cancel') && preg_match('#^/group/cancel/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::cancelAction',)), array('_route' => 'indexgroup_cancel'));
        }

        // indexgroup_delete
        if (0 === strpos($pathinfo, '/group/delete') && preg_match('#^/group/delete/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::deleteAction',)), array('_route' => 'indexgroup_delete'));
        }

        // indexgroup_edit
        if (0 === strpos($pathinfo, '/group/edit') && preg_match('#^/group/edit/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::editAction',)), array('_route' => 'indexgroup_edit'));
        }

        // indexgroup_update
        if (0 === strpos($pathinfo, '/group/update') && preg_match('#^/group/update/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_indexgroup_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::updateAction',)), array('_route' => 'indexgroup_update'));
        }
        not_indexgroup_update:

        // indexgroup_historical
        if (0 === strpos($pathinfo, '/group/historical') && preg_match('#^/group/historical/(?P<key>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::historicalAction',)), array('_route' => 'indexgroup_historical'));
        }

        // indexgroup_month
        if (0 === strpos($pathinfo, '/group/historical') && preg_match('#^/group/historical/(?P<key>[^/]+?)/(?P<string_month>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::historicalAction',)), array('_route' => 'indexgroup_month'));
        }

        // group
        if (rtrim($pathinfo, '/') === '/groupadmin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'group');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::indexAction',  '_route' => 'group',);
        }

        // group_show
        if (0 === strpos($pathinfo, '/groupadmin') && preg_match('#^/groupadmin/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::showAction',)), array('_route' => 'group_show'));
        }

        // group_new
        if ($pathinfo === '/groupadmin/new') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::newAction',  '_route' => 'group_new',);
        }

        // group_create
        if ($pathinfo === '/groupadmin/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_group_create;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::createAction',  '_route' => 'group_create',);
        }
        not_group_create:

        // group_edit
        if (0 === strpos($pathinfo, '/groupadmin') && preg_match('#^/groupadmin/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::editAction',)), array('_route' => 'group_edit'));
        }

        // group_update
        if (0 === strpos($pathinfo, '/groupadmin') && preg_match('#^/groupadmin/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_group_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::updateAction',)), array('_route' => 'group_update'));
        }
        not_group_update:

        // group_delete
        if (0 === strpos($pathinfo, '/groupadmin') && preg_match('#^/groupadmin/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_group_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::deleteAction',)), array('_route' => 'group_delete'));
        }
        not_group_delete:

        // wizard
        if (rtrim($pathinfo, '/') === '/wizard') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wizard');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::indexAction',  '_route' => 'wizard',);
        }

        // wizard_metadata
        if ($pathinfo === '/wizard/metadata') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::metadataAction',  '_route' => 'wizard_metadata',);
        }

        // wizard_metadata_submit
        if ($pathinfo === '/wizard/metadata_submit') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_wizard_metadata_submit;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::metadataSubmitAction',  '_route' => 'wizard_metadata_submit',);
        }
        not_wizard_metadata_submit:

        // wizard_date
        if ($pathinfo === '/wizard/date') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::dateAction',  '_route' => 'wizard_date',);
        }

        // wizard_date_submit
        if ($pathinfo === '/wizard/date_submit') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_wizard_date_submit;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::dateSubmitAction',  '_route' => 'wizard_date_submit',);
        }
        not_wizard_date_submit:

        // wizard_users
        if ($pathinfo === '/wizard/users') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::usersAction',  '_route' => 'wizard_users',);
        }

        // wizard_users_submit
        if ($pathinfo === '/wizard/users_submit') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_wizard_users_submit;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::usersSubmitAction',  '_route' => 'wizard_users_submit',);
        }
        not_wizard_users_submit:

        // wizard_persist
        if ($pathinfo === '/wizard/persist') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::persistAction',  '_route' => 'wizard_persist',);
        }

        // wizard_error
        if ($pathinfo === '/wizard/error') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::errorAction',  '_route' => 'wizard_error',);
        }

        // wizard_end
        if ($pathinfo === '/wizard/end') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::endAction',  '_route' => 'wizard_end',);
        }

        // index_personal
        if (rtrim($pathinfo, '/') === '/personal') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index_personal');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\PersonalController::indexAction',  '_route' => 'index_personal',);
        }

        // meeting
        if (rtrim($pathinfo, '/') === '/meeting') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'meeting');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::indexAction',  '_route' => 'meeting',);
        }

        // meeting_show
        if (0 === strpos($pathinfo, '/meeting') && preg_match('#^/meeting/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::showAction',)), array('_route' => 'meeting_show'));
        }

        // meeting_new
        if ($pathinfo === '/meeting/new') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::newAction',  '_route' => 'meeting_new',);
        }

        // meeting_create
        if ($pathinfo === '/meeting/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_meeting_create;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::createAction',  '_route' => 'meeting_create',);
        }
        not_meeting_create:

        // meeting_edit
        if (0 === strpos($pathinfo, '/meeting') && preg_match('#^/meeting/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::editAction',)), array('_route' => 'meeting_edit'));
        }

        // meeting_update
        if (0 === strpos($pathinfo, '/meeting') && preg_match('#^/meeting/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_meeting_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::updateAction',)), array('_route' => 'meeting_update'));
        }
        not_meeting_update:

        // meeting_delete
        if (0 === strpos($pathinfo, '/meeting') && preg_match('#^/meeting/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_meeting_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::deleteAction',)), array('_route' => 'meeting_delete'));
        }
        not_meeting_delete:

        // index_room
        if (0 === strpos($pathinfo, '/room') && preg_match('#^/room/(?P<salt>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  'secret' => false,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',)), array('_route' => 'index_room'));
        }

        // index_secretroom
        if (0 === strpos($pathinfo, '/secretroom') && preg_match('#^/secretroom/(?P<salt>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',)), array('_route' => 'index_secretroom'));
        }

        // index_noanonymousroom
        if (0 === strpos($pathinfo, '/noanonymousroom') && preg_match('#^/noanonymousroom/(?P<salt>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  'secret' => false,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',)), array('_route' => 'index_noanonymousroom'));
        }

        // index_noanonymoussecretroom
        if (0 === strpos($pathinfo, '/noanonymoussecretroom') && preg_match('#^/noanonymoussecretroom/(?P<salt>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',)), array('_route' => 'index_noanonymoussecretroom'));
        }

        // cmar_meeting_middleware_index
        if ($pathinfo === '/middleware') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MiddlewareController::indexAction',  '_route' => 'cmar_meeting_middleware_index',);
        }

        // index_welcome
        if ($pathinfo === '/welcome') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::welcomeAction',  '_route' => 'index_welcome',);
        }

        // mail_sent
        if ($pathinfo === '/mail/sent') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::mailSentAction',  '_route' => 'mail_sent',);
        }

        // recover
        if (0 === strpos($pathinfo, '/recover') && preg_match('#^/recover/(?P<email>[^/]+?)/(?P<hash>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::recoverAction',)), array('_route' => 'recover'));
        }

        // recover_error
        if ($pathinfo === '/recover/error') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::recoverHashErrorAction',  '_route' => 'recover_error',);
        }

        // recover_update
        if ($pathinfo === '/recover/update') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::recoverUpdateAction',  '_route' => 'recover_update',);
        }

        // user
        if (rtrim($pathinfo, '/') === '/useradmin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::indexAction',  '_route' => 'user',);
        }

        // user_show
        if (0 === strpos($pathinfo, '/useradmin') && preg_match('#^/useradmin/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::showAction',)), array('_route' => 'user_show'));
        }

        // user_new
        if ($pathinfo === '/useradmin/new') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::newAction',  '_route' => 'user_new',);
        }

        // user_create
        if ($pathinfo === '/useradmin/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_create;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::createAction',  '_route' => 'user_create',);
        }
        not_user_create:

        // user_edit
        if (0 === strpos($pathinfo, '/useradmin') && preg_match('#^/useradmin/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::editAction',)), array('_route' => 'user_edit'));
        }

        // user_update
        if (0 === strpos($pathinfo, '/useradmin') && preg_match('#^/useradmin/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::updateAction',)), array('_route' => 'user_update'));
        }
        not_user_update:

        // user_delete
        if (0 === strpos($pathinfo, '/useradmin') && preg_match('#^/useradmin/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::deleteAction',)), array('_route' => 'user_delete'));
        }
        not_user_delete:

        // recording
        if (rtrim($pathinfo, '/') === '/recording') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'recording');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::indexAction',  '_route' => 'recording',);
        }

        // recording_show
        if (0 === strpos($pathinfo, '/recording') && preg_match('#^/recording/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::showAction',)), array('_route' => 'recording_show'));
        }

        // recording_new
        if ($pathinfo === '/recording/new') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::newAction',  '_route' => 'recording_new',);
        }

        // recording_create
        if ($pathinfo === '/recording/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_recording_create;
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::createAction',  '_route' => 'recording_create',);
        }
        not_recording_create:

        // recording_edit
        if (0 === strpos($pathinfo, '/recording') && preg_match('#^/recording/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::editAction',)), array('_route' => 'recording_edit'));
        }

        // recording_update
        if (0 === strpos($pathinfo, '/recording') && preg_match('#^/recording/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_recording_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::updateAction',)), array('_route' => 'recording_update'));
        }
        not_recording_update:

        // recording_delete
        if (0 === strpos($pathinfo, '/recording') && preg_match('#^/recording/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_recording_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::deleteAction',)), array('_route' => 'recording_delete'));
        }
        not_recording_delete:

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::indexAction',  '_route' => 'index',);
        }

        // index_recording
        if (0 === strpos($pathinfo, '/recording') && preg_match('#^/recording/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingAction',)), array('_route' => 'index_recording'));
        }

        // index_public_recording
        if (0 === strpos($pathinfo, '/recording_public') && preg_match('#^/recording_public/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingPublicAction',)), array('_route' => 'index_public_recording'));
        }

        // index_immediate
        if ($pathinfo === '/immediate') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::immediateAction',  '_route' => 'index_immediate',);
        }

        // magic_meeting
        if (0 === strpos($pathinfo, '/magic') && preg_match('#^/magic/(?P<magic>[^/]+?)/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changeToMagic',)), array('_route' => 'magic_meeting'));
        }

        // change_nickname
        if ($pathinfo === '/changenick') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changenickName',  '_route' => 'change_nickname',);
        }

        // update_rank
        if ($pathinfo === '/updaterank') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::updateRank',  '_route' => 'update_rank',);
        }

        // addusers_meeting
        if ($pathinfo === '/addusers') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::addUsersAction',  '_route' => 'addusers_meeting',);
        }

        // updateviewsalt_meeting
        if (0 === strpos($pathinfo, '/updateviewsalt') && preg_match('#^/updateviewsalt/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  'secret' => false,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::UpdateSalt',)), array('_route' => 'updateviewsalt_meeting'));
        }

        // updatesecretsalt_meeting
        if (0 === strpos($pathinfo, '/updatesecretsalt') && preg_match('#^/updatesecretsalt/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::UpdateSalt',)), array('_route' => 'updatesecretsalt_meeting'));
        }

        // index_cancel
        if (0 === strpos($pathinfo, '/cancel') && preg_match('#^/cancel/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::cancelAction',)), array('_route' => 'index_cancel'));
        }

        // index_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::editAction',)), array('_route' => 'index_edit'));
        }

        // index_update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_index_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::updateAction',)), array('_route' => 'index_update'));
        }
        not_index_update:

        // index_search_meeting
        if (0 === strpos($pathinfo, '/recordings') && preg_match('#^/recordings/(?P<meeting_id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingsAction',)), array('_route' => 'index_search_meeting'));
        }

        // index_historical
        if ($pathinfo === '/historical') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::historicalAction',  '_route' => 'index_historical',);
        }

        // index_month
        if (0 === strpos($pathinfo, '/historical') && preg_match('#^/historical/(?P<string_month>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::historicalAction',)), array('_route' => 'index_month'));
        }

        // change_password
        if (0 === strpos($pathinfo, '/change_password') && preg_match('#^/change_password/(?P<email>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changePasswordAction',)), array('_route' => 'change_password'));
        }

        // recording_list
        if (0 === strpos($pathinfo, '/r_list') && preg_match('#^/r_list/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingListAction',)), array('_route' => 'recording_list'));
        }

        // locked_recording
        if (0 === strpos($pathinfo, '/locked_record') && preg_match('#^/locked_record/(?P<locked>[^/]+?)/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::lockedRecordingAction',)), array('_route' => 'locked_recording'));
        }

        // recording_public_list
        if (0 === strpos($pathinfo, '/r_public_list') && preg_match('#^/r_public_list/(?P<secretsalt>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingPublicListAction',)), array('_route' => 'recording_public_list'));
        }

        // locked_meeting
        if (0 === strpos($pathinfo, '/locked') && preg_match('#^/locked/(?P<locked>[^/]+?)/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::lockedAction',)), array('_route' => 'locked_meeting'));
        }

        // user_form
        if (0 === strpos($pathinfo, '/u_form') && preg_match('#^/u_form/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::userFormAction',)), array('_route' => 'user_form'));
        }

        // ado_test
        if ($pathinfo === '/adobe_test') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::adoTestAction',  '_route' => 'ado_test',);
        }

        // user_list
        if ($pathinfo === '/u_list') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::listAction',  '_route' => 'user_list',);
        }

        // minimized_meeting
        if (0 === strpos($pathinfo, '/minimized') && preg_match('#^/minimized/(?P<id_meeting>[^/]+?)/(?P<id_user>[^/]+?)/(?P<minimized>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::minimizedAction',)), array('_route' => 'minimized_meeting'));
        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::adminAction',  '_route' => 'admin',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login_check');
            }
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
