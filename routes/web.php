<?php

use Illuminate\Support\Facades\Route;
//dashboard/website controller
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;

//website controller
use App\Http\Controllers\Website\WebsiteController;



//home controller 


//about controller 
use App\Http\Controllers\Website\AboutAboutController;
use App\Http\Controllers\Website\AbouAboutwoController;
use App\Http\Controllers\Website\AboutAttorenyController;
use App\Http\Controllers\Website\AboutBannerController;
use App\Http\Controllers\Website\AboutHistoryController;
use App\Http\Controllers\Website\AboutourAgencyController;
use App\Http\Controllers\Website\AboutourMoreinfoController;
use App\Http\Controllers\Website\AboutTeamController;






//blog controller
use App\Http\Controllers\Website\BlogAboutController;
use App\Http\Controllers\Website\BlogAskqsnController;
use App\Http\Controllers\Website\BlogBannerController;
use App\Http\Controllers\Website\CareerBannerController;
use App\Http\Controllers\Website\CareerDiscriptionController;
use App\Http\Controllers\Website\LetestBlogProjectController;
use App\Http\Controllers\Website\OurBigProjectController;
use App\Http\Controllers\Website\RecentProjectBlogController;
use App\Http\Controllers\Website\UpcomingEventcontroller;
use App\Http\Controllers\Website\UpdateBlogController;

//contact controller
use App\Http\Controllers\Website\ContactBannerController;
use App\Http\Controllers\Website\ContactContactformController;
use App\Http\Controllers\Website\ContactDeteailsController;
use App\Http\Controllers\Website\ContactGetrivewController;
use App\Http\Controllers\Website\ContactServicesController;

//gellary 
use App\Http\Controllers\Website\GellaryBannerController;
use App\Http\Controllers\Website\GellaryImageController;

//home
use App\Http\Controllers\Website\HomeAboutsTwoController;
use App\Http\Controllers\Website\HomeAboutcontroller;
use App\Http\Controllers\Website\HomeBannerSliderController;
use App\Http\Controllers\Website\HomeCompanyfoundedController;
use App\Http\Controllers\Website\HomeNewsController;
use App\Http\Controllers\Website\HomeOurMostchooseController;
use App\Http\Controllers\Website\HomeOurTeamController;
use App\Http\Controllers\Website\HomePageTestimonial;
use App\Http\Controllers\Website\HomeServicesController;
use App\Http\Controllers\Website\HomeWhyChooseController;

//immigration 
use App\Http\Controllers\Website\aboutimmigration;
use App\Http\Controllers\Website\ImmigrationBannerController;
use App\Http\Controllers\Website\ImmigrationCountryController;
use App\Http\Controllers\Website\ImmigrationPracticeController;
use App\Http\Controllers\Website\ImmigrationServiceController;
use App\Http\Controllers\Website\ImmigrationStudyController;
use App\Http\Controllers\Website\ImmigrationSuccessController;

//legal about 
use App\Http\Controllers\Website\LegalAboutController;
use App\Http\Controllers\Website\LegalBannerController;
use App\Http\Controllers\Website\LegalPracticeareaController;
use App\Http\Controllers\Website\LegalServiceController;

//main menu controller
use App\Http\Controllers\Website\MainMenuController;

//Oue team -- common 
use App\Http\Controllers\Website\OurallAchivmentController;
use App\Http\Controllers\Website\OurAllTeamController;
use App\Http\Controllers\Website\OurClientsQuesionController;
use App\Http\Controllers\Website\OurTeamBannerController;

//study aboroad 
use App\Http\Controllers\Website\StudyabroadBannerController;
use App\Http\Controllers\Website\studyabroadCareerController;
use App\Http\Controllers\Website\StudyabroadCourseController;
use App\Http\Controllers\Website\StudyabroadDegreeController;
use App\Http\Controllers\Website\StudyabroadFinenceController;
use App\Http\Controllers\Website\StudyabroadOfferController;
use App\Http\Controllers\Website\StudyabroadPrecticeareaController;
use App\Http\Controllers\Website\StudyabroadTestimonialController;





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




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard/website', function () {
//     return view('dashboard/website');
// })->middleware(['auth'])->name('dashboard/website');

//website route 
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/service', [WebsiteController::class, 'service']);
Route::get('/ourteam', [WebsiteController::class, 'ourteam']);
Route::get('/stydyAbroad', [WebsiteController::class, 'stydyAbroad']);
Route::get('/immigration', [WebsiteController::class, 'immigration']);
Route::get('/gellary', [WebsiteController::class, 'gellary']);
Route::get('/blog', [WebsiteController::class, 'blog']);
Route::get('/contact', [WebsiteController::class, 'contact']);
Route::get('/legal', [WebsiteController::class, 'legal']);
Route::get('/freeConsutation', [WebsiteController::class, 'freeConsutation']);
Route::get('/agent', [WebsiteController::class, 'index']);
Route::get('/career', [WebsiteController::class, 'index']);
Route::get('/internship', [WebsiteController::class, 'index']);
Route::get('/privecy', [WebsiteController::class, 'index']);
Route::get('/condition', [WebsiteController::class, 'index']);
Route::get('/faq', [WebsiteController::class, 'index']);
Route::get('/singlepage', [WebsiteController::class, 'index']);

//admin route start
Route::get('dashboard/website', [AdminController::class, 'index']);

Route::get('dashboard/user', [UserController::class, 'index']);
Route::get('dashboard/user/add', [UserController::class, 'add']);
Route::get('dashboard/user/edit', [UserController::class, 'edit']);
Route::get('dashboard/user/view/{id}', [UserController::class, 'view']);
Route::post('dashboard/user/submit', [UserController::class, 'insert']);
Route::post('dashboard/user/update', [UserController::class, 'update']);
Route::post('dashboard/user/softdelete', [UserController::class, 'softdelete']);
Route::post('dashboard/user/restore', [UserController::class, 'restore']);
Route::post('dashboard/user/delete', [UserController::class, 'delete']);

Route::get('dashboard/banner', [BannerController::class, 'index']);
Route::get('dashboard/banner/add', [BannerController::class, 'add']);
Route::get('dashboard/banner/edit/{slug}', [BannerController::class, 'edit']);
Route::get('dashboard/banner/view/{slug}', [BannerController::class, 'view']);
Route::post('dashboard/banner/submit', [BannerController::class, 'insert']);
Route::post('dashboard/banner/update', [BannerController::class, 'update']);
Route::post('dashboard/banner/softdelete', [BannerController::class, 'softdelete']);
Route::post('dashboard/banner/restore', [BannerController::class, 'restore']);
Route::post('dashboard/banner/delete', [BannerController::class, 'delete']);




//backend website route 

//about page 
Route::get('dashboard/website/aboutAbouts', [AboutAboutController::class, 'index']);
Route::get('dashboard/website/aboutAbouts/add', [AboutAboutController::class, 'add']);
Route::get('dashboard/website/aboutAbouts/edit/{slug}', [AboutAboutController::class, 'edit']);
Route::get('dashboard/website/aboutAbouts/view/{slug}', [AboutAboutController::class, 'view']);
Route::post('dashboard/website/aboutAbouts/submit', [AboutAboutController::class, 'insert']);
Route::post('dashboard/website/aboutAbouts/update', [AboutAboutController::class, 'update']);
Route::post('dashboard/website/aboutAbouts/softdelete', [AboutAboutController::class, 'softdelete']);
Route::post('dashboard/website/aboutAbouts/restore', [AboutAboutController::class, 'restore']);
Route::post('dashboard/website/aboutAbouts/delete', [AboutAboutController::class, 'delete']);

