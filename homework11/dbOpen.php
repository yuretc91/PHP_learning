
<?php
class Database{
    protected $connection;

    public function __construct($host, $user, $password, $database)
    {
        $this->connection = new mysqli($host, $user, $password, $database);
        if (!$this->connection){
            echo "Database connection failed";
        }
    }
    public function selectAll($sql){
        $rezult = $this->connection->query($sql);

        return $rezult;
    }

}


?>

