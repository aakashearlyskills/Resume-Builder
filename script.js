$(document).ready(function () {
  const $form = $("#resumeForm");
  const $educationSection = $("#educationSection");
  const $experienceSection = $("#experienceSection");
  const $languageSection = $("#languageSection");
  const $resumePreview = $("#resumePreview");
  const $achievementsSection = $("#achievementsSection");

  function updatePreview() {
    const name = $("#name").val() || "Your Name";
    const email = $("#email").val() || "email@example.com";
    const phone = $("#phone").val() || "+91 XXXXXXXXXX";
    const address = $("#address").val() || "123 Main Street, City, Country";
    const summary = $("#summary").val() || "Brief summary about yourself";

    const languages = $languageSection
      .find(".language-detail")
      .map(function () {
        const $this = $(this);
        const language = $this.find('input[type="text"]').val().trim();
        const proficiencies = $this
          .find('input[type="checkbox"]:checked')
          .map(function () {
            return $(this).val();
          })
          .get();

        return language && proficiencies.length > 0
          ? `<strong>${language}:</strong> ${proficiencies.join(", ")}`
          : "";
      })
      .get()
      .filter(Boolean)
      .join("<br>");

    const education = $educationSection
      .find(".education-detail")
      .map(function () {
        const $this = $(this);
        const degree = $this.find("input:nth-child(1)").val();
        const institution = $this.find("input:nth-child(2)").val();
        const year = $this.find("input:nth-child(3)").val();

        return degree
          ? `<strong>${degree}</strong>${
              institution ? `, ${institution}` : ""
            }${year ? ` (${year})` : ""}`
          : "";
      })
      .get()
      .filter(Boolean)
      .join("<br>");

    const experience = $experienceSection
      .find(".experience-detail")
      .map(function () {
        const $this = $(this);
        const title = $this.find("input:nth-child(1)").val();
        const company = $this.find("input:nth-child(2)").val();
        const dates = $this.find("input:nth-child(3)").val();

        return title
          ? `<strong>${title}</strong>${company ? `, ${company}` : ""}${
              dates ? ` (${dates})` : ""
            }`
          : "";
      })
      .get()
      .filter(Boolean)
      .join("<br>");

    const achievements = $("#achievements")
      .val()
      .split("\n")
      .filter(Boolean)
      .map((item) => `<li>${item}</li>`)
      .join("");

    $resumePreview.html(`
        <div class="header">
            <div class="name">
                <h1><b>${name}</b></h1>
                <p>${email} | Mobile: ${phone}</p>
                <p>${address}</p>
            </div>
            <div>
                <img src="../earlyskills.jpg" alt="Profile Image" />
            </div>
        </div>
        <div class="summary">
            <div class="section-title">Summary</div>
            <p>${summary}</p>
        </div>
        <div class="languages-info">
            <div class="section-title">Languages</div>
            <p>${languages}</p>
        </div>
        <div class="education-info">
            <div class="section-title">Education</div>
            <p>${education}</p>
        </div>
        ${
          experience
            ? `<div class="experience-info">
            <h2 class="section-title">Experience</h2>
            ${experience}
        </div>`
            : ""
        }
        ${
          achievements
            ? `<div class="achievements-info">
            <h2 class="section-title">Achievements</h2>
            ${achievements}
        </div>`
            : ""
        }
    `);
  }

  let languageCounter = 0;

  $("#addLanguage").on("click", function () {
    languageCounter++;
    const newLanguage = $(`
        <div class="language-detail col-12 mb-2">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Language" name="language[]">
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="readCheck${languageCounter}" value="Read" name="proficiency[]">
                        <label class="form-check-label" for="readCheck${languageCounter}">Read</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="writeCheck${languageCounter}" value="Write" name="proficiency[]">
                        <label class="form-check-label" for="writeCheck${languageCounter}">Write</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="speakCheck${languageCounter}" value="Speak" name="proficiency[]">
                        <label class="form-check-label" for="speakCheck${languageCounter}">Speak</label>
                    </div>
                </div>
            </div>
        </div>
    `);
    $("#languageSection").append(newLanguage);
  });

  $("#addEducation").on("click", function () {
    const newEducation = $(`
        <div class="education-detail">
            <input type="text" id="educationDegree" class="form-control mt-2" placeholder="Degree">
            <input type="text" class="form-control mt-2" placeholder="Institution">
            <input type="text" class="form-control mt-2" placeholder="Year">
        </div>
    `);
    $educationSection.append(newEducation);
  });

  $("#addExperience").on("click", function () {
    const newExperience = $(`
        <div class="experience-detail">
            <input type="text" id="experienceDegree" class="form-control mt-2" placeholder="Title">
            <input type="text" id="experienceInstitution" class="form-control mt-2" placeholder="Company">
            <input type="text" id="experienceDate" class="form-control mt-2" placeholder="Date">
        </div>
    `);
    $experienceSection.append(newExperience);
  });

  $("#addAchievement").on("click", function () {
    const newAchievement = $(`
        <div class="achievement-detail">
            <textarea class="form-control" rows="2" placeholder="Achievement"></textarea>
        </div>
    `);
    $achievementsSection.append(newAchievement);
  });

  $form.on("input", updatePreview);
  updatePreview();

  $("#printButton").on("click", function () {
    printJS({
      printable: "resumePreview",
      type: "html",
      targetStyles: ["*"],
      style: `
            @media print {
                .header img {
                    width: 60px;
                }
            }
        `,
    });
  });
});