Route::get('dashboard/website/AboutAbout2', [AbouAboutwoController::class, 'index']);
Route::get('dashboard/website/AboutAbout2/add', [AbouAboutwoController::class, 'add']);
Route::get('dashboard/website/AboutAbout2/edit/{slug}', [AbouAboutwoController::class, 'edit']);
Route::get('dashboard/website/AboutAbout2/view/{slug}', [AbouAboutwoController::class, 'view']);
Route::post('dashboard/website/AboutAbout2/submit', [AbouAboutwoController::class, 'insert']);
Route::post('dashboard/website/AboutAbout2/update', [AbouAboutwoController::class, 'update']);
Route::post('dashboard/website/AboutAbout2/softdelete', [AbouAboutwoController::class, 'softdelete']);
Route::post('dashboard/website/AboutAbout2/restore', [AbouAboutwoController::class, 'restore']);
Route::post('dashboard/website/AboutAbout2/delete', [AbouAboutwoController::class, 'delete']);

Route::get('dashboard/website/Aboutattorneys', [AboutAttorenyController::class, 'index']);
Route::get('dashboard/website/Aboutattorneys/add', [AboutAttorenyController::class, 'add']);
Route::get('dashboard/website/Aboutattorneys/edit/{slug}', [AboutAttorenyController::class, 'edit']);
Route::get('dashboard/website/Aboutattorneys/view/{slug}', [AboutAttorenyController::class, 'view']);
Route::post('dashboard/website/Aboutattorneys/submit', [AboutAttorenyController::class, 'insert']);
Route::post('dashboard/website/Aboutattorneys/update', [AboutAttorenyController::class, 'update']);
Route::post('dashboard/website/Aboutattorneys/softdelete', [AboutAttorenyController::class, 'softdelete']);
Route::post('dashboard/website/Aboutattorneys/restore', [AboutAttorenyController::class, 'restore']);
Route::post('dashboard/website/Aboutattorneys/delete', [AboutAttorenyController::class, 'delete']);

Route::get('dashboard/website/AboutBanner', [AboutBannerController::class, 'index']);
Route::get('dashboard/website/AboutBanner/add', [AboutBannerController::class, 'add']);
Route::get('dashboard/website/AboutBanner/edit/{slug}', [AboutBannerController::class, 'edit']);
Route::get('dashboard/website/AboutBanner/view/{slug}', [AboutBannerController::class, 'view']);
Route::post('dashboard/website/AboutBanner/submit', [AboutBannerController::class, 'insert']);
Route::post('dashboard/website/AboutBanner/update', [AboutBannerController::class, 'update']);
Route::post('dashboard/website/AboutBanner/softdelete', [AboutBannerController::class, 'softdelete']);
Route::post('dashboard/website/AboutBanner/restore', [AboutBannerController::class, 'restore']);
Route::post('dashboard/website/AboutBanner/delete', [AboutBannerController::class, 'delete']);

Route::get('dashboard/website/AboutHistory', [AboutHistoryController::class, 'index']);
Route::get('dashboard/website/AboutHistory/add', [AboutHistoryController::class, 'add']);
Route::get('dashboard/website/AboutHistory/edit/{slug}', [AboutHistoryController::class, 'edit']);
Route::get('dashboard/website/AboutHistory/view/{slug}', [AboutHistoryController::class, 'view']);
Route::post('dashboard/website/AboutHistory/submit', [AboutHistoryController::class, 'insert']);
Route::post('dashboard/website/AboutHistory/update', [AboutHistoryController::class, 'update']);
Route::post('dashboard/website/AboutHistory/softdelete', [AboutHistoryController::class, 'softdelete']);
Route::post('dashboard/website/AboutHistory/restore', [AboutHistoryController::class, 'restore']);
Route::post('dashboard/website/AboutHistory/delete', [AboutHistoryController::class, 'delete']);

Route::get('dashboard/website/AboutourAgencys', [AboutourAgencyController::class, 'index']);
Route::get('dashboard/website/AboutourAgencys/add', [AboutourAgencyController::class, 'add']);
Route::get('dashboard/website/AboutourAgencys/edit/{slug}', [AboutourAgencyController::class, 'edit']);
Route::get('dashboard/website/AboutourAgencys/view/{slug}', [AboutourAgencyController::class, 'view']);
Route::post('dashboard/website/AboutourAgencys/submit', [AboutourAgencyController::class, 'insert']);
Route::post('dashboard/website/AboutourAgencys/update', [AboutourAgencyController::class, 'update']);
Route::post('dashboard/website/AboutourAgencys/softdelete', [AboutourAgencyController::class, 'softdelete']);
Route::post('dashboard/website/AboutourAgencys/restore', [AboutourAgencyController::class, 'restore']);
Route::post('dashboard/website/AboutourAgencys/delete', [AboutourAgencyController::class, 'delete']);


Route::get('dashboard/website/AboutourmoreInfo', [AboutourMoreinfoController::class, 'index']);
Route::get('dashboard/website/AboutourmoreInfo/add', [AboutourMoreinfoController::class, 'add']);
Route::get('dashboard/website/AboutourmoreInfo/edit/{slug}', [AboutourMoreinfoController::class, 'edit']);
Route::get('dashboard/website/AboutourmoreInfo/view/{slug}', [AboutourMoreinfoController::class, 'view']);
Route::post('dashboard/website/AboutourmoreInfo/submit', [AboutourMoreinfoController::class, 'insert']);
Route::post('dashboard/website/AboutourmoreInfo/update', [AboutourMoreinfoController::class, 'update']);
Route::post('dashboard/website/AboutourmoreInfo/softdelete', [AboutourMoreinfoController::class, 'softdelete']);
Route::post('dashboard/website/AboutourmoreInfo/restore', [AboutourMoreinfoController::class, 'restore']);
Route::post('dashboard/website/AboutourmoreInfo/delete', [AboutourMoreinfoController::class, 'delete']);

Route::get('dashboard/website/AboutTeams', [AboutTeamController::class, 'index']);
Route::get('dashboard/website/AboutTeams/add', [AboutTeamController::class, 'add']);
Route::get('dashboard/website/AboutTeams/edit/{slug}', [AboutTeamController::class, 'edit']);
Route::get('dashboard/website/AboutTeams/view/{slug}', [AboutTeamController::class, 'view']);
Route::post('dashboard/website/AboutTeams/submit', [AboutTeamController::class, 'insert']);
Route::post('dashboard/website/AboutTeams/update', [AboutTeamController::class, 'update']);
Route::post('dashboard/website/AboutTeams/softdelete', [AboutTeamController::class, 'softdelete']);
Route::post('dashboard/website/AboutTeams/restore', [AboutTeamController::class, 'restore']);
Route::post('dashboard/website/AboutTeams/delete', [AboutTeamController::class, 'delete']);

// blogroute 
Route::get('dashboard/website/blogabout', [BlogAboutController::class, 'index']);
Route::get('dashboard/website/blogabout/add', [BlogAboutController::class, 'add']);
Route::get('dashboard/website/blogabout/edit/{slug}', [BlogAboutController::class, 'edit']);
Route::get('dashboard/website/blogabout/view/{slug}', [BlogAboutController::class, 'view']);
Route::post('dashboard/website/blogabout/submit', [BlogAboutController::class, 'insert']);
Route::post('dashboard/website/blogabout/update', [BlogAboutController::class, 'update']);
Route::post('dashboard/website/blogabout/softdelete', [BlogAboutController::class, 'softdelete']);
Route::post('dashboard/website/blogabout/restore', [BlogAboutController::class, 'restore']);
Route::post('dashboard/website/blogabout/delete', [BlogAboutController::class, 'delete']);

Route::get('dashboard/website/freeaskqsn', [BlogAskqsnController::class, 'index']);
Route::get('dashboard/website/freeaskqsn/add', [BlogAskqsnController::class, 'add']);
Route::get('dashboard/website/freeaskqsn/edit/{slug}', [BlogAskqsnController::class, 'edit']);
Route::get('dashboard/website/freeaskqsn/view/{slug}', [BlogAskqsnController::class, 'view']);
Route::post('dashboard/website/freeaskqsn/submit', [BlogAskqsnController::class, 'insert']);
Route::post('dashboard/website/freeaskqsn/update', [BlogAskqsnController::class, 'update']);
Route::post('dashboard/website/freeaskqsn/softdelete', [BlogAskqsnController::class, 'softdelete']);
Route::post('dashboard/website/freeaskqsn/restore', [BlogAskqsnController::class, 'restore']);
Route::post('dashboard/website/freeaskqsn/delete', [BlogAskqsnController::class, 'delete']);

