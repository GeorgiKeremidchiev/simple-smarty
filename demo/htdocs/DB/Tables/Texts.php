<?php
        namespace DB\Tables;

        class Texts extends \DB\Connector
        {
                public function selectContentByLanguage($selectedLanguage)
                {
                        $dbh = parent::getDbh();
                        $result = pg_query_params($dbh, "select * from texts where language_id = $1", array($selectedLanguage));
                        return $result;
                }
        }
	
?>
