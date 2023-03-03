<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentsController,
App\Http\Controllers\PatientController,
App\Http\Controllers\ScheduleController,
App\Http\Controllers\DoctorController,
App\Http\Controllers\NurseController,
App\Http\Controllers\medical_devicesController,
App\Http\Controllers\MedicalServiceController,
App\Http\Controllers\PaymentController,
App\Http\Controllers\ScheduleServicesController,
App\Http\Controllers\PaymentServicesController,
App\Http\Controllers\PaymentMedicinesController

;

use App\Http\Controllers\call_centerController;
use App\Http\Controllers\OutgoingCallController,
App\Http\Controllers\IncomingCallController,
App\Http\Controllers\CallAgentController,
App\Http\Controllers\ContactGroupController,
App\Http\Controllers\ContactController,
App\Http\Controllers\AssignmentController

;

use App\Http\Controllers\inventoryController;


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
    return view('welcome');
});


Route::get('/calender',[scheduleController::class,('calender')])->name('schedule.calender');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/call_center', [App\Http\Controllers\call_centerController::class, 'index'])->name('call_center.index');
Route::get('/inventory', [App\Http\Controllers\inventoryController::class, 'index'])->name('inventory.index');
Route::get('/hr', [App\Http\Controllers\hrController::class, 'index'])->name('hr.index');
Route::get('/accounting', [App\Http\Controllers\accountingController::class, 'index'])->name('accounting.index');
Route::get('/tree', [App\Http\Controllers\accountingController::class, 'tree'])->name('accounting.tree');



Route::get('/appointments', [App\Http\Controllers\appointmentsController::class, 'index'])->name('appointments.index');
Route::resource('patient',patientController::class);
Route::get('/addpatient',[patientController::class,('create')])->name('patient.create');
Route::get('/searchpatient',[patientController::class,('search')])->name('patient.search');

// Route::get('/editpatient',[patientController::class,('edit')])->name('patient.edit');
Route::get('/allpatient',[patientController::class,('index')])->name('patient.index');
Route::post('/storepatient',[patientController::class,('store')])->name('patient.store');
Route::get('/allpatient2',[patientController::class,('index2')])->name('patient.index2');
// Route::delete('/{id}/deletepatient/',[patientController::class,('delete')])->name('patient.delete');


Route::resource('schedule',scheduleController::class);
Route::get('/addschedule',[scheduleController::class,('create')])->name('schedule.create');
// Route::get('/editschedule',[scheduleController::class,('edit')])->name('schedule.edit');
Route::get('/allschedule',[scheduleController::class,('index')])->name('schedule.index');
Route::get('/allschedule2',[scheduleController::class,('index2')])->name('schedule.index2');
Route::get('/searchschedule',[scheduleController::class,('search')])->name('schedule.search');

Route::post('/schedulesave',[scheduleController::class,('save')])->name('schedules.save');
Route::patch('scheduleupd/update/{id}', [scheduleController::class, 'updatesched'])->name('schedule.updatesched');
Route::delete('scheduledel/del/{id}', [scheduleController::class, 'del'])->name('schedule.scheduledel');
// Route::get('checkdate/{startdate}/{enddate}', [scheduleController::class, 'check'])->name('schedule.check');
Route::get('checkdate/', [scheduleController::class, 'check'])->name('schedule.check');



Route::resource('payment_service',PaymentServicesController::class);
Route::get('/addpayment_service/{id}',[PaymentServicesController::class,('create')])->name('paymentservice.create');


Route::resource('payment_medicine',PaymentMedicinesController::class);
Route::get('/addpayment_medicine/{id}',[PaymentMedicinesController::class,('create')])->name('paymentmedicine.create');



Route::resource('schedule_service',ScheduleServicesController::class);
Route::get('/addschedule_service/{id}',[ScheduleServicesController::class,('create')])->name('scheduleservice.create');

// Route::get('/addschedule',[scheduleController::class,('create')])->name('schedule.create');
// // Route::get('/editschedule',[scheduleController::class,('edit')])->name('schedule.edit');
// Route::get('/allschedule',[scheduleController::class,('index')])->name('schedule.index');

// Route::get('/allschedule2',[scheduleController::class,('index2')])->name('schedule.index2');
// Route::get('/searchschedule',[scheduleController::class,('search')])->name('schedule.search');



Route::get('/adddoctor',[doctorController::class,('create')])->name('doctor.create');
// Route::get('/editdoctor',[doctorController::class,('edit')])->name('doctor.edit');
Route::get('/alldoctor',[doctorController::class,('index')])->name('doctor.index');
Route::get('/alldoctor2',[doctorController::class,('index2')])->name('doctor.index2');
Route::get('/searchdoctor',[doctorController::class,('search')])->name('doctor.search');
Route::resource('doctor',doctorController::class);




Route::resource('nurse',nurseController::class);
Route::get('/addnurse',[nurseController::class,('create')])->name('nurse.create');
// Route::get('/editnurse',[nurseController::class,('edit')])->name('nurse.edit');
Route::get('/allnurse',[nurseController::class,('index')])->name('nurse.index');
Route::get('/searchnurse',[nurseController::class,('search')])->name('nurse.search');
Route::get('/allnurse2',[nurseController::class,('index2')])->name('nurse.index2');