Route::get('dashboard/website/blogbanner', [BlogBannerController::class, 'index']);
Route::get('dashboard/website/blogbanner/add', [BlogBannerController::class, 'add']);
Route::get('dashboard/website/blogbanner/edit/{slug}', [BlogBannerController::class, 'edit']);
Route::get('dashboard/website/blogbanner/view/{slug}', [BlogBannerController::class, 'view']);
Route::post('dashboard/website/blogbanner/submit', [BlogBannerController::class, 'insert']);
Route::post('dashboard/website/blogbanner/update', [BlogBannerController::class, 'update']);
Route::post('dashboard/website/blogbanner/softdelete', [BlogBannerController::class, 'softdelete']);
Route::post('dashboard/website/blogbanner/restore', [BlogBannerController::class, 'restore']);
Route::post('dashboard/website/blogbanner/delete', [BlogBannerController::class, 'delete']);

Route::get('dashboard/website/CareerBanner', [CareerBannerController::class, 'index']);
Route::get('dashboard/website/CareerBanner/add', [CareerBannerController::class, 'add']);
Route::get('dashboard/website/CareerBanner/edit/{slug}', [CareerBannerController::class, 'edit']);
Route::get('dashboard/website/CareerBanner/view/{slug}', [CareerBannerController::class, 'view']);
Route::post('dashboard/website/CareerBanner/submit', [CareerBannerController::class, 'insert']);
Route::post('dashboard/website/CareerBanner/update', [CareerBannerController::class, 'update']);
Route::post('dashboard/website/CareerBanner/softdelete', [CareerBannerController::class, 'softdelete']);
Route::post('dashboard/website/CareerBanner/restore', [CareerBannerController::class, 'restore']);
Route::post('dashboard/website/CareerBanner/delete', [CareerBannerController::class, 'delete']);

Route::get('dashboard/website/CareerDiscription', [CareerDiscriptionController::class, 'index']);
Route::get('dashboard/website/CareerDiscription/add', [CareerDiscriptionController::class, 'add']);
Route::get('dashboard/website/CareerDiscription/edit/{slug}', [CareerDiscriptionController::class, 'edit']);
Route::get('dashboard/website/CareerDiscription/view/{slug}', [CareerDiscriptionController::class, 'view']);
Route::post('dashboard/website/CareerDiscription/submit', [CareerDiscriptionController::class, 'insert']);
Route::post('dashboard/website/CareerDiscription/update', [CareerDiscriptionController::class, 'update']);
Route::post('dashboard/website/CareerDiscription/softdelete', [CareerDiscriptionController::class, 'softdelete']);
Route::post('dashboard/website/CareerDiscription/restore', [CareerDiscriptionController::class, 'restore']);
Route::post('dashboard/website/CareerDiscription/delete', [CareerDiscriptionController::class, 'delete']);

Route::get('dashboard/website/ContactBanners', [ContactBannerController::class, 'index']);
Route::get('dashboard/website/ContactBanners/add', [ContactBannerController::class, 'add']);
Route::get('dashboard/website/ContactBanners/edit/{slug}', [ContactBannerController::class, 'edit']);
Route::get('dashboard/website/ContactBanners/view/{slug}', [ContactBannerController::class, 'view']);
Route::post('dashboard/website/ContactBanners/submit', [ContactBannerController::class, 'insert']);
Route::post('dashboard/website/ContactBanners/update', [ContactBannerController::class, 'update']);
Route::post('dashboard/website/ContactBanners/softdelete', [ContactBannerController::class, 'softdelete']);
Route::post('dashboard/website/ContactBanners/restore', [ContactBannerController::class, 'restore']);
Route::post('dashboard/website/ContactBanners/delete', [ContactBannerController::class, 'delete']);

Route::get('dashboard/website/ContactContactform', [ContactContactformController::class, 'index']);
Route::get('dashboard/website/ContactContactform/add', [ContactContactformController::class, 'add']);
Route::get('dashboard/website/ContactContactform/edit/{slug}', [ContactContactformController::class, 'edit']);
Route::get('dashboard/website/ContactContactform/view/{slug}', [ContactContactformController::class, 'view']);
Route::post('dashboard/website/ContactContactform/submit', [ContactContactformController::class, 'insert']);
Route::post('dashboard/website/ContactContactform/update', [ContactContactformController::class, 'update']);
Route::post('dashboard/website/ContactContactform/softdelete', [ContactContactformController::class, 'softdelete']);
Route::post('dashboard/website/ContactContactform/restore', [ContactContactformController::class, 'restore']);
Route::post('dashboard/website/ContactContactform/delete', [ContactContactformController::class, 'delete']);

Route::get('dashboard/website/ContactDeteails', [ContactDeteailsController::class, 'index']);
Route::get('dashboard/website/ContactDeteails/add', [ContactDeteailsController::class, 'add']);
Route::get('dashboard/website/ContactDeteails/edit/{slug}', [ContactDeteailsController::class, 'edit']);
Route::get('dashboard/website/ContactDeteails/view/{slug}', [ContactDeteailsController::class, 'view']);
Route::post('dashboard/website/ContactDeteails/submit', [ContactDeteailsController::class, 'insert']);
Route::post('dashboard/website/ContactDeteails/update', [ContactDeteailsController::class, 'update']);
Route::post('dashboard/website/ContactDeteails/softdelete', [ContactDeteailsController::class, 'softdelete']);
Route::post('dashboard/website/ContactDeteails/restore', [ContactDeteailsController::class, 'restore']);
Route::post('dashboard/website/ContactDeteails/delete', [ContactDeteailsController::class, 'delete']);

Route::get('dashboard/website/ContactGetreview', [ContactGetrivewController::class, 'index']);
Route::get('dashboard/website/ContactGetreview/add', [ContactGetrivewController::class, 'add']);
Route::get('dashboard/website/ContactGetreview/edit/{slug}', [ContactGetrivewController::class, 'edit']);
Route::get('dashboard/website/ContactGetreview/view/{slug}', [ContactGetrivewController::class, 'view']);
Route::post('dashboard/website/ContactGetreview/submit', [ContactGetrivewController::class, 'insert']);
Route::post('dashboard/website/ContactGetreview/update', [ContactGetrivewController::class, 'update']);
Route::post('dashboard/website/ContactGetreview/softdelete', [ContactGetrivewController::class, 'softdelete']);
Route::post('dashboard/website/ContactGetreview/restore', [ContactGetrivewController::class, 'restore']);
Route::post('dashboard/website/ContactGetreview/delete', [ContactGetrivewController::class, 'delete']);

Route::get('dashboard/website/ContactServices', [ContactServicesController::class, 'index']);
Route::get('dashboard/website/ContactServices/add', [ContactServicesController::class, 'add']);
Route::get('dashboard/website/ContactServices/edit/{slug}', [ContactServicesController::class, 'edit']);
Route::get('dashboard/website/ContactServices/view/{slug}', [ContactServicesController::class, 'view']);
Route::post('dashboard/website/ContactServices/submit', [ContactServicesController::class, 'insert']);
Route::post('dashboard/website/ContactServices/update', [ContactServicesController::class, 'update']);
Route::post('dashboard/website/ContactServices/softdelete', [ContactServicesController::class, 'softdelete']);
Route::post('dashboard/website/ContactServices/restore', [ContactServicesController::class, 'restore']);
Route::post('dashboard/website/ContactServices/delete', [ContactServicesController::class, 'delete']);

Route::get('dashboard/website/gellarybanner/', [GellaryBannerController::class, 'index']);
Route::get('dashboard/website/gellarybanner/add', [GellaryBannerController::class, 'add']);
Route::get('dashboard/website/gellarybanner/edit/{slug}', [GellaryBannerController::class, 'edit']);
Route::get('dashboard/website/gellarybanner/view/{slug}', [GellaryBannerController::class, 'view']);
Route::post('dashboard/website/gellarybanner/submit', [GellaryBannerController::class, 'insert']);
Route::post('dashboard/website/gellarybanner/update', [GellaryBannerController::class, 'update']);
Route::post('dashboard/website/gellarybanner/softdelete', [GellaryBannerController::class, 'softdelete']);
Route::post('dashboard/website/gellarybanner/restore', [GellaryBannerController::class, 'restore']);
Route::post('dashboard/website/gellarybanner/delete', [GellaryBannerController::class, 'delete']);

