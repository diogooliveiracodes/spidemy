<template>
    <footer data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out"
        class="" style="position: relative; overflow: hidden; background: #0084ff;">
        <div class="custom-shape-divider-top-1616042631">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container container-lg">
            <div class="row mx-0">
                <div class="col-md-12 mb-5 mb-md-0">
                    <div class="card shadow border-0 align-items-center py-5">
                        <div class="row justify-content-center mx-0" id="div-prefooter">
                            <div class="col-md-6">
                                <p class="text-muted text-justify px-2">
                                    Na FVG Educação & Ensino nossa missão
                                    é ajudar cirurgiões plásticos formados e residentes
                                    a evoluir com a prática cirúrgica e aprimorar skills
                                    sobre gestão e boas práticas comerciais. Se você
                                    quer sair na frente, assine nossa newsletter e
                                    receba nossos conteúdos gratuitos.
                                </p>  
                            </div>
                            <div class="col-md-6">
                                <p class="text-bold bold text-justify px-2">
                                    <strong>
                                        Descubra como evoluir sua prática cirúrgica e se tornar um profissional da saúde 5.0
                                    </strong>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-grid align-items-center my-md">
                <div class="col-lg-6">
                    <img src="img/brand/logo.png" alt="">
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <a target="_blank" rel="noopener" href="https://twitter.com/creativetim"
                       class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip"
                       data-original-title="Follow us">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" rel="noopener" href="https://www.facebook.com/creativetim"
                       class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip"
                       data-original-title="Like us">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a target="_blank" rel="noopener" href="https://dribbble.com/creativetim"
                       class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip"
                       data-original-title="Follow us">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a target="_blank" rel="noopener" href="https://github.com/creativetimofficial"
                       class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip"
                       data-original-title="Star on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
            <hr style="border-color: white;">
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright" style="color: white !important;">
                        &copy; {{year}}
                        <a style="color: white !important;" href="https://www.creative-tim.com" target="_blank" rel="noopener">Creative Tim</a> & <a style="color: white !important;" href="https://www.binarcode.com" target="_blank" rel="noopener">Binar Code</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end" >
                        <li class="nav-item">
                            <a style="color: white !important;" href="https://www.creative-tim.com" class="nav-link" target="_blank" rel="noopener">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white !important;" href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank" rel="noopener">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white !important;" href="http://blog.creative-tim.com" class="nav-link" target="_blank" rel="noopener">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: white !important;" href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                               class="nav-link" target="_blank" rel="noopener">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>
<script>
export default {
  name: 'app-footer',
  data() {
    return {
      year: new Date().getFullYear()
    }
  }
};
</script>

<style scoped>

.custom-shape-divider-top-1616042631 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1616042631 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 104px;
}

.custom-shape-divider-top-1616042631 .shape-fill {
    fill: #FFFFFF;
}

</style>