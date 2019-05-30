
<?php
class Session{
    protected $connection;

    public function __construct()
    {
        session_start();
    }
    public function add($sql){
        $rezult = $this->connection->query($sql);

        return $rezult;
    }

}


?>

