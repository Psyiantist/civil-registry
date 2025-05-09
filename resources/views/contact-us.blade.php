          <div class="contact-info-box">
            <h3> <i class="fas fa-thumbtack" aria-hidden="true"></i> Contact Information</h3>
            <p><strong>Address:</strong> {{ $contact->address ?? '2/F Left Wing Executive Building City Government Complex, Maysilo Circle, Plainview, Mandaluyong City' }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone ?? '(02) 8533-28-21' }}</p>
            <p><strong>Email:</strong> {{ $contact->email ?? 'city.registrar@mandaluyong.gov.ph' }}</p>
            <p><strong>Office Hours:</strong> {{ $contact->office_hours ?? 'Monday - Friday, 8:00 AM to 5:00 PM' }}</p>
          </div> 