//Admission Engine
//Takes e-Note and creates diagnosis based on values

function eNoteTextProcessor (eText, mewsScore) {
    console.log("Running with :" +eText+ " and "+ mewsScore);
    var admissionProbability;
	eText = eText.toUpperCase();
    //come up with a clever way of utlizing search strings
	
    if(eText.includes("MEDICALLY EXPECTED")) {
        admissionProbability=100;
        return admissionProbability;
    }
    if(eText.includes("AAA")) {
        admissionProbability=100;
        return admissionProbability;
    }
    else {
    switch (+mewsScore) {
    case 11:
        admissionProbability = 100;
        break;
    case 10:
         admissionProbability = 100;
        break;
    case 9:
        admissionProbability = 63;
        break;
    case 8:
        admissionProbability = 69;
        break;
    case 7:
        admissionProbability = 71;
        break;
    case 6:
        admissionProbability = 63;
        break;
    case 5:
        admissionProbability = 44;
        break;
    case 4:
        admissionProbability = 45;
        break;
    case 3:
        admissionProbability = 38;
        break;
    case 2:
        admissionProbability = 34;
    break;
    case 1:
        admissionProbability = 17;
    break;
    case 0:
        admissionProbability = 21;
    break;
    default:
    admissionProbability = 21;
    break;
    }    
    return admissionProbability;
    }
}