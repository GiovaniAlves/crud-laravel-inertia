<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <inertia-link
                            class="btn btn-secondary inline-flex"
                            :href="route('users.create')">
                            Criar Usuário
                        </inertia-link>

                        <form
                            method="get"
                            class="mt-4 mb-4 flex"
                            @submit.prevent="submit">
                                <JetInput v-model="form.filtro" class="w-full" placeholder="Busque por nome ou e-mail..."></JetInput>
                                <button type="submit" class="ml-2 btn btn-primary">Buscar</button>
                        </form>

                        <table class="table-auto w-full">
                            <thead>
                            <tr>
                                <th class="p-3">Id</th>
                                <th class="p-3">Nome</th>
                                <th class="p-3">E-mail</th>
                                <th class="p-3">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr
                                v-for="user in users.data"
                                :key="user.id">
                                <td class="p-3 border">{{ user.id }}</td>
                                <td class="p-3 border">{{ user.name }}</td>
                                <td class="p-3 border">{{ user.email }}</td>
                                <td class="p-3 border">
                                    <inertia-link
                                        class="btn btn-primary mr-2 inline-block"
                                        :href="route('users.show', {'id': user.id})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                    </inertia-link>
                                    <inertia-link
                                        class="btn btn-success mr-2 inline-block"
                                        :href="route('users.edit', {'id': user.id})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                    </inertia-link>
                                    <button
                                        class="btn btn-danger align-top"
                                        type="button"
                                        @click="modalOpen=true;selectedUser=user">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="mt-3">
                            <Paginator :paginator="users"/>
                        </div>
                    </div>
                </div>

                <JetDialogModal :show="modalOpen">
                    <template #title>
                        <h1>Exluir Usuário</h1>
                    </template>
                    <template v-slot:content>
                        <p v-if="selectedUser">Deseja realmente exluir <strong>{{ selectedUser.email }}</strong>?</p>
                    </template>
                    <template v-slot:footer>

                        <JetButton
                            class="float-left bg-red-400 hover:bg-red-500 mr-3"
                            @click="deleteUser">
                            Excluir
                        </JetButton>
                        <JetButton
                            class="bg-red-400 hover:bg-red-500"
                            @click="modalOpen=false">
                            Fechar
                        </JetButton>

                    </template>
                </JetDialogModal>

            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from "@/Layouts/AppLayout"
import JetButton from '@/Jetstream/Button.vue'
import JetDialogModal from "@/Jetstream/DialogModal"
import JetInput from "@/Jetstream/Input"
import Paginator from "@/Shared/Paginator"
import {Inertia} from "@inertiajs/inertia"

export default {
    name: "User",
    components: {Paginator, AppLayout, JetButton, JetDialogModal, JetInput},
    props: {
        users: Object,
        filtro: String
    },
    data() {
        return {
            modalOpen: false,
            selectedUser: Object,
            form: {
                filtro: this.filtro
            }
        }
    },
    methods: {
        deleteUser() {
            Inertia.delete(this.route('users.destroy', {'id': this.selectedUser.id}))
            this.modalOpen = false
        },
        submit () {
            Inertia.get(route('users.index', this.form))
        }
    }
}
</script>
