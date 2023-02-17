<?php 

function getProducts($invoice) {
    
    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/invoice/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$invoice);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;
    
}

function getProduct($id) {
    
    $cURLConnection = curl_init();
    $apiUrl = 'https://corp-search.synergy.ru/api/entity/product/';

    curl_setopt($cURLConnection, CURLOPT_URL, $apiUrl.$id);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($result);

    return $jsonArrayResponse;
    
}

function priceFormat($price) {
	return number_format($price, 0, '', ' ');
}

function dateFormat($date) {
	$months = [
		"01" => "января",
		"02" => "февраля",
		"03" => "марта",
		"04" => "апреля",
		"05" => "мая",
		"06" => "июня",
		"07" => "июля",
		"08" => "августа",
		"09" => "сентября",
		"10" => "октября",
		"11" => "ноября",
		"12" => "декабря"
	];
	$mouth = date("m", strtotime($date));

	return 'C ' . date("d", strtotime($date)) . ' ' . $months[$mouth];
}

function getCurrPrice($row) {
	$n = -1;
	if (is_array($row)) {
		foreach ($row as $price) {
            
			if (time() >= strtotime($price->active_from)) {
				$n++;
			}
		}
	}
	return $n;
}

$invoice = getProducts($invoiceId);

try {
    
    if($invoice->products != null) {
        
        foreach($invoice->products as $row) {
            
            $num = getCurrPrice($row->additional_prices);
            
            switch($row->id) {

                case $product_month1:
                    $month1_isActive = $row->active;
                    $month1_price    = $row->base_price->price;
                    
                    $month1_price_next           = $row->additional_prices[$num]->price;
                    $month1_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $month1_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;
                    
                case $product_month3:
                    $month3_isActive = $row->active;
                    $month3_price    = $row->base_price->price;
                    
                    $month3_price_next           = $row->additional_prices[$num]->price;
                    $month3_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $month3_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;

                case $product_test:
                    $test_isActive = $row->active;
                    $test_price    = $row->base_price->price;
                    
                    $test_price_next           = $row->additional_prices[$num]->price;
                    $test_price_next_ishidden  = $row->additional_prices[$num]->hide;
                    $test_price_increasing_day = dateFormat($row->additional_prices[$num]->active_from);
                break;
            }
            
        }
        
        
    }
    
} catch (Exception $e) {
    
}


?>
