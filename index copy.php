<?php 

require __DIR__ . '/vendor/autoload.php';

// Create configuration
// $config = array(
// 	'type'   => 'hashicorp',
// 	'config' => array(
// 		'uri'      => 'https://vault-cluster-public-vault-be138f7f.0f1921b8.z1.hashicorp.cloud:8200',
// 		'roleId'   => '123456-12345-12345-123456',
// 		'secretId' => 'abcdef-abcde-abcde-abcdef'
// 	)
// );
$config = array(
	'type'   => 'memory',
	'config' => array(
		'secrets' => array(
			'my/secret/number/1' => array(
				'username' => 'my-username1',
				'password' => 'my-password1',
			),
			'my/secret/number/2' => array(
				'username' => 'my-username2',
				'password' => 'my-password2',
			),
		)
	)
);
// Create the vault instance
try {
	$vault = \TgVault\VaultFactory::create($config);
    // echo "<pre>";print_r($vault);

    $mySecret1 = $vault->getSecret('my/secret/number/1');
	$mySecret2 = $vault->getSecret('my/secret/number/2');


   echo  $username1 = $mySecret1->get('username');
$password1 = $mySecret1->get('password');
$username2 = $mySecret2->get('username');
$password2 = $mySecret2->get('password');



} catch (\TgVault\VaultException $e) {
	// Vault could not be created
}