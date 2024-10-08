<div class="user">
    <div class="user__image">
        <!-- Default image this example application has no uploading images -->
        <svg class="user__image-icon">
            <use xlink:href="icons/sprites.svg#icon-user-tie"></use>
        </svg>
        <!-- <a class="user__details-cta"  data-toggle="modal" data-target="#myModal">Change Password</a> -->
        <a class="btn btn-custom" data-toggle="modal" data-target="#myModal">Change Password</a>
        <!-- <button data-toggle="modal" data-target="#myModal">Open Modal</button> -->

        </div>
    <div class="user__details">
        <h2 class="margin-bottom-md">Personal Information</h2>
        <div class="user__details-col margin-bottom-md">
            <h4>Username </h4><br>
            <div class="user__details-col-field">
                <?= $_SESSION["name"] ?>
            </div>
        </div>

        <div class="user__details-col margin-bottom-md">
            <h4>Email </h4><br>
            <div class="user__details-col-field">
                <?= $_SESSION["email"] ?>
            </div>
        </div>
</div>



<!-- Add this at the end of the <body> section -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>






  </div>