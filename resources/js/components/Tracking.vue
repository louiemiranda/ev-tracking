<template>
    <div>
        <h2>Tracking</h2>

        <div class="form-group">
            <label for="exampleInputEmail1">Search</label>
            <input v-model="tracking_code" placeholder="Tracking Code" />
            <button v-on:click="fetchTracking(tracking_code)">search</button>
        </div>

        <div class="card card-body mb-2">
            <p>#{{ tracking_code }} will be delivered on {{ delivery_date }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                trackings: [],
                tracking_code: '',
                delivery_date: ''
            }
        },

        methods: {
            fetchTracking(tracking_code) {
                fetch('api/backend/tracking/' + tracking_code)
                    .then(res => res.json())
                    .then(res => {
                        console.log(res.data)
                        this.delivery_date = res.data.delivery_date
                    })
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
