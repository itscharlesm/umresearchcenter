<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\LinkageController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\CommunityEngagementController;
use App\Http\Controllers\StudentOrganizationController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\AcademicProgramController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\InternationalAffairsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', [MainController::class, 'main']);

// Login
Route::post('/login', [UserController::class, 'validateUser']);
Route::get('/logout', [UserController::class, 'logout']);

// Admin Page
Route::get('/admin/home', [AdminController::class, 'home']);
Route::get('/admin/users', [AdminController::class, 'users']);
Route::post('/admin/users/update/role/{usr_id}', [AdminController::class, 'update_role']);
Route::post('admin/users/update/password/{usr_id}', [AdminController::class, 'reset_password']);
Route::get('/admin/messages', [AdminController::class, 'messages']);
Route::post('/admin/messages/concern/update/{con_id}', [AdminController::class, 'messages_update']);
Route::get('/admin/carousel', [AdminController::class, 'carousel']);
Route::post('/admin/carousel/update/{cour_id}', [AdminController::class, 'carousel_update']);

// User
Route::post('admin/register-user', [UserController::class, 'registerUser']);
Route::post('user/update', [UserController::class, 'update']);
Route::post('user/update-password', [UserController::class, 'updatePassword2']);

//Announcements
Route::post('announcement/save', [AnnouncementController::class, 'save']);
Route::get('announcement/delete/{ann_uuid}', [AnnouncementController::class, 'delete']);

// About
Route::get('/about/about-us', [AboutController::class, 'about_us']);
Route::get('/about/our-team', [AboutController::class, 'meet_our_team']);
Route::get('/about/contact-us', [AboutController::class, 'contact_us']);
Route::post('/about/contact-us/message', [AboutController::class, 'contact_us_message']);

// About Admin
Route::get('/admin/about/rpc', [AboutController::class, 'admin_rpc']);
Route::post('/admin/about/rpc/update/{rpc_id}', [AboutController::class, 'admin_rpc_update']);
Route::get('/admin/about/vmgo', [AboutController::class, 'admin_vmgo']);
Route::post('/admin/about/vmgo/update/{vmgo_id}', [AboutController::class, 'admin_vmgo_update']);
Route::get('/admin/about/agenda-priority', [AboutController::class, 'admin_agenda_priority']);
Route::post('/admin/about/agenda-priority/update/{agpr_id}', [AboutController::class, 'admin_agenda_priority_update']);
Route::get('/admin/about/program-funding', [AboutController::class, 'admin_program_funding']);
Route::post('/admin/about/program-funding/update/{prfu_id}', [AboutController::class, 'admin_program_funding_update']);

// Institute
Route::get('/institute/popular', [InstituteController::class, 'popular']);
Route::get('/institute/emerging', [InstituteController::class, 'emerging']);
Route::get('/institute/biodiversity', [InstituteController::class, 'biodiversity']);
Route::get('/institute/economy', [InstituteController::class, 'economy']);
Route::get('/institute/social', [InstituteController::class, 'social']);

// Institute Admin
Route::get('/admin/institute/popular', [InstituteController::class, 'admin_popular']);
Route::post('/admin/institute/popular/update/{pop_id}', [InstituteController::class, 'admin_popular_update']);
Route::get('/admin/institute/emerging', [InstituteController::class, 'admin_emerging']);
Route::post('/admin/institute/emerging/update/{eme_id}', [InstituteController::class, 'admin_emerging_update']);
Route::get('/admin/institute/biodiversity', [InstituteController::class, 'admin_biodiversity']);
Route::post('/admin/institute/biodiversity/update/{bio_id}', [InstituteController::class, 'admin_biodiversity_update']);
Route::get('/admin/institute/economy', [InstituteController::class, 'admin_economy']);
Route::post('/admin/institute/economy/update/{eco_id}', [InstituteController::class, 'admin_economy_update']);
Route::get('/admin/institute/social', [InstituteController::class, 'admin_social']);
Route::post('/admin/institute/social/update/{soc_id}', [InstituteController::class, 'admin_social_update']);

