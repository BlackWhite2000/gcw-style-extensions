var acc = document.getElementsByClassName("GCwiki-collapse");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("GCwiki-collapse-active");
    var GCwikipane = this.nextElementSibling;
    if (GCwikipane.style.maxHeight) {
      GCwikipane.style.maxHeight = null;
    } else {
      GCwikipane.style.maxHeight = GCwikipane.scrollHeight + "px";
    } 
  });
}