<template>
    <section class="section section-lg section-shaped overflow-hidden my-0" 
        >
        <div class="shape shape-default shape-skew" :class="{'shape-style-1':mobile}" >
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container shape-container py-0 pb-5">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6 initial-template">
                    
                    <h3 class="display-3 text-white">Inglês sem enrolação
                        <span class="text-white">e sem sair de casa</span>
                    </h3>
                    <p class="lead text-white text-justify">
                        Faça o seu cadastro gratuitamente e descubra como aprender inglês pode ser fácil e divertido.
                        Aqui você escolhe o seu professor, pode rever as aulas quando quiser e praticar seus conhecimentos com atividades personalizadas.
                        
                    </p>
                    <div v-if="mobile==false" id="botao" class="btn-wrapper" >
                        <a href="#cadastro" class="btn btn-success text-white">
                            Cadastre-se gratuitamente!
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mb-lg-auto" id="cadastro">
                    <div class="transform-perspective-right">
                        <card class="border-0" type="secondary" shadow
                              body-classes="px-lg-5 py-lg-5"
                              header-classes="pb-5 bg-white">
                            <template slot="header">
                                <div class="text-muted text-center mb-3">
                                    <small>Cadastre-se gratuitamente com</small>
                                </div>
                                <div class="btn-wrapper text-center">
                                    <base-button type="neutral">
                                        <img slot="icon" src="img/icons/common/github.svg">
                                        Facebook
                                    </base-button>

                                    <base-button type="neutral social-button">
                                        <img slot="icon" src="img/icons/common/google.svg">
                                        Google
                                    </base-button>
                                </div>
                            </template>
                            <template>
                                <div class="text-center text-muted mb-4">
                                    <small>Ou cadastre-se com seu email</small>
                                </div>
                                <form role="form">
                                    <base-input alternative
                                                placeholder="Email"
                                                addon-left-icon="ni ni-email-83">
                                    </base-input>
                                    <base-input alternative
                                                type="password"
                                                placeholder="Senha"
                                                addon-left-icon="ni ni-lock-circle-open">
                                    </base-input>
                                    <base-input alternative
                                                type="password"
                                                placeholder="Confirme sua senha"
                                                addon-left-icon="ni ni-lock-circle-open">
                                    </base-input>
                                    <base-checkbox>
                                        Remember me
                                    </base-checkbox>
                                    <div class="text-center">
                                        <base-button type="primary" class="my-4">Cadastre-se Gratuitamente</base-button>
                                    </div>
                                </form>
                            </template>
                        </card>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data(){
        return{
            mobile: false
        }
    },
    mounted(){
        this.handlemobile()
    },
    methods:{
        handlemobile(){
            return window.innerWidth > 992 ? this.mobile = true : this.mobile = false
        }
    },
    
};
</script>
<style scoped>
@media screen and (max-width: 992px) {
    #botao{
        display: flex !important;
        justify-content: center !important;
    }
}
@media screen and (max-width: 389px) {
    .social-button{
        margin-top: 1rem;
    }
}
@media screen and (max-width: 576px) {
    .initial-template{
        margin-top: 10vh;
        height: 65vh;
    }
}

</style>
