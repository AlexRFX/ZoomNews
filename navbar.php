<head>
    <style>
        /* Set black background color, white text and some padding */
        .col-md-12 {
            background-color: #000000;
            color: white;
            padding: 15px;
        }
    </style>
</head>

<div class="row">
            <div class="col-md-12">
                <img src="imgs/logo.gif" alt="Logo" style="width:20%">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Contato</a>
                    </li>
                    <?php if (loggedin()):?>
                        <li class="nav-item dropdown ml-md-auto">
                        <a class="nav-link dropdown-toggle" href="loginout.php">Loginout</a> 
                        <div class="dropdown-menu dropdown-menu-right"</div></li>
                    <?php else: ?>
                        <li class="nav-item dropdown ml-md-auto">
                        <a class="nav-link dropdown-toggle" href="Login" id="navbarDropdownMenuLink" data-toggle="dropdown">Login</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <form action="login.php" method="post">
                            <b>Login:</b></br> 
                            <a class="dropdown-item" <label for="email"><b>E-Mail:</b></label><input type="text" placeholder="Digite o seu E-Mail" name="email" id="email" required></a> 
                            <a class="dropdown-item" <label for="password"><b>Senha:</b></label><input type="password" placeholder="Digite a sua Senha" name="password" id="password" required></a>
                            <div class="dropdown-divider"></div> 
                            <a class="dropdown-item"><button type="submit">Entrar</button></a>
                        </form>
                        </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

