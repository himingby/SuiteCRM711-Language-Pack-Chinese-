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

$defaultText = 
<<<EOQ
欢迎来到 Sugar 5.5<br>

<br>
新增加的功能包括：<br>
<br>
* 使用客户话订制新增加栏定义多个主页.<br>
* 改进的统计图和图表.<br>
* 新邮件客户可以顺畅沟通<br>
* 模块生成器可以扩展Sugar的部署<br>
* 改善Sugar工作室和访问控制功能<br>
<br>
更多详细信息，请访问Sugar大学.<br>
<br>
EOQ
;

$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => '记事本',
                                         'LBL_DESCRIPTION'      => '保留记录的新增栏',
                                         'LBL_SAVING'           => '保存记事本中...',
                                         'LBL_SAVED'            => '已保存',
                                         'LBL_CONFIGURE_TITLE'  => '标题',
                                         'LBL_CONFIGURE_HEIGHT' => '高度（1 - 300）',
                                         'LBL_DBLCLICK_HELP'    => '双击下面区域进入编辑',
                                         'LBL_DEFAULT_TEXT'     => $defaultText,


);
?> 
