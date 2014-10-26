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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => '在线用户',
		  'ShowLastModifiedRecords' => '前10条修改记录',
		  'ShowTopUser' => '最多用户',
		  'ShowMyModuleUsage' => '我的模块使用情况',
		  'ShowMyWeeklyActivities' => '我每周的活动',
		  'ShowTop3ModulesUsed' => '使用最多的3个模块',
		  'ShowLoggedInUserCount' => '在线用户数',
		  'ShowMyCumulativeLoggedInTime' => '我的在线总时间 (本周)',
		  'ShowUsersCumulativeLoggedInTime' => '所有用户在线总时间 (本周)',
		  
		  //Column header mapping
		  'action' => '行为',
		  'active_users' => '在线用户数',
		  'date_modified' => '修改日期',
		  'different_modules_accessed' => '访问模块数',
		  'first_name' => '名',
		  'item_id' => '编号',
		  'item_summary' => '姓名',
		  'last_action' => '上次行为发生时间',
		  'last_name' => '姓',
		  'module_name' => '模块名',
		  'records_modified' => '修改记录总数',
		  'top_module' => '访问最多的模块',
		  'total_count' => '页面浏览总数',
		  'total_login_time' => '时间 (时:分:秒)',
		  'user_name' => '用户名',
		  'users' => '用户',
		  
		  //Administration related labels
		  'LBL_ENABLE' => '开启',
		  'LBL_MODULE_NAME_TITLE' => '访问记录',
		  'LBL_TRACKER_SETTINGS' => '访问记录设置',
		  'LBL_TRACKER_QUERIES_DESC' => '开启dump_slow_queries后，当查询时间大于slow_query_time_msec的值时，系统记录SQL语句',
		  'LBL_TRACKER_QUERIES_HELP' => '当"记录显示查询"开启，并且SQL语句执行时间大于"显示查询的开始时间"，此SQL语句将会被记录',
		  'LBL_TRACKER_PERF_DESC' => '记录系统效率数据 (数据库、文件、与内存的使用情况)',
		  'LBL_TRACKER_PERF_HELP' => '记录数据库交互，文件存取和内存使用',
		  'LBL_TRACKER_SESSIONS_DESC' => '记录用登陆信息',
		  'LBL_TRACKER_SESSIONS_HELP' => '记录活动用户和用户的会话信息',
		  'LBL_TRACKER_DESC' => '记录用户的行为',
		  'LBL_TRACKER_HELP' => '记录用户所浏览的页面(模块和记录)以及记录的存储',
		  'LBL_TRACKER_PRUNE_INTERVAL' => '当运行计划任务删除记录数据时，数据所保存的天数',
		  'LBL_TRACKER_PRUNE_RANGE' => '天数',
		  'LBL_MODULE_NAME' => '访问记录',
);
?>
