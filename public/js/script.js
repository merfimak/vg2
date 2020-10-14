
 $(document).ready(function(){

$('.header__burger').on('click', function(){
  $('.header__burger, .menu__nav').toggleClass('active');
  $('body').toggleClass('lock');//что б во время открытого мнею непрокручивалося контент при скорле
});


$('.menu__link').on('click', function(){
  $('.header__burger, .menu__nav').toggleClass('active');
});


           $(".contact_form").validate({
             rules:{
                name:{
                  required: true,
                  minlength: 2,
                  maxlength: 16,
                },
                email:{
                  required: true,
                  email: true
                },
                telefon:{
                  digits: true
                },
                 message:{
                  required: true,
                  minlength: 10,
                  maxlength: 1000,
                }
             },
             messages:{
               name:{
                 required: "Это поле обязательно для заполнения",
                 minlength: "Минимальное количество символов - 2",
                 maxlength: "Максимальное количество символов - 25",
             },
             telefon:{
               digits: "Только цифры",
               },
               email:{
               required: "Это поле обязательно для заполнения",
               email: "Некоректный адрес почты"
               },
               message:{
               required: "Это поле обязательно для заполнения",
               minlength: "Минимальное количество символов - 10",
               maxlength: "Максимальное количество символов - 1000",
               },
             }
          });

 });

window.onload = function() {


//затемнение при прокрутке
window.addEventListener('scroll', function(e) {
const scro = document.querySelector('.menu');
if(pageYOffset > 20){
  scro.style.transition = '0.5s';
  scro.style.backgroundColor = '#000000';
}else{
  scro.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
}
});

  
//летающий дрон
const p = document.querySelector('.main_drone_img'),
    fluigeart = window.matchMedia("(min-width: 726px)");//ширина экрана
    wrapper.addEventListener('mousemove', function(e) {
     if(fluigeart.matches){
        p.style.transform = `translate(${e.clientX/14}px, ${e.clientY/14}px)`;
       }
       
    });


function menuActiveItem(){
const url = document.location.href;
const link = document.getElementsByClassName('menu__link');
const parts = url.split('/');
const lastpart = parts[parts.length-1];
for (i = 0; i < link.length; i++) {
	if(link[i].getAttribute("href") == lastpart){
		link[i].classList.add("active");
	}
}}

menuActiveItem()

function ibg(){

let ibg=document.querySelectorAll(".ibg");
for (var i = 0; i < ibg.length; i++) {
if(ibg[i].querySelector('img')){
ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
}
}
}

ibg();


function popup(){
const popup_img = document.querySelectorAll('.popup_img')//все Img
const modal_body = document.querySelector('.modal_body')// div c большой фоткой
const modal_img = document.querySelector('.modal_body').children[0]// большая фотка большой фоткой
const modal = document.querySelector('.modal')// родитель div c большой фоткой
for (i = 0; i < popup_img.length; i++) {
  popup_img[i].addEventListener('click', (event) => { // event - событеи клика мышки
    //У объекта event есть свойство target, которое содержит ссылку на целевой (т.е. самый вложенный) элемент DOM структуры, который принял событие.
    src = event.target.getAttribute("src");
    modal_img.src = this.src;
    modal.classList.add("active");
    modal_body.classList.add("active");
  })
}
modal.addEventListener('click', (event) => {
modal.classList.remove("active");
modal_body.classList.remove("active");})
}

popup()


function videoPopup(){
const video_popup_img = document.querySelectorAll('.video_popup')//все Контейнеры с фотками внутри, они засунуты бекграундом с  ibg()
const modal_video_body = document.querySelector('.modal_video_body')
const modalvideo = document.querySelector('.modalvideo')
const modal_for_video = document.querySelector('.modal_for_video')
const video = document.querySelector('.modalvideo')
for (i = 0; i < video_popup_img.length; i++) {
video_popup_img[i].addEventListener('click', (event) => { 
    src = event.target.dataset.src;
    modalvideo.src = this.src;
     modal_for_video.classList.add("active");
     modal_video_body.classList.add("active");
      
   })
}
modal_for_video.addEventListener('click', (event) => {
video.pause();
modal_for_video.classList.remove("active");
modal_video_body.classList.remove("active");})
}

videoPopup()






}





