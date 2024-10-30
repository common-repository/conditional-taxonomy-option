(function($){
	var parseString = function( val ){
		return val ? '' + val : '';
	};
	
	var isEqualTo = function( v1, v2 ){
		return ( parseString(v1).toLowerCase() === parseString(v2).toLowerCase() );
	};
	
	
	
	var inArray = function( v1, array ){
		
		// cast all values as string
		array = array.map(function(v2){
			return parseString(v2);
		});
		
		return (array.indexOf( v1 ) > -1);
	}
	

	// Add New option in dropdown options to compare when taxonomy is slected in conditional rule
	var TaxonomyEqualTo = acf.Condition.extend({
		type: 'taxonomyEqualTo',
		operator: '==',
		label: ('Taxonomy is equal to'),
		fieldTypes: [ 'taxonomy' ],
		match: function( rule, field ){
			var val = field.val();
			if( val instanceof Array ) {
				return inArray( rule.value, val );
			} else {
				return isEqualTo( rule.value, val );
			}
		},
		choices: function( fieldObject ){
			var choicesaa = [];
			jQuery.ajax({
						 type : "post",
						 dataType : "json",
						 url : acf.get('ajaxurl'),
						 async: false,
						 data : {action:'load_taxonomy_term_choices',taxonomy:fieldObject.$setting('taxonomy select').val()},
						 success: function(response) {
							 $.each(response, function(i, item) {
								 choicesaa.push({
										id: i,
										text: (item)
									});
								 })
						}
					  });
					return choicesaa;
		},
	});

	acf.registerConditionType( TaxonomyEqualTo );
	var TaxonomyNotEqualTo = TaxonomyEqualTo.extend({
		type: 'taxonomyNotEqualTo',
		operator: '!=',
		label: ('Taxonomy is not equal to'),
		match: function( rule, field ){
			return !TaxonomyEqualTo.prototype.match.apply(this, arguments);
		}
	});
	acf.registerConditionType(TaxonomyNotEqualTo);

})(jQuery);
