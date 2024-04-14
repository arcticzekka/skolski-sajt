<?php
include "vesti.php";
$slike = new Vesti();
$slikeFr = $slike->returnVest();
$odabirSlike = $slike->odabirSlike();
class VestiContr extends Vesti {

    public function handleSubmit($vest, $opis, $takmicenje) {
        if(empty($vest) || empty($opis)) {
            header("location: ../unosVesti.php?error=emptyInput");
            exit();
        }
        Vesti::inputVest($vest, $opis, $takmicenje);
    }

    public function handleEdit($vest, $novaVest, $novOpisVesti) {
        Vesti::editVest($vest, $novaVest, $novOpisVesti);
    }

    public function handleDelete($vest) {
        Vesti::delVest($vest);
    }

    public function handleSelect($id) {
        return Vesti::selectVest($id);
    }
    public function handleReturnVestiIme($ime){
        return Vesti::returnVestIme($ime);
    }
    public function handleUpdate($fileid, $id){
        Vesti::updateFile($fileid, $id);
    }
}





