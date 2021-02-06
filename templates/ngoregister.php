
<?php 
  include "../config/dbconfig.php"; 
  include "../server/ngoreg_server.php";
  session_start();
  ?>


 




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Food-Filler: Working for the needy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
<!--   
  script for pagination of table -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>





  <!-- Google Api Script-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/ngocard.css" rel="stylesheet">
  <link href="../assets/css/ngoregisterform.css" rel="stylesheet">






  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        margin-top:30px;
        display: block;
  margin-left: auto;
  margin-right: auto;
        height: 80%;
        width:80%;
        text-align:center;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
          <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
              <a href="landing.php"><img src="../assets/img/logo1.png" style="height: 100px; width: 200px"></a>
            </div>
    
            <nav class="nav-menu d-none d-lg-block">
              
        <ul>
          <li class="active"><a href="landing.php">Home</a></li> 
                <li ><a href="about-us.html">About</a></li>
                <li><a href="donate.php">Donate leftovers from event</a></li>
                <li><a href="ngoregister.php">Register Organisation</a></li>
                <li><a href="profile.php">Your Profile</a></li>
                <li class="drop-down"><a href="">Testimonials</a>
                  <ul>
                    <li><a href="leaderboard.php">Our Leaderboard</a></li>
                    <li><a href="testimonial.php">Listen from Users</a></li>
                    <li><a href="thankyou.php">Thank you</a></li>
                  </ul>
                </li>
                <li ><a href="contact.php">Contact US</a></li>
           
            
          </ul>
     
          <?php

          if (isset($_SESSION['email'])) {
             echo" <img href='profile.php'  class='nav-avatar' style='height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;'
             src='..\assets\img\prof.jpg'> 
      <button style='border:3px solid #000000;border-radius:8px 0px 8px 0px;'><a href='profile.php?logout='1''><b  style='color:#006494;font-size:15px;'>Logout</b></a>  </button>
        ";
          };
          ?>




            </nav>
          </div>
        </div>
      </header>
 




  
<!-- latest registered NGO's -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Want to be a part of this Organization</h1>
      <h2>Register your NGO for donation</h2>
      <a href="#myform" class="btn-get-started scrollto">Register Your NGO, Click Here</a>
    </div>
  </section>
  <!-- End Hero -->


<section>
  <div class="container"> 
  <div style="text-align: center;color: black;font-size: 23px;"><b>Our Latest Registered NGO's</b></div>
  <br/>
  <div class="row">
  
   
<?php 
 
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM registered_NGO ORDER BY id DESC LIMIT 3";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);



if($num)
{
    while ($row = mysqli_fetch_assoc($result)){
        
        echo' <div class="col-lg-4"> '; 
         echo '<div class="wrapper">';
    echo '<div class="img-area">';
      echo '<div class="inner-area">';
        echo '<img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">';
      echo '</div>';
    echo '</div>';
    echo '<div class="icon arrow"><i class="fas fa-arrow-left"></i></div>';
    echo '<div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>';
    echo '<div class="name" style="font-weight:bold;">' . $row['ngoname'].  '</div>';
    echo '<div class="about" style="font-weight:bold;">' . $row['ngoaddress'].' '. $row['ngopin']. '</div>';
    echo '<div class="social-icons">';
      echo '<a href="#" class="fb"><i class="bx bxl-facebook bx-tada-hover"></i></a>';
      echo '<a href="#" class="insta"><i class="bx bxl-instagram bx-tada-hover"></i></a>';
      echo '<a href="#" class="twitter"><i class="bx bxl-twitter bx-tada-hover"></i></a>';
      echo '<a href="#" class="yt"><i class="bx bxl-linkedin-square bx-tada-hover"></i></a>';
    echo '</div>';
    echo '<div class="buttons">';
      echo '<button><span style="font-weight:bold;">Mail: </span> ' . $row['ngoemail']. '</button>'; 
    echo '</div>';
    echo '<div class="buttons">';
      echo '<button><span style="font-weight:bold;">Contact: </span> ' . $row['ngocontact']. '</button>'; 
    echo '</div>'; 

    echo '<div class="buttons">';
      echo '<button><span style="font-weight:bold;">Registered date: </span> ' . $row['registereddate']. '</button>'; 
    echo '</div>'; 
  echo '</div>';


  echo'</div>';
    }

    
} 
?>
   </div>
   </div>
   </section> 

 
