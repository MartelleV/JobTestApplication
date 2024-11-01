<!DOCTYPE html>
<html lang="en">
<?php
$title = "About Us";
require_once "header.inc"
?>
<body>
    <?php require_once "navbar.inc"?>

    <header>
        <h1>THE AUTHORS</h1>
    </header>
    <main>
        <article>
            <h2>The Hawk Team</h2>
            <section id="about">
                <h3>
                    Computer Science students from Swinburne University x FPT Alliance Program, Hanoi.
                </h3>
                <br><br>
            </section>

            <section id="group-details">
                <h3>Group Details</h3>
                <!-- Group details. -->
                <div id="group-div">
                    <section id="group-bio">
                        <h4>Group Bio</h4>
                        <dl>
                            <dt>Group name</dt>
                            <dd>The Hawk Team</dd>

                            <dt>Group ID</dt>
                            <dd>02</dd>

                            <dt>Tutor's name</dt>
                            <dd>Nguyen Thuy Linh</dd>

                            <dt>Course</dt>
                            <dd>COS20031</dd>
                        </dl>
                    </section>

                    <section id="contact">
                        <h4>Email Contact</h4>

                        <!-- DIV 1. -->
                        <div>
                            <figure>
                                <a href="mailto:104848725@student.swin.edu.au" target="_blank" rel="noopener" title="Email To Bui Cong Minh">
                                    <img src="./images/buicongminh.png" alt="email-to-buicongminh">
                                </a>
                                <figcaption>
                                    Bui Cong Minh
                                </figcaption>
                            </figure>

                            <figure>
                                <a href="mailto:104775412@student.swin.edu.au" target="_blank" rel="noopener" title="Email To Vu Phan Hoang An">
                                    <img src="./images/hoangan.jpg" alt="email-to-hoangan">
                                </a>
                                <figcaption>
                                    Vu Phan Hoang An
                                </figcaption>
                            </figure>

                            <figure>
                                <a href="mailto:104774503@student.swin.edu.au" target="_blank" rel="noopener" title="Email To Nguyen Hai Dang">
                                    <img src="./images/haidang.jpg" alt="email-to-haidang">
                                </a>
                                <figcaption>
                                    Nguyen Hai Dang
                                </figcaption>
                            </figure>
                        </div>

                        <!-- DIV 2. -->
                        <div>
                            <figure>
                                <a href="mailto:104972886@student.swin.edu.au" target="_blank" rel="noopener" title="Email To Nguyen Hoang Minh">
                                    <img src="./images/nguyenhoangminh.jpg" alt="email-to-nguyenhoangminh">
                                </a>
                                <figcaption>
                                    Nguyen Hoang Minh
                                </figcaption>
                            </figure>

                            <figure>
                                <a href="mailto:104999568@student.swin.edu.au" target="_blank" rel="noopener" title="Email To Pham Quang Minh">
                                    <img src="./images/phamquangminh.jpg" alt="email-to-phamquangminh">
                                </a>
                                <figcaption>
                                    Pham Quang Minh
                                </figcaption>
                            </figure>

                            <figure>
                                <a href="mailto:104852250@student.swin.edu.au" target="_blank" rel="noopener" title="Email To Nguyen Chi Cuong">
                                    <img src="./images/nguyenchicuong.jpg" alt="email-to-nguyenchicuong">
                                </a>
                                <figcaption>
                                    Nguyen Chi Cuong
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                </div>
            </section>
        </article>
    </main>

    <?php require_once "footer.inc"?>
</body>
</html>