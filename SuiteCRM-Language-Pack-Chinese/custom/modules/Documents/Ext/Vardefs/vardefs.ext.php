<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary["Document"]["fields"]["aos_contracts"] = array (
  'name' => 'aos_contracts',
  'type' => 'link',
  'relationship' => 'aos_contracts_documents',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
);



$dictionary['Document']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_documents',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);





?>