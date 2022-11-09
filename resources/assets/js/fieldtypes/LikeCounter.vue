<template>

    <div>
       <text-input type="number" :value="value" @input="update"/>
    </div>

</template>

<script>
    export default {
        mixins: [Fieldtype]
    };
</script>
<style scoped>
    p {
        margin-top: 0.125rem;
        font-size: 0.75rem;
    }
</style>
