<template>

<layout>
    <div>
        Ola {{user}} vuejs
    </div>    

    <div v-if="$page.props.flash" style="border: 2px solid green;">
        {{$page.props.flash}}
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