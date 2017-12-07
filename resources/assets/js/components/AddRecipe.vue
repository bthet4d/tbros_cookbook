<template>
	<div>
	    <div class="title">Add Recipe</div>
	    <form id="createRecipe" name="createRecipe" @submit.prevent="submitRecipe()" @keydown="form.errors.clear($event.target.name)">

	        <div class="form-group">
	            <div class="row">
	                <input type="text" name="author" v-model="form.author" placeholder="Recipe Author">

	                <span class="danger" v-if="form.errors.has('author')"
	                v-text="form.errors.get('author')">
	                </span>

	                <input type="text" name="title" v-model="form.title" placeholder="Recipe Title">

	                <span class="danger" v-if="form.errors.has('title')"
	                v-text="form.errors.get('title')">
	                </span>
	            </div>
	        </div>

	        <div class="form-group">	        	
	            <div class="row">
	                <addingredient
	                	:ingredients="form.ingredients"
	                >
	                </addingredient>
	            </div>
	            
	        </div>
	        
	        <div class="form-group">
	            <div class="row">
	                
	                
	            </div>
	            
	            
	        </div>
	        
	        <button type="submit" :disabled="form.errors.any()">Create Recipe</button>
	    </form>  

	</div>

</template>

<script>
	import addingredient from './AddIngredient.vue';

	class Errors {
		constructor(){
			this.errors = {};
		}
		has(field){
			var rt = this.errors.hasOwnProperty(field);
			return rt;
		}
		get(field){
			if(this.errors[field]){
				return this.errors[field][0];
			}
		}
		record(errors){
			this.errors = errors;
		}
		clear(field){
			if(field) {
				delete this.errors[field];
				return;
			}
			this.errors = {};
		}
		any(){
			return Object.keys(this.errors).length > 0;
		}
	}

	class Form {
		constructor(data){
			this.originalData = data;
			for(let field in data){
				this[field] = data[field];
			}
			this.errors = new Errors();
		}

		data(){
			let data = {};
			for(let property in this.originalData){
				data[property] = this[property];
			}

			return data;
		}

		reset(){
			for(let field in this.originalData){
				this[field] = '';
			}
			this.errors.clear();
		}
		submit(requestType, url){
			return new Promise((resolve, reject) => {
				axios[requestType](url, this.data())
    				.then(response => {
    					this.onSuccess(response.data);

    					resolve(response.data);
    				})

    				.catch(error => {
    					this.onFail(error.response.data);

    					reject(error.response.data);
    				});
			});
        		
		}

		onSuccess(data){
			console.log('on success');
			alert(data)
			
			this.reset();
		}

		onFail(errors){
			this.errors.record(errors);
		}
	}

	export default {
        mounted() {
        	console.log('Add Recipe mounted');
        	console.log(this.form.ingredients);
        },
        data: function(){
        	return {
        		form: new Form({
        			author: '',
        			title: '',
        			ingredients: []
        		})
        	}
        },
        components: {
        	addingredient
        },
        methods: {
        	submitRecipe(){
        		console.log('submitting recipe');
        		console.log(this.form.ingredients);
        		this.form.submit('post', '/api/createRecipe')
        		.then(data => console.log('data in then' + data))
        		.catch(errors => console.log(errors));
        	}
        }
    }

</script>

