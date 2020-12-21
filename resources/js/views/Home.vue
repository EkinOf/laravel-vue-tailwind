<template>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <router-link class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" to="/">Accueil</router-link>
                    <button type="button" @click="logout()" v-if="isLogged">Déconnexion</button>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters([
            'isLogged'
        ])
    },
    methods: {
        logout () {
            this.$store.dispatch('logout')
        }
    }
}
</script>
