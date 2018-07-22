<?php
	namespace DB;
	
	class Connector
	{
		function __construct()
		{
			$this->dbh = pg_connect("host=".DB_SERVER." dbname=".DB_NAME." user=".DB_USERNAME." password=".DB_PASSWORD) or die ("Could not connect to db server");
			pg_query("BEGIN") or die("Could not start transaction");	
		}

		function __destruct() 
		{
			$this->rollback();	
			$this->close();
		}

                private $dbh;

                protected function getDbh()
                {
                        return $this->dbh;
                }

		protected function commit()
		{
			pg_query("COMMIT") or die("Transaction commit failed");
		}

		private function rollback()
		{
			pg_query("ROLLBACK") or die("Transaction rollback failed");
		}

		private function close()
		{
			pg_close($this->dbh);
		}
	}
?>
