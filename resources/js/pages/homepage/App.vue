<template>

    <v-app>
        <v-layout>
            <v-main>
                <router-view></router-view>
            </v-main>


        </v-layout>
    </v-app>

</template>

<script>
import { mapWritableState } from "pinia";

export default {

    components: {},

    async beforeMount() {

    },

    unmounted() {
    },

    data() {
        return {
        };
    },

    computed: {

    },

    methods: {

    }

}
</script>
