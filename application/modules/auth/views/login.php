<div class="row">
    <div class="col-md-offset-4 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1><?php echo lang('login_heading');?></h1>
                <p><?php echo lang('login_subheading');?></p>

                <div id="infoMessage"><?php echo $message;?></div>

                <?php echo form_open("auth/login");?>

                <div class="form-group">
                    <?php echo lang('login_identity_label', 'identity');?>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class='glyphicon glyphicon-user'></span>
                        </div>
                        <?php echo form_dropdown('identity', $users, $this->form_validation->set_value('identity'), 'class="form-control" id="identity"'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo lang('login_password_label', 'password');?>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class='glyphicon glyphicon-lock'></span>
                        </div>
                        <?php echo form_input($password);?>
                    </div>
                </div>

                <p>
                    <?php echo lang('login_remember_label', 'remember');?>
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </p>


                <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-default btn-block"');?></p>

                <?php echo form_close();?>

                <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            </div>
        </div>
    </div>
