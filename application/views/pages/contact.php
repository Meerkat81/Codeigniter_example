<!--
Name: Casey Meurer
Coding 08
Purpose: Contact Page
-->
    <div class="row">
        <div class="col-lg-12">
            <div id="msg">
                <!-- This is a blank area to talk with user -->
                    <br>
            </div>
            <form id="contact-data" name="emailForm" role="form" accept-charset="utf-8">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input name="name" type="text" id="name" class="form-control"  placeholder="Your Name" maxlength="64">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" id="remail1" name="remail1" class="form-control" placeholder="Return Email" maxlength="64">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" id="remail2" name="remail2" class="form-control" placeholder="Re-enter Return Email" maxlength="64">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject"
                                   maxlength="64">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <textarea  id="message" name="message" class="form-control" placeholder="Your Message"
                                       columns="50" rows="10" maxlength="1000" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-md-4">
                        <button type="button" class="btn btn-primary align-self-center" id="send">Send</button>
                        <button type="button" class="btn btn-primary align-self-center" id="clear">Clear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </script>