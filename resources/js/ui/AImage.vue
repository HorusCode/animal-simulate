<template>
    <figure class="image-wrapper">
        <transition name="fade">
            <img class="image" :src="image" alt="alt">
        </transition>
    </figure>
</template>

<script>
export default {
    name: "AImage",
    props: {
        image: String
    }
}
</script>

<style scoped>

</style>
