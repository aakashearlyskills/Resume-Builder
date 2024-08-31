<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Early Skills Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <div class="form-section">
                    <h2>Early Skills Resume Builder</h2>
                    <form id="resumeForm">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="email@example.com">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" placeholder="+91 XXXXXXXXXX">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address"
                                placeholder="123 Main Street, City, Country">
                        </div>
                        <div class="form-group mb-3">
                            <label for="summary">Summary <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="summary" rows="4"
                                placeholder="Brief summary about yourself"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="languages">Languages <span class="text-danger">*</span></label>
                            <div id="languageSection" class="row">
                                <div class="language-detail col-12 mb-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Language"
                                                name="language[]">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="readCheck"
                                                    value="Read" name="proficiency[]">
                                                <label class="form-check-label" for="readCheck">Read</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="writeCheck"
                                                    value="Write" name="proficiency[]">
                                                <label class="form-check-label" for="writeCheck">Write</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="speakCheck"
                                                    value="Speak" name="proficiency[]">
                                                <label class="form-check-label" for="speakCheck">Speak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-custom add-more" id="addLanguage">Add More <i
                                    class="fa fa-plus"></i></button>
                        </div>

                        <div class="form-group mb-3">
                            <label for="education">Education <span class="text-danger">*</span></label>
                            <div id="educationSection">
                                <div class="education-detail">
                                    <input type="text" id="educationDegree" class="form-control mt-2"
                                        placeholder="Degree">
                                    <input type="text" id="educationInstitution" class="form-control mt-2"
                                        placeholder="Institution">
                                    <input type="text" id="educationYear" class="form-control mt-2" placeholder="Year">
                                </div>
                            </div>
                            <button type="button" class="btn btn-custom add-more" id="addEducation">Add More
                                <i class="fa fa-plus"></i></button>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 bg collapseDiv mb-2" data-bs-toggle="collapse"
                            href="#experienceDetail" aria-expanded="false" aria-controls="experienceDetail">
                            Add Experience <i class="fa fa-plus"></i>
                        </div>
                        <div class="collapse multi-collapse" id="experienceDetail">
                            <div class="form-group mb-3">
                                <label for="experience">Experience</label>
                                <div id="experienceSection">
                                    <div class="experience-detail">
                                        <input type="text" id="experienceDegree" class="form-control mt-2"
                                            placeholder="Title">
                                        <input type="text" id="experienceInstitution" class="form-control mt-2"
                                            placeholder="Company">
                                        <input type="text" id="experienceDate" class="form-control mt-2"
                                            placeholder="Date">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-custom add-more" id="addExperience">Add More
                                    <i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 bg collapseDiv mb-2" data-bs-toggle="collapse"
                            href="#achievementDetail" aria-expanded="false" aria-controls="achievementDetail">
                            Add Achievements <i class="fa fa-plus"></i>
                        </div>
                        <div class="collapse multi-collapse" id="achievementDetail">
                            <div class="form-group mb-3">
                                <label for="achievements">Achievements</label>
                                <textarea class="form-control" id="achievements" rows="3"
                                    placeholder="Award for Best Web Developer, ABC Company, 2022"></textarea>
                                <button type="button" class="btn btn-custom add-more" id="addAchievement">Add More
                                    <i class="fa fa-plus"></i></button>
                            </div>
                        </div>

                        <!-- <button type="button" class="btn btn-custom" id="printButton">Print
                            Resume</button></h2> -->
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <h2 class="resume-title">Resume Preview <button type="button" class="btn btn-custom" id="printButton"
                        onclick="window.print()">Print
                        Resume</button></h2>
                <div class="preview-section">
                    <div id="resumePreview">
                        <!-- Preview content will be dynamically generated -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

</body>

</html>