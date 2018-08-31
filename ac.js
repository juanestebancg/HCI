

function to_string(e){
	return e + "";
}

function edad(){
	var e = prompt("ingrese la edad");
	d = e*365;
	if(e%2 == 0){
		return to_string(e)


	}
	else{
		var arr =[e,d];
		return arr

	}

}

console.log(edad());
