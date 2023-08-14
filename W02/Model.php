<?php

namespace P3;

class Model
{
    public function calculateSalary(int $brut, int $costs): int{
        return $brut - $costs;
    }
}