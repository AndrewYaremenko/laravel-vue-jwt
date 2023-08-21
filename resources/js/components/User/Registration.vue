<template>
    <div>
        <div class="w-25">
            <input v-model="name" type="text" class="form-control mt-3 mb-2" placeholder="input name">
            <input v-model="email" type="email" class="form-control mt-3 mb-2" placeholder="confirm email">
            <input v-model="password" type="password" class="form-control mt-3 mb-2" placeholder="input password">
            <input v-model="passwordConfirmation" type="password" class="form-control mt-3 mb-2"
                placeholder="confirm password">
            <input @click.prevent="store" type="submit" class="btn btn-primary" value="Registration">
        </div>
    </div>
</template>
<script>
export default {
    name: "Registration",

    data() {
        return {
            name: '',
            email: '',
            password: '',
            passwordConfirmation: '',
        }
    },

    methods: {
        store() {
            axios.post('/api/users', {
                name: this.name,
                email: this.email,
                password: this.password,
                passwordConfirmation: this.passwordConfirmation,
            }).then(res => {
                console.log(res);
            }); 
        }
    }
}
</script>
<style></style>