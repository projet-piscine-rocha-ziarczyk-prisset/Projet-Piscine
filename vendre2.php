<?php require 'header.php'; ?>

 		<header class="page-header header container-fluid">

<div class="overlayp"></div>
 			<div class="overlayp"></div>
			<style>
			header {background-image: url('imageprefere.jpg');}

			</style>
			
<div class="descriptionp1">
 			<h1 style="color:orange" align="center">Votre compte vendeur</h1></div>



 		<div class="row">

 			<div class="col-lg-4 col-md-4 col-sm-12"><br><br><br><br>
				<h3 style="color:orange" align="center">Votre profil.</h3><br>
				<form align="center">
 					<img src="imageprofil.png" class="img-fluid" >
				</form>
				<h4 style="color:orange" align="center">'Nom prénom'</h4>
 			</div>

			<div class="col-lg-4 col-md-4 col-sm-12"> <br><br><br><br>
				<h3 style="color:orange" align="center">Ajouter un arcticle.</h3>
				<form >
					<tr><br>


						<label style="color:orange" >Nom :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="name" placeholder="Votre nom" required autofocus></td><br>
						<br>
						<label style="color:orange">Identification :</label>&nbsp;
						<td><input type="txt" id="identification" placeholder="Identifiant" required autofocus></td><br>
						<br>
						
						<label style="color:orange">Catégorie :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="catégorie" placeholder="Type d'objet"></td><br>
						<br>
						<label style="color:orange">Prix :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td style="color:orange"><input type="txt" id="prix" placeholder="Prix désiré" type=text required></td><br>
						<br>
						<label style="color:orange">Descritpion :</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="description" placeholder="Descritpion de l'objet" required></td><br>
						<br>
					 
				</td>
				</form>
			</tr>
		</div>

<div class="col-lg-4 col-md-4 col-sm-12"><br><br><br><br>
<h3 align="center" style="color:orange">Choisir photo/vidéo.</h3>
<br>

 <style>
   #preview{
     width: 200px;
     display: inline-block;
   }
   #preview img{
     width: 100%;
   }
 </style>
</head>
<body>
   <form action="my-script.php" enctype="multipart/form-data" method="post">
     <div><input type="file" onchange="handleFiles(files)" id="upload" multiple name="file"></div>
     <div><label for="upload"><span id="preview"></span></label></div>

   </form>
 <script>
 function handleFiles(files) {
   var imageType = /^image\//;
   for (var i = 0; i < files.length; i++) {
   var file = files[i];
   if (!imageType.test(file.type)) {
     alert("veuillez sélectionner une image");
   }else{
     if(i == 0){
       preview.innerHTML = '';
     }
     var img = document.createElement("img");
     img.classList.add("obj");
     img.file = file;
     preview.appendChild(img); 
     var reader = new FileReader();
     reader.onload = ( function(aImg) { 
     return function(e) { 
     aImg.src = e.target.result; 
   }; 
  })(img);

 reader.readAsDataURL(file);
 }
 
 }
}
 </script>
<a href="#" class="bouton" align="center">Valider</a>
</div>
</div>
</div>


 	</header>

</div>
<?php require 'footer.php'; ?>