Route::get('dashboard/website/gellaryimage', [GellaryImageController::class, 'index']);
Route::get('dashboard/website/gellaryimage/add', [GellaryImageController::class, 'add']);
Route::get('dashboard/website/gellaryimage/edit/{slug}', [GellaryImageController::class, 'edit']);
Route::get('dashboard/website/gellaryimage/view/{slug}', [GellaryImageController::class, 'view']);
Route::post('dashboard/website/gellaryimage/submit', [GellaryImageController::class, 'insert']);
Route::post('dashboard/website/gellaryimage/update', [GellaryImageController::class, 'update']);
Route::post('dashboard/website/gellaryimage/softdelete', [GellaryImageController::class, 'softdelete']);
Route::post('dashboard/website/gellaryimage/restore', [GellaryImageController::class, 'restore']);
Route::post('dashboard/website/gellaryimage/delete', [GellaryImageController::class, 'delete']);
//home 
Route::get('dashboard/website/homepageabout2', [HomeAboutsTwoController::class, 'index']);
Route::get('dashboard/website/homepageabout2/add', [HomeAboutsTwoController::class, 'add']);
Route::get('dashboard/website/homepageabout2/edit/{slug}', [HomeAboutsTwoController::class, 'edit']);
Route::get('dashboard/website/homepageabout2/view/{slug}', [HomeAboutsTwoController::class, 'view']);
Route::post('dashboard/website/homepageabout2/submit', [HomeAboutsTwoController::class, 'insert']);
Route::post('dashboard/website/homepageabout2/update', [HomeAboutsTwoController::class, 'update']);
Route::post('dashboard/website/homepageabout2/softdelete', [HomeAboutsTwoController::class, 'softdelete']);
Route::post('dashboard/website/homepageabout2/restore', [HomeAboutsTwoController::class, 'restore']);
Route::post('dashboard/website/homepageabout2/delete', [HomeAboutsTwoController::class, 'delete']);

Route::get('dashboard/website/homepageabout', [HomeAboutcontroller::class, 'index']);
Route::get('dashboard/website/homepageabout/add', [HomeAboutcontroller::class, 'add']);
Route::get('dashboard/website/homepageabout/edit/{slug}', [HomeAboutcontroller::class, 'edit']);
Route::get('dashboard/website/homepageabout/view/{slug}', [HomeAboutcontroller::class, 'view']);
Route::post('dashboard/website/homepageabout/submit', [HomeAboutcontroller::class, 'insert']);
Route::post('dashboard/website/homepageabout/update', [HomeAboutcontroller::class, 'update']);
Route::post('dashboard/website/homepageabout/softdelete', [HomeAboutcontroller::class, 'softdelete']);
Route::post('dashboard/website/homepageabout/restore', [HomeAboutcontroller::class, 'restore']);
Route::post('dashboard/website/homepageabout/delete', [HomeAboutcontroller::class, 'delete']);

Route::get('dashboard/website/homepageBanner', [HomeBannerSliderController::class, 'index']);
Route::get('dashboard/website/homepageBanner/add', [HomeBannerSliderController::class, 'add']);
Route::get('dashboard/website/homepageBanner/edit/{slug}', [HomeBannerSliderController::class, 'edit']);
Route::get('dashboard/website/homepageBanner/view/{slug}', [HomeBannerSliderController::class, 'view']);
Route::post('dashboard/website/homepageBanner/submit', [HomeBannerSliderController::class, 'insert']);
Route::post('dashboard/website/homepageBanner/update', [HomeBannerSliderController::class, 'update']);
Route::post('dashboard/website/homepageBanner/softdelete', [HomeBannerSliderController::class, 'softdelete']);
Route::post('dashboard/website/homepageBanner/restore', [HomeBannerSliderController::class, 'restore']);
Route::post('dashboard/website/homepageBanner/delete', [HomeBannerSliderController::class, 'delete']);

Route::get('dashboard/website/companyfounded', [HomeCompanyfoundedController::class, 'index']);
Route::get('dashboard/website/companyfounded/add', [HomeCompanyfoundedController::class, 'add']);
Route::get('dashboard/website/companyfounded/edit/{slug}', [HomeCompanyfoundedController::class, 'edit']);
Route::get('dashboard/website/companyfounded/view/{slug}', [HomeCompanyfoundedController::class, 'view']);
Route::post('dashboard/website/companyfounded/submit', [HomeCompanyfoundedController::class, 'insert']);
Route::post('dashboard/website/companyfounded/update', [HomeCompanyfoundedController::class, 'update']);
Route::post('dashboard/website/companyfounded/softdelete', [HomeCompanyfoundedController::class, 'softdelete']);
Route::post('dashboard/website/companyfounded/restore', [HomeCompanyfoundedController::class, 'restore']);
Route::post('dashboard/website/companyfounded/delete', [HomeCompanyfoundedController::class, 'delete']);

Route::get('dashboard/website/news', [HomeNewsController::class, 'index']);
Route::get('dashboard/website/news/add', [HomeNewsController::class, 'add']);
Route::get('dashboard/website/news/edit/{slug}', [HomeNewsController::class, 'edit']);
Route::get('dashboard/website/news/view/{slug}', [HomeNewsController::class, 'view']);
Route::post('dashboard/website/news/submit', [HomeNewsController::class, 'insert']);
Route::post('dashboard/website/news/update', [HomeNewsController::class, 'update']);
Route::post('dashboard/website/news/softdelete', [HomeNewsController::class, 'softdelete']);
Route::post('dashboard/website/news/restore', [HomeNewsController::class, 'restore']);
Route::post('dashboard/website/news/delete', [HomeNewsController::class, 'delete']);

Route::get('dashboard/website/HomeOueMostchoose', [HomeOurMostchooseController::class, 'index']);
Route::get('dashboard/website/HomeOueMostchoose/add', [HomeOurMostchooseController::class, 'add']);
Route::get('dashboard/website/HomeOueMostchoose/edit/{slug}', [HomeOurMostchooseController::class, 'edit']);
Route::get('dashboard/website/HomeOueMostchoose/view/{slug}', [HomeOurMostchooseController::class, 'view']);
Route::post('dashboard/website/HomeOueMostchoose/submit', [HomeOurMostchooseController::class, 'insert']);
Route::post('dashboard/website/HomeOueMostchoose/update', [HomeOurMostchooseController::class, 'update']);
Route::post('dashboard/website/HomeOueMostchoose/softdelete', [HomeOurMostchooseController::class, 'softdelete']);
Route::post('dashboard/website/HomeOueMostchoose/restore', [HomeOurMostchooseController::class, 'restore']);
Route::post('dashboard/website/HomeOueMostchoose/delete', [HomeOurMostchooseController::class, 'delete']);


Route::get('dashboard/website/teammembers', [HomeOurTeamController::class, 'index']);
Route::get('dashboard/website/teammembers/add', [HomeOurTeamController::class, 'add']);
Route::get('dashboard/website/teammembers/edit/{slug}', [HomeOurTeamController::class, 'edit']);
Route::get('dashboard/website/teammembers/view/{slug}', [HomeOurTeamController::class, 'view']);
Route::post('dashboard/website/teammembers/submit', [HomeOurTeamController::class, 'insert']);
Route::post('dashboard/website/teammembers/update', [HomeOurTeamController::class, 'update']);
Route::post('dashboard/website/teammembers/softdelete', [HomeOurTeamController::class, 'softdelete']);
Route::post('dashboard/website/teammembers/restore', [HomeOurTeamController::class, 'restore']);
Route::post('dashboard/website/teammembers/delete', [HomeOurTeamController::class, 'delete']);

