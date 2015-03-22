<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Contact/DashboardContact.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Contact_DAO_DashboardContact extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_dashboard_contact';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Dashboard ID
   *
   * @var int unsigned
   */
  public $dashboard_id;
  /**
   * Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * column no for this widget
   *
   * @var boolean
   */
  public $column_no;
  /**
   * Is Minimized?
   *
   * @var boolean
   */
  public $is_minimized;
  /**
   * Is Fullscreen?
   *
   * @var boolean
   */
  public $is_fullscreen;
  /**
   * Is this widget active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Ordering of the widgets.
   *
   * @var int
   */
  public $weight;
  /**
   * dashlet content
   *
   * @var longtext
   */
  public $content;
  /**
   * When was content populated
   *
   * @var datetime
   */
  public $created_date;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_dashboard_contact
   */
  function __construct()
  {
    $this->__table = 'civicrm_dashboard_contact';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_Reference_Interface
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'dashboard_id', 'civicrm_dashboard', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Dashboard Contact ID') ,
          'required' => true,
        ) ,
        'dashboard_id' => array(
          'name' => 'dashboard_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Dashboard') ,
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_Dashboard',
        ) ,
        'contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Dashboard Contact') ,
          'required' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'column_no' => array(
          'name' => 'column_no',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Column No') ,
        ) ,
        'is_minimized' => array(
          'name' => 'is_minimized',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Dashlet is Minimized?') ,
        ) ,
        'is_fullscreen' => array(
          'name' => 'is_fullscreen',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Dashlet is FullScreen?') ,
          'default' => '1',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Dashlet is Active?') ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Weight') ,
        ) ,
        'content' => array(
          'name' => 'content',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Content') ,
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Dashlet Created On') ,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'dashboard_id' => 'dashboard_id',
        'contact_id' => 'contact_id',
        'column_no' => 'column_no',
        'is_minimized' => 'is_minimized',
        'is_fullscreen' => 'is_fullscreen',
        'is_active' => 'is_active',
        'weight' => 'weight',
        'content' => 'content',
        'created_date' => 'created_date',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['dashboard_contact'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['dashboard_contact'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
