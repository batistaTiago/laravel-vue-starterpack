<template>
  <layout>
    <div>

        Register

        <form @submit.prevent="handleForm">

            <input type="text" placeholder="nome" v-model="form.name" />

            <input type="email" placeholder="email" v-model="form.email" />

            <input type="password" placeholder="password" v-model="form.password" />
            <button type="submit">Cadastrar</button>
        </form>
    </div>    
</layout>
</template>

<script>
import Layout from '../Layout';

export default {

        components: { Layout },

        props: {
        },

        data: () => {
            return {
                form : {
                    name: null,
                    email: null,
                    password: null
                }
            }
        },
        methods:{ 

            handleForm(){
                this.$inertia.post('/register' , this.form)
            }

        }
}
</script>

<style>

</style>