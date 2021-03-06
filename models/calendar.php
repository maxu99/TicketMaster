<?php namespace models;
class Calendar {
    private $date;
    private $hour;
    private $id;
    private $event;
    private $artist;
    private $place;
    private $typeplace;
    public function __construct($event = '', $place = '', $typeplace = '', $id = '', $hour = '', $artist = '', $date = '') {
        $this->date = $date;
        $this->hour = $hour;
        $this->id = $id;
        $this->event = $event;
        $this->artist = $artist;
        $this->place = $place;
        $this->typeplace = $typeplace;
    }
    public function getDate() {
        return $this->date;
    }
    public function getHour() {
        return $this->hour;
    }
    public function setDate($d) {
        $this->date = $d;
    }
    public function setHour($h) {
        $this->hour = $h;
    }
    public function getId() {
        return $this->id;
    }
    public function getEvent() {
        return $this->event;
    }
    public function getArtist() {
        return $this->artist;
    }
    public function getPlace() {
        return $this->place;
    }
    public function getTypeplace() {
        return $this->typeplace;
    }
}
?>