Route::get('dashboard/website/HomePageTestimonial', [HomePageTestimonial::class, 'index']);
Route::get('dashboard/website/HomePageTestimonial/add', [HomePageTestimonial::class, 'add']);
Route::get('dashboard/website/HomePageTestimonial/edit/{slug}', [HomePageTestimonial::class, 'edit']);
Route::get('dashboard/website/HomePageTestimonial/view/{slug}', [HomePageTestimonial::class, 'view']);
Route::post('dashboard/website/HomePageTestimonial/submit', [HomePageTestimonial::class, 'insert']);
Route::post('dashboard/website/HomePageTestimonial/update', [HomePageTestimonial::class, 'update']);
Route::post('dashboard/website/HomePageTestimonial/softdelete', [HomePageTestimonial::class, 'softdelete']);
Route::post('dashboard/website/HomePageTestimonial/restore', [HomePageTestimonial::class, 'restore']);
Route::post('dashboard/website/HomePageTestimonial/delete', [HomePageTestimonial::class, 'delete']);

Route::get('dashboard/website/homepageservice', [HomeServicesController::class, 'index']);
Route::get('dashboard/website/homepageservice/add', [HomeServicesController::class, 'add']);
Route::get('dashboard/website/homepageservice/edit/{slug}', [HomeServicesController::class, 'edit']);
Route::get('dashboard/website/homepageservice/view/{slug}', [HomeServicesController::class, 'view']);
Route::post('dashboard/website/homepageservice/submit', [HomeServicesController::class, 'insert']);
Route::post('dashboard/website/homepageservice/update', [HomeServicesController::class, 'update']);
Route::post('dashboard/website/homepageservice/softdelete', [HomeServicesController::class, 'softdelete']);
Route::post('dashboard/website/homepageservice/restore', [HomeServicesController::class, 'restore']);
Route::post('dashboard/website/homepageservice/delete', [HomeServicesController::class, 'delete']);

Route::get('dashboard/website/whychoose', [HomeWhyChooseController::class, 'index']);
Route::get('dashboard/website/whychoose/add', [HomeWhyChooseController::class, 'add']);
Route::get('dashboard/website/whychoose/edit/{slug}', [HomeWhyChooseController::class, 'edit']);
Route::get('dashboard/website/whychoose/view/{slug}', [HomeWhyChooseController::class, 'view']);
Route::post('dashboard/website/whychoose/submit', [HomeWhyChooseController::class, 'insert']);
Route::post('dashboard/website/whychoose/update', [HomeWhyChooseController::class, 'update']);
Route::post('dashboard/website/whychoose/softdelete', [HomeWhyChooseController::class, 'softdelete']);
Route::post('dashboard/website/whychoose/restore', [HomeWhyChooseController::class, 'restore']);
Route::post('dashboard/website/whychoose/delete', [HomeWhyChooseController::class, 'delete']);

//immigratin 
Route::get('dashboard/website/aboutimmigration', [aboutimmigration::class, 'index']);
Route::get('dashboard/website/aboutimmigration/add', [aboutimmigration::class, 'add']);
Route::get('dashboard/website/aboutimmigration/edit/{slug}', [aboutimmigration::class, 'edit']);
Route::get('dashboard/website/aboutimmigration/view/{slug}', [aboutimmigration::class, 'view']);
Route::post('dashboard/website/aboutimmigration/submit', [aboutimmigration::class, 'insert']);
Route::post('dashboard/website/aboutimmigration/update', [aboutimmigration::class, 'update']);
Route::post('dashboard/website/aboutimmigration/softdelete', [aboutimmigration::class, 'softdelete']);
Route::post('dashboard/website/aboutimmigration/restore', [aboutimmigration::class, 'restore']);
Route::post('dashboard/website/aboutimmigration/delete', [aboutimmigration::class, 'delete']);

Route::get('dashboard/website/immibanner', [ImmigrationBannerController::class, 'index']);
Route::get('dashboard/website/immibanner/add', [ImmigrationBannerController::class, 'add']);
Route::get('dashboard/website/immibanner/edit/{slug}', [ImmigrationBannerController::class, 'edit']);
Route::get('dashboard/website/immibanner/view/{slug}', [ImmigrationBannerController::class, 'view']);
Route::post('dashboard/website/immibanner/submit', [ImmigrationBannerController::class, 'insert']);
Route::post('dashboard/website/immibanner/update', [ImmigrationBannerController::class, 'update']);
Route::post('dashboard/website/immibanner/softdelete', [ImmigrationBannerController::class, 'softdelete']);
Route::post('dashboard/website/immibanner/restore', [ImmigrationBannerController::class, 'restore']);
Route::post('dashboard/website/immibanner/delete', [ImmigrationBannerController::class, 'delete']);

Route::get('dashboard/website/ImmigrationCountrys', [ImmigrationCountryController::class, 'index']);
Route::get('dashboard/website/ImmigrationCountrys/add', [ImmigrationCountryController::class, 'add']);
Route::get('dashboard/website/ImmigrationCountrys/edit/{slug}', [ImmigrationCountryController::class, 'edit']);
Route::get('dashboard/website/ImmigrationCountrys/view/{slug}', [ImmigrationCountryController::class, 'view']);
Route::post('dashboard/website/ImmigrationCountrys/submit', [ImmigrationCountryController::class, 'insert']);
Route::post('dashboard/website/ImmigrationCountrys/update', [ImmigrationCountryController::class, 'update']);
Route::post('dashboard/website/ImmigrationCountrys/softdelete', [ImmigrationCountryController::class, 'softdelete']);
Route::post('dashboard/website/ImmigrationCountrys/restore', [ImmigrationCountryController::class, 'restore']);
Route::post('dashboard/website/ImmigrationCountrys/delete', [ImmigrationCountryController::class, 'delete']);

Route::get('dashboard/website/ImmigrationPracticeArea', [ImmigrationPracticeController::class, 'index']);
Route::get('dashboard/website/ImmigrationPracticeArea/add', [ImmigrationPracticeController::class, 'add']);
Route::get('dashboard/website/ImmigrationPracticeArea/edit/{slug}', [ImmigrationPracticeController::class, 'edit']);
Route::get('dashboard/website/ImmigrationPracticeArea/view/{slug}', [ImmigrationPracticeController::class, 'view']);
Route::post('dashboard/website/ImmigrationPracticeArea/submit', [ImmigrationPracticeController::class, 'insert']);
Route::post('dashboard/website/ImmigrationPracticeArea/update', [ImmigrationPracticeController::class, 'update']);
Route::post('dashboard/website/ImmigrationPracticeArea/softdelete', [ImmigrationPracticeController::class, 'softdelete']);
Route::post('dashboard/website/ImmigrationPracticeArea/restore', [ImmigrationPracticeController::class, 'restore']);
Route::post('dashboard/website/ImmigrationPracticeArea/delete', [ImmigrationPracticeController::class, 'delete']);

Route::get('dashboard/website/immiservice', [ImmigrationServiceController::class, 'index']);
Route::get('dashboard/website/immiservice/add', [ImmigrationServiceController::class, 'add']);
Route::get('dashboard/website/immiservice/edit/{slug}', [ImmigrationServiceController::class, 'edit']);
Route::get('dashboard/website/immiservice/view/{slug}', [ImmigrationServiceController::class, 'view']);
Route::post('dashboard/website/immiservice/submit', [ImmigrationServiceController::class, 'insert']);
Route::post('dashboard/website/immiservice/update', [ImmigrationServiceController::class, 'update']);
Route::post('dashboard/website/immiservice/softdelete', [ImmigrationServiceController::class, 'softdelete']);
Route::post('dashboard/website/immiservice/restore', [ImmigrationServiceController::class, 'restore']);
Route::post('dashboard/website/immiservice/delete', [ImmigrationServiceController::class, 'delete']);

Route::get('dashboard/website/immistudy', [ImmigrationStudyController::class, 'index']);
Route::get('dashboard/website/immistudy/add', [ImmigrationStudyController::class, 'add']);
Route::get('dashboard/website/immistudy/edit/{slug}', [ImmigrationStudyController::class, 'edit']);
Route::get('dashboard/website/immistudy/view/{slug}', [ImmigrationStudyController::class, 'view']);
Route::post('dashboard/website/immistudy/submit', [ImmigrationStudyController::class, 'insert']);
Route::post('dashboard/website/immistudy/update', [ImmigrationStudyController::class, 'update']);
Route::post('dashboard/website/immistudy/softdelete', [ImmigrationStudyController::class, 'softdelete']);
Route::post('dashboard/website/immistudy/restore', [ImmigrationStudyController::class, 'restore']);
Route::post('dashboard/website/immistudy/delete', [ImmigrationStudyController::class, 'delete']);

