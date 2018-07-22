<?php
	namespace Classes\DB;

	class Language
	{
		private $id;
		private $name;
		private $isDefault;

		public function getId()
		{
			return $this->id;
		}

		public function setId($inputId)
		{
			$this->id = $inputId;
		}

		public function getName()
		{
			return $this->name;
		}

		public function setName($inputName)
		{
			$this->name = $inputName;
		}

		public function getIsDefault()
		{
			return $this->isDefault;
		}

		public function setIsDefault($inputIsDefault)
		{
			$this->isDefault = $inputIsDefault;
		}
	}
?>
