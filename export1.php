<?php
$connection=mysqli_connect("localhost","root","","inventory");

	if (!$connection) {
		die("Failed connecting to MySQL: " . mysqli_connect_error());
	}

	if (isset($_GET['export'])) {
		if ($_GET['export'] == 'true') {
			$view_querys = mysqli_query($connection,"SELECT * FROM tbl_items");

			$delimiter = ",";
			$filename = "items_" . date('Ymd') . ".csv"; //create file name

			//create file pointer
			$f = fopen('php://memory', 'w');

			//set column header
			$fields = array('PRODUCT_CODE','PRODUCT_NAME','PRODUCT_COLOR','PRODUCT_SIZE','PRODUCT_PRICE','START_QUAN','END_QUAN','SUPPLIER_CODE','INVENTORY','LIMIT');
			fputcsv($f, $fields, $delimiter);

			//output each row of the data, format line as csv and write to file pointer
			while ($rowsa = $view_querys->fetch_assoc()) {
				$linedata = array($rowsa['product_code'].$rowsa['product_name'], $rowsa['product_color'], $rowsa['product_size'], $rowsa['product_price'], $rowsa['start_quan'], $rowsa['end_quan'], $rowsa['inventory'], $rowsa['supplier_code']);
				fputcsv($f, $linedata, $delimiter);
			}
				//move back to beginning of file
				fseek($f, 0);

				//set headers to download file rather than displayed
				header('Content-Type: text/csv');
				header('Content-Disposition: attachment; filename="' . $filename . '";');

				//output all remaining data on a file pointer
				fpassthru($f);
			
		}
	}
?>