<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form PHP</title>
    </head>
    <body>
        <h3>Contact Me</h3>

            <form action="processform.php" method="POST">

                    <p>
                        <label for="first_name">First Name</label><br />
                        <input type="text" name="first_name" placeholder="Enter Your First Name" />
                    </p>

                    <p>
                        <label for="last_name">Last Name</label><br />
                        <input type="text" name="last_name" placeholder="Enter Your Last Name" />
                    </p>

                    <p>
                        <label for="email">Email</label><br />
                        <input type="email" name="email" placeholder="Enter Your Email" required />
                    </p>

                        <p>
                            <label for="department">Department</label><br />

                            <select name="department">
                                <option>Select Department</option>
                                <option>HR</option>
                                <option>Marketing</option>
                                <option>Board </option>
                                <option>Kitchen</option>
                            </select>
                        </p>
                        <p>
                            <label for="gender">Gender</label><br />
                            <input type="radio" name="gender" value="female" /> Female 
                            <input type="radio" name="gender" value="male" /> Male
                        </p>
                    <p>
                        <label for="email">Your Message</label><br />
                        <textarea name="message" ></textarea>
                    </p>
                    <p>
		
                        <input type="checkbox" name="terms" value="agreed" required /> By Checking this box you agree to our terms and conditions
                                  
                      </p>
                    
                    <button type="submit">Send Message</button>

            </form>
    </body>
</html>