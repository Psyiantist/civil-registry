<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> FAQs Page - Residence View </title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">

    body {
            font-family: 'Poppins';
            background-color: #d8e4f0;
      background-size: cover;
      background-repeat: no-repeat;
        }
            
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
      width: 100%;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      margin: 0;
      padding: 20px;
      box-sizing: border-box;
      position: relative;
    }

    .hcwhy h3{
      color: #2c3e50;
      font-size: clamp(20px, 5vw, 30px);
      font-weight: bold;
      margin: 20px 0;
      text-align: center;
      font-family: "Poppins", sans-serif;
    }

    .search-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .search-container2 {
      border: 2px solid #426DDC;
      display: flex;
      margin: 20px 0;
      align-items: center;
      width: 100%;
      max-width: 600px;
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
      font-size: clamp(14px, 2vw, 15px);
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

    .faq-container {
      margin: 20px 0;
      padding: 20px;
      width: 100%;
      max-width: 800px;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      font-family: "Poppins", sans-serif;
    }

    .faq-title {
      text-align: center;
      font-size: clamp(20px, 4vw, 23px);
      color: #003366;
      margin: 10px 0 25px;
    }

    .faq-item {
      border-bottom: 1px solid #ddd;
      text-align: left;
      padding: 15px 0;
      display: flex;
      margin: 0 5px;
      flex-direction: column;
      width: calc(100% - 10px);
    }

    .faq-item:last-child {
      border-bottom: none;
    }

    .faq-question {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      font-size: clamp(15px, 2vw, 17px);
      font-weight: 600;
      color: #003366;
      padding: 0 5px;
      width: 100%;
      transition: 0.3s ease;
    }

    .faq-question:hover {
      color: #0055aa;
    }

    .faq-question i {
      margin-left: 10px;
      transition: transform 0.3s ease;
      flex-shrink: 0;
    }

    .faq-question.active i {
      transform: rotate(180deg);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      font-size: clamp(13px, 1.8vw, 14px);
      font-weight: 400;
      color: #555;
      margin: 10px 15px 0;
      line-height: 1.6;
      padding: 0 5px;
    }

    .faq-answer.show {
      max-height: 500px;
    }

    /* Footer Responsive Styles */
    footer {
      background: #fff;
      padding: 20px 0 5px;
      width: 100%;
    }

    .container {
      margin: 0 auto;
      padding: 0 20px;
      max-width: 1140px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-content {
      flex: 1;
      min-width: 250px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .map-container {
      width: 100%;
      height: 200px;
      margin: 10px 0;
    }

    footer iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      padding: 0;
      list-style: none;
    }

    .social-icons li {
      display: inline-block;
    }

    .social-icons i {
      color: rgb(3, 3, 3);
      font-size: 25px;
      transition: color 0.3s ease;
    }

    .social-icons i:hover {
      color: #3247df;
    }

    .bottom-bar {
      background: #3247df;
      text-align: center;
      padding: 8px 0;
      margin-top: 20px;
    }

    .bottom-bar p {
      color: #f7f7f7;
      margin: 0;
      font-size: 14px;
      padding: 8px;
    }

    

    @media (max-width: 480px) {
      section {
        padding: 10px;
      }

      .search-container2 {
        margin: 10px 0;
        height: auto;
        padding: 10px;
      }

      .faq-container {
        padding: 15px;
      }

      .faq-question {
        font-size: 15px;
      }

      .faq-answer {
        font-size: 13px;
        margin: 5px 10px 0;
      }
    }
	</style>
</head>

<body>
	@include('layouts.residence-navbar')
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




<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script type="text/javascript">
        


    
        function toggleDropdown() {
        const dropdown = document.getElementById("accountDropdown");

             dropdown.classList.toggle("show");
        }

        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        const icon = question.querySelector('i');

        document.querySelectorAll('.faq-answer').forEach(ans => {
                if (ans !== answer) ans.classList.remove('show');
        });
        document.querySelectorAll('.faq-question i').forEach(ic => {
                if (ic !== icon) ic.classList.remove('active');
        });

            question.classList.toggle('active');
            answer.classList.toggle('show');
            icon?.classList.toggle('active');
        });
        });

</script>

</body>
</html>