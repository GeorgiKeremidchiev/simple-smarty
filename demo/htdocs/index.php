<?php
	require_once('config.php');
	require_once('requires.php');

	$smarty = new Smarty();

	$smarty->setTemplateDir('/xxxxxxxx/pocket/demo/templates/');
	$smarty->setCompileDir('/xxxxxxx/pocket/demo/templates_c/');
	$smarty->setConfigDir('/xxxxxxxx/pocket/demo/configs/');
	$smarty->setCacheDir('/xxxxxxxx/pocket/demo/cache/');

	$request = new Classes\ProcessRequest();
	$selectedLanguage = $request->getSelectedLanguage();

	$languages = new Comps\Languages();
	$languages->loadLanguages();

	$selectList = [];
	foreach($languages->getLanguages() as $language)
	{
		$selectList[ $language->getId() ] = $language->getName(); 	
		if($language->getIsDefault() && $selectedLanguage == null)
		{
			$selectedLanguage = $language->getId();
		}
	}
	$smarty->assign('languages', $selectList);
	$smarty->assign('selectedLanguage', $selectedLanguage);

	$texts = new Comps\Texts();
	$texts->loadContent($selectedLanguage);

	$smarty->assign('text', $texts->getText()->getContent());

	$smarty->display('index.tpl');
?>
