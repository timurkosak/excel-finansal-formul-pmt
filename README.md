# excel-finansal-formul-pmt
excel finansal formül pmt, excel pmt, excel pmt js, javascript pmt

Excel finansal formül aylık taksit tutarını hesaplamanızı sağlıyacak olan javascript funksiyonudur.

```php

function pmt(faiz, vergi_orani, taksit_sayisi, kredi_tutari) {
  var faiz_orani = faiz / 100 * (1 + vergi_orani / 100);
  return faiz_orani * -kredi_tutari * Math.pow((1 + faiz_orani), taksit_sayisi) / (1 - Math.pow((1 + faiz_orani), taksit_sayisi));
}
  
 ```
 
 örnek kod
```php
  
var faiz_orani      = parseFloat('0.93');
var vergi_orani     = 18;
var taksit_sayisi   = 24;
var kredi_tutari    = 60000;
	
var taksit_tutari   = pmt(faiz_orani, vergi_orani, taksit_sayisi, kredi_tutari);
	
console.log(taksit_tutari);
  
```
