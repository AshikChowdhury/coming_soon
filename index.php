<?php  

    $result = '';
    $emailError ='';
    if (isset($_POST['submit'])) {
        $form = $_POST['email'];
        $to = 'ashikbracu@gmail.com';
        $subject = 'Email Sign Up';
        $body = 'Please sign me up to the mailing list.';
        

        if (!$_POST['email']) {
            $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp Please Enter A Valid Email</div>';
        }

        if (!$emailError) {
            if (mail($to, $subject, $body, $form)) {
                $result = '<div class="text-success"> <i class="fa fa-check" aria-hidden="true"></i>&nbspThank you, we\'ll kep you updated</div>';
            }else{
                $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbspSorry, try again!</div>'; 
            }
        }


    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    
  </head>
  <body>
    <section id="logo">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<img src="img/my-logo.png" class="img-fluid"/>
    			</div>
    		</div>
    	</div>
    </section>

    <section id="intro">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<p>We're Working Hard, We'll Be Ready To Lounch</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section id="counter">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="countdown"></div>
    			</div>
    		</div>
    	</div>
    </section>


    <section id="icons">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<ul class="list-inline">
    					<a href="https://twitter.com/" target="blank"><li class="list-inline-item"><i class="fa twitter fa-twitter-square fa-3x"></i></li></a>
    					<a href="https://facebook.com/" target="blank"><li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x"></i></li></a>
    					<a href="https://google.com/" target="blank"><li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x"></i></li></a>
    					<a href="https://instagram.com/" target="blank"><li class="list-inline-item"><i class="fa instagram fa-instagram fa-3x"></i></li></a>
    				</ul>
    			</div>
    		</div>
    	</div>
    </section>

    <section id="signup">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<form class="form-inline" role="form" method="post" action="index.php">
    					<input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Your Email">
    					 <button type="submit" class="btn btn-signup btn-sm" name="submit" value="Send">Find Out More</button>
    				</form>

                    <?php echo $emailError;?>
                    <?php echo $result;?>

    			</div>
    		</div>
    	</div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript">
		$(function() {
		    $('.countdown').countdown({
		        date: "December 7, 2019 15:03:26"
		    });
		});
	</script>

  </body>
</html>