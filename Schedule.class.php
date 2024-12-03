<?php
require_once "Hour.class.php";

class Schedule{
    private array $schedule = []; // Inicializace prázdného pole

    // Přidání hodiny do rozvrhu
    public function addHour(Hour $hour){
        $this->schedule[] = $hour;
    }

    public function getClass(int $day, int $rank): ?array {
        $returnedHours = array_filter($this->schedule, function($hour) use ($day, $rank) {
            return $hour->day === $day && $hour->rank === $rank;
        });
        return empty($returnedHours) ? null : array_values($returnedHours);
    }
}