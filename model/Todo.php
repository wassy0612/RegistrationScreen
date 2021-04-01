<?php
class Todo {
    public static function findByQuery($query) {
        $dbh = new PDO(DSN,USERNAME,PASSWORD);
        $stmh = $dbh->query($query);
        if($stmh) {
            $result = $stmh->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }
        return $result;

    }

    
    
}
?>