<style>
	google-maps 
	{
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
	.google-maps iframe
	 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
<br>
<hr class="w-75">	
  <!--FOOTER-->
    <div class="footer bg-light">
		<div class="container text-dark">
		 <div class="row">
		 <div class="col-sm-4 google-maps">
			<!--<h5 class="text-center text-success">OUR LOCATION</h5-->
		 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.89059566602!2d89.63232821421407!3d27.472665182889696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1941a00697d83%3A0x882b6118b900cc7d!2sMinistry%20of%20Economic%20Affairs!5e0!3m2!1sen!2sbt!4v1616821277096!5m2!1sen!2sbt" width="300" height="300" frameborder="0" style="border:0"></iframe>
		 </div>
		 <div class="col-sm-4">
			<h5 class="text-center text-success">CONTACT US</h5> <hr>
			<ul class="list-unstyled  px-5">
				<li><i class="fa fa-phone-alt text-success py-2 mr-2"> </i>Phone - +975-2-322407/325588</li>
				<li><i class="fas fa-envelope-open-text text-success py-2 mr-2"> </i><a class="text-secondary" href="mailto:dot@moea.gov.bt">dot@moea.gov.bt</a> </li>
				<li><i class="fas fa-inbox text-success py-2 mr-2"> </i>Postbox - 580</li>
				<li><i class="fas fa-map-marker-alt text-success py-2 mr-2"></i>Yarden Lam, Chubachu, T/phu</li>
				<li><i class="far fa-caret-square-right text-success py-2 mr-2"></i><a href="https:/www.moea.gov.bt " target="_blank" class="text-secondary">Department-of-Trade </a></li>
				<li><i class="fas fa-clock text-success py-2 mr-2"></i>Mon - Fri : 9 AM - 5 PM</li>
			</ul>
				 
		 </div>
			 <div class="col-sm-4"><h5 class="text-center text-success">ABOUT US</h5> <hr>
		 <ul class="list-unstyled px-4 links">
	   
   
	 <div class="text-center">
		  <button type="button" class="btn w-50" data-toggle="collapse" data-target="#vission">VISSION</button>
	 </div>
	 <div id="vission" class="collapse text-center"><br>
	   "To spearhead the growth of a dynamic trade sector leading <br>
	   to a greater prosperity of the nation."
	 </div><br>
	 <div class="text-center">
		 <button type="button" class="btn w-50" data-toggle="collapse" data-target="#mission">MISSION</button>
	 </div>
	 <div id="mission" class="collapse text-center"><br>
	   
		 <p>To create an open and liberal environment conducive for the growth of trade sector;</p>
		 <p>To facilitate the integration of the nation into the regional and global trading system;</p>
		 <p>To stimulate the growth of the export sector and enhance export earnings</p>
		 <p>To promote competitive and fair trade practices within the country.</p> 
	 </div><br>
 
	 <div class="text-center">
	   <button type="button" class="btn  w-50" data-toggle="collapse" data-target="#about">ABOUT WEB APP</button>
   </div>
   <div id="about" class="collapse text-center"><br>
	 
	 <p>
	   This web application was developed mainly to monitor the bar and entertainment centres <br> in Bhutan
	   through strict impelmentation of rule of law by multisectoral intervention.<br>
	 </p>  
   </div><br>
			 
		 </ul>
		  
		 </div>
		 </div>
		 <hr> 
	 </div> 
	 
 
	 </div>
	 <!-- Copyright -->
	 <div class="footer-copyright text-center py-0">&copy;2021 Copyright:
		<p> Department of Trade</p>
	  </div>
	  <!-- Copyright -->
	 
	 <script>
 $(document).ready(function(){
   $("#myInput").on("keyup", function() {
	 var value = $(this).val().toLowerCase();
	 $("#forms tr").filter(function() {
	   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
   });
 });
 </script>
 <script>
 $(document).ready(function(){
   $("#myInput").on("keyup", function() {
	 var value = $(this).val().toLowerCase();
	 $("#downloads tr").filter(function() {
	   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
   });
 });
 </script>
  
  <script>
 $(document).ready(function(){
   $("#myInput").on("keyup", function() {
	 var value = $(this).val().toLowerCase();
	 $("#contact tr").filter(function() {
	   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
   });
 });
 </script>
 <script>
 $(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();   
 });