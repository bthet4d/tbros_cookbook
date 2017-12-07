Vue.config.devtools = true;
window.onload = function(){
	Vue.component('add-direction', {
	template: '<div></div>',
	data: function(){
		return {
			newDirection: '',
			directions: []
		}
	},
	methods: {
		addDirection: function(){
			console.log('adding direction');
		}
	}
});

	

	Vue.component('ingredient-list', {
			template: '<div><ul></ul></div',
			data(){
				console.log('component data');
				console.log(this.$root);
			},
			methods: {
				displayIngredients(){
					console.log('displaying ingredient from component');
					console.log(this);
				}
			},
			mounted: {

			}
			
		});

	Vue.component('ingredient', {
		template: '<li><slot></slot></li>'
	});

	

}




function submitRecipe(){
	//todo verify/validate
}

