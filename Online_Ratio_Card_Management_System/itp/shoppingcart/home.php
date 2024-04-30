<!doctype html>
<html lang="en">

<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Customer</title>
  <style>
    * {
	box-sizing:border-box;
	margin:0;
	padding:0;
	font-family: 'Poppins', sans-serif;
}

p {font-size:1em;}

header {
	width:100%;
	height:40px;
	position:fixed;
	z-index:4;
	transition:0.5s ease-in-out;
}


header nav {
	display:flex;
	
}

.logo {
	margin:1% 10%;
	padding:0;
	float:left;
	color:#eee;
}
.logo h1{
	font-size: 5rem;
}
.header_list {

    width:100%;
    background: #000;
    text-align: center;
    
}

.header_list li{
	display:inline-flex;
    list-style-type:none;
    width: 200px;
    margin: 10px;
    padding: 15px;
    justify-content: space-evenly;
}

.header_list li a {

    color: white;
	text-decoration:none;
    transition:.5s;
    font-size: 2rem;

}

.header_list li a:hover,
.list li a:hover {
	color: black;
    background: #ff9900;
    border-radius: 3px;
}

.header_list li.active a,
nav ul.list li.active a {
	color:#ff9900;
    background: #000;
    width: 20px;
    border-radius: 20px;
}
.sub-menu
{
    display: none;
    list-style-type:none;
    height:100px;
    margin: 10px;
    border-radius: 30px;

}
.header_list  li:hover .sub-menu
{
    display: block;
    position: absolute;
    background-color:black;
    margin-top: 50px;
    margin-left: -25px;
}
.header_list  li:hover .sub-menu ul
{ 
    display: block;
    margin: 10px;
}
#icon {
	display:none;
}

#hero-image {
	width:100%;
	height:500px;
	position:relative;	
	background:linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("../img/g1.jpeg");
	background:-webkit-linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("../img/g1.jpeg");
	background:-moz-linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("../img/g1.jpeg");
	background-size:cover; 
	background-position:center;
	/*background-attachment: fixed;*/
}

.hero-text {
	top:50%;
	left:50%;
	text-align:center;
	position:absolute;
	transform:translate(-50%,-50%);
}

.hero-text h1 {
	font-size:70px;
    padding:20px;
    margin-top: 150px;
	color:#eee;
}

.flex-container {
	display:flex;
	display:-webkit-flex;
	display:-moz-flex;
	width:100%;
	height:100%;
}

.flex-item1 {
	width:80%;
	height:auto;
	position:relative;
}


.content1 {

    top:40%;
    left:50%;
     width: 50%;
	transform:translate(-50%, -50%);
	position:absolute;
}

.content1 h1 {
	font-size:40px;
	margin:20px 0;
}
.prap {
	width:400px;
	height:60px;
}
.prap p {
	font-size:30px;
	margin:10px 0;
	padding:0;
}

.content2 {
	margin:0 0 10px;
    padding:0;
    height: 100%;
}

.content2 img {
	width:100%;
    height:100%;
}
.contact{

	background: url(../img/banner5.jpg) no-repeat 0px 0px;
    background-size:cover;

}

.header {
    text-align: center;
	

}

.header h1 {
    font-size: 3em;
    color:whitesmoke;
    font-weight: 400;
	font-family: 'Candal', sans-serif;
}
.contact-w3{
    margin: 4em auto 0;
    width: 30%;
    -webkit-appearance: none;
    background-color: rgba(7, 6, 11, 0.63);
    padding: 2em;
	border-radius:3px;
}
.contact-w3 input[type="text"], .contact-w3 textarea {
    width: 96%;
    padding: 0.7em;
    background: #fff;
    color: #000;
    border: none;
    outline: none;
    font-size: 0.95em;
    border-top: 3px solid #0c6da2;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -o-border-radius: 3px;
    font-family: 'Open Sans', sans-serif;
}
.row {
    margin: 0.8em 0;
}
.row1 {
    margin-top: 0.8em;
}
.contact-left-w3 {
    float: left;
	width: 45%;
    margin-right: 5%;
}
.contact-right-w3l {
    float: left;
	width: 48%;
}
.contact-w3 textarea {
    resize: none;
    height: 150px;
}
.contact-w3 label {
    font-size: 0.95em !important;
    color: #fff !important;
	margin-bottom: 8px;
	display: block;
	font-weight: 600;
}
.contact-w3 input[type="submit"] {
    font-size: 1em;
    padding: 0.8em;
    display: block;
    margin-top: 1em;
    outline: none;
   background: #0c6da2;
    color: #fff;
    border: none;
    width: 100%;
	cursor: pointer;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
	border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -o-border-radius: 3px;
	 font-family: 'Open Sans', sans-serif;
}
.contact-w3 input[type="submit"]:hover{
	   background: #fff;
	   color:#000;
}
.footer-w3-agile {
    text-align: center;
    padding: 4em 0;
}
.footer-w3-agile p {
    font-size: .9em;
    color: #fff;
    margin: 0px;
	line-height:1.8em
}
.footer-w3-agile p a {
    color: #fff;
}
.f{
    align-items: center;
}

  </style>
