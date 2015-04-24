<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
//not sure if really needed
require_once  t3lib_extMgm::extPath('tweetnews', 'Classes/Provider/NewsConfigurationProvider.php'); 

//Tx_Flux_Core::registerConfigurationProvider('Tx_Tweetnews_Provider_NewsConfigurationProvider');
\FluidTYPO3\Flux\Core::registerConfigurationProvider('Tx_Tweetnews_Provider_NewsConfigurationProvider');
?>
