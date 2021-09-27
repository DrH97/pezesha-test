<template>

    <div class="row">
        <div class="col-12 col-md-4 col-sm-6 mb-3" v-for="item in data" :key="item.id">
            <div class="card">
                <div class="card-header">
                    {{ item.name }}
                </div>

                <div class="card-body">
                    <div class="c-avatar text-center">
                        <img :src="item.thumbnail.path" class="c-avatar-img" alt="" width="150px">
                    </div>
                </div>

                <div class="card-footer">
                    {{ item.description }}
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'Component1',
    data() {
        return {
            characters: [
                {
                    "id": 1011334,
                    "name": "3-D Man",
                    "description": "",
                    "thumbnail": {
                        "path": "http://i.annihil.us/u/prod/marvel/i/mg/c/e0/535fecbbb9784",
                        "extension": "jpg"
                    },
                },
                {
                    "id": 1017100,
                    "name": "A-Bomb (HAS)",
                    "description": "Rick Jones has been Hulk's best bud since day one, but now he's more than a friend...he's a teammate! Transformed by a Gamma energy explosion, A-Bomb's thick, armored skin is just as strong and powerful as it is blue. And when he curls into action, he uses it like a giant bowling ball of destruction! ",
                    "thumbnail": {
                        "path": "http://i.annihil.us/u/prod/marvel/i/mg/3/20/5232158de5b16",
                        "extension": "jpg"
                    }
                },
                {
                    "id": 1009144,
                    "name": "A.I.M.",
                    "description": "AIM is a terrorist organization bent on destroying the world.",
                    "thumbnail": {
                        "path": "http://i.annihil.us/u/prod/marvel/i/mg/6/20/52602f21f29ec",
                        "extension": "jpg"
                    },
                },
                {
                    "id": 1010699,
                    "name": "Aaron Stack",
                    "description": "",
                    "thumbnail": {
                        "path": "http://i.annihil.us/u/prod/marvel/i/mg/b/40/image_not_available",
                        "extension": "jpg"
                    },
                },
            ]
        }
    },
    computed: {
        data() {
            return this.characters.map(item => {
                let {id, name, description, thumbnail} = item

                return {id, name, description, thumbnail}
            })
        }
    },
    mounted() {

        axios.get('characters?apikey=89abbb451da8bbdbecbc2bac41a3ef73')
            .then(val => {
                this.characters = val.data.results
            }).catch(err => {
            console.log(err)
        })
    }
}
</script>
