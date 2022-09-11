<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




//common 
use App\Models\OurClientsQuesion;
use App\Models\whychoose;
use App\Models\OurallAchivment;
use App\Models\Aboutattorneys;
use App\Models\companyfounded;
use App\Models\news;


//home
use App\Models\bannerslider;
use App\Models\homeabout;
use App\Models\homeabout2;
use App\Models\homepageService;
use App\Models\teammember;
use App\Models\HomePageTestimonial;
use App\Models\HomeOueMostchoose;

//about
use App\Models\AboutBanner;
use App\Models\aboutAbouts;
use App\Models\AboutAbout2;
use App\Models\AboutHistory;
use App\Models\AboutTeams;
use App\Models\AboutourAgencys;
use App\Models\AboutourmoreInfo;



//legal 
use App\Models\LegalBanner;
use App\Models\LegalAbouts;
use App\Models\LegalServices;
use App\Models\LegalPracticearea;






use App\Models\ourallteam;
use App\Models\ourteambanner;
use App\Models\gellaryimage;
use App\Models\gellarybanner;

// study abroad 
use App\Models\StudyabroadBanner;
use App\Models\StudyabroadDegree;
use App\Models\StudyabroadCareer;
use App\Models\StudyabroadCourse;
use App\Models\StudyabroadFinence;
use App\Models\StudyabroadPractice;
use App\Models\StudayabroadTestimonial;
use App\Models\studyabroadOffer;

// immigration 
use App\Models\immibanner;
use App\Models\immiservice;
use App\Models\aboutimmigration;
use App\Models\immistudy;
use App\Models\ImmigrationCountrys;
use App\Models\ImmigrationPracticeArea;




//  blog model 
use App\Models\blogbanner;
use App\Models\blogabout;
use App\Models\updateblog;
use App\Models\blogrecentproject;
use App\Models\freeaskqsn;
use App\Models\letestblogproject;
use App\Models\ourbigproject;
use App\Models\upcomingeventblog;
//contact 
use App\Models\ContactBanners;
use App\Models\ContactServices;
use App\Models\ContactGetreview;
use App\Models\immitestimonial;

//header footer 








class websitecontroller extends Controller{


 
 
    public function index(){
        $homeBanner=bannerslider::where('slider_status',1)->get();
        $homeabouts=homeabout::where('about_status',1)->limit(1)->get();
        $homeabout2=homeabout2::where('about_status',1)->limit(1)->get();
        $homeservice=homepageService::where('service_status',1)->get();
        $homeservicehed=homepageService::where('service_status',1)->limit(1)->get();
        $Abouthistory=AboutHistory::where('status',1)->limit(1)->get();
        $companyfounded=companyfounded::where('status',1)->get();
        $whychoosehed=whychoose::where('choose_status',1)->limit(1)->get();
        $whychoose=whychoose::where('choose_status',1)->get();
        $num1=OurallAchivment::where('status',1)->limit(4)->get();
        $teammember=teammember::where('status',1)->limit(3)->get();
        $AbroadOffers=studyabroadOffer::where('status',1)->get();
        $AboutourAgencys=AboutourAgencys::where('status',1)->limit(4)->get();
        $AboutourAgencyshed=AboutourAgencys::where('status',1)->limit(1)->get();
        $hometest=HomePageTestimonial::where('status',1)->limit(8)->get();
        $hometesthed=HomePageTestimonial::where('status',1)->limit(1)->get();
        $Attoreny=Aboutattorneys::where('status',1)->get();
        $Attorenyhed=Aboutattorneys::where('status',1)->limit(1)->get();
        $OurChosse=HomeOueMostchoose::where('status',1)->get();
        $OurChossehed=HomeOueMostchoose::where('status',1)->limit(1)->get();
        $Clientsqsn=OurClientsQuesion::where('status',1)->get();
        $news=news::where('news_status',1)->limit(4)->get();
        $newshed=news::where('news_status',1)->limit(1)->get();


    return view('website.index',compact('homeBanner','homeabouts','homeabout2','homeservice','homeservicehed','Abouthistory','companyfounded','whychoosehed','whychoose','num1','teammember','AbroadOffers','AboutourAgencys','AboutourAgencyshed','hometest','hometesthed','Attoreny','Attorenyhed','OurChosse','OurChossehed','Clientsqsn','news','newshed'));

    }