<!-- End Registered NGO's -->




<!-- other NGO's table -->
<!-- <section style="margin-left:20px; margin-right:20px;border:3px solid black;">
<div style="text-align: center;color: black;font-size: 23px;"><b><u>Other Registered NGO's</u></b></div> -->

<h1 text-align="center">Other Registered NGO's'</h1>
<div class="container">
        <?php
        
$conn = mysqli_connect('localhost', 'root', '', 'food_filler_db');

$sql = "SELECT * FROM registered_NGO";
$result =  mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo '
<table class="table table-fluid" id="myTable1">
<thead>
  <th data-field="id">NGO Id</th>
  <th data-field="name">Name</th>
  <th data-field="name">Owner Name</th>
  <th data-field="pin-code">Pin Code</th>
  <th data-field="city">City</th>
  <th data-field="address">Address</th>
  <th data-field="Contact_no">Contact No.</th>
  <th data-field="email">Email</th>
  <th data-field="status">Status</th>
</thead>
<tbody>';


if($num)
{
    while ($row = mysqli_fetch_assoc($result)){
        echo 
        "<tr>
        <td> ". $row['ngoid']. "</td>
        <td> ". $row['ngoname']. "</td>
        <td>". $row['ownerfirstname']." ". $row['ownerlastname']."</td>
        <td>". $row['ngopin']."</td>
        <td>". $row['ngocity']. "</td>
        <td>". $row['ngoaddress']. "</td>
        <td>". $row['ngocontact']. "</td>
        <td>". $row['ngoemail']. "</td>
        <td class='table-success'>". $row['ngostatus']. "</td>
      </tr>
      "
      ;
    }
}
 
echo '
</tbody>
</table>
';
?>
</div> 

<!-- </section> -->
<!-- End other NGO's table -->




<!-- 
 map starts here
   -->
<div id="map"></div> 
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };
     //Find live location user
     var lt;
     var ln;
     GetGeolocation();
     function GetGeolocation() 
     { 
               navigator.geolocation.getCurrentPosition(GetCoords);
     }
     function GetCoords(position){
      
      lt=position.coords.latitude;
      ln=position.coords.longitude;
      // alert(lt); 
      // alert(ln); 
      // alert(position.coords.accuracy); 
      }
    //End live location of user
    icon: { url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"   }

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(25.405754, 81.876980),
          //center: new google.maps.LatLng(lt-1.4409548,ln+0.9308208), 
          zoom: 12
        });
        //user marker
        let marker = new google.maps.Marker({
        map: map,
        position: {lat: 25.40575, lng: 81.8769},
        icon: {
          url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
        }
      });
        var infoWindow = new google.maps.InfoWindow;
          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = document.getElementsByTagName('markers');
            //console.log(markers);
            var i=0;
            Array.prototype.forEach.call(markers[0].childNodes, function(markerElem) 
            {
                    var id = markers[0].childNodes[i].getAttribute('id');
                    var name = markers[0].childNodes[i].getAttribute('name');
                    var address = markers[0].childNodes[i].getAttribute('address');
                    var type = markers[0].childNodes[i].getAttribute('type');
                    var lat=markers[0].childNodes[i].getAttribute('lat');
                    var lng=markers[0].childNodes[i].getAttribute('lng');
                    var mob=markers[0].childNodes[i].getAttribute('mobile_no');
                    //console.log(id);
                    console.log(name);
                    //console.log(address);
                    // console.log(type);
                    // console.log(lat);
                    // console.log(lng);
                    var point = new google.maps.LatLng(
                        parseFloat(markers[0].childNodes[i].getAttribute('lat')),
                        parseFloat(markers[0].childNodes[i].getAttribute('lng')));
                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = name
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));
                    var text = document.createElement('text');
                    text.textContent = address
                    infowincontent.appendChild(text);
                    var icon = customLabel[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        label: icon.label
                    });
                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });
                    i++;
            });
          });
        }
      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };
        request.open('GET', url, true);
        request.send(null);
      }
      function doNothing() {}
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPKOD1-Gxhg9YvhLKl8lPFokjSBY3Cy-E&callback=initMap">
    </script>

