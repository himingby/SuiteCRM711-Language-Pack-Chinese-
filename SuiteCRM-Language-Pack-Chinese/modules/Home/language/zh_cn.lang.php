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
    'LBL_MODULE_NAME' => '主页',
    'LBL_MODULES_TO_SEARCH' => '搜索模块',
    'LBL_MODULES_TO_SEARCH' => '查找模块',
  	'LBL_NEW_FORM_TITLE' => '新增联系人',
  	'LBL_FIRST_NAME' => '名:',
  	'LBL_LAST_NAME' => '姓:',
  	'LBL_LIST_LAST_NAME' => '姓',
  	'LBL_PHONE' => '电话:',
  	'LBL_EMAIL_ADDRESS' => '电子邮件:',
      'LBL_MY_PIPELINE_FORM_TITLE' => '我的管道',
  	'LBL_PIPELINE_FORM_TITLE' => '我的销售数据',
  	'LBL_CAMPAIGN_ROI_FORM_TITLE' => '营销活动投资汇报率',
      'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => '我谈成结束的商业机会',
  	'LNK_NEW_CONTACT' => '新增联系人',
  	'LNK_NEW_ACCOUNT' => '新增客户',
  	'LNK_NEW_OPPORTUNITY' => '新增商业机会',

  	'LNK_NEW_QUOTE' => '新增报价',

  	'LNK_NEW_LEAD' => '新增潜在客户',
  	'LNK_NEW_CASE' => '新增客户反馈',
  	'LNK_NEW_NOTE' => '新增备忘录',
  	'LNK_NEW_CALL' => '安排电话',
  	'LNK_NEW_EMAIL' => '存档电子邮件',
  	'LNK_COMPOSE_EMAIL' => '撰写电子邮件',
  	'LNK_NEW_MEETING' => '安排会议',
  	'LNK_NEW_TASK' => '新增任务',
  	'LNK_NEW_BUG' => '汇报缺陷',
  	'LBL_ADD_BUSINESSCARD' => '新增名片',
  	'ERR_ONE_CHAR' => '请至少输入一个文字或者数字再查找...',
  	'LBL_OPEN_TASKS' => '我要完成的任务',
  	'LBL_SEARCH_RESULTS' => '查找结果',
  	'LBL_SEARCH_RESULTS_IN' => '中',
  	'LNK_NEW_SEND_EMAIL' => '撰写电子邮件',
  	'LBL_NO_RESULTS_IN_MODULE' => '--没有结果--',
  	'LBL_NO_RESULTS' => '<h2>未发现结果。请重新查找。</h2><br>',
  	'LBL_NO_RESULTS_TIPS' => '<h3>查找技巧:</h3><ul><li>确信您选择了上面合适的分类。</li><li>拓宽您的查找标准</li><li>如果您还不可以找到结果，请使用那个模块的高级查找。</li></ul>',

  	'LBL_RELOAD_PAGE' => '请<a href="javascript:window.location.reload()">重新加载窗口</a>来使用这个新增栏。',
  	'LBL_ADD_DASHLETS' => '增加新增栏',
    'LBL_ADD_PAGE' => '添加页',
    'LBL_DELETE_PAGE' => '删除页',
    'LBL_CHANGE_LAYOUT' => '改变布局',
    'LBL_RENAME_PAGE' => '重命名页',
  	'LBL_CLOSE_DASHLETS' => '关闭',
    'LBL_CLOSE_SITEMAP' => '关闭',
  	'LBL_OPTIONS' => '选项',
    // dashlet search fields
  	'LBL_TODAY' => '今天',
  	'LBL_YESTERDAY' => '昨天',
  	'LBL_TOMORROW' => '明天',
  	'LBL_LAST_WEEK' => '上周',
  	'LBL_NEXT_WEEK' => '下周',
  	'LBL_LAST_7_DAYS' => '过去7天',
  	'LBL_NEXT_7_DAYS' => '未来7天',
  	'LBL_LAST_MONTH' => '上月',
  	'LBL_NEXT_MONTH' => '下月',
  	'LBL_LAST_QUARTER' => '上个季度',
  	'LBL_THIS_QUARTER' => '这个季度',
  	'LBL_LAST_YEAR' => '去年',
  	'LBL_NEXT_YEAR' => '明年',
  	'LBL_THIS_MONTH' => '本月',
  	'LBL_THIS_YEAR' => '今年',
  	'LBL_LAST_30_DAYS' => '过去30天',
  	'LBL_NEXT_30_DAYS' => '未来30天',
  	'LBL_THIS_MONTH' => '本月',
  	'LBL_THIS_YEAR' => '今年',
  	'LBL_LAST_30_DAYS' => '过去30天',
  	'LBL_NEXT_30_DAYS' => '未来30天',
    'LBL_MODULES' => '模块',
    'LBL_CHARTS' => '图表',
    'LBL_TOOLS' => '工具',
  	'Charts' => '图表',
  	'Tools' => '工具',
  	'LBL_SEARCH_RESULTS' => '查找结果',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
  	'Module Views' => '模块视图',
  	'Portal' => '门户网站',
  	'Charts' => '图表',
  	'Tools' => '工具',
  	'Miscellaneous' => '混合'),
  	'LBL_MAX_DASHLETS_REACHED' => '您已经达到管理员设置新增栏的最大数目。要增加新增栏，请移除一个已有的。',
  	'LBL_ADDING_DASHLET' => '增加新增栏...',
  	'LBL_ADDED_DASHLET' => '新增栏已增加',
  	'LBL_REMOVE_DASHLET_CONFIRM' => '您确定要移除这个新增栏吗?',
  	'LBL_REMOVING_DASHLET' => '移除新增栏中...',
  	'LBL_REMOVED_DASHLET' => '新增栏已移除',
  	'LBL_DASHLET_CONFIGURE_GENERAL' => '常规',
  	'LBL_DASHLET_CONFIGURE_FILTERS' => '过滤',
  	'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '只显示我的记录',
  	'LBL_DASHLET_CONFIGURE_TITLE' => '职称',
  	'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '显示行数:',
  	'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '只显示我的记录',

    'LBL_DASHLET_DELETE' => '删除新增栏',
    'LBL_DASHLET_REFRESH' => '刷新新增栏',
    'LBL_DASHLET_EDIT' => '编辑新增栏',

  	'LBL_TRAINING_TITLE' => '培训',

    'LBL_CREATING_NEW_PAGE' => '创建新页中...',
    'LBL_NEW_PAGE_FEEDBACK' => '您已创建一个新页. 您能随着新增栏选项添加新内容.',
    'LBL_DELETE_PAGE_CONFIRM' => '您确定您要删除这一页吗?',
    'LBL_SAVING_PAGE_TITLE' => '保存页标题...',
    'LBL_RETRIEVING_PAGE' => '挽救页面...',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => '我的Sugar',
    'LBL_HOME_PAGE_2_NAME' => '销售页面',
    'LBL_HOME_PAGE_3_NAME' => '客户支持',
    'LBL_HOME_PAGE_6_NAME' => '市场页面',//bug 16510, separate the support and marketing page from each other
    'LBL_CLOSE_SITEMAP' =>'关闭',

    'LBL_SEARCH' => '查找',
    'LBL_CLEAR' => '清除',

    'LBL_BASIC_CHARTS' => '基本视图',
    'LBL_REPORT_CHARTS' => '报表视图',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => '我喜欢的报表',
    'LBL_GLOBAL_REPORT_CHARTS' => '全局团队报表',
    'LBL_MY_TEAM_REPORT_CHARTS' => '我团队的报表',
    'LBL_MY_SAVED_REPORT_CHARTS' => '我保存的报表',

    'LBL_DASHLET_SEARCH' => '发现新增栏',

  //ABOUT page
    'LBL_VERSION' => '版本',
    'LBL_BUILD' => '创建',
    'LBL_VIEWLICENSE_COM' => '<P>这段程序是免费软件; 您可以重新分配和/或修改条款下的GNU通用公共许可证版本3 <a href="LICENSE.txt" target="_blank" class="body">  </a> 作为出版自由软体基金会包括附加许可所列的源代码头.</P>',
    'LBL_ADD_TERM_COM' => '<P>互动的用户界面在修改这个程序源和目标代码版本必须显示适当的法律通告, a按照条例第5条的GNU通用公共许可证的第3版。按照第七条第（二）的GNU通用公共许可证，第3版, 这些适当的法律告示必须保留展示的"动力SugarCRM公司"; 徽标。如果显示器的标志，是不是合理可行的技术原因，制定适当的法律告示必须展示话： "供电所的SugarCRM ".</P>',
    'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar版本一致性',
    'LBL_SUGAR_PROFESSIONAL' => "Sugar 专业版",
    'LBL_SUGAR_ENTERPRISE' => "Sugar 企业版",
    'LBL_AND' => "和",
    'LBL_ARE' => "是",
    'LBL_TRADEMARKS' => '商标',
    'LBL_OF' => '的',
    'LBL_FOUNDERS' => '创办人',
    'LBL_JOIN_SUGAR_COMMUNITY' => '加入Sugar群体',
    'LBL_SUBSCRIBE_SUGARBUZZ' => '与SugarBuzz签署业务通讯',
    'LBL_DETAILS_SUGARFORGE' => '合作和发展Sugar业务',
    'LBL_DETAILS_SUGAREXCHANGE' => '买和卖Sugar业务的认证',
    'LBL_TRAINING' => '培训',
    'LBL_DETAILS_TRAINING' => '了解Sugar的在线使用和互动学习内容',
    'LBL_FORUMS' => '评论',
    'LBL_DETAILS_FORUMS' => '与专家社区用户或开发人员讨论Sugar',
    'LBL_WIKI' => 'Wiki',
    'LBL_DETAILS_WIKI' => '搜索知识库中的用户和开发者话题',
    'LBL_DEVSITE' => '开发者论坛',
    'LBL_DETAILS_DEVSITE' => '发现资源，教程和帮助的链接可让您放心使用，以加速对Sugar的开发',
    'LBL_GET_SUGARCRM_RSS' => '得到SugarCRM的RSS',
    'LBL_SUGARCRM_NEWS' => 'SugarCRM新闻',
    'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM培训新闻',
    'LBL_SUGARCRM_FORUMS' => 'SugarCRM评论',
    'LBL_SUGARFORGE_NEWS' => 'SugarForge新闻',
    'LBL_ALL_NEWS' => '所有新闻',
    'LBL_LINK_CURRENT_CONTRIBUTORS' => '当前Sugar代码贡献者列表!',
    'LBL_SOURCE_CODE' => '源代码',
    'LBL_SOURCE_SUGAR' => 'Sugar - SugarCRM公司开发的世界上最受欢迎的销售自动化应用软件.',
    'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Barnabás Debreceni开发的PHP的模板引擎',
    'LBL_SOURCE_LOG4PHP' => 'Log4php - 一个PHP的Log4j端口, 最流行的Java logging框架, 被Ceki Gülcü创建出来',
    'LBL_SOURCE_NUSOAP' => 'NuSOAP - NuSphere公司和Dietrich Ayala开发的一组PHP类，它允许开发者创建和使用web服务',
    'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Mihai Bazon开发的用于输入日期的日历',
    'LBL_SOURCE_PHPPDF' => 'PHP PDF - Wayne Munro开发的用于创建PDF文档的库',
    'LBL_SOURCE_DOMIT' => 'DOMIT! - 一个PHP语言的基于文档对象模型(DOM)级别2样式规范解析器.',
    'LBL_SOURCE_DOMITRSS' => 'DOMIT RSS - 基于domit纯PHP XML解析器的RSS feed解析器.',
    'LBL_SOURCE_PNGBEHAVIOR' => 'PNG Behavior - 使IE支持PNG图形格式.',
    'LBL_SOURCE_JSONPHP' => 'JSON.php - Michal Migurski来开发的一个用于JSON数据转换的PHP脚本.',
    'LBL_SOURCE_JSON' => 'JSON.js - JavaScript中，一个JSON的正向与反向解析器.',
    'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - PHP实现的WebDAV服务器.',
    'LBL_SOURCE_JS_O_LAIT' => 'JavaScript O Lait - Jan-Klaas Kollho开发的一个包含可重用模块和组件的JavaScript增强库.',
    'LBL_SOURCE_PCLZIP' => 'PclZip - Vincent Blavet开发的为Zip格式的文章提供压缩和抽取功能的库',
    'LBL_SOURCE_SMARTY' => 'Smarty - 一个PHP的模板引擎.',
    'LBL_SOURCE_OVERLIBMWS' => 'Overlibmws - 客户端窗口的JavaScript库.',
    'LBL_SOURCE_WICK' => 'WICK: Web Input Completion Kit - JavaScript 类型工具',
    'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - 用于实施丰富的客户端功能的用户界面库.',
    'LBL_SOURCE_PHPMAILER' => 'PHPMailer - 一个对PHP的全面功能邮件转换类',
    'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - 允许快速的双工 blowfish 加密，无需mcrypt PHP扩展.',
    'LBL_SOURCE_PHP_COMPAT' => 'PHP_Compat - 提供失踪功能较旧版本的PHP.',
    'LBL_SOURCE_HTML_SAFE' => 'HTML_Safe - 一个解析器它的脚本带了所有潜在危险的内容在HTML中',
    'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - 一个SAX 解析器为HTML 和其它非法形成的XML文档',
    'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library -  Yahoo的扩展功能! 用户界面库是 Jack Slocum创建',
    'LBL_SOURCE_JSMIN' => 'JSMin - 过滤器，消除了注释和不必要的空格，从JavaScript文件.',
    'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash 播放器检测和嵌入脚本.',
    'LBL_SOURCE_TINYMCE' => 'TinyMCE - 所见即所得编辑器控制的网页浏览器，使用户可以编辑HTML内容',
    'LBL_SOURCE_EXT' => 'Ext - 一个客户端JavaScript框架用于搭建web应用.',
    'LBL_HOME_PAGE_4_NAME' => '追踪',
    'LBL_HOME_PAGE_5_NAME' => 'DCE',
    'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA帮助您阻止自动滥用您的站点(例如：垃圾评论或虚假注册)通过使用CAPTCHA确保只有真实用户执行了操作.',
      'LBL_SOURCE_TCPDF' => 'TCPDF - 一个生成PDF文档的PHP类 .',
    'LNK_NEW_DCEINSTANCE' => '创建实例',
    'LNK_NEW_DCECLUSTER' => '创建集群.',
    'LNK_NEW_DCETEMPLATE' => '创建模板',

    'LBL_NO_ACCESS' => '你没有权限访问这个模块，请联系管理员解决。',
    'LBL_DEL_PAGE' => '删除页面',
    'LBL_WEBSITE_TITLE' => '网站',
    'LBL_RSS_TITLE' => '新闻Feed',
    'LBL_WEB' => 'Web',
    'LBL_DASHLET_TITLE' => '我的网站',
    'LBL_DASHLET_OPT_TITLE' => '标题',
    'LBL_DASHLET_OPT_URL' => '网站地址',
    'LBL_DASHLET_OPT_HEIGHT' => '小工具高度(像素)',
    'LBL_DASHLET_SUGAR_NEWS' => 'Sugar新闻',
    'LBL_DASHLET_DISCOVER_SUGAR_PRO' => '升级Sugar',
    'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
    'LBL_SOURCE_PHPSAML' => 'PHP-SAML - A simple SAML toolkit for PHP.',

    'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
    'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
    'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',

    'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
    'LBL_SOURCE_ZEND' => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
    'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV data parser for PHP',
    'LBL_SOURCE_PHPJS' => 'php.js - Use PHP functions in JavaScript',
    'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
    'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM',
    'LBL_MORE_DETAIL' => '详细信息',
    'LBL_BASIC_SEARCH' => '搜索',
    'LBL_ADVANCED_SEARCH' => '高级搜索',

);

?>
