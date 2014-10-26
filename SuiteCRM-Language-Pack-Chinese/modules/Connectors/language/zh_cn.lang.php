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

$mod_strings = array (

    'LBL_ADD_MODULE' => '添加',
    'LBL_ADDRCITY' => '城市',
    'LBL_ADDRCOUNTRY' => '国家',
    'LBL_ADDRCOUNTRY_ID' => '国家Id',
    'LBL_ADDRSTATEPROV' => '洲/省',
    'LBL_ADMINISTRATION' => '连接器管理员',
    'LBL_ADMINISTRATION_MAIN' => '连接器配置',
    'LBL_AVAILABLE' => '可用',
    'LBL_BACK' => '< 上一步',
    'LBL_COMPANY_ID' => '公司 Id',
    'LBL_CONFIRM_CONTINUE_SAVE' => '某些必填字段为空。仍旧保存?',
    'LBL_CONNECTOR' => '连接器',
    'LBL_CONNECTOR_FIELDS' => '连接器字段',
    'LBL_DATA' => '数据',
    'LBL_DEFAULT' => '缺省',
    'LBL_DELETE_MAPPING_ENTRY' => '你确定要删除这个入口吗？',
    'LBL_DISABLED' => '禁用',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => '未找到符合查询条件的记录。',
    'LBL_ENABLED' => '启用',
    'LBL_FINSALES' => 'Finsales',
    'LBL_MARKET_CAP' => '市值',
    'LBL_MERGE' => '合并',
    'LBL_MODIFY_DISPLAY_TITLE' => '启用连接器',
    'LBL_MODIFY_DISPLAY_DESC' => '为每个连接器选择启用模块',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => '连接器配置：启用连接器',
    'LBL_MODULE_FIELDS' => '模块字段',
    'LBL_MODIFY_MAPPING_TITLE' => '映射连接器字段',
    'LBL_MODIFY_MAPPING_DESC' => '映射连接器字段到模块列表，以此来决定哪个连接器数据能够被察看且被合并到模块记录中。',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => '连接器设置：映射连接器字段',
    'LBL_MODIFY_PROPERTIES_TITLE' => '设置连接器属性',
    'LBL_MODIFY_PROPERTIES_DESC' => '为每个连接器设置属性，包括URLs 和 API 关键字.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => '连接器设置：设置连接器属性',
    'LBL_MODIFY_SEARCH_TITLE' => '管理连接器查询',
	'LBL_MODIFY_SEARCH' => '查询',
    'LBL_MODIFY_SEARCH_DESC' => '为每个模块选择为数据查询所使用的连接器字段。',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => '连接器配置：管理连接器查询',
	'LBL_MODULE_NAME' => '连接器',
    'LBL_NO_PROPERTIES' => '这个连接器没有配置属性。',
    'LBL_PARENT_DUNS' => '父商业实体标识符（DUNS）',
    'LBL_PREVIOUS' => '< 上一步',
    'LBL_QUOTE' => '引用',
    'LBL_RECNAME' => '公司名',
    'LBL_RESET_TO_DEFAULT' => '恢复到缺省设置',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => '你确定要恢复到缺省设置吗？',
    'LBL_RESET_BUTTON_TITLE' => '重置 [Alt+R]',
	'LBL_RESULT_LIST' => '数据列表',
    'LBL_RUN_WIZARD' => '运行向导',
    'LBL_SAVE' => '保存',
	'LBL_SEARCHING_BUTTON_LABEL' => '查找中...',
    'LBL_SHOW_IN_LISTVIEW' => '在合并记录的列表示图中显示',
    'LBL_SMART_COPY' => '智能拷贝',
    'LBL_SUMMARY' => '摘要',
    'LBL_STEP1' => '查找，察看数据',
    'LBL_STEP2' => '合并记录与',
    'LBL_TEST_SOURCE' => '测试连接器',
    'LBL_TEST_SOURCE_FAILED' => '测试失败',
    'LBL_TEST_SOURCE_RUNNING' => '执行测试中...',
    'LBL_TEST_SOURCE_SUCCESS' => '测试成功',
    'LBL_TITLE' => '数据合并',
    'LBL_ULTIMATE_PARENT_DUNS' => '最终父商业实体标识符（DUNS）',

    'ERROR_RECORD_NOT_SELECTED' => '错误：在执行之前，请从列表中选择一条记录。',
    'ERROR_EMPTY_WRAPPER' => '错误：不能为资源获取包装器实例 [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => '错误：源ID没有指定或为空值。',
    'ERROR_EMPTY_RECORD_ID' => '错误：记录ID没有指定或为空值。',
    'ERROR_NO_ADDITIONAL_DETAIL' => '错误：没有为记录找到额外的详细信息。',
    'ERROR_NO_SEARCHDEFS_DEFINED' => '这个连接器没有模块被启用。请在启用连接器页面为这个连接器选择一个模块。',
    'ERROR_NO_SOURCEDEFS_FILE' => '错误：找不到sourcedefs.php 文件。',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => '错误：没有指定获取数据的来源。',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => '错误：没有和这个模块映射好的连接器。',
    'ERROR_NO_SEARCHDEFS_MAPPING' => '错误：没有为这个模块和连接器所定义的查询字段。请联系系统管理员。',
    'ERROR_NO_FIELDS_MAPPED' => '错误： 你必须为每个模块入口提供一个从连接器字段到模块字段的映射。',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => '错误：在结果中没有映射好的模块字段以供显示。请联系系统管理员。',
	'LBL_RUN_REPORT_BUTTON_LABEL'  => '运行报表',
	'LBL_CLEAR'  => '清除',

	'ERROR_NO_SEARCHDEFS_MAPPED' => '错误：所有的连接器都没有定义搜索字段。',

    'LBL_EXTERNAL' => '允许用户通过该连接器创建外部帐号.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' In order to use this connector, the properties should also be set in the Set Connector Properties settings page.',

    'LBL_INFO_INLINE' => '信息',
    'LBL_CLOSE' => '关闭',
);

?>
