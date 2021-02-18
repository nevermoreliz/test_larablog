<template lang="">
<div class="col-8 offset-2">
    <div class="card">
        <div class="card-header">
            <img src="/images/logo.png" alt="logo corporativo de la institucion name" class="logo_200 mx-auto d-block">
        </div>
        <div class="card-body">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" v-model="name"/>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Apellido</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" v-model="surname">
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                </div>
                <input type="email" aria-label="First name" class="form-control" v-model="email">
            </div>
            <div class="input-group mt-3">
                <textarea class="form-control" placeholder="Comentarios" v-model="content"></textarea>
            </div>
            <button class="mt-3 btn btn-primary btn-lg float-right" @click="saveContact">Enviar</button>
        </div>
    </div>

</div>
</template>

<script>
export default {
    created() {

    },
    methods: {
        saveContact: function () {
            console.log(this.name);
            console.log(this.surname);
            console.log(this.email);
            console.log(this.content);
            return;
            // fetch('/api/post/' + this.$route.params.id)
            //     .then(response => response.json())
            //     .then(json => this.post = json.data)

        },
    },
    data: function () {
        return {
            name: '',
            surname: '',
            email: '',
            content: '',
        };
    },
};
</script>
