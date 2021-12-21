<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuário</h2>
        </template>

        <div class="py-12">
            <div class="max-w7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <div
                            v-if="errors"
                            v-for="error in errors"
                            :key="error.email">
                                {{ error }}
                        </div>

                        <form @submit.prevent="submit">
                            <label for="name">Nome:</label>
                            <input type="text" id="name" v-model="form.name" />
                            <label for="email">Email:</label>
                            <input type="email" id="email" v-model="form.email" />
                            <label for="password">Senha:</label>
                            <input type="password" id="password" v-model="form.password" />

                            <button type="submit">Salvar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout"
import {Inertia} from "@inertiajs/inertia"

export default {
    name: "Create",
    components: {AppLayout},
    props: {
        errors: Object,
    },
    data () {
        return {
            form: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    methods: {
        submit () {
            Inertia.post(route('users.store'), this.form)
        }
    }
}
</script>

<style scoped>

</style>
