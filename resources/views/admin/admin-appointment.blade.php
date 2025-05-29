<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="/storage/assets/favicon.ico">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> Appointment Page - Admin View </title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

  <style>

    body {
      font-family: 'Poppins';
      margin-bottom: 60px;
      overflow-x: hidden;
      height: 100%;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        .p-8 {

height: 100vh;

}
        html, body {
        overflow-x: hidden;
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('appointment_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        }

        section {
        background: transparent;
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 100vw;
        overflow-x: hidden;
        }

        .overflow-x-auto {
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
        }

        .max-h-\[600px\] {
            width: 100%;
            max-width: 100%;
        }

        table {
            width: 100%;
            max-width: 100%;
        }

        /* Zoom-in screen orientation layout */
        @media(max-width: 1000px) {
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(90, 110, 130, 0.3), rgba(90, 110, 130, 0.3)),
              url('appointment_bg.jpg') no-repeat center center fixed;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center center;
        }

        section {
        background: transparent;
        min-height: 100vh;
        padding: 2rem;
        position: relative;
        z-index: 1;
        }

    

        html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        }

       main {
       flex: 1;
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
      margin-left: 15px;
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
    

  </style>
</head>

<body>
    @include('layouts.admin-navbar')

    <main class="p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Scheduled Appointments</h2>
        <div class="overflow-x-auto">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if($appointments->isEmpty())
                <div class="text-center py-8 bg-white shadow rounded-lg">
                    <p class="text-gray-500 text-lg">No appointments have been made yet.</p>
                </div>
            @else
                <div class="max-h-[600px] overflow-y-auto relative">
                    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">Reference #</th>
                                <th class="py-3 px-4 text-left">User Name</th>
                                <th class="py-3 px-4 text-left">Appointment Type</th>
                                <th class="py-3 px-4 text-left">Document Type</th>
                                <th class="py-3 px-4 text-left">Date & Time</th>
                                <th class="py-3 px-4 text-left">Status</th>
                                <th class="py-3 px-4 text-left">Action</th>
                                <th class="py-3 px-4 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="appointmentTable">
                            @foreach($appointments as $appointment)
                            <tr class="border-b">
                                <td class="py-3 px-4">{{ $appointment->reference_number }}</td>
                                <td class="py-3 px-4">{{ $appointment->user->first_name }} {{ $appointment->user->last_name }}</td>
                                <td class="py-3 px-4">{{ $appointment->appointment_type }}</td>
                                <td class="py-3 px-4">{{ $appointment->document_type }}</td>
                                <td class="py-3 px-4">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('Y-m-d') }} {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</td>
                                <td class="py-3 px-4">
                                    @php
                                        $statusColors = [
                                            'Pending' => 'bg-yellow-300 text-yellow-900',
                                            'Approved' => 'bg-green-300 text-green-900',
                                            'Completed' => 'bg-blue-300 text-blue-900',
                                            'Cancelled' => 'bg-red-300 text-red-900',
                                            'Declined' => 'bg-red-300 text-red-900'
                                        ];
                                        $colorClass = $statusColors[$appointment->status] ?? 'bg-yellow-300 text-yellow-900';
                                    @endphp
                                    <span class="{{ $colorClass }} px-2 py-1 rounded text-sm">{{ $appointment->status }}</span>
                                </td>
                                <td class="py-3 px-4">
                                    @if($appointment->status === 'Pending')
                                        <form action="{{ route('admin.appointments.status', $appointment->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="handleStatusChange(this, {{ $appointment->id }})" class="border rounded px-2 py-1 text-sm">
                                                <option value="Pending" {{ $appointment->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Approved" {{ $appointment->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                <option value="Completed" {{ $appointment->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="Cancelled" {{ $appointment->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                <option value="Declined" {{ $appointment->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                            </select>
                                            <input type="hidden" name="cancellation_reason" id="cancellation_reason_{{ $appointment->id }}">
                                        </form>
                                    @else
                                        <select disabled class="border rounded px-2 py-1 text-sm bg-gray-100">
                                            <option selected>{{ $appointment->status }}</option>
                                        </select>
                                    @endif
                                </td>
                                <td class="py-3 px-4">
                                    <button onclick="showDeleteModal({{ $appointment->id }})" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8" class="py-3 px-4 text-right">
                                    @if(Auth::guard('employee')->user()->username === 'admin1' || Auth::guard('employee')->user()->username === 'Admin1')
                                        <button onclick="showLogsModal()" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors duration-200 flex items-center space-x-2 inline-flex">
                                            <i class="fas fa-history"></i>
                                            <span>View All Logs</span>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </main>

    <!-- Cancellation Modal -->
    <div id="cancellationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-red-700">Cancel Appointment</h2>
            <form id="cancellationForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="Cancelled">
                <div class="mb-4">
                    <label for="cancellation_reason" class="block text-gray-700 text-sm font-bold mb-2">Reason for Cancellation:</label>
                    <textarea name="cancellation_reason" id="cancellation_reason" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500" required></textarea>
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeCancellationModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Confirm Cancellation</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-red-700">Delete Appointment</h2>
            <p class="text-gray-600 mb-4 text-center">Are you sure you want to delete this appointment? This action cannot be undone.</p>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete Appointment</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Logs Modal -->
    <div id="logsModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl w-full">
            <h2 class="text-xl font-bold mb-4 text-center text-blue-700">Appointment Activity Logs</h2>
            <div class="max-h-[500px] overflow-y-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="py-2 px-4 text-left">Date & Time</th>
                            <th class="py-2 px-4 text-left">Employee</th>
                            <th class="py-2 px-4 text-left">Action</th>
                            <th class="py-2 px-4 text-left">Status Change</th>
                            <th class="py-2 px-4 text-left">Reason</th>
                        </tr>
                    </thead>
                    <tbody id="logsTableBody">
                        <!-- Logs will be populated here -->
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end mt-4">
                <button onclick="closeLogsModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Close</button>
            </div>
        </div>
    </div>

@include('layouts.footer')
  

  <script>
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




    function handleStatusChange(select, appointmentId) {
        if (select.value === 'Cancelled') {
            // Show cancellation modal
            const modal = document.getElementById('cancellationModal');
            const form = document.getElementById('cancellationForm');
            form.action = `/admin/appointments/${appointmentId}/status`;
            modal.classList.remove('hidden');
            // Prevent form submission until reason is provided
            select.value = 'Pending';
        } else {
            // Submit form for other status changes
            select.form.submit();
        }
    }

    function closeCancellationModal() {
        const modal = document.getElementById('cancellationModal');
        modal.classList.add('hidden');
        document.getElementById('cancellation_reason').value = '';
    }

    function showDeleteModal(appointmentId) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        form.action = `{{ url('admin/appointments') }}/${appointmentId}`;
        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    function showLogsModal() {
        const logsModal = document.getElementById('logsModal');
        logsModal.classList.remove('hidden');
        
        // Fetch all logs
        fetch('{{ route("admin.appointments.all-logs") }}', {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
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
            .then(data => {
                if (data.success) {
                    const logsTableBody = document.getElementById('logsTableBody');
                    logsTableBody.innerHTML = '';
                    
                    data.logs.forEach(log => {
                        const row = document.createElement('tr');
                        row.className = 'border-b hover:bg-gray-50';
                        
                        const date = new Date(log.created_at).toLocaleString();
                        
                        // Convert action to user-friendly text
                        let actionText = log.action;
                        switch(log.action) {
                            case 'status_update':
                                actionText = 'Updated Status';
                                break;
                            case 'delete':
                                actionText = 'Deleted Appointment';
                                break;
                            case 'create':
                                actionText = 'Created Appointment';
                                break;
                        }
                        
                        // Convert status changes to user-friendly text
                        let statusChange = '';
                        if (log.action === 'status_update') {
                            const oldStatus = log.old_status ? log.old_status.charAt(0).toUpperCase() + log.old_status.slice(1) : 'Unknown';
                            const newStatus = log.new_status ? log.new_status.charAt(0).toUpperCase() + log.new_status.slice(1) : 'Unknown';
                            statusChange = `Changed from ${oldStatus} to ${newStatus}`;
                        } else if (log.action === 'delete') {
                            statusChange = 'Appointment was removed';
                        } else if (log.action === 'create') {
                            statusChange = 'New appointment was created';
                        }
                        
                        row.innerHTML = `
                            <td class="py-2 px-4">${date}</td>
                            <td class="py-2 px-4">${log.employee ? log.employee.first_name + ' ' + log.employee.last_name : 'Unknown'}</td>
                            <td class="py-2 px-4">${actionText}</td>
                            <td class="py-2 px-4">${statusChange}</td>
                            <td class="py-2 px-4">${log.reason || 'No reason provided'}</td>
                        `;
                        
                        logsTableBody.appendChild(row);
                    });
                }
            })
            .catch(error => {
                console.error('Error fetching logs:', error);
                alert('Failed to load logs. Please try again.');
            });
    }

    function closeLogsModal() {
        const logsModal = document.getElementById('logsModal');
        logsModal.classList.add('hidden');
    }
  </script>
</body>
</html>
