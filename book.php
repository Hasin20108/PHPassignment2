<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getCopy() {
        return $this->available > 0;
    }

    public function addCopy($num) {
        if ($num > 0) {
            $this->available += $num;
            return true;
        }
        return false;
    }

    public function __toString() {
        return "ISBN: {$this->isbn}, Title: {$this->title}, Author: {$this->author}, Available: {$this->available}";
    }

    public function __call($name, $args) {
        $property = lcfirst(substr($name, 3));
        if (strncasecmp($name, 'get', 3) === 0) {
            return $this->$property;
        } elseif (strncasecmp($name, 'set', 3) === 0) {
            if (isset($args[0])) {
                $this->$property = $args[0];
                return true;
            }
        }
        return null;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
?>