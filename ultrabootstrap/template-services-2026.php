<?php
   /**
    * Template Name: Services Templates 2026
    */
   get_header();
   global $post;	  
   $PageID = get_the_ID();

    /* ACF Custom Fields Display */
    $GetPageTitle = get_field('page_banner_title', $PageID);
    $GetShortContent = get_field('page_banner_short_description', $PageID);
    $bgImage = get_field('page_banner_background', $PageID);
    /* ACF Custom Fields Display End */
    if($GetPageTitle=="")
    {
    $PageTitle = get_the_title();
    }
    else
    {
    $PageTitle = $GetPageTitle;
    }
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom/service-style.css"/>
<div class="land-banner-trans-menu-sec" style="background-image:url('<?php echo $bgImage; ?>');">
   <div class="container common-height">
      <div class="row">
         <div class="col-12 col-md-7 col-sm-7 main-top-cont main-top-erp-cont aos-init" data-aos="fade-left" data-aos-delay="600">
             <h1 class="main-head-bus-erp"><?php echo $PageTitle; ?></h1>
             <div class="sm white-text"><?php echo $GetShortContent; ?></div>
             <div class="mt-4 pt-2">
               <a class="btn btn-primary" data-toggle="modal" data-target="#provideDetailModal">Contact Us<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
         </div>
         <div class="col-12 col-md-5 col-sm-5 main-top-cont-right aos-init" data-aos="fade-right" data-aos-delay="700">
            <div class="erp-banner-right-demo-form">
               <h3 class="main-head-bus-erp">Talk to Us to Learn More</h3>
               <?php echo do_shortcode('[contact-form-7 id="3553" title="Header Banner Right Side Form"]'); ?>               
            </div>
         </div>
      </div>
   </div>
 </div>
 <!-- Page Content -->
