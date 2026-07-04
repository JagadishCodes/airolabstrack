<?php
/**
 * Template Name: Privacy policy
 * The template used for displaying fullwidth page content in Publications page
 *
 * @package hitmag
 */

get_header(); ?>

<style>
	.listing-banner-wrap{
		background-image: url('/wp-content/uploads/2024/05/div-img-11.png');
	}
	ul li::marker {
 		 color: red;
	}
</style>

<?php 
	$s1 = get_field('section_1');
	$s2 = get_field('section_2');
	$s3 = get_field('section_3');
	$s4 = get_field('section_4');
	$s5 = get_field('section_5');
	$s6 = get_field('section_6');
	$s7 = get_field('section_7');
	$s8 = get_field('section_8');
	$s9 = get_field('section_9');
?>

<section id="listing-banner">
	<div class="container-l-auto">
		<div class="listing-banner-wrap">
			<div class="privacy-title">
				<h2>Privacy Policy</h2>
			</div>
		</div>
	</div>
</section>

<div class="container-l-auto">
	<div class="sec-gap"></div>
</div>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s1['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s1['content']; ?>
<!-- 			<p>
				The operators of this website take the protection of your personal data very seriously. We treat your personal data as confidential and in accordance with the statutory data protection regulations and this privacy statement. 
				
				If you use this website, various pieces of personal data will be collected. Personal information is any data with which you could be personally identified. This privacy policy explains what information we collect and what we use it for. It also explains how and for what purpose this happens. Please note that data transmitted via the internet (e.g. via email communication) may be subject to security breaches. Complete protection of your data from third-party access is not possible.
			</p>
			<p class="content-subtitle">
				Objective
			</p>
			<p>
				Refer to the Privacy This Privacy Statement articulates the privacy and data protection principles followed by AiRo Digital Labs, LLC , a corporation with its principal place of business located at 1755 Park St, 200, Naperville, Illinois 60563, US (hereinafter referred to as “AiRo Digital Labs”) and its subsidiary entities around the world with regards to the personal information of its customers (including products, outsourcing, and other services clients), partners, employees (current or former employees, trainees), applicants, contractors, prospects and vendors and current or former members of the Board of Directors, whose personal information are processed by Airo Digital Labs (“Data Subjects”). This Privacy Statement explains the use and protection of personal information collected by Airo Digital Labs. It applies to any personal information you provide to Airo Digital Labs and, subject to local law, any personal information we collect from other sources. 
				
				Throughout this Privacy Statement, “Airo Digital Labs” refers to Airo Digital Labs, LLC , including its affiliates and subsidiaries (also referred to as “we”, “us”, or “our”).
			</p>
			<p class="content-subtitle">
				Registration forms, Tools, Features, and Facilities
			</p>
			<p>
				Various forms are available on the Site to assist you in filling up your details and identifiable information for becoming a user of AiRo. AiRo may currently or in the future provide various options to connect to AiRo and register yourself on the Site for various purposes as and when applicable. However, you are solely responsible for properly completing the form and submitting it in a timely manner. Although AiRo work hard to keep the forms, format, content and the information on Site, accurate, up-to-date, and complete, including the correct functionality of the tools as and when AiRo offer, operate as intended, AiRo cannot guarantee and makes no representation regarding the accuracy or currency of such forms or information or the operation of its tools. Therefore, all the tools, forms, features and facilities as and where present and available on the Site is provided “AS IS,” and you are solely responsible for usage of the Site in any manner.
			</p>
			<p class="content-subtitle">
				Scope of this Privacy Statement
			</p>
			<ul>
				<li>the types of information that AiRo Digital Labs may collect from you when you access or use its websites, applications and other online services (collectively, referred as “Services”); and </li>
				<li>its practices for collecting, using, maintaining, protecting, and disclosing that information.</li>
			</ul>
			<p>
				This policy applies only to the information AiRo Digital Labs collects through its Services, via telephonic calls, or in email, text, and other electronic communications sent through or in connection with its Services.</p> 
				
				<p>AiRo Digital Labs may provide links to third-party websites for your convenience and information. If you access those links while using AiRo Digital Labs’ Services, you will leave the AiRo Digital Labs website or app as the case may be. AiRo Digital Labs does not control those sites or their privacy practices, which may differ from AiRo Digital Labs’ practices. We do not endorse or make any representations about third-party websites. The personal information you choose to provide to or that is collected by these third parties, including any social media websites featured on our website, is not covered by the AiRo Digital Labs’s Privacy Statement. We encourage you to review the privacy statement or policy of any website before submitting your personal information. </p>
				
				<p>We may also provide social media features on our website that enable you to share AiRo Digital Labs information with your social networks and to interact with AiRo Digital Labs on various social media sites. Your use of these features may result in the collection or sharing of information about you, depending on the feature. We encourage you to review the privacy policies and settings on the social media sites with which you interact to make sure you understand how the information provided by you could be used or shared by those sites.
			</p>
			<p class="content-subtitle">
				Personal information collected by Airo Digital Labs:
			</p>
			<p>
				We may collect personal information such as your First Name, Last Name, E-mail Address, Job Title, Organization Name, Country, City and Phone Number.
			</p>
			<ul>
				<li>Your Personal Information(“PI”) - Personal Information is the information that can be associated with a specific person and could be used to identify that specific person whether from that data, or from the data and other information that we have, or is likely to have access to. We do not consider personal information to include information that has been made anonymous or aggregated so that it can no longer be used to identify a specific person, whether in combination with other information or otherwise.</li>
				<li>Information about your internet connection, the equipment you use to access our Services and your usage details.</li>
			</ul>
			<p class="content-subtitle">
				We collect this information:
			</p>
			<ul>
				<li>directly from you when you provide it to us; and/or</li>
				<li>automatically as you navigate through our Services (information collected automatically may include usage details, IP addresses and information collected through cookies, web beacons, and other tracking technologies).</li>
			</ul>
			<p>
				<strong>Personal information that you provide to Airo Digital Labs directly through websites or emails</strong> We may collect personal information such as your First Name, Last Name, E-mail Address, Job Title, Organization Name, Country, City and Phone Number when you fill forms on or raise a query through our websites, or send emails, call us or write to us.
			</p>
			<p class="content-subtitle">
				Visit Airo Digital Labs Websites
			</p>
			<p>
				In some instances, AiRo Digital Labs automatically collects personal information pertaining to you when you visit our websites and through e-mails that we may exchange. We may use automated technologies including the use of web server logs to collect IP addresses, device details, cookies, and web beacons. The collection of this information will allow us to improve the effectiveness of AiRo Digital Labs websites, products, and our marketing activities. Please see the section below on cookies for further details. 
			</p>
			<p>
				By using AiRo Digital Labs’s websites, associated microsites and mobile applications as the case may be, you agree to the processing of your information as explained in this Privacy Statement. AiRo Digital Labs websites may contain links to other sites which are outside our control and are not covered by this Privacy Statement. We encourage you to review the Privacy Statement/Notice of each website you visit.
			</p> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s2['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s2['content']; ?>
<!-- 			<p class="content-subtitle">
				Engage with Airo Digital Labs through social media
			</p>
			<p>
				You can engage with us through social media websites or through features on AiRo Digital Labs websites that integrate with social media sites. When you engage with us through social media sites, you may allow us to have access to certain information from your social media profile based upon your privacy preference settings on such platform.
			</p>
			<p class="content-subtitle">
				Information we collect through automatic data collection technologies
			</p>
			<p>
				We may automatically collect certain information about the computer or devices (including mobile devices) you use to access the Services, and about your use of the Services.
			</p>
			<ul>
				<li>Usage information: Details of your use of our Services, including traffic data, location data, logs, and other communication data and the resources that you access and use on or through our Services.</li>
				<li>Computer and device information: Information about your computer, Internet connection, and mobile device, including your IP address, operating systems, platforms, browser type, other browsing information (connection, speed, connection type etc.), device type, device’s unique device identifier, mobile network information, and the device’s telephone number.</li> 
				<li>Stored information and files: Our applications also may access metadata and other information associated with other files stored on your mobile device as may be permitted by you at the time of installation or usage of mobile applications etc. This may include, for example, photographs, audio and video clips, personal contacts, and address book information.</li>
				<li>Location information: Our applications collect real-time information about the location of your device, as permitted by you.</li>
				<li>Mobile device IDs: Unique mobile device identifier (e.g. IDFA or other device IDs on Apple devices like the iPhone and iPad), if you’re using our Services on a mobile device, we may use mobile device IDs (the unique identifier assigned to a device by the manufacturer), instead of cookies, to recognize you. We may do this to store your preferences and track your use of our applications. Unlike cookies, mobile device IDs cannot be deleted. Advertising companies may use device IDs to track your use of our applications, track the number of advertisements displayed, measure advertising performance, and display advertisements that are more relevant to you. Analytics companies may use mobile device IDs to track your usage of our applications.</li> 
				<li>Your preferences: Your preferences and settings such as time zone and language. </li>
				<li>Your activity on the Services: Information about your activity on the Services, such as your search queries, comments, domain names, search results selected, number of clicks, pages viewed and the order of those pages, how long you visited our Services, the date and time you used the Services, error logs, and other similar information.</li> 
				<li>Mobile status: For mobile application users, the online or offline status of your application.</li> 
				<li>Applications: If you use the AiRo Digital Labs application, AiRo Digital Labs may collect information about the presence and/ or absence and/ or details pertaining to other applications on your mobile phone.</li>
			</ul>
			<p class="content-subtitle">
				How we use your data:
			</p>
			<ul>
				<li>provide information and services as requested by you;</li> 
				<li>assess queries, requirements, and process requests for products and services;</li> 
				<li>perform client communication, service, billing and administration;</li> 
				<li>conduct data analysis;</li> 
				<li>assess web site performance and usage analysis</li> 
				<li>maintain leads</li> 
				<li>run marketing or promotional campaigns</li> 
				<li>create brand awareness</li> 
				<li>provide better services and generate demand</li> 
				<li>market products and services based on legitimate business interest under the applicable law); or </li> 
				<li>conduct processing necessary to fulfill other contractual obligations for the individual.</li>
			</ul>
			<p>
				With your consent, we may also use your personal information for additional purposes. Instances, where sensitive personal information is collected, will warrant explicit consent. Unless it is necessary for our legitimate business purposes, should you choose not to provide any personal information during certain activities, you will nevertheless be able to continue with such activity wherever possible.
			</p>
			<p class="content-subtitle">
				Sharing of personal information with third parties:
			</p>
			<p>
				AiRo Digital Labs does not share personal information about you with affiliates, partners, service providers, group entities and non-affiliated companies except (a) to provide products or services you’ve requested; (b) when we have your permission: or (c) under the following circumstances:
			</p>
			<ul>
				<li>We may share information with affiliated entities/subsidiaries/branch offices for legitimate business purposes.</li> 
				<li>We may provide the information to trusted entities who work on behalf of or with AiRo Digital Labs under strict confidentiality agreements. These entities may use your personal information to help AiRo Digital Labs communicate with you about offers from AiRo Digital Labs and for other legitimate business purposes. However, these companies do not have any independent right to further share or disseminate this information;</li> 
				<li>We may share information with statutory authorities, government institutions, or other bodies where required for compliance with legal requirements.</li> 
				<li>We may use the information to respond to subpoenas, court orders, or legal processes, or to establish or exercise our legal rights or defend against legal claims;</li>
				<li>We may share information where we believe it is necessary in order to investigate, prevent, or take action against any illegal activities, suspected fraud, situations involving potential threats to the physical safety of any person, or as otherwise required by law.</li>
				<li>We may share information where we believe it is necessary in order to protect or enforce AiRo Digital Labs’s rights, usage terms, intellectual or physical property, or for the safety of AiRo Digital Labs or associated parties.</li>
				<li>We may share information about you if AiRo Digital Labs is acquired by or merged with another company.</li>
				<li>Information about your internet connection, the equipment you use to access our Services and your usage details.</li>
			</ul>
			<p>
				You may choose to give us personal information such as your name and address or e-mail identification address (‘ID’) that may be needed, for example, to correspond with you, for you to download our white papers, to provide you with subscription information, etc. We will endeavor to protect the quality and integrity of your personally identifiable information. </p>
			<p>AiRo Digital Labs will not be liable for any unsolicited information provided by you. You consent to AiRo Digital Labs using such information as per AiRo Digital Labs’s Privacy Statement.</p>
			<p>We will make a sincere effort to respond in a timely manner to your requests to correct inaccuracies in your personal information. To correct inaccuracies in your personal information, please return the message containing the inaccuracies to the sender.</p>
			<p>AiRo Digital Labs’s websites are not directed at nor targeted at children. No one who has not reached the age of thirteen may use the websites unless supervised by an adult.</p>
			<p>By accessing this website or participating in or availing our Services you represent and warrant that you are 18 years of age or older.
			</p> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s3['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s3['content']; ?>
<!-- 			<p>
				AiRo Digital Labs takes reasonable steps to keep your personal information accurate and complete. You can access or update your personal information in the following ways.
			</p>
			<p class="small-subhead">Profile</p>
			<p>If you have created a profile or account on one of our websites, you can update your contact information after you log into your account.</p>
			<p class="small-subhead">Newsletters</p>
			<p>If you request electronic communications, such as an e-newsletter, you will be able to unsubscribe at any time by following the instructions included in the communication.</p>
			<p class="small-subhead">Mobile Devices</p>
			<p>If you previously chose to receive push notifications on your mobile device from us but no longer wish to receive them, you can manage your preferences either through your device or the application settings. If you no longer wish to have any information collected by the mobile application, you may uninstall the application by using the uninstall process available on your mobile device.</p>
			<p class="content-subtitle">Cookies and other technologies</p>
			<p class="small-subhead">What is a Cookie?</p>
			<p>A cookie is a small file, typically of letters and numbers, downloaded to a user’s computer or mobile device when the user accesses certain websites. Cookies are then sent back to the originating website on each subsequent visit. Cookies are useful because they allow a website to recognize a user’s device. They are used for a wide variety of purposes such as website analytics – counting visitors and their behavior, targeted advertising, recording user preferences or for authentication.</p>
			<p class="small-subhead">Some types of cookies?</p>
			<p>
				Necessary or Essential Cookies – Cookies that are absolutely necessary for the running of a website. These are generally first-party cookies are usually exempted from the consent requirement. E.g. Authentication cookies, Session cookies etc.</p>
			<p>Functional Cookies Cookies which are set up to improve the functionality of the site or track/monitor user behavior, preferences etc. These cookies are non-essential a website can run without usage of such cookies. E.g. Language preference, site behavior for a registered user, tracking of user, analytics, social plug-in etc. These cookies can be first-party or third-party cookies.</p>
			<p>We use cookies on our websites to personalize content and ads, to analyze our traffic and performance, to provide social media features and for the functioning of the website.</p>
			<p>We also disclose information about your use of our site to our social media/advertising/analytics partners who may combine it with other information that you have provided to them or which they have collected from your use of their services. You consent to our cookies if you continue to use this website.</p>
			<p>You can manage the non-essential or functional cookies in your browser. These settings are usually found within the ‘privacy’ section of browsers.</p>
			<p>Chrome: <a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform=Desktop&hl=en" target="_blank">https://support.google.com/chrome/answer/95647?co=GENIE.Platform=Desktop&hl=en</a> </p>
			<p>Firefox: <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences" target="_blank">https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences</a></p>
			<p>IE: <a href="https://support.microsoft.com/en-in/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">https://support.microsoft.com/en-in/help/17442/windows-internet-explorer-delete-manage-cookies</a> </p>
			<p>You can choose to accept or decline cookies, either by selecting accept or decline in the banner on your first visit (in the latter case we will try to set a cookie to record your preference for future visits), or by changing the settings in your web browser. Most web browsers are set by accept cookies by default, but you can usually modify your browser settings to decline cookies if you prefer. These settings are usually found within the ‘privacy’ section. For mobile devices these may be within the browser app settings.</p>
			<p>If you choose not to accept our various cookies, this will prevent you from taking full advantage of the website. If you wish to delete cookies which have already been placed on your computer’s hard drive, you can do so through your browser, and further information on how to do this can be found here: <a href="https://www.aboutcookies.org/page/2/" target="_blank">https://www.aboutcookies.org/page/2/</a></p>
			<p>We also use web beacons or tracking pixels in our emails and web pages which help us to monitor whether you have opened any newsletters we may have sent to you. A web beacon is one of various techniques used on web pages or email, to unobtrusively (usually invisibly) allow checking that a user has accessed some content. Common uses are email tracking and page tagging for web analytics. We use this information to deliver you a personalized service by ensuring that we send you information that we believe you will find interesting based on the content we know you have engaged with previously.</p>
			<p>Please refer to the links provided below to know more about the third-party analytics cookies used on AiRo Digital Labs websites –</p>
			<p>Google Analytics Cookies: <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage" target="_blank">https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage</a> To provide website visitors with more choice on how their data is collected by Google Analytics, Google have developed the Google Analytics Opt-out Browser Add-on. The add-on communicates with the Google Analytics JavaScript (ga.js) to indicate that information about the website visit should not be sent to Google Analytics. The Google Analytics Opt-out Browser Add-on does not prevent information from being sent to the website itself or to other web analytics services.</p>
			<p>Adobe Analytics Cookies: <a href="https://marketing.adobe.com/resources/help/en_US/whitepapers/cookies/cookies_analytics.html" target="_blank">https://marketing.adobe.com/resources/help/en_US/whitepapers/cookies/cookies_analytics.html</a></p>
			<p>Our website also includes functionality to interact with social media websites where you may have accounts, such as Facebook, Twitter and LinkedIn (“Third Party Accounts”). You should be aware that these sites may set cookies while you’re using this website, and use of these features may result in the collection or sharing of information about you. We encourage you to review your privacy settings on the social media sites with which you interact, together with their privacy policies, to make sure you understand the information that could be shared by those sites. The following Pixel/Tags are used for social media</p>
			<ul>
				<li>LinkedIn Insights Tag for Conversion Tracking. Terms and Conditions</li> 
				<li>Facebook Pixel - Terms and Conditions for use</li> 
				<li>Twitter Tailored Audiences and Conversion Tracking Program. Terms and Conditions.</li> 
				<li>Hoovers – Terms and Conditions for use</li>
			</ul> 
			<p><strong>Email:</strong> You can contact us at the e-mail or postal address listed in the “Contact Us” section at the bottom of this Statement or anywhere else on this website. Please include your current contact information, the information you are interested in accessing and your requests with regard to the same if any. We will endeavor to respond to your request, subject to reasonable limitations provided by law, unless it infringes on the privacy of other individuals.</p>
			<p><strong>If we are unable to entertain your request, we will provide you with the reason for refusal and inform you of any exceptions relied upon.</strong></p>
			<p class="content-subtitle">Anti-Spam policy:</p>
			<p>Airo Digital Labs recognizes the receipt, transmission or distribution of spam emails (i.e. unsolicited bulk emails) as a major concern and has taken reasonable measures to minimize the transmission and effect of spam emails in our computing environment. All emails received by Airo Digital Labs are subject to spam check. Any email identified as spam will be rejected with sufficient information to the sender for taking necessary action. With this measure, along with other technical spam reduction measures, Airo Digital Labs hopes to minimize the effect of spam emails. Airo Digital Labs reserves the right to reject and/or report any suspicious spam emails, to the authorities concerned, for necessary action.</p> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s4['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s4['content']; ?>
<!-- 			<p>AiRo Digital Labs has implemented reasonable and adequate physical, technical and administrative security measures to protect personal information from loss, misuse, alteration or destruction.</p>
			<p>AiRo Digital Labs discloses information to third parties only for legitimate purposes such as our service providers and agents who are bound to maintain the confidentiality of personal information and may not use the information for any unauthorized purpose. AiRo Digital Labs will ensure through formally executed contracts that the service providers are committed to “same level of data protection” as applicable data protection laws and regulations.</p>
			<p>Further, AiRo Digital Labs may make disclosures to law enforcement authorities or regulatory bodies subject to applicable law.</p>
			<p>AiRo Digital Labs will take reasonable steps to ensure that all dealings in Personal Information, shall</p>
			<ul>
				<li>be processed fairly & lawfully;</li>
				<li>be obtained only with the consent of the information provider;</li>
				<li>be collected, only when: - the information is collected for a lawful purpose connected with a function or activity of AiRo Digital Labs; and - the collection of the sensitive personal data or information is considered necessary for that purpose.</li>
				<li>be available for review by the information provider, as and when requested.</li>
				<li>be kept secure against unauthorized or unlawful processing and against accidental loss, destruction or damage, as per the prescribed standards.</li>
			</ul> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s5['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s5['content']; ?>
<!-- 			<p class="content-subtitle">
				Data Subjects rights with respect to your personal information:
			</p>
			<p>We respect your right to be informed, access, correct, request deletion or request restriction, portability, objection, and rights in relation to automated decision making and profiling, in our usage of your personal information as required by applicable law. We also take steps to ensure that the personal information we collect is accurate and up to date.</p> 
			<ul>
				<li>You have the right to know what personal information we maintain about you</li>
				<li> We will provide you with a copy of your personal information in a structured, commonly used and machine-readable format on request</li>
				<li>If your personal information is incorrect or incomplete, you have the right to ask us to update it • You have the right to object to our processing of your personal information</li>
				<li>You can also ask us to delete or restrict how we use your personal information, but this right is determined by applicable law and may impact your access to some of our services</li>
				<li> You can have the right to access your personal information</li>
				<li>You have a right to object to processing of your personal information where it is so conducted by automated means and involves any kind of decision-making</li>
			</ul> 
			<p class="content-subtitle">Right to opt out</p>
			<p>AiRo Digital Labs respects your privacy considerations and hence provides an option to you, to not provide the data or information sought to be collected. Further, you can also withdraw your consent which was earlier given to AiRo Digital Labs, and the same must be communicated to AiRo Digital Labs in writing.</p> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s6['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s6['content']; ?>
<!-- 			<p>You have a right to request access to your personal information. You may send us a request for access.</p>
			<p>You also have the right to correct any inaccuracies in your personal information. In case at your request, AiRo Digital LabsAiRo Digital Labs creates your account with the AiRo Digital Labs Site or web portal, this can usually be done through the appropriate “your account” or “your profile” section on the website Otherwise, you can send us a request to rectify your data by writing to us at <a href="mailto:legal@airodigitallabs.com" target="_blank"></a>legal@airodigitallabs.com</p>
			<p>Further, you have the option to file a complaint for suspected or actual violations of your data protection rights with the relevant supervisory authority.</p> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s7['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s7['content']; ?>
<!-- 			<p>We will retain your personal information for as long as necessary to provide the services you have requested, or for other essential purposes such as performance of a contract, complying with our legal obligations, resolving disputes, and enforcing our policies.</p> -->
		</div>
	</div>
</section>

<section class="privacy-statement">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s8['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s8['content']; ?>
<!-- 			<p>If your information is submitted to us via our website or email when applying for a position with our company, the information will be used to consider your application. We may retain your information for any period of time. This information may be shared with other companies for the purpose of evaluating your qualifications for the particular position or other available positions, as well as with third-party service providers retained by us to collect, maintain and analyze candidate submissions for job postings.</p> -->
		</div>
	</div>
</section>

<section class="contact-sec">
	<div class="container">
		<div class="privacy-subtitle">
			<h2><?php echo $s9['title']; ?></h2>			
		</div>
		<div class="privacy-content">
			<?php echo $s9['content']; ?>
<!-- 			<p>If you have any queries relating to the processing/ usage of information provided by you or AiRo Digital Labs’s Privacy Statement, you may email the Data Protection Officer (DPO) at legal@airodigitallabs.com or write to us at the following address.</p>
			<p><strong>AiRo Digital Labs, LLC</strong></p> 
			<p><strong>Email: <a href="mailto:marketing@airodigitallabs.com" target="_blank">marketing@airodigitallabs.com</a> | Address: 1755 Park St, 200, Naperville, Illinois 60563, US</strong></p>
			<p class="content-subtitle">Effective Date:</p>
			<p>
				This Privacy Statement is effective from July 3rd, 2019 and it supersedes all existing policies on the subject matter.
			</p>
			<p class="content-subtitle">Changes to this Privacy Statement:</p>
			<p>
				Please note that this Privacy Statement may be subject to change from time to time. The revised Privacy Statement will accordingly be published on this page. We will not reduce your rights under this Privacy Statement without your explicit consent. Please regularly check this Privacy Statement to ensure you are aware of the latest updates with respect to the same.</p>
			<p>
				<strong>This Privacy Statement was last updated on July 1st, 2024</strong>
			</p> -->
		</div>
	</div>
</section>

<div class="container">
	<div class="sec-gap"></div>
</div>

<?php get_footer(); ?>