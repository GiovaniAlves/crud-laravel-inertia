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

                        <inertia-link class="btn btn-secondary" :href="route('users.create')">Criar Usuário
                        </inertia-link>

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
                                v-for="user in users"
                                :key="user.id">
                                <td class="p-3 border">{{ user.id }}</td>
                                <td class="p-3 border">{{ user.name }}</td>
                                <td class="p-3 border">{{ user.email }}</td>
                                <td class="p-3 border">
                                    <inertia-link :href="route('users.show', {'id': user.id})"> Detalhes </inertia-link>
                                    <inertia-link :href="route('users.edit', {'id': user.id})"> Editar </inertia-link>
                                    <button
                                        type="button"
                                        @click="modalOpen=true;selectedUser=user">
                                            Excluir
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <JetDialogModal :show="modalOpen">
                    <template #title>
                        <h1>Exluir Usuário</h1>
                    </template>
                    <template v-slot:content>
                        <p v-if="selectedUser">Deseja realmente exluir {{ selectedUser.email }}?</p>
                    </template>
                    <template v-slot:footer>

                        <JetButton
                            class="float-left mb-4 bg-red-400 hover:bg-red-500 mr-3"
                            @click="deleteUser">
                            Excluir
                        </JetButton>
                        <JetButton
                            class="float-right mb-4 bg-red-400 hover:bg-red-500"
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
import {Inertia} from "@inertiajs/inertia"

export default {
    name: "User",
    components: {AppLayout, JetButton, JetDialogModal},
    props: {
        users: Array
    },
    data() {
        return {
            modalOpen: false,
            selectedUser: Object
        }
    },
    methods: {
        deleteUser() {
            Inertia.delete(this.route('users.destroy', {'id': this.selectedUser.id}))
            this.modalOpen = false
        }
    }
}
</script>
