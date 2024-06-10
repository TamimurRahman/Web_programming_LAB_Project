<?php 
include("database.php"); // Ensure the correct database file is included
if(isset($_POST["submit"])){

    $s_id = $_POST["s_id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $symptoms=$_POST["symptoms"];
    $tests=$_POST["test"];
    
    
    // Assuming you have a database connection established
    // and the table name is "patients"
    $sql = "INSERT INTO patients (s_id, name, phone, email, date, symptoms,tests)
            VALUES ('$s_id', '$name', '$phone', '$email', '$date','$symptoms','$tests')";
    
    // Execute the query (you'll need to handle this part)
    // For example, using mysqli:
    
    // if(empty($_POST["s_id"])){
    
    //     die();
    // }
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive hospital website design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <!--header section-->
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> GUB HEALTH CARE.</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#doctors">Doctors</a>
            <a href="#book">Book</a>
            <a href="#review">Review</a>
            <a href="#blogs">Blogs</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <section class="home" id="home">
        <div class="image">
            <img src="image/Doctors-bro.svg" alt="">
        </div>

        <div class="content">
            <h3>stay safe,stay healthy</h3>
            <p>Our team of dedicated healthcare professionals is here to support you.</p>
            <a href="#" class="btn">read more<span class="fas fa-havro-right"></span></a>
        </div>
    </section>

    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>3+</h3>
            <p>doctors at work</p>
        </div>
        <div class="icons">
            <i class="fas fa-user"></i>
            <h3>500+</h3>
            <p>satisfied patients</p>
        </div>
        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>15+</h3>
            <p>bed facility</p>
        </div>
    </section>

    <!--icon section ends-->

    <!--services section starts-->

    <section class="services" id="services">
        <h1 class="heading">our <span>services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Free Checkups</h3>
                <p>At GUB Health Care, your well-being is our priority. We offer complimentary health.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Our 24/7 ambulance service is always ready to respond to your emergency needs.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Access to essential medicines is a cornerstone of good health. We provide a range of free medications.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p> Our hospital offers state-of-the-art bed facilities designed for comfort and care. Whether you require short-term observation </p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>At GUB Health Care, we believe in providing holistic care that addresses your physical, emotional, and mental well-being. </p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>

    <!--services end-->
    <!--about section-->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us </h1>
        <div class="row">
            <div class="image">
                <img src="image/Rheumatology-bro.svg" alt="">
            </div>
            <div class="content">
                <h3>we take care of your healthy life</h3>
                <p>At our hospital, we are committed to taking care of your healthy life by providing exceptional medical care and personalized services. Our dedicated team of healthcare professionals is driven by a passion for excellence and a commitment to your well-being. We offer a comprehensive range of medical services, from preventive care and routine check-ups to specialized treatments and emergency services. Our state-of-the-art facilities and cutting-edge technology ensure that you receive the highest quality of care in a comfortable and compassionate environment. Whether you are visiting for a minor ailment or managing a chronic condition, our goal is to support your health journey with expertise, empathy, and a holistic approach. We believe that every individual deserves the best care possible, and we strive to make a positive impact on your health and quality of life. Trust us to be your partner in maintaining a healthy and vibrant life.</p>
            </div>
        </div>
    </section>

    <!--doctors section-->
    <section class="doctors" id="doctors">
        <h1 class="heading">our <span>doctors</span></h1>
        <div class="box">
            <img src="image/doc 1.jpg" alt="">
            <h3>Tanvir Rahman</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc 5.png" alt="">
            <h3>Jakia Islam</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc 3.jpeg" alt="">
            <h3>Toa Afnan</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </section>
<!-- Danger Zone-->
    <section class="book" id="book">
        <h1 class="heading"><span>book</span> now </h1>
        <div class="row">
            <div class="image">
            <img src="image/Hospital bed-bro.svg" alt="">
            </div>
            <form action="index.php" method="post">
                <h3>Checkup details</h3>
                <input type="text" placeholder="student's name" class="box" name="name">
                <input type="number" placeholder="student id" class="box" name="s_id">
                <input type="number" placeholder="student's phone" class="box" name="phone">
                <input type="email" placeholder="student's email" class="box" name="email">
                <input type="date" class="box" name="date">
                <input type="text" placeholder="symptoms" class="box" name="symptoms">
                <input type="text" placeholder="test" class="box" name="test">
                <input type="submit" class="btn" name="submit" value="submit">
            </form>
        </div>
    </section>
<!--blogs section-->

<section class="review" id="review">
    <h1 class="heading"><span>Customer</span> Reviews</h1>
    <div class="review-container">
        <div class="review-card">
            <img src="image/rv1.jpg" alt="Reviewer Image" class="review-img">
            <div class="review-text">
                <h3>Ap. Foisal Farabi</h3>
                <p>I've been using a healthcare management system for the past five years, and it has significantly transformed the way I practice medicine. The electronic health record (EHR) system allows me to access patient histories quickly and efficiently, which is crucial in making informed decisions. Additionally, the integrated scheduling and billing features have streamlined administrative tasks, freeing up more time for patient care. However, there is still room for improvement in terms of interoperability between different systems, as transferring patient data between facilities can sometimes be cumbersome.</p>
            </div>
        </div>
        <div class="review-card">
            <img src="image/rv2.jpg" alt="Reviewer Image" class="review-img">
            <div class="review-text">
                <h3>Mr.Karim</h3>
                <p>As an administrator in a large hospital, I can confidently say that our healthcare management system has been a game-changer. It has automated many routine tasks, reduced paperwork, and improved our overall operational efficiency. The data analytics tools provide valuable insights into patient trends, helping us allocate resources more effectively. One of the biggest challenges we faced was ensuring that all staff members were adequately trained to use the system, but once that hurdle was overcome, the benefits became apparent. Our patient satisfaction scores have also improved since we implemented the system.</p>
            </div>
        </div>
        <div class="review-card">
            <img src="image/rv3.jpeg" alt="Reviewer Image" class="review-img">
            <div class="review-text">
                <h3>MD.Akkas Ali</h3>
                <p>As a patient with a chronic condition, the healthcare management system used by my clinic has made a noticeable difference in my care. I appreciate being able to access my health records online and communicate with my doctor through the patient portal. It makes managing appointments, medications, and follow-ups much easier. One downside, however, is that sometimes the system can be a bit slow, especially during peak times. Despite this, the overall convenience and improved communication with my healthcare providers have been a positive experience.</p>
            </div>
        </div>
    </div>
</section>
<section class="blogs" id="blogs">
    <h1 class="heading">latest <span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <h3>The Importance of Healthcare Management Systems in Enhancing Patient Care</h3>
            <p>This article discusses how healthcare management systems streamline operations, improve efficiency, and ultimately enhance patient care. It explores various features of management systems such as electronic health records (EHR), scheduling, billing, and patient communication tools. Additionally, it delves into the benefits of interoperability among different healthcare systems and the challenges faced in implementing and integrating such systems.</p>
        </div>
        <div class="box">
            <h3>How Healthcare Management Systems Improve Administrative Efficiency</h3>
            <p>This blog post focuses on the administrative aspect of healthcare management systems. It highlights how these systems automate routine tasks, reduce paperwork, and minimize errors, thus improving efficiency in healthcare facilities. The article also discusses the role of data analytics in healthcare management systems, helping administrators make informed decisions and optimize resource allocation.
            </p>
        </div>
        <div class="box">
            <h3>Ensuring Data Security and Compliance in Healthcare Management Systems</h3>
            <p>This article addresses the critical issue of data security and compliance in healthcare management systems. It discusses the importance of adhering to regulations such as HIPAA (Health Insurance Portability and Accountability Act) to protect patient privacy and prevent data breaches. The blog post explores strategies for implementing robust security measures, conducting regular audits, and training staff to handle sensitive patient information responsibly..</p>
        </div>
    </div>
</section>
<footer>
    <div class="footer-content">
        <p>&copy; 2024 GREEN UNIVERSITY OF BANGLADESHS. All rights reserved.</p>
    </div>
</footer>
    <!--custom js file link-->
    <script src="script.js"></script>
</body>

</html>
