// funkcija formas ģenerēšanai
function genereFormu(){
// izveido formu
var forma=document.createElement("form");
//"paņem" html divīziju pēc id, kurā tiks liktas formas
var div1=document.getElementById("galv_sar");
// html tagā ievieto izveidoto formu
div1.appendChild(forma);
div1.setAttribute("class", "px-5");
// formai pievieno atribūtus
forma.setAttribute("action", "public/labo.php");
forma.setAttribute("method", "post");
forma.setAttribute("class", "mx-auto w-25 pb-3 mt-4 border border-primary");
forma.setAttribute("id", "forma2"+id);
// sākumā ģenerē atstarpi un ieliek formas sākumā
  var atstarpe1=document.createElement("p");
  forma.appendChild(atstarpe1);
//izveido jaunu divīziju, kuru novieto formā - tajā atradīsies pārējie elementi
var div2=document.createElement("div");
var div_get=document.getElementById("forma2"+id);
div_get.appendChild(div2);
//divīzijai atribūtus
div2.setAttribute("class", "form-check");
div2.setAttribute("id", "form-check"+id);
div2.setAttribute("class", " text-center");
//izveido čekboksu
var ceckboks=document.createElement("input");
var ceck2=document.getElementById("form-check"+id);
ceck2.appendChild(ceckboks);
//čekboksam atribūtus
ceckboks.setAttribute("type", "checkbox");
ceckboks.setAttribute("class", "form-check-input");
ceckboks.setAttribute("id", "ceks"+id);
//izveido label tagu priekš čekboksa
var label=document.createElement("label");
div2.appendChild(label);
//pievieno atribūtus
label.setAttribute("class", "form-check-label");
label.setAttribute("for", "ceks");
//izvedo tagu kur būs virsraksts un kurš atradīsies label tagā
var virsr=document.createElement("h5");
label.appendChild(virsr);
//virsrakstam atribūtus
virsr.setAttribute("id", "virsraksts3"+id);
virsr.setAttribute("name", "virsraksts3"+id);
virsr.innerHTML=virsraksts4;
//ieleik virsrakst arī jaunā(neredzamā) input tagā, lai var vēlāk padot no formas.
var virsraksts51=document.createElement("input");
virsraksts51.setAttribute("value", virsraksts4);
virsraksts51.setAttribute("name", "virsraksts");
div2.appendChild(virsraksts51);
virsraksts51.setAttribute("type", "hidden");
//izveido datuma tagu
var dat=document.createElement("p");
div2.appendChild(dat);
dat.setAttribute("id", "datums3");
dat.innerHTML=laiks4;
//un izveido apraksta tagu
var aprakst=document.createElement("p");
aprakst.innerHTML=apraksts4;
div2.appendChild(aprakst);
aprakst.setAttribute("id", "apraksts3"+id);
//ieleik aprakstu arī jaunā(neredzamā) input tagā, lai var vēlāk padot no formas.
var apraksts5=document.createElement("input");
apraksts5.setAttribute("value", apraksts4);
apraksts5.setAttribute("name", "apraksts");
div2.appendChild(apraksts5);
apraksts5.setAttribute("type", "hidden");
//izveido pogu labošanai
var dat=document.createElement("input");
div2.appendChild(dat);
dat.setAttribute("class", "btn btn-primary ");
dat.setAttribute("type", "submit");
dat.setAttribute("name", "labot");
dat.setAttribute("value", "Labot");
//apzīmē id un ieliek formā, bet neredzamu
var id2=document.createElement("input");
id2.setAttribute("value", id);
id2.setAttribute("name", "id");
div2.appendChild(id2);
id2.setAttribute("type", "hidden");
}

//apmēram šāda izskatās uzģenerētā forma
// <form class="border" action="public/labo.php" method="post">
//   <div class="form-check">
//     <input type="checkbox" class="form-check-input" id="ceks">
//
//     <label class="form-check-label" for="ceks"><h5 id="virsraksts2">Te būs virsraksts!</h5></label>
//     <p id="datums2">Te būs datums</p>
//     <p id="apraksts2">Te būs apraksts!</p>
//   <input class="btn btn-primary"  type="submit" name="labot" value="Labot">
//   </div>
//
// </form>