</head>
<body>
  <header>
    <div class="p-1" id="topHeader">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right">
            <a class="p-1" href="tel:+919090909090"> Any Enquiry </a>
            <a class="p-1" href="mailto:simplesnippetsinfo@gmail.com  "> <i class="fas fa-envelope"></i>
              ratnadeepsalaskar@kccemsr.edu.in </a>
          </div>
        </div>
      </div>
    </div>

  </header>
  <section class="breadcrumbs-section">
    <div class="container p-1 p-sm-3">
      <div class="row">
        <div class="col-12">
          <h2>Customer</h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://localhost/itp/index1.php">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
        </div>
      </div>
    </div>	   
  </section>

  <section class="about-company-section">
    <div class="container p-1 p-sm-3">
      <div class="row">
        <div class="col-12 text-center">
          <h2>ONLINE RATION CARD MANAGEMENT</h2>
          <hr />
        </div>

        <div class="col-md-3">
          <img class="img-fluid" src="https://gujarati.cdn.zeenews.com/gujarati/sites/default/files/2022/04/25/381927-rationcarddkk.jpg" alt="Logo">

        </div>

        <div class="col-md-9">
          <p>
			Welcome to online ration card management, your number one source for all things. 
			We're dedicated to giving you the best of our products, 
			with a focus on three characteristics, ie: dependability, customer service and uniqueness.
          </p>
          <p>
            With the help of e-Ration service, applicants can obtain ration cards and check their costs and food grain availability online. This will help end the corrupt practice of holding back rations and ensure cards reach the needy. Aadhaar card holders can apply for e-ration cards. The Department of Food Supplies and Consumer Affairs website provides eligibility details for the food security plan. This service was first introduced in Delhi.[21] Later this has been followed by the state Govt of Tamil Nadu.
          </p>
          <p>
			We hope you enjoy our products as much as we enjoy offering them to you. 
			If you have any questions or comments, please don't hesitate to contact us.	
          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- START : Home page 5rd section - Newsletter section -->
  <section class="home-newsletter p-2 pt-md-2 pb-md-2">
    <div class="row">
      <div class="col-12 text-center">
        <h3>
          Feedback
        </h3>
        <div class="input-group p-3">
          <input type="text" class="form-control" placeholder="Enter your Feedback">
          <span class="input-group-btn">
            <button class="btn btn-theme" type="submit">Submit</button>
          </span>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Home page 5th section - Newsletter section -->


  <!-- START :  Home page 6th section - Our services -->
  <section class="pt-3 pb-4">
      <div class="container">
          <div class="row mt-4">
            <div class="col text-center">
              <h3>
                This Month Product
              </h3>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 text-center">
              <img class="img-fluid qualities-img p-4" src="imgs\rice1.jpg">
              <h5>
                 RICE
              </h5>
    
            </div>
            <div class="col-md-6 text-center">
              <img class="img-fluid qualities-img p-4" src="imgs\team\wheat.jpg">
              <h5>
                WHEAT
              </h5>
            </div>
            <div class="col-md-6 text-center">
                
                <img class="img-fluid qualities-img p-4" src="imgs\Sugar.jpeg">
                <h5>
                  SUGAR
                </h5>
            </div>

            <div class="col-md-6 text-center">
                
              <img class="img-fluid qualities-img p-4" src="imgs\oil.jpg">
              <h5>
                OIL
              </h5>
          </div>
        </div>
          </div>
  </section>
  
  <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>