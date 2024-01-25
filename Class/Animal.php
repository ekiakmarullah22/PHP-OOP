<?php

class Animal {
    protected string $name;
    protected int $legs;
    protected bool $cold_blooded;

    public function setName($name)  {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setLegs($legs) {
        $this->legs = $legs;
    }

    public function getLegs() {
        return $this->legs;
    }

    public function setColdBlooded($cold_blooded) {
        $this->cold_blooded = $cold_blooded;
    }

    public function getColdBlooded() {
        if(!$this->cold_blooded) {
            return "no";
        } else {
            return "yes";
        }
    }
}

class Ape extends Animal {
    public function yell(): string {
        return "Auoooo";
    }
}

class Frog extends Animal {
    public function jump(): string {
        return "Hop hop hop";
    }
}