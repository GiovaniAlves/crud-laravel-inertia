<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Registro
                </Link>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                     width="200.000000pt" height="200.000000pt" viewBox="0 0 200.000000 200.000000"
                     preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                       fill="#000000" stroke="none">
                        <path d="M1315 1493 c-11 -3 -47 -31 -80 -63 -55 -52 -65 -58 -115 -64 -41 -4
                            -61 -12 -83 -34 -28 -28 -28 -29 -10 -60 18 -31 18 -31 -10 -60 -15 -15 -25
                            -31 -22 -34 11 -11 -72 -67 -105 -70 -28 -4 -43 2 -72 26 -24 19 -38 40 -38
                            54 0 27 -51 82 -76 82 -14 0 -16 8 -12 51 l5 50 -39 -38 c-102 -98 -149 -256
                            -117 -392 48 -211 264 -359 470 -322 103 18 216 80 256 140 14 22 14 24 -1 18
                            -10 -4 -19 1 -25 12 -15 28 -62 44 -93 32 -39 -15 -101 47 -117 117 -13 50
                            -12 52 20 97 18 25 37 45 43 45 5 0 22 12 37 26 27 26 28 26 58 8 26 -15 32
                            -16 47 -3 23 19 44 71 44 110 0 26 12 45 59 94 63 65 75 90 69 146 -3 31 -6
                            34 -38 36 -19 0 -44 -1 -55 -4z m63 -11 c13 -9 -17 -41 -68 -75 -13 -10 -21
                            -17 -16 -17 5 0 1 -9 -10 -21 -15 -16 -16 -22 -5 -29 10 -6 2 -14 -30 -30
                            l-44 -23 20 23 c14 16 16 24 7 27 -6 3 -9 10 -6 15 4 7 2 8 -5 4 -8 -6 -9 -12
                            -2 -20 17 -20 -94 -139 -121 -130 -14 4 -29 -3 -49 -22 -25 -24 -29 -25 -35
                            -10 -4 11 2 27 19 44 l26 27 -20 32 -20 31 28 20 c15 10 50 22 77 25 42 4 55
                            12 106 62 50 49 76 64 130 74 3 0 11 -3 18 -7z m-291 -340 c-15 -16 -24 -32
                            -20 -36 15 -14 -90 -91 -109 -79 -25 14 34 123 66 123 7 0 23 11 36 25 21 23
                            26 24 39 10 13 -13 12 -18 -12 -43z m-377 -146 c0 -3 -4 -8 -10 -11 -5 -3 -10
                            -1 -10 4 0 6 5 11 10 11 6 0 10 -2 10 -4z m83 -83 c-7 -2 -21 -2 -30 0 -10 3
                            -4 5 12 5 17 0 24 -2 18 -5z"/>
                                                    <path d="M881 1408 c-1 -21 -7 -28 -28 -31 l-28 -4 28 -2 c22 -1 27 -6 28 -28
                            l1 -28 7 25 c5 17 16 27 36 31 l30 6 -30 4 c-21 3 -31 11 -36 29 l-7 25 -1
                            -27z"/>
                                                    <path d="M880 1180 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                            -10 -4 -10 -10z"/>
                                                    <path d="M1345 1120 c-3 -5 -1 -10 4 -10 6 0 11 5 11 10 0 6 -2 10 -4 10 -3 0
                            -8 -4 -11 -10z"/>
                                                    <path d="M1180 990 c0 -5 5 -10 11 -10 5 0 7 5 4 10 -3 6 -8 10 -11 10 -2 0
                            -4 -4 -4 -10z"/>
                                                    <path d="M322 518 c-7 -7 -12 -33 -12 -60 0 -53 15 -68 69 -68 24 0 31 4 31
                            19 0 14 -8 21 -27 23 -22 2 -29 9 -31 31 -3 24 0 27 27 27 24 0 31 4 31 20 0
                            16 -7 20 -38 20 -21 0 -43 -5 -50 -12z"/>
                                                    <path d="M432 463 c3 -60 5 -68 23 -68 13 0 21 8 23 23 5 31 32 29 32 -3 0
                            -19 5 -25 21 -25 20 0 21 3 15 62 -4 34 -10 66 -12 70 -3 4 -28 8 -55 8 l-50
                            0 3 -67z m63 28 c3 -5 1 -12 -5 -16 -5 -3 -10 1 -10 9 0 18 6 21 15 7z"/>
                                                    <path d="M572 468 c3 -58 5 -63 31 -72 17 -6 37 -6 55 0 25 9 27 14 30 72 3
                            56 1 62 -17 62 -17 0 -20 -8 -23 -47 -4 -64 -26 -69 -30 -6 -3 41 -6 48 -26
                            51 -22 3 -23 1 -20 -60z"/>
                                                    <path d="M712 463 l3 -68 37 -3 c60 -5 78 11 78 66 0 27 -5 53 -12 60 -7 7
                            -34 12 -60 12 l-49 0 3 -67z m78 -3 c0 -20 -5 -30 -15 -30 -10 0 -15 10 -15
                            30 0 20 5 30 15 30 10 0 15 -10 15 -30z"/>
                                                    <path d="M900 459 l0 -70 53 3 52 3 0 35 c0 25 -5 36 -17 38 -13 2 -18 -3 -18
                            -17 0 -12 -6 -21 -15 -21 -11 0 -15 12 -15 50 0 43 -3 50 -20 50 -18 0 -20 -7
                            -20 -71z"/>
                                                    <path d="M1042 505 c-18 -40 -16 -115 4 -115 9 0 18 9 21 20 3 11 12 20 19 20
                            8 0 14 -9 14 -20 0 -13 7 -20 20 -20 17 0 20 7 20 39 0 21 -5 52 -11 70 -9 26
                            -16 31 -43 31 -25 0 -35 -6 -44 -25z m47 -44 c-15 -5 -22 6 -14 19 6 9 10 9
                            16 -1 5 -8 4 -15 -2 -18z"/>
                                                    <path d="M1170 461 c0 -64 2 -71 20 -71 15 0 20 7 20 25 0 32 27 34 32 3 2
                            -15 10 -23 23 -23 23 0 31 29 16 59 -5 11 -11 32 -13 46 -3 22 -8 25 -50 28
                            l-48 3 0 -70z m60 24 c0 -8 -4 -15 -10 -15 -5 0 -10 7 -10 15 0 8 5 15 10 15
                            6 0 10 -7 10 -15z"/>
                                                    <path d="M1318 503 c-6 -16 -11 -46 -12 -68 -1 -31 3 -40 17 -43 12 -2 20 4
                            24 17 7 27 33 27 33 1 0 -13 7 -20 20 -20 17 0 20 7 20 39 0 21 -5 52 -11 70
                            -9 27 -16 31 -45 31 -28 0 -37 -5 -46 -27z m52 -28 c0 -8 -4 -15 -10 -15 -5 0
                            -10 7 -10 15 0 8 5 15 10 15 6 0 10 -7 10 -15z"/>
                                                    <path d="M1440 495 c0 -20 7 -51 14 -70 13 -29 20 -35 45 -35 26 0 33 6 46 36
                            8 20 15 52 15 71 0 30 -3 34 -22 31 -19 -2 -24 -10 -26 -45 -2 -24 -7 -43 -11
                            -43 -10 0 -21 35 -21 68 0 15 -6 22 -20 22 -16 0 -20 -7 -20 -35z"/>
                                                    <path d="M1582 463 l3 -68 48 -3 c42 -3 47 -1 47 17 0 17 -6 21 -31 21 -17 0
                            -28 4 -24 10 3 6 15 10 26 10 30 0 23 28 -8 33 -26 4 -26 4 5 6 25 1 32 5 32
                            21 0 17 -7 20 -50 20 l-51 0 3 -67z"/>
                                                    <path d="M1704 516 c-3 -7 -4 -38 -2 -67 l3 -54 53 -3 52 -3 0 40 c0 31 -4 41
                            -16 41 -9 0 -18 -9 -21 -20 -10 -37 -23 -20 -23 30 0 44 -3 50 -20 50 -11 0
                            -23 -6 -26 -14z"/>
                                                    <path d="M633 329 c-16 -16 -17 -49 -3 -49 13 0 23 24 18 45 -2 13 -5 14 -15
                            4z m4 -31 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13 3 -3 4 -12 1 -19z"/>
                                                    <path d="M315 309 c-4 -11 -4 -23 -2 -26 9 -9 28 8 21 19 -4 6 0 14 7 19 11 7
                            11 9 -3 9 -9 0 -20 -9 -23 -21z"/>
                                                    <path d="M370 321 c0 -5 -2 -16 -5 -24 -4 -8 0 -14 10 -14 8 0 15 4 15 8 0 4
                            3 14 6 23 4 11 1 16 -10 16 -9 0 -16 -4 -16 -9z"/>
                                                    <path d="M420 304 c0 -31 23 -28 28 4 2 15 -2 22 -12 22 -11 0 -16 -9 -16 -26z"/>
                                                    <path d="M475 309 c-4 -11 -4 -23 -1 -26 8 -9 36 17 36 33 0 22 -28 16 -35 -7z"/>
                                                    <path d="M566 314 c-7 -18 0 -34 16 -34 5 0 7 8 4 17 -4 9 -1 20 6 25 10 6 9
                            8 -3 8 -9 0 -20 -7 -23 -16z"/>
                                                    <path d="M680 321 c0 -5 -2 -15 -5 -23 -4 -9 3 -14 20 -16 21 -1 25 3 25 23 0
                            18 -5 25 -20 25 -11 0 -20 -4 -20 -9z"/>
                                                    <path d="M780 305 c0 -33 15 -33 16 0 1 14 -2 25 -7 25 -5 0 -9 -11 -9 -25z"/>
                                                    <path d="M830 321 c0 -5 -2 -16 -5 -24 -4 -8 0 -14 10 -14 9 0 15 9 15 24 0
                            13 -4 23 -10 23 -5 0 -10 -4 -10 -9z"/>
                                                    <path d="M880 307 c0 -31 25 -31 26 0 1 14 -4 23 -12 23 -8 0 -14 -10 -14 -23z"/>
                                                    <path d="M936 314 c-9 -24 -7 -31 9 -31 9 0 15 10 15 24 0 26 -15 31 -24 7z"/>
                                                    <path d="M990 305 c0 -14 5 -25 10 -25 6 0 10 4 10 9 0 5 3 16 6 25 4 11 1 16
                            -10 16 -10 0 -16 -9 -16 -25z"/>
                                                    <path d="M1038 305 c-3 -15 -1 -25 6 -25 7 0 12 11 12 25 0 14 -3 25 -7 25 -4
                            0 -9 -11 -11 -25z"/>
                                                    <path d="M1088 310 c-7 -24 -3 -38 8 -28 3 4 4 17 2 30 l-3 23 -7 -25z"/>
                                                    <path d="M1167 308 c-6 -22 -2 -36 8 -26 3 3 7 15 10 27 5 28 -11 27 -18 -1z"/>
                                                    <path d="M1252 305 c0 -16 2 -22 5 -12 2 9 2 23 0 30 -3 6 -5 -1 -5 -18z"/>
                                                    <path d="M1290 321 c0 -5 -3 -16 -6 -24 -4 -11 0 -15 13 -13 23 4 31 46 9 46
                            -9 0 -16 -4 -16 -9z"/>
                                                    <path d="M1347 323 c-10 -9 -9 -43 1 -43 4 0 9 11 10 25 2 26 0 29 -11 18z"/>
                                                    <path d="M1390 307 c0 -31 25 -31 26 0 1 14 -4 23 -12 23 -8 0 -14 -10 -14
                            -23z"/>
                                                    <path d="M1450 305 c0 -14 2 -25 4 -25 2 0 6 11 8 25 3 14 1 25 -3 25 -5 0 -9
                            -11 -9 -25z"/>
                                                    <path d="M1497 323 c-4 -3 -7 -16 -6 -27 0 -19 1 -19 10 3 10 24 8 36 -4 24z"/>
                                                    <path d="M1533 313 c-3 -10 -8 -21 -10 -25 -2 -5 5 -8 16 -8 16 0 21 6 21 25
                            0 29 -18 34 -27 8z"/>
                                                    <path d="M1628 305 c-3 -14 -2 -25 2 -25 4 0 10 11 12 25 3 14 2 25 -2 25 -4
                            0 -10 -11 -12 -25z"/>
                                                    <path d="M1673 310 c3 -10 0 -21 -7 -24 -6 -2 -3 -5 8 -5 13 -1 17 4 13 19 -3
                            10 0 21 7 24 6 2 3 5 -8 5 -13 1 -17 -4 -13 -19z"/>
                    </g>
                </svg>

            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">
                                    Laravel
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel é um framework de aplicação web com sintaxe expressiva e elegante. Já lançamos a base - liberando você para criar sem se preocupar com as pequenas coisas.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">
                                    Inertia
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Inertia é uma nova abordagem para a construção de aplicativos da web baseados em servidor clássicos. Nós o chamamos de monólito moderno.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>
