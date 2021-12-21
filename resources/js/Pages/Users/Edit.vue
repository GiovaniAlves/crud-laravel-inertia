<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuário</h2>
        </template>

        <div class="py-12">
            <div class="max-w7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <InputError
                            v-if="errors"
                            v-for="error in errors"
                            :key="error.email"
                            :message="error">
                            {{ error }}
                        </InputError>

                        <form @submit.prevent="submit">
                            <div class="mt-4">
                                <jet-label for="name" value="Nome" />
                                <input type="text" id="name" class="mt-1 block w-full" v-model="form.name" />
                            </div>

                            <div class="mt-4">
                                <jet-label for="email" value="Email" />
                                <input type="email" id="email" class="mt-1 block w-full" v-model="form.email"/>
                            </div>

                            <jet-button type="submit" class="ma-4 mt-3" :class="{ 'opacity-25': form.processing }">Salvar</jet-button>
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
import InputError from "../../Jetstream/InputError"
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetLabel from '@/Jetstream/Label.vue'

export default {
    name: "Edit",
    components: {InputError, AppLayout, JetButton, JetInput, JetLabel},
    props: {
        customer: Object,
        errors: Object,
    },
    data() {
        return {
            form: {
                name: this.customer.name,
                email: this.customer.email
            }
        }
    },
    methods: {
        submit() {
            Inertia.put(route('users.update', {'user': this.customer}), this.form)
        }
    }
}
</script>

<style scoped>

</style>
