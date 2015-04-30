var added = [];

function clearFields() {
	document.getElementById( "invited" ).value = "";
}

function stringInAdded( string ) {
	for ( var i = 0; i < added.length; i++ ) {
		if ( string.localeCompare( added[ i ]) == 0 ) {
			return true;
		}
	}
	return false;
}

function inviteFriend() {
	var index = document.getElementById( "friends-list" ).options.selectedIndex;
	var invited = document.getElementById( "invited" ).value;
	var friend = document.getElementById( "friends-list" ).options[ index ].text;
	
	if ( ! stringInAdded( friend ) ) {
		added[ added.length ] = friend;

		if ( invited == "" ) {
			invited = friend;
		
		} else {
			invited += ", " + friend;
		}

		document.getElementById( "invited" ).value = invited;
		document.getElementById("already-added").innerHTML = "";

	} else {
		document.getElementById("already-added").innerHTML = friend + " is already in the list.";
	}

	
}

function clearFriends() {
	document.getElementById( "invited" ).value = "";
	document.getElementById("already-added").innerHTML = "";
	added = [];

}
