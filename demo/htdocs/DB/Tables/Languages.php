<?php
	namespace DB\Tables;

	class Languages extends \DB\Connector
	{
		public function selectAllLanguages()
		{
			$dbh = parent::getDbh();
			$result = pg_query($dbh, "select * from languages order by id");
			return $result;
		}	
	}
?>
