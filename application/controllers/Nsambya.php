<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nsambya extends MY_Controller 
{
	
	
	public function Index()
	{	
		$allUsers = '[
			{
				"name": "one",
				"title": "",
				"image": "",
				"id":1
			},
			{
				"name": "two",
				"title": "",
				"image": "",
				"id":2
			},
			{
				"name": "three",
				"title": "",
				"image": "",
				"id":3
			},
			{
				"name": "four",
				"title": "",
				"image": "",
				"id":4
			}
		]';

		// $cleanarrayUsers = json_decode($allUsers);
		// $userdata = [
		// 	'user_info' => $cleanarrayUsers
		// ];
		
		$this->load->view('index.php');	
	}

	public function About(){
		$this->load->view('about.php');
	}

	public function Home(){
		$this->load->view('index.php');
	}

	public function Contact(){
		$this->load->view('contact.php');
	}
	public function Team(){
		$this->load->view('team.php');
	}	
	public function Profile($id=1){
		$userData = '[
			{
				"_id": 1,
				"name": "Mr. Francis Ssozi",
				"title": "HEAD OF COUNSELING SECTION",
				"image": "path",
				"phone": "+256736536353",
				"email": "email@gmail.com",
				"address": "Nsambya home care",
				"overview": "AT NHC, the Counseling section, headed by Mr.Francis Ssozi (inset) is responsible for effecting objective and effective counseling sessions to prepare new cases and existing cases by providing hope through the lifelong antiretroviral therapy in various ways.Clients who require in-patient care services are referred to facilities nearby and for their convenience, like the St. Francis hospital Nsambya, any of the KCCA health units like Kiruddu, Naguru, and Kawempe or to Kibuli Muslim Hospital. NHC also collaborates with Mildmay Uganda which offers free in-patient care services for clients from zero up to 14 years and a number of them have greatly benefited from this service. The section has also been involved in research programs which will be highlighted upon in the research activity and the subsequent publications.",
				"facebook": "",
				"twitter": "",
				"instagram":""
			},
			{
				"_id": 2,
				"name": "Dr.Justine Kizito",
				"title": "Head of Medical Sections",
				"image": "path",
				"phone": "+256736536353",
				"email": "email@gmail.com",
				"address": "address",
				"overview": "The medical section comprises of six sub-sections and has two clinical sites at Nsambya Home Care (NHC) and Ggaba outreach. The section is headed by Dr.Justine Kizito (inset) sub-sections are Nursing, Nutrition and laboratory.Each subsection has a head and all sub-sections work as a team to achieve their respective targets. The Nursing section is headed by Sr Grace Anzoyo, the Nutrition Section is headed by Mr Isaac Musoke,The laboratory section is heade by Mr Ismael Gingo.The role of each section is to offer comprehensive out patients’ lifelong health care services to clients who have been in care since 1987. A cumulative total of 19002 has been served since inception to the close of December 2019. A total of 562 new clients was started on lifelong antiretroviral therapy, recorded in the COP year 2018 to 2019 to bring the total active clients to 8250 by close of the September 30 2019 (Also End of COP 18) The section receives the new cases from the counseling section who prepare them to start on the lifelong antiretroviral therapy in various ways. NHC has continued to follow the MOH guidelines on provision of antiretroviral therapy and under our supervisory body which is the IBC/KHP, we carried out the following ART related activities at NHC and Ggaba outreach clinics and the Private Clinic. Since November 2016, we have been following the test and treaty policy.<br/>1. Initiation of all clients who test HIV positive on HAART after they have been counseled. <br/>2. Maintenance of clients on HAART<br/>3. Initiation and maintenance of all clients on INH Prophylaxis for TB prevention.<br/>4. Tuberculosis screening, prevention and treatment <br/>5. Adherence counseling <br/>6. Assessing their level of immune suppression by using the baseline CD4, monitoring their response to antiretroviral therapy using the viral load which is requested depending on the individual response. <br/>7. Cervical cancer screening <br/>8. Health education talks <br/>9. Screening for pregnancy among women of reproductive age <br/>10. Follow up of mothers in eMTCT clinics <br/>11. Special follow up of clients with HVL.<br/>12. DSDM activities at the facility and in the community. For all these activities, NHC works with a team of 50 community volunteers to conduct home visits in the provision of home based care and refer them for care and treatment. The volunteers were able to make the following home visits and conduct the following referrals during their home-based care activities.",
				"facebook": "",
				"twitter": "",
				"instagram":""
			},
			{
				"_id": 3,
				"name": "Mr. Gilbert Ayebare",
				"title": "PHARMACY AND DISPENSING OF DRUGS AND SUPPLIES",
				"image": "path",
				"phone": "+256736536353",
				"email": "email@gmail.com",
				"address": "address",
				"overview": "In the Pharmacy a total number of four staff work in this section, providing drugs to every patient that is scheduled to visit the facility on any one specific day, Providing the service throughout the day from 8am to 5 pm Monday to Friday, they are by far the ultimate face of the clinic that requires a dedicated and committed group of individuals. The Pharmacy Head is tasked to manage the group of staff and follow the supply chain from the two mandated suppliers. Medical access which is the main supplier provides both ARVs and OI drugs to the facility based on a determined distribution policy through which a series of logistical procedures are followed to the book and are based on reports provided to MAUL on a biannual basis. JOINT Medical stores also supplies drugs to the Pharmacy because the main supply chain is short on some of the drugs especially the OI drugs that MAUL does not provide since patients have numerous health challenges, There are however numerous chronic illnesses such as DM and HT which have very expensive medication and the patients are not able to afford them. The pharmacy and its committed staff provide mainly drugs through the dispensing window, Order through the supply chain, ensure good storage, pre-pack and actively participate in the stock take at the end of each month. An average of over 180 patients are served each day at the pharmacy and at this point there is a variety of interactions with the patients ranging from adherence concerns and Viral load monitoring through critical assessment of their respective charts. The pharmacy works together with all the other sections to provide patients with the necessary treatment to any of their conditions on visit to the facility, thereby reducing the patient waiting time at the facility.",
				"facebook": "",
				"twitter": "",
				"instagram":""
			},
			{
				"_id": 4,
				"name": "Ms.Resty Ingabire",
				"title": "THE HEAD OF SOCIAL WORKS",
				"image": "path",
				"phone": "+256736536353",
				"email": "email@gmail.com",
				"address": "address",
				"overview": "Sustainable livelihood of Patients through another of NHC’ Sections, the <strong>Social works Section</strong> is headed by Ms. Resty Ingabire (inset). <br/>NHC provides services as part of the multidisciplinary team or on a one–to-one basis with the client. The main goal of social work is to improve a society’s overall well-being, especially for the vulnerable populations. As professionals, the section is concerned with helping individuals, families, groups, and communities to enhance their individual and collective well-being. The activities implemented under this section are aimed at helping people develop their skills and their ability to use their own resources and those of the community to resolve problems. Social work is concerned with individual and personal problems but also with broader social issues as poverty, unemployment and domestic violence.  <br/>1. Regarding disease prevention in the community, we additionally had 50 community volunteers (12 males: 38 females) who continued to work towards archiving the goals of the 3rd 90, a follow up of their target of enrolling 2 clients per month and conducting at least 30 home visits and other activities. There were home visits specifically for TB patients that were carried out.  <br/>2. Among other community related activities and that where conducted throughout the year 2017 were in the Social works Section, which caters for the vulnerable populations such as; OVCs, organized and HIV infected and affected groups like the SILC groups for economic strengthening.  <br/><strong>OVC (Orphans and Vulnerable Children) activities</strong> <br/>The OVC program is committed to the provision of comprehensive services to children infected and affected by HIV and AIDS. In light of the national OVC guidelines that identify up to six core program area, the OVC program implemented by NHC aims at providing at least four of the Core programme Area; (Education, Child Protection, Food Security and Nutrition, and Socio-Economic Strengthening).  <br/>These services are enhanced by the provision of psychosocial support implementation of the OVC program has been possible with financial support from CDC-PEPFAR, through the AIDS Care and Treatment (ACT) Project of the Uganda Episcopal Conference UEC and Uganda Catholic Medical Bureau (UCMB). NHC also received funding from Catholic Agency for Overseas Development (CAFOD) and Stephen Lewis Foundation (SLF).  <br/><strong>Selection Criteria</strong> <br/>Children are selected according to the following criteria; <br/>1. Children infected with HIV and AIDS <br/>2. Children with caregivers who are infected with HIV and AIDS <br/>3. Children orphaned due to HIV and AIDS <br/>4. Children staying with elderly caregivers or institutions  <br/>Any child belonging to the category of critically and moderately vulnerable should be enrolled into the OVC programme and followed up to Graduation.",
				"facebook": "",
				"twitter": "",
				"instagram":""
			}
		]';
		
		
		$cleanarray =json_decode($userData);
		// if(is_string($id) || is_numeric(id)== false){
		// 	$id = 1;
		// }
		if($id > 4){
			$id = 1;
		}
		$profdata = $cleanarray[$id-1];
	
		$this->load->view('profile.php', $profdata);
	}
	public function Services(){
		$this->load->view('services.php');
	}

	public function sendcontactus(){
		$res=$this->sendmail($this->input->post('note'),$this->input->post('email'),'KK Advocates contact form');
		echo json_encode($res);
	}
}


