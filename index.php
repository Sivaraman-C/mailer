<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>

<!-- <form action="mailhandle.php" method="post">
    
    First Name: <input type="text" name="first_name" required><br><br>
    
    Last Name: <input type="text" name="last_name" required><br><br>

    Email: <input type="email" name="email" required><br><br>

    Message:<br>
    <textarea rows="5" name="message" cols="30" required></textarea><br><br>

    <input type="submit" name="submit" value="Submit">

</form> -->

<form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="mailhandle.php" enctype="multipart/form-data">
                                <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="full-name">full Name <sup>*</sup></label>
                                            <input type="text" name="full-name" id="full-name" placeholder="Your Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="email">Email <sup>*</sup></label>
                                            <input type="email" name="email" id="email" placeholder="Your email adress" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="phone-number">phone <span>(optional)</span></label>
                                            <input type="text" name="phone-number" id="phone-number" placeholder="Your number phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="subject">subject <sup>*</sup></label>
                                            <select name="subject" id="subject">
                                                <option value="">Select a subject</option>
                                                <option value="subject1">Subject 1</option>
                                                <option value="subject2">Subject 2</option>
                                                <option value="subject3">Subject 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group" style="position: relative;">
                                            <label for="budget">your budget <span>(optional)</span></label>

                                            <span style="position:absolute; left:0; top:65%; transform:translateY(-50%); color:#fff; font-size:18px;"> $ </span>

                                            <input type="number" name="budget" id="budget" placeholder="A range budget for your project"
                                                style="padding-left:20px;">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="message">message</label>
                                            <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group upload-attachment">
                                            <div>
                                                <label for="upload-attachment">
                                                    <i class="las la-cloud-upload-alt"></i> add an attachment
                                                    <input type="file" name="file" id="upload-attachment">
                                                </label>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group submit-btn-wrap">
                                            <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

</body>
</html>