Route::get('dashboard/website/immisuccess', [ImmigrationSuccessController::class, 'index']);
Route::get('dashboard/website/immisuccess/add', [ImmigrationSuccessController::class, 'add']);
Route::get('dashboard/website/immisuccess/edit/{slug}', [ImmigrationSuccessController::class, 'edit']);
Route::get('dashboard/website/immisuccess/view/{slug}', [ImmigrationSuccessController::class, 'view']);
Route::post('dashboard/website/immisuccess/submit', [ImmigrationSuccessController::class, 'insert']);
Route::post('dashboard/website/immisuccess/update', [ImmigrationSuccessController::class, 'update']);
Route::post('dashboard/website/immisuccess/softdelete', [ImmigrationSuccessController::class, 'softdelete']);
Route::post('dashboard/website/immisuccess/restore', [ImmigrationSuccessController::class, 'restore']);
Route::post('dashboard/website/immisuccess/delete', [ImmigrationSuccessController::class, 'delete']);

Route::get('dashboard/website/immitestimonial', [ImmigrationTestimonialController::class, 'index']);
Route::get('dashboard/website/immitestimonial/add', [ImmigrationTestimonialController::class, 'add']);
Route::get('dashboard/website/immitestimonial/edit/{slug}', [ImmigrationTestimonialController::class, 'edit']);
Route::get('dashboard/website/immitestimonial/view/{slug}', [ImmigrationTestimonialController::class, 'view']);
Route::post('dashboard/website/immitestimonial/submit', [ImmigrationTestimonialController::class, 'insert']);
Route::post('dashboard/website/immitestimonial/update', [ImmigrationTestimonialController::class, 'update']);
Route::post('dashboard/website/immitestimonial/softdelete', [ImmigrationTestimonialController::class, 'softdelete']);
Route::post('dashboard/website/immitestimonial/restore', [ImmigrationTestimonialController::class, 'restore']);
Route::post('dashboard/website/immitestimonial/delete', [ImmigrationTestimonialController::class, 'delete']);

//legal 
Route::get('dashboard/website/LegalAbouts', [LegalAboutController::class, 'index']);
Route::get('dashboard/website/LegalAbouts/add', [LegalAboutController::class, 'add']);
Route::get('dashboard/website/LegalAbouts/edit/{slug}', [LegalAboutController::class, 'edit']);
Route::get('dashboard/website/LegalAbouts/view/{slug}', [LegalAboutController::class, 'view']);
Route::post('dashboard/website/LegalAbouts/submit', [LegalAboutController::class, 'insert']);
Route::post('dashboard/website/LegalAbouts/update', [LegalAboutController::class, 'update']);
Route::post('dashboard/website/LegalAbouts/softdelete', [LegalAboutController::class, 'softdelete']);
Route::post('dashboard/website/LegalAbouts/restore', [LegalAboutController::class, 'restore']);
Route::post('dashboard/website/LegalAbouts/delete', [LegalAboutController::class, 'delete']);

Route::get('dashboard/website/LegalBanner', [LegalBannerController::class, 'index']);
Route::get('dashboard/website/LegalBanner/add', [LegalBannerController::class, 'add']);
Route::get('dashboard/website/LegalBanner/edit/{slug}', [LegalBannerController::class, 'edit']);
Route::get('dashboard/website/LegalBanner/view/{slug}', [LegalBannerController::class, 'view']);
Route::post('dashboard/website/LegalBanner/submit', [LegalBannerController::class, 'insert']);
Route::post('dashboard/website/LegalBanner/update', [LegalBannerController::class, 'update']);
Route::post('dashboard/website/LegalBanner/softdelete', [LegalBannerController::class, 'softdelete']);
Route::post('dashboard/website/LegalBanner/restore', [LegalBannerController::class, 'restore']);
Route::post('dashboard/website/LegalBanner/delete', [LegalBannerController::class, 'delete']);

Route::get('dashboard/website/LegalPracticearea', [LegalPracticeareaController::class, 'index']);
Route::get('dashboard/website/LegalPracticearea/add', [LegalPracticeareaController::class, 'add']);
Route::get('dashboard/website/LegalPracticearea/edit/{slug}', [LegalPracticeareaController::class, 'edit']);
Route::get('dashboard/website/LegalPracticearea/view/{slug}', [LegalPracticeareaController::class, 'view']);
Route::post('dashboard/website/LegalPracticearea/submit', [LegalPracticeareaController::class, 'insert']);
Route::post('dashboard/website/LegalPracticearea/update', [LegalPracticeareaController::class, 'update']);
Route::post('dashboard/website/LegalPracticearea/softdelete', [LegalPracticeareaController::class, 'softdelete']);
Route::post('dashboard/website/LegalPracticearea/restore', [LegalPracticeareaController::class, 'restore']);
Route::post('dashboard/website/LegalPracticearea/delete', [LegalPracticeareaController::class, 'delete']);

Route::get('dashboard/website/LegalServices', [LegalServiceController::class, 'index']);
Route::get('dashboard/website/LegalServices/add', [LegalServiceController::class, 'add']);
Route::get('dashboard/website/LegalServices/edit/{slug}', [LegalServiceController::class, 'edit']);
Route::get('dashboard/website/LegalServices/view/{slug}', [LegalServiceController::class, 'view']);
Route::post('dashboard/website/LegalServices/submit', [LegalServiceController::class, 'insert']);
Route::post('dashboard/website/LegalServices/update', [LegalServiceController::class, 'update']);
Route::post('dashboard/website/LegalServices/softdelete', [LegalServiceController::class, 'softdelete']);
Route::post('dashboard/website/LegalServices/restore', [LegalServiceController::class, 'restore']);
Route::post('dashboard/website/LegalServices/delete', [LegalServiceController::class, 'delete']);

Route::get('dashboard/website/letestblogproject', [LetestBlogProjectController::class, 'index']);
Route::get('dashboard/website/letestblogproject/add', [LetestBlogProjectController::class, 'add']);
Route::get('dashboard/website/letestblogproject/edit/{slug}', [LetestBlogProjectController::class, 'edit']);
Route::get('dashboard/website/letestblogproject/view/{slug}', [LetestBlogProjectController::class, 'view']);
Route::post('dashboard/website/letestblogproject/submit', [LetestBlogProjectController::class, 'insert']);
Route::post('dashboard/website/letestblogproject/update', [LetestBlogProjectController::class, 'update']);
Route::post('dashboard/website/letestblogproject/softdelete', [LetestBlogProjectController::class, 'softdelete']);
Route::post('dashboard/website/letestblogproject/restore', [LetestBlogProjectController::class, 'restore']);
Route::post('dashboard/website/letestblogproject/delete', [LetestBlogProjectController::class, 'delete']);


Route::get('dashboard/website/MainMenu', [MainMenuController::class, 'index']);
Route::get('dashboard/website/MainMenu/add', [MainMenuController::class, 'add']);
Route::get('dashboard/website/MainMenu/edit/{slug}', [MainMenuController::class, 'edit']);
Route::get('dashboard/website/MainMenu/view/{slug}', [MainMenuController::class, 'view']);
Route::post('dashboard/website/MainMenu/submit', [MainMenuController::class, 'insert']);
Route::post('dashboard/website/MainMenu/update', [MainMenuController::class, 'update']);
Route::post('dashboard/website/MainMenu/softdelete', [MainMenuController::class, 'softdelete']);
Route::post('dashboard/website/MainMenu/restore', [MainMenuController::class, 'restore']);
Route::post('dashboard/website/MainMenu/delete', [MainMenuController::class, 'delete']);

