<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head();
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="topMenu">
                <nav>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"><a href="#"> 9876543210</a></i></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"><a href="#"> contact@mail.com</a></i></li>
                        <li><input type="text" size="14" class="search" placeholder="search..."> <i class="fa fa-search" aria-hidden="true"></i></li>
                        <li><i class="fa fa-user" aria-hidden="true"><a href=""> Register</a></i></li>
                        <li><i class="fa fa-sign-in" aria-hidden="true"><a href=""> Login</a></i></li>
                    </ul>
                </nav>
            </div>
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/'));?>">
				    <img src="<?php echo get_template_directory_uri()?>/img/kids.png" class="logoimage">
			    </a>
            </div>
            
               
        </div>
        </header>