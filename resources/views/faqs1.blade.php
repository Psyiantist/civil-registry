<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> FAQs Page </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">

    body {
            font-family: 'Poppins';
        }
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Main content below the NAV BAR */
		html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    section {
      width: 100vw;
      height: 110vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #d8e4f0;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }

    .hcwhy h3{
      color: #2c3e50;
      font-size: 30px;
      font-weight: bold;
      margin-left: 50px;
      font-family: "Poppins", sans-serif;
    }

    .search-section {
      display: flex;
      justify-content: center;
    }

    .search-container2 {
      border: 2px solid #426DDC;
      display: flex;
      margin-top: 35px;
      align-items: center;
      width: 600px;
      height: 40px;
      padding: 15px;
      background: #f9f9f9;
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .search-container2:hover {
      box-shadow: 0 0 7px white;
    }

    .search-container2 input {
      flex: 1;
      border: none;
      outline: none;
      font-size: 15px;
      padding: 10px;
      border-radius: 30px;
      background: transparent;
      font-family: "Poppins", sans-serif;
    }

    .search-container2 button {
      background: none;
      border: none;
      cursor: pointer;
      padding: 10px;
      font-size: 18px;
      color: #555;
      margin-right: 10px;
    }

    .search-container2 button:hover {
      color: #007bff;
    }

    @media (max-width: 600px) {
      .search-container2 {
                max-width: 90%;
      }
            .search-container2 input {
                font-size: 14px;
            }
      }


    .faq-container {
      margin-top: 55px;
      padding: 10px;
      width: 600px;
      max-width: 80vw;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      font-family: "Poppins", sans-serif;
    }

   .faq-title {
      text-align: center;
      font-size: 23px;
      color: #003366;
      margin-top: 10px;
      margin-bottom: 25px;
    }

   .faq-item {
      border-bottom: 1px solid #ddd;
      text-align: left;
      padding: 15px 0;
      display: flex;
      margin-left: 5px;
      flex-direction: column;
      width: 100%;
    }

   .faq-item:last-child {
      border-bottom: none;
    }

   .faq-question {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      font-size: 17px;
      font-weight: 600;
      color: #003366;
      padding: 0 5px;
      width: calc(100% - 20px);
      transition: 0.3s ease;
    }

   .faq-question:hover {
      color: #0055aa;
    }

   .faq-question i {
      margin-left: auto;
      transition: transform 0.3s ease;
    }

   .faq-question.active i {
      transform: rotate(180deg);
   }

   .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
      font-size: 14px;
      font-weight: 400;
      color: #555;
      margin-left: 15px;
      line-height: 1.6;
      margin-top: 10px;
      padding: 0 5px;
      opacity: 0;
      transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
   }

   .faq-answer.show {
      max-height: 500px;
      opacity: 1;
      padding: 10px 5px;
   }



    /* Zoom-in screen orientation layout */
    @media(max-width: 1000px) {
        html, body {
            overflow-x: hidden;
            overflow-y: auto;
            width: 100%;
            max-width: 100%;
        }

        section {
            width: 100vw;
            height: 120vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d8e4f0;
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
        }

        .search-section {
            width: 100%;
            padding: 0 15px;
        }

        .hcwhy h3 {
            font-size: 24px;
            margin-left: 0;
            text-align: center;
        }

        .search-container2 {
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
        }

        .faq-container {
            width: 100%;
            max-width: 500px;
            margin: 30px auto;
        }

        .faq-title {
            font-size: 20px;
        }

        .faq-question {
            font-size: 15px;
            padding: 10px 5px;
        }

        .faq-answer {
            font-size: 13px;
            padding: 0 5px;
        }
    }

    footer {
      background: #fff;
      padding-top: 20px;
      padding-bottom: 5px;
    }

    .container {
      margin-left: 20px;
      margin-right: 20px;
      height: 110px;
      width: 1140px;
      display: flex;
      justify-content: space-between;
    }

    .footer-content {
      margin-left: 20px;
      margin-right: 20px;
      width: 33.3%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      margin: 0 10px;
    }

    footer iframe {
      margin-left: 20px;
      width: 100%;
      height: 100%;
      border: 0;
      margin: 0;
    }

    .map-container {
      flex-grow: 1;
      height: 100%;
    }

    h3 {
      margin-left: 20px;
      margin-right: 20px;
      font-weight: 100;
      font-size: 16px;
      margin-bottom: 5px;
      text-align: center;
      color: #3247df;
    }

    .footer-content p {
      width: 190px;
      margin-left: 5px;
      padding: 2px;
    }

    .social-icons {
      text-align: center;
      padding: 0;
    }

    .social-icons li {
      display: inline-block;
      text-align: center;
      padding: 5px;
    }

    .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
    }

    a {
      color: #333;
      text-decoration: none;
    }

    a:hover {
      color: #3247df;
    }

    .social-icons i:hover {
      color: #3247df;
    }

    .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 0px 0;
      margin-top: 50px;
    }

    .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 16px;
      padding: 8px;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 1000px) {
      section {
        height: auto;
        min-height: 100vh;
        padding: 20px 0;
      }

      .search-section {
        width: 100%;
        padding: 0 15px;
      }

      .hcwhy h3 {
        font-size: 24px;
        margin-left: 0;
        text-align: center;
      }

      .search-container2 {
        width: 100%;
        max-width: 500px;
        margin: 20px auto;
      }

      .faq-container {
        width: 100%;
        max-width: 500px;
        margin: 30px auto;
      }

      .faq-title {
        font-size: 20px;
      }

      .faq-question {
        font-size: 15px;
        padding: 10px 5px;
      }

      .faq-answer {
        font-size: 13px;
        padding: 0 5px;
      }
    }

    @media screen and (max-width: 480px) {
      .hcwhy h3 {
        font-size: 20px;
      }

      .search-container2 {
        height: 35px;
      }

      .search-container2 input {
        font-size: 13px;
      }

      .faq-container {
        padding: 5px;
      }

      .faq-title {
        font-size: 18px;
        margin: 5px 0 15px 0;
      }

      .faq-question {
        font-size: 14px;
        padding: 8px 5px;
      }

      .faq-answer {
        font-size: 12px;
        line-height: 1.4;
      }
    }

    /* Fix for FAQ items on mobile */
    @media screen and (max-width: 768px) {
      .faq-item {
        padding: 10px 0;
        margin-left: 0;
      }

      .faq-question {
        width: 100%;
        padding: 0 10px;
      }

      .faq-answer {
        margin-left: 10px;
        padding: 0 10px;
      }

      .faq-answer.show {
        padding: 10px;
      }
    }

	</style>
