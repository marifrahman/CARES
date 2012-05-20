<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function lock_to_YN($val)
    {
        if($val==0) return "No";
        else
        return "Yes";
    }
    
 function formatdate($val)   
 {
     return date('m/d/Y g:i:s a', strtotime($val));
 }
 
 //ardd = ALD+RDD-RLD+7
 function calc_ardd($ald,$rdd,$rld){
     $ardd = date($ald)+ date($rdd) - date($rld);
     $ardd = strtotime(" +7 days", $ardd);
     return date('d/m/Y', $ardd);
 }


?>
