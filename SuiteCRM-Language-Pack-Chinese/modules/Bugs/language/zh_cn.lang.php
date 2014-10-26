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
	'LBL_MODULE_NAME' => '缺陷追踪',
	'LBL_MODULE_TITLE' => '缺陷追踪:首页',
	'LBL_MODULE_ID' => '缺陷',
	'LBL_SEARCH_FORM_TITLE' => '查找缺陷',
	'LBL_LIST_FORM_TITLE' => '缺陷列表',
	'LBL_NEW_FORM_TITLE' => '新增缺陷',
	'LBL_CONTACT_BUG_TITLE' => '联系人-缺陷:',
	'LBL_SUBJECT' => '主题:',
	'LBL_BUG' => '缺陷:',
	'LBL_BUG_NUMBER' => '编号:',
	'LBL_NUMBER' => '编号:',
	'LBL_STATUS' => '状态:',
	'LBL_PRIORITY' => '优先级:',
	'LBL_DESCRIPTION' => '说明:',
	'LBL_CONTACT_NAME' => '联系人姓名:',
	'LBL_BUG_SUBJECT' => '缺陷主题:',
	'LBL_CONTACT_ROLE' => '角色:',
	'LBL_LIST_NUMBER' => '编号',
	'LBL_LIST_SUBJECT' => '主题',
	'LBL_LIST_STATUS' => '状态',
	'LBL_LIST_PRIORITY' => '优先级',
	'LBL_LIST_RELEASE' => '版本',
	'LBL_LIST_RESOLUTION' => '分析',
	'LBL_LIST_LAST_MODIFIED' => '最新修改',
	'LBL_INVITEE' => '联系人',
	'LBL_TYPE' => '类型:',
	'LBL_LIST_TYPE' => '类型',
	'LBL_RESOLUTION' => '分析:',
	'LBL_RELEASE' => '版本:',
	'LNK_NEW_BUG' => '汇报缺陷',
	'LNK_BUG_LIST' => '缺陷',
	'NTC_REMOVE_INVITEE' => '您确定要从这个缺陷中移除这个联系人?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '您确定要从这个客户中移除这个缺陷?',
	'ERR_DELETE_RECORD' => '必须指定记录编号才能删除缺陷。',
	'LBL_LIST_MY_BUGS' => '指派给我的缺陷',

	'LBL_FOUND_IN_RELEASE' => '发现缺陷的版本:',
	'LBL_FIXED_IN_RELEASE' => '将被修正的版本:',
	'LBL_LIST_FIXED_IN_RELEASE' => '将被修正的版本',
	'LBL_WORK_LOG' => '工作记录',
	'LBL_SOURCE' => '来源:',
	'LBL_PRODUCT_CATEGORY' => '类别:',

	'LBL_CREATED_BY' => '创建人:',
	'LBL_DATE_CREATED' => '创建日期:',
	'LBL_MODIFIED_BY' => '最后更新者:',
	'LBL_DATE_LAST_MODIFIED' => '更新日期:',

	'LBL_LIST_EMAIL_ADDRESS' => '电子邮件',
	'LBL_LIST_CONTACT_NAME' => '联系人姓名',
	'LBL_LIST_ACCOUNT_NAME' => '客户名称',
	'LBL_LIST_PHONE' => '电话',
	'NTC_DELETE_CONFIRMATION' => '您确定要从这个缺陷中移除这个联系人?',

	'LBL_DEFAULT_SUBPANEL_TITLE' => '缺陷追踪',
	'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
	'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
	'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
	'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
  'LBL_PROJECTS_SUBPANEL_TITLE' => '工程',
	'LBL_SYSTEM_ID' => '系统编号',
	'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
	'LBL_ASSIGNED_TO_NAME' => '负责人姓名',


	'LNK_BUG_REPORTS' => '缺陷报表',
	'LBL_SHOW_IN_PORTAL' => '显示在门户',

     'LBL_CREATED_USER' => '创建人',
     'LBL_MODIFIED_USER' => '修改人',

	'LNK_IMPORT_BUGS' => '导入缺陷',
    'LBL_BUG_INFORMATION' => '缺陷概览',

    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',

    'LBL_FOUND_IN_RELEASE_NAME' => '发现缺陷的版本',
    'LBL_PORTAL_VIEWABLE' => 'Portal Viewable',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人姓名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '负责人ID',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => '修复缺陷的版本',
    'LBL_EXPORT_MODIFIED_USER_ID' => '修改人ID',
    'LBL_EXPORT_CREATED_BY' => '创建人ID',
  );
?>
