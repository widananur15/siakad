<?php 

class CalculateUtil {
	
	public static function calc_tax_and_nett_price(
			       $gross_price,
			       $disc_amount = 0,
			       $flg_include_tax = "Y",
			       $tax_percentage = 10
			   ){
		
		if($flg_include_tax=="Y"){
			$tax_price = ($gross_price - $disc_amount) * $tax_percentage / ( 100 + $tax_percentage);
			$nett_price = $gross_price - $disc_amount - $tax_price;
			
			return [
				"tax_price" => $tax_price,
				"nett_price" => $nett_price		
			];
		} else {
			$nett_price = ($gross_price - $disc_amount);
			$tax_price = $nett_price * $tax_percentage / 100;
			
			return [
					"tax_price" => $tax_price,
					"nett_price" => $nett_price
			];
		}
	}
}