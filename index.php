<?php
// ==========================================
// ŠEIT VARI MAINĪT SAVU INFORMĀCIJU
// ==========================================

$name = "Markus Mareks Spulis";
$profession = "Programmēšanas students";
$about = "-";

$email = "ipa23.m.spulis@vtdt.edu.lv";
$github = "https://github.com/MarkusIPa23";

// ==========================================
// PROJEKTI
// ==========================================

$projects = [
    [
        "title" => "Mini_Games",
        "description" => "Šīs ir mazs projekts kuru es ar savu kursa biedru biju izdarijis",
        "technologies" => "PHP, Css, SQL",
        "image" => "images\Ekrānuzņēmums 2026-09-03 105106.png",
        "github" => "https://github.com/MarkusIPa23/Mini_Games",
        "demo" => "Pašlaik nav"
    ],
    [
        "title" => "IT-HELP-Desk",
        "description" => "Saite līdzīga eklasei",
        "technologies" => "PHP, Css, SQL, Laravel",
        "image" => "images\Ekrānuzņēmums 2026-09-03 110745.png",
        "github" => "",
        "demo" => "Pašlaik nav"
    ]
];

?>

<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $name; ?> | Portfolio</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================= NAVIGĀCIJA ================= -->

    <header>
        <nav class="navbar">

            <div class="logo">
                <?php echo $name; ?>
            </div>

            <ul class="nav-links">
                <li><a href="#about">Par mani</a></li>
                <li><a href="#skills">Prasmes</a></li>
                <li><a href="#projects">Projekti</a></li>
                <li><a href="#contact">Kontakti</a></li>
            </ul>

        </nav>
    </header>


    <!-- ================= SĀKUMS ================= -->

    <section class="hero">

        <div class="hero-content">

            <p class="small-text">
                Sveiki! Es esmu
            </p>

            <h1>
                <?php echo $name; ?>
            </h1>

            <h2>
                <?php echo $profession; ?>
            </h2>

            <p>
                Es veidoju tīmekļa vietnes un mācos jaunas programmēšanas
                tehnoloģijas, lai attīstītu savas prasmes.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="button">
                    Mani projekti
                </a>

                <a href="<?php echo $github; ?>"
                   target="_blank"
                   class="button secondary">
                    Mans GitHub
                </a>

            </div>

        </div>

    </section>


    <!-- ================= PAR MANI ================= -->

    <section id="about" class="section">

        <div class="container">

            <h2 class="section-title">
                Par mani
            </h2>

            <div class="about-content">

                <div class="about-text">

                    <p>
                        <?php echo $about; ?>
                    </p>

                    <p>
                        Mans mērķis ir turpināt attīstīt savas programmēšanas
                        prasmes un iegūt praktisku pieredzi IT nozarē.
                    </p>

                </div>

                <div class="about-card">

                    <h3>Manas intereses</h3>

                    <ul>
                        <li>💻 Programmēšana</li>
                        <li>🌐 Web izstrāde</li>
                        <li>🎮 Tehnoloģijas</li>
                        <li>📚 Jaunu zināšanu apguve</li>
                    </ul>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= PRASMES ================= -->

    <section id="skills" class="section skills-section">

        <div class="container">

            <h2 class="section-title">
                Manas prasmes
            </h2>

            <p class="section-description">
                Programmēšanas valodas, ietvari un tehnoloģijas,
                ar kurām esmu strādājis.
            </p>


            <div class="skills-grid">

                <div class="skill-card">
                    <div class="skill-icon">🌐</div>
                    <h3>HTML</h3>
                    <p>
                        Tīmekļa vietņu struktūras veidošana.
                    </p>
                </div>


                <div class="skill-card">
                    <div class="skill-icon">🎨</div>
                    <h3>CSS</h3>
                    <p>
                        Mājaslapu dizains, animācijas un responsive dizains.
                    </p>
                </div>


                <div class="skill-card">
                    <div class="skill-icon">🐘</div>
                    <h3>PHP</h3>
                    <p>
                        Dinamisku tīmekļa vietņu un servera puses funkciju izstrāde.
                    </p>
                </div>


                <div class="skill-card">
                    <div class="skill-icon">⚡</div>
                    <h3>JavaScript</h3>
                    <p>
                        Interaktīvu funkciju un dinamiska satura izveide.
                    </p>
                </div>


                <div class="skill-card">
                    <div class="skill-icon">🐙</div>
                    <h3>Git & GitHub</h3>
                    <p>
                        Koda versiju kontrole un projektu publicēšana.
                    </p>
                </div>


                <div class="skill-card">
                    <div class="skill-icon">🗄️</div>
                    <h3>MySQL</h3>
                    <p>
                        Darbs ar datubāzēm un datu glabāšanu.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- ================= PROJEKTI ================= -->

    <section id="projects" class="section">

        <div class="container">

            <h2 class="section-title">
                Mani projekti
            </h2>

            <p class="section-description">
                Daži no maniem līdzšinējiem programmēšanas projektiem.
            </p>


            <div class="projects-grid">

                <?php foreach ($projects as $project): ?>

                    <article class="project-card">

                        <div class="project-image">

                            <img
                                src="<?php echo $project['image']; ?>"
                                alt="<?php echo $project['title']; ?>"
                            >

                        </div>


                        <div class="project-content">

                            <h3>
                                <?php echo $project['title']; ?>
                            </h3>

                            <p>
                                <?php echo $project['description']; ?>
                            </p>


                            <div class="technologies">

                                <?php
                                $tech = explode(", ", $project['technologies']);

                                foreach ($tech as $technology):
                                ?>

                                    <span>
                                        <?php echo $technology; ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>


                            <div class="project-buttons">

                                <a
                                    href="<?php echo $project['github']; ?>"
                                    target="_blank"
                                    class="button"
                                >
                                    GitHub
                                </a>


                                <a
                                    href="<?php echo $project['demo']; ?>"
                                    target="_blank"
                                    class="button secondary"
                                >
                                    Live Demo
                                </a>

                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- ================= KONTAKTI ================= -->

    <section id="contact" class="section contact-section">

        <div class="container">

            <h2 class="section-title">
                Sazināties ar mani
            </h2>

            <p class="section-description">
                Ja vēlies ar mani sazināties vai apskatīt manus projektus,
                vari izmantot kādu no zemāk norādītajām saitēm.
            </p>


            <div class="contact-buttons">

                <a
                    href="mailto:<?php echo $email; ?>"
                    class="button"
                >
                    📧 E-pasts
                </a>


                <a
                    href="<?php echo $github; ?>"
                    target="_blank"
                    class="button secondary"
                >
                    GitHub
                </a>



            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © <?php echo date("Y"); ?> <?php echo $name; ?>.
            Izveidots ar PHP, HTML un CSS.
        </p>

    </footer>


</body>
</html>