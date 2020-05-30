function shake() {
  document.getElementById("startButton").id = "startShake";
  setTimeout(function () {
    document.getElementById("startShake").id = "startButton";
  }, 1000);
}

function fadeinOnLoad() {
  document.getElementById("firstElement").className = document
    .getElementById("firstElement")
    .className.replace("invisible", "nowVisible");
  
    setTimeout(function () {
    document.getElementById("secondElement").className = document
      .getElementById("secondElement")
      .className.replace("invisible", "nowVisible");
    
      setTimeout(function () {
      document.getElementById(
        "thirdElement"
      ).className = document
        .getElementById("thirdElement")
        .className.replace("invisible", "nowVisible");
      
        setTimeout(function () {
        document.getElementById(
          "fourthElement"
        ).className = document
          .getElementById("fourthElement")
          .className.replace("invisible", "nowVisible");
       
          setTimeout(function () {
          document.getElementById(
            "fifthElement"
          ).className = document
            .getElementById("fifthElement")
            .className.replace("invisible", "nowVisible");
          ("invisible");
          
        }, 300);

      }, 300);

    }, 300);

  }, 300);
}