// Center
Route::get('/center/nanotechnology', [CenterController::class, 'nanotechnology']);
Route::get('/center/coleoptera', [CenterController::class, 'coleoptera']);
Route::get('/center/policy', [CenterController::class, 'policy']);

// Admin Center
Route::get('/admin/center/nanotechnology', [CenterController::class, 'admin_nanotechnology']);
Route::post('/admin/center/nanotechnology/update/{nan_id}', [CenterController::class, 'admin_nanotechnology_update']);
Route::get('/admin/center/coleoptera', [CenterController::class, 'admin_coleoptera']);
Route::post('/admin/center/coleoptera/update/{col_id}', [CenterController::class, 'admin_coleoptera_update']);
Route::get('/admin/center/policy', [CenterController::class, 'admin_policy']);
Route::post('/admin/center/policy/update/{col_id}', [CenterController::class, 'admin_policy_update']);

// Journal
Route::get('/journal/multidisciplinary', [JournalController::class, 'multidisciplinary']);
Route::get('/journal/emerging', [JournalController::class, 'emerging']);
Route::get('/journal/economy', [JournalController::class, 'economy']);
Route::get('/journal/tropical', [JournalController::class, 'tropical']);
Route::get('/journal/social', [JournalController::class, 'social']);
Route::get('/journal/college-journals', [JournalController::class, 'journals']);

// Admin Journal
Route::get('/admin/journal/multidisciplinary', [JournalController::class, 'admin_multidisciplinary']);
Route::post('/admin/journal/multidisciplinary/update/{mul_id}', [JournalController::class, 'admin_multidisciplinary_update']);
Route::get('/admin/journal/emerging', [JournalController::class, 'admin_emerging']);
Route::post('/admin/journal/emerging/update/{eme_id}', [JournalController::class, 'admin_emerging_update']);
Route::get('/admin/journal/economy', [JournalController::class, 'admin_economy']);
Route::post('/admin/journal/economy/update/{eme_id}', [JournalController::class, 'admin_economy_update']);

// Linkage
Route::get('/linkages', [LinkageController::class, 'linkages']);

// Admin Linkages
Route::get('/admin/linkages', [LinkageController::class, 'admin_linkages']);
Route::post('/admin/linkages/update/local/{link_id}', [LinkageController::class, 'admin_linkages_local']);
Route::post('/admin/linkages/update/international/{link_id}', [LinkageController::class, 'admin_linkages_international']);

// Download
Route::get('/downloads', [DownloadController::class, 'downloads']);

// Special Laravel Commands
Route::group(['prefix' => 'laravel'], function () {
    Route::get('/cache:clear', function () {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });
    Route::get('/view:clear', function () {
        Artisan::call('view:clear');
        return "View is cleared";
    });
    Route::get('/route:clear', function () {
        Artisan::call('route:clear');
        return "Route is cleared";
    });
    Route::get('/config:clear', function () {
        Artisan::call('config:clear');
        return "Config is cleared";
    });
    Route::get('/config:cache', function () {
        Artisan::call('config:cache');
        return "Config is cached";
    });
});

// //about
// Route::get('/about/school/vmc', [AboutController::class, 'vmc'])->name('about.cmc');
// Route::get('/about/history', [AboutController::class, 'history'])->name('history.cmc');
// Route::get('/about/president', [AboutController::class, 'cmcPresident'])->name('president.cmc');
// Route::get('/about/school/outcomes', [AboutController::class, 'learningOutcomes'])->name('outcomes.cmc');
// Route::get('/about/schoolorg', [AboutController::class, 'schoolOrgStructure'])->name('org.cmc');
// Route::get('/about/boardofdirectors', [AboutController::class, 'boardOfDirectors'])->name('board.cmc');
// Route::get('/about/cmc', [AboutController::class, 'abouts'])->name('about.about.cmc');

