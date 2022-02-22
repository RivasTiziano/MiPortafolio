
/* ------------------------ Hidden & Show menu ---------------------- */
const item1 = document.querySelector(".fa-times");
const item2 = document.querySelector(".fa-bars");
const menuContainer = document.querySelector(".menu_container");

item1.addEventListener("click", function showMenu(){
    menuContainer.style.right = "-220px";
});
item2.addEventListener("click", function hiddenMenu(){
    menuContainer.style.right = "0px";
});



