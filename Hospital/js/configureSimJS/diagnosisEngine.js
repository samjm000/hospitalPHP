//Diagnosis Engine
//Takes e-Note and creates diagnosis based on values


function calculateDiagnosis (enote) {
	console.log("Calculating diagnosis from this string")
	var diagnosis;
	var searchString = enote.toUpperCase();

	//come up with a clever way of utlizing search strings
	if(searchString.includes("SOB")) {
		diagnosis = "Pneumonia";	
	}

	if(searchString.includes("CHEST PAIN")) 	{
		diagnosis = "Non Specific chest pain";		
	}

	if(searchString.includes("CHEST PAIN")&&searchString.includes("SOB")) 	{
		diagnosis = "NSTEMI";		
	}
	if(searchString.includes("PAIN")&&!searchString.includes("CHEST")) 	{
		diagnosis = "MSK Pain";		
	}

	if(!diagnosis) {
		diagnosis="Unknown";
	}
	return diagnosis;

}