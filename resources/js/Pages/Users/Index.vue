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

                        <inertia-link :href="route('users.create')">Criar Usuário</inertia-link>

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
                                    <td class="p-3 border">Ações</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from "../../Layouts/AppLayout"

export default {
    name: "User",
    components: {AppLayout},
    props: {
        users: Array
    }
}
</script>
