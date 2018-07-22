<?php
	namespace Comps;

	class Languages
	{
		private $languages = [];

		public function getLanguages()
		{
			return $this->languages;
		}

		public function loadLanguages()
		{
			$dbLanguages = new \DB\Tables\Languages();
			$result = $dbLanguages->selectAllLanguages();
			while($row = pg_fetch_array($result))
			{
				$language = new \Classes\DB\Language();
				$language->setId($row['id']);
	                        $language->setName($row['name']);
				$language->setIsDefault(($row['is_default'] === 't') ? true : false);

				$this->languages[] = $language;
			}

		}
	}
?>
