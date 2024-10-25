<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Application Form";
    require_once "header.inc"
?>
<body>
    <?php require_once "navbar.inc"?>
    <header>
        <h1>Start your journey with us today.</h1>
    </header>

    <main>
        <article>
            <h2>Please fill in your information in this form to apply for your desired position.</h2>
            <form method="post" action="processEOI.php">
                <fieldset id="main-field">
                    <legend id="main-legend">APPLICATION FORM</legend>

                    <fieldset id="personal-details">
                        <legend class="detail-legends">PERSONAL DETAILS</legend>
                        <p>
                            <label>
                                Job Reference Number:
                                <input type="text" name="jobnum" id="jobnum" size="5" maxlength="5" pattern="^[A-Za-z0-9]{5}$" required="required">
                            </label>
                        </p>
                        <p>
                            <label>
                                First Name:
                                <input type="text" name="fname" id="fname" size="20" maxlength="20" pattern="^[A-Za-z]{1,20}$" required="required">
                            </label>
                            <label>
                                Last Name:
                                <input type="text" name="lname" id="lname" size="20" maxlength="20" pattern="^[A-Za-z]{1,20}$" required="required">
                            </label>
                        </p>
                        <p>
                            <label>Date of Birth:
                                <input type="text" name="date" id="date" size="30" placeholder="DD/MM/YYYY (from 1900 to 2024)" pattern="(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/(19[0-9][0-9]|20[01][0-9]|202[0-4])" required="required">
                            </label>
                        </p>
                        <fieldset id="gender-field">
                            <legend>GENDER</legend>
                            <label class="radios"><input type="radio" name="gender" value="male" required="required" checked><span class="r-checkmark"></span>Male</label>
                            <label class="radios"><input type="radio" name="gender" value="female"><span class="r-checkmark"></span>Female</label>
                            <label class="radios"><input type="radio" name="gender" value="others"><span class="r-checkmark"></span>Others</label>
                        </fieldset>
                        <p>
                            <label>Street Address:
                                <input type="text" name="street" id="street" size="40" maxlength="40" required="required">
                            </label>

                            <label>Suburb/Town:
                                <input type="text" name="suburb" id="suburb" size="40" maxlength="40" required="required">
                            </label>
                        </p>


                        <p>
                            <label>State:
                                <select name="state" required>
                                    <option value="">Please select</option>
                                    <option value="VIC">VIC</option>
                                    <option value="NSW">NSW</option>
                                    <option value="QLD">QLD</option>
                                    <option value="NT">NT</option>
                                    <option value="WA">WA</option>
                                    <option value="SA">SA</option>
                                    <option value="TAS">TAS</option>
                                    <option value="ACT">ACT</option>
                                </select>
                            </label>
                            <label>Postcode:
                                <input type="text" name="postcode" id="postcode" size="20" maxlength="4" pattern="^\d{4}$" required="required">
                            </label>
                        </p>
                        <p>
                            <label>Email Address:
                                <input type="email" name="email" id="email" size="20" required="required">
                            </label>
                            <label>Phone Number:
                                <input type="text" name="phone" id="phone" size="20" pattern="^[0-9 ]{8,12}$" required="required">
                            </label>
                        </p>
                    </fieldset>

                    <fieldset id="professional-details">
                        <legend class="detail-legends">PROFESSIONAL DETAILS</legend>
                        <p>
                            N.B.: Go <a href="jobs.php" target="_blank" rel="noopener" id="link" title="Job List">here</a> for detailed job requirements and description.
                        </p>
                        <fieldset id="desired-position">
                            <legend>Your Desired Position</legend>
                            <label class="radios"><input type="radio" name="applying-position" value="Cloud-Architect" required="required" checked><span class="r-checkmark"></span>Cloud Architect</label>
                            <label class="radios"><input type="radio" name="applying-position" value="Backend-Dev"><span class="r-checkmark"></span>Backend Developer</label>
                            <label class="radios"><input type="radio" name="applying-position" value="Data-Scientist"><span class="r-checkmark"></span>Data Scientist</label>
                            <label class="radios"><input type="radio" name="applying-position" value="Software-Engineer"><span class="r-checkmark"></span>Software Engineer</label>
                        </fieldset>
                        <fieldset id="skill-list">
                            <legend>SKILL LIST</legend>
                            <fieldset>
                                <legend>Programming Languages</legend>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="HTML/CSS" checked>Web(HTML/CSS)
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="JS">JS
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="Java">Java
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="Python">Python
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="C">C
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="C++">C++
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="SQL">SQL
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="R">R
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="programming-language" value="Ruby">Ruby
                                    <span class="r-checkmark"></span>
                                </label>
                            </fieldset>
                            <fieldset>
                                <legend>Version Control Systems</legend>
                                <label  class="radios">
                                    <input type="radio" name="VCS" value="Git" checked>Git
                                    <span class="r-checkmark"></span>
                                </label>
                                <label  class="radios">
                                    <input type="radio" name="VCS" value="ADS">Azure DevOps Server
                                    <span class="r-checkmark"></span>
                                </label>
                                <label  class="radios">
                                    <input type="radio" name="VCS" value="Subversion">Subversion(SVN)
                                    <span class="r-checkmark"></span>
                                </label>
                            </fieldset>
                            <fieldset>
                                <legend>Back-End Development</legend>
                                <label class="radios">
                                    <input type="radio" name="backend-dev" value="Node.js" checked>Node.js
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="backend-dev" value="RoR">Ruby on Rails
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="backend-dev" value="Django">Django
                                    <span class="r-checkmark"></span>
                                </label>
                            </fieldset>
                            <fieldset>
                                <legend>Database Management</legend>
                                <label class="radios">
                                    <input type="radio" name="database-technology" value="MySQL" checked>MySQL
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="database-technology" value="PostgreSQL">PostgreSQL
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="database-technology" value="MongoDB">MongoDB
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="database-technology" value="Oracle">Oracle
                                    <span class="r-checkmark"></span>
                                </label>
                            </fieldset>
                            <fieldset>
                                <legend>Cloud Computing</legend>
                                <label class="radios">
                                    <input type="radio" name="cloud-technology" value="AWS" checked>Amazon Web Services
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="cloud-technology" value="MicrosoftAzure">MicrosoftAzure
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="cloud-technology" value="GoogleCloud">GoogleCloud
                                    <span class="r-checkmark"></span>
                                </label>
                            </fieldset>
                            <fieldset>
                                <legend>Soft Skills</legend>
                                <label class="radios">
                                    <input type="radio" name="soft-skill" value="Analytical Skill" checked>Analytical Skill
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="soft-skill" value="Problem-solving skills">Problem-solving skills
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="soft-skill" value="Communication and Presentation Skills">Communication and Presentation Skills
                                    <span class="r-checkmark"></span>
                                </label>
                                <label class="radios">
                                    <input type="radio" name="soft-skill" value="Teamwork Skills">Teamwork Skills
                                    <span class="r-checkmark"></span>

                                </label>
                            </fieldset>
                            <p>
                                <label class="checkboxes">
                                    <input type="checkbox" name="other-skill" value="other-skill">
                                    <span class="checkmark"></span>
                                    Other skills
                                </label>
                            </p>

                        </fieldset>
                        <p>
                            <label>Other skills:<br>
                                <textarea name="other-skills" id="other-skills"></textarea>
                            </label>
                        </p>
                    </fieldset>
                </fieldset>

                <p id="submit-buttons">
                    <input class="button" type="submit" value="Apply">
                    <input class="button" type="reset" value="Reset">
                </p>
            </form>
        </article>
    </main>

    <hr>

    <?php require_once "footer.inc"?>
</body>
</html>