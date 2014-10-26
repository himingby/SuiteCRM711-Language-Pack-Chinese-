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
	'LBL_MODULE_NAME' => '活动',
	'LBL_MODULE_TITLE' => '活动:首页',
	'LBL_SEARCH_FORM_TITLE' => '活动查找',
	'LBL_LIST_FORM_TITLE' => '活动列表',
	'LBL_LIST_SUBJECT' => '主题',
	'LBL_LIST_CONTACT' => '联系人',
	'LBL_LIST_RELATED_TO' => '相关',
	'LBL_LIST_DATE' => '日期',
	'LBL_LIST_TIME' => '开始时间',
	'LBL_LIST_CLOSE' => '关闭',
	'LBL_SUBJECT' => '主题:',
	'LBL_STATUS' => '状态:',
	'LBL_LOCATION' => '地点:',
	'LBL_DATE_TIME' => '开始日期和时间:',
	'LBL_DATE' => '开始日期:',
	'LBL_TIME' => '开始时间:',
	'LBL_DURATION' => '活动时间:',
  'LBL_DURATION_MINUTES' => '持续时间:',
	'LBL_HOURS_MINS' => '(时/分)',
	'LBL_CONTACT_NAME' => '联系人姓名:',
	'LBL_MEETING' => '会议:',
	'LBL_DESCRIPTION_INFORMATION' => '说明信息',
	'LBL_DESCRIPTION' => '说明:',
  'LBL_COLON' => ':',
	'LBL_DEFAULT_STATUS' => '已计划',
	'LNK_NEW_CALL' => '安排电话',
	'LNK_NEW_MEETING' => '安排会议',
	'LNK_NEW_TASK' => '新增任务',
	'LNK_NEW_NOTE' => '新增备忘录',
	'LNK_NEW_EMAIL' => '新增存档电子邮件',
	'LNK_CALL_LIST' => '电话',
	'LNK_MEETING_LIST' => '会议',
	'LNK_TASK_LIST' => '任务',
	'LNK_NOTE_LIST' => '备忘录',
	'LNK_EMAIL_LIST' => '电子邮件',
	'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户。',
	'NTC_REMOVE_INVITEE' => '您确定要从会议中删除这个受邀者?',
	'LBL_INVITEE' => '受邀者',
	'LBL_LIST_DIRECTION' => '方向',
	'LBL_DIRECTION' => '方向',
	'LNK_NEW_APPOINTMENT' => '新会议',
	'LNK_VIEW_CALENDAR' => '今天',
	'LBL_OPEN_ACTIVITIES' => '在做的活动',
	'LBL_HISTORY' => '历史记录',
	'LBL_UPCOMING' => '最近安排',
	'LBL_TODAY' => '通过',
	'LBL_NEW_TASK_BUTTON_TITLE' => '新增任务[Alt+N]',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
	'LBL_NEW_TASK_BUTTON_LABEL' => '新增任务',
	'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => '安排会议[Alt+M]',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
	'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => '安排会议',
	'LBL_SCHEDULE_CALL_BUTTON_TITLE' => '安排电话[Alt+C]',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
	'LBL_SCHEDULE_CALL_BUTTON_LABEL' => '安排电话',
	'LBL_NEW_NOTE_BUTTON_TITLE' => '新增备忘录[Alt+T]',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
	'LBL_NEW_NOTE_BUTTON_LABEL' => '新增备忘录',
	'LBL_TRACK_EMAIL_BUTTON_TITLE' => '存档电子邮件[Alt+K]',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
	'LBL_TRACK_EMAIL_BUTTON_LABEL' => '存档电子邮件',
	'LBL_LIST_STATUS' => '状态',
	'LBL_LIST_DUE_DATE' => '完成日期',
	'LBL_LIST_LAST_MODIFIED' => '最新修改',
	'NTC_NONE_SCHEDULED' => '未安排。',
  'appointment_filter_dom' => array(
	'today' => '今天'
	,'tomorrow' => '明天'
	,'this Saturday' => '本周'
	,'next Saturday' => '下周'
	,'last this_month' => '本月'
	,'last next_month' => '下月'
  ),
	'LNK_IMPORT_NOTES' => '导入备忘录',
	'NTC_NONE' => '无',
	'LBL_ACCEPT_THIS' => '接受?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '在做的活动',
	'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
	'ERR_CHECKSYS_IIS_INVALID_VER'  => '您所用的IIS版本已经不再被Sugar所支持了。请安装一个Sugar应用程序所支持的版本。具体内容参考版本注释里兼容矩阵中所列的IIS版本。您的版本号是',
	'ERR_CHECKSYS_FASTCGI'  => '我们检测到您没有使用FastCGI。请安装一个Sugar应用程序所支持的版本（参考版本注释里兼容矩阵中所列的版本）。详情请参考http://www.iis.net/php/',
	'LBL_CHECKSYS_IISVER'  => 'IIS 版本',
	'LBL_CHECKSYS_FASTCGI'  => 'FastCGI',
	'LBL_PROSPECT_LIST'  => '目标列表',
	'LBL_USER_NAME_FOR_ROLE'  => '用户/组/角色',
	'LBL_END_DATE'  => '结束日期',
	'LBL_FILTER_DATE_RANGE_START'  => '从',
	'LBL_FILTER_DATE_RANGE_FINISH'  => ' 到',
	'LBL_SELECT_RECORD'  => '选择记录',
	'LBL_ACTIVITIES_REPORTS'  => '市场活动报表',

    'LBL_TYPE'=>'类型',
    'LBL_RUN_REPORT_BUTTON_LABEL' => '运行报表',
    'LBL_CLEAR'=>'清除',
    'LBL_EXPORT' => '导出',
    'LBL_SELECT_MODULE'=>'选择模块',
    'LBL_NONE_STRING' => '无',

	'LNK_IMPORT_CALLS' => '导入电话',
	'LNK_IMPORT_MEETINGS' => '导入会议',
	'LNK_IMPORT_TASKS' => '导入任务',

	'LBL_ACCEPT' => '接受',
);


?>
