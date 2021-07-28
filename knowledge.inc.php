<?php
    $a = 'Моя цель овладеть знаниями на';
    $b = 100;
    $c = '%'; 
?>

<?php 
    $level = 8;
    $max_evel = 60;
    $d = null; // что бы не выдавалось предупреждений
    if($level >= 1 && $level <= $max_evel)
        $d = "Мой уровень находится между 1 и $max_evel и изучено $level из $max_evel = " . sprintf("%0.1f%%", $level / $max_evel * 100);
?>