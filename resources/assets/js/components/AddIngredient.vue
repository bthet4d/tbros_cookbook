<template>
    <div>
        
    
        <div>
            <input type="text" name="ingName" v-model="name" placeholder="Name"> 
            
            <input type="text" name="ingAmount"  v-model="amount" placeholder="Amount"> 

            <input type="text" name="ingNotes"  v-model="notes" placeholder="Notes"> 

            <button type="button" v-on:click="addIngredient">Add Ingredient</button>

        </div>
        <div>
            <h2>Ingredient List:</h2>
            <ul id="ingredientsList" v-for="ing in ingredients">
                <li>{{ing.amount + ' ' + ing.name + ' - ' + ing.notes}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['ingredients'],
        mounted() {
            console.log('Add ingredient mounted.');
            console.log(this.ingredients);
        },
        
        data: function(){
            return {
                name: '',
                amount: '',
                notes: '',
            }
            
        },
        methods: {
            addIngredient(){
                console.log('adding ingredient');
                var ingObj = {
                    name: this.name,
                    amount: this.amount,
                    notes: this.notes
                }
                this.ingredients.push(ingObj);
                console.log(this.ingredients);
                this.name = '';
                this.amount = '';
                this.notes = '';

            }
        }
    }
</script>