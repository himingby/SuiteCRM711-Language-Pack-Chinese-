<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
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
$mod_strings = array(
	'help'=>array(
		'popupListViewEditor' =>
	          array (
	            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.',
	            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
	            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
	            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.',
	            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
	            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.',
	          ),
		'package'=>array(
				'create'=>'为文件包提供一个<b>名称</b> .  您所输入的名称必须是纯字母数字并且不包含空格. (例如: HR_Management)<br/><br/> 您可以为文件包提供 <b>作者</b> 和 <b>描述</b> 信息. <br/><br/>点击 <b>保存</b> 来创建文件包.',
				'modify'=>'您可以修改文件包的 <b>姓名</b>, <b>作者</b> 和 <b>描述</b> , 也可以预览和客户化包含在文件包中所有的模块.<br><br您也可以 <b>发布</b> 和 <b>扩展</b> 文件包, 还可以 <b>导出</b> 客户化订制的文件包.',
				'name'=>'这是当前文件包的 <b>名称</b> . <br/><br/>您所输入的名称必须是纯字母数字并且不包含空格. (例如: HR_Management)',
				'author'=>'这是在安装过程中显示的 <b>作者</b> 作为名称实体来创建文件包. 作者即可以是个个体也可以是个公司.',
				'description'=>'这是在安装过程中显示的对文件包的<b>描述</b> 信息.',
				'publishbtn'=>'点击 <b>发布</b> 来保存所有输入的数据和创建文件包的安装版本的 .zip文件.<br><br>使用 <b>模块载入 </b> 来上传 .zip 文件并且安装文件包.',
				'deploybtn'=>'点击 <b>扩展</b> 来保存所有输入的数据和安装文件包, 包括所有的模块在当前实例中.',
				'duplicatebtn'=>'点击 <b>复制</b> 来保存文件包的内容到一个新文件包中,并且显示新文件包. <br/><br/>对于新文件包, 将自动生成一个新名称，此名称与上次生成的文件包相同并带有一个数字值. 您可以重命名一个新文件包:输入一个新 <b>名称</b> 点击 <b>保存</b>按钮.',
				'exportbtn'=>'点击 <b>导出</b> 来创建 .zip 文件包含在客户化订制的文件包中.<br><br> 生成的文件包包含客户化订制的代码, 并且这不是安装版本的文件包.<br><br>使用<b>模块加载</b> 来导入 .zip 文件并且使一个新文件包客户化订制有效.',
				'deletebtn'=>'点击 <b>删除</b> 来删除此文件包和与此文件包相关的所有文件.',
				'savebtn'=>'点击 <b>保存</b> 来保存所有与此文件包相关的输入数据.',
				'existing_module'=>'点击 <b>模块名称</b> 来编辑字段属性等, 关系和显示风格等在模块中的相关属性.',
				'new_module'=>'点击 <b>新建模块</b> 来为此文件包创建新模块.',
				'key'=>'这 5个字母, 字母数字 <b>关键值</b> 将会用于所有指南中的前缀, 在当前文件包中所有模块的类名称和数据库表.<br><br>关键值用于实现使表名称独一无二.',
				'readme'=>'你可以添加 <b>自述</b> 文本在本文件包中.<br><br>自述文件将在安装过程中有效.',
		),
		'main'=>array(


		),
		'module'=>array(

			'create'=>'为模块提供一个 <b>名称</b>. 你所提供的 <b>标签</b> 将会显示在导航窗口中. <br/><br/>为模块选择导航条显示,选中<b>导航 栏</b> 复选框.<br/><br/>选择<b>团队安全</b> 复选框使得团队选择字段在模块记录中. <br/><br/>之后选择您想创建的模块类型. <br/><br/>选择一个模扳类型.每个摸班包含一组特定的字段,也有预定义版面布局, 这些都是您模块中的基本使用组件. <br/><br/>点击 <b>保存</b> 创建模块.',




			'modify'=>'您可以改变模块属性或客户化 <b>字段</b>, <b>关联关系</b> 和 模块相关的<b>布局</b> .',
			'team_security'=>'点击 <b>团队安全</b> 复选框,将使团队安全在本模块有效.  <br/><br/>如果团队安全是有效的, 团队选择字段将出现在模块的记录中 ',
			'reportable'=>'选中这个框将允许这个模块有报表运行.',
			'assignable'=>'选中这个框将允许这个模块的记录分配给选择它的用户.',
			'has_tab'=>'选择 <b>导航标签</b>打勾将为模块提供导航标签.',
			'acl'=>'选择这个框将使访问控制有效,包括字段水平的安全.',
			'studio'=>'选择这个框将允许管理员在工作室中客户化本模块.',
			'audit'=>'选择这个框将使审核在此模块有效. 改变一定字段将被记录以便管理员可以重新查看所做修改的历史记录.',
			'viewfieldsbtn'=>'点击 <b>查看字段</b> 来查看字段和模块的联合并创建和编辑客户化字段.',
			'viewrelsbtn'=>'点击  <b>查看关联关系</b> 来显示与此模块的关联关系并创建新的关联关系.',
			'viewlayoutsbtn'=>'点击 <b>查看版面布局</b> 来查看模块版面布局和客户化字段范围在本版面布局中.',
			'duplicatebtn'=>'点击 <b>复制</b> 来拷贝模块属性到一个新模块中并显示新模块. <br/><br/>对于新模块, 新名称将被自动生成依据过去最新创建模块名称并追加一个数字在名称尾部.<br><br>您可以重明明新模块输入一个新 <b>名称</b> 然后点击 <b>保存</b>.',
			'deletebtn'=>'点击 <b>删除</b> 来删除本模块.',
			'name'=>'这是当前模块的 <b>名称</b> . <br/><br/>您输入的名称一定要是字母数字并且以字母开头并且不包含空格. (例如: HR_Management)',
			'label'=>'这是将出现在导航标签中的 <b>标签</b> 在本模块中. ',
			'savebtn'=>'点击 <b>保存</b> 来保存所有输入的与本模块相关的数据.',
			'type_basic'=>' <b>基本</b> 模板类型提供基本字段,如名称,分配人，团队,创建日期,和描述字段.',
			'type_company'=>' <b>公司</b> 模板类型提供了特定组织字段,如公司名称,产业和用户地址.<br/><br/>使用这个模板来创建模块非常类似于标准帐户模块.',
			'type_issue'=>' <b>Issue</b> 模板类型提供客户反馈信息- 和特定故障字段,如数量,状态,优先级和描述信息.<br/><br/>使用这个摸班创建模块非常类似于标准客户反馈信息和鼓掌触发器模块.',
			'type_person'=>' <b>人员</b> 模板类型提供特定个体字段,如敬称,标题,名称,地址和电话号码 .<br/><br/>使用这个模板来创建模块非常类似与标准合同和潜在客户模块.',

		),
		'dropdowns'=>array(
			'default' => '应用中所有下拉框都列示在这里.<br><br>  对现存的下拉框做一些改变, 点击下拉框的名字. <br><br>在右手面板的<b>下拉框编辑器</b> 窗体中加入您的修改, 并点击 <b>保存</b>. 做一些必要的修改, 之后点击 <b>保存</b>.<br><br>创建一个新的下拉框, 点击 <b>添加 下拉框</b>. 输入 下拉框的属性在 <b>下拉框编辑器</b>窗体中, 并点击<b>保存</b>.'
		),
		'subPanelEditor'=>array(
	        'modify'    => '所有可显示在<b>子版面</b>字段如下.<br><br><b>默认</b>列包含子版面显示的字段。<br/><br/>The <b>隐藏</b>包含可加入默认列的字段。',
	        'savebtn'   => '单击 <b>保存&部署</b> 可以保存所做更改并在模块中激活相关设置。',
	        'historyBtn'=> '单击 <b>查看历史</b> 可以查看并从历史中恢复先前保存的布局。',
	        'Hidden'    => '<b>隐藏</b> 字段在子版面中不会出现。',
	        'Default'   => '<b>默认</b> 字段将在子版面中出现。',

	    ),
		'listViewEditor'=>array(
			'modify'	=> ' <b>默认</b> 列包含的字段是以默认列表的形式显示的.<br/><br/> <b>有效</b> 列包含的字段是用户能够选择创建一个客户化列表显示. <br/><br/> <b>隐藏</b>列包含的字段是您作为管理员可以填加到默认或有效列,这些列可以被用户可以看到.',
			'savebtn'	=> '点击 <b>保存 & 扩展</b> 来保存您的改变并激发他们可用在本模块中.',
			'Hidden' 	=> '隐藏字段对用户在列表显示中看到的当前无效.',
			'Available' => '有效字段不是缺省显示的,但可被拥护添加到列表显示中.',
			'Default'	=> '缺省字段被未创建客户化列表显示的用户可视.'
		),
		'searchViewEditor'=>array(
			'modify'	=> ' <b>默认</b> 列包含将被显示在查找显示的字段.<br/><br/> <b>隐藏</b> 列包含的字段为您作为管理员添加为显示的字段.',
			'savebtn'	=> '点击 <b>保存 & 展开</b> 将保存所有改变并使之激活有效',
			'Hidden' 	=> '隐藏字段是将被不显示在查找显示中的字段.',
			'Default'	=> '默认字段将显示在查找显示中.'
		),
		'layoutEditor'=>array(
			'default'	=> '做一些对显示版面布局的改变,拖拽一些元素和字段在这一页的两个不同区域.<br/><br/>左手列, 名称为 <b>工具箱</b>, 包含有用的工具,元素和字段,应用它们改变版面布局.<br/><br/>右手区域, 名称为 <b>当前布局</b> 或 <b>布局预览</b>, 包含模块布局.<br/><br/>如果布局区域的名称为 <b>当前布局</b> 那么您正在拷贝一个当前显示的模块布局.<br/><br/>如果布局区域的名称为 <b>布局预览</b> 那么您正在拷贝创建前一个,点击 <b>保存</b>.  注意: 如果另外一个用户展开一个不同版面的拷贝, 您在这个区域所看到的可能会不布匹当前版本.',
			'saveBtn'	=> '点击 <b>保存</b> 保留您所做的布局改变. 如果您在离开工作室前不扩展变化, 改变将不显示在模块中.当您返回工作室去编辑布局, 您将看到保存的布局. 布局将不显示在模块中直到您点击 <b>保存 & 扩展</b>.',
			'publishBtn'=> '点击 <b>保存 & 扩展</b> 来扩展布局.<br><br>扩展之后, 新布局将立即显示在模块中.',
			'toolbox'	=> ' <b>工具箱</b> 包含各种编辑版面布局有用的工具, 包括删除, 添加布局元素和一组有效的字段.<br/><br/>任何的元素和字段能够拖拽到版面布局中,并且任何布局元素和字段也可以拖拽进粉碎机.<br/><br/>拖一个新行或新面板元素到布局将添加它到拖到的区域.<br/><br/>填充字段创建空白空间在版面布局中.<br/><br/>拖拽任何有效字段到面板的一个字段来交换这两个字段.',
			'panels'	=> '此区域显示当展开时您在模块中的的版面布局.<br/><br/>您可以重新定义字段位置, 行面板.拖拽他们到您所希望的位置.<br/><br/>拖拽这些元素移除它们在工具箱中, 或添加新元素和字段从工具箱中拖拽到您希望的版面位置.',
			'delete'	=> '在这里拖拽任何元素来冲版面布局中删除它',
		),
		'fieldsEditor'=>array(
			'default'	=> '这里对于当前模块做列出的所有字段都是有效的.<br><br> 标准字段默认包含在模块中显示在 <b>缺省</b> 位置.<br><br>在模块中创建的客户化字段显示在 <b>客户化</b> 位置.<br><br>编辑字段, 点击 <b>字段名称</b>.  做一些修改在右手面板列的 <b>属性</b> 中, 并且点击 <b>保存</b>.  <br/><br/>当查看字段属性, 您可以快速创建一个有着相同属性的新字段 ,点击 <b>复制</b>.  做一些必要的修改, 之后点击 <b>保存</b>.<br><br>创建一个新字段, 点击 <b>添加字段</b>. 为字段输入属性在 <b>属性</b> 窗口中, 并点击 <b>保存</b>. 新字段将会显示在 <b>客户化</b> 位置.<br><br>为任何字段改变标签, 点击 <b>编辑标签</b>.',
		),
		'exportcustom'=>array(
		    'exportHelp'=>'在工作室中导出客户化订制.需要创建文件包,此文件包可以上传到另外一个SUGAR实例通过 <b>模块加载</b>.<br><br>  首先, 提供一个 <b>文件包名称</b>.  您可以提供<b>作者</b> 和 <b>描述</b> 信息为文件包.<br><br>选择模块,此模块包含您想要导出的客户化. 仅仅模块所包含的客户化订制出现在您的选择中.<br><br>之后点击 <b>导出</b> 来创建一个 .zip文件为包含客户化的文件包.',
		    'exportCustomBtn'=>'点击 <b>导出</b> 来创建一个.zip 文件为包含客户化订制您所希望导出的文件包.',
		    'name'=>'这是文件包的<b>名称</b> . 这个名称将显示在安装过程中.',
		    'author'=>'这是 <b>作者</b> 将被作为创建文件包的实体名称显示在安装过程中. 作者即可以是一个个体也可以是一个公司.',
		    'description'=>'这是文件包的 <b>描述</b> ,会在安装过程中显示.',
		),
		'studioWizard'=>array(
			'mainHelp' 	=> '欢迎来到 <b>开发工具</b> 界面. <br/><br/>使用本区域的工具创建和管理标准和客户化订制模块和字段.',
			'studioBtn'	=> '使用 <b>工作室</b> 客户化安装模块.',
			'mbBtn'		=> '使用 <b>模块生成器</b> 创建新模块.',
			'sugarPortalBtn' => '使用 <b>Sugar 门户编辑器</b> 管理和客户化 Sugar门户.',
			'dropDownEditorBtn' => '使用 <b>下拉框编辑器</b> 添加和编辑用于应用的全局下拉框.',
			'appBtn' 	=> '应用制造是您可以客户化程序的各种属性的位置, 如多少TPS报表可以显示在主页',
			'backBtn'	=> '返回上一步.',
			'studioHelp'=> '在 <b>工作室</b>中, 您能改变显示的何种信息, 决定于何种数据是有效的并且为<i>安装</i>模块创建客户数据.',
			'moduleBtn'	=> '点击编辑本模块.',
			'moduleHelp'=> '选择您愿意编辑的一种模块组件.',
			'fieldsBtn'	=> '决定何种信息应该被存储在模块中依靠控制 <b>字段</b> 在模块中. <br/><br/>您能编辑和创建新字段来存贮信息.',
			'labelsBtn' => '编辑 <b>标签</b> 为在模块中显示字段.'	,
			'layoutsBtn'=> '编辑以下模块 <b>版面</b>: 编辑显示, 细节显示, 列表显示和搜索显示.',
			'subpanelBtn'=> '决定本模块中何种信息显示在 <b>子面板中</b> .',
			'layoutsHelp'=> '选择一种 <b>版面</b> 来编辑.',
			'subpanelHelp'=> '选择一个 <b>子面板</b> 来编辑.',
			'labelsHelp'=> '所有字段的<b>标签</b>的显示名称在当前模块是有效的并且显示于右手列.<br><br>点击字段内部编辑名称, 输入一个新名称并且点击 <b>保存</b>.',
	        'newPackage'=>'点击 <b>新建文件包</b> 创建一个新的文件包.',
	        'exportBtn' => '点击 <b>导出客户化订制</b> 创建一个文件包包含特定模块的客户化订制在本工作室中.',
	        'mbHelp'    => '<b>欢迎来到模块生成器.</b><br/><br/>使用<b>模块生成器</b> 创建文件包,此文件包包含基于标准或是客户化对象的客户化订制模块. <br/><br/>从开始, 点击 <b>新建文件包</b> 创建新文件包, 或选择一个文件包来编辑.',
		    'viewBtnEditView' => '编辑模块的 <b>编辑显示</b> 版面布局.',
		    'viewBtnDetailView' => '编辑模块的 <b>细节显示</b> 版面布局.',
		    'viewBtnListView' => '编辑模块的 <b>列表显示</b> 版面布局.',
		    'searchBtn' => '编辑模块的 <b>搜索</b> 版面布局.',
			'viewBtnQuickCreate' =>  '编辑模块的 <b>快速创建</b> 版面布局.',
		    'searchHelp'=> '选择一个<b>搜索布局</b> 来编辑.',
		    'BasicSearchBtn' => '编辑 <b>基本搜索</b> 在模块搜索区域的基本搜索标签中.',
		    'AdvancedSearchBtn' => '编辑 <b>高级搜索</b> 在模块搜索区域的基本搜索标签中.',
		    'portalHelp' => '管理和客户化 <b>Sugar 门户</b>.',
		    'SPUploadCSS' => '上传一个 <b>风格表单</b> 为 Sugar门户.',
		    'SPSync' => '<b>同步</b> 客户化订制为Sugar 门户实例.',
		    'Layouts' => '编辑Sugar 门户模块的<b>版面布局</b> .',
		    'portalLayoutHelp' => '显示在此区域的Sugar门户中的模块.<br><br>选择一个模块来编辑 <b>版面布局</b>.',
			'relationshipsHelp' => '您能关联本模块到相同文件包中其他模块或者是已经安装在应用中的模块.<br/><br/>创建一个新的关联关系, 点击 <b>添加关联</b>. 关联关系属性显示在右手面板列中. 使用 <b>关联到</b> 下拉框列表,选择要关联到当前模块的模块的列表.<br><br>提供一个 <b>标签</b> 这个标签将作为标题显示相关模块的子面板中.<br><br>在模块记录间的关联将通过子面板被管理,此子面板细节显示在模块中.<br><br>作为相关模块的子面板, 您可以为之选择不同的子面板布局显示, 这取决于关联中哪一个模块被选择了.<br/><br/> 点击 <b>保存</b> 创建关联关系. 点击 <b>删除</b> 删除选择了的关联关系.<br/><br/>编辑存在的关联, 点击<b>关联名称</b>, 并且编辑属性在右手面板列中.',
			'editDropDownBtn' => '编辑一个全局下拉框',
			'addDropDownBtn' => '添加一个新的全局下拉框',
		),
		'fieldsHelp'=>array(
	        'default'=>'这里，模块中<b>字段</b>按字段名排序。<br><br>模块模板中包括了一系列已定义的的字段。<br><br>新建一个字段，单击 <b>添加字段</b>。<br><br>编辑字段，单击 <b>字段名</b>。<br/><br/>模块部署后，模块生成器创建的字段、以及模板中的字段，在工作室中统一看作标准字段。',
	    ),
	    'relationshipsHelp'=>array(
	        'default'=>'模块间已创建的 <b>关联</b> 在这里显示。<br><br>关联 <b>名称</b>由系统生成。<br><br><b>主模块</b> 为拥有该关联的模块。 在数据库中，关联属性存储在主模块的表中。<br><br><b>类型</b>为主模块与<b>关联模块</b>之间的关联类型 。<br><br>C单击列名按该类排序<br><br>C单击关联列表中的某行可查看或编辑该关联的属性。<br><br>单击 <b>添加关联</b> 创建新的关联。',
	        'addrelbtn'=>'添加关联帮助..',
	        'addRelationship'=>'可以创建模块与自定义模块或已部署模块间的<b>关联</b>。<br><br> 在模块的纪录中，关联由子面板与关联子字段体现。<br><br>为模块可选择以下几种关联 <b>类型</b> :<br><br> <b>一对一</b> - 两个模块都会包含关联字段。<br><br> <b>一对多</b> - 主模块将包含子面板，关联模块将包含关联字段。<br><br> <b>多对多</b> - 两个模块均显示子面板。<br><br> 选择 <b>关联模块</b>。 <br><br>如果关联涉及子面板，选择相应模块的子面版外观。<br><br> 单击 <b>保存</b> 新建关联。',
	    ),
	    'labelsHelp'=>array(
	        'default'=> '可以更改模块字段 <b>标签</b> 和其他标题。<br><br>点击字段编辑标签，输入新的标签并单击 <b>保存</b>。<br><br>如果已经安装其他语言包，你可以选择 <b>语言</b> 已使用这些标签。',
	        'saveBtn'=>'单击 <b>保存</b> 保存所有变更。',
	        'publishBtn'=>'单击 <b>保存 & 部署</b> 保存所有变更并应用。',
	    ),
		'portalSync'=>array(
		    'default' => '输入 <b>Sugar 门户站点的 URL</b> 作为实例来更新, 并且点击 <b>进入</b>.<br><br>输入一个有效的Suger用户名和密码, 之后点击 <b>开始同步</b>.<br><br>客户化订制 Sugar 门户 <b>版面</b>, 随着 <b>风格表单</b> 的上传, 将会改变特定的门户实例.',
		),
		'portalStyle'=>array(
		    'default' => '从这里您可以客户化订制Sugar门户站点的外观显示.',
		),
	), //end of help

	'assistantHelp'=>array(
		'package'=>array(
				//custom begin
				'nopackages'=>'开始一个工程, 请点击 <b>新建文件包</b> 来创建新文件包来收藏您的客户模块. <br/><br/>每一个文件包可以包含一个或多个模块.<br/><br/>例如, 您可能想要创建一个包含客户模块的文件包此模块与标准帐户模块相关. 或者, 您想要创建一个包含几个新模块的文件包,这几个模块可以协同工作在一个工程中并且彼此相关对于其他模块已经在应用中.',
				'somepackages'=>'一个 <b>文件包</b> 扮演了一个客户模块的容器角色, 客户模块,容器都是工程的一部分. 文件包可以包含一个或多个客户 <b>模块</b> ,客户模块可以与应用中其模块设定关联.<br/><br/>在为你的工程创建一个文件包后,您可以为文件包立刻创建模块, 或者你能接下来返回到模块生成器来完成工程.<br><br>当工程完成, 你可以 <b>展开</b> 文件包来安装客户化模块在本应用中.',
				'afterSave'=>'您的新建文件包应当包含至少一个模块. 您能创建一个或多个客户化模块在此文件包中.<br/><br/>点击 <b>新建模块</b> 为此文件包创建一个客户化模块.<br/><br/> 在创建了至少一个模块后, 您能发布或展开文件包来使之在您或者是用户的实例中有效.<br/><br/> 在您的Sugar实例中第一步展开文件包, 点击 <b>扩展</b>.<br><br>点击 <b>发布</b> 来以 .zip的文件格式保存文件包. 在 .zip 文件保存到您的系统之后, 使用 <b>模块加载</b> 来上传并安装文件包在您的Sugar实例中.  <br/><br/>您可以解压缩文件给其他用户上载并安装在他们自己的Sugar实例中.',
				'create'=>'A <b>文件包</b> 为客户化模块扮演了容器的角色. 模块,文件包都是工程的组成部分. 文件包可以包含一个或多个客户化 <b>模块</b> 这些客户化模块可以彼此关联并且可以与应用中其他模块相关联.<br/><br/>在为您的工程创建文件包后, 您可以立刻为文件包创建模块, 或者你可以接下来返回模块生成器来完成工程.',
				),
		'main'=>array(
			'welcome'=>'使用 <b>开发工具</b> 来创建,管理标准,客户化模块和字段. <br/><br/>在应用中管理模块, 点击 <b>工作室</b>. <br/><br/>创建客户化模块, 点击 <b>模块生成器</b>.',
			'studioWelcome'=>'所有当前安装的模块, 包括标准和载入模块对象,都在工作室中被订制.'
		),
		'module'=>array(
			'somemodules'=>"因为当前文件包包含了至少一个模块, 您可以在文件包中 <b>展开</b>您的Sugar 实例,或者 <b>发布</b> 被安装在当前Sugar实例又或在其他使用 <b>模块载入</b>实例中的文件包.<br/><br/>在您的Sugar实例中直接安装文件包, 请点击 <b>扩展</b>.<br><br>来为文件包创建一个 .zip 文件,此文件包可以加载并且安装在当前Sugar实例和其他使用 <b>模块载入</b>的实例中, 点击 <b>发布</b>.<br/><br/> 您可以为此文件包创建模块在此阶段, 并且发布或者展开当您准备这样做时. <br/><br/>在发布或展开文件包后, 您能够做修改对于文件包属性和进一步客户化模块. 之后重新发布或重新展开文件包应用变化." ,
			'editView'=> '这里您可以编辑存在的字段. 您能移除任何存在的字段或者在左面板中添加有效字段.',
			'create'=>'当选择一种您想要创建的模块<b>Type</b> 的类型时, 时刻牢记想要放入您的模块中的字段类型. <br/><br/>每一个模块的模板包含与标题描述的模块类型有关的一组字段.<br/><br/><b>基础</b> - 提供在标准模块中的基本字段, 如名称，分配人，团队，创建时间，描述字段.<br/><br/> <b>公司</b> - 提供组织详情字段, 如公司名称，产业，和地址详情. 使用这个摸班来创建模块非常类似于标准‘帐户’模块.<br/><br/> <b>人员</b> - 提供个人详细信情字段, 如敬称，标题，名称，地址和电话号码. 使用这个模板来创建模块非常类似于标准‘联系人’和‘潜在客户’模块.<br/><br/><b>发行</b> - 提供客户反馈信息和错误详情字段, 如编号，状态，优先级和描述.  使用这个模板来创建模块非常类似与标准的Cases 和‘错误触发’模块.<br/><br/>注释: 在您创建模块之后，您可以使用模板提供的功能编辑字段的标签, 也可以创建客户化字段加入到模块版面中.',
			'afterSave'=>'客户化您的模块来适合您的需要，可以编辑创建字段, 与其他模块建立关联并且在版面中排布字段的显示位置.<br/><br/>在模块中查看模板字段和管理客户化订制字段, 点击 <b>查看字段</b>.<br/><br/>在模块与其他模块间创建和管理关联, 是否模块已经在应用中或者其他客户化模块在同一个文件包中, 点击 <b>查看关联</b>.<br/><br/>编辑模块的版面, 点击 <b>查看版面</b>. 您可以改变查看细节, 编辑模块的查看和列表查看版面就象模块已经为本工作室的应用中.<br/><br/> 创建一个与当前模块相同属性的模块, 点击 <b>复制</b>.  您可以进一步订制模块.',
			'viewfields'=>'模块中的字段可以应您的需求自由订制.<br/><br/>您可以删除标准字段, 但是您需要在版面页的特定版面移除他们. <br/><br/>您可以编辑标准字段的标签. 标准字段其他的属性不可以被编辑. 尽管如此, 您可以点击字段名称快速创建拥有相似属性的新字段，点击 <b>克隆</b> 在 <b>属性</b> 表格中.  输入任何新属性, 之后点击 <b>保存</b>.<br/><br/>如果你正客户化一个新模块, 一点模块已经安装, 不是所有的字段属性都可以被编辑的.  当您在客户化模块发布和安装文件包之前为标准字段和客户化字段设置所有的属性.',
			'viewrelationships'=>'在文件包中您可以在当前模块和其他模块创建多对多的关联, 或者是在当前模块和已经安装到应用中的模块间.<br><br> 创建一对多和一对一的关联, 为模块创建 <b>相关</b> 和 <b>Flex Relate</b> 字段.',
			'viewlayouts'=>'您可以通过<b>编辑显示</b>控制字段对于计算数据的有效性 .  您也可以通过 <b>细节显示</b>控制数据的显示.  显示可以不匹配. <br/><br/>当在子面板中点击<b>创建</b>，快速创建窗体将显示. 默认的,  <b>快速创建</b> 窗口版面与默认的<b>编辑显示</b> 版面相同. 您可以客户化快速创建窗体以便它能包含与编辑显示版面少数不同的字段. <br><br>您可以使用<b>角色管理</b>版面客户化订制模块安全性.<br><br>',
			'existingModule' =>'在创建和客户化本模块之后, 您能创建附加模块或者返回到文件包去 <b>发布</b> 或者 <b>扩展</b> 文件包.<br><br>创建附加模块，点击 <b>复制</b> 创建与当前模块相同属性的模块, 或导航返回到文件包, 并点击 <b>新建模块</b>.<br><br> 如果您准备 <b>发布</b> 或者 <b>展开</b> 包含本模块的文件包, 导航返回文件包执行此功能. 您能发布和展开的文件包至少要包含一个模块.',
			'labels'=> '标准字段的标签和客户化字段标签可以被修改.  改变字段标签将不作用于存储在此字段中的数据.',
		),
		'listViewEditor'=>array(
			'modify'	=> '有三列显示在左边.  "缺省" 列包含的字段将在列表中默认显示, “有效”列包含一些用户可以选择作为客户化列表显示的字段,  "隐藏" 列包含一些有效字段，这些字段既是你作为管理员默认添加也是用户可以使用的字段，但是当前不可用.',
			'savebtn'	=> '点击 <b>保存</b> 将保存所有的改动并使它们有效',
			'Hidden' 	=> '隐藏字段是对于在列表显示中当前用户使用无效的字段.',
			'Available' => '有效字段是非缺省显示的字段，但可以被用户激活的字段.',
			'Default'	=> '缺省字段显示于不创建客户化列表显示设置的用户.'
		),
		'searchViewEditor'=>array(
			'modify'	=> '左边显示两列. "缺省"列包含将在搜索显示中显示的字段,  "隐藏"列包含对于管理员添加显示有效的字段.',
			'savebtn'	=> '点击 <b>保存 & 扩展</b> 将保存所有的变化并使其有效',
			'Hidden' 	=> '隐藏字段是将不被显示在搜索显示中的字段.',
			'Default'	=> '缺省字段将显示在搜索显示中.',
			'multiselect_field_warning'=>'<br>请注意如果您在此模块有任何多选字段, 添加他们为查找版块的缺省布局可能引起性能问题.<br>'
		),
		'layoutEditor'=>array(
			'default'	=> '左边显示两列. 右手列, 标签当前版面或先前版面是您改变模块的版面. 左手列, 叫做工具箱, 包含当用户编辑版面时可使用的有用元素和工具 . <br/><br/>如果布局的空间起名为当前布局那么你正工作在复制当前版面布局用于模块的显示.<br/><br/>如果它命名为前一个布局那么你工作在创建一个先前的点击保存按钮, 那这个模块可能已经从用户看到的版本发生了变化.',
			'saveBtn'	=> '点击此按钮保存版面，以便您可以保存您的改动. 当您返回本模块您将从以变化的版面开始. 您的版面将不会被用户看到知道您点击保存和发布按钮.',
			'publishBtn'=> '点击此按钮来展开布局. 这意味着本此布局将立即被本模块的用户看到.',
			'toolbox'	=> '工具箱包含各种各样编辑版面的有用功能, 包括删除的部分, 一组额外的元素和一组有效的字段. 任何这些都可以被拖拽到界面上.',
			'panels'	=> '这些地方显示了当展开时您的布局将被本模块的用户看到.<br/><br/>您可以象保存字段一样保存元素, 拖拽它们到行和面板上; 在工具箱中拖摘他们到垃圾箱便可删除元素, 或者从工具箱拖拽新元素添加到版面希望的位置上.'
		),
		'dropdownEditor'=>array(
			'default'	=> '左边显示两列. 右手边列, 列出当前版面或前一版面, 是改变模块版面的地方. 左手列, 定名为工具箱,包含编辑版面时使用的有用的元素和工具. <br/><br/>如果布局位置被命名为当前布局那么您正在拷贝一个当前模块使用的版面布局.<br/><br/>如果被命名为前一布局那么您正拷贝创建前一个布局当您点基保存按钮时, 用户所看到的这个模块的版本可能已经发生了变化
	.',
			'dropdownaddbtn'=> '点击此按钮为下拉列表添加新条目 .',
		),
		'exportcustom'=>array(
		    'exportHelp'=>'导出工作室中客户化的文件包,此文件包可以上传到另外一个Sugar实例通过 <b>模块上载器</b>.<br><br>  首先, 提供一个 <b>文件包名称</b>.  您可以提供 <b>作者</b> 和 <b>描述</b> 信息为每一个文件包.<br><br>选择包含您希望导出的客户化模块. 对于您的选择仅仅模块包含的客户化将被显示.<br><br>然后点击 <b>导出</b> 为文件夹创建一个包含客户化的 .zip 文件.',
		    'exportCustomBtn'=>'点击 <b>导出</b> 创建一个 .zip 文件，用于您想要导出的客户化文件包.
	',
		    'name'=>'文件包的 <b>名称</b> . 这个名称将在安装过程中显示.',
		    'author'=>'<b>作者</b> 显示在安装过程中作为创建文件包的实体名称. 作者既可以是个体也可以是公司.
	',
		    'description'=>'这是文件包的 <b>描述</b> 将在安装过程中显示.',
		),
		'studioWizard'=>array(
			'mainHelp' 	=> '欢迎来到 <b>开发工具</b1> 位置. <br/><br/>在本区域使用工具创建和管理标准和客户化模块和字段.',
			'studioBtn'	=> '使用 <b>工作室</b> 来客户化安装改变字段范围的模块, 选择所要创建客户化数据字段的有效字段.',
			'mbBtn'		=> '使用 <b>模块生成器</b> 创建新模块.',
			'appBtn' 	=> '使用应用模型来客户化程序中的不同属性, 如多少TPS报表被显示在主页中',
			'backBtn'	=> '返回到前一步.',
			'studioHelp'=> '使用 <b>工作室</b> 来客户化安装模块.',
			'moduleBtn'	=> '点击来编辑此模块.',
			'moduleHelp'=> '选择您想要编辑的模块组件',
			'fieldsBtn'	=> '编辑在模块中存储的信息，使用模块中的控制 <b>字段</b>.<br/><br/>您可以在这里编辑并创建客户化字段.',
			'labelsBtn' => '点击 <b>保存</b> 保存您的客户化标签.'	,
			'layoutsBtn'=> '客户化 <b>版面</b> 的编辑, 细节, 列表和搜索显示.',
			'subpanelBtn'=> '编辑显示在本模块子面板中的信息.',
			'layoutsHelp'=> '选择一个 <b>界面来编辑</b>.<br/<br/>改变版面中包含的数据字段和输入数据, 点击 <b>编辑显示</b>.<br/><br/>在编辑显示中来改变显示数据和输入数据的字段的版面, 点击 <b>细节显示</b>.<br/><br/>该面在默认列表中的列, 点击 <b>列表显示</b>.<br/><br/>在界面中来改变基本和高级搜索, 点击 <b>搜索</b>.',
			'subpanelHelp'=> '选择<b>子面板</b> 用于编辑.',
			'searchHelp' => '选择 <b>搜索</b>版面编辑.',
			'labelsBtn'	=> '编辑 <b>标签</b> 在本模块中显示值.',
	        'newPackage'=>'点击  <b>新建文件包</b> 创建一个新文件包.',
	        'mbHelp'    => '<b>欢迎来到模块生成器.</b><br/><br/>使用 <b>模块生成器</b> 创建包含基于标准模块的客户化模块或客户化对象. <br/><br/>开始, 点击 <b>新建文件包</b> 创建新文件包, 或选择一个文件包编辑.<br/><br/> 一个<b>文件包</b> 扮演了一个客户化模块容器的角色, 文件包，模块都是工程的一部分. 文件包能包含一个或多个客户化模块，这些模块可以相互关联在本应用中. <br/><br/>例如: 您可能想创建一个文件包包含一个客户化模块，此模块与标准帐户模块相关联. 或者, 您可能想创建一个包含若干新模块的文件包，这些模块可以象一个工程一样相互工作，相关关联在本应用中.',
	        'exportBtn' => '点击 <b>导出客户化订制</b> 在本工作室中为特定模块创建包含客户化订制模块的文件包.',
		),


	),//end of assistantHelp

	//HOME
	'LBL_HOME_EDIT_DROPDOWNS'=>'编辑下拉列表',

	//ASSISTANT
	'LBL_AS_SHOW' => '今后显示助手.',
	'LBL_AS_IGNORE' => '今后忽略助手.',
	'LBL_AS_SAYS' => '助手说:',


	//STUDIO2
	'LBL_MODULEBUILDER'=>'模块生成器',
	'LBL_STUDIO' => '工作室',
	'LBL_DROPDOWNEDITOR' => '下拉列表编辑器',
	'LBL_DEVELOPER_TOOLS' => '开发工具',
	'LBL_SUGARPORTAL' => 'Sugar 门户编辑',
	'LBL_SYNCPORTAL' => '同步门户',
	'LBL_PACKAGE_LIST' => '文件包列表',
	'LBL_HOME' => '主页',
	'LBL_NONE'=>'-无-',

	'LBL_ADD_FIELDS'=>'添加客户字段',
	'LBL_AVAILABLE_SUBPANELS'=>'子面板可用',
	'LBL_ADVANCED'=>'高级',
	'LBL_ADVANCED_SEARCH'=>'高级搜索',
	'LBL_BASIC'=>'普通',
	'LBL_BASIC_SEARCH'=>'普通搜索',
	'LBL_CURRENT_LAYOUT'=>'当前布局',
	'LBL_DISPLAY_HTML'=>'显示HTML编码',
	'LBL_DETAILVIEW'=>'显示细节',
	'LBL_DROP_HERE' => '[拽到这里]',
	'LBL_EDIT'=>'编辑',
	'LBL_EDIT_LAYOUT'=>'编辑布局',
	'LBL_EDIT_ROWS'=>'编辑行',
	'LBL_EDIT_COLUMNS'=>'编辑列',
	'LBL_EDIT_LABELS'=>'编辑标签',
	'LBL_EDIT_FIELDS'=>'编辑客户字段',
	'LBL_EDIT_PORTAL'=>'编辑门户 ',
	'LBL_EDIT_FIELDS'=>'编辑字段',
	'LBL_EDITVIEW'=>'编辑显示',
	'LBL_FILLER'=>'(填充器)',
	'LBL_FIELDS'=>'字段',
	'LBL_FAILED_TO_SAVE' => '保存失败',
	'LBL_FAILED_PUBLISHED' => '发布失败',
	'LBL_LAYOUT_PREVIEW'=>'预览版面',
	'LBL_LAYOUTS'=>'版面布局',
	'LBL_LISTVIEW'=>'列表',
	'LBL_MODULES'=>'模块',
	'LBL_MODULE_TITLE' => '工作室',
	'LBL_NEW_PACKAGE' => '新建文件包',
	'LBL_NEW_PANEL'=>'新建面板',
	'LBL_NEW_ROW'=>'新建行',
	'LBL_PACKAGE_DELETED'=>'已删除的包',
	'LBL_PUBLISHING' => '发布中 ...',
	'LBL_PUBLISHED' => '已发布',
	'LBL_RELATIONSHIPS'=>'关系',
	'LBL_RELATIONSHIP_EDIT' => '编辑关系',
	'LBL_SELECT_FILE'=> '选择文件',
	'LBL_SAVE_LAYOUT'=> '保存布局',
	'LBL_SELECT_A_SUBPANEL' => '选择一个子面板',
	'LBL_SELECT_SUBPANEL' => '选择子面板',
	'LBL_SUBPANELS' => '子面板',
	'LBL_SUBPANEL' => '子面板',
	'LBL_SEARCH_FORMS' => '搜索窗体',
	'LBL_SEARCH'=>'搜索',
	'LBL_STAGING_AREA' => '开始区域 (在这里拖拽条目)',
	'LBL_SUGAR_FIELDS_STAGE' => 'Sugar 字段 (点击条目添加到当前区域)',
	'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (点击条目添加到当前区域)',
	'LBL_TOOLBOX' => '工具箱',
	'LBL_VIEW_SUGAR_FIELDS' => '查看 Sugar 字段',
	'LBL_VIEW_SUGAR_BIN' => '查看 Sugar Bin',
	'LBL_QUICKCREATE' => '快速创建',
	'LBL_EDIT_DROPDOWNS' => '编辑一个全局下拉列表',
	'LBL_ADD_DROPDOWN' => '添加一个新的全局下拉列表',
	'LBL_BLANK' => '-空白-',
	'LBL_TAB_ORDER' => '标签顺序',

	'LBL_DROPDOWN_TITLE_NAME' => '下拉列表名称',
	'LBL_DROPDOWN_LANGUAGE' => '下拉列表语言',
	'LBL_DROPDOWN_ITEMS' => '下拉列表条目',
	'LBL_DROPDOWN_ITEM_NAME' => '条目名称',
	'LBL_DROPDOWN_ITEM_LABEL' => '显示标签',









	//STUDIO QUESTIONS
	'LBL_QUESTION_FUNCTION' => '选择一项功能或组件.',
	'LBL_QUESTION_MODULE1' => '选择一个模块.',
	'LBL_QUESTION_EDIT' => '选择一个模块来编辑.',
	'LBL_QUESTION_LAYOUT' => '选择一种版面来编辑.',
	'LBL_QUESTION_SUBPANEL' => '选择一个子面板来编辑.',
	'LBL_QUESTION_SEARCH' => '选择一个搜索版面来编辑.',
	'LBL_QUESTION_MODULE' => '选择一个模块组件来编辑.',
	'LBL_QUESTION_PACKAGE' => '选择一个文件包来编辑,或创建一个新文件包.',
	'LBL_QUESTION_EDITOR' => '选择一个工具.',
	'LBL_QUESTION_DROPDOWN' => '选择一个下拉列表来编辑,或创建一个新下拉列表.',
	//CUSTOM FIELDS
	'LBL_RELATE_TO'=>'相关',
	'LBL_NAME'=>'名称',
	'LBL_LABELS'=>'标签',
	'LBL_MASS_UPDATE'=>'主体更新',
	'LBL_AUDITED'=>'审计',
	'LBL_CUSTOM_MODULE'=>'模块',
	'LBL_DEFAULT_VALUE'=>'默认值',
	'LBL_REQUIRED'=>'需求',
	'LBL_DATA_TYPE'=>'类型',
	'LBL_HCUSTOM'=>'客户',
	'LBL_HDEFAULT'=>'默认',
	'LBL_LANGUAGE'=>'语言:',


	//SECTION
	'LBL_SECTION_EDLABELS' => '编辑标签',
	'LBL_SECTION_PACKAGES' => '文件包',
	'LBL_SECTION_PACKAGE' => '文件包',
	'LBL_SECTION_MODULES' => '模块',
	'LBL_SECTION_PORTAL' => '门户',
	'LBL_SECTION_DROPDOWNS' => '下拉列表',
	'LBL_SECTION_PROPERTIES' => '属性',
	'LBL_SECTION_DROPDOWNED' => '下拉列表编辑器',
	'LBL_SECTION_HELP' => '帮助',
	'LBL_SECTION_ACTION' => '动作',
	'LBL_SECTION_MAIN' => '主要',
	'LBL_SECTION_EDPANELLABEL' => '编辑面板标签',
	'LBL_SECTION_FIELDEDITOR' => '字段编辑器',
	'LBL_SECTION_DEPLOY' => '展开',
	'LBL_SECTION_MODULE' => '模块',
	'LBL_SECTION_VISIBILITY_EDITOR'=>'编辑可见度',
	//WIZARDS

	//LIST VIEW EDITOR
	'LBL_DEFAULT'=>'默认',
	'LBL_HIDDEN'=>'隐藏',
	'LBL_AVAILABLE'=>'可用',
	'LBL_LISTVIEW_DESCRIPTION'=>'下面显示了三列.  <b>默认</b> 列包含的字段被默认显示在列表视图中.  <b>附加</b> 列包含的字段用户可以选择使用创建客户视图.   <b>可用</b> 行显示当您为管理员是添加默认或附加行被用户使用.',
	'LBL_LISTVIEW_EDIT'=>'列表显示编辑器',

	//Manager Backups History
	'LBL_MB_PREVIEW'=>'预览',
	'LBL_MB_RESTORE'=>'重新保存',
	'LBL_MB_DELETE'=>'删除',
	'LBL_MB_COMPARE'=>'比较',
	'LBL_MB_DEFAULT_LAYOUT'=>'默认布局',

	//END WIZARDS

	//BUTTONS
	'LBL_BTN_ADD'=>'填加',
	'LBL_BTN_SAVE'=>'保存',
	'LBL_BTN_SAVE_CHANGES'=>'保存更改',
	'LBL_BTN_DONT_SAVE'=>'放弃更改',
	'LBL_BTN_CANCEL'=>'取消',
	'LBL_BTN_UPLOAD'=>'上传',
	'LBL_BTN_SAVEPUBLISH'=>'保存 & 发布',
	'LBL_BTN_NEXT'=>'下一条',
	'LBL_BTN_BACK'=>'后退',
	'LBL_BTN_CLONE'=>'复制',
	'LBL_BTN_ADDCOLS'=>'添加列',
	'LBL_BTN_ADDROWS'=>'添加行',
	'LBL_BTN_ADDFIELD'=>'添加字段',
	'LBL_BTN_ADDDROPDOWN'=>'添加下拉列表',
	'LBL_BTN_SORT_ASCENDING'=>'升序排序',
	'LBL_BTN_SORT_DESCENDING'=>'降序排序',
	'LBL_BTN_EDLABELS'=>'编辑标签',
	'LBL_BTN_UNDO'=>'撤消',
	'LBL_BTN_REDO'=>'重做',
	'LBL_BTN_ADDCUSTOMFIELD'=>'添加客户字段',
	'LBL_BTN_EXPORT'=>'导出客户化订制',
	'LBL_BTN_DUPLICATE'=>'复制',
	'LBL_BTN_PUBLISH'=>'发布',
	'LBL_BTN_DEPLOY'=>'部署',
	'LBL_BTN_EXP'=>'导出',
	'LBL_BTN_DELETE'=>'删除',
	'LBL_BTN_VIEW_LAYOUTS'=>'查看版面',
	'LBL_BTN_VIEW_FIELDS'=>'查看字段',
	'LBL_BTN_VIEW_RELATIONSHIPS'=>'查看关系项',
	'LBL_BTN_ADD_RELATIONSHIP'=>'添加关系项',
	//TABS


	//ERRORS
	'ERROR_ALREADY_EXISTS'=> '错误: 失败已经存在',
	'ERROR_INVALID_KEY_VALUE'=> "错误: 无效的关键值: [']",




	//SUGAR PORTAL
	'LBL_PORTAL'=>'门户',
	'LBL_SYNCP_WELCOME'=>'请输入您想要更新门户实例的URL.',
	'LBL_SP_UPLOADSTYLE'=>'选择一种表单类型从您的计算机上进行上传.<br> 表单类型将应用于Sugar门户下次实施同步时.',
	'LBL_SP_UPLOADED'=> '上传',
	'ERROR_SP_UPLOADED'=>'请确定您将上传一种CSS格式的表单.',
	'LBL_SP_PREVIEW'=>'这是关于Sugar门户网站被喜欢使用的样式表的预演.',
	'LBL_PORTALSITE'=>'Sugar门户的URL: ',
	'LBL_PORTAL_GO'=>'跳转',
	'LBL_UP_STYLE_SHEET'=>'上传风格表单',
	'LBL_QUESTION_SUGAR_PORTAL' => '选择一种 Sugar门户界面来编辑.',
	'LBL_QUESTION_PORTAL' => '选择一种门户界面来编辑.',
	'LBL_SUGAR_PORTAL'=>'Sugar门户',

	//PORTAL PREVIEW
	'LBL_CASES'=>'客户反馈',
	'LBL_NEWSLETTERS'=>'邮件列表',
	'LBL_BUG_TRACKER'=>'错误触发器',
	'LBL_MY_ACCOUNT'=>'我的帐户',
	'LBL_LOGOUT'=>'版面布局',
	'LBL_CREATE_NEW'=>'新建',
	'LBL_LIST'=>'列表',
	'LBL_LOW'=>'低',
	'LBL_MEDIUM'=>'中',
	'LBL_HIGH'=>'高',
	'LBL_NUMBER'=>'数量:',
	'LBL_PRIORITY'=>'优先级:',
	'LBL_SUBJECT'=>'主题',
	'LBL_DESCRIPTION'=>'描述:',




	//PACKAGE AND MODULE BUILDER
	'LBL_PACKAGE_NAME'=>'文件包名称:',
	'LBL_MODULE_NAME'=>'模块名称:',
	'LBL_AUTHOR'=>'作者:',
	'LBL_DESCRIPTION'=>'描述:',
	'LBL_KEY'=>'关键值:',
	'LBL_ADD_README'=>' 自述',
	'LBL_MODULES'=>'模块:',
	'LBL_LAST_MODIFIED'=>'最新修改:',
	'LBL_NEW_MODULE'=>'新增模块',
	'LBL_LABEL'=>'标签:',
	'LBL_LABEL_TITLE'=>'标签',
	'LBL_WIDTH'=>'宽',
	'LBL_PACKAGE'=>'文件包:',
	'LBL_TYPE'=>'类型:',
	'LBL_TEAM_SECURITY'=>'团队安全',
	'LBL_ASSIGNABLE'=>'可分配',
	'LBL_PERSON'=>'人员',
	'LBL_COMPANY'=>'公司',
	'LBL_ISSUE'=>'发行',
	'LBL_NAV_TAB'=>'导航标签',
	'LBL_CREATE'=>'创建',
	'LBL_LIST'=>'列表',
	'LBL_LIST_VIEW'=>'列表视图',
	'LBL_HISTORY'=>'历史',
	'LBL_RESTORE_DEFAULT'=>'恢复默认值',
	'LBL_ACTIVITIES'=>'销售活动',
	'LBL_SEARCH'=>'查找',
	'LBL_NEW'=>'新建',
	'LBL_TYPE_BASIC'=>'基本',
	'LBL_TYPE_COMPANY'=>'公司',
	'LBL_TYPE_PERSON'=>'人员',
	'LBL_TYPE_ISSUE'=>'发行',
	'LBL_RSUB'=>'这是将显示在您模块中的子面板',
	'LBL_MSUB'=>'这是您模块的子面板用于提供给相关模块显示',

	//EXPORT CUSTOMS
	'LBL_EC_TITLE'=>'导出客户化订制',
	'LBL_EC_NAME'=>'文件包名称:',
	'LBL_EC_AUTHOR'=>'作者:',
	'LBL_EC_DESCRIPTION'=>'描述:',
	'LBL_EC_KEY'=>'关键值:',
	'LBL_EC_CHECKERROR'=>'请选择一个模块.',
	'LBL_EC_CUSTOMFIELD'=>'客户化订制字段',
	'LBL_EC_CUSTOMLAYOUT'=>'客户化界面',
	'LBL_EC_NOCUSTOM'=>'无模块被客户化订制.',
	'LBL_EC_EMPTYCUSTOM'=>'空白客户化订制.',
	'LBL_EC_EXPORTBTN'=>'导出',
	'LBL_MODULE_DEPLOYED' => '模块已打开.',
	'LBL_UNDEFINED' => '未定义',

	//AJAX STATUS
	'LBL_AJAX_FAILED_DATA' => '挽回数据失败',
	'LBL_AJAX_TIME_DEPENDENT' => '动作正在进行中,请耐心等待并在几秒钟后重试',
	'LBL_AJAX_LOADING' => '加载中...',
	'LBL_AJAX_DELETING' => '删除中...',
	'LBL_AJAX_BUILDPROGRESS' => '建设过程中...',
	'LBL_AJAX_DEPLOYPROGRESS' => '扩展过程中...',

	//JS
	'LBL_JS_REMOVE_PACKAGE' => '您确定您要移除此文件包吗? 这将永久删除与此文件包相关的所文件.',

	'LBL_DEPLOY_IN_PROGRESS' => '部署文件包',
	'LBL_JS_VALIDATE_NAME'=>'名称 - 必须为字母数字并且以字母开头',
	'LBL_JS_VALIDATE_KEY'=>'关键值 - 必须为字母数字并且以字母开头',
	'LBL_JS_VALIDATE_LABEL'=>'请输入一条标签作为此模块的显示名称',
	'LBL_JS_VALIDATE_TYPE'=>'请在列表中选择你喜欢的模块类型',
	'LBL_JS_VALIDATE_REL_NAME'=>'名称 - 必须为字母数字并且无空格',
	'LBL_JS_VALIDATE_REL_LABEL'=>'标签 - 请添加一条可显示于子面板上',

	//CONFIRM
	'LBL_CONFIRM_FIELD_DELETE'=>'删除一条客户字段将会删除所有与客户相关的数据.您将在所有添加过此字段的界面中删除它',
	'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'您确定您希望删除此项关系吗?',
	'LBL_CONFIRM_DONT_SAVE' => '自上次保存已变化,您真要保存吗?',
	'LBL_CONFIRM_DONT_SAVE_TITLE' => '保存更改?',
	'LBL_DEPENDENT_DROPDOWN'=>'依赖的下拉列表',
	'LBL_TRIGGER_DROPDOWN'=>'触发的下拉列表',
	'fieldTypes' => array(
		'varchar'=>'字符型',
		'int'=>'整型',
		'float'=>'数值型',
		'bool'=>'布尔型',
		'enum'=>'枚举型',
		'date'=>'日期型',
		'phone' => '电话',
		'currency' => '货币',
		'html' => 'HTML',
		'radioenum' => '单选框',
		'relate' => '关系',
		'address' => '地址',
		'text' => '文本框',
		'url' => '超链接',
		'multienum' => '多选',
		'iframe' => '浮动窗口',
		'encrypt'=>'加密',
	),

	'multienum' => '多选',
	'parent' => '弹性关联',


	'LBL_EDIT_DROPDOWN' => '编辑下拉列表',
	'LBL_CURRENCY' => '货币',
	'LBL_DASHLET' => 'Sugar 统计图',
	'LBL_DASHLETLISTVIEW' => 'Sugar 统计图列表',
	'LBL_DASHLETSEARCH' => 'Sugar 统计图查找',
	'LBL_DASHLETSEARCHVIEW' => 'Sugar 统计图查找',
	'LBL_HOMEPAGE_PREFIX' => '我的',

	//RELATIONSHIPS
	'LBL_MODULE' => '模块',
	'LBL_LHS_MODULE' => '主模块',
	'LBL_CUSTOM_RELATIONSHIPS' => '* 工作室或模块生成器创建的模块',
	'LBL_RELATIONSHIPS'=>'关系',
	'LBL_RELATIONSHIP_EDIT' => '编辑关系',
	'LBL_REL_NAME' => '姓名',
	'LBL_REL_LABEL' => '标签',
	'LBL_REL_TYPE' => '类型',
	'LBL_RHS_MODULE' => '关联模块',
	'LBL_NO_RELS' => '无关联',
	'LBL_RELATIONSHIP_ROLE_ENTRIES' => '可选条件',
	'LBL_RELATIONSHIP_ROLE_COLUMN' => '列',
	'LBL_RELATIONSHIP_ROLE_VALUE' => '值',
	'LBL_SUBPANEL_FROM' => '子面板来自',
	'LBL_RELATIONSHIP_ONLY' => '没有创建该关联的可见元素，因为两模块已存在可见关联。',
	'LBL_ONETOONE' => '一对一',
	'LBL_MANYTOONE' => '多对一',
	'LBL_ONETOMANY' => '一对多',
	'LBL_MANYTOMANY' => '多对多',

	'LBL_QUESTION_DASHLET' => '选择编辑一个统计图布局。',
	'LBL_BTN_CLOSE' => '关闭',
	'ERROR_NO_HISTORY' => '没有找到历史文件',
	'ERROR_MINIMUM_FIELDS' => '布局中必须包含一个字段',
	'LBL_SALE' => '销售',
	'LBL_FILE' => '文件',
	'LBL_TYPE_SALE' => '销售',
	'LBL_TYPE_FILE' => '文件',
	'LBL_MB_IMPORTABLE' => '导入',
	'LBL_VE_VISIBLE'=>'可见',
	'LBL_VE_HIDDEN'=>'隐藏',
	'LBL_PACKAGE_WAS_DELETED'=>'[[package]] 已经被删除',
	'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => '将永久添加该关联，是否部署？',
	'LBL_POPHELP_FIELD_DATA_TYPE' => '请按照加入该字段的数据类型选择合适的数据类型。',
	'LBL_POPHELP_IMPORTABLE' => '<b>是:</b> 导入操作将加入该字段。\n<b>否:</b> 导入操作不会加入该字段。\n<b>必要:</b> 任何导入操作必须提供该字段数值。',
	'LBL_POPHELP_DUPLICATE_MERGE' => '<b>禁止:</b> 该字段将在合并重复时不会出现，在查找重复时也不会做为筛选条件出现。.\n<b>启用:</b> 该字段将在合并重复时出现，但在查找重复时不会做为筛选条件出现。\n<b>在过滤:</b> 该字段将在合并重复时出现，但在查找重复时也会做为筛选条件出现。\n<b>默认选择的过滤:</b> 在查找重复时，该字段作为默认筛选条件，并在合并重复时出现。<b>只过滤:</b> 该字段将在合并重复时不会出现，但在查找重复时会做为筛选条件出现。\n',
	'LBL_SUBPANEL_TITLE' => '子面板:',


	'LBL_DEPLOYE_COMPLETE' => '部署完成',
	'LBL_DEPLOY_FAILED' => '部署过程中出错，你的模块包有可能没有能正确的安装。',
	'LBL_POPUP' => '弹出视图',
	'LBL_POPUPLIST' => '弹出列表视图',
	'LBL_POPUPLISTVIEW' => '弹出列表视图',
	'LBL_POPUPSEARCH' => '弹出搜索',
	'LBL_CONVERTLEAD' => '转化潜在客户',
	'LBL_TAB_PANELS' => '把子面板显示成标签',
	'LBL_TAB_PANELS_HELP' => '在各自的标签中显示子面板，而不是全部显示在同一个界面上。',
	'LBL_QUESTION_POPUP' => '选择一个弹出视图编辑',
	'ERROR_GENERIC_TITLE' => '发生错误',
	'ERROR_REQUIRED_FIELDS' => '你确定要继续吗？下面这些必选字段没有包含在这个版面中： ',
	'LBL_VIEW' => '视图',
	'LBL_AJAX_FIELD_EXISTS' => '你输入的字段名已存在。请输入一个新的字段名。',
	'LBL_JS_REMOVE_MODULE' => '您确定要删除该模块吗？这将彻底删除模块相关的文件和配置。',
	'LBL_JS_DEPLOY_PACKAGE' => '重新部署模块，将覆盖在工作室中做的所有定制。您确定要这样做吗？',
	'LBL_CONFIRM_LOWER_LENGTH' => '数据将被截断，无法恢复。您确定要这样做吗？',
	'LBL_POPHELP_IMAGE_WIDTH' => '输入宽度，单位是像素。<br> 上传的图片文件将被缩放在这个宽度。',
	'LBL_POPHELP_IMAGE_HEIGHT' => '输入高度，单位是像素。<br> 上传的图片文件将被缩放在这个高度。',
	'LBL_RESET' => '重置',
	'LBL_RESET_MODULE' => '重置模块',
	'LBL_REMOVE_CUSTOM' => '删除定制内容',
	'LBL_CLEAR_RELATIONSHIPS' => '清楚模块关联',
	'LBL_RESET_LABELS' => '重置标签',
	'LBL_RESET_LAYOUTS' => '重置版面',
	'LBL_REMOVE_FIELDS' => '删除客户化字段',
	'LBL_CLEAR_EXTENSIONS' => '清除扩展',
	'LBL_HISTORY_TIMESTAMP' => '时间戳',
	'LBL_HISTORY_TITLE' => ' 历史',
	'LBL_ILLEGAL_FIELD_VALUE' => '下拉列表的键值不能包含引号。',
	'LBL_CONFIRM_SAVE_DROPDOWN' => '您将从下拉列表中删除这个选项。所有使用这个选项的数据，将无法显示出来。您确定要这样做吗？',
	'ERROR_ARE_YOU_SURE' => '您确定要继续吗？',
	'fieldTypes' =>
	        array (
	          'varchar' => '字符型',
	          'int' => '整型',
	          'float' => '浮点型',
	          'bool' => '布尔型',
	          'enum' => '枚举型',
	          'multienum' => '多选',
	          'date' => '日期型',
	          'phone' => '电话',
	          'currency' => '货币',
	          'html' => 'HTML',
	          'radioenum' => '单选框',
	          'relate' => '关系',
	          'address' => '地址',
	          'text' => '文本框',
	          'url' => '超链接',
	          'iframe' => '浮动窗口',
	          'datetimecombo' =>'日期型',
			  'decimal'=>'数值型',
	        ),

	'LBL_SYNC_TO_DETAILVIEW' => '同步到详细视图',
	'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
	'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
	'LBL_COPY_FROM_EDITVIEW' => '从编辑视图复制',
	'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
	'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Package Name already exists',
	'labelTypes' =>
		array (
		  '' => '经常使用的标签',
		),
	'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br>phone number, with allowance for the country code 1, and<br>to apply a U.S. format to the phone number when the record<br>is saved. The following format will be applied: (xxx) xxx-xxxx.',

	'LBL_加载中' => '加载中',
	'LBL_HIDEOPTIONS' => '隐藏选项',
	'LBL_DELETE' => '删除',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM',
	'LBL_CUSTOM' => '定制',
	'LBL_CUSTOM_FIELDS' => '* 由工作室创建的字段',
	'LBL_BTN_RENAME_MODULE' => '修改模块名称',
	'LBL_BTN_INSERT' => '插入',
	'LBL_POPHELP_SEARCHABLE' => 'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
	'LBL_POPHELP_GLOBAL_SEARCH' => '在全局搜索该模块时使用这个字段。',
	'labelTypes' =>
		array (
		  	'all' => '全部标签',
		),
	'LBL_ALL_MODULES' => '全部模块',

);
