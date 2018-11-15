<?php
namespace controllers;
use models\Buy as Buy;
use daos\databases\BuyDB as dao;
use controllers\UserController as UserController;
class BuyController {
    protected $dao;
    private $obj;
    public function __construct() {
        $this->dao = dao::getInstance();
    }
    public function index() {
        $buys=NULL;
        if ($this->getAll()) { $buys = $this->getAll(); }
        require (ROOT . 'views/allbuy.php');
    }
    public function insert($ticket, $client, $date) {
        try {
            $buy = new Buy($ticket, $client, $date);
            $this->dao->create($buy);
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }
    public function getAll() {
        return $this->dao->getAll();
    }
    public function getbuyuser($email) {
        $userdb = new UserController();
        $user = $userdb->search($email);
        return $this->dao->getbuyuser($user->getID());
    }
    public function userbuylist() {
        require (ROOT . 'views/userbuylist.php');
    }
}
