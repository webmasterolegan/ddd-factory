<script setup>
import { ref, reactive, computed } from 'vue'


const bid = reactive({
    name: '',
    telephone: '',
    text: '',
})

const bidIsCreating = ref(false)

const validate = computed(() =>
    bid.name.trim().length > 0 &&
    bid.telephone.trim().length > 0 &&
    bid.text.trim().length > 0
)

function createNewBid() {
    if (!validate.value || bidIsCreating.value) return

    bidIsCreating.value = true

    window.axios.post('/api/bid', bid)
        .then(function (response) {
            if (!response?.data?.success) return

            bid.name = ''
            bid.telephone = ''
            bid.text = ''

            bidIsCreating.value = false

            console.log(response.data.success)
        })
        .catch(function (error) {
            bidIsCreating.value = false
            console.log(error)
        })
}
</script>

<template>
    <form :class=$style.form>
        <label>Имя:</label>
        <input type=text placeholder="Введите имя..." v-model=bid.name>

        <label>Телефон:</label>
        <input type=text placeholder="Введите номер телефона..." v-model=bid.telephone>

        <label>Обращение:</label>
        <input type=text placeholder="Введите текст заявки..." v-model=bid.text>

        <button type=button :disabled="!validate || bidIsCreating" @click=createNewBid>{{ bidIsCreating ? 'Отправка...' : 'Сохранить' }}</button>
    </form>
</template>

<style module lang="scss">
.form {
    display: flex;
    flex-direction: column;
    padding: 16px;
    max-width: 640px;
    margin: 0 auto;
    border-radius: 8px;
    box-shadow: 4px 4px 32px #0000005b;

    input,
    button {
        padding: 8px;
        border-radius: 4px;
        border: solid 1px;
    }

    input {
        margin-top: 4px;
        margin-bottom: 16px;
    }

    button {
        margin-top: 16px;
        font-size: 24px;
        color: #fff;
        border: none;
        background-color: #008a00;
        box-shadow: 0 0 8px #0000005b;
        cursor: pointer;
        transition: all ease-in .1s;

        &:disabled {
            background-color: #d4d4d4;
            box-shadow: none;
            cursor: not-allowed;
        }
    }
}
</style>