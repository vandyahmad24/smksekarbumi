<?php
   
function customTanggal($waktu){
    
   return Carbon\Carbon::parse($waktu)->translatedFormat('d F Y');  
}
    