<template>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Your Answer</h3>
                    </div>
                    <hr>
                    <form @submit.prevent="Create">
                        <div class="form-group">
                            <textarea class="form-control" rows="7" required v-model="body" name="body"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" :disabled="isInvalid" class="btn btn-lig btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['questionId'],

    data(){
        return{
            body:''
        }
    },

    computed:{
        isInvalid(){
            return !this.signedIn || this.body.length < 10;
        }
    },

    methods:{
        Create(){
            axios.post(`/question/${this.questionId}/answer`,{
                body: this.body
            })
            .catch(error=>{
                this.$toast.error(error.response.data.message, "Error");
            })
            .then(({data}) => {
                this.$toast.success(data.message, "Success");
                this.body ='';
                this.$emit('created', data.answer);
            })
        }
    }
}
</script>
