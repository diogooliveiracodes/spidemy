<template>
<div class="row mx-0 px-0 justify-content-center">
    <div class="col-xl-8 col=lg-8 col-md-10 col-sm-12 col-12">
        <h2 class="text-center mt-5">
            Veja o que nossos alunos falam do curso
        </h2>
        <h3 class="text-primary text-center mb-5">
            e seja fluente em inglês também!
        </h3>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="row justify-content-center">
                                <img src="/img/carrossel/carrossel1.jpg" class="d-block" alt="...">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-items-center d-flex" style="flex-wrap: wrap;">
                            <div>
                                <p class="text-center texto-depoimento">
                                    “Eu sabia que tinha que melhorar meu inglês se quisesse crescer profissionalmente, e a 
                                    Open English foi perfeita para mim: pude estudar enquanto trabalhava, no meu próprio horário 
                                    e sem sair de casa. Recomendo!”
                                </p>
                                <p class="text-center text-primary">Carlos Andrade, São Paulo</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="row justify-content-center">
                                <img src="/img/carrossel/carrossel2.jpg" class="d-block" alt="...">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-items-center d-flex" style="flex-wrap: wrap;">
                            <div>
                                <p class="text-center texto-depoimento">
                                   “As aulas 24 horas por dia são atrativas porque te dão uma disponibilidade de horário. 
                                   Para quem trabalha e bastante… tem pouco tempo para ir até uma escola, Open English é muito prática.”
                                </p>
                                <p class="text-center text-primary">Daniela Silva, Rio de Janeiro</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                <i class="fas fa-chevron-left fa-4x text-primary"></i>    
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                <i class="fas fa-chevron-right fa-4x text-primary"></i>
            </button>
        </div>

    </div>
</div>
</template>

<script>

  export default {

  }
</script>

<style scoped>
    button{
        background: transparent !important;
        border: none !important;
    }
    @media screen and (max-width: 576px) {
        img{
            max-height: 40vh;
            align-self: center;
        }
        .texto-depoimento{
            margin-top: 20px;
        }
    }
</style>