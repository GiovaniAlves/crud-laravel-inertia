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

                            <!--
                                <div class="mt-4">
                                    <jet-label for="avatar" value="Avatar" />
                                    <input type="file" id="avatar" class="mt-1 block w-full" @input="form.avatar = $event.target.files[0]" />
                                </div>
                            -->

                            <jet-button type="submit" class="ma-4 mt-3" :class="{ 'opacity-25': form.processing }">Atualizar</jet-button>

                            <div v-if="customer.profile_photo_path">
                                <hr class="my-5" />
                                <img
                                    class="h-40 w-40 rounded-full border object-cover m-auto"
                                    :src="customer.profile_photo_url"
                                    :alt="customer.name"
                                />
                                <inertia-link
                                    type="button"
                                    class="mt-4 block text-red-500 text-md font-bold"
                                    style="text-align: center !important; align-content: center !important; align-self: center !important"
                                    href="#"
                                    @click="excluirImagem">
                                        Excluir Avatar
                                </inertia-link>
                            </div>
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
                email: this.customer.email,
                avatar: ''
            }
        }
    },
    methods: {
        excluirImagem () {
            Inertia.delete(route('users.deleteAvatar', {user: this.customer}))
        },
        submit() {
            Inertia.post(route('users.update', {'id': this.customer.id}), {
                _method: 'put',
                name: this.form.name,
                email: this.form.email,
                avatar: this.form.avatar
            })
        }
    }
}
</script>

<style scoped>

</style>
