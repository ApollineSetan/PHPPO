<?php 
class ProjectileMagique implements InterfaceArme {
    public function afficher():void {
        echo "<p> J'utilise la magie</p>";
    }
    public function attaquer():void {
        echo "<p> J'inflige des dégâts avec ma magie</p>";
    }
}