    public function about(){
        $AboutBanner=AboutBanner::where('slider_status',1)->get();
        $aboutabout=aboutAbouts::where('about_status',1)->limit(1)->get();
        $aboutabout2=AboutAbout2::where('about_status',1)->limit(1)->get();
        $Abouthistory=AboutHistory::where('status',1)->limit(1)->get();
        $companyfounded=companyfounded::where('status',1)->get();
        $whychoosehed=whychoose::where('choose_status',1)->limit(1)->get();
        $whychoose=whychoose::where('choose_status',1)->get();
        $num1=OurallAchivment::where('status',1)->limit(4)->get();
        $AboutTeams=AboutTeams::where('status',1)->limit(3)->get();
        $AbroadOffers=studyabroadOffer::where('status',1)->get();
        $Attoreny=Aboutattorneys::where('status',1)->get();
        $Attorenyhed=Aboutattorneys::where('status',1)->limit(1)->get();
        $AboutourAgencys=AboutourAgencys::where('status',1)->limit(4)->get();
        $AboutourAgencyshed=AboutourAgencys::where('status',1)->limit(1)->get();
        $aboutmore=AboutourmoreInfo::where('status',1)->get();

        return view('website.pages.about',compact('AboutBanner','aboutabout','aboutabout2','Abouthistory','companyfounded','whychoose','whychoosehed','num1','AboutTeams','AbroadOffers','Attoreny','Attorenyhed','AboutourAgencys','AboutourAgencyshed','aboutmore'));
    }

    public function service(){
        echo "hello servie";
    }
    
    public function ourteam(){
        $ourteambanner=ourteambanner::where('slider_status',1)->limit(1)->get();
        $teamheading=ourallteam::where('status',1)->limit(1)->get();
        $ourteam = ourallteam::where('status',1)->get();
        return view('website.pages.team',compact('teamheading','ourteam','ourteambanner'));
    }

    public function stydyAbroad(){
        $AbroadBanner=StudyabroadBanner::where('slider_status',1)->limit(5)->get();
        $AbroadDegree=StudyabroadDegree::where('choose_status',1)->get();
        $AbroadDegreehed=StudyabroadDegree::where('choose_status',1)->limit(1)->get();
        $AbroadCareer=StudyabroadCareer::where('status',1)->get();
        $AbroadCareerhed=StudyabroadCareer::where('status',1)->limit(1)->get();
        $AbroadCourse=StudyabroadCourse::where('status',1)->get();
        $AbroadCoursehed=StudyabroadCourse::where('status',1)->limit(1)->get();
        $AbroadFinance=StudyabroadFinence::where('status',1)->get();
        $AbroadFinancehed=StudyabroadFinence::where('status',1)->OrderBy('uniq_id','ASC')->limit(1)->get();
        $AbroadPractice=StudyabroadPractice::where('status',1)->get();
        $AbroadPracticehed=StudyabroadPractice::where('status',1)->OrderBy('uniq_id','ASC')->limit(1)->get();
        $AbroadTesti=StudayabroadTestimonial::where('status',1)->get();
        $AbroadTestihed=StudayabroadTestimonial::where('status',1)->OrderBy('uniq_id','ASC')->limit(1)->get();
        $AbroadOffers=studyabroadOffer::where('status',1)->get();

        return view('website.pages.abroad',compact('AbroadBanner','AbroadDegree','AbroadDegreehed','AbroadCareer','AbroadCareerhed','AbroadCourse','AbroadCoursehed','AbroadFinance' ,'AbroadFinancehed','AbroadPractice','AbroadPracticehed','AbroadTesti','AbroadTestihed','AbroadOffers'));
    }

