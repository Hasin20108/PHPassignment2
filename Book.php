<?php

class Book {
    private $properties = [];

    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        return null; // Property not found
    }

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __call($name, $args) {
        $prefix = substr($name, 0, 3);
        $property = lcfirst(substr($name, 3));
        
        if ($prefix === 'get') {
            if (array_key_exists($property, $this->properties)) {
                return $this->properties[$property];
            }
        } elseif ($prefix === 'set') {
            $this->properties[$property] = $args[0];
            return;
        }

        return "ei function nai<br>";
    }

    public function getCopy() {
        if($this->properties['available'] > 0){
            $this->properties['available'] -=1;
            echo "Congratulations You get a copy <br>";
            echo "Available copies = $this->available <br>";
        }else{
            echo " No copy Available <br>";
        }
    }

    public function addCopy($num) {
        if (isset($this->properties['available']) && $num > 0) {
            $this->properties['available'] += $num;
            return true;
        }
        return false;
    }

    public function __toString() {
        return "Book => ISBN: {$this -> isbn}  ||  Title: {$this->title}  ||  Author: {$this->author}  ||  Available: {$this->available} ";
    }
}


?>