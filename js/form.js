function signupOpen(){
    document.getElementById("myModal").style.display="none";
    document.getElementById("myModalaa").style.display="block";

}
function signupClose(){
    // document.getElementById("myModal").style.display="block";
    document.getElementById("myModalaa").style.display="none";
    setInterval(function() {
        location.reload();
      }, 5000);
}