<?php

require_once 'Vehicle.php';

class Trucks extends Vehicle
{
    private int $capacity;
    private int $charging = 0;

    public function __construct(string $color, int $nbSeats, int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity = $capacity;
        $this->energy = $energy;
    }

    public function isFilling(int $charging): string|null
    {
        if ($charging < 100) {
            $charging = 'in filling';
        } else {
            return $charging = 'full';
        }
    }
}