// //admission
// Route::get('/admission/about-admission', [AdmissionController::class, 'about'])->name('admission.about.cmc');
// Route::get('/admission/enrollment/graduate-school', [AdmissionController::class, 'gradschool'])->name('enrollment.grad.cmc');
// Route::get('/admission/enrollment/senior-high-school', [AdmissionController::class, 'shs'])->name('enrollment.shs.cmc');
// Route::get('/admission/enrollment/undergraduate', [AdmissionController::class, 'undergrad'])->name('enrollment.undergrad.cmc');
// Route::get('/admission/enrollment-updates', [AdmissionController::class, 'updates'])->name('enrollment.updates.cmc');

// //researchs
// Route::get('/research/about-the-research-publication-office', [ResearchController::class, 'about'])->name('research.about-research-publication.cmc');
// Route::get('/research/research-publication-updates', [ResearchController::class, 'research_publication'])->name('research.research-publication-updates.cmc');
// Route::get('/research/compendium-of-abstracts', [ResearchController::class, 'compendium_abstract'])->name('research.compedium-abstract.cmc');
// Route::get('/research/international-journal', [ResearchController::class, 'international_journal'])->name('research.international-journal.cmc');
// Route::get('/research/akademia/faculty-research', [ResearchController::class, 'faculty_research'])->name('research.akademia-faculty-research.cmc');
// Route::get('/research/akademia/student-research', [ResearchController::class, 'student_research'])->name('research.akademia-student-research.cmc');
// Route::get('/research/journal/criminal-justice', [ResearchController::class, 'criminal_justice'])->name('research.journal-criminal-studies.cmc');
// Route::get('/research/journal/business-management', [ResearchController::class, 'business_management'])->name('research.journal-business-management.cmc');

// //community engagement
// Route::get('/community/about-the-center-for-social-action', [CommunityEngagementController::class, 'about_school_action'])->name('community.school-action.cmc');
// Route::get('/community/center-for-social-action-updates', [CommunityEngagementController::class, 'social_action_updates'])->name('community.social-action-updates.cmc');
// Route::get('/community/community-extension-programs', [CommunityEngagementController::class, 'extension_program'])->name('community.extension-program.cmc');
// Route::get('/community/projects-implemented', [CommunityEngagementController::class, 'project_implemented'])->name('community.project-implemented.cmc');
// Route::get('/community/partners', [CommunityEngagementController::class, 'partners'])->name('community.partners.cmc');
// Route::get('/community/publications', [CommunityEngagementController::class, 'publication'])->name('community.publication.cmc');

// //cmclife
// Route::get('/cmcian-life/office-of-student-affairs', [StudentOrganizationController::class, 'osa'])->name('cmcian-life.osa.cmc');

// Route::group(['middleware' => ['checkUserSession']], function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');

//     //user management
//     Route::get('admin/user-management', [UserManagementController::class, 'user_management'])->name('admin.user-manage');
//     Route::post('admin/user-management/create', [UserManagementController::class, 'registerUser'])->name('admin.user-manage.create');

//     //contents
//     Route::get('admin/content-management', [ContentController::class, 'index'])->name('admin.content');
//     Route::post('admin/content-management/create', [ContentController::class, 'create_content'])->name('admin.content.create');

//     //research
//     Route::get('admin/publication/researches', [ResearchController::class, 'index'])->name('admin.research');
//     Route::get('admin/publication/publishers', [ResearchController::class, 'publishers'])->name('admin.publishers');
//     Route::post('admin/publication/publishers/create', [ResearchController::class, 'create_publisher'])->name('admin.publishers.create');
//     Route::post('admin/publication/publishers/update-status/{id}/{status}', [ResearchController::class, 'change_status'])->name('admin.publishers.update-status');
//     Route::post('admin/publication/publishers/update-publisher/{id}', [ResearchController::class, 'update'])->name('admin.publishers.update');
//     Route::post('admin/publication/publish-research', [ResearchController::class, 'publish_research'])->name('admin.research.publish');

//     //admission
//     Route::get('admin/admissions', [AdmissionController::class, 'index'])->name('admin.admission');
//     Route::post('admin/admissions/create', [AdmissionController::class, 'create'])->name('admin.admission.publish');

