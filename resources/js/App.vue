<template>
    <div id="app">
        <router-view/>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters([
            'isLogged'
        ])
    },
    mounted() {
        if (!this.isLogged) {
            this.$router.push('/login');
        }
    }
}
</script>
