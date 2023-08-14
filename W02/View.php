<?php

namespace P3;

class View
{
    public function output($str):string{
        return "<p>Salariu net: $str</p>";
    }
}