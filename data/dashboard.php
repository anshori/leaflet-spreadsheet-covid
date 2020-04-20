<?php
	$dashboardSpreadsheetUrl = "https://docs.google.com/spreadsheets/d/e/2PACX-1vT9DVHhCwoQUBg4xgbQvueBRJY9G-65lHIKm7dtftQ6pYPOlR-bf_l-nhiLMor_xcHiLX6oMTpNAgdo/pub?gid=0&single=true&output=csv";

	$rowCount = 0;
	$dashboardHandle = fopen($dashboardSpreadsheetUrl, "r");

	//Loop through the CSV rows.
	while (($row = fgetcsv($dashboardHandle, 0, ",")) !== FALSE) {
		$rowCount++;
		if ($rowCount == 1) { continue; } // skip the first/header row of the CSV
	    //Print out my column data.
	  
	  $i = 0;
	  $judul_tab = $row[$i++];
	  $navbar_icon = $row[$i++];
		$judul_navbar = $row[$i++];
		$attribution = $row[$i++];
		$instansi = $row[$i++];
		$email = $row[$i++];
		$telepon = $row[$i++];
		$alamat = $row[$i++];
	}
	fclose($dashboardHandle); // close the CSV file handler
?>