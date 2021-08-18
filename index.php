<html>
<head>
    <title>Basic Banking System</title>
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:blue;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url('bank 2.jpg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body >

	<div id="header">
       <br>
       <h1 style=" font-family:Arial; FB; font-size: 60px; color:#00ffff; text-shadow: 2px 2px black;"> Spark Bank</h1>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Transfer Money</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">Transaction history</button>
               </a>

            </table>
    </div>
	           
</body>
</html>