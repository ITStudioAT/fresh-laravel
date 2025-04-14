<template>
    <v-container fluid class="h-100 w-100 d-flex align-center justify-center">
        <v-card class="mx-auto" width="300">
            <v-img height="80px" :src="'/storage/images/' + config.logo"></v-img>
            <v-card-subtitle>
                {{ config.version }}
            </v-card-subtitle>
            <v-card-title>
                Admin Login
            </v-card-title>
            <v-card-text>

            </v-card-text>


        </v-card>
    </v-container>
</template>
<script>
import { mapWritableState } from "pinia";
import { useAdminStore } from "@/stores/admin/AdminStore";
export default {

    components: {},

    async beforeMount() {
        this.adminStore = useAdminStore();
    },

    unmounted() {
    },

    data() {
        return {
            adminStore: null,
        };
    },

    computed: {
        ...mapWritableState(useAdminStore, ['config', 'is_loading', 'error']),

    },

    methods: {

    }

}
</script>