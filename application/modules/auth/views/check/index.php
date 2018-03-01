<?php $this->load->view('templates/backend/header'); ?>

    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
    
    <form class="form-signin" method="post" >
        <?php if(isset($error_message)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warnning!!!</strong> <?php echo $error_message; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="text-center mb-4">
            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        </div>

        <div class="form-label-group">
            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="User name" >
            <label for="inputEmail">User name</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <label for="inputPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
  </body>
</html>
