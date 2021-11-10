//Document.getElementById("Btn-Launch").addEventListener("click", myFunction);

function myFunction() {
      var countParas = document.getElementsByTagName("li");
      var Result = countParas.length;

      if (Result > 20 && Result < 41) {
      document.getElementById('Dec_01').style.display = "block";
      }
            else if (Result > 40) {
      document.getElementById('Dec_01').style.display = "block";
      document.getElementById('Dec_02').style.display = "block";
      }
                  else {
                  
                  }

}


