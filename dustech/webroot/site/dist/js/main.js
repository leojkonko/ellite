document.querySelectorAll('a[href^="#"]').forEach(e=>{e.addEventListener("click",function(e){if(e.preventDefault(),"#"!==this.getAttribute("href")){let e=document.querySelector(this.getAttribute("href"));e&&e.scrollIntoView({behavior:"smooth",block:"center",inline:"center"})}})}),function(){var e=document.querySelectorAll("img[data-src]");if(e){const t=new IntersectionObserver((e,r)=>{e.forEach(t=>{if(t.isIntersecting){let e=t.target;e.src=e.dataset.src,t.target.addEventListener("load",function(){let e=this.nextElementSibling;e&&e.classList.contains("loader")&&e.remove()}),r.unobserve(t.target)}})},{rootMargin:"50% 50% 50% 50%"});e.forEach(e=>{t.observe(e)})}}();var telefoneMask=function(e){return 11===e.replace(/\D/g,"").length?"(00) 00000-0000":"(00) 0000-00009"},swiper=(telefoneOptions={onKeyPress:function(e,t,r,n){r.mask(telefoneMask.apply({},arguments),n)},clearIfNotMatch:!0},$(".mask-telefone").mask(telefoneMask,telefoneOptions),$(".mask-cpf").mask("000.000.000-00"),$(".mask-data").mask("00/00/0000"),$(".mask-horario").mask("00:00:00"),$(".mask-cep").mask("00000-000"),$(".mask-porcentagem").mask("##0,00%",{reverse:!0}),new Swiper(".produtos-destaque-swiper",{slidesPerView:2,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},breakpoints:{992:{slidesPerView:4},767:{slidesPerView:3}}})),swiper=new Swiper(".swiper-diferenciais",{slidesPerView:1,navigation:{nextEl:".swiper-diferenciais .swiper-button-next",prevEl:".swiper-diferenciais .swiper-button-prev"}}),swiper=new Swiper(".mySwiper-banner",{slidesPerView:6,navigation:{nextEl:".banner .swiper-button-next",prevEl:".banner .swiper-button-prev"}});