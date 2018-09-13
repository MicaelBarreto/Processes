<?php
    class JobDAO {
        public static function add($job) {
            $db = Database::getConnection();
            $stmt = $db->prepare('INSERT INTO job (time, priority) VALUES (:time, :priority)');
            $stmt->execute(array(
            ':time' => $job->getTime(),
            ':priority' => $job->getPriority(),
            ));
            return $stmt->rowCount();
        }

        public static function all() {
            $db = Database::getConnection();
            $stmt = $db->prepare('SELECT * FROM job');
            $stmt->execute();
            return $stmt->fetchAll();
        
        
        }

        public static function take($job) {
            $db = Database::getConnection();
            
            $stmt = $db->prepare('SELECT * FROM job where  id= :id');
            $stmt->execute(array(
                    ':id' => $job->getId()
            ));
            $rows = $stmt->fetchAll();
            
        }
    }

?>  