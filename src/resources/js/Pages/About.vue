<template>
    <layout>
        <div v-for="(erro, index) in errors" :key="index" style="border: 1px solid red;">

            {{erro}}
        </div>
        <div>

            About
        </div>
    </layout>

</template>

<script type="text/javascript">


    import Layout from '../Layout';

    export default {
        props: {
            errors: Object,
        },
        components: { Layout },
    }

    
</script>

<style type="text/scss"></style>