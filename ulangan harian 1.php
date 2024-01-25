<?php
function absen($noabsen, $kondisiterminasi, $absen1, $absen2, $absen3, $absen4, $absen5, $absen6, $absen7){

    for($noabsen; $noabsen <= $kondisiterminasi; $noabsen++){
        if($noabsen == $absen1 || $noabsen == $absen2 || $noabsen == $absen3){
            echo "peserta didik no absen - $noabsen tidak hadir <br/>";
        }else if($noabsen == $absen4 || $noabsen == $absen5){
            echo "peserta didik no absen - $noabsen terlambat <br/>";
        }else if($noabsen == $absen6 || $noabsen == $absen7){
            echo "peserta didik no absen - $noabsen sakit <br/>";
        }else{
            echo "peserta didik no absen - $noabsen hadir <br/>";
        }

        
    }
}
echo absen(1,15,2,3,10,6,8,9,13)

?>