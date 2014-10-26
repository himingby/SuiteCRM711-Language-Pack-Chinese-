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
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
	'ERR_DELETE_RECORD' => '要删除潜在客户必須指定记录编号。',
	'LBL_ACCOUNT_DESCRIPTION' => '客户说明',
	'LBL_ACCOUNT_ID' => '客户编号',
	'LBL_ACCOUNT_NAME' => '客户名称:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
	'LBL_ADD_BUSINESSCARD' => '增加名片',
	'LBL_ADDRESS_INFORMATION' => '地址信息',
	'LBL_ALT_ADDRESS_CITY' => '[其它住址]城市',
	'LBL_ALT_ADDRESS_COUNTRY' => '[其他地址]国家',
	'LBL_ALT_ADDRESS_POSTALCODE' => '[其它地址]邮编',
	'LBL_ALT_ADDRESS_STATE' => '[其它地址]省份',
	'LBL_ALT_ADDRESS_STREET_2' => '[其它地址]街道2',
	'LBL_ALT_ADDRESS_STREET_3' => '[其它地址]街道3',
	'LBL_ALT_ADDRESS_STREET' => '[其它地址]街道',
	'LBL_ALTERNATE_ADDRESS' => '其它地址:',
	'LBL_ALT_ADDRESS' => '其它地址:',
	'LBL_ANY_ADDRESS' => '任何地址:',
	'LBL_ANY_EMAIL' => '任何电子邮件:',
	'LBL_ANY_PHONE' => '任何电话:',
	'LBL_ASSIGNED_TO_NAME' => '负责人姓名',
    'LBL_ASSIGNED_TO_ID' => '负责人:',
	'LBL_BACKTOLEADS' => '返回潜在客户',
	'LBL_BUSINESSCARD' => '转换潜在客户',
	'LBL_CITY' => '城市:',
	'LBL_CONTACT_ID' => '联系人编号',
	'LBL_CONTACT_INFORMATION' => '潜在客户信息',
	'LBL_CONTACT_NAME' => '潜在客户姓名:',
	'LBL_CONTACT_OPP_FORM_TITLE' => '潜在客户-商业机会:',
	'LBL_CONTACT_ROLE' => '角色:',
	'LBL_CONTACT' => '潜在客户:',
	'LBL_CONVERTED_ACCOUNT' => '已转换的客户:',
	'LBL_CONVERTED_CONTACT' => '已转换的联系人:',
	'LBL_CONVERTED_OPP' => '已转换的商业机会:',
	'LBL_CONVERTED' => '已转换',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
	'LBL_CONVERTLEAD_TITLE' => '转换潜在客户[Alt+V]',
	'LBL_CONVERTLEAD' => '转换潜在客户',
	'LBL_COUNTRY' => '国家:',
	'LBL_CREATED_ACCOUNT' => '新增的客户',
	'LBL_CREATED_CALL' => '新增的电话',
	'LBL_CREATED_CONTACT' => '新增的联系人',
	'LBL_CREATED_MEETING' => '新增的会议',
	'LBL_CREATED_OPPORTUNITY' => '新增的商业机会',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '潜在客户',
	'LBL_DEPARTMENT' => '部门:',
	'LBL_DESCRIPTION_INFORMATION' => '说明信息',
	'LBL_DESCRIPTION' => '说明:',
	'LBL_DO_NOT_CALL' => '谢绝电话联系:',
	'LBL_DUPLICATE' => '可能有重复的潜在客户',
	'LBL_EMAIL_ADDRESS' => '电子邮件:',
	'LBL_EMAIL_OPT_OUT' => '退出邮件列表:',
	'LBL_EXISTING_ACCOUNT' => '使用了一个已经存在的客户',
	'LBL_EXISTING_CONTACT' => '使用了一个已经存在的联系人',
	'LBL_EXISTING_OPPORTUNITY' => '使用了一个已经存在的商业机会',
	'LBL_FAX_PHONE' => '传真:',
	'LBL_FIRST_NAME' => '名:',
	'LBL_FULL_NAME' => '姓名:',
	'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
	'LBL_HOME_PHONE' => '家庭电话:',
	'LBL_IMPORT_VCARD' => '导入vCard',
    'LBL_VCARD' => 'vCard',
	'LBL_IMPORT_VCARDTEXT' => '通过导入vCard，自动新增潜在客户。',
	'LBL_INVALID_EMAIL' => '无效的电子邮件:',
	'LBL_INVITEE' => '直接下属',
	'LBL_LAST_NAME' => '姓:',
	'LBL_LEAD_SOURCE_DESCRIPTION' => '潜在客户来源说明:',
	'LBL_LEAD_SOURCE' => '潜在客户来源:',
	'LBL_LIST_ACCOUNT_NAME' => '客户名称',
	'LBL_LIST_CONTACT_NAME' => '潜在客户姓名',
	'LBL_LIST_CONTACT_ROLE' => '角色',
	'LBL_LIST_DATE_ENTERED' => '创建日期',
	'LBL_LIST_EMAIL_ADDRESS' => '电子邮件',
	'LBL_LIST_FIRST_NAME' => '名',
	'LBL_VIEW_FORM_TITLE' => '潜在客户视图',
	'LBL_LIST_FORM_TITLE' => '潜在客户列表',
	'LBL_LIST_LAST_NAME' => '姓',
	'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潜在客户来源说明',
	'LBL_LIST_LEAD_SOURCE' => '潜在客户',
	'LBL_LIST_MY_LEADS' => '我的潜在客户',
	'LBL_LIST_NAME' => '姓名',
	'LBL_LIST_PHONE' => '办公电话',
	'LBL_LIST_REFERED_BY' => '推荐人',
	'LBL_LIST_STATUS' => '状态',
	'LBL_LIST_TITLE' => '职称',
	'LBL_MOBILE_PHONE' => '移动电话:',
	'LBL_MODULE_NAME' => '潜在客户',
	'LBL_MODULE_TITLE' => '潜在客户:首页',
	'LBL_NAME' => '名称:',
	'LBL_NEW_FORM_TITLE' => '新增潜在客户',
	'LBL_NEW_PORTAL_PASSWORD' => '新增门户网站密码:',
	'LBL_OFFICE_PHONE' => '办公电话:',
	'LBL_OPP_NAME' => '商业机会名称:',
	'LBL_OPPORTUNITY_AMOUNT' => '商业机会金额:',
	'LBL_OPPORTUNITY_ID' => '商业机会编号',
	'LBL_OPPORTUNITY_NAME' => '商业机会名称:',
	'LBL_OTHER_EMAIL_ADDRESS' => '其它电子邮件:',
	'LBL_OTHER_PHONE' => '其它电话:',
	'LBL_PHONE' => '电话:',
	'LBL_PORTAL_ACTIVE' => '启用门户网站:',
	'LBL_PORTAL_APP' => '门户网站应用程序',
	'LBL_PORTAL_INFORMATION' => '门户网站信息',
	'LBL_PORTAL_NAME' => '门户网站名称:',
	'LBL_PORTAL_PASSWORD_ISSET' => '门户网站密码已设置:',
	'LBL_POSTAL_CODE' => '邮编:',
	'LBL_PRIMARY_ADDRESS_CITY' => '[主要住址]城市',
	'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要住址]国家',
	'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要住址]邮编',
	'LBL_PRIMARY_ADDRESS_STATE' => '[主要住址]省份',
	'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要住址]街道2',
	'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要住址]街道3',
	'LBL_PRIMARY_ADDRESS_STREET' => '[主要住址]街道',
	'LBL_PRIMARY_ADDRESS' => '主要地址:',
	'LBL_REFERED_BY' => '推荐人:',
	'LBL_REPORTS_TO_ID' => '上级领导',
	'LBL_REPORTS_TO' => '上级领导:',
	'LBL_SALUTATION' => '称谓',
    'LBL_MODIFIED'=>'修改人',
	'LBL_MODIFIED_ID'=>'修改编号',
	'LBL_CREATED'=>'创建人',
	'LBL_CREATED_ID'=>'创建人编号',    
	'LBL_SEARCH_FORM_TITLE' => '查找潜在客户',
	'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择打勾的潜在客户',
	'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择打勾的潜在客户',
	'LBL_STATE' => '省份:',
	'LBL_STATUS_DESCRIPTION' => '状态说明:',
	'LBL_STATUS' => '状态:',
	'LBL_TITLE' => '职称:',
	'LNK_IMPORT_VCARD' => '从vCard新增',
	'LNK_LEAD_LIST' => '潜在客户',
	'LNK_NEW_ACCOUNT' => '新增客户',
	'LNK_NEW_APPOINTMENT' => '新增约会',
	'LNK_NEW_CONTACT' => '新增联系人',
	'LNK_NEW_LEAD' => '新增潜在客户',
	'LNK_NEW_NOTE' => '新增备忘录',
	'LNK_NEW_OPPORTUNITY' => '新增商业机会',
	'LNK_SELECT_ACCOUNT' => '选择客户',
	'MSG_DUPLICATE' => '找到相似的潜在客户。请检查是否有重复的记录，或是要将记录附加到现有的记录中。完成后请点击下一步。',
	'NTC_COPY_ALTERNATE_ADDRESS' => '将备用地址复制到主地址',
	'NTC_COPY_PRIMARY_ADDRESS' => '将主地址內容复制到备用地址',
	'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
	'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '新增新商业机会需要一个客户\n请新增一个新的或是选择一个已经存在的',
	'NTC_REMOVE_CONFIRMATION' => '您确定要从这个客户反馈移除这个潜在客户?',
	'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '您确定要将这个直接下属删除吗?',
	'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '市场活动',
	'LBL_TARGET_OF_CAMPAIGNS' => '成功的市场活动:',
	'LBL_TARGET_BUTTON_LABEL' => '已定目标',
	'LBL_TARGET_BUTTON_TITLE' => '已定目标',
    'LBL_TARGET_BUTTON_KEY'=>'T',
	'LBL_CAMPAIGN_ID' => '营销编号',
	'LBL_CAMPAIGN' => '市场活动:',
	'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
    'LBL_PROSPECT_LIST' => '目标列表',
    'LBL_CAMPAIGN_LEAD' => '潜在客户',
	'LNK_LEAD_REPORTS' => '潜在客户报表',

	'LBL_THANKS_FOR_SUBMITTING_LEAD' => '谢谢您的意见。',
	'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => '很抱歉，目前服务器不可用，请稍后再试。',
    'LBL_ASSISTANT_PHONE' => '助理电话',
    'LBL_ASSISTANT' => '助理',

    'LBL_CREATED_USER' => '创建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_CAMPAIGNS' => '市场活动',

    'LBL_LIST_ACCEPT_STATUS' => '接受状态',
	'LBL_REGISTRATION' => '注册',
	'LBL_MESSAGE' => '请在下面录入您的信息。 信息和/或帐号将被简历以待审核.',
	'LBL_SAVED' => '感谢您的注册。 您的帐号将被建立,其他人很快就能联络上你。',
	'LBL_CLICK_TO_RETURN' => '返回门户',
	'LBL_ASSIGNED_TO' => '负责人:',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => '营销活动',
    'LBL_CONVERTLEAD_WARNING' => '警告: 您正在转化的潜在客户的状态是"Converted"。 客户或者联系人的记录可能已经通过这个潜在客户创建过了。 如果您希望继续转化，请单击保持按钮。如果不进行转化，请单击取消按钮。',

    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' 相关联系人: ',
    'LBL_CREATED_NEW' => '创建了新纪录 ',
    'LBL_STREET' => '街道',
    'LNK_NEW_TASK' => '创建任务',
    'LNK_NEW_CASE' => '创建客户反馈',
    'LNK_NEW_CALL' => '记录呼叫',
    'LNK_NEW_MEETING' => '安排会议',
    'LNK_SELECT_ACCOUNTS' => ' <b>或者</b> 选择客户',
    'LBL_BIRTHDATE' => '生日:',
    'LBL_CONVERT_MODULE_NAME' => '模块',
    'LBL_CONVERT_REQUIRED' => '必选',
    'LBL_CONVERT_SELECT' => '允许选项',
    'LBL_CONVERT_COPY' => '拷贝数据',
    'LBL_CONVERT_EDIT' => '编辑',
    'LBL_CONVERT_DELETE' => '删除',
    'LBL_CONVERT_ADD_MODULE' => '添加模块',
    'LBL_CREATE' => '创建',
    'LBL_SELECT' => ' <b>或者</b> 选择',
    'LBL_WEBSITE' => '网站',
    'LNK_IMPORT_LEADS' => '导入潜在客户',
    'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => '注意: 当前转化界面包含自定义字段。当你在工作室中定制转化潜在客户界面时，你必须加入这些地定义字段。否则这些自定义字段不会出现在导入后的记录里。',
    'LBL_MODULE_TIP' => '将创建记录的模块。',
    'LBL_REQUIRED_TIP' => '在转化潜在客户前，必须先创建或者选择这些模块。',
    'LBL_COPY_TIP' => '选中该选项，在创建新纪录时，将把字段名相同的数据从潜在客户复制到目标模块。',
    'LBL_SELECTION_TIP' => '转化的过程中模块中的联系人关联字段，将首先尝试查找而不是创建新联系人。',
    'LBL_EDIT_TIP' => '修改转化潜在客户界面。',
    'LBL_DELETE_TIP' => '把模块从转化界面中移除。',

    'LBL_REPORTS_FROM' => '来自于:',
    'LBL_ACTIVITIES_MOVE' => '把活动转移到',
    'LBL_ACTIVITIES_COPY' => '把活动复制到',
    'LBL_ACTIVITIES_MOVE_HELP' => '选择要转移的纪录。任务、电话、会议、备忘录和Email都会被转移到选中的纪录下。',
    'LBL_ACTIVITIES_COPY_HELP' => '选择要复制的纪录。任务、电话、会议、备忘录都会被复制到选中的纪录下。 Email会关联到选中的纪录下。',
    'LBL_PHONE_HOME' => '家庭电话',
    'LBL_PHONE_MOBILE' => '手机',
    'LBL_PHONE_WORK' => '公司电话',
    'LBL_PHONE_OTHER' => '其他电话',
    'LBL_PHONE_FAX' => '传真',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '负责人姓名',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '负责人编号',
    'LBL_EXPORT_MODIFIED_USER_ID' => '修改人编号',
    'LBL_EXPORT_CREATED_BY' => '创建人编号',
    'LBL_EXPORT_PHONE_MOBILE' => '手机',
    'LBL_EXPORT_EMAIL2' => '其他Email地址',
    'LBL_EDITLAYOUT' => '编辑布局',
    'LBL_ENTERDATE' => '输入日期',
    'LBL_LOADING' => '加载中',
    'LBL_EDIT_INLINE' => '编辑',
        
);


?>
