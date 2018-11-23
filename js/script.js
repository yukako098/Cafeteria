addEventListener("scroll", getInfo);

function getInfo() {
  var leftTopStyle = document.getElementById("flower_lefttop").style;
  var rightTopStyle = document.getElementById("flower_righttop").style;
  var leftBottomStyle = document.getElementById("flower_leftbottom").style;
  var rightBottomStyle = document.getElementById("flower_rightbottom").style;

  if (pageYOffset >= 200) {
    leftTopStyle.transition = "1s";
    leftTopStyle.transform = "translate(-150px, -150px)";

    rightTopStyle.transition = "1s";
    rightTopStyle.transform = "translate(150px, -150px)";

    leftBottomStyle.transition = "1s";
    leftBottomStyle.transform = "translate(-150px, 150px)";

    rightBottomStyle.transition = "1s";
    rightBottomStyle.transform = "translate(150px, 150px)";
  } else if (pageXOffset < 200) {
    leftTopStyle.transition = "1s";
    leftTopStyle.transform = "";

    rightTopStyle.transition = "1s";
    rightTopStyle.transform = "";

    leftBottomStyle.transition = "1s";
    leftBottomStyle.transform = "";

    rightBottomStyle.transition = "1s";
    rightBottomStyle.transform = "";
  }
  //console.log(pageYOffset);
}

// transform: translate(50px, 50px);
