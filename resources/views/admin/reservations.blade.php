<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations Admin - Spice Magic Karachi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #c62828;
            --primary-dark: #8e0000;
            --secondary: #ff9800;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .admin-navbar {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .stat-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .table-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        .table th {
            background-color: var(--primary);
            color: white;
        }
        
        .badge-pending { background: #ffc107; color: #000; }
        .badge-confirmed { background: #28a745; color: white; }
        .badge-cancelled { background: #dc3545; color: white; }
        
        .action-btn {
            border: none;
            background: none;
            padding: 5px;
            border-radius: 5px;
        }
        
        .action-btn:hover {
            background: rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-dark admin-navbar">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold">
                <i class="fas fa-pepper-hot me-2"></i>Spice Magic - Reservations Admin
            </span>
            <div class="d-flex align-items-center">
                <a href="/" class="btn btn-outline-light btn-sm me-2">
                    <i class="fas fa-external-link-alt me-1"></i>View Site
                </a>
                <a href="/admin/reservations" class="btn btn-light btn-sm">
                    <i class="fas fa-sync-alt me-1"></i>Refresh
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="container-fluid py-4">
        <!-- Stats -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h3 class="mb-1">{{ $reservations->count() }}</h3>
                        <p class="text-muted mb-0">Total Reservations</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h3 class="mb-1">{{ $reservations->where('status', 'confirmed')->count() }}</h3>
                        <p class="text-muted mb-0">Confirmed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h3 class="mb-1">{{ $reservations->where('status', 'pending')->count() }}</h3>
                        <p class="text-muted mb-0">Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stat-card h-100">
                    <div class="card-body">
                        <h3 class="mb-1">{{ $reservations->where('status', 'cancelled')->count() }}</h3>
                        <p class="text-muted mb-0">Cancelled</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Reservations Table -->
        <div class="table-container">
            @if($reservations->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Date & Time</th>
                            <th>Guests</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                            <td><strong>#{{ $reservation->id }}</strong></td>
                            <td>
                                <strong>{{ $reservation->name }}</strong><br>
                                <small class="text-muted">{{ $reservation->created_at->format('M d, h:i A') }}</small>
                            </td>
                            <td>
                                <div>{{ $reservation->email }}</div>
                                <div>{{ $reservation->phone }}</div>
                            </td>
                            <td>
                                <div>{{ $reservation->date->format('M d, Y') }}</div>
                                <div>{{ $reservation->time }}</div>
                            </td>
                            <td class="text-center">{{ $reservation->guests }}</td>
                            <td>
                                <span class="badge badge-{{ $reservation->status }}">
                                    {{ ucfirst($reservation->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    @if($reservation->status != 'confirmed')
                                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}" style="display: inline;">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="confirmed">
                                        <button type="submit" class="action-btn text-success" title="Confirm">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                    @endif
                                    
                                    @if($reservation->status != 'cancelled')
                                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}" style="display: inline;">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="cancelled">
                                        <button type="submit" class="action-btn text-danger" title="Cancel">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                    @endif
                                    
                                    <form method="POST" action="{{ route('admin.reservations.destroy', $reservation->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn text-danger" title="Delete" 
                                                onclick="return confirm('Delete this reservation?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="text-center py-5">
                <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                <h4>No Reservations Yet</h4>
                <p class="mb-4">When customers book tables, they will appear here.</p>
                <a href="/reservation" class="btn btn-primary">
                    <i class="fas fa-external-link-alt me-2"></i>View Reservation Page
                </a>
                <a href="/add-sample-reservation" class="btn btn-outline-secondary ms-2">
                    <i class="fas fa-plus me-2"></i>Add Test Data
                </a>
            </div>
            @endif
        </div>
        
        <!-- Debug Info (remove in production) -->
        @if(env('APP_DEBUG', false))
        <div class="mt-4 p-3 bg-light rounded">
            <small class="text-muted">
                <strong>Debug Info:</strong> 
                Showing {{ $reservations->count() }} reservations. 
                Database connected: {{ DB::connection()->getPdo() ? 'Yes' : 'No' }}
            </small>
        </div>
        @endif
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-refresh every 30 seconds
        setInterval(() => location.reload(), 30000);
        
        // Show success messages
        @if(session('success'))
        alert("{{ session('success') }}");
        @endif
    </script>
</body>
</html>