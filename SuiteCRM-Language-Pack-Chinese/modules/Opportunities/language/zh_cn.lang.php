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
    'LBL_MODULE_NAME' => '商业机会',
    'LBL_MODULE_TITLE' => '商业机会:首页',
    'LBL_SEARCH_FORM_TITLE' => '查找商业机会',
    'LBL_VIEW_FORM_TITLE' => '商业机会视图',
    'LBL_LIST_FORM_TITLE' => '商业机会列表',
    'LBL_OPPORTUNITY_NAME' => '商业机会名称:',
    'LBL_OPPORTUNITY' => '商业机会:',
    'LBL_NAME' => '商业机会名称',
    'LBL_INVITEE' => '联系人',
    'LBL_CURRENCIES' => '货币',
    'LBL_LIST_OPPORTUNITY_NAME' => '商业机会',
    'LBL_LIST_ACCOUNT_NAME' => '客户名称',
    'LBL_LIST_AMOUNT' => '金额',
    'LBL_LIST_DATE_CLOSED' => '关闭',
    'LBL_LIST_SALES_STAGE' => '销售阶段',
    'LBL_ACCOUNT_ID'=> '客户编号',
    'LBL_CURRENCY_ID'=> '货币编号',
    'LBL_TEAM_ID' => '团队编号',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
    //END DON'T CONVERT
    'UPDATE' => '商业机会-货币更新',
    'UPDATE_DOLLARAMOUNTS' => '更新美元金额',
    'UPDATE_VERIFY' => '确认金额',
    'UPDATE_VERIFY_TXT' => '确认商业机会中的金额字段都是数字与小数点的组合。',
    'UPDATE_FIX' => '修改金额',
    'UPDATE_FIX_TXT' => '尝试从目前的金额新增正确的数字来修改任何错误的金额，原有的资料会备份到amount_backup字段，如果您执行过程中发现任何错误，记得在重新执行前先将备份的数值还原，避免备份的数值也跟着出錯。',
    'UPDATE_DOLLARAMOUNTS_TXT' => '通过目前的汇率來更新商业机会的美元金额，这个数值用來计算图片与货币金额浏览列表',
    'UPDATE_CREATE_CURRENCY' => '新增货币:',
    'UPDATE_VERIFY_FAIL' => '确认错误的记录:',
    'UPDATE_VERIFY_CURAMOUNT' => '目前金额:',
    'UPDATE_VERIFY_FIX' => '执行修正将会变成',
    'UPDATE_INCLUDE_CLOSE' => '包含停用的记录',
    'UPDATE_VERIFY_NEWAMOUNT' => '新的金额:',
    'UPDATE_VERIFY_NEWCURRENCY' => '新的货币:',
    'UPDATE_DONE' => '完成',
    'UPDATE_BUG_COUNT' => '发现缺陷并且尝试解决:',
    'UPDATE_BUGFOUND_COUNT' => '发现缺陷:',
    'UPDATE_COUNT' => '记录更新笔数:',
    'UPDATE_RESTORE_COUNT' => '记录金额还原:',
    'UPDATE_RESTORE' => '还原金额',
    'UPDATE_RESTORE_TXT' => '通过修正期间新增的备份來还原金额数值。',
    'UPDATE_FAIL' => '无法更新-',
    'UPDATE_NULL_VALUE' => '沒有输入金额的项目会设置为0-',
    'UPDATE_MERGE' => '合并货币',
    'UPDATE_MERGE_TXT' => '合并多种货币成为单一货币，如果您发现同样的货币有多条记录，您可以将他们合并。这将会合并所有模组的货币记录。',
    'LBL_ACCOUNT_NAME' => '客户名称:',
    'LBL_AMOUNT' => '金额:',
    'LBL_AMOUNT_USDOLLAR' => '金额 USD:',//080729
    'LBL_CURRENCY' => '货币:',
    'LBL_DATE_CLOSED' => '完成日期:',
    'LBL_TYPE' => '类型:',
    'LBL_CAMPAIGN' => '市场活动:',
    'LBL_NEXT_STEP' => '下个步驟:',
    'LBL_LEAD_SOURCE' => '潜在客户来源:',
    'LBL_SALES_STAGE' => '销售阶段:',
    'LBL_PROBABILITY' => '成交概率(%):',
    'LBL_DESCRIPTION' => '说明:',
    'LBL_DUPLICATE' => '可能重复的商业机会',
    'MSG_DUPLICATE' => '新增这条记录可能造成重复，您可以从下面列表选择或是点击新增來继续透过旧有记录建立新商业机会',
    'LBL_NEW_FORM_TITLE' => '新增商业机会',
    'LNK_NEW_OPPORTUNITY' => '新增商业机会',



    'LNK_OPPORTUNITY_LIST' => '商业机会',
    'ERR_DELETE_RECORD' => '必须指定记录编号才能删除商业机会。',
    'LBL_TOP_OPPORTUNITIES' => '我的重要商业机会',
    'NTC_REMOVE_OPP_CONFIRMATION' => '您确定要从这个商业机会移除这个联系人?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '您确定要从这个项目移除商业机会?',
    'LBL_AMOUNT_BACKUP'=> '备份金额',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '商业机会',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=> '活动',
    'LBL_HISTORY_SUBPANEL_TITLE'=> '历史记录',
    'LBL_RAW_AMOUNT'=> '毛数量',

    'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',



    'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
    'LBL_ASSIGNED_TO_NAME' => '负责人姓名:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',




    'LBL_LIST_SALES_STAGE' => '销售阶段',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '我的关闭的商业机会',//080729
    'LBL_TOTAL_OPPORTUNITIES' => '商业机会总数',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '已关闭的成功的商业机会',
    'LBL_ASSIGNED_TO_ID' =>'分配用户编号',
    'LBL_CREATED_ID'=>'创建人编号',
    'LBL_MODIFIED_ID'=>'修改人编号',
    'LBL_MODIFIED_NAME'=>'修改人姓名',

    'LBL_CREATED_USER' => '创建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_CURRENCY_NAME' => '货币名称',
    'LBL_CURRENCY_SYMBOL' => '货币符号',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',

    'LBL_CURRENCIES' => '货币',
    'LBL_CAMPAIGN_OPPORTUNITY' => '营销活动',

    'LBL_LIST_AMOUNT_USDOLLAR' => '数量',
    'LABEL_PANEL_ASSIGNMENT' => '分配',
    'LNK_IMPORT_OPPORTUNITIES' => '导入商业机会',

    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',

    'LBL_EDITLAYOUT' => '编辑布局',
    'LBL_EXPORT_CAMPAIGN_ID' => '市场活动ID',
    'LBL_OPPORTUNITY_TYPE' => '商业机会类型',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人姓名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '负责人编号',
    'LBL_EXPORT_MODIFIED_USER_ID' => '修改人编号',
    'LBL_EXPORT_CREATED_BY' => '创建人编号',
    'LBL_EXPORT_NAME' => '名称',
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '相关联系人的Emails',

);

?>
