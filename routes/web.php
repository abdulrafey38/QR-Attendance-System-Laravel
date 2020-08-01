<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check() || Auth::guard('instructor')->check()) {
        return redirect('/home');
    }
    return view('login');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/Contact', 'ContactController@create');
Route::get('/test', 'StudentController@test');
Route::view('/test1', 'Emails.report');

Route::post('/Contact', [
    'uses' => 'ContactController@store',
    'as' => 'Contact.store'
]);



Route::get('facultyteachcourse', 'FacultyController@facultyteachcourse');

Route::post('/user/login', 'UserLoginController@login');

Route::post('/register', 'Auth\RegisterController@create');

Route::get('/ManageCourses', 'HomeController@ManageCourses');
Route::get('/Course/{id}', 'HomeController@Course');
Route::get('/FacultyList', 'HomeController@FacultyList');

Route::get('/CRM/{id}', 'HomeController@CRM');
Route::get('/CA/{id}', 'HomeController@CA');
Route::get('/index', 'HomeController@index');
Route::get('/forgotpassword', 'HomeController@ForgotPassword');


Route::get('/UpdateCourseRelatedMaterial/{id}', 'HomeController@UpdateCourseRelatedMaterial');
Route::get('/crm/delete/{id}', 'HomeController@DeleteCourseRelatedMaterial');
Route::get('/UpdateCourseAnnouncement', 'HomeController@UpdateCourseAnnouncement');
Route::get('/DeleteCourseAnnouncement/{id}', 'HomeController@DeleteCourseAnnouncement');
Route::get('/UpdateCourse', 'HomeController@UpdateCourse');
Route::get('/Program/{id}', 'HomeController@Program');
Route::get('/FacultyMember/{id}', 'HomeController@FacultyMember');

Route::post('add_CA/{id}', 'HomeController@add_CA');
Route::post('add_CRM/{id}', 'HomeController@add_CRM');
Route::delete('/destroy/{CRM_ID}', 'HomeController@destroy')->name('CRM.destroy');
Route::delete('/destroy1/{CA_ID}', 'HomeController@destroy1')->name('CA.destroy');
Route::post('/editinfo', 'HomeController@editinfo');
Route::post('edit_CRM/{id}', 'HomeController@edit_CRM');
Route::post('update_CA/{id}', 'HomeController@caUpdate');
Route::get('edit_CA/{id}', 'HomeController@edit_CA');
Route::get('add_CA/view/{id}', 'HomeController@edit_CA');
Route::get('/UpdateCourseRelatedMaterial1', 'HomeController@UpdateCourseRelatedMaterial1');
Route::get('/crm/edit/{id}', 'HomeController@editCrmView');


Route::post('edit_CA/{id}', 'HomeController@edit_CA');
Route::get('/UpdateCourseAnnouncement1/{id}', 'HomeController@UpdateCourseAnnouncement1');
Route::post('/changePassword', 'HomeController@changePassword');

Route::get('/EditBasicInfo', 'HomeController@EditBasicInfo');
/// admin routes
///
Route::get('/admin', 'AdminController@loginView');
Route::post('login/form', 'AdminController@login');



Route::get("/ul", function() { return Redirect::to("login.php"); });




Route::middleware('Admin')->group(function () {

    Route::get('/admin/dashboard', 'AdminController@dashboardView');
    Route::get('/admin/logout', 'AdminController@logOut');
    Route::get('/faculty/view', 'AdminController@facultyView');
    Route::get('admin/student/view', 'AdminController@studentView');
    Route::get('/course/view', 'AdminController@courseView');
    Route::get('/section/view', 'AdminController@sectionView');
    Route::get('/video/view', 'AdminController@videoView');
    Route::get('/admin/profile', 'AdminController@profileView');
    Route::get('/contact/view', 'AdminController@contactView');
    Route::get('/video/delete/{id}', 'AdminController@videoDelete');
    Route::post('/video/upload', 'AdminController@storeVideo');
    Route::post('/admin/password/change', 'AdminController@passwordChane');
    Route::post('/admin/profile/update', 'AdminController@profileUpdate');
    Route::post('/faculty/store', 'AdminController@facultyStore');
    Route::post('/student/store/{id?}', 'AdminController@studentStore');
    Route::post('/course/store', 'AdminController@courseStore');
    Route::post('/section/store', 'AdminController@sectionStore');
    Route::post('/program/store', 'AdminController@programStore');
    Route::post('/semester/store', 'AdminController@semesterstore');
    Route::post('/faculty/edit/{id}', 'AdminController@facultyUpdate');
    Route::get('edit/faculty/{id}', 'AdminController@facultyEdit');
    Route::get('edit/student/{id}', 'AdminController@studentEdit');
    Route::get('delete/student/{id}', 'AdminController@studentDelete');
    Route::get('delete/faculty/{id}', 'AdminController@faccultyDelete');
    Route::get('delete/request/{id}', 'AdminController@requestDelete');
    Route::get('delete/course/{id}', 'AdminController@courseDelete');
    Route::get('delete/sectioncourse/{id}', 'AdminController@sectioncourseDelete');
    Route::get('delete/section/{id}', 'AdminController@sectionDelete');
    Route::get('delete/program/{id}', 'AdminController@programDelete');
    Route::get('delete/semester/{id}', 'AdminController@semesterDelete');
    Route::get('view/section', 'AdminController@viewSection');
    Route::get('view/program', 'AdminController@viewProgram');
    Route::get('view/semester', 'AdminController@viewSemester');
    Route::post('/add/section', 'AdminController@storeSection');



});

Route::middleware('Faculty')->group(function () {

    Route::get('/faculty/dashboard', 'FacultyController@dashboardView');
    Route::get('faculty/logout', 'UserLoginController@facultyLogout');
    Route::get('/FacultyPortal', 'HomeController@FacultyPortal');
    Route::get('/view-attendance', 'FacultyController@viewAttendanceStudent');
    Route::get('/mark-attendance', 'FacultyController@viewAttendanceMark');
    Route::get('/attendance/update/{id}', 'FacultyController@attendanceUpdate');
    Route::post('mark-student-attendance/{section}/{course}', 'FacultyController@storeAttendance');


});
Route::get('/student-attendance-show/{student}/{course}/{section}', 'FacultyController@studentAttendanceShow');
Route::get('student-check-attendance/{course}', 'FacultyController@attendanceShowToStudent');


// other routes
Route::post('/contact_us/form', 'ContactUsController@store');
Route::get('/password/change', 'HomeController@passwordChange');
Route::post('/password/update', 'HomeController@passwordUpdate');

//student routes
Route::get('/manage/course', 'StudentController@manageCourse');
Route::post('/student/course/upload', 'StudentController@courseStore');
Route::get('/student/course/delete/{id}', 'StudentController@courseDelete');
Route::get('/student/logout', 'StudentController@logout');
Route::get('/StudentPortal', 'StudentController@StudentPortal');
Route::get('/clear', function () {
    \App\Artisan::call('cache:clear');
});
Route::get('/clear2', function () {
    \App\Artisan::call('config:cache');
});