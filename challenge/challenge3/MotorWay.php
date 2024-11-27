<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay {
    private array $currentVehicles;
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(object $vehicle): void
    {
        if($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}