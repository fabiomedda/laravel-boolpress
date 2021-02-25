<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box" v-for="article in articles" :key="article.id">
                    <div class="card-header">
                        {{article.title}}
                    </div>

                    <div class="card-body">
                        {{article.body}}
                    </div>

                    <div class="card-footer">
                        {{article.created_at}}
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
                articles: "",
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/articles').then(response => {
                console.log(response.data.data);
                this.articles = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
