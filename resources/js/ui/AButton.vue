<template>
    <button class="btn">
        <i class="btn__icon" :style="{'mask-image': `url(${icon})`}"/>
    </button>
</template>

<script>
export default {
    name: "AButton",
    props: {
        icon: String
    }
}
</script>

<style scoped>

</style>
