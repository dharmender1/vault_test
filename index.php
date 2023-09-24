<?php 

require __DIR__ . '/vendor/autoload.php';

// Create configuration
$config = array(
	'type'   => 'hashicorp',
	'config' => array(
		'uri'      => 'https://vault-cluster-public-vault-be138f7f.0f1921b8.z1.hashicorp.cloud:8200',
		'roleId'   => '506a9ee4-1661-0c83-ae66-c73de9c47e01',
		'secretId' => 'e2f40b39-7959-ce25-a206-319278650cc9'
	)
);

// Create the vault instance
try {
	$vault = \TgVault\VaultFactory::create($config);
    echo "<pre>";print_r($vault);
} catch (\TgVault\VaultException $e) {
	// Vault could not be created
}