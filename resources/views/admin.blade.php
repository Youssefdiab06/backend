<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style22.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Small styling for delete button */
        .delete-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #c0392b;
        }
        .success-message {
            color: green;
            margin-bottom: 10px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Medica Care</h2>
        <a href="/index6">🏠 Home</a>
        <a href="/services">🛠 Services</a>
        <a href="/awareness">💡 Awareness</a>
        <a href="/health" class="active">⚕ Health Tips</a>
        <a href="/policies">📑 Policies</a>
        <a href="/user">👥 User Management</a>
    </div>

    <!-- Main -->
    <div class="main">
        <h1>Medica Care Dashboard</h1>

        <!-- Stats -->
        <div class="stats">
            <div class="stat-card">
                <div class="stat-card-title">Users</div>
                <div class="stat-card-value">{{ $usersCount ?? 0 }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-card-title">Doctors</div>
                <div class="stat-card-value">{{ $doctorsCount ?? 0 }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-card-title">Appointments</div>
                <div class="stat-card-value">{{ $appointmentsCount ?? 0 }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-card-title">Pending</div>
                <div class="stat-card-value">{{ $pendingCount ?? 0 }}</div>
            </div>
        </div>

        <!-- Chart -->
        <div class="chart-container">
            <h3>Appointments Overview</h3>
            <canvas id="appointmentsChart"></canvas>
        </div>

        <!-- Upcoming Appointments -->
        <div class="table-container">
            <h3>Upcoming Appointments</h3>
            <table>
                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Service/Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->name ?? 'N/A' }}</td>
                            <td>{{ $appointment->service ?? 'N/A' }}</td>
                            <td>{{ $appointment->date ?? 'N/A' }}</td>
                            <td>{{ $appointment->time ?? 'N/A' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="text-align:center;">No upcoming appointments</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Contact Messages Section -->
        <div class="table-container" style="margin-top: 40px;">
            <h3>Contact Messages</h3>

            @if(session('success'))
                <p class="success-message">{{ session('success') }}</p>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <form action="{{ route('admin.deleteMessage', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-btn">Delete</button>
</form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align:center;">No contact messages</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Chart Script -->
    <script>
        const ctx = document.getElementById('appointmentsChart');
        const appointmentsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($chartLabels ?? []),
                data: @json($charData ?? []),
                datasets: [{
                    label: 'Appointments per Day',
                    data: @json($chartData ?? []),
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>

    <script src="{{ asset('js/script1.js') }}"></script>
</body>
</html>