<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay{
    private array $currentVehicles;
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle(object $vehicle): void
    {
        if($vehicle instanceof Skateboard or $vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle ;
        }
    }
    
}