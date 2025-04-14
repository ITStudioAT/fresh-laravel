import { defineStore } from 'pinia'

export const useHomepageStore = defineStore("HomepageStore", {

    state: () => {
        return {
            router: null,
            config: null,
            is_loading: 0,
            error: {
                is_error: false,
                status: null,
                message: null,
                timeout: 3000,
            }

        }
    },

    actions: {
        initialize(router) {
            this.router = router;
        },

        async config(router) {
            this.is_loading++;
            try {
                const response = await axios.get("/api/homepage/config", {});
                this.config = response.data;
            } catch (error) {
                this.router.push({ path: '/homepage/error', query: { status: error.response.status, message: error.response.data.message } });
            } finally {
                this.is_loading--;
            }
        },



    }
})

