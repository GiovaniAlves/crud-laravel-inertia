<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuário</h2>
        </template>

        <div class="py-12">
            <div class="max-w7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <div class="mt-4">
                            <jet-label for="name" :value=" 'Nome: ' + customer.name " />
                            <jet-label for="email" :value=" 'Email: ' + customer.email " />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout"
import JetLabel from '@/Jetstream/Label.vue'

export default {
    name: "Show",
    components: {AppLayout, JetLabel},
    props: {
        customer: Object,
    }
}
</script>

<style scoped>

</style>
