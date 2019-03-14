<template>
    <div>
        <h2>Tracking</h2>

        <div class="card card-body" v-for="tracking in trackings" v-bind:key="tracking.id">
            <p>{{ tracking.reference_code }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                trackings: [],
                tracking: {
                    reference_ode: ''
                }
            }
        },

        created() {
            this.fetchTracking();
        },

        methods: {
            fetchTracking() {
                fetch('api/backend/tracking')
                    .then(res => res.json())
                    .then(res => {
                        this.trackings = res.data;
                    })
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
