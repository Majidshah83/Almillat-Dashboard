<!DOCTYPE html>
<html style="background: gainsboro;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

   	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

    .tabcontentf {
    width: 35%;
    border: 2px solid black;
    padding: 74px;
    background-color: aliceblue;
    margin-left: 34%;
    color: black;
    margin-left: 0px;
    width: auto;

}
.body1{
    border: 2px solid black;
    margin-top: 0px;
    margin-left: 20%;
    margin-right: 20%;
    height: auto;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;

}


</style>
</head>
<body class="body1">
<strong>&nbsp;&nbsp;<p>Add Media</p></strong>
<button class="tablink" onclick="openPage('Home', this, 'red')">Upload New Image</button>
<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Old Image</button>
<div id="Home" class="tabcontent">

<div class="tabcontentf">
<input type="file" class="files" name="image-text" id="videoUploadFile" style="margin-left: 43%; margin-top: 10%;">



<div id="message">
    
</div>

</div>
</div>

</div>




<div id="News" class="tabcontent">
 @foreach($storeImage as $storeImage)

 <label><input class="foo" type="checkbox" name="images[]"  value="{{$storeImage->image}}"><img src="{{'upload/blog/'.$storeImage->image }}" width="80" height="90"></label>
  {{-- <input type="checkbox"   />
    <label id="myCheckbox1" for="myCheckbox1"><img src="{{'upload/blog/'.$storeImage->image }}" width="80" height="90" id="Newss"/></label> --}}

 @endforeach
</div>



<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">


 if ($('#videoUploadFile').get(0).files.length === 0) {
    console.log("No files selected.");
}
//  document.getElementById("News").onclick = function () {
//         location.href = "blog-create";
//     };
document.getElementById("videoUploadFile").onclick = function () {
        location.href = "blog-create";
    };
//slected image
$(document).ready(function(){

    $('.foo').on('change', function(){
        $imagevalue=$(this).val();
       alert($imagevalue);
        location.href = "blog-create";
    });
});
</script>

</body>
</html>

