<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Home Page - Admin View</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style type="text/css">

    body {
            font-family: 'Poppins';
        }
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Custom styles for ID image popup */
    .swal2-title-custom {
        font-family: 'Poppins', sans-serif !important;
        font-size: 1.2em !important;
        font-weight: 600 !important;
        color: #1f2937 !important;
        margin-bottom: 0.5em !important;
        line-height: 1.4 !important;
    }

    .swal2-confirm-button-custom {
        font-family: 'Poppins', sans-serif !important;
        font-weight: 500 !important;
        padding: 0.5em 1.5em !important;
        border-radius: 6px !important;
        transition: all 0.2s ease !important;
    }

    .swal2-confirm-button-custom:hover {
        transform: translateY(-1px) !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1) !important;
    }

    /* Custom styles for file input */
    .custom-file-label {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #426DDC;
        color: white;
        padding: 8px 18px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
        position: relative;
        overflow: hidden;
        min-width: 200px;
        max-width: 300px;
        white-space: nowrap;
        text-overflow: ellipsis;
        transition: all 0.3s ease;
    }

    .custom-file-label:hover {
        background: #3452a8;
    }

    .custom-file-label input[type="file"] {
        opacity: 0;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        z-index: 2;
    }

    .custom-file-label span {
        color: white !important;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 100%;
        text-align: center;
        pointer-events: none;
        z-index: 1;
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
      width: 100%;
      max-width: 1200px;
      padding: 0 20px;
      text-align: center;
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
      line-height: 1.2;
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
      line-height: 1.3;
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
      padding: 15px 25px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .learn-button {
      display: inline-block;
      border: none;
      color: black;
      cursor: pointer;
      font-size: 17px;
      font-weight: bold;
      padding: 12px 30px;
      border-radius: 10px;
      text-decoration: none;
      background-color: #f9f5ed;
      font-family: "Poppins", sans-serif;
      transition: all 0.3s ease;
      margin-top: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .learn-button:hover {
      color: #426DDC;
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      background-color: #EAEAEA;
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
      max-width: 1200px;
      margin: 0 auto;
      padding: 24px 32px;
      background: #fff;
      border-radius: 0 0 16px 16px;
      box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .announcement-controls {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 18px;
      gap: 10px;
    }

    .file-input-row {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 0;
      justify-content: center;
    }

    .save-button, .cancel-button, .reset-button {
      width: 220px;
      margin: 0 auto;
      display: block;
    }

    .custom-file-label {
      display: flex;
      align-items: center;
      background: #426DDC;
      color: white;
      padding: 8px 18px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 15px;
      position: relative;
      overflow: hidden;
    }

    .custom-file-label input[type="file"] {
      opacity: 0;
      position: absolute;
      left: 0; top: 0; width: 100%; height: 100%;
      cursor: pointer;
    }

    .custom-file-label span {
      color: white !important;
    }

    .file-name-display {
      color: #222;
      font-size: 15px;
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


    h3 {
      margin-left: 20px;
      margin-right: 20px;
      font-weight: 100;
      font-size: 16px;
      margin-bottom: 5px;
      text-align: center;
      color: #3247df;
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
      background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),url('{{ asset('storage/assets/appointment_bg.jpg') }}') center 40% fixed;
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      position: relative;
    }

    .form {
      display: none;
    }
    }

    [contenteditable="true"]:focus {
      border-radius: 10px;
      outline: 3px solid black;
      box-shadow: 0 0 20px white;
      cursor: text;
    }

    [contenteditable="true"]:hover {
     outline: 3px solid white;
     box-shadow: 0 0 20px black;
     border-radius: 10px;
     cursor: text;
    }

    .editable-wrapper {
      display: flex;
      align-items: center;
      position: relative;
      justify-content: center;
      gap: 8px;
    }

    .edit-icon {
      pointer-events: none;
      user-select: none;
      font-size: 17px;
      color: black;
    }

    input[type="file"] {
      width: auto;
      position: relative;
      z-index: 1;
      margin-left: 300px;
      color: transparent;
    }

    input[type="file"]::file-selector-button {
      background: #426DDC;
      color: white;
      border: none;
      font-family: "Poppins", sans-serif;
      padding: 8px 16px;
      font-size: 15px;
      border-radius: 4px;
      cursor: pointer;
    }

    #fileNameDisplay {
      margin-top: -30px;
      margin-left: 430px;
    }

    input[type="file"]::file-selector-button {
      background: #426DDC;
      color: white;
      border: none;
      font-family: "Poppins", sans-serif;
      padding: 8px 16px;
      font-size: 15px;
      border-radius: 4px;
      cursor: pointer;
    }

    .reset-button {
      background: #426DDC;
      margin-left: 325px;
      color: white;
      border: none;
      font-family: "Poppins", sans-serif;
      padding: 8px 16px;
      width: 220px;       margin-top: 10px;
      font-size: 15px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="file"]::file-selector-button:hover, .reset-button:hover {
      background: #3452a8;
      transition: 0.5s ease-out;
    }

    .account-approval-container {
      margin-bottom: 40px;
      min-height: 400px;
      max-height: 800px;
      overflow-y: auto;
      margin-top: 40px;
      margin-bottom: 60px;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      position: relative;
    }

    /* Add spacing between tables */
    .account-approval-container + .account-approval-container {
      margin-top: 80px;
    }

    #approvalTable, #userActivityTable, #employeeApprovalTable {
      width: 100%;
      min-width: 800px;
      border-collapse: collapse;
      font-family: 'Poppins', sans-serif;
      background: white;
    }

    #approvalTable th, #approvalTable td,
    #userActivityTable th, #userActivityTable td,
    #employeeApprovalTable th, #employeeApprovalTable td {
      padding: 12px;
      text-align: left;
      font-size: 0.95rem;
      border-bottom: 1px solid #e3e8f0;
      white-space: nowrap;
    }

    #approvalTable th, #userActivityTable th, #employeeApprovalTable th {
      background-color: #1E63E9;
      color: white;
      font-weight: 600;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    #approvalTable tr:last-child td,
    #userActivityTable tr:last-child td,
    #employeeApprovalTable tr:last-child td {
      border-bottom: none;
    }

    #approvalTable tr,
    #userActivityTable tr,
    #employeeApprovalTable tr {
      transition: background 0.2s;
    }

    #approvalTable tr:hover,
    #userActivityTable tr:hover,
    #employeeApprovalTable tr:hover {
      background: #f0f6ff;
    }

    .status-badge {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 6px;
      font-weight: 600;
      font-size: 0.85rem;
      letter-spacing: 0.5px;
      white-space: nowrap;
    }

    .status-pending {
      background-color: #f59e0b;
      color: white;
    }

    .status-approved {
      background-color: #10b981;
      color: white;
    }

    .status-declined {
      background-color: #ef4444;
      color: white;
    }

    /* Responsive styles for tables */
    @media screen and (max-width: 1024px) {
      .account-approval-container {
        margin: 20px 10px;
        border-radius: 8px;
      }

      #approvalTable th, #approvalTable td,
      #userActivityTable th, #userActivityTable td,
      #employeeApprovalTable th, #employeeApprovalTable td {
        padding: 10px;
        font-size: 0.9rem;
      }

      .status-badge {
        padding: 4px 10px;
        font-size: 0.8rem;
      }

      .approve-btn, .reject-btn, .delete-btn {
        padding: 4px 8px;
        font-size: 0.8rem;
      }
    }

    /* Mobile-first table styles */
    @media screen and (max-width: 768px) {
      .account-approval-container {
        margin: 15px 5px;
        border-radius: 6px;
        overflow: visible;
        margin-bottom: 40px;
      }

      /* Add more spacing between tables on mobile */
      .account-approval-container + .account-approval-container {
        margin-top: 60px;
      }

      #approvalTable, #userActivityTable, #employeeApprovalTable {
        display: block;
        min-width: 100%;
      }

      #approvalTable thead, #userActivityTable thead, #employeeApprovalTable thead {
        display: none;
      }

      #approvalTable tbody, #userActivityTable tbody, #employeeApprovalTable tbody {
        display: block;
        width: 100%;
      }

      #approvalTable tr, #userActivityTable tr, #employeeApprovalTable tr {
        display: block;
        margin-bottom: 15px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 12px;
      }

      #approvalTable td, #userActivityTable td, #employeeApprovalTable td {
        display: flex;
        padding: 8px 0;
        border: none;
        font-size: 0.9rem;
        align-items: center;
        justify-content: space-between;
        text-align: right;
      }

      #approvalTable td:before, #userActivityTable td:before, #employeeApprovalTable td:before {
        content: attr(data-label);
        font-weight: 600;
        color: #1E63E9;
        margin-right: 10px;
        flex: 0 0 40%;
        text-align: left;
      }

      #approvalTable td:last-child, #userActivityTable td:last-child, #employeeApprovalTable td:last-child {
        border-bottom: none;
      }

      .status-badge {
        padding: 4px 8px;
        font-size: 0.8rem;
        margin-left: auto;
      }

      .approve-btn, .reject-btn, .delete-btn {
        width: 100%;
        margin: 5px 0;
        padding: 8px;
        font-size: 0.9rem;
      }

      /* Action buttons container */
      #approvalTable td:last-child, #userActivityTable td:last-child, #employeeApprovalTable td:last-child {
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
      }

      /* Add labels for mobile view */
      #approvalTable td[data-label], #userActivityTable td[data-label], #employeeApprovalTable td[data-label] {
        position: relative;
      }

      /* Improve mobile view for links */
      #approvalTable td a, #userActivityTable td a, #employeeApprovalTable td a {
        margin-left: auto;
      }
    }

    @media screen and (max-width: 480px) {
      .account-approval-container {
        margin: 10px 0;
        border-radius: 4px;
      }

      #approvalTable th, #approvalTable td,
      #userActivityTable th, #userActivityTable td,
      #employeeApprovalTable th, #employeeApprovalTable td {
        padding: 6px;
        font-size: 0.8rem;
      }

      .status-badge {
        padding: 2px 6px;
        font-size: 0.7rem;
      }

      .approve-btn, .reject-btn, .delete-btn {
        padding: 2px 4px;
        font-size: 0.7rem;
      }

      h2 {
        font-size: 1.2rem;
        padding: 10px;
      }

      /* Improve mobile view for action buttons */
      .approval-action-form {
        width: 100%;
      }

      .approve-btn, .reject-btn, .delete-btn {
        width: 100%;
        margin: 2px 0;
      }
    }

    /* Add horizontal scroll indicator */
    .account-approval-container::after {
      content: '';
      position: absolute;
      right: 0;
      top: 0;
      bottom: 0;
      width: 30px;
      background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.9));
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .account-approval-container:hover::after {
      opacity: 1;
    }

    /* Improve table header visibility */
    #approvalTable th, #userActivityTable th, #employeeApprovalTable th {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Add responsive table wrapper */
    .table-responsive {
      position: relative;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      margin-bottom: 1rem;
    }

    /* Improve button styles for better touch targets */
    .approve-btn, .reject-btn, .delete-btn {
      min-width: 80px;
      min-height: 32px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s ease;
    }

    .approve-btn:hover, .reject-btn:hover, .delete-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Responsive styles for details section */
    @media screen and (max-width: 1024px) {
      .details {
        margin-top: -100px;
        padding: 0 15px;
      }

      h5 {
        font-size: 70px;
        letter-spacing: 20px;
        margin-top: 50px;
      }

      h4 {
        font-size: 32px;
        letter-spacing: 3px;
        margin-top: -20px;
      }

      .details p {
        font-size: 16px;
        padding: 12px 20px;
        max-width: 500px;
      }

      .learn-button {
        font-size: 16px;
        padding: 10px 25px;
      }
    }

    @media screen and (max-width: 768px) {
      .details {
        margin-top: -80px;
        padding: 0 12px;
      }

      h5 {
        font-size: 50px;
        letter-spacing: 15px;
        margin-top: 40px;
      }

      h4 {
        font-size: 24px;
        letter-spacing: 2px;
        margin-top: -15px;
      }

      .details p {
        font-size: 14px;
        padding: 10px 15px;
        max-width: 400px;
      }

      .learn-button {
        font-size: 14px;
        padding: 8px 20px;
      }
    }

    @media screen and (max-width: 480px) {
      .details {
        margin-top: -60px;
        padding: 0 10px;
      }

      h5 {
        font-size: 36px;
        letter-spacing: 10px;
        margin-top: 30px;
      }

      h4 {
        font-size: 20px;
        letter-spacing: 1px;
        margin-top: -10px;
      }

      .details p {
        font-size: 12px;
        padding: 8px 12px;
        max-width: 300px;
      }

      .learn-button {
        font-size: 12px;
        padding: 6px 16px;
      }
    }

    /* Add smooth transitions */
    .details * {
      transition: all 0.3s ease;
    }

    /* Improve text readability */
    .details p {
      backdrop-filter: blur(5px);
      background-color: rgba(255, 255, 255, 0.95);
    }

    /* Add container for better centering */
    .details > div {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .approve-btn {
      background: #22c55e;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-family: "Poppins", sans-serif;
      font-weight: 600;
      font-size: 1rem;
      padding: 10px 20px;
      margin-bottom: 6px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 2px 6px rgba(34,197,94,0.08);
      transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
      cursor: pointer;
    }
    .approve-btn:hover {
      background: #16a34a;
      box-shadow: 0 4px 12px rgba(34,197,94,0.15);
      transform: translateY(-2px) scale(1.04);
    }
    .reject-btn {
      background: #f59e42;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-family: "Poppins", sans-serif;
      font-weight: 600;
      font-size: 1rem;
      padding: 10px 20px;
      margin-bottom: 6px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 2px 6px rgba(245,158,66,0.08);
      transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
      cursor: pointer;
    }
    .reject-btn:hover {
      background: #d97706;
      box-shadow: 0 4px 12px rgba(245,158,66,0.15);
      transform: translateY(-2px) scale(1.04);
    }
    .delete-btn {
      background: #ef4444;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-family: "Poppins", sans-serif;
      font-weight: 600;
      font-size: 1rem;
      padding: 10px 20px;
      margin-bottom: 6px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 2px 6px rgba(239,68,68,0.08);
      transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
      cursor: pointer;
    }
    .delete-btn:hover {
      background: #b91c1c;
      box-shadow: 0 4px 12px rgba(239,68,68,0.15);
      transform: translateY(-2px) scale(1.04);
    }

    /* New file input styles */
    .file-input-container {
      position: relative;
      display: inline-block;
    }

    .file-input-container input[type="file"] {
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
      z-index: 2;
    }

    .file-input-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #426DDC;
      color: white;
      padding: 8px 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      min-width: 200px;
      max-width: 300px;
      transition: all 0.3s ease;
    }

    .file-input-button:hover {
      background: #3452a8;
    }

    .file-input-button span {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 100%;
    }

	</style>
