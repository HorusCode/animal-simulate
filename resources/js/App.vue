<template>
    <main class="bg animated-gradient">
        <header class="header">
            <a-button @click="isActiveMenu = !isActiveMenu" :class="{'active': isActiveMenu}" icon="images/plus.svg"/>
            <nav class="menu" :class="{'active': isActiveMenu}">
                <span class="menu__item" v-for="animal of animals" @click="createAnimal(animal.id)">
                    <a-image :key="animal.id" :image="animal.url"/>
                </span>
            </nav>
        </header>
        <section class="wrapper">
            <a-animal v-for="condition of conditions" :key="condition.id" :source="condition" />
        </section>
    </main>
</template>

<script>
import AButton from "./ui/AButton.vue";
import AImage from "./ui/AImage.vue";
import {useUrlQuery} from "./composition/fetch.js";
import AAnimal from "./components/AAnimal.vue";




export default {
    name: "App",
    components: {AAnimal, AButton, AImage},
    data() {
        return {
            isActiveMenu: false,
            animals: [],
            conditions: [],
        }
    },
    methods: {
        async createAnimal(id) {
            let name = prompt('Введите имя животного:', 'Васёк')
            let {response} = await useUrlQuery(`/animal/${id}`, {
                method: 'POST',
                body: JSON.stringify({name: name || 'Васёк'})
            });
            this.conditions.push(response);
        }
    },
    async mounted() {
        let {response} = await useUrlQuery('/animals');
        this.animals = response;
    }
}
</script>

<style>

</style>
