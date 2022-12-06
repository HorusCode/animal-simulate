<template>
    <main class="bg animated-gradient">
        <header class="header">
            <a-button>

            </a-button>
        </header>
        <section class="wrapper">
            <div class="animal">
                <a-image class="animal__block"/>
            </div>
        </section>
    </main>
</template>

<script>
import AButton from "./ui/AButton.vue";
import AImage from "./ui/AImage.vue";


export default {
    name: "App",
    components: {AButton, AImage}

}
</script>

<style>

</style>
