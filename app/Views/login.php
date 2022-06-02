<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LPMU UPJ</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/public/favicon.ico" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form action="<?= base_url('auth/login') ?>" method="post">
						<h3>LOGIN</h3>
						<input type="text" class="form-control" name="username" placeholder="username">
						<div class="input-group" id="show_hide_password">
							<input type="password" class="form-control" name="password" placeholder="Password">
							<div class="input-group-append">
								<a href="" class="btn btn-outline-secondary"><i class="fa-solid fa-user" aria-hidden="true"></i></a>
							</div>
                   		</div>
						<?php if (session()->getFlashdata('pesan')) : ?>
							<div class="alert alert-danger"><?= session()->getFlashdata('pesan') ?></div>
						<?php endif ?>
						<button class="submit" type="submit" name="tombol">LOGIN</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>SIMONEV</h2>
					<h5>SISTEM INFORMASI MONITORING DAN EVALUASI</h5>
				</div>
				<div class="right-inductor"><img src="<?php echo base_url(); ?>/public/img/monev_logo_putih.png" alt=""></div>
			</div>
		</div>
	</section>
</body>
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "bi bi-eye-slash" );
            $('#show_hide_password i').removeClass( "bi bi-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "bi bi-eye-slash" );
            $('#show_hide_password i').addClass( "bi bi-eye" );
        }
    });
    });
</script>
</html>