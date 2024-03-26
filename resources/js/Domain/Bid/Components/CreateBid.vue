<script setup>
import { reactive } from 'vue'


const bid = reactive({
    name: '',
    telephone: '',
    text: '',
})

function createNewBid() {
    window.axios.post('/api/bid', bid)
        .then(function (response) {
            console.log(response)
        })
        .catch(function (error) {
            console.log(error)
        })
}
</script>

<template>
    <form @submit.prevent="createNewBid">
        <input type="text" v-model="bid.name">

        <input type="text" v-model="bid.telephone">

        <input type="text" v-model="bid.text">

        <button type=button @click="createNewBid">Отправить заявку</button>
    </form>
</template>