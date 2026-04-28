<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="shadarf" content="Shad arf is a programmer, worked and graduated in soran universty at Computer Science Department">
    <title>shadarf</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="shad.jpg">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline.css" rel="stylesheet">
</head>

<body>
    <!-- MAIN CONTAINER -->
    <div id="main_container" class="flex flex-wrap">
        <!-- LEFT COL -->
        <div id="left_col" class="w-full md:w-1/4 p-6 relative">
        <div class="header_logotype_container">
                <h1 class="logotype_name text-4xl font-bold">Shad <span class="text-purple-600">Arf</span></h1>
                <h2 class="logotype_occupation">Backend Web Developer</h2>
            </div>
            <!-- MAIN MENU -->
            <div class="header_menu_container mt-6">
                <ul class="header_menu space-y-2">
                    <li><a class="block text-purple-600 <?php echo ($_SERVER['REQUEST_URI'] == '/' || strpos($_SERVER['REQUEST_URI'], '/index') !== false) ? 'border-b-2 border-purple-600' : ''; ?>" href="index.php">Profile</a></li>
                    <li><a class="block text-purple-600 <?php echo (strpos($_SERVER['REQUEST_URI'], 'education') !== false) ? 'border-b-2 border-purple-600' : ''; ?>" href="education.php">Education</a></li>
                    <li><a class="block text-purple-600 <?php echo (strpos($_SERVER['REQUEST_URI'], 'skills') !== false) ? 'border-b-2 border-purple-600' : ''; ?>" href="skills.php">Skills</a></li>
                    <li><a class="block text-purple-600 <?php echo (strpos($_SERVER['REQUEST_URI'], 'experience') !== false) ? 'border-b-2 border-purple-600' : ''; ?>" href="experience.php">Work Experience</a></li>
                    <!-- <li><a class="block text-purple-600 <?php echo (strpos($_SERVER['REQUEST_URI'], 'featured_projects') !== false) ? 'border-b-2 border-purple-600' : ''; ?>" href="featured_projects.php">Featured Projects</a></li> -->
                    <!-- <li><a class="block text-purple-600 <?php echo (strpos($_SERVER['REQUEST_URI'], 'awards') !== false) ? 'border-b-2 border-purple-600' : ''; ?>" href="awards.php">Awards</a></li> -->
                </ul>
            </div>
            <div class="profile_frame">
                <div class="profile_picture">
                    <img width="100%" height="" src="shad.jpg" alt="shadarf">
                </div>
            </div>
            <div class="hello_content mt-6">
                <h2 class="text-2xl font-semibold">Hello!</h2>
                <p class="text-gray-700">I'm Shad Arf, a backend developer. I've created various software; some are up and running, some are still in progress, and some are just ideas for now. Studying programming fills me with pride as I pursue a field that I love.</p>
            </div>
            <div class="contact_details_content mt-6">
                <h2 class="text-2xl font-semibold">Contact details</h2>
                <p class="text-purple-600">Phone:</p>
                <p>+964 750 743 98 25</p>
                <p class="text-purple-600">Email:</p>
                <p>shadarf779@gmail.com</p>
                <p class="text-purple-600">Address:</p>
                <p>khabat</p>
            </div>
            <ul>
                <h2 class="text-2xl font-semibold" > Social Media: </h2>
                <li><a class="text-purple-600" href="https://www.facebook.com/shad.asadiq.3/">facebook</a></li>
                <li><a class="text-purple-600" href="https://github.com/shadarf779">github</a></li>
                <li><a class="text-purple-600" href="https://www.linkedin.com/in/shad-arf-7448ba269/">Linkedin</a> </li>
                <li><a class="text-purple-600" href="/cdn-cgi/l/email-protection#fe8d969f9a9f8c98c9c9c7be99939f9792d09d9193">Email</a></li>
                
            </ul>
            <a href="mailto:shadarf779@gmail.com" class="send_message_button mt-6 bg-purple-600 text-white px-4 py-2 rounded-lg inline-block">
                <span class="cut1"></span>
                <span class="cut2"></span>
                <span class="content">Send me a message <span class="fontawesome-double-angle-right"></span></span>
            </a>
            
            <div class="vertical_line absolute top-0 bottom-0 left-0 w-1 bg-gray-300 md:hidden"></div>
        </div>
   