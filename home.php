<style>
    .car-cover{
        width:10em;
    }
    .car-item .col-auto{
        max-width: calc(100% - 12em) !important;
    }
    .car-item:hover{
        transform:translate(0, -4px);
        background:#a5a5a521;
    }
    .banner-img-holder{
        height:25vh !important;
        width: calc(100%);
        overflow: hidden;
    }
    .banner-img{
        object-fit:scale-down;
        height: calc(100%);
        width: calc(100%);
        transition:transform .3s ease-in;
    }
    .car-item:hover .banner-img{
        transform:scale(1.3)
    }
    .welcome-content img{
        margin:.5em;
    }
</style>
<h2 class="mt-5 pt-4 mb-4 text-center">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1278150063035!2d77.50345577447412!3d12.963672087350941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e9c40000001%3A0x2d368cebf691c5fb!2sDr.%20Ambedkar%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1692589694877!5m2!1sen!2sin" height="450"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call us</h5>
                <a href="tel: +91 9591624216" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="fa fa-phone"> </i>+91 9591624216
                </a>
                <br>
                <a href="tel: +91 9844772121" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="fa fa-phone"> </i>+91 9844772121
                </a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow us</h5>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="fa fa-twitter"> </i>Twitter
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="fa fa-twitter me-1"> </i>Facebook
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="fa fa-twitter me-1"> </i>Instagram
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 py-5">
    <div class="contain-fluid">
        <div class="card card-outline card-blue shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h3 class="text-center">Welcome</h3>
                    <hr>
                    <div class="welcome-content">
                        <?php include("welcome.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>