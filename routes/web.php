<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\LinkageController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\CommunityEngagementController;
use App\Http\Controllers\StudentOrganizationController;
use App\Http\Controllers\Admin\AdminController;
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

//admin route
Route::post('/login', [AdminController::class, 'validateUser']);
Route::get('/logout', [AdminController::class, 'logout']);

// About
Route::get('/about/about-us', [AboutController::class, 'about_us']);
Route::get('/about/our-team', [AboutController::class, 'meet_our_team']);
Route::get('/about/contact-us', [AboutController::class, 'contact_us']);

// Institute
Route::get('/institute/popular', [InstituteController::class, 'popular']);
Route::get('/institute/emerging', [InstituteController::class, 'emerging']);
Route::get('/institute/biodiversity', [InstituteController::class, 'biodiversity']);
Route::get('/institute/economy', [InstituteController::class, 'economy']);
Route::get('/institute/social', [InstituteController::class, 'social']);

// Center
Route::get('/center/nanotechnology', [CenterController::class, 'nanotechnology']);
Route::get('/center/coleoptera', [CenterController::class, 'coleoptera']);

// Linkage
Route::get('/linkages', [LinkageController::class, 'linkages']);

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
Route::get('/about/school/vmc', [AboutController::class, 'vmc'])->name('about.cmc');
Route::get('/about/history', [AboutController::class, 'history'])->name('history.cmc');
Route::get('/about/president', [AboutController::class, 'cmcPresident'])->name('president.cmc');
Route::get('/about/school/outcomes', [AboutController::class, 'learningOutcomes'])->name('outcomes.cmc');
Route::get('/about/schoolorg', [AboutController::class, 'schoolOrgStructure'])->name('org.cmc');
Route::get('/about/boardofdirectors', [AboutController::class, 'boardOfDirectors'])->name('board.cmc');
Route::get('/about/cmc', [AboutController::class, 'abouts'])->name('about.about.cmc');

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
