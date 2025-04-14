<template>

    <v-snackbar v-model="snackbar" :timeout="timeout">
        {{ message + ' (' + status + ')' }}

        <template v-slot:actions>
            <v-btn color="blue" variant="text" @click="snackbar = false">
                Schließen
            </v-btn>
        </template>
    </v-snackbar>
</template>


<script>
export default {
    props: ['status', 'message', 'timeout'],

    data() {
        return {
            snackbar: true,
        };
    },

}
</script>