Route::get('dashboard/website/OurallAchivment', [OurallAchivmentController::class, 'index']);
Route::get('dashboard/website/OurallAchivment/add', [OurallAchivmentController::class, 'add']);
Route::get('dashboard/website/OurallAchivment/edit/{slug}', [OurallAchivmentController::class, 'edit']);
Route::get('dashboard/website/OurallAchivment/view/{slug}', [OurallAchivmentController::class, 'view']);
Route::post('dashboard/website/OurallAchivment/submit', [OurallAchivmentController::class, 'insert']);
Route::post('dashboard/website/OurallAchivment/update', [OurallAchivmentController::class, 'update']);
Route::post('dashboard/website/OurallAchivment/softdelete', [OurallAchivmentController::class, 'softdelete']);
Route::post('dashboard/website/OurallAchivment/restore', [OurallAchivmentController::class, 'restore']);
Route::post('dashboard/website/OurallAchivment/delete', [OurallAchivmentController::class, 'delete']);

Route::get('dashboard/website/ourallteam', [OurAllTeamController::class, 'index']);
Route::get('dashboard/website/ourallteam/add', [OurAllTeamController::class, 'add']);
Route::get('dashboard/website/ourallteam/edit/{slug}', [OurAllTeamController::class, 'edit']);
Route::get('dashboard/website/ourallteam/view/{slug}', [OurAllTeamController::class, 'view']);
Route::post('dashboard/website/ourallteam/submit', [OurAllTeamController::class, 'insert']);
Route::post('dashboard/website/ourallteam/update', [OurAllTeamController::class, 'update']);
Route::post('dashboard/website/ourallteam/softdelete', [OurAllTeamController::class, 'softdelete']);
Route::post('dashboard/website/ourallteam/restore', [OurAllTeamController::class, 'restore']);
Route::post('dashboard/website/ourallteam/delete', [OurAllTeamController::class, 'delete']);

Route::get('dashboard/website/ourbigproject', [OurBigProjectController::class, 'index']);
Route::get('dashboard/website/ourbigproject/add', [OurBigProjectController::class, 'add']);
Route::get('dashboard/website/ourbigproject/edit/{slug}', [OurBigProjectController::class, 'edit']);
Route::get('dashboard/website/ourbigproject/view/{slug}', [OurBigProjectController::class, 'view']);
Route::post('dashboard/website/ourbigproject/submit', [OurBigProjectController::class, 'insert']);
Route::post('dashboard/website/ourbigproject/update', [OurBigProjectController::class, 'update']);
Route::post('dashboard/website/ourbigproject/softdelete', [OurBigProjectController::class, 'softdelete']);
Route::post('dashboard/website/ourbigproject/restore', [OurBigProjectController::class, 'restore']);
Route::post('dashboard/website/ourbigproject/delete', [OurBigProjectController::class, 'delete']);

Route::get('dashboard/website/OurClientsQuesion', [OurClientsQuesionController::class, 'index']);
Route::get('dashboard/website/OurClientsQuesion/add', [OurClientsQuesionController::class, 'add']);
Route::get('dashboard/website/OurClientsQuesion/edit/{slug}', [OurClientsQuesionController::class, 'edit']);
Route::get('dashboard/website/OurClientsQuesion/view/{slug}', [OurClientsQuesionController::class, 'view']);
Route::post('dashboard/website/OurClientsQuesion/submit', [OurClientsQuesionController::class, 'insert']);
Route::post('dashboard/website/OurClientsQuesion/update', [OurClientsQuesionController::class, 'update']);
Route::post('dashboard/website/OurClientsQuesion/softdelete', [OurClientsQuesionController::class, 'softdelete']);
Route::post('dashboard/website/OurClientsQuesion/restore', [OurClientsQuesionController::class, 'restore']);
Route::post('dashboard/website/OurClientsQuesion/delete', [OurClientsQuesionController::class, 'delete']);

Route::get('dashboard/website/ourteambanner', [OurTeamBannerController::class, 'index']);
Route::get('dashboard/website/ourteambanner/add', [OurTeamBannerController::class, 'add']);
Route::get('dashboard/website/ourteambanner/edit/{slug}', [OurTeamBannerController::class, 'edit']);
Route::get('dashboard/website/ourteambanner/view/{slug}', [OurTeamBannerController::class, 'view']);
Route::post('dashboard/website/ourteambanner/submit', [OurTeamBannerController::class, 'insert']);
Route::post('dashboard/website/ourteambanner/update', [OurTeamBannerController::class, 'update']);
Route::post('dashboard/website/ourteambanner/softdelete', [OurTeamBannerController::class, 'softdelete']);
Route::post('dashboard/website/ourteambanner/restore', [OurTeamBannerController::class, 'restore']);
Route::post('dashboard/website/ourteambanner/delete', [OurTeamBannerController::class, 'delete']);

Route::get('dashboard/website/blogrecentproject', [RecentProjectBlogController::class, 'index']);
Route::get('dashboard/website/blogrecentproject/add', [RecentProjectBlogController::class, 'add']);
Route::get('dashboard/website/blogrecentproject/edit/{slug}', [RecentProjectBlogController::class, 'edit']);
Route::get('dashboard/website/blogrecentproject/view/{slug}', [RecentProjectBlogController::class, 'view']);
Route::post('dashboard/website/blogrecentproject/submit', [RecentProjectBlogController::class, 'insert']);
Route::post('dashboard/website/blogrecentproject/update', [RecentProjectBlogController::class, 'update']);
Route::post('dashboard/website/blogrecentproject/softdelete', [RecentProjectBlogController::class, 'softdelete']);
Route::post('dashboard/website/blogrecentproject/restore', [RecentProjectBlogController::class, 'restore']);
Route::post('dashboard/website/blogrecentproject/delete', [RecentProjectBlogController::class, 'delete']);

Route::get('dashboard/website/StudyabroadBanner', [StudyabroadBannerController::class, 'index']);
Route::get('dashboard/website/StudyabroadBanner/add', [StudyabroadBannerController::class, 'add']);
Route::get('dashboard/website/StudyabroadBanner/edit/{slug}', [StudyabroadBannerController::class, 'edit']);
Route::get('dashboard/website/StudyabroadBanner/view/{slug}', [StudyabroadBannerController::class, 'view']);
Route::post('dashboard/website/StudyabroadBanner/submit', [StudyabroadBannerController::class, 'insert']);
Route::post('dashboard/website/StudyabroadBanner/update', [StudyabroadBannerController::class, 'update']);
Route::post('dashboard/website/StudyabroadBanner/softdelete', [StudyabroadBannerController::class, 'softdelete']);
Route::post('dashboard/website/StudyabroadBanner/restore', [StudyabroadBannerController::class, 'restore']);
Route::post('dashboard/website/StudyabroadBanner/delete', [StudyabroadBannerController::class, 'delete']);

Route::get('dashboard/website/StudyabroadCareer', [studyabroadCareerController::class, 'index']);
Route::get('dashboard/website/StudyabroadCareer/add', [studyabroadCareerController::class, 'add']);
Route::get('dashboard/website/StudyabroadCareer/edit/{slug}', [studyabroadCareerController::class, 'edit']);
Route::get('dashboard/website/StudyabroadCareer/view/{slug}', [studyabroadCareerController::class, 'view']);
Route::post('dashboard/website/StudyabroadCareer/submit', [studyabroadCareerController::class, 'insert']);
Route::post('dashboard/website/StudyabroadCareer/update', [studyabroadCareerController::class, 'update']);
Route::post('dashboard/website/StudyabroadCareer/softdelete', [studyabroadCareerController::class, 'softdelete']);
Route::post('dashboard/website/StudyabroadCareer/restore', [studyabroadCareerController::class, 'restore']);
Route::post('dashboard/website/StudyabroadCareer/delete', [studyabroadCareerController::class, 'delete']);

