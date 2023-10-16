<?php 
class Customer {
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($id, $firstName, $lastName, $email) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString() {
        return "ID: {$this->id}, Name: {$this->firstName} {$this->lastName}, Email: {$this->email}";
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