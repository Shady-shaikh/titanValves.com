<?php
/**
 * Zero-Database Email-Only Contact Form Component
 * Executive Industrial RFQ Portal
 *
 * @package TitanFlowValves
 */
?>
<div class="titan-contact-form-card">
    <div class="titan-badge" style="margin-bottom: 0.75rem;">Direct Engineering Desk</div>
    <h2>Request a Technical Quotation</h2>
    <p class="titan-form-desc">Fill out the form below with your required valve brand, type, and specifications. Our technical sales team will review and respond directly to your email.</p>

    <div id="titanFormAlert" class="titan-form-alert"></div>

    <form id="titanContactForm" class="titan-form" method="post" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>">
        <input type="hidden" name="action" value="titan_submit_contact">
        <input type="hidden" name="titan_nonce" value="<?php echo esc_attr(wp_create_nonce('titan_contact_nonce')); ?>">

        <!-- Anti-spam Honeypot -->
        <div class="titan-hp-field" aria-hidden="true">
            <label for="ak_hp_textarea">Leave this field empty</label>
            <input type="text" name="ak_hp_textarea" id="ak_hp_textarea" tabindex="-1" autocomplete="off">
        </div>

        <div class="titan-form-grid">
            <!-- 1. Full Name -->
            <div class="titan-form-group">
                <label for="g29-name" class="titan-form-label">
                    <span>Full Name</span>
                    <span class="req">*</span>
                </label>
                <input type="text" name="g29-name" id="g29-name" class="form-input" required placeholder="e.g. Rajesh Sharma / John Doe">
            </div>

            <!-- 2. Email Address -->
            <div class="titan-form-group">
                <label for="g29-email" class="titan-form-label">
                    <span>Work Email</span>
                    <span class="req">*</span>
                </label>
                <input type="email" name="g29-email" id="g29-email" class="form-input" required placeholder="name@company.com">
            </div>

            <!-- 3. Phone / Mobile -->
            <div class="titan-form-group">
                <label for="g29-phone" class="titan-form-label">
                    <span>Phone / WhatsApp</span>
                </label>
                <input type="tel" name="g29-phone" id="g29-phone" class="form-input" placeholder="+91 97695 97643">
            </div>

            <!-- 4. Select Brand -->
            <div class="titan-form-group">
                <label for="g29-selectbrand" class="titan-form-label">
                    <span>Required Brand</span>
                </label>
                <select name="g29-selectbrand" id="g29-selectbrand" class="form-select">
                    <option value="">-- Choose Valve Brand --</option>
                    <option value="KSB Valves">KSB Valves</option>
                    <option value="AUDCO Valves">AUDCO Valves</option>
                    <option value="FORBES MARSHALL">FORBES MARSHALL</option>
                    <option value="SPIRAX Valves">SPIRAX Valves</option>
                    <option value="UNIKLINGER Valves">UNIKLINGER Valves</option>
                    <option value="INTERVALVE Valves">INTERVALVE Valves</option>
                    <option value="KIRLOSKAR Valves">KIRLOSKAR Valves</option>
                    <option value="LEADER Valves">LEADER Valves</option>
                    <option value="BDK Valves">BDK Valves</option>
                    <option value="Other">Other / Custom OEM</option>
                </select>
            </div>

            <!-- 5. Select Power Tool -->
            <div class="titan-form-group">
                <label for="g29-selectpowertool" class="titan-form-label">
                    <span>Power Tools (Optional)</span>
                </label>
                <select name="g29-selectpowertool" id="g29-selectpowertool" class="form-select">
                    <option value="">-- Choose Power Tool (Optional) --</option>
                    <option value="Hydraulic Torque Wrenches">Hydraulic Torque Wrenches</option>
                    <option value="Battery Torque Wrenches">Battery Torque Wrenches</option>
                    <option value="Manual Torque Wrenches">Manual Torque Wrenches</option>
                    <option value="Flange Spreaders">Flange Spreaders</option>
                    <option value="Hydraulic Nut Splitters">Hydraulic Nut Splitters</option>
                    <option value="Cold Cutting Machines">Cold Cutting Machines</option>
                </select>
            </div>

            <!-- 6. Select Product Category -->
            <div class="titan-form-group">
                <label for="g29-selectproduct" class="titan-form-label">
                    <span>Product Category</span>
                </label>
                <select name="g29-selectproduct" id="g29-selectproduct" class="form-select">
                    <option value="">-- Choose Product Type --</option>
                    <option value="Gate Valves">Gate Valves</option>
                    <option value="Globe Valves">Globe Valves</option>
                    <option value="Check Valves">Check Valves</option>
                    <option value="Ball Valves">Ball Valves</option>
                    <option value="Butterfly Valves">Butterfly Valves</option>
                    <option value="Plug Valves">Plug Valves</option>
                    <option value="Strainer">Strainer</option>
                    <option value="Diaphragm Valve">Diaphragm Valve</option>
                    <option value="Piston Valve">Piston Valve</option>
                    <option value="SDNR Valve">SDNR Valve</option>
                    <option value="Safety Valves">Safety Valves</option>
                    <option value="Control Valves">Control Valves</option>
                    <option value="Air Valves">Air Valves</option>
                </select>
            </div>

            <!-- 7. Product Description & Technical Specs -->
            <div class="titan-form-group full-width">
                <label for="g29-productdescription" class="titan-form-label">
                    <span>Technical Requirements &amp; Quantity</span>
                    <span class="req">*</span>
                </label>
                <textarea name="g29-productdescription" id="g29-productdescription" class="form-textarea" required placeholder="Please specify sizes (e.g., 2&quot; to 24&quot;), pressure rating (Class 150/300/600/1500#), MOC (WCB, CF8M, Forged Steel), media/temperature, and quantity needed."></textarea>
            </div>
        </div>

        <button type="submit" id="titanSubmitBtn" class="btn btn-primary btn-lg" style="width: 100%;">
            <i class="fa-solid fa-paper-plane"></i> Submit Technical RFQ
        </button>
    </form>
</div>