    public function immigration(){
        $immigrationbanner=immibanner::where('slider_status',1)->limit(5)->get();
        $immiservice=immiservice::where('status',1)->get();
        $immiservicehed=immiservice::where('status',1)->limit(1)->get();
        $aboutimmigration=aboutimmigration::where('status',1)->limit(1)->get();
        $news=news::where('news_status',1)->limit(4)->get();
        $newshed=news::where('news_status',1)->limit(1)->get();
        $immitestimonial=immitestimonial::where('status',1)->limit(8)->get();
        $immitestimonialhed=immitestimonial::where('status',1)->limit(1)->get();
        $num1=OurallAchivment::where('status',1)->limit(4)->get();
        $AbroadOffers=studyabroadOffer::where('status',1)->get();
        $immistudy=immistudy::where('status',1)->get();
        $Immicountry=ImmigrationCountrys::where('post_status',1)->get();
        $immipracticearea=ImmigrationPracticeArea::where('status',1)->get();
        $immipracticeareahed=ImmigrationPracticeArea::where('status',1)->limit(1)->get();

        

        return view('website.pages.immigration',compact('immigrationbanner','immiservice','immiservicehed','aboutimmigration','news','newshed','immitestimonial','immitestimonialhed','num1','AbroadOffers','immistudy','Immicountry','immipracticearea','immipracticeareahed'));
    }

    public function gellary(){
    
    $gellaryimage=gellaryimage::where('post_status',1)->get();
    $ourgellarybanner=ourteambanner::where('slider_status',1)->limit(1)->get();
       return view('website.pages.gellary',compact('ourgellarybanner','gellaryimage'));
    }










    public function blog(){
        $blogbanner=blogbanner::where('slider_status',1)->get();
        $blogabout=blogabout::where('status',1)->limit(1)->get();
        $updateblog=updateblog::where('status',1)->get();
        $recent=blogrecentproject::where('status',1)->get();
        $recenthead=blogrecentproject::where('status',1)->limit(1)->get();
        $letestpro=letestblogproject::where('status',1)->get();
        $upcomingevent=upcomingeventblog::where('status',1)->get();
        $ourbigproject=ourbigproject::where('status',1)->get();
        $freeaskqsn=freeaskqsn::where('status',1)->get();


        return view('website.pages.blog',compact('blogbanner','blogabout','updateblog','recent','recenthead','letestpro','upcomingevent','ourbigproject','freeaskqsn'));
    }










    public function contact(){
        $Contactbanner=ContactBanners::where('slider_status',1)->get();
        $contactservice=ContactServices::where('slider_status',1)->get();



        return view('website.pages.contact',compact('Contactbanner','contactservice'));
    }





    public function legal(){
        $Legalbanner=LegalBanner::where('slider_status',1)->get();
        $LegalAbout=LegalAbouts::where('about_status',1)->limit(1)->get();
        $Legalservice=LegalServices::where('status',1)->get();
        $Legalserviceheder=LegalServices::where('status',1)->limit(1)->get();
        $whychoosehed=whychoose::where('choose_status',1)->limit(1)->get();
        $whychoose=whychoose::where('choose_status',1)->get();
        $Legalpractice=LegalPracticearea::where('status',1)->get();
        $Legalpracticehed=LegalPracticearea::where('status',1)->limit(1)->get();
        $num1=OurallAchivment::where('status',1)->limit(4)->get();
        $Attoreny=Aboutattorneys::where('status',1)->get();
        $Attorenyhed=Aboutattorneys::where('status',1)->limit(1)->get();



        return view('website.pages.legal',compact('Legalbanner','LegalAbout','Legalservice','Legalserviceheder','whychoose','whychoosehed','Legalpractice','Legalpracticehed','num1','Attoreny','Attorenyhed'));
    }

    //subpage function is here 

    public function freeConsutation(){
        echo "hello free consultaion ";
    }

    public function agent(){
        echo "hello agent ";
    }
    

    public function career(){
        echo "hello career";
    }

    
    public function internship(){
        echo "hello internship ";
    }


    public function privecy(){
        echo "hello privecy ";
    }

    public function condition(){
        echo "hello condition ";
    }
    
    public function faq(){
        echo "hello faq";
    }

    
    
    public function singlepage(){
        echo "hello single page ";
    }


    


}
