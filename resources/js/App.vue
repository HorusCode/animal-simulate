<template>
    <main class="bg animated-gradient">
        <header class="header">
            <a-button @click="isActiveMenu = !isActiveMenu" :class="{'active': isActiveMenu}" icon="images/plus.svg"/>
            <nav class="menu" :class="{'active': isActiveMenu}">
                <span class="menu__item">
                    <a-image image="images/bird.svg"/>
                </span>
            </nav>


        </header>
        <section class="wrapper">
            <a-image class="gelatine-anime animal" image="images/cat.svg"/>
            <a-image class="animal" image="images/dog.svg"/>
            <a-image class="animal" image="images/bear.svg"/>
            <a-image class="animal" image="images/bird.svg"/>
        </section>
    </main>
</template>

<script>
import AButton from "./ui/AButton.vue";
import AImage from "./ui/AImage.vue";


export default {
    name: "App",
    components: {AButton, AImage},
    data() {
        return {
            isActiveMenu: false,
        }
    }
}
</script>

<style>

</style>
