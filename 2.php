<!DOCTYPE html>
<html>
<head>
	<title>Soal Nomor 2</title>
	<style>
		body{
	font-family: sans-serif;
	background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
}
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
label{
	font-size: 11pt;
}
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
</style>
</head>
<body>
 
	<h1> <br/>
	 </h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form>
			<label>Username</label>
			<input type="text" pattern="(?=.*[a-z]).{6}" name="username" class="form_login" placeholder="Username .." required>
 			
			<label>Email</label>
			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form_login" placeholder="Email .." required>

			<label>Password</label>
			<input type="text" pattern="(?=.*\d)(?=.*[A-Z]).{1}+(?=.*[a-z0-9]).{8,}" name="password" class="form_login" placeholder="Password .." required>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		<br>
	</div>
 <br>
 <br>
 
</body>
</html>