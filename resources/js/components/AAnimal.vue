<template>
    <div class="animal" :class="{'gelatine-anime': growed, 'float-anime': !interval}">
        <a-image :image="data.url" :width="data.size * 15"/>
        <span class="animal__title">{{ data.name }}</span>
    </div>
</template>

<script>
import {useUrlQuery} from "@/composition/fetch.js";
import AImage from "@/ui/AImage.vue";
import {unref} from "vue";

export default {
    name: "AAnimal",
    components: {AImage},
    props: {
        source: {
            type: Object,
            default: {}
        }
    },
    data() {
        return {
            data: this.source,
            interval: null,
            growed: true,
        }
    },
    methods: {
        grown() {
            this.interval = setInterval(async () => {
                this.growed = false;
                let {response} = await useUrlQuery(`/animal/${this.data.id}/grow`, {
                    method: 'POST',
                });
                if(!Array.isArray(response)) {
                   this.growed = true;
                   this.data = response;
                } else {
                    clearInterval(this.interval);
                    this.interval = false;
                }
            }, 1800);
        },
    },
    mounted() {
        this.grown();
    },
    unmounted() {
        this.interval = null;
    }
}
</script>

<style scoped>

</style>
