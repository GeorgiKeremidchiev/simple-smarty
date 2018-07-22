<?php
        namespace Comps;

        class Texts
	{
		private $text;

		public function getText()
		{
			return $this->text;
		}
	
		public function loadContent($selectdLanguage)
		{
			$dbTexts = new \DB\Tables\Texts();
                        $result = $dbTexts->selectContentByLanguage($selectdLanguage);
			$row = pg_fetch_array($result);
			
			$this->text = new \Classes\DB\Text();
			$this->text->setId($row['id']);	
			$this->text->setLanguageId($row['language_id']);	
			$this->text->setContent($row['content']);	
		}
	}
?>
