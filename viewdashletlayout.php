<?php

require_once 'viewdashletlayout.civix.php';
use CRM_Viewdashletlayout_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function viewdashletlayout_civicrm_config(&$config) {
  _viewdashletlayout_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_contactSummaryBlocks().
 *
 * @link https://github.com/civicrm/org.civicrm.contactlayout
 */
function viewdashletlayout_civicrm_contactSummaryBlocks(&$blocks) {
  $dashlets = civicrm_api3('Dashboard', 'get', array(
    'name' => array('LIKE' => '%dashlet_view%'),
    'options' => array('limit' => 0),
  ));
  if (empty($dashlets['count'])) {
    return;
  }
  // Provide our own group for these blocks.
  $blocks += [
    'views' => [
      'title' => ts('Views Dashlets'),
      'icon' => 'fa-tachometer',
      'blocks' => [],
    ]
  ];
  foreach ($dashlets['values'] as $key => $dashlet) {
    $blocks['views']['blocks'][$dashlet['name']] = [
      'id' => $dashlet['id'],
      'name' => $dashlet['name'],
      'title' => $dashlet['label'],
      'collapsible' => FALSE,
      'showTitle' => TRUE,
      'content_url' => CRM_Utils_System::url($dashlet['url']),
      'tpl_file' => 'CRM/Viewdashletlayout/Dashlet.tpl',
      'edit' => FALSE,
    ];
  }
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function viewdashletlayout_civicrm_xmlMenu(&$files) {
  _viewdashletlayout_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function viewdashletlayout_civicrm_install() {
  _viewdashletlayout_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function viewdashletlayout_civicrm_postInstall() {
  _viewdashletlayout_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function viewdashletlayout_civicrm_uninstall() {
  _viewdashletlayout_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function viewdashletlayout_civicrm_enable() {
  _viewdashletlayout_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function viewdashletlayout_civicrm_disable() {
  _viewdashletlayout_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function viewdashletlayout_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _viewdashletlayout_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function viewdashletlayout_civicrm_managed(&$entities) {
  _viewdashletlayout_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function viewdashletlayout_civicrm_caseTypes(&$caseTypes) {
  _viewdashletlayout_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function viewdashletlayout_civicrm_angularModules(&$angularModules) {
  _viewdashletlayout_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function viewdashletlayout_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _viewdashletlayout_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function viewdashletlayout_civicrm_entityTypes(&$entityTypes) {
  _viewdashletlayout_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function viewdashletlayout_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function viewdashletlayout_civicrm_navigationMenu(&$menu) {
  _viewdashletlayout_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _viewdashletlayout_civix_navigationMenu($menu);
} // */
