<?php
function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d',$date)->format($date_format);
}
function allUpper($str)
{
    return strtoupper($str);
}

function getName($str)
{
    return 'Mr-'.$str;
}


?>