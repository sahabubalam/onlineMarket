<template>
    
        <div class="form-inline form-group mt-1">
        <div class="col-md-4">
            <select class="form-control" name="category_id" v-model="category" @change="getSubCategories()">
                <option value="">choose category</option>
                <option v-for="data in categories" :value="data.id" :key="data.id">
                    {{data.name}}
                </option>
               
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="subcategory_id" v-model="subcategory" @change="getChildCategories()">
                <option value="">choose subcategory</option>
                <option v-for="data in subcategories" :value="data.id" :key="data.id">
                    {{data.name}}
                </option>

            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="subcategory_id" v-model="childcategory">
                <option value="">choose childcategory</option>
                <option v-for="data in childcategories" :value="data.id" :key="data.id">
                    {{data.name}}
                </option>

            </select>
        </div>
        </div>

    
</template>

<script>
    export default{
        data(){
            return{
                category:0,
                subcategory:0,
                categories:[],
                subcategories:[],
                childcategories:[],
            }
        },
        mounted(){
            this.getCategories();
            this.getSubCategories();
        },
        methods:{
            getCategories(){
                axios.get('/api/category').then((response)=>{
                    this.categories=response.data
                })
            },
            getSubCategories(){
                axios.get('/api/subcategory/',{params:{category_id:this.category}}).then((response)=>{
                    this.subcategories=response.data
                })
            },
            getChildCategories(){
                axios.get('/api/childcategory/',{params:{subcategory_id:this.subcategory}}).then((response)=>{
                    this.childcategories=response.data
                })
            }
        }

    }
</script>