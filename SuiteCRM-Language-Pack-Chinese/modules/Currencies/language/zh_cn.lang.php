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
  'LBL_MODULE_NAME' => '货币',
  'LBL_LIST_FORM_TITLE' => '货币',
  'LBL_CURRENCY' => '货币',
  'LBL_ADD' => '增加',
  'LBL_MERGE' => '合并',
  'LBL_MERGE_TXT' => '请检查您希望与选择货币对应的货币，这将会删除所有货币信息接着从选择的货币重新指定。',
  'LBL_US_DOLLAR' => '美元',
  'LBL_DELETE' => '删除',
  'LBL_LIST_SYMBOL' => '货币符号',
  'LBL_LIST_NAME' => '货币名称',
  'LBL_LIST_ISO4217' => 'ISO4217编码',
  'LBL_UPDATE' => '更新',
  'LBL_LIST_RATE' => '汇率',
  'LBL_LIST_RATE_HELP' => '欧元转换汇率0.5表示 10 USD = 5 Euro。',//080729
  'LBL_LIST_STATUS' => '状态',
  'LNK_NEW_CONTACT' => '新增联系人',
  'LNK_NEW_ACCOUNT' => '新增客户',
  'LNK_NEW_OPPORTUNITY' => '新增商业机会',
  'LNK_NEW_CASE' => '新增客户反馈',
  'LNK_NEW_NOTE' => '新增备忘录',
  'LNK_NEW_CALL' => '新增电话',
  'LNK_NEW_EMAIL' => '新增电子邮件',
  'LNK_NEW_MEETING' => '新增会议',
  'LNK_NEW_TASK' => '新增任务',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?建议您可以先停用这条记录，否则所有的记录在存取时都会转换为美元。',
  'currency_status_dom' =>
  array (
    'Active' => '启用',
    'Inactive' => '停用',
  ),

	'LBL_LIST_ISO4217_HELP' => '输入3个字母的ISO 4217货币名称代码和货币符号。',
	'LBL_BELOW_MIN' => '转换率必须大于0',

  'LBL_CREATED_BY' => '创建人',

  'LBL_EDIT_LAYOUT' => '编辑布局',

);


?>
