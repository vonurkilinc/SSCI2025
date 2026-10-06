<?php 

	$templatefile = '';
	//$dateCounterScript = '';
   $env = ($_SERVER['HTTP_HOST']!='') ? '/'.basename(dirname(__FILE__)).'/':'/';
   define('APATH_BASEROOT',$env);
   define('BASE','http://'.$_SERVER['HTTP_HOST'].APATH_BASEROOT);
   if (strpos ($_SERVER['QUERY_STRING'], 'http://') !== FALSE) {
	  $templatefile = 'view/home.php';	  
   }
   
   if(!isset($_GET['ui'])) 
   {
	  $templatefile = 'view/home.php';
	 // $dateCounterScript = 'settings/date-counter-config.php';
   }	
	
   if((isset($_GET['ui'])) && ($_GET['ui'] !== NULL))
   {
      $page = $_GET['ui'];
	  switch($page){
		 case 'home':
		    $templatefile = 'view/home.php';	
		    break;
		 case 'organizing-committee':
		 	$templatefile = 'view/organizing-committee.php';	
		    break; 
		 case 'important-dates':
		 	$templatefile = 'view/important-dates.php';	
			//$dateCounterScript = 'settings/date-counter-config.php';
		    break; 
		 case 'ci-for-energy-transport-environmental-sustainability':
		 	$templatefile = 'view/environmental-sustainability.php';	
		    break;
		 case 'ci-in-engineering-cyber-physical-systems':
		 	$templatefile = 'view/engineering-cyber-physical-systems.php';	
		    break;	
		 case 'ci-in-image-signal-processing-and-synthetic-media':
		 	$templatefile = 'view/image-signal-processing-and-synthetic-media.php';	
		    break;			
		 case 'ci-in-artificial-life-and-cooperative-intelligent-systems':
			$templatefile = 'view/artificial-life-and-cooperative-intelligent-systems.php';	
		    break;	
		 case 'ci-in-security-defence-and-biometrics':
			$templatefile = 'view/security-defence-and-biometrics.php';	
		    break;	
		 case 'ci-in-health-and-medicine':
			$templatefile = 'view/health-and-medicine.php';	
		    break;	
		 case 'ci-for-financial-engineering-and-economics':
			$templatefile = 'view/financial-engineering-and-economics.php';	
		    break;			
		 case 'ci-in-natural-language-processing-and-social-media':
			$templatefile = 'view/natural-language-processing-and-social-media.php';	
		    break;	
		 case 'trustworthy-explainable-and-responsible-ci':
			$templatefile = 'view/trustworthy-explainable-and-responsible-ci.php';	
		    break;			
		 case 'ssci-evaluation-and-planning-committee':
			$templatefile = 'view/ssci-evaluation-and-planning-committee.php';	
		    break;
		 case 'sponsors':
		 	$templatefile = 'view/sponsors.php';	
		    break;
		 case 'call-for-papers':
		 	$templatefile = 'view/call_for_papers.php';	
		    break;
		 case 'multidisplinary-computational-intelligence-incubators':
		 	$templatefile = 'view/multidisplinary-ci-incubators.php';	
		    break;
		 case 'submission-instructions':
		 	$templatefile = 'view/submission-instructions.php';	
		    break;
		 case 'accommodation':
		 	$templatefile = 'view/accommodation.php';	
		    break;
		 case 'things-to-do-in-trondheim':
		 	$templatefile = 'view/things-to-do-in-trondheim.php';	
		    break;
		 case 'travel-grant':
		 	$templatefile = 'view/travel-grant.php';	
		    break;
		 case 'travel-information':
		 	$templatefile = 'view/travel-information.php';	
		    break;
		 case 'presentation-format':
		 	$templatefile = 'view/presentation-format.php';	
		    break;
		 case 'venue-information':
		 	$templatefile = 'view/venue-information.php';	
		    break;
		 case 'symposia-overview':
		 	$templatefile = 'view/symposia-overview.php';	
		    break;
		 case 'news':
			$templatefile = 'view/news.php';	
		    break;
		 case 'call-for-volunteers':
			$templatefile = 'view/call-for-volunteers.php';	
		    break;
		case 'plenary-and-keynote-sessions':
			$templatefile = 'view/plenary-and-keynote-sessions.php';	
		    break;
		case 'contact-us':
			$templatefile = 'view/contact-us.php';	
		    break;
		case 'call-for-competitions':
			$templatefile = 'view/call-for-competitions.php';	
		    break;
		case 'competitions':
			$templatefile = 'view/competitions.php';	
		    break;
		case 'call-for-tutorials':
			$templatefile = 'view/call-for-tutorials.php';	
		    break;
		case 'tutorials':
			$templatefile = 'view/tutorials.php';	
		    break;
		case 'registration':
			$templatefile = 'view/registration.php';	
		    break;
		case 'plenary-keeley-crockett':
			$templatefile = 'view/plenary-speaker-cockett.php';	
		    break;
		 case 'plenary-metin-sitti':
			$templatefile = 'view/plenary-speaker-metin-sitti.php';	
		    break;
		case 'plenary-nadia-thalmann':
			$templatefile = 'view/plenary-speaker-nadia-thalmann.php';	
			break;
		 case 'plenary-kay-chen-tan':
			$templatefile = 'view/plenary-speaker-kay-chen-tan.php';	
			break;
		 case 'keynote-speaker-tobias-rodemann':
			$templatefile = 'view/keynote-speaker-tobias-rodemann.php';	
			break;
		 case 'keynote-speaker-lisboa':
			$templatefile = 'view/keynote-speaker-lisboa.php';	
			break;
		 case 'keynote-speaker-schuller':
			$templatefile = 'view/keynote-speaker-schuller.php';	
			break;
		 case 'keynote-speaker-alice-smith':
			$templatefile = 'view/keynote-speaker-alice-smith.php';	
			break;
		 case 'keynote-speaker-albert':
			$templatefile = 'view/keynote-speaker-albert.php';	
			break;
		 case 'keynote-speaker-maria':
			$templatefile = 'view/keynote-speaker-maria.php';	
			break;
		 case 'keynote-speaker-manzoni':
			$templatefile = 'view/keynote-speaker-manzoni.php';	
			break;
		 case 'social-program':
			$templatefile = 'view/social-program.php';	
			break;
		case 'plenary-speaker-sanaz-mostaghim':
			$templatefile = 'view/plenary-speaker-sanaz-mostaghim.php';	
			break;
		case 'sponsorship':
			$templatefile = 'view/sponsorship.php';	
			break;
		case 'call-for-sponsors':
			$templatefile = 'view/call-for-sponsors.php';	
			break;
		case 'additional-social-program':
			$templatefile = 'view/additional-social-program.php';	
			break;
		case 'camera-ready-submission-instructions':
			$templatefile = 'view/camera-ready-submission-instructions.php';	
			break;
		case 'keynote-speaker-koskinopoulou':
			$templatefile = 'view/keynote-speaker-koskinopoulou.php';	
			break;
		case 'industry-collaboration-workshop':
			$templatefile = 'view/industry-collaboration-workshop.php';	
			break;
		case 'quantum-ci-workshop':
			$templatefile = 'view/quantum-ci-workshop.php';	
			break;
		case 'program-at-a-glance':
			$templatefile = 'view/program-at-a-glance.php';	
			break;
		case 'panel':
			$templatefile = 'view/panel.php';	
			break;
		case 'nelisha-pillay':
			$templatefile = 'view/invited-speaker-nelisha-pillay.php';	
			break;
		case 'sheridan-k-houghten':
			$templatefile = 'view/invited-speaker-sheridan-k-houghten.php';	
			break;
		default: 
			$templatefile = 'view/no-content.php';	
		    break;
		}
	}
	
   include('view/layout.php');
?>