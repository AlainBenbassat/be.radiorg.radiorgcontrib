<?php

require_once 'radiorgcontrib.civix.php';
use CRM_Radiorgcontrib_ExtensionUtil as E;

function radiorgcontrib_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution_Main') {
    $defaults = [];

    // get the amount
    $amount = CRM_Utils_Request::retrieve('bedrag', 'Integer');
    if ($amount) {
      if ($amount == 20) {
        $defaults['price_2'] = '1';
      }
      elseif ($amount == 40) {
        $defaults['price_2'] = '2';
      }
      elseif ($amount == 100) {
        $defaults['price_2'] = '3';
      }
      else {
        $defaults['price_2'] = '0';
        $defaults['price_3'] = $amount;
      }
    }

    $form->setDefaults($defaults);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function radiorgcontrib_civicrm_config(&$config) {
  _radiorgcontrib_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function radiorgcontrib_civicrm_xmlMenu(&$files) {
  _radiorgcontrib_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function radiorgcontrib_civicrm_install() {
  _radiorgcontrib_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function radiorgcontrib_civicrm_postInstall() {
  _radiorgcontrib_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function radiorgcontrib_civicrm_uninstall() {
  _radiorgcontrib_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function radiorgcontrib_civicrm_enable() {
  _radiorgcontrib_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function radiorgcontrib_civicrm_disable() {
  _radiorgcontrib_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function radiorgcontrib_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _radiorgcontrib_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function radiorgcontrib_civicrm_managed(&$entities) {
  _radiorgcontrib_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function radiorgcontrib_civicrm_caseTypes(&$caseTypes) {
  _radiorgcontrib_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function radiorgcontrib_civicrm_angularModules(&$angularModules) {
  _radiorgcontrib_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function radiorgcontrib_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _radiorgcontrib_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function radiorgcontrib_civicrm_entityTypes(&$entityTypes) {
  _radiorgcontrib_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function radiorgcontrib_civicrm_themes(&$themes) {
  _radiorgcontrib_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
function radiorgcontrib_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function radiorgcontrib_civicrm_navigationMenu(&$menu) {
  _radiorgcontrib_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _radiorgcontrib_civix_navigationMenu($menu);
} // */
