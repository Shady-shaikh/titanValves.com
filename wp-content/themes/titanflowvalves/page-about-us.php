<?php
/**
 * Template Name: About Us Page
 * Description: About Us template preserving 100% exact copy, vision/mission, 6 pillars, and exports showcase.
 * Version: 2.0.0
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="titan-page-header">
        <div class="titan-container">
            <h1 class="titan-page-header-title">About Us</h1>
            <div class="titan-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="titan-breadcrumb-sep"><i class="fa-solid fa-chevron-right fa-xs"></i></span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="titan-section">
        <div class="titan-container">
            <div style="max-width: 960px; margin: 0 auto 3.5rem; text-align: center;">
                <p style="font-size: 1.25rem; font-weight: 500; color: var(--titan-dark-800); line-height: 1.7;">
                    Titan Flow Valves is a leading manufacturer, supplier and exporter of industrial valves, delivering high-performance solutions to the power, oil &amp; gas, chemical, and infrastructure sectors with precision and reliability.
                </p>
            </div>

            <div style="text-align: center; margin-bottom: 4rem;">
                <img 
                    src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/01/About-us-Titan-Flow-Valves-3.png'); ?>" 
                    alt="Valves" 
                    style="border-radius: var(--titan-radius-lg); box-shadow: var(--titan-shadow-xl); max-width: 1000px; margin: 0 auto; width: 100%;"
                    srcset="https://i0.wp.com/titanflowvalves.com/wp-content/uploads/2026/01/About-us-Titan-Flow-Valves-3.png?resize=1024%2C683&amp;ssl=1 1024w, https://i0.wp.com/titanflowvalves.com/wp-content/uploads/2026/01/About-us-Titan-Flow-Valves-3.png?w=1536&amp;ssl=1 1536w"
                    sizes="(max-width: 1000px) 100vw, 1000px"
                    loading="lazy"
                />
            </div>

            <!-- Vision & Mission Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem; margin-bottom: 5rem;">
                <div class="titan-feature-card" style="padding: 2.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                        <div class="titan-info-icon" style="width: 48px; height: 48px;">
                            <i class="fa-solid fa-eye fa-lg"></i>
                        </div>
                        <h2 class="titan-feature-title" style="margin-bottom: 0; font-size: 1.6rem;">Our Vision</h2>
                    </div>
                    <p style="font-size: 0.96rem; line-height: 1.75; color: var(--titan-gray-700); text-align: justify;">
                        Our vision is to be recognized as a trusted global leader in industrial valve solutions, known for our technological excellence, customer-centric approach, and sustainable growth. We aim to drive progress in the flow control industry by continuously improving our products, processes, and partnerships. Our commitment extends beyond mere product development; we strive to foster innovation at every level, ensuring that our solutions not only meet the current demands but also anticipate the future needs of our clients. By investing in research and development, we seek to incorporate advanced technologies that enhance efficiency and reliability in our offerings. Furthermore, we believe in building strong, lasting relationships with our stakeholders, which includes engaging with our employees, customers, and the communities we serve, all while adhering to the highest ethical standards. Through this comprehensive vision, we aspire to contribute positively to our industry and society at large, setting benchmarks for excellence that inspire others.
                    </p>
                </div>

                <div class="titan-feature-card" style="padding: 2.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                        <div class="titan-info-icon" style="width: 48px; height: 48px;">
                            <i class="fa-solid fa-bullseye fa-lg"></i>
                        </div>
                        <h2 class="titan-feature-title" style="margin-bottom: 0; font-size: 1.6rem;">Our mission</h2>
                    </div>
                    <p style="font-size: 0.96rem; line-height: 1.75; color: var(--titan-gray-700); text-align: justify;">
                        At <strong>Titan Flow Valves</strong>, our mission is to deliver world-class flow control solutions through precision engineering, innovation, and a commitment to uncompromising quality. We strive to empower industries by manufacturing reliable, high-performance valves that meet global standards and exceed customer expectations. Our dedicated team of experts continually explores the latest advancements in technology and materials to offer products that not only enhance efficiency but also promote sustainability across various sectors. By prioritizing customer feedback and adapting to the ever-evolving market demands, we aim to build lasting partnerships based on trust and mutual success, positioning ourselves as a leader in the flow control industry. We are passionate about providing exceptional service and support throughout the entire process, ensuring that our clients receive tailored solutions that drive their operational excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Titan Flow Valves (6 Core Pillars) -->
    <section class="titan-section titan-section-alt">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">Pillars of Excellence</div>
                <h2 class="titan-section-title">WHy Choose Titan Flow valves ?</h2>
            </div>

            <div class="titan-pillars-grid">
                <!-- Pillar 1 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Industry_Expertise-_Titan_Flow_Valves-removebg-preview.png'); ?>" alt="Industry Expertise" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">1. INDUSTRY EXPERTISE</h3>
                    <p class="titan-pillar-desc">
                        At Titan Flow valves, our expertise isn’t just in manufacturing; it’s in mastering the complexities of fluid dynamics across the world’s most demanding industries. For decades, we have engineered <strong>high-performance pipeline strainers, check valves, and flow control products</strong> that serve as the backbone of critical infrastructure
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Global-Standard-3.png'); ?>" alt="Global Standards" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">2. GLOBAL STANDARDS</h3>
                    <p class="titan-pillar-desc">
                        At Titan Flow valves, our commitment to quality is backed by rigorous adherence to international engineering codes and safety standards. We ensure that every check valve, strainer, and butterfly valve we manufacture meets the precise requirements of global regulatory bodies, providing our clients with peace of mind in even the most critical applications.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Quick-Delivery-Titan-Flow-Valves.png'); ?>" alt="Quick Delivery" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">3.Quick Delivery</h3>
                    <p class="titan-pillar-desc">
                        In the titan flow valves, we know that every hour of system downtime translates to lost revenue. That’s why Titan Flow Control has built one of the most efficient distribution and fulfillment networks in the industry. We don’t just manufacture high-quality valves; we ensure they are on-site exactly when you need them.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Technical-Support-1.png'); ?>" alt="Technical Support" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">4.Technical Support</h3>
                    <p class="titan-pillar-desc">
                        At Titan Flow Control, we believe that providing the world’s best flow control products is only half the job. The other half is ensuring those products are perfectly integrated into your specific system. Our team of veteran engineers and technical specialists is dedicated to providing the deep-domain expertise you need to ensure safety, efficiency, and long-term reliability.
                    </p>
                </div>

                <!-- Pillar 5 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Competitive_Pricing-Titan_Flow_Valves-removebg-preview.png'); ?>" alt="Competitive Pricing" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">5. COMPETITIVE PRICING</h3>
                    <p class="titan-pillar-desc">
                        At Titan Flow valves, our commitment to quality is backed by rigorous adherence to international engineering codes and safety standards. We ensure that every check valve, strainer, and butterfly valve we manufacture meets the precise requirements of global regulatory bodies, providing our clients with peace of mind in even the most critical applications.
                    </p>
                </div>

                <!-- Pillar 6 -->
                <div class="titan-pillar-card">
                    <div class="titan-pillar-icon-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Customization-Titan_Flow_Valve-removebg-preview.png'); ?>" alt="Customization" loading="lazy">
                    </div>
                    <h3 class="titan-pillar-title">6.CustomizATION</h3>
                    <p class="titan-pillar-desc">
                        In the titan flow valves, we know that every hour of system downtime translates to lost revenue. That’s why Titan Flow Control has built one of the most efficient distribution and fulfillment networks in the industry. We don’t just manufacture high-quality valves; we ensure they are on-site exactly when you need them.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Exports Section -->
    <section class="titan-section">
        <div class="titan-container">
            <div class="titan-section-header text-center">
                <div class="titan-badge">International Reach</div>
                <h2 class="titan-section-title">We exports</h2>
                <p class="titan-section-subtitle" style="max-width: 880px; margin: 0 auto;">
                    We are equipped to serve clients across the globe, offering tailored solutions that cater to diverse needs and preferences. Our commitment to quality and reliability enables us to build long-term partnerships in international markets, fostering mutual growth and understanding. By leveraging our extensive network and resources, we ensure that our clients receive exceptional service, timely support, and innovative strategies that drive success in their respective industries. As we continue to expand our footprint, we remain dedicated to cultivating relationships that are grounded in trust and excellence.
                </p>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <img 
                    src="<?php echo esc_url(get_template_directory_uri() . '/../../uploads/2026/02/Industrial-Valves-Supplier-in-USA-1.png'); ?>" 
                    alt="Industrial Valves Supplier in USA" 
                    style="border-radius: var(--titan-radius-lg); box-shadow: var(--titan-shadow-lg); max-width: 900px; width: 100%; margin: 0 auto;"
                    loading="lazy"
                />
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
