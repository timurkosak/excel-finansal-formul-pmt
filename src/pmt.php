
<?PHP
	function pmt($faiz_orani, $vergi_orani, $taksit_sayisi, $kredi_tutari) {
		$faiz_orani 	= $faiz_orani / 100 * (1 + $vergi_orani / 100);
		return 			$faiz_orani * -$kredi_tutari * pow((1 + $faiz_orani), $taksit_sayisi) / (1 - pow((1 + $faiz_orani), $taksit_sayisi));
	}
?>
