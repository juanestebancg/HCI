/*Esta funcion permite obtener el valor del select de html(onchange)*/
var arrayElements = [];
function getValueType (paellaType){
	this.paellaType = paellaType;
	arrayElements.push(this.paellaType);
}


var temp = [];
function buildPaella(){
	for(var i = 0; i < arrayElements.length;i++){
		//var factory = executeFactory(this.paellaType.value);
		//var paellaProduct = generatePaella(factory.type);
		var factory = executeFactory(arrayElements[i].value);
		var paellaProduct = generatePaella(factory.type)
		temp.push(paellaProduct);
	}

	
	var carro = new buildShoppingCar(temp);
	var base = produceBase();
	console.log(paellaProduct);
	var lol = executeSingleton();
	console.log(carro);
	console.log(lol);
	console.log(base);
}

var res ;
function getValuePrice(paellaPrice){
	this.paellaPrice = paellaPrice;
	console.log(paellaPrice.value)
	var valpaella = parseInt(paellaPrice.value,10);
	console.log(valpaella*0.19);
	var paellaIva =  valpaella- (valpaella*0.19) ;
	console.log(paellaIva);


	res =  paellaPrice.value;
}

function getValueCoin(valueCoin){
	this.valueCoin = valueCoin
	if(valueCoin.value == "dolar"){
		var j = calculatePaellaPrice(res);
		console.log(j);
	}
	else if(valueCoin.value == "euro"){
		console.log(calculatePaellaPriceEuro(res));
	}
}