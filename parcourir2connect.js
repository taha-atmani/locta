window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 7);

});





function menu(){
    document.getElementById("menu").classList.toggle("burgermenuu");

};

