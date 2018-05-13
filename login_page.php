<?php
require ('include/header.php');
require ('include/style.php');
?>
        <div class="row">
   
            <!--model-->
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <form method="post" class="modal-content animate" action="verify.php">
                        <div class="modal-header text-center" style="background-color: rgb(187, 91, 91)">
                            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="email" id="defaultForm-email" class="form-control validate" name="username">
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center" style="background-color: rgb(187, 91, 91)">
                            <button class="btn btn-red" name="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>


            <!--<div class="col-lg-12 col-md-12 mb-12">
                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Login</a>
            </div>-->        

        </div>
    </div>  
</div>                   



<script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/mdb/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/mdb/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb/mdb.js"></script>

<!--#couldnt get modal to auto load on page load
    <script type="text/javascript">
    $(document).on('ready', function(){
    $('#my-login').modal('show');
});-->

</body>
</html> 
