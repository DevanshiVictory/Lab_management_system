$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');

// Role-based redirection
$routes->get('/dashboard/admin', 'AdminController::index');
$routes->get('/dashboard/doctor', 'DoctorController::index');
$routes->get('/dashboard', '\App\Controllers\PatientDashboard::index');
