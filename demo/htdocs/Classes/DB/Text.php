<?php
        namespace Classes\DB;
	
	class Text
	{
		private $id;
		private $languageId;
		private $content;

		public function getId()
		{
			return $this->id;
		}	
		
		public function setId($inputId)
		{
			$this->id = $inputId;
		}

		public function getLanguageId()
		{
			return $this->languageId;
		}

		public function setLanguageId($inputId)
		{
			$this->languageId = $inputId;
		}

		public function getContent()
		{
			return $this->content;
		}

		public function setContent($inputContent)
		{
			$this->content = $inputContent;
		}
	} 
?>
