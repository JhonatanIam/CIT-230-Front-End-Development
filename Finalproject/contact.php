<?php include 'header.php'; ?>


    <main>
        <script src="js/jquery.min.js"></script><style id="stylerStyle"></style><script id="stylerScript"></script>
        <script src="js/hideMenu.js"></script>

        <div id="content" class="clearfix">
            
            <h1>Contact Us!</h1>
            
            <p>(888) 123-4567</p>
            <p>contactus@salmonriver.com</p>
            <p>1000 S Main St. Riggins, ID</p>

            <form action="index.php" method="post" enctype="multipart/form-data" name="attend" id="contact">
                <fieldset>
                    <label><span>Name</span><input name="name" type="text" placeholder="full name" pattern="[a-zA-Z -._]{4,99}" required autofocus title="Provide your full name"></label>
                    <label><span>Email</span><input name="email" type="email" placeholder="Your@email.com" required title="Provide a valid email address"></label>
                    <label><span>Phone</span><input name="phone" type="tel" placeholder="1234567890" pattern="[0-9]{10,99}" required title="Provide a valid phone number"></label>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Your message..." ></textarea>
                </fieldset>

                <input type="submit" value="Send" class="submitBtn" >

                <input type="hidden" value="Contact" name="subject" >
                <input name="redirect" type="hidden" value="thanks.html">
            </form>
		
        </div>

    </main>
        
    <?php include 'footer.php'; ?>
		