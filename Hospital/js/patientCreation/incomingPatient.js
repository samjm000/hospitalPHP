//incoming Patient JS


function patient(age,diagnosis) {

	this.age=0;
	var diagnosis = diagnosisCreator();

	console.log("Patient created with age:"+age+", diagnosis:" +diagnosis);

}
function ageRange(number) {


	if (number<1) {
		console.log("Patient created with random age:"+age);
		//calculate random
	}
	if (number==1) {
		console.log("Patient created with age:"+age+);
		//assign first age range
	}
	if (number==2) {
		console.log("Patient created with age:"+age);
		//assign second age range
	}
	if (number==3) {
		console.log("Patient created with age:"+age);
		//assign third age range
	}
	
}
function patient(age,diagnosis) {

	this.age=0;
	var diagnosis = diagnosisCreator();

	console.log("Patient created with age:"+age+", diagnosis:" +diagnosis);

}

function createRandomPatient() {

	var randomPatient = new patient();
	var age = ageCreator();
	var diagnosis = diagnosisCreator();

	console.log("Patient created with age:"+age+", diagnosis:" +diagnosis);

}

function ageCreator() {

}

function diagnosisCreator() {

}