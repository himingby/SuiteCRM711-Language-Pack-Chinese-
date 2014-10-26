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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

		'LBL_ASSIGN_TEAM' => '指派给团队',


		'ERR_BAD_LOGIN_PASSWORD' => '用户名或者密码错误',
		'ERR_BODY_TOO_LONG' => '电子邮件正文太长。请调整。',
		'ERR_INI_ZLIB' => '暂时无法关闭Zlib压缩。“测试设置”可能失败。',
		'ERR_MAILBOX_FAIL' => '不能检索任何邮件箱。',
		'ERR_NO_IMAP' => '未发现IMAP类库。请在使用收件箱前解决这个问题。',
		'ERR_NO_OPTS_SAVED' => '没有最佳设置收件箱。请重新查看设置。',
		'ERR_TEST_MAILBOX' => '请检查您的设置，再重试。',

		'LBL_APPLY_OPTIMUMS' => '提交最佳设置',
		'LBL_ASSIGN_TO_USER' => '指派给用户',
		'LBL_AUTOREPLY_OPTIONS' => '自动回复选项',
		'LBL_AUTOREPLY' => '自动回复模板',
		'LBL_BASIC' => '基本设置',
		'LBL_CASE_MACRO' => '用户反馈宏',
		'LBL_CASE_MACRO_DESC' => '设置宏，他可以解析和链接导入的电子邮件到用户反馈。',
		'LBL_CASE_MACRO_DESC2' => '设置它为任何值，但是保留<b>"%1"</b>。',
		'LBL_CERT_DESC' => '强制验证邮件服务器的安全证书–如果是自我签署，请不要使用',
		'LBL_CERT' => '证书验证',
		'LBL_CLOSE_POPUP' => '关闭窗口',
		'LBL_CREATE_NEW_GROUP' => '--保存时新增分组邮箱--',
		'LBL_CREATE_TEMPLATE' => '新增',
		'LBL_DEFAULT_FROM_ADDR' => '默认“发件人”地址:',
		'LBL_DEFAULT_FROM_NAME' => '默认“发件人”姓名:',
		'LBL_DELETE_SEEN' => '在导入后删除已读的电子邮件',
		'LBL_EDIT_TEMPLATE' => '编辑',
		'LBL_EMAIL_OPTIONS' => '电子邮件处理选项',
		'LBL_FILTER_DOMAIN_DESC' => '不要发送自动回复的电子邮件到这个域。',
		'LBL_FILTER_DOMAIN' => '没有自动回复的域',
		'LBL_FIND_OPTIMUM_KEY'	=> 'f',
		'LBL_FIND_OPTIMUM_MSG' => '<br>寻找最佳连接变量。',
		'LBL_FIND_OPTIMUM_TITLE' => '寻找最佳配置',
		'LBL_FIND_SSL_WARN' => '<br>测试SSL可能会需要一段时间。请耐心等待。<br>',
		'LBL_FORCE_DESC' => '一些IMAP/POP3服务器需要特殊的交换机。当连接失败的时候，请检查交换机(像/notls)',
		'LBL_FORCE' => '强制否定',
		'LBL_FOUND_MAILBOXES' => '发现下面可使用的文件夹。<br>请选择其中一个:',
		'LBL_FOUND_OPTIMUM_MSG' => '<br>已找到最优设置。请点击下面的按钮以应用这些参数。',
		'LBL_FROM_ADDR' => '“发件人”地址',
		'LBL_FROM_NAME_ADDR' => '回复姓名/电子邮件',
		'LBL_FROM_NAME' => '“发件人”姓名',
		'LBL_GROUP_QUEUE' => '指派给组',
		'LBL_HOME' => '首页',
		'LBL_LIST_MAILBOX_TYPE' => '使用收件箱',
		'LBL_LIST_NAME' => '名称:',
		'LBL_LIST_GLOBAL_PERSONAL'			=> '组/个人',
		'LBL_LIST_SERVER_URL' => '邮件服务器:',
		'LBL_LIST_STATUS' => '状态:',
		'LBL_LOGIN' => '用户名',
		'LBL_MAILBOX_DEFAULT' => '收件箱',
		'LBL_MAILBOX_SSL_DESC' => '连接时使用SSL。如果不能连接，请检查您在安装PHP的时候，配置项中是否包含了“--with-imap-ssl”。',
		'LBL_MAILBOX_SSL' => '使用SSL',
		'LBL_MAILBOX_TYPE' => '可能的动作',
		'LBL_MAILBOX' => '已监视的文件夹',
		'LBL_MARK_READ_DESC' => '导入后在此邮件服务器上标记信息已读；不删除。',
		'LBL_MARK_READ_NO' => '导入后删除标记过的电子邮件',
		'LBL_MARK_READ_YES' => '导入后在服务器上保留电子邮件',
		'LBL_MARK_READ' => '在服务器上备份',
		'LBL_MAX_AUTO_REPLIES'	=> '自动响应的数量',
		'LBL_MAX_AUTO_REPLIES_DESC'	=> '设置自动响应发送一个唯一邮件地址的最大数值在24小时内.',
		'LBL_MODULE_NAME' => '设置收件箱',
		'LBL_MODULE_TITLE' => '收件箱',
		'LBL_NAME' => '名称',
	    'LBL_NONE'              => '无',
		'LBL_NO_OPTIMUMS' => '未找到最优参数．请检查您的设置，然后再试。',
		'LBL_ONLY_SINCE_DESC' => '当使用POP3时，PHP将不能过滤新信息或未读信息。此标签可以核对上次收件箱里的信息。如果您的邮件服务器不支持IMAP，它将对此有很大改进。',
		'LBL_ONLY_SINCE_NO' => '不。检查此邮件服务器上的所有邮件。',
		'LBL_ONLY_SINCE_YES' => '是。',
		'LBL_ONLY_SINCE' => '只导入最后确认:',
		'LBL_OUTBOUND_SERVER'	=> '外部响应邮件服务',
		'LBL_PASSWORD_CHECK' => '密码确认',
		'LBL_PASSWORD' => '密码',
		'LBL_POP3_SUCCESS' => 'POP3测试连接成功。',
		'LBL_POPUP_FAILURE' => '测试连接失败。错误显示在下面。',
		'LBL_POPUP_SUCCESS' => '测试连接成功。您的设置可以工作了。',
		'LBL_POPUP_TITLE' => '测试设置',
		'LBL_PORT' => '邮件服务器端口',
		'LBL_QUEUE' => '邮件箱队列',
		'LBL_REPLY_NAME_ADDR'	=> '回复 名称/邮件',
		'LBL_REPLY_TO_NAME'		=> '"回复到" 名称',
		'LBL_REPLY_TO_ADDR'		=> '"回复到" 地址',
		'LBL_SAME_AS_ABOVE'		=> '使用从名称/地址',
		'LBL_SAVE_RAW' => '保存原始资料',
		'LBL_SAVE_RAW_DESC_1' => '如果您想为每一封导入的电子邮件保留原始资料的话，请选择“是”。',
		'LBL_SAVE_RAW_DESC_2' => '大的附件和错误的数据库配置能够引起错误。',
		'LBL_SERVER_OPTIONS' => '高级设置',
		'LBL_SERVER_TYPE' => '邮件服务器协议',
		'LBL_SERVER_URL' => '邮件服务器地址',
		'LBL_SSL_DESC' => '如有您的邮件服务器支持安全端口连接，在导入电子邮件的时候，请启用SLL连接。',
		'LBL_SSL' => '使用SSL',
		'LBL_STATUS' => '状态',
		'LBL_SYSTEM_DEFAULT' => '系统默认',
		'LBL_TEST_BUTTON_KEY'	=> 't',
		'LBL_TEST_BUTTON_TITLE' => '测试[Alt+T]',
		'LBL_TEST_SETTINGS' => '测试设置',
		'LBL_TEST_SUCCESSFUL' => '连接完全成功。',
		'LBL_TEST_WAIT_MESSAGE' => '请稍后...',
		'LBL_TLS_DESC' => '连接邮件服务器时使用传输层安全协议–如果您的邮件服务器支持这此协议，请只使用这一个。',
		'LBL_TLS' => '使用TLS',
		'LBL_WARN_IMAP_TITLE' => '禁用收件箱',
		'LBL_WARN_IMAP' => '警告:',
		'LBL_WARN_NO_IMAP' => '收件箱功能<b>不能使用</b>如果在编译PHP的时候未打开IMAPc-client类库。请联系管理员来解决这个问题。',

		'LNK_CREATE_GROUP' => '新增组',
		'LNK_LIST_CREATE_NEW' => '新增收件箱',
		'LNK_LIST_MAILBOXES' => '所有邮件箱',
		'LNK_LIST_QUEUES' => '所有队列',
		'LNK_LIST_SCHEDULER' => '计划任务',
		'LNK_LIST_TEST_IMPORT' => '测试邮件导入',
		'LNK_NEW_QUEUES' => '新增队列',
		'LNK_SEED_QUEUES' => '团队的记录队列',
		'LBL_IS_PERSONAL'       => '个人邮件帐户',
		'LBL_GROUPFOLDER_ID'	=> '组文件夹编号',
		'LBL_ASSIGN_TO_GROUP_FOLDER' => '负责人组文件夹',

    'LBL_STATUS_ACTIVE'     => '启用',
    'LBL_STATUS_INACTIVE'   => '停用',
    'LBL_IS_PERSONAL' => '个人',
    'LBL_IS_GROUP' => ' 组 ',

		'LBL_RE' => '答复:',
		'LBL_SUBSCRIBE_FOLDERS' => '订阅',
		'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => '对组文件夹指派邮件帐号将自动导入邮件.',
		'LBL_POSSIBLE_ACTION_DESC' => '若要创建客户反馈,必须选择组文件夹',
		'LBL_DISTRIBUTION_METHOD' => '分发方法',
		'LBL_CREATE_CASE_REPLY_TEMPLATE' => '新建客户反馈回复模板',
		'LBL_TRASH_FOLDER' => '垃圾邮件',
		'LBL_GET_TRASH_FOLDER' => '获取垃圾邮件',
		'LBL_SENT_FOLDER' => '已发送邮件',
		'LBL_GET_SENT_FOLDER' => '获取发送邮件',
		'LBL_SELECT' => '选择',
		'LBL_GETTING_FOLDERS_LIST' => '获取文件夹列表',
		'LBL_SELECT_SUBSCRIBED_FOLDERS' => '选择订阅',
		'LBL_SELECT_TRASH_FOLDERS' => '选择垃圾邮件',
		'LBL_SELECT_SENT_FOLDERS' => '选择已发送邮件',
		'LBL_DELETED_FOLDERS_LIST' => '以下目录 %s 不存在或已从服务器上删除',
		'LBL_ASSIGN_TO_TEAM_DESC' => '所选团队拥有此邮件帐号权限. 如果选择组文件夹,指派给该文件夹的团队将覆盖所选团队.',
		'LBL_AUTOREPLY_HELP' => '选择收到电子邮件时的自动回复发件人。',
    'LBL_EMAIL_BOUNCE_OPTIONS' => '弹回邮件处理选项',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '选择客户反馈创建时的自动告知电子邮件的发件人。邮件中将包含客户反馈号。只有当第一次收到收件人的邮件时才会创建这个邮件。',
    'LBL_PERSONAL_MODULE_NAME' => '个人电子邮件帐号',
    'LBL_CREATE_CASE' => '从电子邮件创建客户反馈',
    'LBL_CREATE_CASE_HELP' => '当收到电子邮件时，自动创建客户反馈记录。',
    'LBL_BOUNCE_MODULE_NAME' => '弹回电子邮件处理邮箱',
    'LNK_LIST_CREATE_NEW_GROUP' => '新建组邮件帐号',
    'LNK_LIST_CREATE_NEW_BOUNCE' => '新建弹回电子邮件处理帐号',
    'LBL_ENABLE_AUTO_IMPORT' => '字段导入电子邮件',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '警告：你修改了自动导入设置，这将会导致生产大量数据。',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '警告：如果要字段创建客户反馈，必须设置成自动导入电子邮件。',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => '发送邮件时，允许用户使用"发件人"的姓名和地址作为回复地址',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => '如果选中该选择，当有权访问这个组邮件的用户发邮件时，这个组邮件对应的"发件人"姓名和电子邮件地址将出现在发件人选项中。',

    'LBL_FROM_ADDR_DESC' => '由于某些邮件服务器的限制,这里设置“发件人”地址可能不会显示在电子邮件的“发件人”里,这种情况下显示的是外发邮件服务器里设置的邮件地址.',

    'LBL_EDIT_LAYOUT' => '编辑布局',

);

?>
