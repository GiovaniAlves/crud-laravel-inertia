<template>
    <div>
        <H1>{{ title }}</H1>
        <div>{{ description }}</div>
    </div>
</template>

<script>
export default {
    props: {
        status: Number,
    },
    computed: {
        title() {
            return {
                503: '503: Serviço Indisponível',
                500: '500: Erro no Servidor',
                404: '404: Página Não Encontrada',
                403: '403: Proíbido',
            }[this.status]
        },
        description() {
            return {
                503: 'Desculpe, estamos fazendo manutenção. Por favor, volte em breve.',
                500: 'Ops, algo deu errado em nossos servidores.',
                404: 'Desculpe, a página que você está procurando não foi encontrada.',
                403: 'Desculpe, você está proibido de acessar esta página.',
            }[this.status]
        },
    },
}
</script>