Route::get('dashboard/website/StudyabroadCourse', [StudyabroadCourseController::class, 'index']);
Route::get('dashboard/website/StudyabroadCourse/add', [StudyabroadCourseController::class, 'add']);
Route::get('dashboard/website/StudyabroadCourse/edit/{slug}', [StudyabroadCourseController::class, 'edit']);
Route::get('dashboard/website/StudyabroadCourse/view/{slug}', [StudyabroadCourseController::class, 'view']);
Route::post('dashboard/website/StudyabroadCourse/submit', [StudyabroadCourseController::class, 'insert']);
Route::post('dashboard/website/StudyabroadCourse/update', [StudyabroadCourseController::class, 'update']);
Route::post('dashboard/website/StudyabroadCourse/softdelete', [StudyabroadCourseController::class, 'softdelete']);
Route::post('dashboard/website/StudyabroadCourse/restore', [StudyabroadCourseController::class, 'restore']);
Route::post('dashboard/website/StudyabroadCourse/delete', [StudyabroadCourseController::class, 'delete']);

Route::get('dashboard/website/StudyabroadDegree', [StudyabroadDegreeController::class, 'index']);
Route::get('dashboard/website/StudyabroadDegree/add', [StudyabroadDegreeController::class, 'add']);
Route::get('dashboard/website/StudyabroadDegree/edit/{slug}', [StudyabroadDegreeController::class, 'edit']);
Route::get('dashboard/website/StudyabroadDegree/view/{slug}', [StudyabroadDegreeController::class, 'view']);
Route::post('dashboard/website/StudyabroadDegree/submit', [StudyabroadDegreeController::class, 'insert']);
Route::post('dashboard/website/StudyabroadDegree/update', [StudyabroadDegreeController::class, 'update']);
Route::post('dashboard/website/StudyabroadDegree/softdelete', [StudyabroadDegreeController::class, 'softdelete']);
Route::post('dashboard/website/StudyabroadDegree/restore', [StudyabroadDegreeController::class, 'restore']);
Route::post('dashboard/website/StudyabroadDegree/delete', [StudyabroadDegreeController::class, 'delete']);

Route::get('dashboard/website/StudyabroadFinence', [StudyabroadFinenceController::class, 'index']);
Route::get('dashboard/website/StudyabroadFinence/add', [StudyabroadFinenceController::class, 'add']);
Route::get('dashboard/website/StudyabroadFinence/edit/{slug}', [StudyabroadFinenceController::class, 'edit']);
Route::get('dashboard/website/StudyabroadFinence/view/{slug}', [StudyabroadFinenceController::class, 'view']);
Route::post('dashboard/website/StudyabroadFinence/submit', [StudyabroadFinenceController::class, 'insert']);
Route::post('dashboard/website/StudyabroadFinence/update', [StudyabroadFinenceController::class, 'update']);
Route::post('dashboard/website/StudyabroadFinence/softdelete', [StudyabroadFinenceController::class, 'softdelete']);
Route::post('dashboard/website/StudyabroadFinence/restore', [StudyabroadFinenceController::class, 'restore']);
Route::post('dashboard/website/StudyabroadFinence/delete', [StudyabroadFinenceController::class, 'delete']);

Route::get('dashboard/website/studyabroadOffer', [StudyabroadOfferController::class, 'index']);
Route::get('dashboard/website/studyabroadOffer/add', [StudyabroadOfferController::class, 'add']);
Route::get('dashboard/website/studyabroadOffer/edit/{slug}', [StudyabroadOfferController::class, 'edit']);
Route::get('dashboard/website/studyabroadOffer/view/{slug}', [StudyabroadOfferController::class, 'view']);
Route::post('dashboard/website/studyabroadOffer/submit', [StudyabroadOfferController::class, 'insert']);
Route::post('dashboard/website/studyabroadOffer/update', [StudyabroadOfferController::class, 'update']);
Route::post('dashboard/website/studyabroadOffer/softdelete', [StudyabroadOfferController::class, 'softdelete']);
Route::post('dashboard/website/studyabroadOffer/restore', [StudyabroadOfferController::class, 'restore']);
Route::post('dashboard/website/studyabroadOffer/delete', [StudyabroadOfferController::class, 'delete']);

Route::get('dashboard/website/StudyabroadPractice', [StudyabroadPrecticeareaController::class, 'index']);
Route::get('dashboard/website/StudyabroadPractice/add', [StudyabroadPrecticeareaController::class, 'add']);
Route::get('dashboard/website/StudyabroadPractice/edit/{slug}', [StudyabroadPrecticeareaController::class, 'edit']);
Route::get('dashboard/website/StudyabroadPractice/view/{slug}', [StudyabroadPrecticeareaController::class, 'view']);
Route::post('dashboard/website/StudyabroadPractice/submit', [StudyabroadPrecticeareaController::class, 'insert']);
Route::post('dashboard/website/StudyabroadPractice/update', [StudyabroadPrecticeareaController::class, 'update']);
Route::post('dashboard/website/StudyabroadPractice/softdelete', [StudyabroadPrecticeareaController::class, 'softdelete']);
Route::post('dashboard/website/StudyabroadPractice/restore', [StudyabroadPrecticeareaController::class, 'restore']);
Route::post('dashboard/website/StudyabroadPractice/delete', [StudyabroadPrecticeareaController::class, 'delete']);

Route::get('dashboard/website/StudayabroadTestimonial', [StudyabroadTestimonialController::class, 'index']);
Route::get('dashboard/website/StudayabroadTestimonial/add', [StudyabroadTestimonialController::class, 'add']);
Route::get('dashboard/website/StudayabroadTestimonial/edit/{slug}', [StudyabroadTestimonialController::class, 'edit']);
Route::get('dashboard/website/StudayabroadTestimonial/view/{slug}', [StudyabroadTestimonialController::class, 'view']);
Route::post('dashboard/website/StudayabroadTestimonial/submit', [StudyabroadTestimonialController::class, 'insert']);
Route::post('dashboard/website/StudayabroadTestimonial/update', [StudyabroadTestimonialController::class, 'update']);
Route::post('dashboard/website/StudayabroadTestimonial/softdelete', [StudyabroadTestimonialController::class, 'softdelete']);
Route::post('dashboard/website/StudayabroadTestimonial/restore', [StudyabroadTestimonialController::class, 'restore']);
Route::post('dashboard/website/StudayabroadTestimonial/delete', [StudyabroadTestimonialController::class, 'delete']);

Route::get('dashboard/website/upcomingeventblog', [UpcomingEventcontroller::class, 'index']);
Route::get('dashboard/website/upcomingeventblog/add', [UpcomingEventcontroller::class, 'add']);
Route::get('dashboard/website/upcomingeventblog/edit/{slug}', [UpcomingEventcontroller::class, 'edit']);
Route::get('dashboard/website/upcomingeventblog/view/{slug}', [UpcomingEventcontroller::class, 'view']);
Route::post('dashboard/website/upcomingeventblog/submit', [UpcomingEventcontroller::class, 'insert']);
Route::post('dashboard/website/upcomingeventblog/update', [UpcomingEventcontroller::class, 'update']);
Route::post('dashboard/website/upcomingeventblog/softdelete', [UpcomingEventcontroller::class, 'softdelete']);
Route::post('dashboard/website/upcomingeventblog/restore', [UpcomingEventcontroller::class, 'restore']);
Route::post('dashboard/website/upcomingeventblog/delete', [UpcomingEventcontroller::class, 'delete']);

Route::get('dashboard/website/updateblog', [UpdateBlogController::class, 'index']);
Route::get('dashboard/website/updateblog/add', [UpdateBlogController::class, 'add']);
Route::get('dashboard/website/updateblog/edit/{slug}', [UpdateBlogController::class, 'edit']);
Route::get('dashboard/website/updateblog/view/{slug}', [UpdateBlogController::class, 'view']);
Route::post('dashboard/website/updateblog/submit', [UpdateBlogController::class, 'insert']);
Route::post('dashboard/website/updateblog/update', [UpdateBlogController::class, 'update']);
Route::post('dashboard/website/updateblog/softdelete', [UpdateBlogController::class, 'softdelete']);
Route::post('dashboard/website/updateblog/restore', [UpdateBlogController::class, 'restore']);
Route::post('dashboard/website/updateblog/delete', [UpdateBlogController::class, 'delete']);













//laravel deafult route 
require __DIR__.'/auth.php';
