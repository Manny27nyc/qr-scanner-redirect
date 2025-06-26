/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Coded By : aigenseer
 * Copyright 2019, https://github.com/aigenseer
 */
global $qsr_pluginsettings;
$qsr_pluginsettings->fetchPost('settings');
$formvalues = $qsr_pluginsettings->getAll('settings');
require 'pluginsettingsform.php';
 ?>