</head>


<body data-is-admin1="{{ $isAdmin1 ? 'true' : 'false' }}">
  @include('layouts.admin-navbar')

  <section>
    <div class="details">
      <div>
        <h5><center>SCHEDULE</h5>
        <h4>AN APPOINTMENT NOW! <i class="fa fa-calendar-week" aria-hidden="true"></i></h4>
        <p><i>"Convenience you can count on, appointments you can trust."</i></p>
        <a href="{{ route('admin.about') }}" class="learn-button">Learn more</a></center>
      </div>
    </div>
  </section>

  <div class="announcement-section">
    <div class="announcement-header">
      <h2> <i class="fa fa-bullhorn" aria-hidden="true"></i> Announcement & News Update </h2>
      <div style="display: flex; align-items: center; gap: 16px;">
        <p id="datetime"> </p>
        <button id="addAnnouncementBtn" style="background: #426DDC; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-family: 'Poppins', sans-serif;">
          <i class="fas fa-plus"></i> Add Announcement
        </button>
      </div>
    </div>

    <div class="announcement-body">
      <div class="editable-wrapper">
        <p> Welcome! Stay tuned for the latest updates from the <i>City Civil Registry Department. </i> </p>
      </div>
    </div>
  </div>
  
  <div class="slider-container">
    <div class="slider">
      @foreach($announcements as $announcement)
      <div class="slide">
        <img id="img{{ $announcement->id }}" src="{{ asset('storage/announcements/' . $announcement->image_path) }}"> <br>
        <div class="announcement-controls">
          <form action="{{ url('/admin/announcements/' . $announcement->id) }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: center; gap: 10px; margin-bottom: 10px;">
            @csrf
            @method('PUT')
            <label class="custom-file-label" style="margin-bottom: 0;">
              <input type="file" name="image" accept="image/*" class="announcement-file-input" required>
              <span>Choose File</span>
            </label>
            <span class="file-name-display">No file chosen</span>
            <button type="submit" class="save-button" style="background: #426DDC; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-family: 'Poppins', sans-serif;">Save Changes</button>
          </form>
          <form action="{{ url('/admin/announcements/' . $announcement->id) }}" method="POST" style="margin: 0;">
            @csrf
            @method('PUT')
            <input type="hidden" name="reset_to_default" value="1">
            <button type="submit" class="reset-button" style="background: #426DDC; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-family: 'Poppins', sans-serif; width: 220px; margin: 0 auto; display: block;">Reset to Default Photo</button>
          </form>
          <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" style="margin-top: 10px;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button" style="background: #f87171; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-family: 'Poppins', sans-serif; width: 220px; margin: 0 auto; display: block;" onclick="return confirm('Are you sure you want to delete this announcement?');">
              Delete Announcement
            </button>
          </form>
        </div>
        <div class="announcement-text" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 24px 32px; background: #fff; border-radius: 0 0 16px 16px; box-shadow: 0 2px 8px rgba(66, 109, 220, 0.07); display: flex; flex-direction: column; align-items: center;">
          <form action="{{ url('/admin/announcements/' . $announcement->id) }}" method="POST" style="margin-bottom: 20px; width: 100%;">
            @csrf
            @method('PUT')
            <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: flex-start; gap: 24px; width: 100%; max-width: 1200px;">
              <div style="flex: 2; display: flex; flex-direction: column; gap: 10px;">
                <input
                  type="text"
                  name="title"
                  value="{{ $announcement->title }}"
                  required
                  style="font-size: 24px; font-weight: bold; text-align: left; width: 100%; max-width: 1000px; border-radius: 6px; border: 1px solid #ccc; padding: 8px;"
                >
                <textarea
                  name="content"
                  required
                  style="font-size: 16px; width: 100%; max-width: 1000px; border-radius: 6px; border: 1px solid #ccc; padding: 8px; min-height: 60px;"
                >{{ $announcement->content }}</textarea>
              </div>
              <div style="flex: 1; display: flex; flex-direction: column; align-items: flex-end; justify-content: flex-start; width: 100%;">
                <button
                  type="submit"
                  style="background: #426DDC; color: white; border: none; padding: 8px 24px; border-radius: 4px; cursor: pointer; font-family: 'Poppins', sans-serif; font-size: 16px; min-width: 180px;"
                >Save Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      @endforeach
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
  </div>

  <!-- ACCOUNT APPROVAL SECTION (Backend-Driven) -->
  <div class="account-approval-container">
    <h2 style="text-align: center; color: #333; padding: 16px; border-radius: 8px 8px 0 0; margin: 0; background: #eaf1fb; letter-spacing: 2px; font-weight: 700; font-size: 2rem;">RESIDENCE ACCOUNT APPROVAL</h2>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#426DDC'
            });
        </script>
    @endif
    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
                confirmButtonColor: '#426DDC'
            });
        </script>
    @endif
    <div class="table-responsive">
      <table id="approvalTable">
        <thead>
          <tr>
            <th>User Name</th>
            <th>Email Address</th>
            <th>ID Type</th>
            <th>ID Uploaded</th>
            <th>Current/Permanent Address</th>
            <th>Date of Birth</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="pendingUsersTableBody">
          <!-- Data will be loaded here via JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- END ACCOUNT APPROVAL SECTION -->

  <!-- USER ACTIVITY SECTION -->
  <div class="account-approval-container">
    <h2 style="text-align: center; color: #333; padding: 16px; border-radius: 8px 8px 0 0; margin: 0; background: #eaf1fb; letter-spacing: 2px; font-weight: 700; font-size: 2rem;">RESIDENCE USER ACTIVITY</h2>
    <div class="table-responsive">
      <table id="userActivityTable">
        <thead>
          <tr>
            <th>User Name</th>
            <th>Email Address</th>
            <th>Last Login</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="userActivityTableBody">
          <!-- Data will be loaded here via JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- END USER ACTIVITY SECTION -->

  <!-- EMPLOYEE ACTIVITY SECTION -->
  <div class="account-approval-container">
    <h2 style="text-align: center; color: #333; padding: 16px; border-radius: 8px 8px 0 0; margin: 0; background: #eaf1fb; letter-spacing: 2px; font-weight: 700; font-size: 2rem;">EMPLOYEE ACTIVITY</h2>
    <div class="table-responsive">
      <table id="employeeActivityTable" style="width: 100%; min-width: 800px; border-collapse: collapse; font-family: 'Poppins', sans-serif; background: white;">
        <thead>
          <tr>
            <th style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap; background-color: #1E63E9; color: white; font-weight: 600; position: sticky; top: 0; z-index: 10;">Employee Name</th>
            <th style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap; background-color: #1E63E9; color: white; font-weight: 600; position: sticky; top: 0; z-index: 10;">Email Address</th>
            <th style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap; background-color: #1E63E9; color: white; font-weight: 600; position: sticky; top: 0; z-index: 10;">Last Login</th>
            <th style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap; background-color: #1E63E9; color: white; font-weight: 600; position: sticky; top: 0; z-index: 10;">Status</th>
            <th style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap; background-color: #1E63E9; color: white; font-weight: 600; position: sticky; top: 0; z-index: 10;">Action</th>
          </tr>
        </thead>
        <tbody id="employeeActivityTableBody">
          <!-- Data will be loaded here via JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- END EMPLOYEE ACTIVITY SECTION -->

  <!-- EMPLOYEE ACCOUNT APPROVAL SECTION -->
  @if(Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1')
  <div class="account-approval-container">
    <h2 style="text-align: center; color: #333; padding: 16px; border-radius: 8px 8px 0 0; margin: 0; background: #eaf1fb; letter-spacing: 2px; font-weight: 700; font-size: 2rem;">EMPLOYEE ACCOUNT APPROVAL</h2>
    @if(session('employee_success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('employee_success') }}',
                confirmButtonColor: '#426DDC'
            });
        </script>
    @endif
    @if(session('employee_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('employee_error') }}',
                confirmButtonColor: '#426DDC'
            });
        </script>
    @endif
    <div class="table-responsive">
      <table id="employeeApprovalTable">
        <thead>
          <tr>
            <th>Employee Name</th>
            <th>Email Address</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>ID Card</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @if($pending_employees->isEmpty())
            <tr>
              <td colspan="7" style="text-align:center; padding: 24px; color: #888; font-size: 1.1rem; background: #f7faff;">No pending employee accounts for approval.</td>
            </tr>
          @else
            @foreach($pending_employees as $employee)
              <tr>
                <td data-label="Employee Name">{{ $employee->first_name }} {{ $employee->last_name }}</td>
                <td data-label="Username">{{ $employee->username }}</td>
                <td data-label="Birthday">{{ $employee->birthday ? $employee->birthday->format('M d, Y') : 'N/A' }}</td>
                <td data-label="Address">{{ $employee->address ?? 'N/A' }}</td>
                <td data-label="ID Card">
                  @if($employee->id_card_image)
                    <a href="javascript:void(0)" onclick="showIdImage('{{ url('/storage/uploads/' . $employee->id_card_image) }}', '{{ $employee->first_name }} {{ $employee->last_name }} Government Issued ID')" style="color: #1E63E9; text-decoration: underline;">View Government Issued ID</a>
                  @else
                    <span style="color: #aaa;">No ID Card</span>
                  @endif
                </td>
                <td data-label="Status">
                  <span class="status-badge status-pending">Pending</span>
                </td>
                <td data-label="Action">
                  <div style="display: flex; flex-direction: column; gap: 8px;">
                    <form method="POST" action="{{ route('admin.accept-employee', $employee->id) }}" class="approval-action-form">
                      @csrf
                      <button type="submit" class="approve-btn"><i class="fas fa-check-circle"></i>Approve</button>
                    </form>
                    <form method="POST" action="{{ route('admin.reject-employee', $employee->id) }}" class="approval-action-form">
                      @csrf
                      <button type="submit" class="reject-btn"><i class="fas fa-times-circle"></i>Reject</button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
  @endif
  <!-- END EMPLOYEE ACCOUNT APPROVAL SECTION -->

  @include('layouts.footer')

  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script type="text/javascript">

  function showIdImage(imageUrl, title) {
      Swal.fire({
          title: `<div style="font-family: 'Poppins', sans-serif; font-size: 1.2em; font-weight: 600; color: #1f2937; margin-bottom: 0.5em;">${title}</div>`,
          imageUrl: imageUrl,
          imageWidth: 300,
          imageHeight: 300,
          imageAlt: 'ID Card Image',
          showConfirmButton: true,
          confirmButtonText: 'Close',
          confirmButtonColor: '#426DDC',
          width: 'auto',
          padding: '1.5em',
          background: '#fff',
          backdrop: `
              rgba(0,0,0,0.8)
          `,
          customClass: {
              container: 'id-image-modal',
              title: 'swal2-title-custom',
              confirmButton: 'swal2-confirm-button-custom'
          },
          zIndex: 9999
      });
  }

  let originalImageSrc = {};
  let selectedFiles = {};

  function handleFileSelect(input, imgId, announcementId) {
      const file = input.files[0];
      const imgElement = document.getElementById(imgId);
      const fileNameDisplay = document.getElementById("fileNameDisplay" + announcementId);
      const saveChangesContainer = document.getElementById("saveChangesContainer" + announcementId);

      if (!imgElement) {
          alert("Image element not found.");
          return;
      }

      if (!originalImageSrc[announcementId]) {
          originalImageSrc[announcementId] = imgElement.src;
      }

      if (file) {
          // Store the selected file
          selectedFiles[announcementId] = file;
          
          // Preview the image
          const reader = new FileReader();
          reader.onload = function(e) {
              imgElement.src = e.target.result;
          };
          reader.readAsDataURL(file);
          
          // Show the save changes container
          saveChangesContainer.style.display = 'block';
          fileNameDisplay.textContent = file.name;
      }
  }

  function saveImageChanges(imgId, announcementId) {
      const imgElement = document.getElementById(imgId);
      const file = selectedFiles[announcementId];
      const saveChangesContainer = document.getElementById("saveChangesContainer" + announcementId);
      const fileNameDisplay = document.getElementById("fileNameDisplay" + announcementId);

      if (!file) {
          alert("No file selected.");
          return;
      }

      const formData = new FormData();
      formData.append('image', file);

      fetch('{{ url("/admin/announcements") }}/' + announcementId, {
          method: 'POST',
          headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          },
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert("Image uploaded successfully!");
              // Optionally update the image src to the new file if you want to force refresh
              // imgElement.src = `/storage/announcements/${data.image_path}`;
              saveChangesContainer.style.display = 'none';
              selectedFiles[announcementId] = null;
              fileNameDisplay.textContent = 'No file chosen';
          } else {
              alert("Failed to upload image");
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert("An error occurred while uploading the image");
      });
  }

  function cancelImageChanges(imgId, announcementId) {
      const imgElement = document.getElementById(imgId);
      const fileNameDisplay = document.getElementById("fileNameDisplay" + announcementId);
      const saveChangesContainer = document.getElementById("saveChangesContainer" + announcementId);
      const fileInput = document.querySelector(`input[onchange="handleFileSelect(this, '${imgId}', ${announcementId})"]`);

      // Reset the image to original
      imgElement.src = originalImageSrc[announcementId];
      
      // Reset the file input
      fileInput.value = '';
      
      // Hide save changes container
      saveChangesContainer.style.display = 'none';
      
      // Reset file name display
      fileNameDisplay.textContent = 'No file chosen';
      
      // Clear selected file
      selectedFiles[announcementId] = null;
  }

  function resetImage(imgId, announcementId) {
      const imgElement = document.getElementById(imgId);
      const fileNameDisplay = document.getElementById("fileNameDisplay" + announcementId);
      const saveChangesContainer = document.getElementById("saveChangesContainer" + announcementId);
      const fileInput = document.querySelector(`input[onchange="handleFileSelect(this, '${imgId}', ${announcementId})"]`);

      // Reset to default image
      imgElement.src = "{{ asset('storage/announcements/default-announcement.png') }}";
      
      // Reset the file input
      fileInput.value = '';
      
      // Hide save changes container
      saveChangesContainer.style.display = 'none';
      
      // Reset file name display
      fileNameDisplay.textContent = 'No file chosen';
      
      // Clear selected file
      selectedFiles[announcementId] = null;

      // Update the image in the database
      const formData = new FormData();
      formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
      formData.append('reset_to_default', true);

      fetch('{{ url("/admin/announcements") }}/' + announcementId, {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert("Image reset to default successfully!");
              originalImageSrc[announcementId] = imgElement.src;
          } else {
              alert("Failed to reset image");
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert("An error occurred while resetting the image");
      });
  }

    

  function toggleDropdown() {
      const dropdown = document.getElementById("accountDropdown");
      dropdown.classList.toggle("show");
  }

  window.addEventListener("click", function(event) {
      const userIcon = document.querySelector(".user-icon");
      const dropdown = document.getElementById("accountDropdown");

      if (!userIcon.contains(event.target) && !dropdown.contains(event.target)) {
          dropdown.classList.remove("show");
      }
  });


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

  function updateAnnouncement(id, field, value) {
      fetch('{{ url("/admin/announcements") }}/' + id, {
          method: 'PUT',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          },
          body: JSON.stringify({
              [field]: value
          })
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Announcement updated successfully');
          } else {
              alert('Failed to update announcement');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert('An error occurred while updating the announcement');
      });
  }

  document.getElementById('addAnnouncementBtn').onclick = function() {
    document.getElementById('addAnnouncementModal').style.display = 'flex';
  };

  function closeAddAnnouncementModal() {
    document.getElementById('addAnnouncementModal').style.display = 'none';
  }

  // Close modal when clicking outside the form
  window.onclick = function(event) {
    var modal = document.getElementById('addAnnouncementModal');
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  };

  // Update file name display for each announcement file input
  const fileInputs = document.querySelectorAll('.announcement-file-input');
  fileInputs.forEach(input => {
    input.addEventListener('change', function(e) {
      const fileNameSpan = input.closest('label').nextElementSibling;
      fileNameSpan.textContent = input.files[0] ? input.files[0].name : 'No file chosen';
    });
  });

  // Add confirmation dialogs for actions
  document.addEventListener('DOMContentLoaded', function() {
      // Approve user confirmation
      const approveForms = document.querySelectorAll('form[action*="accept-user"]');
      approveForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Approve User?',
                  text: "Are you sure you want to approve this user?",
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#22c55e',
                  cancelButtonColor: '#ef4444',
                  confirmButtonText: 'Yes, approve!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });

      // Reject user confirmation
      const rejectForms = document.querySelectorAll('form[action*="reject-user"]');
      rejectForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Reject User?',
                  text: "Are you sure you want to reject this user?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#ef4444',
                  cancelButtonColor: '#6b7280',
                  confirmButtonText: 'Yes, reject!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });

      // Delete user confirmation
      const deleteForms = document.querySelectorAll('form[action*="delete-user"]');
      deleteForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Delete User?',
                  text: "Are you sure you want to delete this user? This action cannot be undone!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#ef4444',
                  cancelButtonColor: '#6b7280',
                  confirmButtonText: 'Yes, delete!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });

      // Approve employee confirmation
      const approveEmployeeForms = document.querySelectorAll('form[action*="accept-employee"]');
      approveEmployeeForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Approve Employee?',
                  text: "Are you sure you want to approve this employee?",
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#22c55e',
                  cancelButtonColor: '#ef4444',
                  confirmButtonText: 'Yes, approve!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });

      // Reject employee confirmation
      const rejectEmployeeForms = document.querySelectorAll('form[action*="reject-employee"]');
      rejectEmployeeForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Reject Employee?',
                  text: "Are you sure you want to reject this employee?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#ef4444',
                  cancelButtonColor: '#6b7280',
                  confirmButtonText: 'Yes, reject!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });

      // Delete announcement confirmation
      const deleteAnnouncementForms = document.querySelectorAll('form[action*="announcements"]');
      deleteAnnouncementForms.forEach(form => {
          if (form.querySelector('input[name="_method"][value="DELETE"]')) {
              form.addEventListener('submit', function(e) {
                  e.preventDefault();
                  Swal.fire({
                      title: 'Delete Announcement?',
                      text: "Are you sure you want to delete this announcement? This action cannot be undone!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#ef4444',
                      cancelButtonColor: '#6b7280',
                      confirmButtonText: 'Yes, delete!'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          form.submit();
                      }
                  });
              });
          }
      });
  });

  document.addEventListener('DOMContentLoaded', function() {
      loadPendingUsers();
      loadUserActivity();
      loadEmployeeActivity();
  });

  function loadPendingUsers() {
      fetch('{{ url("/api/admin/pending-users") }}', {
          headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
              'Accept': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
          },
          credentials: 'same-origin'
      })
      .then(response => response.json())
      .then(data => {
          const tbody = document.getElementById('pendingUsersTableBody');
          tbody.innerHTML = '';
          
          if (data.data.length === 0) {
              tbody.innerHTML = `
                  <tr>
                      <td colspan="8" style="text-align:center; padding: 24px; color: #888; font-size: 1.1rem; background: #f7faff;">
                          No pending users for approval.
                      </td>
                  </tr>
              `;
              return;
          }

          data.data.forEach(user => {
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td data-label="User Name">${user.first_name} ${user.last_name}</td>
                  <td data-label="Email Address">${user.email}</td>
                  <td data-label="ID Type">${user.id_type}</td>
                  <td data-label="ID Uploaded">
                      ${user.id_image ? 
                          `<a href="javascript:void(0)" onclick="showIdImage('{{ url('/storage/uploads') }}/${user.id_image}', '${user.first_name} ${user.last_name} Government Issued ID')" style="color: #1E63E9; text-decoration: underline;">View Government Issued ID</a>` :
                          `<span style="color: #aaa;">No ID</span>`
                      }
                  </td>
                  <td data-label="Current/Permanent Address">${user.current_address}</td>
                  <td data-label="Date of Birth">${user.date_of_birth}</td>
                  <td data-label="Status">
                      <span class="status-badge status-pending">Pending</span>
                  </td>
                  <td data-label="Action">
                      <div style="display: flex; flex-direction: column; gap: 8px;">
                          <form method="POST" action="/admin/accept-user/${user.id}" class="approval-action-form">
                              @csrf
                              <button type="submit" class="approve-btn"><i class="fas fa-check-circle"></i>Approve</button>
                          </form>
                          <form method="POST" action="/admin/reject-user/${user.id}" class="approval-action-form">
                              @csrf
                              <button type="submit" class="reject-btn"><i class="fas fa-times-circle"></i>Reject</button>
                          </form>
                      </div>
                  </td>
              `;
              tbody.appendChild(row);
          });

          // Reattach event listeners for approve/reject buttons
          attachApprovalEventListeners();
      })
      .catch(error => {
          console.error('Error loading pending users:', error);
          const tbody = document.getElementById('pendingUsersTableBody');
          tbody.innerHTML = `
              <tr>
                  <td colspan="8" style="text-align:center; padding: 24px; color: #ef4444; font-size: 1.1rem; background: #f7faff;">
                      Error loading users. Please try again.
                  </td>
              </tr>
          `;
      });
  }

  function loadUserActivity() {
      fetch('{{ url("/api/admin/user-activity") }}', {
          headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
              'Accept': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
          },
          credentials: 'same-origin'
      })
      .then(response => response.json())
      .then(data => {
          const tbody = document.getElementById('userActivityTableBody');
          tbody.innerHTML = '';
          
          if (data.data.length === 0) {
              tbody.innerHTML = `
                  <tr>
                      <td colspan="5" style="text-align:center; padding: 24px; color: #888; font-size: 1.1rem; background: #f7faff;">
                          No users found.
                      </td>
                  </tr>
              `;
              return;
          }

          data.data.forEach(user => {
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td data-label="User Name">${user.first_name} ${user.last_name}</td>
                  <td data-label="Email Address">${user.email}</td>
                  <td data-label="Last Login">
                      ${user.last_login ? new Date(user.last_login).toLocaleString('en-PH', {
                          dateStyle: 'full',
                          timeStyle: 'short',
                          hour12: true
                      }) : 'Never'}
                  </td>
                  <td data-label="Status">
                      <span class="status-badge ${user.is_active ? 'status-approved' : 'status-declined'}">
                          ${user.is_active ? 'Active' : 'Inactive'}
                      </span>
                  </td>
                  <td data-label="Action">
                      ${isAdmin1() ? `
                          <form method="POST" action="/admin/delete-user/${user.id}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i>Delete Account</button>
                          </form>
                      ` : !user.is_active ? `
                          <form method="POST" action="/admin/delete-user/${user.id}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i>Delete Account</button>
                          </form>
                      ` : `
                          <button class="delete-btn" disabled style="opacity:0.5; cursor:not-allowed;" title="Cannot delete active users">
                              <i class="fas fa-trash-alt"></i>Delete Account
                          </button>
                      `}
                  </td>
              `;
              tbody.appendChild(row);
          });

          // Reattach event listeners for delete buttons
          attachDeleteEventListeners();
      })
      .catch(error => {
          console.error('Error loading user activity:', error);
          const tbody = document.getElementById('userActivityTableBody');
          tbody.innerHTML = `
              <tr>
                  <td colspan="5" style="text-align:center; padding: 24px; color: #ef4444; font-size: 1.1rem; background: #f7faff;">
                      Error loading users. Please try again.
                  </td>
              </tr>
          `;
      });
  }

  function loadEmployeeActivity() {
      fetch('{{ url("/api/admin/employee-activity") }}', {
          headers: {
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
              'Accept': 'application/json',
              'X-Requested-With': 'XMLHttpRequest'
          },
          credentials: 'same-origin'
      })
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.json();
      })
      .then(response => {
          const tbody = document.getElementById('employeeActivityTableBody');
          tbody.innerHTML = '';
          
          if (!response.success) {
              throw new Error(response.message || 'Failed to load employee activity');
          }

          const employees = response.data || [];
          
          if (employees.length === 0) {
              tbody.innerHTML = `
                  <tr>
                      <td colspan="5" style="text-align:center; padding: 24px; color: #888; font-size: 1.1rem; background: #f7faff;">
                          No employees found.
                      </td>
                  </tr>
              `;
              return;
          }

          employees.forEach(employee => {
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td data-label="Employee Name" style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap;">${employee.first_name} ${employee.last_name}</td>
                  <td data-label="Email Address" style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap;">${employee.email}</td>
                  <td data-label="Last Login" style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap;">
                      ${employee.last_login ? new Date(employee.last_login).toLocaleString('en-PH', {
                          dateStyle: 'full',
                          timeStyle: 'short',
                          hour12: true
                      }) : 'Never'}
                  </td>
                  <td data-label="Status" style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap;">
                      <span class="status-badge ${employee.is_active ? 'status-approved' : 'status-declined'}">
                          ${employee.is_active ? 'Active' : 'Inactive'}
                      </span>
                  </td>
                  <td data-label="Action" style="padding: 12px; text-align: left; font-size: 0.95rem; border-bottom: 1px solid #e3e8f0; white-space: nowrap;">
                      ${isAdmin1() ? `
                          <form method="POST" action="/admin/delete-employee/${employee.id}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i>Delete Account</button>
                          </form>
                      ` : !employee.is_active ? `
                          <form method="POST" action="/admin/delete-employee/${employee.id}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i>Delete Account</button>
                          </form>
                      ` : `
                          <button class="delete-btn" disabled style="opacity:0.5; cursor:not-allowed;" title="Cannot delete active employees">
                              <i class="fas fa-trash-alt"></i>Delete Account
                          </button>
                      `}
                  </td>
              `;
              tbody.appendChild(row);
          });

          // Reattach event listeners for delete buttons
          attachEmployeeDeleteEventListeners();
      })
      .catch(error => {
          console.error('Error loading employee activity:', error);
          const tbody = document.getElementById('employeeActivityTableBody');
          tbody.innerHTML = `
              <tr>
                  <td colspan="5" style="text-align:center; padding: 24px; color: #ef4444; font-size: 1.1rem; background: #f7faff;">
                      Error loading employees. Please try again.
                  </td>
              </tr>
          `;
      });
  }

  function attachDeleteEventListeners() {
      const deleteForms = document.querySelectorAll('form[action*="delete-user"]');
      deleteForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Delete User?',
                  text: "Are you sure you want to delete this user? This action cannot be undone!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#ef4444',
                  cancelButtonColor: '#6b7280',
                  confirmButtonText: 'Yes, delete!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });
  }

  function attachEmployeeDeleteEventListeners() {
      const deleteForms = document.querySelectorAll('form[action*="delete-employee"]');
      deleteForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Delete Employee?',
                  text: "Are you sure you want to delete this employee? This action cannot be undone!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#ef4444',
                  cancelButtonColor: '#6b7280',
                  confirmButtonText: 'Yes, delete!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });
  }

  function isAdmin1() {
      // This should be set by your backend when rendering the page
      return document.body.dataset.isAdmin1 === 'true';
  }

  function attachApprovalEventListeners() {
      // Approve user confirmation
      const approveForms = document.querySelectorAll('form[action*="accept-user"]');
      approveForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Approve User?',
                  text: "Are you sure you want to approve this user?",
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#22c55e',
                  cancelButtonColor: '#ef4444',
                  confirmButtonText: 'Yes, approve!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });

      // Reject user confirmation
      const rejectForms = document.querySelectorAll('form[action*="reject-user"]');
      rejectForms.forEach(form => {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
              Swal.fire({
                  title: 'Reject User?',
                  text: "Are you sure you want to reject this user?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#ef4444',
                  cancelButtonColor: '#6b7280',
                  confirmButtonText: 'Yes, reject!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });
  }

  </script>

  <!-- Add Announcement Modal -->
  <div id="addAnnouncementModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); justify-content: center; align-items: center; z-index: 1000;">
    <div style="background: white; padding: 32px; border-radius: 12px; width: 90%; max-width: 600px; position: relative;">
      <h2 style="margin-bottom: 24px; color: #333; font-size: 24px;">Add New Announcement</h2>
      <form action="{{ route('admin.announcements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; color: #555;">Title</label>
          <input type="text" name="title" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; color: #555;">Content</label>
          <textarea name="content" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; min-height: 100px;"></textarea>
        </div>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; color: #555;">Image</label>
          <div style="display: flex; align-items: center; gap: 12px;">
            <div class="file-input-container">
              <input type="file" name="image" accept="image/*" id="customFileInput" required onchange="updateFileName(this)">
              <button type="button" class="file-input-button" onclick="document.getElementById('customFileInput').click()">
                <span id="fileText">Choose File</span>
              </button>
            </div>
          </div>
        </div>
        <div style="display: flex; justify-content: flex-end; gap: 12px;">
          <button type="button" onclick="closeAddAnnouncementModal()" style="padding: 8px 16px; border: 1px solid #ddd; border-radius: 4px; background: #f5f5f5; cursor: pointer;">Cancel</button>
          <button type="submit" style="padding: 8px 16px; border: none; border-radius: 4px; background: #426DDC; color: white; cursor: pointer;">Add Announcement</button>
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
    // ... existing code ...

    function updateFileName(input) {
      const fileText = document.getElementById('fileText');
      if (input.files && input.files[0]) {
        fileText.textContent = input.files[0].name;
      } else {
        fileText.textContent = 'Choose File';
      }
    }

    // ... rest of existing code ...
  </script>

</body>
</html>
