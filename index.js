


const sidebarf = document.querySelector(".sidebarf");


if (window.innerWidth < 500) {

  sidebarf.style.display = "none";
  const mobilSidebarButon = document.createElement("div");
  mobilSidebarButon.classList.add("menuBut2");
  mobilSidebarButon.innerHTML = " <i class='fa-solid fa-bars'></i>";
  const bodyDiv = document.querySelector("body");
  bodyDiv.appendChild(mobilSidebarButon);

   
  mobilSidebarButon.addEventListener("click", function() {
    halfmoon.toggleSidebar();

    if (sidebarf.style.display == "none") {
        sidebarf.style.display = "grid";
        } else {
          sidebarf.style.display = "none";
        }
    }
    
    );
    


  
}



const menubutton = document.querySelector(".menuBut2");
const myDiv = document.getElementById("mainSlider");
const background = myDiv.style.backgroundImage;




myDiv.addEventListener("scroll", function() {
    let opacity = myDiv.scrollTop / (myDiv.scrollHeight - myDiv.clientHeight) * 2;
    let opacity2 = myDiv.scrollTop / (myDiv.scrollHeight - myDiv.clientHeight) * 2;
    opacity2 = opacity > 0.7 ? 0.7 : opacity; // Maximum opacity (30%)
    myDiv.style.backgroundImage = `linear-gradient(to top, rgba(0,0,0,${opacity}), rgba(0,48,49,${opacity})), url(background.png)`;
    menubutton.style.backgroundImage = `linear-gradient(to top, rgba(0,0,0,${opacity2}), rgba(0,48,49,${opacity2}))`;
  });



































// Ana sayfa butonu tıklandığında
document.getElementById("evbutonslid").addEventListener("click", function(){
    window.location.href = "index.php";
 });
 
 // Hakkımızda butonu tıklandığında
 document.getElementById("hakkimizdabutonslid").addEventListener("click", function(){
   window.location.href = "hakkimizda.php";
 });
 
 // İletişim butonu tıklandığında
 document.getElementById("iletisimbutonslid").addEventListener("click", function(){
   window.location.href = "iletisim.php";
 });



 





























  window.onload = function () {

    var spinnerDiv = document.getElementsByClassName("spinnerdiv")[0];
    spinnerDiv.parentNode.removeChild(spinnerDiv);
      };








