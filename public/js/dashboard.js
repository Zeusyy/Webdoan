$(".main-sub-menu").on("click",function(){
    $(".sub-menu").css({"display":"none"});
    $('.main-sub-menu').find(".fa-angle-right").css({"transform":"rotate(0deg)"});
    $(this).find("ul").slideToggle();
    $(".main-menu .main-sub-menu").removeClass("active");
    $(this).addClass("active");
    $(this).find(".fa-angle-right").css({"transform":"rotate(90deg)"});
    });
    
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}