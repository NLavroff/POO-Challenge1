<?php

class Bicycle
    {
        private string $color;
        private int $currentSpeed;
        private int $nbSeats;
        private int $nbWheels;
    
        public function __construct(string $color)
        {
            $this->color = $color;
        }
        public function forward(): string
        {
            $this->currentSpeed = 20;

            return "Go !";
        }
        public function brake(): string
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }

            $sentence .= "I'm stopped !";
            return $sentence;
        }
        public function getColor(): string
        {
            return $this->color;
        }
        public function setColor(string $color): void
        {
            $this->color = $color;
        }
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }
        public function setCurrentSpeed(int $currentSpeed): void
        {
            $this->currentSpeed = $currentSpeed;
        }
    }
    ?>