const app = BX.Vue3.BitrixVue.createApp({
    data() {
        return {
            counter: 0
        }
    },
    mounted() {
        setInterval(() => {
            this.counter++
        }, 1000)
    },
    // language=Vue
    template: `
        Counter: {{ counter }}
    `
}).mount('#app');


// import { HelloWorld } from './/src/components/HelloWorld';