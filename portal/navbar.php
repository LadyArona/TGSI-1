<nav class="band navbar ufsm gradient">    
    <div class="container"> 
        <ul class="nav"> 
            <li>
                <a class="uppercase humanist-font" href="http://localhost/portal">
                <span class="bold">UFSM</span> | Gerenciador de TGSI</a>
            </li> 
        </ul> 

        <ul class="nav pull-right">
            <li> 
                <div class="btn-group">    
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/portal/index.php"> 
                    <i class="icon-user"></i> <?php echo $_SESSION['UsuarioNome']; ?> <span class="caret"></span> 
                </a>

                <ul class="dropdown-menu" role="menu">  
                    <li role="menuitem">
                        <a tabindex="-1" href="">
                        <i class="icon-pencil"></i> Alterar senha</a>
                    </li> 
                    <li role="menuitem">
                        <a tabindex="-1" href="">
                        <i class="icon-question-sign"></i> Ajuda</a></li> <li role="menuitem" class="divider">
                    </li> 
                    <li role="menuitem">
                        <a tabindex="-1" href="http://localhost/portal/logout.php">
                        <i class="icon-signout"></i> Sair</a>
                    </li>
                </ul>
                </div>
            </li>
        </ul>
    </div> 
</nav>
