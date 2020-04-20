<?php
  $totalDataUrl = "https://docs.google.com/spreadsheets/d/e/2PACX-1vT9DVHhCwoQUBg4xgbQvueBRJY9G-65lHIKm7dtftQ6pYPOlR-bf_l-nhiLMor_xcHiLX6oMTpNAgdo/pub?gid=632387462&single=true&output=csv";
  $rowCount = 0;
  $handletotalData = fopen($totalDataUrl, "r");
  
  while (($row = fgetcsv($handletotalData, 0, ",")) !== FALSE)
  {
    $rowCount++;
    if ($rowCount == 1) { continue; } // skip the first/header row of the CSV

    $i = 0;
    $totalpositif = $row[$i++];
    $totalodp = $row[$i++];
    $totalpdp = $row[$i++];
    $totaldirawat = $row[$i++];
    $totalsembuh = $row[$i++];
    $totalmeninggal = $row[$i++];
  } // end while, loop through CSV data
  fclose($handletotalData);
?>