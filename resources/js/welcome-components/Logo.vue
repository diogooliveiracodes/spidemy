<template>
    <div style="font-size: 2rem;" class="div-logo">
        <i class="fas fa-spider fa"></i> SPIDEMY
    </div>
</template>

<script>
export default {
    name: 'Logo',
    props:['principal'],
    data(){
        return{
            aplicarbg: false
        }
    },
    methods:{
        handleScroll(){
            window.scrollY > 80 ? this.aplicarbg=true : this.aplicarbg=false
        }
    }
}
</script>

<style>
.cor-vermelha{
    color: #dc3545 !important;
}

</style>