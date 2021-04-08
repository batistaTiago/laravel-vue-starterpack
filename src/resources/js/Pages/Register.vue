<template>
  <layout>
    <div>
        <div v-for="(erro, index) in errors" :key="index" style="border: 1px solid red;">

            {{erro}}
        </div>
        Register

        <v-app>
            <v-content>
            <v-system-bar
            color="secondary"
  height="30"
>
teste
</v-system-bar>
<v-btn
      class="mx-2"
      fab
      dark
      small
      color="pink"
    >
      <v-icon dark>
        mdi-heart
      </v-icon>
    </v-btn>

            </v-content>
            <v-tabs>
    <v-tab>Item One</v-tab>
    <v-tab>Item Two</v-tab>
    <v-tab>Item Three</v-tab>
  </v-tabs>
  <v-alert
  type="success"
>teste</v-alert>

        </v-app>

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
            errors: Object,
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