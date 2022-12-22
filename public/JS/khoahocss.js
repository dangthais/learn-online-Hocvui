function showLesson(lesson){
    if(lesson.className === "lesson-detail"){
        lesson.className += "lesson-detail-show";
    }else{
        lesson.className = "lesson-detail";
    }
}
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
function myFunction(e) {
  document.querySelector('.show_menu').style.display = "block";
}