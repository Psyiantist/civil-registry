<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FAQs Page - Admin View</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/civil_registry_logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">
        body {
            font-family: 'Poppins';
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            background-color: #d8e4f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Search Section Styles */
        .search-section {
            width: 100%;
            padding: 40px 20px;
            background-color: #f8f9fa;
        }

        .hcwhy h3 {
            color: #2c3e50;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
            font-family: "Poppins", sans-serif;
        }

        .search-container2 {
            border: 2px solid #426DDC;
            display: flex;
            margin: 20px auto;
            align-items: center;
            width: 90%;
            max-width: 600px;
            height: 40px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .search-container2:hover {
            box-shadow: 0 0 7px rgba(66, 109, 220, 0.3);      
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
            width: 100%;
        }

        .search-container2 button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
            color: #555;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-container2 button:hover {
            color: #426DDC;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-content {
            background: white;
            margin: 15% auto;
            padding: 20px;
            width: 50%;
            border-radius: 8px;
            position: relative;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h3 {
            margin: 0;
            color: #2c3e50;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #666;
        }

        .modal-form input,
        .modal-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Poppins', sans-serif;
        }

        .modal-form textarea {
            min-height: 100px;
            resize: vertical;
        }

        .modal-actions {
            text-align: right;
        }

        .modal-actions button {
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .cancel-btn {
            background: #f8f9fa;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        .submit-btn {
            background: #426DDC;
            color: white;
            border: none;
        }

        /* FAQ Section Styles */
        .faq-section {
            flex: 1;
            padding: 40px 5%;
            background-color: #f8f9fa;
        }

        .faq-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .faq-header h1 {
            color: #2c3e50;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .faq-header p {
            color: #666;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .faq-list {
            display: grid;
            gap: 20px;
        }

        .faq-item {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        .faq-question h3 {
            color: #2c3e50;
            font-size: 18px;
            margin: 0;
            flex: 1;
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .faq-answer p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            padding: 20px 0;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-item.active .faq-question {
            background: #426DDC;
        }

        .faq-item.active .faq-question h3 {
            color: white;
        }

        .toggle-icon {
            color: #426DDC;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .faq-item.active .toggle-icon {
            transform: rotate(180deg);
            color: white;
        }



        /* Responsive Styles */
        @media (max-width: 992px) {
            .faq-section {
                padding: 30px 4%;
            }

            .faq-header h1 {
                font-size: 28px;
            }

            .container {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .footer-content:last-child {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .faq-section {
                padding: 20px 15px;
            }

            .faq-header h1 {
                font-size: 24px;
                margin-bottom: 15px;
            }

            .faq-header p {
                font-size: 14px;
            }

            .faq-question h3 {
                font-size: 16px;
            }

            .faq-answer p {
                font-size: 14px;
            }

            .container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-content {
                text-align: center;
                padding: 0;
            }

            .footer-content h3 {
                text-align: center;
            }

            .footer-content p {
                text-align: center;
            }

            .map-container {
                height: 250px;
                margin: 0 auto;
                max-width: 500px;
            }

            .social-icons {
                justify-content: center;
            }

            .bottom-bar {
                margin-top: 30px;
            }

            .search-container2 {
                width: 95%;
                height: 45px;
                padding: 10px;
            }

            .search-container2 input {
                font-size: 14px;
                padding: 8px;
            }

            .search-container2 button {
                padding: 8px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .faq-section {
                padding: 15px 10px;
            }

            .faq-header h1 {
                font-size: 22px;
            }

            .faq-question {
                padding: 15px;
            }

            .faq-question h3 {
                font-size: 15px;
            }

            .faq-answer {
                padding: 0 15px;
            }

            .faq-answer p {
                font-size: 13px;
                padding: 15px 0;
            }

            .container {
                padding: 0 15px;
            }

            .footer-content h3 {
                font-size: 16px;
            }

            .footer-content p {
                font-size: 13px;
            }

            .social-icons a {
                width: 35px;
                height: 35px;
            }

            .social-icons i {
                font-size: 18px;
            }

            .bottom-bar p {
                font-size: 12px;
            }

            .search-container2 {
                width: 100%;
                height: 40px;
                padding: 8px;
            }

            .search-container2 input {
                font-size: 13px;
                padding: 6px;
            }

            .search-container2 button {
                padding: 6px;
                font-size: 15px;
            }
        }


        }
	</style>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
</head>

<body>
    @include('layouts.admin-navbar')

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
            
            <div class="faq-actions" style="margin-bottom: 20px; text-align: right;">
                <button onclick="document.getElementById('addFaqModal').style.display='block'" class="btn btn-primary" style="background: #426DDC; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                    <i class="fas fa-plus"></i> Add New FAQ
                </button>
            </div>

            <div id="faq-list">
                @foreach($faqs as $faq)
                <div class="faq-item" data-id="{{ $faq->id }}">
                    <div class="faq-question">
                        <span>{{ $faq->question }}</span>
                        <div class="faq-actions">
                            <i class="fas fa-edit" title="Edit" onclick="editFaq({{ $faq->id }})"></i>
                            <i class="fas fa-trash" title="Delete" onclick="deleteFaq({{ $faq->id }})"></i>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <span>{!! nl2br(e($faq->answer)) !!}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
  </section>
</center>
         


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script type="text/javascript">


        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            answer.classList.toggle('show');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function(e) {
                    if (e.target.closest('.fa-edit') || e.target.closest('.fa-trash')) {
                        return;
                    }
                    const faqItem = question.closest('.faq-item');
                    const answer = question.nextElementSibling;
                    const chevronIcon = question.querySelector('.fa-chevron-down');

                    // If already open, close it
                    if (faqItem.classList.contains('active')) {
                        faqItem.classList.remove('active');
                        answer.classList.remove('show');
                        chevronIcon?.classList.remove('active');
                        return;
                    }

                    // Close all others
                    document.querySelectorAll('.faq-item.active').forEach(activeItem => {
                        activeItem.classList.remove('active');
                        activeItem.querySelector('.faq-answer').classList.remove('show');
                        activeItem.querySelector('.fa-chevron-down')?.classList.remove('active');
                    });

                    // Open this one
                    faqItem.classList.add('active');
                    answer.classList.add('show');
                    chevronIcon?.classList.add('active');
                });
            });

            // Initialize Sortable for FAQ reordering
            new Sortable(document.getElementById('faq-list'), {
                animation: 150,
                onEnd: async function(evt) {
                    const items = Array.from(evt.to.children).map((item, index) => ({
                        id: item.dataset.id,
                        order: index
                    }));
                    
                    try {
                        const response = await fetch('{{ route("admin.faqs.reorder") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({ faqs: items })
                        });
                        
                        if (!response.ok) {
                            throw new Error('Failed to reorder FAQs');
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        alert('Failed to reorder FAQs');
                    }
                }
            });
        });

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('addFaqModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        // Function to edit FAQ
        function editFaq(id) {
            const faqItem = document.querySelector(`.faq-item[data-id="${id}"]`);
            const questionElement = faqItem.querySelector('.faq-question span');
            const answerElement = faqItem.querySelector('.faq-answer span');
            const editButton = faqItem.querySelector('.fa-edit');
            
            // Disable edit button
            editButton.style.pointerEvents = 'none';
            editButton.style.opacity = '0.5';
            
            questionElement.contentEditable = true;
            answerElement.contentEditable = true;
            
            questionElement.focus();
            
            // Add save button
            const saveButton = document.createElement('button');
            saveButton.textContent = 'Save';
            saveButton.style.marginLeft = '10px';
            saveButton.style.padding = '5px 10px';
            saveButton.style.backgroundColor = '#426DDC';
            saveButton.style.color = 'white';
            saveButton.style.border = 'none';
            saveButton.style.borderRadius = '4px';
            saveButton.style.cursor = 'pointer';
            
            const actionsDiv = faqItem.querySelector('.faq-actions');
            actionsDiv.appendChild(saveButton);
            
            saveButton.onclick = async () => {
                try {
                    const response = await fetch(`/admin/faqs/${id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            question: questionElement.textContent.trim(),
                            answer: answerElement.textContent.trim()
                        })
                    });
                    
                    if (!response.ok) {
                        throw new Error('Failed to update FAQ');
                    }
                    
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.style.position = 'fixed';
                    successMessage.style.top = '20px';
                    successMessage.style.right = '20px';
                    successMessage.style.padding = '10px 20px';
                    successMessage.style.backgroundColor = '#4CAF50';
                    successMessage.style.color = 'white';
                    successMessage.style.borderRadius = '4px';
                    successMessage.style.zIndex = '1000';
                    successMessage.textContent = 'FAQ updated successfully';
                    document.body.appendChild(successMessage);
                    
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);

                    // Reset edit state
                    questionElement.contentEditable = false;
                    answerElement.contentEditable = false;
                    editButton.style.pointerEvents = 'auto';
                    editButton.style.opacity = '1';
                    saveButton.remove();
                } catch (error) {
                    console.error('Error:', error);
                    alert('Failed to update FAQ');
                }
            };
        }

        // Function to delete FAQ
        async function deleteFaq(id) {
            if (!confirm('Are you sure you want to delete this FAQ?')) {
                return;
            }
            
            try {
                const response = await fetch(`/admin/faqs/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                if (response.ok) {
                    const faqItem = document.querySelector(`.faq-item[data-id="${id}"]`);
                    faqItem.remove();
                    
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.style.position = 'fixed';
                    successMessage.style.top = '20px';
                    successMessage.style.right = '20px';
                    successMessage.style.padding = '10px 20px';
                    successMessage.style.backgroundColor = '#4CAF50';
                    successMessage.style.color = 'white';
                    successMessage.style.borderRadius = '4px';
                    successMessage.style.zIndex = '1000';
                    successMessage.textContent = 'FAQ deleted successfully';
                    document.body.appendChild(successMessage);
                    
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);
                } else {
                    throw new Error('Failed to delete FAQ');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to delete FAQ');
            }
        }
</script>

<div id="addFaqModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add New FAQ</h3>
            <button class="close-modal" onclick="document.getElementById('addFaqModal').style.display='none'">&times;</button>
        </div>
        <form action="{{ route('admin.faqs.store') }}" method="POST" class="modal-form">
            @csrf
            <div>
                <label>Question:</label>
                <input type="text" name="question" required>
            </div>
            <div>
                <label>Answer:</label>
                <textarea name="answer" required></textarea>
            </div>
            <div class="modal-actions">
                <button type="button" class="cancel-btn" onclick="document.getElementById('addFaqModal').style.display='none'">Cancel</button>
                <button type="submit" class="submit-btn">Add FAQ</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')
</body>
</html>