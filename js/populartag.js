$(function() {
	"use strict";

	$(document).ready(function(){
			// Allow spaces without quotes tag begins
			    var sampleTags = ['Grill','Chicken', 'Beef', 'prawn'];
			    $("#allowSpacesTags").tagit({
                availableTags: sampleTags,
                allowSpaces: true
            	});
            	var sampleTag = ['Asian','Mexican', 'Italian', 'Chinese'];
			    $("#allowSpacesTag").tagit({
                availableTags: sampleTag,
                allowSpaces: true
            	});
			// Allow spaces without quotes tag ends
		});

});