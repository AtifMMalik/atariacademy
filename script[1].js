
// function  openFunction(){
//     document.querySelector("#sidenavbar").style.height="100vh";
// }
// function  clouseFunction(){
//     document.querySelector("#sidenavbar").style.height="0";
// }


const navOpen = document.querySelector("#burgermenu_menu");
const navClouse = document.querySelector("#burgermenu_cross");
const links = document.querySelector("#sidenavbar");
const logomanuplater = document.querySelector(".logo_mp_color");
const logomanuplater1 = document.querySelector(".logo_mp_color1");
const logomanuplater2 = document.querySelector(".logo_mp_color2");

navOpen.addEventListener("click", function () {
  // console.log(links.classList);
  // console.log(links.classList.contains("random"));
  // console.log(links.classList.contains("links"));
  // if (links.classList.contains("show-links")) {
  //   links.classList.remove("show-links");
  // } else {
  //   links.classList.add("show-links");
  // }
  links.classList.add("show-sidebar");
  logomanuplater.classList.add("mp_cc");
  logomanuplater1.classList.add("mp_cc1");
  logomanuplater2.classList.add("mp_cc2");
});

navClouse.addEventListener("click", function () {
  // 
  links.classList.remove("show-sidebar");
  // 
  logomanuplater.classList.remove("mp_cc");
  logomanuplater1.classList.remove("mp_cc1");
  logomanuplater2.classList.remove("mp_cc2");
}); 

// subject card scrool button

var scr = document.querySelector(".subjecrtCards");
var scr_r = document.querySelector(".subjecrtCards > span:last-child");
var scr_l = document.querySelector(".subjecrtCards > span:first-child");

scr_r.addEventListener("click",function(){
  scr.scrollBy(160,0)
});

scr_l.addEventListener("click",function(){
  scr.scrollBy(-160,0)
});
