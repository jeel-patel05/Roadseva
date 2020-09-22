<!DOCTYPE>

<html>
<head>
	<meta charset="utf-8">
	<title>BRANDS WE SERVE</title>
    <link rel="icon" href="bws.gif" type="image/gif" sizes="25x25">
	<link rel="stylesheet" type="text/css" href="brands.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    


    

    <meta name="viewport" content="width=device-width, initial-scale=1">


<style>
  #result {
   position: absolute;
   float: right;
   width: 100%;
   max-width:500px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
   background-color:#f1f1f1;
   
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }

  </style>












    
	
</head>
<body>	
    <nav>
          
            <div class="logo">
            <a href="sectionpage.php"><img src="newLogo.jpg"></a>
           
     </nav>

   <div class="container">
        <span class="text1">Brands We Serve</span>  
   </div>


   <div class="container" style="width:200px; float: right;">
   
   <div align="left">
    <input type="text" name="search" id="search" placeholder="Search Brand" class="form-control" />
   </div>
   <ul class="list-group" id="result"></ul>
   <br />
  </div>





	<table align="center"border="3">
		<tr>
			<td > <img src="bmw.jpg"></td>
			<td> <img src="volvo.jpg"></td>
			<td><img src="kia.jpg"> </td>
			<td><img src="hyundai.jpg"> </td>
			<td><img src="audi.jpg"></td>
			<td><img src="chevrolet.jpg"> </td>
		</tr>
        <tr>
        	<td> <img src="daewoo.jpg"></td>
        	<td><img src="maruti.jpg"> </td>
        	<td> <img src="toyota.jpg"></td>
        	<td><img src="mahindra.jpg"> </td>
        	<td> <img src="skoda.jpg"></td>
        	<td><img src="mitsubishi.jpg"> </td>
        </tr>
        <tr>
        	<td> <img src="volkswagen.jpg"> </td>
        	<td> <img src="nissan.jpg"> </td>
        	<td> <img src="renault.jpg"> </td>
        	<td> <img src="benz.jpg"> </td>
        	<td> <img src="mini.jpg"> </td>
        	<td> <img src="tata.jpg"> </td>        	
        </tr>
        <tr>
        	<td><img src="honda.jpg"> </td>
        	<td><img src="tvs.jpg"> </td>
        	<td><img src="fiat.jpg"> </td>
        	<td><img src="kawasaki.jpg"> </td>
        	<td><img src="jeep.jpg"> </td>
        	<td><img src="ktm.jpg"> </td>        	
        </tr>
        <tr>
        	<td><img src="landrover.jpg"> </td>
        	<td><img src="triumph.jpg"> </td>
        	<td><img src="suzuki.jpg"> </td>
        	<td><img src="mazda.jpg"> </td>
        	<td><img src="harley.jpg"> </td>
        	<td><img src="hero.jpg"> </td>        	
        </tr>
        <tr>
        	<td><img src="yamaha.jpg"> </td>
        	<td><img src="jaguar.jpg"> </td>
        	<td><img src="ford.jpg"> </td>
        	<td><img src="hindustan.jpg"> </td>
        	<td><img src="royal.jpg"> </td>
        	<td><img src="bajaj.jpg"> </td>        	
        </tr>     

  </table>
</body>
</html>




<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
    if (value.name.search(expression) != -1 )
    {
     $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="20" width="20" class="img-thumbnail" /> '+value.name+'  </li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[1]));
  $("#result").html('');
 });
});
</script>