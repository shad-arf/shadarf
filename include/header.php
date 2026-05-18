<?php
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$currentPage = strtolower(trim(basename($requestPath), '/'));

if ($currentPage === '' || $currentPage === 'index.php') {
    $currentPage = 'index.html';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="Portfolio of Shad Arf, a backend web developer with Laravel, PHP, API, and production system experience."
    >
    <title>Shad Arf Portfolio</title>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preload" as="image" href="shad.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="include/first.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="shad.jpg">
</head>

<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <div id="main_container" class="flex flex-wrap">
        <aside id="left_col" class="w-full md:w-1/4 p-6 relative" aria-label="Profile sidebar">
            <div class="header_logotype_container">
                <h1 class="logotype_name text-4xl font-bold">Shad <span class="text-purple-600">Arf</span></h1>
                <p class="logotype_occupation">Backend Web Developer</p>
            </div>

            <nav class="header_menu_container mt-6" aria-label="Primary">
                <ul class="header_menu space-y-2">
                    <li>
                        <a
                            class="block text-purple-700 <?php echo $currentPage === 'index.html' ? 'border-b-2 border-purple-700' : ''; ?>"
                            href="index.html"
                            <?php echo $currentPage === 'index.html' ? 'aria-current="page"' : ''; ?>
                        >Profile</a>
                    </li>
                    <li>
                        <a
                            class="block text-purple-700 <?php echo $currentPage === 'education.php' ? 'border-b-2 border-purple-700' : ''; ?>"
                            href="education.php"
                            <?php echo $currentPage === 'education.php' ? 'aria-current="page"' : ''; ?>
                        >Education</a>
                    </li>
                    <li>
                        <a
                            class="block text-purple-700 <?php echo $currentPage === 'skills.php' ? 'border-b-2 border-purple-700' : ''; ?>"
                            href="skills.php"
                            <?php echo $currentPage === 'skills.php' ? 'aria-current="page"' : ''; ?>
                        >Skills</a>
                    </li>
                    <li>
                        <a
                            class="block text-purple-700 <?php echo $currentPage === 'experience.php' ? 'border-b-2 border-purple-700' : ''; ?>"
                            href="experience.php"
                            <?php echo $currentPage === 'experience.php' ? 'aria-current="page"' : ''; ?>
                        >Work Experience</a>
                    </li>
                </ul>
            </nav>

            <figure class="profile_frame">
                <div class="profile_picture">
                    <img width="100%" src="shad.jpg" alt="Portrait of Shad Arf" decoding="async" fetchpriority="high">
                </div>
            </figure>

            <section class="hello_content mt-6" aria-labelledby="intro-heading">
                <h2 id="intro-heading" class="text-2xl font-semibold">Hello</h2>
                <p class="text-gray-800">
                    I'm Shad Arf, a backend developer. I've created various software; some are up and
                    running, some are still in progress, and some are just ideas for now. Studying
                    programming fills me with pride as I pursue a field that I love.
                </p>
            </section>

            <section class="contact_details_content mt-6" aria-labelledby="contact-details-heading">
                <h2 id="contact-details-heading" class="text-2xl font-semibold">Contact details</h2>
                <p class="text-purple-700">Phone:</p>
                <p><a href="tel:+9647507439825">+964 750 743 98 25</a></p>
                <p class="text-purple-700">Email:</p>
                <p><a href="mailto:shadarf779@gmail.com">shadarf779@gmail.com</a></p>
                <p class="text-purple-700">Address:</p>
                <p>Khabat</p>
            </section>

            <section class="mt-6" aria-labelledby="social-heading">
                <h2 id="social-heading" class="text-2xl font-semibold">Social media</h2>
                <ul class="space-y-2 social-media-list">
                    <li><a class="text-purple-700" href="https://www.facebook.com/shad.asadiq.3/" rel="noopener noreferrer" target="_blank">Facebook</a></li>
                    <li><a class="text-purple-700" href="https://github.com/shad-arf" rel="noopener noreferrer" target="_blank">GitHub</a></li>
                    <li><a class="text-purple-700" href="https://www.linkedin.com/in/shad-arf/" rel="noopener noreferrer" target="_blank">LinkedIn</a></li>
                    <li><a class="text-purple-700" href="mailto:shadarf779@gmail.com">Email</a></li>
                </ul>
            </section>

            <a href="mailto:shadarf779@gmail.com" class="send_message_button mt-6 bg-purple-700 text-white px-4 py-2 rounded-lg inline-block">
                <span class="cut1"></span>
                <span class="cut2"></span>
                <span class="content">Send me a message</span>
            </a>

            <div class="vertical_line absolute top-0 bottom-0 left-0 w-1 bg-gray-300 md:hidden"></div>
        </aside>
        <main id="main-content" tabindex="-1" class="w-full md:w-3/4 p-6">
