<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">Pluto</a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li <?php echo $this->uri->segment(1) == 'dashboard' ? 'class="active"' : null; ?>>
                    <a href="<?php echo site_url('/dashboard'); ?>">
                        <span class="glyphicon glyphicon-th-large"></span>  Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dossiers <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('/dossiers/clienten'); ?>">Cli&euml;nten</a></li>
                        <li><a href="/dossiers/zorgverleners">Zorgverleners</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Diensten <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li <?php echo $this->uri->segment(1) == 'aftekenlijsten' ? 'class="active"' : null; ?>>
                            <a href="<?php echo site_url('/diensten/aftekenlijsten');?>">
                                <span class="glyphicon glyphicon-list-alt"></span>  Aftekenlijsten
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(1) == 'wijkzorg' ? 'class="active"' : null; ?>>
                            <a href="<?php echo site_url('/diensten/wijkzorg');?>">
                                <span class="glyphicon glyphicon-road"></span>  Wijkzorg
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(1) == 'colabris' ? 'class="active"' : null; ?>>
                            <a href="<?php echo site_url('/diensten/colabris');?>">
                                <span class="glyphicon glyphicon-export"></span>  Colabris
                            </a>
                        </li>
                        <li <?php echo $this->uri->segment(1) == 'blokkeren' ? 'class="active"' : null; ?>>
                            <a href="<?php echo site_url('/diensten/blokkeren');?>">
                                <span class="glyphicon glyphicon-tower"></span>  Blokkeren
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Onderhoud <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('/onderhoud/gebruikers'); ?>">Gebruikers</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Menno <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('/auth/change_password'); ?>">Wachtwoord wijzigen</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('/auth/logout'); ?>">
                        <span class="glyphicon glyphicon-log-out"></span> Uitloggen
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<ol class="breadcrumb">
    <?php
    $uri = explode("/", uri_string());

    foreach($uri as $segment)
    {
        echo '<li>' . anchor('#', ucfirst($segment)) . '</li>';
    }
    ?>
    <!-- <li><a href="#">Diensten</a></li>
    <li><a href="#">Wijkzorg</a></li>
    <li class="active">Table</li> -->
</ol>
