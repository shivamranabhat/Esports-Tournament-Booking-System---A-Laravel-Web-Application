let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
let details = document.querySelector(".admin-details");
let account = document.querySelector(".account");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
  details.style.display = "none";
  account.style.display = "none";

}else
{
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  details.style.display = "block";
  account.style.display = "block";
}

}


