<?php

class Test {
    public function greet($name): void{
        echo "Hello $name";
    }
}
$instance = new Test();
$instance->greet("Dana");

