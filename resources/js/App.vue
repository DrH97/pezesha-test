<template>

    <div class="container">

        <div class="row">
            <div class="col">
                <router-link to="/"><h1>Marvel Characters</h1></router-link>
            </div>
            <div class="col">
                <router-link to="/file-upload"><h1>File Upload</h1></router-link>
            </div>
        </div>

        <router-view></router-view>

    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style lang="scss">
@import 'assets/scss/style';
</style>
