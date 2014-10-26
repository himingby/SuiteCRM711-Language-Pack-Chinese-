<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => '版本',
  'LBL_MODULE_TITLE' => '版本:首页',
  'LBL_SEARCH_FORM_TITLE' => '查找版本',
  'LBL_LIST_FORM_TITLE' => '版本列表',
  'LBL_NEW_FORM_TITLE' => '新增版本',
  'LBL_RELEASE' => '版本:',
  'LBL_LIST_NAME' => '版本',
  'LBL_NAME' => '公布版本',
  'LBL_LIST_LIST_ORDER' => '排序',
  'LBL_LIST_ORDER' => '排序:',
  'LBL_LIST_STATUS' => '状态',
  'LBL_STATUS' => '状态:',
  'LNK_NEW_RELEASE' => '版本列表',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除版本。',
  'NTC_STATUS' => '设置状态为“停用”，版本会从下拉列表中移除。',
  'NTC_LIST_ORDER' => '设置版本在下拉列表中的显示顺序',
  /*'release_status_dom' should be used in /include/language/zh_cn.lang.php, 
          I have copied 'release_status_dom' to /include/language/zh_cn.lang.php,
          by fixing bug 12324, system will no longer use 'release_status_dom'  in  this file, 
          but for the lower edition, the following lines should be kept.
     */
  'release_status_dom' =>
  array (
    'Active' => '启用',
    'Inactive' => '停用',
  ),

  'LBL_EDITLAYOUT' => '编辑布局',
);


?>
