<template>

<layout>
    <div>
        Ola {{user}} vuejs
    </div>    
</layout>


</template>

<script type="text/javascript">
    import Layout from '../Layout';

    export default {
        components: { Layout },

        props: {
            user : String,
        }
    }

</script>

<style type="text/scss"></style>