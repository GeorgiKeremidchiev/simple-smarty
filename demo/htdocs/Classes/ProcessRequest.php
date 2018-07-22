<?php
	namespace Classes;

	class ProcessRequest
	{
		function __construct()
		{
			$this->selectedLanguage = isset($_REQUEST['language']) ? $_REQUEST['language'] : null; 
		}

		private $selectedLanguage;

		public function getSelectedLanguage()
		{
			return $this->selectedLanguage;
		}
	}	
?>