<!-- map ends here -->



<!-- NGO Register Form -->

<section class="form-v10" >
	<div class="page-content" id="myform">
		<div class="form-v10-content" >
            <h2  style="text-align:center;font-weight:bold;margin-top: 20px;">NGO REGISTRATION FORM</h1> 
            <br>
            <?php include('errors.php'); ?>
			<form class="form-detail" action="" method="post" enctype="multipart/form-data">
				<div class="form-left">
					<h2>NGO Owner details</h2>
					<div class="form-row">
						<select name="title">
						    <option class="option" value="title">Title</option>
						    <option class="option" value="Mr.">Mr.</option>
						    <option class="option" value="Miss">Miss</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="ownerfirstname" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="ownerlastname" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<input type="email" name="owneremail" class="company" id="company" placeholder="Email of Owner" required>
                    </div>
                    <div class="form-row">
						<input type="tel" name="ownercontact" class="company" id="company" placeholder="Contact of owner" required>
					</div>
				</div>
				<div class="form-right">
                    <h2>NGO's Details</h2>
                    <div class="form-row">
						<input type="text" name="ngoname" class="additional" id="address" placeholder="Enter name of NGO" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
							<input type="tel" name="ngocontact" class="additional" id="city" placeholder="Enter contact number" required>
						</div>
						<div class="form-row form-row-1">
							<input type="email" name="ngoemail" class="zip" id="zip" placeholder="Enter Email of NGO" required>
						</div> 
					</div>
					<div class="form-row">
						<input type="text" name="ngoaddress" class="additional" id="address" placeholder="Enter address of NGO" required>
                    </div>
                    
					<div class="form-group">
                        <div class="form-row">
							<input type="text" name="ngocity" class="additional" id="city" placeholder="Enter city" required>
						</div>
						<div class="form-row form-row-1">
							<input type="text" name="ngopin" class="zip" id="zip" placeholder="Pin Code" required>
						</div> 
                    </div>
                    
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <label for="myfile" style="color: white;">Select NGO verification document:</label>
                            <input type="file" name="ngofile" id="myfile"> 
						</div> 
                        <div class="form-row">
							<input type="text" name="ngoid" class="additional" id="city" placeholder="Enter ID/Registration no." required>
						</div>
						
                    </div>
                     
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
			 
			
		</div>
	</div>
</section>



<!-- NGO Register Form end here -->



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Food-Filler</h3>
            <p>
              95/45, NG road Highway <br>
              Raipur, RPR 194402<br>
              India <br><br>
              <strong>Phone:</strong> + 91 992299223<br>
              <strong>Email:</strong> foodfiller@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="landing.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="leaderboard.php">Leaderboard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="profile.php">See Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donate to US</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Have a suggestion for us? Please write to us</h4>
            <p>You can also write to us your story or your experience with us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Your email">
            </form>
          </div>

        </div>
      </div>
    </div>

<!-- 
     script for table pagination -->

     <script>
    $(document).ready( function () {
    $('#myTable1').DataTable();} );
    </script>




  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>



  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

</body>

</html>


<?php
//require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}
// Opens a connection to a MySQL server
$connection=mysqli_connect($servername, $username, $password, 'food_filler_db');  
 $query = "SELECT * FROM registered_ngo";
$result = mysqli_query($connection, $query);
$testimonial_num = mysqli_num_rows($result);

//header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<div ';
  echo 'id="' . $row['id'] . '" ';
  echo 'name="' . parseToXML($row['ngoname']) . '" ';
  echo 'address="' . parseToXML($row['ngoaddress']) . '" ';
  echo 'lat="' . $row['latitude'] . '" ';
  echo 'lng="' . $row['longitude'] . '" ';
  echo '></div>';
  $ind = $ind + 1;
}
// End XML file
echo '</markers>';

?>
