<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title> Fidelino - Week 5</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="#" >
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>
    <style>
        .nav-link{
            color:white ;
        }
        #ch1Text {
          white-space: pre-wrap; /* or pre-line */
        }
    </style>
    <script>
      // #4 added a JS function to delay printing of texts
      function typeText(element, text) {
        let i = 0;
        const speed = 20; // delay in ms between each character
        function type() {
          if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
          }
        }
        type();
      }
    </script>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(29, 41, 81);">
        <div class="container-fluid">
          <span class="navbar-text">
              <a class="navbar-brand" href="#" style="color: white;">Week-5: Fidelino</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          </span>
          <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="myworks">My Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" style="color: rgba(255, 255, 255, 0.5) !important;">JS Lessons</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container m-3">
<!--#1 - added js buttons -->
  <div class="card" style="justify-content: center;">
    <div class="card-body">
      <h5 class="card-title">A Child's Adventure</h5>
      <h6 class="card-subtitle mb-2 text-muted">Chapter 1</h6>
      <p class="card-text" id="ch1Text"></p>
      <button type="button" class="btn btn-outline-secondary choice1-btn" id="ch1Go">Go</button>
      <button type="button" class="btn btn-outline-secondary choice1-btn" id="ch1Not">Not Go</button>
    </div>
  </div>

  <script>
    var element = document.getElementById("ch1Text");
    var longText = "The village was bestowed by the king of Mertienza to the greatest person who will win the war against the forest dwellers found only in the deepest caves and shades after the great Narra tree. These creatures can be seen walking in four limbs, sometimes three, sometimes one. Some fly, some gallop, and some develop to be human.! “That’s what I’ve heard from my ma and pa. Although they would need some blood of human to take form, they would look pretty much like ma and pa with extra limbs or wings.” I told my friends as we walk around a mango, spotting a ripe mango not far from the ground.! “Juan, Juan, come now! We need to get meat for the vegetables tonight.” I heard my ma call.";
    var textWithLineBreaks = longText.replace(/\!/g, "\n\n");
    typeText(element, textWithLineBreaks);

  </script>
    <!--#2 added white space creator using create element --->
    <br id="whitespace">
    <script>
      const lnbrk = document.createElement("br");
      //#3 improved by adding nodes
      const node = document.createTextNode("");
      lnbrk.appendChild(node);

      const element2 = document.getElementById("whitespace");
      element2.appendChild(para);
    </script>

    <script>
    //made hidden blocks appear using getElementbyClass and eventListeners
    const buttons = document.getElementsByClassName("choice1-btn");
    var ctr =0
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function() {
            if (this.id === 'ch1Go' && ctr==0) {
                const hiddenCard1 = document.getElementById("deci1-go").style.display = "block";
                ctr++;
              } else if (this.id === 'ch1Not' && ctr==0) {
              const hiddenCard1 = document.getElementById("deci1-not").style.display = "block";
              ctr++;
            }
        });
    }
    </script>

<div class="card" style="width: 18rem; display: none;" id="deci1-go">
  <div class="card-body">
    <h5 class="card-title">[Go]</h5>
    <h6 class="card-subtitle mb-2 text-muted">Go to mom</h6>
    <p class="card-text" id="gotomom"></p>
  </div>
</div>

<script>
  element = document.getElementById("gotomom");
  longText = "Without saying goodbye, I left the area and headed straight to the door, getting a basket from the floor, making sure nothing is inside it before racing to reach my ma’s hand and walked to the village pantry together.";
  textWithLineBreaks = longText.replace(/\!/g, "\n\n");
  typeText(element, textWithLineBreaks);
</script>

<div class="card" style="width: 18rem; display: none;" id="deci1-not">
  <div class="card-body">
    <h5 class="card-title">[Not Go]</h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text" id="notgotomom"></p>
  </div>
</div>
<script>
  element = document.getElementById("notgotomom");
  longText = "“I’ll be playing more Ma, maybe a bit later.” I told Mama outside the door.!“Alright, later then. I was thinking of buying you a toy but I guess we can’t if you don’t want to come with me.” Mama said, I know for sure that she is joking but a toy sounds tempting right now.!“Wait for me!” I said as she was walking to the market with a basket by her side.";
  textWithLineBreaks = longText.replace(/\!/g, "\n\n");
  typeText(element, textWithLineBreaks);
</script>

    <hr>
    <h1>Lesson 1: Compiled </h1>
    <hr>

    <h2>L1.1: Home | My First JavaScript</h2>
    <button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
    Click me to display Date and Time.</button>
    <p id="demo"></p>
    <hr>

    <h2>L1.2: Introduction | What Can JavaScript Do?</h2>
    <p>JavaScript can show hidden HTML elements.</p>
    <p id="demo" style="display:none">Hello JavaScript!</p>
    <button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>
    <hr>

    <h2>L1.3: Where To | Demo JavaScript in Body</h2>
    <p id="demo">A Paragraph.</p>
    <button type="button" onclick="myFunction()">Try it</button>
    <script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Paragraph changed.";
    }
    </script>
    <hr>

    <h2>L1.4: Outputs | My First Web Page</h2>
    <p>My first paragraph.</p>
    <script>
    window.alert("Alert From: L1.4");
    </script>
    <hr>

    <h2>L1.5: Statements | JavaScript Statements</h2>
    <p>A <b>JavaScript program</b> is a list of <b>statements</b> to be executed by a computer.</p>
    <p id="demo"></p>
    <script>
    let x, y, z;  // Statement 1
    x = 5;        // Statement 2
    y = 6;        // Statement 3
    z = x + y;    // Statement 4
    document.getElementById("demo").innerHTML =
    "The value of z is " + z + ".";  
    </script>
    <hr>

    <h2>L1.6: Syntax | The <b>let</b> Keyword Creates Variables</h2>
    <p id="demo"></p>
    <script>
    let x, y;
    x = 5 + 6;
    y = x * 10;
    document.getElementById("demo").innerHTML = y;
    </script>
    <hr>

    <h2 id="myH"></h2>
    <p id="myP"></p>

    <script>
    /*
    The code below will change
    the heading with id = "myH"
    and the paragraph with id = "myP"
    */
    document.getElementById("myH").innerHTML = "L1.7: Comments | JavaScript Comments";
    document.getElementById("myP").innerHTML = "My first paragraph.";
    </script>





</div>
</body>
</html>