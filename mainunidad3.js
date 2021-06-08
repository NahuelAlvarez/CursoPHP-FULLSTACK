

const EDAD = 18;

let url = window.location.search;


let urlParams = new URLSearchParams(url);

const
  keys = urlParams.keys(),
  values = urlParams.values(),
  entries = urlParams.entries();

var lista = new Map();



for(const valores of values) {
   if(valores>=EDAD){
     lista.set( valores, " es mayor de edad");
   }
}

for(const [clave,valor] of lista){
  alert(clave + " " +valor);
}

