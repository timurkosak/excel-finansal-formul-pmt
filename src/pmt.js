
function pmt(faiz, vergi_orani, taksit_sayisi, kredi_tutari) {
	var faiz_orani 		= faiz / 100 * (1 + vergi_orani / 100);
	return 				faiz_orani * -kredi_tutari * Math.pow((1 + faiz_orani), taksit_sayisi) / (1 - Math.pow((1 + faiz_orani), taksit_sayisi));
}
