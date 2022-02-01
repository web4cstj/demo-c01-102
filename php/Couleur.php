<?php
class Couleur {
    static public $nbCouleurs = 100;
    static public function rgb($r, $g, $b, $a = 1) {
        $resultat = "rgba($r, $g, $b, $a)";
        return $resultat;
    }
    static public function rgbAlea($alphaAlea = false) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        if ($alphaAlea === true) {
            $a = rand(0, 10) / 10;
        } else {
            $a = 1;
        }
        $resultat = self::rgb($r, $g, $b, $a);
        return $resultat;
    }
    static public function degradeAlea() {
        $couleurs = [];
        for ($i = 0; $i < self::$nbCouleurs; $i += 1) {
            $couleurs[] = self::rgbAlea(true);
        }
        $couleurs = implode(",", $couleurs);
        $angle = rand(0, 359);
        $resultat = "linear-gradient({$angle}deg, $couleurs)";
        return $resultat;
    }
}