Route::resource('medical_devices',medical_devicesController::class);
Route::get('/addMedicalDevices',[medical_devicesController::class,('create')])->name('medical_device.create');
Route::get('/allMedicalDevices',[medical_devicesController::class,('index')])->name('medical_device.index');
Route::get('/allMedicalDevices2',[medical_devicesController::class,('index2')])->name('medical_device.index2');
Route::get('/searchMedicalDevices',[medical_devicesController::class,('search')])->name('medical_device.search');
// Route::get('/editmedicaldevice',[medical_devicesController::class,('edit')])->name('medical_device.edit');



Route::resource('medical_service',MedicalServiceController::class);
Route::get('/addMedicalServices',[MedicalServiceController::class,('create')])->name('MedicalService.create');
Route::get('/editMedicalServices',[MedicalServiceController::class,('edit')])->name('MedicalService.edit');
Route::get('/allMedicalServices',[MedicalServiceController::class,('index')])->name('MedicalService.index');
Route::get('/allMedicalServices2',[MedicalServiceController::class,('index2')])->name('MedicalService.index2');
Route::get('/searchmedicalservice',[MedicalServiceController::class,('search')])->name('medical_service.search');
// Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');




Route::resource('payments',PaymentController::class);
Route::get('/addPayments',[PaymentController::class,('create')])->name('Payments.create');
// Route::get('/editPayments',[PaymentController::class,('edit')])->name('Payments.edit');
Route::get('/allPayments',[PaymentController::class,('index')])->name('Payments.index');
Route::get('/allPayments2',[PaymentController::class,('index2')])->name('payments.index2');
Route::get('/searchPayments',[PaymentController::class,('search')])->name('payments.search');


//=================================================================END OF APPOINTMENTS====================================
Route::get('/addoutgoing_call',[OutgoingCallController::class,('create')])->name('outgoing_call.create');
// Route::get('/editdoctor',[doctorController::class,('edit')])->name('doctor.edit');
Route::get('/alloutgoing_call',[OutgoingCallController::class,('index')])->name('outgoing_call.index');
Route::get('/alloutgoing_call2',[OutgoingCallController::class,('index2')])->name('outgoing_call.index2');
Route::get('/searchoutgoing_call',[OutgoingCallController::class,('search')])->name('outgoing_call.search');
Route::resource('outgoing_call',OutgoingCallController::class);
Route::get('/calender2',[OutgoingCallController::class,('calender')])->name('outgoing_call.calender');
Route::get('/followupout',[OutgoingCallController::class,('followup_out')])->name('outgoing_call.followup_out');
Route::get('/autocomplete',[OutgoingCallController::class,('autocomplete')])->name('outgoing_call.autocomplete');



Route::get('/addincoming_call',[IncomingCallController::class,('create')])->name('incoming_call.create');
// Route::get('/editdoctor',[doctorController::class,('edit')])->name('doctor.edit');
Route::get('/allincoming_call',[IncomingCallController::class,('index')])->name('incoming_call.index');
Route::get('/allincoming_call2',[IncomingCallController::class,('index2')])->name('incoming_call.index2');
Route::get('/searchincoming_call',[IncomingCallController::class,('search')])->name('incoming_call.search');
Route::resource('incoming_call',IncomingCallController::class);
Route::get('/calender22',[IncomingCallController::class,('calender')])->name('incoming_call.calender');
Route::get('/followupin',[IncomingCallController::class,('followup_in')])->name('incoming_call.followup_in');



Route::get('/addcontact',[ContactController::class,('create')])->name('contact.create');
// Route::get('/editdoctor',[doctorController::class,('edit')])->name('doctor.edit');
Route::get('/allcontact',[ContactController::class,('index')])->name('contact.index');
Route::get('/allcontact2',[ContactController::class,('index2')])->name('contact.index2');
Route::get('/searchcontact',[ContactController::class,('search')])->name('contact.search');
Route::resource('contact',ContactController::class);


Route::get('/addcallagent',[CallAgentController::class,('create')])->name('callagent.create');
// Route::get('/editdoctor',[doctorController::class,('edit')])->name('doctor.edit');
Route::get('/allcallagent',[CallAgentController::class,('index')])->name('callagent.index');
Route::get('/allcallagent2',[CallAgentController::class,('index2')])->name('callagent.index2');
Route::get('/searchcallagent',[CallAgentController::class,('search')])->name('callagent.search');
Route::resource('call_agent',CallAgentController::class);

Route::get('/addcontactgroup',[ContactGroupController::class,('create')])->name('contact_group.create');
// Route::get('/editcontactgroup/{id}',[ContactGroupController::class,('edit')])->name('contact-group.edit');
Route::get('/allcontactgroup',[ContactGroupController::class,('index')])->name('contact_group.index');
Route::get('/allcontactgroup',[ContactGroupController::class,('index2')])->name('contact_group.index2');
Route::get('/searchcontactgroup',[ContactGroupController::class,('search')])->name('contact_group.search');
Route::resource('contact_group',ContactGroupController::class);


Route::get('/addassignment',[AssignmentController::class,('create')])->name('assignment.create');
Route::resource('assignment',AssignmentController::class);

// Route::get('/editdoctor',[doctorController::class,('edit')])->name('doctor.edit');
// Route::get('/allincoming_call',[IncomingCallController::class,('index')])->name('incoming_call.index');
// Route::get('/allincoming_call2',[IncomingCallController::class,('index2')])->name('incoming_call.index2');
// Route::get('/searchincoming_call',[IncomingCallController::class,('search')])->name('incoming_call.search');
// Route::resource('incoming_call',IncomingCallController::class);
// Route::get('/calender22',[IncomingCallController::class,('calender')])->name('incoming_call.calender');
// Route::get('/followupin',[IncomingCallController::class,('followup_in')])->name('incoming_call.followup_in');