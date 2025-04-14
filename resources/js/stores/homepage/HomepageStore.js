import { defineStore } from 'pinia'

export const useHomepageStore = defineStore("HomepageStore", {

    state: () => {
        return {


        }
    },

    actions: {
        async getConfig() {
            try {
                const response = await axios.get("/api/teacher/config", {});
                this.config = response.data;
                this.auth = response.data.auth;
                this.user = response.data.user;
            } catch (error) {
                throw error;
            }
        },



    }
})

