<template>

    <div class="row my-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Upload File
                </div>

                <div class="card-body">
                    <div class="large-12 medium-12 small-12 cell">
                        <label>File
                            <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>
                        </label>
                        <button v-on:click="submitFile()" :disabled="!file">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


</template>

<script>
export default {
    name: 'Component2',
    data() {
        return {
            file: ''
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        handleFileUpload() {
            this.file = this.$refs.file.files[0];
        },

        submitFile() {
            let formData = new FormData();

            formData.append('file', this.file);

            axios.post('file-upload',
                formData,
                {
                    baseURL: window.location.origin + '/api/v1/',
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    }
                }
            ).then(function (v) {
                console.log('SUCCESS!!', v);
            })
                .catch(function (e) {
                    console.log('FAILURE!!', e);
                });
        },
    }
}
</script>