//     //student affairs
//     Route::get('admin/student-affairs', [StudentOrganizationController::class, 'index'])->name('admin.osas');
//     Route::get('admin/student-affairs/student-org', [StudentOrganizationController::class, 'student_org'])->name('admin.stud-org');
//     Route::post('admin/create-content', [StudentOrganizationController::class, 'create_osas_content'])->name('admin.osas.create');
//     Route::post('admin/create-organization', [StudentOrganizationController::class, 'create_org_content'])->name('admin.org.create');

//     //guidance
//     Route::get('admin/guidance-service', [ContentController::class, 'guidance_index'])->name('admin.guidance');
//     Route::post('admin/content-service/create-guidance', [ContentController::class, 'create_guidance_content'])->name('admin.guidance.create');

//     //health service
//     Route::get('admin/health-service', [ContentController::class, 'health_index'])->name('admin.health');
//     Route::post('admin/content/create-health', [ContentController::class, 'create_health_content'])->name('admin.health.create');

//     //facilities servicel
//     Route::get('admin/facilities-service', [ContentController::class, 'facilities_index'])->name('admin.facility');
//     Route::post('admin/content/create-facility', [ContentController::class, 'create_facility_content'])->name('admin.facility.create');

//     //library service
//     Route::get('admin/library-service', [ContentController::class, 'library_index'])->name('admin.library');
//     Route::post('admin/content/create-library', [ContentController::class, 'create_library_content'])->name('admin.library.create');

//     //homepage service
//     Route::get('admin/homepage-service', [ContentController::class, 'homepage_index'])->name('admin.homepage');

//     //scholarshipt
//     Route::get('admin/scholarship-service', [ContentController::class, 'scholarship_index'])->name('admin.scholarship');
//     Route::post('admin/content/create-scholarship', [ContentController::class, 'create_scholarship_content'])->name('admin.scholarship-create');

//     //internalization
//     Route::get('admin/international-affairs', [ContentController::class, 'cmc_cial'])->name('admin.cial');
//     Route::post('admin/create-cial-content', [ContentController::class, 'create_cial_content'])->name('admin.create-cial-content');

//     //alumni affairs
//     Route::get('admin/alumni-affairs', [ContentController::class, 'alumni_affairs'])->name('admin.alumni-affairs');
//     Route::post('admin/create-alumni-content', [ContentController::class, 'create_alumni_content'])->name('admin.create-alumni-content');

//     //colleges program
//     Route::get('admin/academic-programs/colleges', [AcademicProgramController::class, 'colleges'])->name('admin.academic.colleges');
//     Route::post('admin/create-college', [AcademicProgramController::class, 'create_colleges'])->name('admin.colleges.create-college');

// });

// Route::get('/admission/cmc-admission/requirements', [AdmissionController::class, 'admission_index'])->name('admission.about-admission');
// Route::get('/admission/cmc-admission/guidelines', [AdmissionController::class, 'admission_guidelines'])->name('admission.about-guidelines');
// Route::get('/admission/cmc-admission/grading', [AdmissionController::class, 'admission_grading'])->name('admission.about-grading');
// Route::get('/admission/cmc-admission/enrollment', [AdmissionController::class, 'admission_online_enrollment'])->name('admission.about-enrollment');

// Route::get('/services/guidance-services', [ServicesController::class, 'guidance_service'])->name('services.guidance-service');
// Route::get('/services/health-services', [ServicesController::class, 'health_service'])->name('services.health-service');
// Route::get('/services/library-services', [ServicesController::class, 'library_service'])->name('services.library-service');
// Route::get('/services/scholarship-services', [ServicesController::class, 'scholarship_service'])->name('services.scholarship-service');
// Route::get('/services/student-affairs', [StudentOrganizationController::class, 'osa'])->name('services.student-affairs');
// Route::get('/services/cmc-cial', [ServicesController::class, 'cmc_cial'])->name('services.cmc-cial');

// Route::get('/campus-tour', [ServicesController::class, 'campus_tour'])->name('services.campus-tour');