</head>

<body>
	@include('layouts.public-navbar')

  <center>
     <section class="search-section">
       <div class="hcwhy">
     <h3> How can we help you? </h3>
        <form class="search-container2">
            <input type="text" placeholder="Ask anything">
            <button type="submit">
                <i class="fa fa-search"> </i>
            </button>
        </form>
        
        <div class="faq-container">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            
            <div id="faq-list">
                @foreach($faqs as $faq)
                <div class="faq-item">
                    <div class="faq-question">
                        {{ $faq->question }}
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
              </section>
              </center>

              @include('layouts.footer')

<script type="text/javascript">
    // Search functionality
    const searchInput = document.getElementById("searchInput");
    const routes = {
        home: "{{ route('home') }}",
        faqs: "{{ route('faqs') }}",
        about: "{{ route('about') }}",
        contact: "{{ route('contact') }}"
    };

    function performSearch() {
        const input = searchInput.value.trim().toLowerCase();

        if (input === "") {
            alert("Please enter a search term.");
        } else {
            if (["home page", "homepage", "home"].includes(input)) {
                window.location.href = routes.home;
            } else if (["faqs", "facts", "help", "faq", "question"].includes(input)) {
                window.location.href = routes.faqs;
            } else if (["about", "about civil"].includes(input)) {
                window.location.href = routes.about;
            } else if (["contact", "number", "email"].includes(input)) {
                window.location.href = routes.contact;
            } else {
                alert("No results found.");
                searchInput.value = "";
            }
        }
    }

    if (searchInput) {
        searchInput.addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                performSearch();
            }
        });
    }

    // Menu toggle functionality
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.menu');
    
    if (menuToggle && navMenu) {
        menuToggle.onclick = () => {
            navMenu.classList.toggle('expand-mobile');
            menuToggle.classList.toggle('expand-icon');
        };
    }

    // Dropdown functionality
    function toggleDropdown() {
        const dropdown = document.getElementById("accountDropdown");
        if (dropdown) {
            alert("Please login or register your account first.");
            dropdown.classList.toggle("show");
        }
    }

    // FAQ functionality
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            // Toggle active class on the clicked question
            question.classList.toggle('active');
            
            // Get the answer element
            const answer = question.nextElementSibling;
            const icon = question.querySelector('i');

            // Close all other answers
            faqQuestions.forEach(otherQuestion => {
                if (otherQuestion !== question) {
                    otherQuestion.classList.remove('active');
                    otherQuestion.querySelector('i')?.classList.remove('active');
                    otherQuestion.nextElementSibling.classList.remove('show');
                }
            });

            // Toggle the clicked answer
            answer.classList.toggle('show');
            icon?.classList.toggle('active');
        });
    });
</script>

</body>
</html>
