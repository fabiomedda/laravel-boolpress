<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box" v-for="tag in tags" :key="tag.id">
                    <div class="card-header">
                        {{tag.name}}
                    </div>

                    <div class="card-body">
                        {{tag.description}}
                    </div>

                    <div class="card-footer">
                        {{tag.created_at}}
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
                tags: "",
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/tags').then(response => {
                console.log(response.data.data);
                this.tags = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
