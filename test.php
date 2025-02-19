<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<section class="faq-section py-3 text-center bg_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <h1 class="fw-bold mb-5">
                    <span class="light">Frequently Asked Questions <span class="greentext">(FAQ)</span></span>
                </h1>
                <div class="accordion accordion-flush" id="accordionExample">

                    <!-- FAQ 1 -->
                    <div class="accordion-item m-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll1" aria-expanded="false" aria-controls="coll1">
                                <h5>What is Semantic HTML and how does it work?</h5>
                            </button>
                        </h2>
                        <div id="coll1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Semantic HTML refers to a method of coding where HTML markup is used to emphasize the meaning or semantics of the existing content.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item m-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll2" aria-expanded="false" aria-controls="coll2">
                                <h5>What are some of the top career opportunities available in full stack development?</h5>
                            </button>
                        </h2>
                        <div id="coll2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Full Stack Developers are versatile, and their skills can lead to various exciting career opportunities. Examples include Full Stack Developer, Front-End Developer, Back-End Developer, DevOps Engineer, Mobile App Developer, Software Architect, and many more.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item m-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll3" aria-expanded="false" aria-controls="coll3">
                                <h5>What are the prerequisites for a full stack developer course?</h5>
                            </button>
                        </h2>
                        <div id="coll3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To join a Full Stack Developer course, you should have basic programming knowledge, especially in languages like JavaScript. A good grasp of web technologies like HTML, CSS, and JavaScript, as well as basic database knowledge (SQL/NoSQL), is essential.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item m-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll4" aria-expanded="false" aria-controls="coll4">
                                <h5>Do you provide full stack developer certification?</h5>
                            </button>
                        </h2>
                        <div id="coll4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, upon successful completion of the course and passing the certification exam, you will receive a LAMP Full Stack Developer Certification.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item m-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll5" aria-expanded="false" aria-controls="coll5">
                                <h5>Why should I choose Website Banaye &amp; Computer Sikhe?</h5>
                            </button>
                        </h2>
                        <div id="coll5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You should choose Website Banaye & Computer Sikhe because we combine over 15 years of experience with a commitment to exceptional customer service and innovative, cost-effective solutions. We focus on delivering high-quality website designs and providing hands-on computer skills training.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<p>
    Our Advanced Full Stack Web Development course is a comprehensive program designed to teach you both front-end and back-end web development skills. You will learn the core technologies of HTML, CSS, and JavaScript, and progress to frameworks like React.js and Vue.js to create interactive, dynamic user interfaces. On the server-side, the course covers Node.js, Express.js, and database management with MongoDB and SQL, enabling you to build and manage robust back-end systems.
    <input type="checkbox" id="toggle">
    <span class="more-text"> The course also includes practical training in version control with Git, cloud deployment using AWS and Heroku, and containerization with Docker. You’ll work on hands-on projects to apply your skills and build a strong portfolio that demonstrates your ability to develop complete, end-to-end applications.

        By the end of the course, you will be fully equipped to handle full stack development tasks, from front-end design to back-end architecture and deployment. This course prepares you for diverse career opportunities in web development, including roles as Full Stack Developer, Backend Developer, and Front-End Developer.
    </span>
</p>
<label for="toggle">Read More</label>

</body>
<!-- 
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".item");
        const showMoreBtn = document.getElementById("showMoreBtn");
        let showMore = false;

        items.forEach((item, index) => {
            item.querySelector(".FAQ-title").addEventListener("click", () => {
                if (item.classList.contains("selected")) {
                    item.classList.remove("selected");
                    item.querySelector(".FAQ-content").classList.remove("show");
                } else {
                    document.querySelectorAll(".item").forEach((el) => {
                        el.classList.remove("selected");
                        el.querySelector(".FAQ-content").classList.remove("show");
                    });
                    item.classList.add("selected");
                    item.querySelector(".FAQ-content").classList.add("show");
                }
            });
        });

        showMoreBtn.addEventListener("click", () => {
            showMore = !showMore;
            const itemsToShow = showMore ? items.length : 4;
            document.querySelectorAll(".item").forEach((item, index) => {
                item.style.display = index < itemsToShow ? "block" : "none";
            });
            showMoreBtn.textContent = showMore ? "Show Less" : "Show More";
        });

        // Initialize the FAQ display
        document.querySelectorAll(".item").forEach((item, index) => {
            item.style.display = index < 4 ? "block" : "none";
        });
    }); -->
</script>


<p>Our Advanced Full Stack Web Development course is a comprehensive program designed to teach you both front-end and back-end web development skills. You will learn the core technologies of HTML, CSS, and JavaScript, and progress to frameworks like React.js and Vue.js to create interactive, dynamic user interfaces. On the server-side, the course covers Node.js, Express.js, and database management with MongoDB and SQL, enabling you to build and manage robust back-end systems.

    The course also includes practical training in version control with Git, cloud deployment using AWS and Heroku, and containerization with Docker. You’ll work on hands-on projects to apply your skills and build a strong portfolio that demonstrates your ability to develop complete, end-to-end applications.

    By the end of the course, you will be fully equipped to handle full stack development tasks, from front-end design to back-end architecture and deployment. This course prepares you for diverse career opportunities in web development, including roles as Full Stack Developer, Backend Developer, and Front-End Developer.</p><span id="dots"></span><span id="more">
    <p class="light fw-bold fs-4">Advantages of Enrolling in a Full Stack Web Development Course</p>

    Enrolling in a Full Stack Web Development course equips you with in-demand skills to build both front-end and back-end applications. It enhances your problem-solving abilities, boosts career prospects, and opens opportunities for high-paying roles in web development, allowing you to work on diverse, real-world projects.</p>
</span></p>
<button onclick="myFunction()" id="myBtn" class="btn read_more">Read more</button>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
</body>

</html>