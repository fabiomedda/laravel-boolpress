<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box" v-for="category in categories" :key="category.id">
                    <div class="card-header">
                        {{category.name}}
                    </div>

                    <div class="card-body">
                        {{category.description}}
                    </div>

                    <div class="card-footer">
                        {{category.created_at}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                categories: "",
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/categories').then(response => {
                console.log(response.data.data);
                this.categories = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
