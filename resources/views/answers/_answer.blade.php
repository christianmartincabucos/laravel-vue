<answer :answer="{{ $answer }}" inline-template>
    <div class="media  post">
        <vote :model="{{ $answer }}" name="answer"></vote>
        <div class="media-body">
            <form v-if="editing" @submit.prevent="Update">
                <div class="form-group">
                    <textarea rows="10" v-model="body" class="form-control" required></textarea>
                </div>
                <button class="btn btn-outline-primary btn-sm" :disabled="isInvalid">Update</button>
                <button type="button" @click="Cancel" class="btn btn-outline-secondary btn-sm">Cancel</button>
            </form>
            <div v-else>
                <div v-html="bodyHtml"></div>
                <div clas="row">
                    <div class="col-sm-4">
                        <div class="ml-auto">
                            @can('update', $answer)
                            <a @click.prevent="Edit" class="btn btn-sm btn-outline-info">Edit</a>
                            @endcan

                            @can('delete', $answer)
                            <button @click.prevent="Destroy" class="btn btn-sm btn-outline-danger">Delete</button>
                            @endcan
                        </div>
                    </div>

                </div>
                <div class="float-right">
                    <user-info :model="{{$answer}}" label="Answered"></user-info>
                </div>
            </div>
        </div>
    </div>

</answer>
