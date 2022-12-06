<template>
    <main class="bg animated-gradient">
        <header class="header">
            <a-button @click="isActiveMenu = !isActiveMenu" :class="{'active': isActiveMenu}" icon="images/plus.svg"/>
            <nav class="menu" :class="{'active': isActiveMenu}">
                <span class="menu__item">
                    asdasdasd
                </span>
                <span class="menu__item">
                    asdasdasd
                </span>
                <span class="menu__item">
                    asdasdasd
                </span>
            </nav>


        </header>
        <section class="wrapper">
            <div class="animal">
                <a-image class="animal__block" image="images/cat.svg"/>
            </div>
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