<div class="home-modal-wrapper">
   <!-- Hero Section -->
  <section class="eair-section">
    <div class="eair-container">
        <div class="eair-panel eair-left eair-animate aos-animate" style="background-color:#0D004A;">
          <h2><span class="eair-icon"><img draggable="false" role="img" class="emoji" alt="🧩" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f9e9.svg"></span> Without eAIR: Scattered Initiatives</h2>
          <div style="display:grid; grid-template-columns: 1fr 1fr; gap:15px;">
              <ul class="eair-list">
                <li>Multiple disconnected AI projects</li>
                <li>No clear ROI or accountability</li>
                <li>Competitors building systematic advantage</li>
                <li><strong>60–70% of AI pilots fail</strong></li>
              </ul>
          </div>
        </div>
        <div class="eair-panel eair-right eair-animate aos-animate" style="transition-delay: 0.15s;  background-color:#0A4C73;">
          <h2>With Airo eAIR: Strategic Clarity <span class="eair-icon"><img draggable="false" role="img" class="emoji" alt="♟️" src="https://s.w.org/images/core/emoji/17.0.2/svg/265f.svg"></span></h2>
          <ul class="eair-list" style="float:left;">
              <ul>
                <li>Unified strategy aligned to business goals</li>
                <li>Prioritized use cases with ROI models</li>
                <li>Phased execution with clear metrics</li>
              </ul>
          </ul>
        </div>
        <div class="eair-circle">
          <p><b>eAIR</b> <span style="color:#0D004A;"><strong>is your AI strategy &amp; execution blueprint that aligns your organization,
              prioritizes high-impact use cases and evolves you from scattered pilots
              to autonomous, intelligent operations.</strong></span>
          </p>
        </div>
        <div class="eair-panel eair-left eair-animate aos-animate" style="transition-delay: 0.3s; background-color:#0A4C73;">
          <h2><span class="eair-icon"><img draggable="false" role="img" class="emoji" alt="📈" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f4c8.svg"></span>What's Included in Your eAIR</h2>
          <div style="display:grid; grid-template-columns: 1fr 1fr; gap:15px;">
              <ul class="eair-list">
                <ul>
                    <li>AI Maturity Assessment</li>
                    <li>Use Case Prioritization</li>
                    <li>Technology &amp; Cloud Roadmap</li>
                    <li>Governance &amp; Risk Framework</li>
                    <li>Talent &amp; Upskilling Plan</li>
                    <li>Innovation Pipeline</li>
                </ul>
              </ul>
          </div>
        </div>
        <div class="eair-panel eair-right eair-animate aos-animate" style="transition-delay: 0.45s;background-color:#0D004A;">
          <h2>Where You'll Stand in 5 Years? <span class="eair-icon"><img draggable="false" role="img" class="emoji" alt="🏁" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f3c1.svg"></span></h2>
          <table class="eair-table">
              <tbody>
                <tr>
                    <th></th>
                    <th>Year 1</th>
                    <th>Year 3</th>
                    <th>Year 5</th>
                </tr>
                <tr>
                    <td>No eAIR</td>
                    <td>Exploring</td>
                    <td>Struggling</td>
                    <td>Irrelevant</td>
                </tr>
                <tr>
                    <td>With eAIR</td>
                    <td>Designing</td>
                    <td>Scaling</td>
                    <td>Leading</td>
                </tr>
              </tbody>
          </table>
        </div>
    </div>
  </section>
  <section class="section-wrapper">
    <div class="container common-height">
      <!-- Intro -->
      <div class="aos-init" data-aos="fade-up">
          <h3 class="section-head">From fragmented AI initiatives to enterprise-ready AI roadmap</h3>
          <p>Transform your enterprise with real-time insights, automated workflows, and the power of the cloud. Airo is your dedicated Enterprise AI Partner for seamless transitions and sustained growth.</p>
      </div>
      <div class="mt-5 mb-5 aos-init" data-aos="fade-up">
        <hr>
      </div>
      <!-- Why Choose Airo -->
      <div class="mb-4 text-center aos-init" data-aos="fade-up" data-aos-delay="200">
          <h2 class="section-head">Why Choose Airo as Your Enterprise AI Partner?</h2>
          <p>Choosing the right partner is just as critical as choosing the right software. At Airo, we don’t just implement technology; we architect business success.</p>
      </div>
      <div class="row">
        <div class="col-sm-4 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-bg-style"><img decoding="async" class="" src="https://staging.airolabs.ai/wp-content/uploads/2026/02/20-years-of-ERP-mastery.png" alt="20+ Years of Excellence" width="48" height="42"></div>
          <div class="icon-text-item-cont entry-content">
            <h4 class="orange-text">20+ Years of Excellence</h4>
            <p>Decades of experience in IT and business support services.</p>
          </div>
        </div>
        <div class="col-sm-4 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-bg-style"><img decoding="async" class="" src="https://staging.airolabs.ai/wp-content/uploads/2026/02/holistic-cloud-migration.png" alt="20+ Years of Excellence" width="48" height="42"></div>
          <div class="icon-text-item-cont entry-content">
            <h4 class="orange-text">Certified Expertise</h4>
            <p>200+ Enterprise AI consultants and experts who understand your industry’s unique DNA.</p>
          </div>
        </div>
        <div class="col-sm-4 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3630" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/Div-Icon.png" alt="" width="49" height="49"></div>
          <div class="icon-text-item-cont entry-content">
            <h4 class="orange-text">Proven Track Record</h4>
            <p>Successfully delivered <strong>350+ projects</strong> for clients ranging from startups to <strong>15+ Fortune 500 companies.</strong></p>
          </div>
        </div>
        <div class="col-sm-4 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3628" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/Div-Icon-2.png" alt="" width="49" height="49"></div>
          <div class="icon-text-item-cont entry-content">
            <h4 class="orange-text">Security &amp; Compliance</h4>
            <p>We are <strong>ISO 27001 and SOC2 certified</strong>, ensuring your enterprise data remains secure during and after migration.</p>
          </div>
        </div>
        <div class="col-sm-4 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-4215" src="https://staging.airolabs.ai/wp-content/uploads/2025/07/icn_Submission-Guidelines-Evaluation_-1.svg" alt=""></div>
          <div class="icon-text-item-cont entry-content">
            <h4 class="orange-text">Global Reach, Local Support</h4>
            <p>Serving clients across 5 countries with dedicated 24/7 support.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rise with Enterprise AI -->
  <section class="section-wrapper sec-even-bg">
    <div class="container">
      <div class="mb-4 text-center aos-init" data-aos="fade-up">
          <h2 class="section-head">Empowering Enterprises: Rise with Enterprise AI</h2>
          <p><strong>Tailored Transformation for Large Enterprises</strong></p>
      </div>
      <div class="row">
        <div class="col-sm-4 aos-init" data-aos="fade-right" data-aos-delay="100">
          <div class="res-sm-md-20 shade-img left">
            <img fetchpriority="high" decoding="async" class="img-fluid lft-img" src="https://staging.airolabs.ai/wp-content/uploads/2025/07/img_Worker-Safety-Efficiency.png" alt="Empowering Enterprises: Rise with Airo" width="500" height="520">
          </div>
        </div>
        <div class="col-sm-8 aos-init" data-aos="fade-left" data-aos-delay="100">
          <p><strong>Rise with Enterprise AI</strong> is a comprehensive “Business Transformation as a Service” (BTaaS) package designed for organizations with complex legacy systems. As your <strong>Airo Partner</strong>, Airo helps you consolidate your infrastructure into a single, managed cloud subscription.</p>
          <ul class="lft-icon-list">
            <li class="aos-init " data-aos="fade-left" data-aos-duration="600" data-aos-delay="600">
              <img decoding="async" class="alignnone size-full wp-image-3657" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-3-13.svg" alt="">
              <div class="lft-icon-cont">
                <h5>Holistic Cloud Migration:</h5>
                <p class="mb-0">Move to a private or public cloud with a single contract for software and infrastructure.</p>
              </div>
            </li>
            <li class="aos-init " data-aos="fade-left" data-aos-duration="600" data-aos-delay="700">
              <img decoding="async" class="alignnone size-full wp-image-3656" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-2-13.svg" alt="">
              <div class="lft-icon-cont">
                <h5>Business Process Intelligence:</h5>
                <p class="mb-0">Analyze and optimize your existing workflows to ensure your new system is leaner and faster.</p>
              </div>
            </li>
            <li class="aos-init " data-aos="fade-left" data-aos-duration="600" data-aos-delay="800">
              <img decoding="async" class="alignnone size-full wp-image-3851" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-1-1.svg" alt="">
              <div class="lft-icon-cont">
                <h5>BTP Integration:</h5><p class="mb-0">Leverage the Enterprise AI Business Technology Platform for advanced AI, machine learning, and custom application development.</p>
              </div>
            </li>
          </ul>
          <div class="erp-btn-set aos-init" data-aos="zoom-in-down" data-aos-delay="400">
            <a class="btn btn-primary" href="https://staging.enoahisolution.com/erp/sap-s4hana/rise-with-sap/" rel="nofollow noopener" target="_blank">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Grow with Enterprise AI -->
  <section class="section-wrapper">
    <div class="container">
      <div class="mb-4 text-center aos-init" data-aos="fade-up">
          <h2 class="section-head">Accelerating Growth: Grow with Enterprise AI</h2>
          <p><strong>The Fast Track for Mid-Market Leaders</strong></p>
      </div>
      <div class="row">
        <div class="col-sm-8 aos-init" data-aos="fade-left" data-aos-delay="100">
          <ul class="lft-icon-list">
            <li class="aos-init aos-animate" data-aos="fade-left" data-aos-duration="600" data-aos-delay="600"><img decoding="async" class="img-fluid entered lazyloaded" src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/rapid-deployment.png" alt="Rapid Deployment" width="56" height="56" data-lazy-src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/rapid-deployment.png" data-ll-status="loaded"><noscript><img decoding="async" class="img-fluid" src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/rapid-deployment.png" alt="Rapid Deployment" width="56" height="56" /></noscript>
            <div class="lft-icon-cont">
            <h5>Rapid Deployment:</h5>
            <p class="mb-0">Use SAP’s “Activate” methodology for a predictable, speedy implementation.</p>
            </div>
            </li>
            <li class="aos-init aos-animate" data-aos="fade-left" data-aos-duration="600" data-aos-delay="700"><img decoding="async" class="img-fluid entered lazyloaded" src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/public-cloud-efficiency.png" alt="Public Cloud Efficiency" width="56" height="56" data-lazy-src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/public-cloud-efficiency.png" data-ll-status="loaded"><noscript><img decoding="async" class="img-fluid" src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/public-cloud-efficiency.png" alt="Public Cloud Efficiency" width="56" height="56" /></noscript>
            <div class="lft-icon-cont">
            <h5>Public Cloud Efficiency:</h5>
            <p class="mb-0">Benefit from automatic updates and patches fully managed by SAP, reducing your IT overhead.</p>
            </div>
            </li>
            <li class="aos-init aos-animate" data-aos="fade-left" data-aos-duration="600" data-aos-delay="800"><img decoding="async" class="img-fluid entered lazyloaded" src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/pre-configured-best-practices.png" alt="Pre-configured Best Practices" width="56" height="56" data-lazy-src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/pre-configured-best-practices.png" data-ll-status="loaded"><noscript><img decoding="async" class="img-fluid" src="https://enoahisolution.com/erp/wp-content/uploads/2026/01/pre-configured-best-practices.png" alt="Pre-configured Best Practices" width="56" height="56" /></noscript>
            <div class="lft-icon-cont">
            <h5>Pre-configured Best Practices:</h5>
            <p class="mb-0">Start with industry-specific templates that allow you to scale instantly without complex custom coding.</p>
            </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-4 aos-init" data-aos="fade-right" data-aos-delay="100">
          <div class="res-sm-md-20 shade-img right">
            <img decoding="async" class="img-fluid lft-img" src="https://staging.airolabs.ai/wp-content/uploads/2025/07/img_Worker-Safety-Efficiency.png" alt="Accelerating Growth: Grow with Airo" width="500" height="520">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="section-wrapper sec-even-bg">
    <div class="container common-height">
      <div class="mb-4 text-center aos-init" data-aos="fade-up">
          <h2 class="section-head">End-to-End Enterprise AI Services by Airo</h2>
          <p><strong>Our service portfolio covers every stage of your ERP lifecycle:</strong></p>
      </div>
      <div class="row cont-box-item-sec icon-head-box-sec aos-init" data-aos="flip-left" data-aos-duration="600" data-aos-delay="200">
        <div class="col-md-3 col-sm-4 col-6 icon-head-box-item btm-btn aos-init" data-aos="zoom-in-left" data-aos-duration="600" data-aos-delay="300">
            <p><img decoding="async" class="img-fluid" src="https://staging.airolabs.ai/wp-content/uploads/2026/02/20-years-of-ERP-mastery.png" alt="Strategic Consulting &amp; Assessment" width="66" height="66"></p>
            <h4>Strategic Consulting &amp; Assessment</h4>
            <p>We evaluate your current IT landscape and create a clear roadmap for your journey, whether you prefer a Greenfield (new) or Brownfield (migration) approach.</p>
            <div class="erp-btn-set center mt-0 sm"><a class="btn btn-primary" href="#">Read More</a></div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 icon-head-box-item btm-btn even aos-init" data-aos="zoom-in-left" data-aos-duration="600" data-aos-delay="400">
            <h4><img decoding="async" class="alignnone size-full wp-image-4205" src="https://staging.airolabs.ai/wp-content/uploads/2025/07/icn_culture-in-action_4.svg" alt=""></h4>
            <h4>Implementation &amp; Migration</h4>
            <p>Seamlessly transition from Enterprise AI ECC or legacy systems. We handle data cleansing, configuration, and testing to ensure minimal disruption to your daily operations.</p>
            <div class="erp-btn-set center mt-0 sm"><a class="btn btn-primary" href="#">Read More</a></div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 icon-head-box-item btm-btn aos-init" data-aos="zoom-in-right" data-aos-duration="600" data-aos-delay="500">
            <h4><img decoding="async" class="alignnone size-full wp-image-4211" src="https://staging.airolabs.ai/wp-content/uploads/2025/07/icn_Team-Essentials_2.svg" alt=""></h4>
            <h4>Customization &amp; Integration</h4>
            <p>Every business is unique. We tailor functionalities and integrate them with third-party tools to align perfectly with your business processes.</p>
            <div class="erp-btn-set center mt-0 sm"><a class="btn btn-primary" href="#">Read More</a></div>
        </div>
        <div class="col-md-3 col-sm-4 col-6 icon-head-box-item btm-btn even aos-init" data-aos="zoom-in-right" data-aos-duration="600" data-aos-delay="600">
            <h4><img decoding="async" class="alignnone size-full wp-image-4215" src="https://staging.airolabs.ai/wp-content/uploads/2025/07/icn_Submission-Guidelines-Evaluation_-1.svg" alt=""></h4>
            <h4>Managed Support Services</h4>
            <p>Our partnership doesn’t end at go-live. We provide ongoing application management, user training, and 24/7 technical support to maximize your ROI.</p>
            <div class="erp-btn-set center mt-0 sm"><a class="btn btn-primary" href="#">Read More</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Features -->
  <section class="section-wrapper">
    <div class="container common-height">
      <div class="mb-4 text-center aos-init" data-aos="fade-up">
        <h2 class="section-head">Key Features and Benefits of Enterprise AI</h2>
        <p>Enterprise AI is the next-generation ERP suite built on the advanced in-memory platform of. It redefines business processes with its intelligent capabilities, real-time analytics, and simplified data model. By combining digital technologies such as artificial intelligence (AI), machine learning (ML), and the Internet of Things (IoT), Enterprise AI enables organizations to optimize operations, make informed decisions, and drive innovation.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3653" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-5-6.svg" alt=""></div>
          <div class="icon-text-item-cont entry-content">
            <h4 class="orange-text">Real-Time Analytics for Informed Decisions</h4>
            <p>Gain instant access to real-time data and analytics with Enterprise AI S/4HANA, allowing organizations to make quick, informed decisions. With the power of Enterprise AI HANA’s in-memory computing, data processes faster, eliminating batch jobs and accelerating critical business operations.</p>
          </div>
        </div>
        <div class="col-sm-6 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="200">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3654" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-27.svg" alt=""></div>
          <div class="icon-text-item-cont">
            <h4 class="orange-text">Efficient Data Handling with a Simplified Model</h4>
            <p>Enterprise AI S/4HANA’s simplified data model reduces redundancy and enhances processing efficiency. By removing aggregate tables and indices, this model speeds up data loading, improves system performance, and reduces storage needs, enabling faster, more streamlined operations.</p>
          </div>
        </div>
        <div class="col-sm-6 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="300">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3603" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/3003759b-e859-405c-b4bc-f7ccd831251e.png" alt="" width="49" height="49"></div>
          <div class="icon-text-item-cont">
            <h4 class="orange-text">Automated, Streamlined Processes Across Functions</h4>
            <p>Enterprise AI empowers businesses with intelligent automation across finance, procurement, sales, manufacturing, and supply chain functions. By minimizing manual tasks and using smart algorithms, organizations achieve operational excellence and higher productivity.</p>
          </div>
        </div>
        <div class="col-sm-6 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="400">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3602" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/97f92e29-f2fb-48db-9cd2-3b9acc378df7.png" alt="" width="49" height="49"></div>
          <div class="icon-text-item-cont">
            <h4 class="orange-text">Advanced Analytics and Interactive Reporting</h4>
            <p>Embedded analytics provide meaningful insights directly within Enterprise AI S/4HANA, enabling real-time reporting and interactive dashboards. Organizations can monitor KPIs, identify trends, and uncover opportunities for growth, helping them stay proactive in a competitive market.</p>
          </div>
        </div>
        <div class="col-sm-6 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="500">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3559" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-1.svg" alt=""></div>
          <div class="icon-text-item-cont">
          <h4 class="orange-text">Foundation for Digital Transformation</h4>
          <p>Enterprise AI is designed as a core platform for digital transformation. By integrating with Enterprise AI solutions and third-party applications, businesses can leverage AI, machine learning (ML), and IoT to foster innovation, automate processes, and develop new business models.</p>
          </div>
        </div>
        <div class="col-sm-6 icon-text-item item-text-high aos-init" data-aos="fade-left" data-aos-delay="600">
          <div class="icon-bg-style"><img decoding="async" class="alignnone size-full wp-image-3557" src="https://staging.airolabs.ai/wp-content/uploads/2025/03/div-icn-3.svg" alt=""></div>
          <div class="icon-text-item-cont">
          <h4 class="orange-text">Enhanced User Experience with Enterprise AI Fiori UX</h4>
          <p>The Enterprise AI interface, built on Enterprise AI Fiori, offers a modern, intuitive experience across devices. This consistent, personalized UX boosts user adoption and makes it easier for employees to navigate and perform tasks efficiently.</p>
          </div>
        </div>
      </div>
      <div class="aos-init" data-aos="fade-down"  data-aos-delay="700">
        <p>Enterprise AI is a dynamic ERP solution designed for today’s business needs, offering real-time insights, streamlined processes, and support for cutting-edge digital transformation. At Airo, we are committed to delivering tailored Enterprise AI solutions that drive growth, innovation, and efficiency. Contact us today to unlock the full potential of Enterprise AI’s intelligent ERP solution for your business.</p>
      </div>
      <div class="erp-btn-set center aos-init" data-aos="zoom-in-down" data-aos-delay="800">
        <a class="btn btn-primary" data-toggle="modal" data-target="#provideDetailModal">Give a call</a>
        <a class="btn btn-secondary" data-toggle="modal" data-target="#provideDetailModal">Talk to Us</a>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>