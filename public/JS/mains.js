let slide
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000);
}

// validate

// var regisEmail = document.querySelector('#regis-email');
// var regisUsername = document.querySelector('#regis-username');
// var regisPass = document.querySelector('#regis-pass');
// var retypePass = document.querySelector('#retype-pass');
// var formregis = document.querySelector('#register-form');
// var formLogin = document.querySelector('#login-form');
// var inputEmail = document.querySelector('#input-email');
// var inputPass = document.querySelector('#input-pass');


// var showError = function(input, message){
//     let parent = input.parentElement;
//     let small =  parent.querySelector('small');

//     parent.classList.add('error');
//     small.innerText = message;
// }


// var showSuccess = function(input){
//     let parent = input.parentElement;
//     let small =  parent.querySelector('small');

//     parent.classList.remove('error');
//     small.innerText = '';
// }


// function checkEmpty(listInput) {
//     let isEmptyError = false;
//     listInput.forEach(input => {
//         input.value = input.value.trim();
//         if (!input.value){
//             isEmptyError = true;
//             showError(input, `không được để trống`);
//         } else {
//             showSuccess(input);     
//         }
//     });

//     return isEmptyError;
// }

// formregis.addEventListener('submit', function(e){
//     e.preventDefault();
//     let isEmptyError = checkEmpty([regisEmail,regisPass,retypePass,regisUsername]);
// })



// hiệu ứng nav
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const courses = $$(".list-lesson");
const contents = $$(".course-video");

const iconVolumes = $$('.icon-volume');


courses.forEach((course, index) => {
  const content = contents[index];

  const iconVolume = iconVolumes[index]

  course.onclick = function () {
    $(".list-lesson.point").classList.remove("point");
    $(".course-video.point").classList.remove("point");
    $(".icon-volume.point").classList.remove("point");


    this.classList.add("point");
    content.classList.add("point");
    iconVolume.classList.add("point");
  };
});



//Show lesson
function showLesson(lesson){
    if(lesson.className === "lesson-detail"){
        lesson.className += "lesson-detail-show";
    }else{
        lesson.className = "lesson-detail";
    }
}

// avt


function myFunction(e) {
    document.querySelector('.show_menu').style.display = "block";
}

// function handelClickHandler(e) {
  
// }







    










