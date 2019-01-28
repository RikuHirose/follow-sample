<template>
    <div>
        <button v-if="!followed" type="button" class="btn btn-primary" @click="postFollow()">Followする</button>
        <button v-else type="button" class="btn btn-primary" @click="postUnFollow()">Follow解除</button>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                followed: false
            }
        },
        methods: {
            postFollow(){
                let url = `/api/users/${this.user.id}/follow`

                axios.post(url)
                    .then(res => {
                        this.followed = true
                    })
                    .catch(err => {})
            },
            postUnFollow(){
                let url = `/api/users/${this.user.id}/unfollow`

                axios.post(url)
                    .then(res => {
                        this.followed = false
                    })
                    .catch(err => {})
            }
        }

    }
</script>
