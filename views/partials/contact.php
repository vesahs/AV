<section class="contact" id="contact">
    <div class="container">
        <div class="signup">
            <div class="wrapper">
                <form action="/contact" method="post">
                    <h1>Contact Form</h1>
                    <h3>Write us a message: </h3>
                    <div class="input-box">
                        <input type="text" maxlength="10" placeholder="First name" name="name" id="name" included>
                        <img class="icon" src="./resources/icons/1.png" alt="" width="25px">
                    </div>
                    <div class="input-box">
                        <input type="text" maxlength="10" placeholder="Last name" name="lastname" id="lastname" included>
                        <img class="icon" src="./resources/icons/1.png" alt="" width="25px">
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email" id="email" included>
                        <img class="icon" src="./resources/icons/3.png" alt="" width="25px">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Phone number" name="phone" id="phone" included>
                        <img class="icon" src="./resources/icons/4.png" alt="" width="25px">
                    </div>
                    <div class="input-box message-input">
                        <textarea placeholder="Enter your message:" name="message" id="message" included></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>

        <div class="contact-info">
            <h2>Additional information</h2>
            <div class="info-group">
                <h3>Address:</h3>
                <p>54 Cunningham Street, Joanna, Australia, 6236.</p>
            </div>
            <hr>
            <div class="info-group">
                <h3>Phone:</h3>
                <p>+1 234 567 890</p>
            </div>
            <hr>
            <div class="info-group">
                <h3>Email:</h3>
                <p>info@avproducts.com</p>
            </div>
        </div>
    </div>
</section>