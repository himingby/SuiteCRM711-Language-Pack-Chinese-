<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
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
 */





$mod_strings = array (
	'LBL_EDIT_LAYOUT' => '编辑布局',
	'LBL_EDIT_ROWS' => '编辑行',
	'LBL_EDIT_COLUMNS' => '编辑列',
	'LBL_EDIT_LABELS' => '编辑标签',
	'LBL_EDIT_FIELDS' => '编辑自定义字段',
	'LBL_ADD_FIELDS' => '增加自定义字段',
	'LBL_DISPLAY_HTML' => '显示HTML源代码',
	'LBL_SELECT_FILE' => '选择文件',
	'LBL_SAVE_LAYOUT' => '保存布局',
	'LBL_SELECT_A_SUBPANEL' => '选择一个子面板',
	'LBL_SELECT_SUBPANEL' => '选择字面板',
	'LBL_MODULE_TITLE' => '工作室',
	'LBL_TOOLBOX' => '工具箱',
	'LBL_STAGING_AREA' => '规划区(拖拉项目到这里)',
	'LBL_SUGAR_FIELDS_STAGE' => 'Sugar字段(点击项目增加到规划区)',
	'LBL_SUGAR_BIN_STAGE' => 'Sugar指令(点击项目增加到规划区)',
	'LBL_VIEW_SUGAR_FIELDS' => '查看Sugar字段',
	'LBL_VIEW_SUGAR_BIN' => '查看Sugar指令',
	'LBL_FAILED_TO_SAVE' => '保存失败',
	'LBL_CONFIRM_UNSAVE' => '任何改变将转为未存状态. 您确定您要继续吗?',
	'LBL_PUBLISHING' => '公布中...',
	'LBL_PUBLISHED' => '已公布',
	'LBL_FAILED_PUBLISHED' => '公布失败',
	'LBL_DROP_HERE' => '[拽到这里]',

//CUSTOM FIELDS
	'LBL_NAME' => '名称',
	'LBL_LABEL' => '标签',
	'LBL_MASS_UPDATE' => '批量更新',
	'LBL_AUDITED' => '审计',
	'LBL_CUSTOM_MODULE' => '模块',
	'LBL_DEFAULT_VALUE' => '默认值',
	'LBL_REQUIRED' => '必须',
	'LBL_DATA_TYPE' => '类型',


	'LBL_HISTORY' => '历史记录',

//WIZARDS
//STUDIO WIZARD
	'LBL_SW_WELCOME' => '<h2>欢迎来到工作室！</h2><br>今天想做些什么呢?<br><b>请从下面的选项中选择。</b>',
	'LBL_SW_EDIT_MODULE' => '编辑模块',
	'LBL_SW_EDIT_DROPDOWNS' => '编辑下拉框',
	'LBL_SW_EDIT_TABS' => '设置标签',
	'LBL_SW_RENAME_TABS' => '重命名标签',
	'LBL_SW_EDIT_GROUPTABS' => '设置组标签',
	'LBL_SW_EDIT_PORTAL' => '编辑门户网站',
	'LBL_SW_EDIT_WORKFLOW' => '编辑工作流程',
	'LBL_SW_REPAIR_CUSTOMFIELDS' => '修复自定义字段',
	'LBL_SW_MIGRATE_CUSTOMFIELDS' => '移植自定义字段',


//SELECT MODULE WIZARD
	'LBL_SMW_WELCOME' => '<h2>欢迎来到工作室！</h2><br><b>请选择下面的一个模块。',

//SELECT MODULE ACTION
	'LBL_SMA_WELCOME' => '<h2>编辑模块</h2>您要对那个模块做什么呢?<br><b>请选择您要采取的行动。',
	'LBL_SMA_EDIT_CUSTOMFIELDS' => '编辑自定义字段',
	'LBL_SMA_EDIT_LAYOUT' => '编辑布局',
	'LBL_SMA_EDIT_LABELS' => '编辑标签',

//Manager Backups History
	'LBL_MB_PREVIEW' => '预览',
	'LBL_MB_RESTORE' => '恢复',
	'LBL_MB_DELETE' => '删除',
	'LBL_MB_COMPARE' => '比较',
	'LBL_MB_WELCOME' => '<h2>历史</h2><br>在历史中，您可以查看以前公布的文件修改。您可以比较和恢复以前的版本。如果您恢复了文件，它就会成为您的工作文件。在它被其他人看到以前，您必须公布它。<br>您今天想做些什么呢?<br><b>请从下面的选项中选择。</b>',

	//EDIT DROP DOWNS
	'LBL_ED_CREATE_DROPDOWN' => '新增下拉框',
	'LBL_ED_WELCOME' => '<h2>编辑下拉框</h2><br><b>您既可以编辑一个存在的下拉框，也可以新增下拉框。',
	'LBL_DROPDOWN_NAME' => '下拉列表名称:',
	'LBL_DROPDOWN_LANGUAGE' => '下拉列表语言:',

	//EDIT CUSTOM FIELDS
	'LBL_EC_WELCOME' => '<h2>编辑自定义字段</h2><br><b>您可以编辑视图，或者已存在的自定义字段。新增自定义字段，或者清除自定义字段缓存。',
	'LBL_EC_VIEW_CUSTOMFIELDS' => '查看自定义字段',
	'LBL_EC_CREATE_CUSTOMFIELD' => '新增自定义字段',
	'LBL_EC_CLEAR_CACHE' => '清除缓存',

	//SELECT MODULE
	'LBL_SM_WELCOME' => '<h2>历史</h2><br><b>请选择您要查看的文件。</b>',
	//END WIZARDS

	//DROP DOWN EDITOR
	'LBL_DD_DISPALYVALUE' => '显示数值',
	'LBL_DD_DATABASEVALUE' => '数据库数值',
	'LBL_DD_ALL' => '所有',

	//BUTTONS
	'LBL_BTN_SAVE' => '保存',
	'LBL_BTN_SAVEPUBLISH' => '保存并且公布',
	'LBL_BTN_HISTORY' => '历史记录',
	'LBL_BTN_NEXT' => '下一步',
	'LBL_BTN_BACK' => '上一步',
	'LBL_BTN_ADDCOLS' => '增加列',
	'LBL_BTN_ADDROWS' => '增加行',
	'LBL_BTN_UNDO' => '取消',
	'LBL_BTN_REDO' => '重做',
	'LBL_BTN_ADDCUSTOMFIELD' => '增加自定义字段',
	'LBL_BTN_TABINDEX' => '编辑标签顺序',

	//TABS
	'LBL_TAB_SUBTABS' => '子标签',
	'LBL_MODULES' => '模块',
	//nsingh: begin bug#15095 fix
	'LBL_MODULE_NAME' => '管理员',
	'LBL_CONFIGURE_GROUP_TABS' => '配置组标签',
	 //end bug #15095 fix
	'LBL_GROUP_TAB_WELCOME'=>'当用户选择使用组标签而不是使用 我的帐户>布局选项 中的模块标签时，下列组标签布局将被使用。',
	'LBL_RENAME_TAB_WELCOME'=>'点击任何标签在表下方显示值更改标签名称',
	'LBL_DELETE_MODULE'=>'&nbsp;删除&nbsp;模块',
	'LBL_ADD_GROUP'=>'添加组',
	'LBL_NEW_GROUP'=>'新建组',
	'LBL_RENAME_TABS'=>'重命名标签',

	//LIST VIEW EDITOR
	'LBL_DEFAULT' => '默认',
	'LBL_ADDITIONAL' => '附加的',
	'LBL_AVAILABLE' => '有效的',
	'LBL_LISTVIEW_DESCRIPTION' => '有三列显示在下面。默认列包含显示在默认列表视图中的字段，附加列包含用户可能用来新增自定义视图的字段，有效列包含的列可以让管理员增加当前用户没有使用的默认列和附加列。',
	'LBL_LISTVIEW_EDIT' => '编辑列表视图',

	//ERRORS
	'ERROR_ALREADY_EXISTS' => '字段已存在',
	'ERROR_INVALID_KEY_VALUE'=> "错误: 无效的关键字值: [']",

	//SUGAR PORTAL
	'LBL_SW_SUGARPORTAL' => 'Sugar门户网站',
	'LBL_SMP_WELCOME' => '请从下面列表中选择一个您想要编辑的模块',
	'LBL_SP_WELCOME' => '欢迎来到Sugar门户网站工作室。您可以选择一个要编辑的模块，或者同步一个门户网站实例。<br>请从下面的列表中选择。',
	'LBL_SP_SYNC' => '门户网站同步',
	'LBL_SYNCP_WELCOME' => '请输入您要更新门户网站实例的网址，然后点击“执行”按钮。<br>这会出现用户名和密码的提示。<br>请输入您Sugar的用户名和密码，并点击“开始同步”按钮。',
	'LBL_LISTVIEWP_DESCRIPTION' => '下面有两个列:默认列包含要显示的字段，有效列包含那些没有显示，但是是可以被显示的字段。在两列之间拖拽字段。您也可以通过拖拽，重新排列列中的记录。',
	'LBL_SP_STYLESHEET' => '上传样式',
	'LBL_SP_UPLOADSTYLE' => '点击“浏览”按钮，并选择一个上传的风格。<br>下一次您同步门户网站，他会被同步到门户网站中。',
	'LBL_SP_UPLOADED' => '已上传',
	'ERROR_SP_UPLOADED' => '请确定您在上传一个css样式。',
	'LBL_SP_PREVIEW' => '您可以预览您的样式',

	'LBL_TABGROUP_LANGUAGE' => '组标签语言：',
	'LBL_DISPLAY_OTHER_TAB_HELP' => '选择显示在导航栏上显示"其他"标签。缺省情况下，"其他"内包含那些没有被分配到指定组的所有模块。',
	'LBL_TAB_GROUP_LANGUAGE_HELP' => '为其他语言选项设置组标签的标题。选择一个语言选项，然后编辑标题，单击保存并部署。',
	'LBL_DISPLAY_OTHER_TAB' => '显示 \'其他\' 标签',

	'LBL_BTN_CANCEL' => '取消',
	'LBL_SAVE' => '保存',
	'LBL_UNDO' => '撤销（Undo）',
	'LBL_REDO' => '重复（Redo）',
	'LBL_INLINE' => '内联',
	'LBL_DELETE' => '删除',
	'LBL_ADD_FIELD' => '添加字段',
	'LBL_MAXIMIZE' => '最大化',
	'LBL_MINIMIZE' => '最小化',
	'LBL_PUBLISH' => '发布',
	'LBL_ADDROWS' => '添加行',
	'LBL_ADDFIELD' => '添加字段',
	'LBL_EDIT' => '编辑',
	'LBL_LANGUAGE_TOOLTIP' => '选择要编辑的语言。',
	'LBL_SINGULAR' => '单数标签',
	'LBL_PLURAL' => '复数标签',
	'LBL_RENAME_MOD_SAVE_HELP' => '点击 <b>保存</b> 使改变生效。',

);
?>
