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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT

	'LNK_CONTACT_REPORTS' => '联系人报表',

	'ERR_DELETE_RECORD' => '必须指定记录编号才能删除客户。',
	'LBL_ACCOUNT_ID' => '客户编号:',
	'LBL_ACCOUNT_NAME' => '客户名称:',
	'LBL_CAMPAIGN' => '市场活动:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
	'LBL_ADD_BUSINESSCARD' => '新增名片',
	'LBL_ADDMORE_BUSINESSCARD' => '增加更多名片',
	'LBL_ADDRESS_INFORMATION' => '地址信息',
	'LBL_ALT_ADDRESS_CITY' => '[其它地址]城市:',
	'LBL_ALT_ADDRESS_COUNTRY' => '[其它地址]国家:',
	'LBL_ALT_ADDRESS_POSTALCODE' => '[其它地址]邮编:',
	'LBL_ALT_ADDRESS_STATE' => '[其它地址]省份:',
	'LBL_ALT_ADDRESS_STREET_2' => '[其它地址]街道2',
	'LBL_ALT_ADDRESS_STREET_3' => '[其它地址]街道3',
	'LBL_ALT_ADDRESS_STREET' => '[其它地址]街道:',
	'LBL_ALTERNATE_ADDRESS' => '其它地址:',
	'LBL_ALT_ADDRESS' => '其它地址:',
	'LBL_ANY_ADDRESS' => '任何地址:',
	'LBL_ANY_EMAIL' => '任何电子邮件:',
	'LBL_ANY_PHONE' => '任何电话:',
	'LBL_ASSIGNED_TO_NAME' => '负责人姓名:',
    'LBL_ASSIGNED_TO_ID' => '负责用户',
	'LBL_ASSISTANT_PHONE' => '助理电话:',
	'LBL_ASSISTANT' => '助理:',
	'LBL_BIRTHDATE' => '生日:',
	'LBL_BUSINESSCARD' => '名片',
	'LBL_CITY' => '城市:',
	'LBL_CAMPAIGN_ID' => '商业机会编号',
	'LBL_CONTACT_INFORMATION' => '联系人信息',
	'LBL_CONTACT_NAME' => '联系人姓名:',
	'LBL_CONTACT_OPP_FORM_TITLE' => '联系人-商业机会:',
	'LBL_CONTACT_ROLE' => '角色:',
	'LBL_CONTACT' => '联系人:',
	'LBL_COUNTRY' => '国家:',
	'LBL_CREATED_ACCOUNT' => '新增的客户',
	'LBL_CREATED_CALL' => '新增的电话',
	'LBL_CREATED_CONTACT' => '新增的联系人',
	'LBL_CREATED_MEETING' => '新增的会议',
	'LBL_CREATED_OPPORTUNITY' => '新增的商业机会',
	'LBL_DATE_MODIFIED' => '修改日期:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '联系人',
	'LBL_DEPARTMENT' => '部门:',
	'LBL_DESCRIPTION_INFORMATION' => '说明信息',
	'LBL_DESCRIPTION' => '说明:',
	'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => '直接下属',
	'LBL_DO_NOT_CALL' => '谢绝电话联系:',
	'LBL_DUPLICATE' => '可能有重复的联系人',
	'LBL_EMAIL_ADDRESS' => '电子邮件:',
	'LBL_EMAIL_OPT_OUT' => '退出邮件列表:',
    'LBL_EMPTY_VCARD' => '请选择VCard文件',
	'LBL_EXISTING_ACCOUNT' => '使用了一个已经存在的客户',
	'LBL_EXISTING_CONTACT' => '使用了一个已经存在的联系人',
	'LBL_EXISTING_OPPORTUNITY' => '使用了一个已经存在的商业机会',
	'LBL_FAX_PHONE' => '传真:',
	'LBL_FIRST_NAME' => '名:',
	'LBL_FULL_NAME' => '姓名:',
	'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
	'LBL_HOME_PHONE' => '家庭电话:',
	'LBL_ID' => '编号:',
	'LBL_IMPORT_VCARD' => '导入vCard',
    'LBL_VCARD' => 'vCard',
	'LBL_IMPORT_VCARDTEXT' => '从导入的vCard自动新增一个新的联系人。',
	'LBL_INVALID_EMAIL' => '无效的电子邮件:',
	'LBL_INVITEE' => '直接下属',
	'LBL_LAST_NAME' => '姓:',
	'LBL_LEAD_SOURCE' => '潜在客户来源:',
	'LBL_LIST_ACCEPT_STATUS' => '接收状态',
	'LBL_LIST_ACCOUNT_NAME' => '客户名称',
	'LBL_LIST_CONTACT_NAME' => '联系人姓名',
	'LBL_LIST_CONTACT_ROLE' => '角色',
	'LBL_LIST_EMAIL_ADDRESS' => '电子邮件',
	'LBL_LIST_FIRST_NAME' => '名',
	'LBL_LIST_FORM_TITLE' => '联系人列表',
	'LBL_VIEW_FORM_TITLE' => '联系人视图',
	'LBL_LIST_LAST_NAME' => '姓',
	'LBL_LIST_NAME' => '姓名',
	'LBL_LIST_OTHER_EMAIL_ADDRESS' => '其他电子邮件',
	'LBL_LIST_PHONE' => '办公电话',
	'LBL_LIST_TITLE' => '职称',
	'LBL_MOBILE_PHONE' => '移动电话:',
	'LBL_MODIFIED' => '修改人编号:',
	'LBL_MODULE_NAME' => '联系人',
	'LBL_MODULE_TITLE' => '联系人:首页',
	'LBL_NAME' => '姓名:',
	'LBL_NEW_FORM_TITLE' => '新增联系人',
	'LBL_NEW_PORTAL_PASSWORD' => '新增门户网站密码:',
	'LBL_NOTE_SUBJECT' => '备忘录主题',
	'LBL_OFFICE_PHONE' => '办公电话:',
	'LBL_OPP_NAME' => '商业机会名称:',
	'LBL_OPPORTUNITY_ROLE_ID' => '商业机会角色编号:',
	'LBL_OPPORTUNITY_ROLE' => '商业机会角色',
	'LBL_OTHER_EMAIL_ADDRESS' => '其它电子邮件:',
	'LBL_OTHER_PHONE' => '其它电话:',
	'LBL_PHONE' => '电话:',
	'LBL_PORTAL_ACTIVE' => '启用门户网站:',
	'LBL_PORTAL_APP' => '门户网站应用程序:',
	'LBL_PORTAL_INFORMATION' => '门户网站信息',
	'LBL_PORTAL_NAME' => '门户网站名称:',
	'LBL_PORTAL_PASSWORD_ISSET' => '门户网站密码已设置:',
	'LBL_POSTAL_CODE' => '邮编:',
	'LBL_PRIMARY_ADDRESS_CITY' => '[主要住址]城市:',
	'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要住址]国家:',
	'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要住址]邮编:',
	'LBL_PRIMARY_ADDRESS_STATE' => '[主要住址]省份:',
	'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要住址]街道2:',
	'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要住址]街道3:',
	'LBL_PRIMARY_ADDRESS_STREET' => '[主要住址]街道:',
	'LBL_PRIMARY_ADDRESS' => '主要地址:',
	'LBL_PRODUCTS_TITLE' => '产品',
	'LBL_RELATED_CONTACTS_TITLE' => '相关联系人',
	'LBL_REPORTS_TO_ID' => '上级领导:',
	'LBL_REPORTS_TO' => '上级领导:',
    'LBL_RESOURCE_NAME' => '资源名称',
	'LBL_SALUTATION' => '称谓:',
	'LBL_SAVE_CONTACT' => '保存联系人',
	'LBL_SEARCH_FORM_TITLE' => '查找联系人',
	'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择打勾的联系人',
	'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择打勾的联系人',
	'LBL_STATE' => '省份:',
	'LBL_SYNC_CONTACT' => '同步Outlook&reg;:',
    'LBL_PROSPECT_LIST' => '目标列表',

	'LBL_TEAM_ID' => '团队编号:',

	'LBL_TITLE' => '职称:',
	'LNK_CONTACT_LIST' => '联系人',
	'LNK_IMPORT_VCARD' => '从vCard新增',
	'LNK_NEW_ACCOUNT' => '新增客户',
	'LNK_NEW_APPOINTMENT' => '新增约会',
	'LNK_NEW_CALL' => '安排电话',
	'LNK_NEW_CASE' => '新增客户反馈',
	'LNK_NEW_CONTACT' => '新增联系人',
	'LNK_NEW_EMAIL' => '存档电子邮件',
	'LNK_NEW_MEETING' => '安排会议',
	'LNK_NEW_NOTE' => '新增备忘录',
	'LNK_NEW_OPPORTUNITY' => '新增商业机会',
	'LNK_NEW_TASK' => '新增任务',
    'LNK_SELECT_ACCOUNT' => "选择帐户",
	'MSG_DUPLICATE' => '新增这个联系人可能造成重复，您可以点击新增联系人来通过已存在的记录新增新的联系人或是点击取消。',
	'MSG_SHOW_DUPLICATES' => '新增这个联系人可能造成重复，您可以点击新增联系人来通过已存在的记录新增新的联系人或是点击取消。',
	'NTC_COPY_ALTERNATE_ADDRESS' => '将备用地址复制到主地址',
	'NTC_COPY_PRIMARY_ADDRESS' => '将主地址內容复制到备用地址',
	'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
	'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '新增新商业机会需要一个客户\n请新增一个新的或是选择一个已经存在的',
	'NTC_REMOVE_CONFIRMATION' => '您确定要将联系人从这个事件中删除吗?',
	'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '您确定要将这个直接下属删除吗?',

	'LBL_USER_PASSWORD' => '密码:',

	'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',

	'LBL_QUOTES_SUBPANEL_TITLE' => '报价',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => '产品',

	'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
	'LBL_BUGS_SUBPANEL_TITLE' => '缺陷',
	'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
	'LBL_COPY_ADDRESS_CHECKED' => '复制地址到已选择的联系人',
	'LBL_TARGET_OF_CAMPAIGNS' => '市场活动(目标):',
	'LBL_CAMPAIGNS' => '市场活动',
	'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '市场活动',
	'LBL_LIST_CITY' => '城市',
	'LBL_LIST_STATE' => '省份',
	'LBL_HOMEPAGE_TITLE' => '我的联系人',


	'LBL_PORTAL_PASSWORD' => '门户网站密码',
	'LBL_CONFIRM_PORTAL_PASSWORD' => '确认门户网站密码',

	'LBL_CHECKOUT_DATE'=>'迁出日期',

    'LBL_OPPORTUNITIES' => '商业机会',

	'LBL_CONTACT_DCEINST_FORM_TITLE' => '联系人-实例:',
	'LBL_DCEINST_NAME' => '实例名称:',
	'LBL_DCEINSTANCES' => '实例',
	'LBL_DCEINSTANCE_ROLE' => '实例角色',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => '营销活动',

    'LBL_STREET' => '街道',
    'LNK_IMPORT_CONTACTS' => '导入联系人',

    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => '复制主要地址',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => '复制其它地址',

    'LBL_PROJECTS_RESOURCES' => '项目资源',
    'LBL_PHONE_HOME' => '家庭电话',
    'LBL_PHONE_MOBILE' => '手机',
    'LBL_PHONE_WORK' => '公司电话',
    'LBL_PHONE_OTHER' => '其他电话',
    'LBL_PHONE_FAX' => '传真',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人姓名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '负责人编号',
    'LBL_EXPORT_MODIFIED_USER_ID' => '修改人编号',
    'LBL_EXPORT_CREATED_BY' => '创建人编号',
    'LBL_EXPORT_PHONE_HOME' => '家庭电话',
    'LBL_EXPORT_PHONE_MOBILE' => '手机',
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '相关联系人的Emails',
    'LBL_USER_SYNC' => '用户同步',
)
?>
