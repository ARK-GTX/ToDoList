function ToggleMap() {
    var x = document.getElementById("GlobeMap");


    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display = "block";

 


    } else {
      x.style.display = "none";
      y.style.display = "none";
    } 



  }



function InputLocationToMap(){

    var DefaultLocation = "https://maps.google.com/maps?q=[]&t=k&z=13&ie=UTF8&iwloc=&output=embed";
    var UserValue = document.getElementById("TasksLocation").value;
    var ConvertedValue = 'https://maps.google.com/maps?q=['+UserValue+']&t=k&z=13&ie=UTF8&iwloc=&output=embed';



    document.getElementById('gmap_canvas').src = ConvertedValue;




}
