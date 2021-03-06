<?php
if (!defined ("TYPO3_MODE")) die ("Access denied.");

$TCA["tx_euldap_server"] = Array (
	"ctrl" => $TCA["tx_euldap_server"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "server,port,domain,base_dn"
	),
	"feInterface" => $TCA["tx_euldap_server"]["feInterface"],
	"columns" => Array (
		"server" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.server",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "required,trim",
			)
		),
		"port" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.port",
			"config" => Array (
				"type" => "input",
				"size" => "5",
				"eval" => "int,nospace",
				"default" => "389",
			)
		),
		"version" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.ldapversion",
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.ldapversion.I.0", "2"),
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.ldapversion.I.1", "3"),
				),
			)
		),
		"domain" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.domain",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
			)
		),
		"base_dn" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.base_dn",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "required,trim",
			)
		),
		"filter" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.filter",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"max" => "255",
				"eval" => "required,trim",
				"default" => "(&(objectClass=user)(objectCategory=person)(samaccountname=<search>))",
			)
		),
		"servertype" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.servertype",
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.servertype.I.0", "0"),
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.servertype.I.1", "1"),
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.servertype.I.2", "2"),
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.servertype.I.3", "3"),
				),
			)
		),
		"name" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.name",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "required,trim",
				"default" => "displayname",
			)
		),
		"username" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.username",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "required,trim",
				"default" => "uid",
			)
		),
		"address" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.address",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "streetaddress",
			)
		),
		"zip" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.zip",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "postalcode",
			)
		),
		"city" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.city",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "l",
			)
		),
		"country" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.country",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "countrycode",
			)
		),
		"fax" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.fax",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "facsimiletelephonenumber",
			)
		),
		"mail" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.mail",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "required,trim",
				"default" => "mail",
			)
		),
		"phone" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.phone",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "telephonenumber",
			)
		),
		"www" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.www",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
				"default" => "wwwhomepage",
			)
		),
		"memberof" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.memberof",
			"config" => Array (
				"type" => "check",
				"default" => "1"
			)
		),
		"build_group" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.build_group",
			"config" => Array (
				"type" => "text",
				"rows" => "5",
				"cols" => "30",
				"eval" => "trim"
			)
		),
		"map_additional_fields" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.map_additional_fields",
			"config" => Array (
				"type" => "text",
				"rows" => "5",
				"cols" => "30",
				"eval" => "trim"
			)
		),
		"only_emailusers" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.only_emailusers",
			"config" => Array (
				"type" => "check",
				"default" => "1"
			)
		),
		"automatic_import" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.automatic_import",
			"config" => Array (
				"type" => "check",
				"default" => "1"
			)
		),
		"authenticate_be" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.authenticate_be",
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.authenticate_be.I.0", "0"),
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.authenticate_be.I.1", "1"),
					Array("LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.authenticate_be.I.2", "2"),
				),
			)
		),
		"user" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.user",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim",
			)
		),
		"password" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.password",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"eval" => "trim,password",
			)
		),
		"doitfe" => Array (
			"exclude" => 0,
				"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.doitfe",
			"config" => Array (
				"type" => "check",
			)
		),
		"matchgrps" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.matchgrps",
			"config" => Array (
				"type" => "text",
				"rows" => "5",
				"cols" => "30",
				"eval" => "trim"
			)
		),
		"timestamp" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.timestamp",
			"config" => Array (
				"type" => "input",
				"size" => "30",
				"default" => "logintime",
			)
		),
		'fe_group' => Array (
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.fe_group',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'fe_groups',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 10,
			)
		),
		'be_group' => Array (
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.be_group',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'be_groups',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 10,
			)
		),
		'feuser_pid' => Array (
			'l10n_mode' => 'exclude',
			'exclude' => 1,
			'label' => 'LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.feuser_pid',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'pages',
				'foreign_table_where' => 'AND doktype = 254 ',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		"characterset" => Array (
			"exclude" => 0,
			"label" => "LLL:EXT:eu_ldap/locallang_db.php:tx_euldap_server.characterset",
			"config" => Array (
				"type" => "input",
				"size" => "10",
				"eval" => "required,trim",
				"default" => "utf-8",
			)
		),
	),
	"types" => array(
		"0" => array(
			"showitem" => "--div--;Server, server, port, version, characterset, base_dn, filter, servertype, domain, user, password, --div--;Settings, automatic_import, only_emailusers, authenticate_be, feuser_pid, timestamp, --div--;Attributes, username, name, mail, address, zip, city, country, phone, fax, www, map_additional_fields, --div--;Groups, doitfe, matchgrps, memberof, build_group, fe_group, be_group"
		)
	)
);

?>
