<template>
    <figure class="image-wrapper" :style="{'width': width + 'px'}">
        <transition name="fade">
            <img class="image" :src="image" alt="alt">
        </transition>
    </figure>
</template>

<script>
export default {
    name: "AImage",
    props: {
        image: String,
        width: [String, Number]
    }
}
</script>

<style scoped>

</style>
