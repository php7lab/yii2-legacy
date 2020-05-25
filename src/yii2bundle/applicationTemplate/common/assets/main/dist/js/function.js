
function is_array(mixed_var) {	// Finds whether a variable is an array
	//
	// +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: Legaev Andrey
	// +   bugfixed by: Cord
	
	return (mixed_var instanceof Array);
}

function empty(mixed_var) {	// Determine whether a variable is empty
	//
	// +   original by: Philippe Baumann
	
	return (typeof mixed_var === 'undefined' || mixed_var === "" || mixed_var === 0 || mixed_var === "0" || mixed_var === null || mixed_var === false || (is_array(mixed_var) && mixed_var.length === 0));
}

function trim( str, charlist ) {	// Strip whitespace (or other characters) from the beginning and end of a string
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: mdsjack (http://www.mdsjack.bo.it)
    // +   improved by: Alexander Ermolaev (http://snippets.dzone.com/user/AlexanderErmolaev)
    // +	  input by: Erkekjetter
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

    charlist = !charlist ? ' \s\xA0' : charlist.replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g, '\$1');
    var re = new RegExp('^[' + charlist + ']+|[' + charlist + ']+$', 'g');
    return str.replace(re, '');
}

function is_array( mixed_var ) {	// Finds whether a variable is an array
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: Legaev Andrey
    // +   bugfixed by: Cord

    return ( mixed_var instanceof Array );
}

function is_null( mixed_var ){	// Finds whether a variable is NULL
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

    return ( mixed_var === null );
}

function is_numeric( mixed_var ) {	// Finds whether a variable is a number or a numeric string
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: David

    return !isNaN( mixed_var );
}

function is_object( mixed_var ){	// Finds whether a variable is an object
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: Legaev Andrey
    // +   improved by: Michael White (http://crestidg.com)

    if(mixed_var instanceof Array) {
        return false;
    } else {
        return (mixed_var !== null) && (typeof( mixed_var ) == 'object');
    }
}

function is_string( mixed_var ){	// Find whether the type of a variable is string
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

    return (typeof( mixed_var ) == 'string');
}


function convertFromHex(hex) {
    var hex = hex.toString();//force conversion
    var str = '';
    for (var i = 0; i < hex.length; i += 2)
        str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    return str;
}

function convertToHex(str) {
    var hex = '';
    for(var i=0;i<str.length;i++) {
        hex += ''+str.charCodeAt(i).toString(16);
    }
    return hex;
}