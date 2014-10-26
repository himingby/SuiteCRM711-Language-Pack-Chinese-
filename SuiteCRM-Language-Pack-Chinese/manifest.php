<?php

$manifest = array(
    // only install on the following sugar versions (if empty, no check)
    array (
      'exact_matches' =>
        array (
        ),
      'regex_matches' =>
        array (
          0 => '7\.1\.1?'
        ),
    ),
    // Version for which this langpack can work
    'acceptable_sugar_flavors' =>
      array (
        0 => 'CE',
        1 => 'PRO',
        2 => 'ENT',
      ),

    // name of the Pack
    'name' => 'SuiteCRM简体中文语言包7.1.1',

    // description of new code
    'description' => 'SuiteCRM简体中文语言包（Simplified Chinese Language Pack）7.1.1',

    // author of new code
    'author' => '(Guo Baoying)sqlserver2x@hotmail.com',

    // date published
    'published_date' => '2014/04/31',

    // version of code
    'version' => '7.1.1',

    // type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // Uninstall is allowed
    'is_uninstallable' => TRUE,
);

$installdefs = array(
	'id' => 'zh_cn',
	'copy' => array(
				array(
					'from' => '<basepath>/modules',
					'to'   => 'modules',
					),
				array(
					'from' => '<basepath>/include/language'),
					'to'   => 'include/language'
					),
				array(
					'from' => '<basepath>/install/language',
					'to'   => 'install/language',
					),
				array(
					'from' => '<basepath>/custom/language',
					'to'   => 'custom/language',
					),
);
?>
 
