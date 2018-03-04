<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

    <?php include('bootstrap.php') ?>
	<?php include('header.php') ?>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span>Head office</legend>
            <address>
                <strong>House # 49, Road # 12,</strong><br>
                Sector #11,<br>Uttara - 1230,<br>
                 Dhaka, Bangladesh<br>
                <abbr title="Phone">
                    Phone:</abbr>
                +8801716967050
            </address>
            <address>
                <strong>Email:</strong><br>
                <a href="mailto:#">info@dreamploy.com</a>
            </address>
            <address>
                <strong>Website:</strong><br>
                <a href="mailto:#">www.dreamploy.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

</body>
</html>