<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<title> Home Page - Residence View </title>
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
      background-color: #d8e4f0;
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    section {
      width: 100vw;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }

    .details {
      margin-top: -130px;
    }

		h5 {
      color: white;
			font-size: 90px;
      margin-left: 5px;
			margin-top: 60px;
			font-weight: bolder;
      letter-spacing: 25px;
      text-shadow:
               1px 1px 0px white,
              -1px -1px 0px white,
               1px -1px 0px white,
              -1px 1px 0px white,
               0 0 50px black;
			font-family: "Poppins", sans-serif;
    }

		h4 {
			color: white;
			font-size: 40px;
			margin-top: -25px;
      text-align: center;
			font-weight: bolder;
      text-shadow:
               1px 1px 0px white,
              -1px -1px 0px white,
               1px -1px 0px white,
              -1px 1px 0px white,
               0 0 50px black;
      letter-spacing: 4px;
			font-family: "Poppins", sans-serif;
		}

		.details p {
      margin-top: 5px;
			color: black;
			font-size: 17px;
			font-weight: bold;
      margin-top: 10px;
      text-align: center;
      background-color: white;
      border-radius: 10px;
			font-family: "Poppins", sans-serif;
		}

    .announcement {
      background-color: #426DDC;
    }

    .announcement-section {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px 30px;
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      font-family: "Poppins", sans-serif;
      color: #333;
    }

    .announcement-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #e0e0e0;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }

    .announcement-header h2 {
      font-size: 24px;
      margin: 0;
    }

    #datetime {
      font-size: 15px;
      color: #666;
    }

    .announcement-body p {
      font-size: 16px;
      line-height: 1.6;
    }

    .slider-container {
      position: relative;
      width: 85%;
      max-width: 900px;
      margin: 30px auto;
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      background-color: white;
    }

    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 32px 0 24px 0;
    }

    .slide img {
      width: 100%;
      max-width: 700px;
      height: auto;
      border-radius: 16px 16px 0 0;
      margin-bottom: 18px;
    }

    .announcement-text {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 24px 32px;
      background: #fff;
      border-radius: 0 0 16px 16px;
      box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .announcement-text h2,
    .announcement-text p {
      text-align: center;
      width: 100%;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      font-size: 26px;
      padding: 10px 16px;
      border-radius: 10px;
      cursor: pointer;
      z-index: 10;
      transition: 0.3s ease;
    }

    .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .prev {
      left: 15px;
      margin-top: -80px;
    }

     .next {
       right: 15px;
       margin-top: -80px;
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
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url({{ asset('storage/assets/appointment_bg.jpg') }}) center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }


    }

    /* Responsive Styles for Main Content */
    @media (max-width: 1200px) {
        .container {
            width: 100%;
            padding: 0 20px;
        }

        .slider-container {
            width: 90%;
        }
    }

    @media (max-width: 992px) {
        h5 {
            font-size: 70px;
            letter-spacing: 20px;
        }

        h4 {
            font-size: 32px;
            letter-spacing: 3px;
        }

        .details p {
            font-size: 16px;
            padding: 8px 15px;
        }

        .announcement-section {
            margin: 20px;
            padding: 15px 20px;
        }

        .slider-container {
            width: 95%;
        }

        .slide img {
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        h5 {
            font-size: 50px;
            letter-spacing: 15px;
            margin-top: 40px;
        }

        h4 {
            font-size: 28px;
            letter-spacing: 2px;
            margin-top: -15px;
        }

        .details p {
            font-size: 14px;
            padding: 6px 12px;
        }

        .announcement-header {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }

        .announcement-header h2 {
            font-size: 20px;
        }

        #datetime {
            font-size: 13px;
        }

        .announcement-body p {
            font-size: 14px;
        }

        .prev, .next {
            padding: 8px 12px;
            font-size: 20px;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

     .container {
    display: flex;
    flex-direction: column;
    padding: 20px;
    height: auto;
}

}

    @media (max-width: 480px) {
        h5 {
            font-size: 36px;
            letter-spacing: 10px;
            margin-top: 30px;
        }

        h4 {
            font-size: 22px;
            letter-spacing: 1px;
            margin-top: -10px;
        }

        .details p {
            font-size: 12px;
            padding: 5px 10px;
        }

        .announcement-section {
            margin: 15px;
            padding: 12px 15px;
        }

        .announcement-header h2 {
            font-size: 18px;
        }

        #datetime {
            font-size: 12px;
        }

        .announcement-body p {
            font-size: 13px;
        }

        .prev, .next {
            padding: 6px 10px;
            font-size: 18px;
        }

    }

    /* Smooth Transitions */
    .announcement-section,
    .slider-container{
        transition: all 0.3s ease;
    }

    /* Hover Effects */
    .announcement-section:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }


    /* Animation for Header Content */
    .details {
        animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

	</style>
</head>

<body>
	@include('layouts.residence-navbar')

	<section>
		<div class="details">
      <div>
			<h5> <center> SCHEDULE </h5>
      <h4> AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"> </i> </i> </h4>
			<p> <i> "Convenience you can count on, appointments you can trust." </i> </p>
		</div>
    </section>

    <div class="announcement-section">
  <div class="announcement-header">
    <h2> <i class="fa fa-bullhorn" aria-hidden="true"></i> Announcement & News Update </h2>
    <p id="datetime"> </p>
  </div>
  <div class="announcement-body">
    <p style="text-align: center;"> Welcome! Stay tuned for the latest updates from the <i> City Civil Registry Department. </i> </p>
  </div>
</div>

 <div class="slider-container">
  <div class="slider">
    @foreach($announcements as $announcement)
    <div class="slide">
      <img src="{{ asset('storage/announcements/' . $announcement->image_path) }}">
      <div class="announcement-text">
        <h2><center>{{ $announcement->title }}</center></h2>
        <p>{{ $announcement->content }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
  <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>

@include('layouts.footer')

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script type="text/javascript">



function updateDateTime() {
    const now = new Date();
    const formatted = now.toLocaleString('en-PH', {
        dateStyle: 'full',
        timeStyle: 'short',
        hour12: true
    });
    document.getElementById('datetime').textContent = formatted;
}

window.onload = function () {
    updateDateTime();
    setInterval(updateDateTime, 1000);
};

let currentSlide = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    currentSlide = (currentSlide + step + totalSlides) % totalSlides;

    const slider = document.querySelector('.slider');
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
}

</script>
</body>
</html>
