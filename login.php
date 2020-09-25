
<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_login;?></h1>
</div>
<div class="card mb-3">
<div class="card-header">
           
</div>
<div class="card-body">
<div class="row">
    <div class="col-md-4 ">        
        <?php if($_POST) include 'aksi.php'; ?>
        <form method="post">                        
            <div class="form-group">
                <label><?php echo $lang_menu_usernamelogin;?></label>
                <input type="text" class="form-control" placeholder="<?php echo $lang_menu_usernamelogin;?>" name="user" autofocus />
            </div>
            <div class="form-group">            
                <label><?php echo $lang_menu_passwordlogin;?></label>
                <input type="password" id="inputPassword" class="form-control" placeholder="<?php echo $lang_menu_passwordlogin;?>" name="pass" />  
            </div>        
            <div class="form-group">                
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> <?php echo $lang_menu_login;?></button>
            </div>   
            </div>     
        </form>      
    </div>
</div>
</div>
