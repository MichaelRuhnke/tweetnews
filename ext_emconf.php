<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tweetnews".
 *
 * Auto generated 04-12-2013 19:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Tweet News: Auto tweeting of published EXT:news',
	'description' => 'Use the Twitter API to tweet about news items added in Georg Ringers EXT:news extension. Minimal configuration - no database storage used.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.1',
	'dependencies' => 'cms,extbase,fluid,news,flux',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
			'news' => '',
			'flux' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:8:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"253f";s:14:"ext_tables.php";s:4:"5d20";s:9:"README.md";s:4:"1831";s:46:"Classes/Provider/NewsConfigurationProvider.php";s:4:"9a14";s:35:"Classes/Service/SettingsService.php";s:4:"08ac";s:34:"Configuration/TypoScript/setup.txt";s:4:"1ad4";s:30:"Resources/Contrib/CodeBird.php";s:4:"6bcb";}',
);

?>