<?php namespace daos\daoList;
class Singleton {
    private static $instance = array();
    public static function getInstance() {
        $miclase = get_called_class();
        if (!isset(self::$instance[$miclase])) {
            self::$instance[$miclase] = new $miclase;
        }
        return self::$instance[$miclase];
    }
}
?>
