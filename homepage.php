<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecycleMate - Your Guide to Sustainable Recycling</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <a href="homepage.php" class="logo">
            <i class="fas fa-recycle"></i>
            <h1>RecycleMate</h1>
        </a>
        <div class="nav-links">
            <a href="homepage.php" class="active">Home</a>
            <a href="Aboutus.php">About</a>
            <a href="resources.php">Resources</a>
            <a href="contact.php">Contact</a>
        </div>
    </nav>
    
    <div class="main-container">
        <aside class="sidebar">
            <div class="recycling-category plastic" data-target="plastic-info">
                <i class="fas fa-wine-bottle" style="color: #2196F3;"></i>
                <div>
                    <h3>Plastic Recycling</h3>
                    <p>Learn about plastic types</p>
                </div>
            </div>
            <div class="recycling-category paper" data-target="paper-info">
                <i class="fas fa-newspaper" style="color: #FFC107;"></i>
                <div>
                    <h3>Paper & Cardboard</h3>
                    <p>How to recycle paper products</p>
                </div>
            </div>
            <div class="recycling-category glass" data-target="glass-info">
                <i class="fas fa-glass-martini-alt" style="color: #9C27B0;"></i>
                <div>
                    <h3>Glass Recycling</h3>
                    <p>Glass recycling guidelines</p>
                </div>
            </div>
            <div class="recycling-category metal" data-target="metal-info">
                <i class="fas fa-industry" style="color: #F44336;"></i>
                <div>
                    <h3>Metal Recycling</h3>
                    <p>Aluminum, steel and more</p>
                </div>
            </div>
            <div class="recycling-category electronics" data-target="electronics-info">
                <i class="fas fa-laptop" style="color: #4CAF50;"></i>
                <div>
                    <h3>E-Waste</h3>
                    <p>Electronics disposal</p>
                </div>
            </div>
        </aside>
        
        <main class="content-area">
            <section class="welcome-section">
                <h2>Welcome to RecycleMate</h2>
                <p>Your ultimate resource for learning about proper recycling practices and sustainable waste management. Explore our recycling guides or chat with our AI assistant to get instant answers to your recycling questions.</p>
                
                <div class="hero-image">
                    <img src="Image.jpg" alt="Recycling illustration">
                </div>
                
                <div class="statistics">
                    <div class="stat-item">
                        <div class="stat-number">91%</div>
                        <div class="stat-label">of plastic is not recycled</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">60%</div>
                        <div class="stat-label">of India's waste is recyclable</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">80%</div>
                        <div class="stat-label">less energy to recycle paper than make it new</div>
                    </div>
                </div>
                
                <div class="cta-buttons">
                    <a href="#" class="cta-button" id="show-chatbot">
                        <i class="fas fa-comments"></i> Chat with RecycleMate
                    </a>
                    <a href="Aboutus.php" class="cta-button">
                        <i class="fas fa-map-marker-alt"></i> Find Recycling Centers
                    </a>
                </div>
            </section>
            
            <!-- Plastic Info Section -->
            <section class="info-box" id="plastic-info">
                <h2><i class="fas fa-wine-bottle" style="color: #2196F3;"></i> Plastic Recycling Guide</h2>
                <p>Plastic recycling is crucial for reducing pollution and conserving resources. Different types of plastic require different recycling methods. Here's what you need to know:</p>
                
                <div class="recycling-types">
                    <div class="recycling-type">
                        <h3>#1 PET (Polyethylene Terephthalate)</h3>
                        <p>Used in: Water bottles, soda bottles, food containers</p>
                        <p>Recyclable: ✓ Widely accepted</p>
                        <p>Tips: Remove caps, rinse, and flatten</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>#2 HDPE (High-Density Polyethylene)</h3>
                        <p>Used in: Milk jugs, detergent bottles, shampoo bottles</p>
                        <p>Recyclable: ✓ Widely accepted</p>
                        <p>Tips: Rinse thoroughly to remove residue</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>#3 PVC (Polyvinyl Chloride)</h3>
                        <p>Used in: Pipes, window frames, wire insulation</p>
                        <p>Recyclable: ✗ Limited acceptance</p>
                        <p>Tips: Check with local facilities</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>#4 LDPE (Low-Density Polyethylene)</h3>
                        <p>Used in: Plastic bags, squeeze bottles, food wrap</p>
                        <p>Recyclable: ✓ At special collection points</p>
                        <p>Tips: Return bags to grocery store collection points</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>#5 PP (Polypropylene)</h3>
                        <p>Used in: Yogurt containers, medicine bottles, straws</p>
                        <p>Recyclable: ✓ Increasingly accepted</p>
                        <p>Tips: Check local guidelines</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>#6 PS (Polystyrene)</h3>
                        <p>Used in: Foam cups, takeout containers, packing peanuts</p>
                        <p>Recyclable: ✗ Rarely accepted</p>
                        <p>Tips: Look for specialized recycling programs</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>#7 Other</h3>
                        <p>Used in: Various products including bioplastics</p>
                        <p>Recyclable: ✗ Varies widely</p>
                        <p>Tips: Check manufacturer guidelines</p>
                    </div>
                </div>
                
                <h3>General Plastic Recycling Tips:</h3>
                <ul>
                    <li>Always clean and dry plastic containers before recycling</li>
                    <li>Remove all non-plastic components (labels are usually OK)</li>
                    <li>Check with your local recycling program about accepted plastics</li>
                    <li>Consider reducing plastic use with reusable alternatives</li>
                </ul>
            </section>
            
            <!-- Paper Info Section -->
            <section class="info-box" id="paper-info">
                <h2><i class="fas fa-newspaper" style="color: #FFC107;"></i> Paper & Cardboard Recycling</h2>
                <p>Paper is one of the most successfully recycled materials, with recycling rates over 60% in many countries. Proper paper recycling can save trees, water, and energy.</p>
                
                <div class="recycling-types">
                    <div class="recycling-type">
                        <h3>Cardboard Boxes</h3>
                        <p>Recyclable: ✓ Highly recyclable</p>
                        <p>Tips: Remove tape, flatten boxes, keep dry</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Newspapers & Magazines</h3>
                        <p>Recyclable: ✓ Easily recycled</p>
                        <p>Tips: Remove plastic wrapping, keep clean</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Office Paper</h3>
                        <p>Recyclable: ✓ Highly recyclable</p>
                        <p>Tips: Remove staples, paper clips and plastic folders</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Food-Contaminated Paper</h3>
                        <p>Recyclable: ✗ Not recyclable</p>
                        <p>Tips: Pizza boxes with grease stains should be composted</p>
                    </div>
                </div>
                
                <h3>Paper Recycling Tips:</h3>
                <ul>
                    <li>Keep paper dry and clean - contaminated paper reduces recyclability</li>
                    <li>Remove any non-paper attachments like plastic windows in envelopes</li>
                    <li>Shredded paper can sometimes be recycled but check local guidelines</li>
                    <li>Paper with foil or plastic coating (like some gift wrap) often cannot be recycled</li>
                </ul>
            </section>
            
            <!-- Glass Info Section -->
            <section class="info-box" id="glass-info">
                <h2><i class="fas fa-glass-martini-alt" style="color: #9C27B0;"></i> Glass Recycling</h2>
                <p>Glass is 100% recyclable and can be recycled endlessly without loss in quality or purity. Recycling glass reduces consumption of raw materials, extends the life of equipment, and saves energy.</p>
                
                <div class="recycling-types">
                    <div class="recycling-type">
                        <h3>Food Jars & Bottles</h3>
                        <p>Recyclable: ✓ Highly recyclable</p>
                        <p>Tips: Rinse thoroughly, remove lids and corks</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Colored Glass</h3>
                        <p>Recyclable: ✓ Recyclable but sometimes separated</p>
                        <p>Tips: Some programs require separation by color</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Window Glass</h3>
                        <p>Recyclable: ✗ Not usually recyclable in standard programs</p>
                        <p>Tips: Requires specialized recycling</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Drinking Glasses & Cookware</h3>
                        <p>Recyclable: ✗ Not recyclable in standard programs</p>
                        <p>Tips: Different melting point than container glass</p>
                    </div>
                </div>
                
                <h3>Glass Recycling Tips:</h3>
                <ul>
                    <li>Always rinse glass containers to remove food residue</li>
                    <li>No need to remove labels - they burn off during recycling</li>
                    <li>Keep different colored glass separate if your program requires it</li>
                    <li>Don't include non-container glass like lightbulbs or mirrors</li>
                </ul>
            </section>
            
            <!-- Metal Info Section -->
            <section class="info-box" id="metal-info">
                <h2><i class="fas fa-industry" style="color: #F44336;"></i> Metal Recycling</h2>
                <p>Metals are valuable recyclable materials that can be recycled indefinitely without degrading their properties. Recycling metal saves significant energy compared to mining and refining new metal.</p>
                
                <div class="recycling-types">
                    <div class="recycling-type">
                        <h3>Aluminum Cans</h3>
                        <p>Recyclable: ✓ Highly recyclable and valuable</p>
                        <p>Tips: Rinse and crush to save space</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Steel Food Cans</h3>
                        <p>Recyclable: ✓ Widely accepted</p>
                        <p>Tips: Rinse thoroughly, labels can stay on</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Aluminum Foil & Trays</h3>
                        <p>Recyclable: ✓ Recyclable if clean</p>
                        <p>Tips: Make sure it's clean and balled up</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Scrap Metal</h3>
                        <p>Recyclable: ✓ Valuable for recycling</p>
                        <p>Tips: Take to specialized centers or scrap yards</p>
                    </div>
                </div>
                
                <h3>Metal Recycling Tips:</h3>
                <ul>
                    <li>Use a magnet to distinguish between ferrous (magnetic) and non-ferrous metals</li>
                    <li>Large metal items should be taken to specialized recycling centers</li>
                    <li>Check if aerosol cans need to be empty before recycling</li>
                    <li>Metal bottle caps can often be recycled with other metal items</li>
                </ul>
            </section>
            
            <!-- Electronics Info Section -->
            <section class="info-box" id="electronics-info">
                <h2><i class="fas fa-laptop" style="color: #4CAF50;"></i> Electronics Recycling</h2>
                <p>Electronic waste (e-waste) contains valuable materials as well as hazardous components. Proper recycling prevents toxic elements from harming the environment while recovering useful materials.</p>
                
                <div class="recycling-types">
                    <div class="recycling-type">
                        <h3>Computers & Laptops</h3>
                        <p>Recyclable: ✓ Through specialized e-waste recycling</p>
                        <p>Tips: Wipe data before recycling</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Mobile Phones</h3>
                        <p>Recyclable: ✓ High value for recycling</p>
                        <p>Tips: Many retailers offer take-back programs</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Batteries</h3>
                        <p>Recyclable: ✓ Must be recycled properly</p>
                        <p>Tips: Never throw in regular trash; use specialized collection points</p>
                    </div>
                    
                    <div class="recycling-type">
                        <h3>Large Appliances</h3>
                        <p>Recyclable: ✓ Through specific programs</p>
                        <p>Tips: Retailers often provide recycling when delivering new appliances</p>
                    </div>
                </div>
                
                <h3>E-Waste Recycling Tips:</h3>
                <ul>
                    <li>Never dispose of electronics in regular trash</li>
                    <li>Look for electronics recycling events in your community</li>
                    <li>Some manufacturers and retailers offer take-back programs</li>
                    <li>Consider donating working electronics to extend their useful life</li>
                    <li>Be sure to erase personal data before recycling or donating</li>
                </ul>
            </section>
        </main>
    </div>
    
    <div id="chat-container">
        <div id="chat-header">
            <i class="fas fa-recycle"></i>
            <h1>Recycle Mate</h1>
        </div>
        <div id="message-area">
            </div>
        <div id="eco-tip">
            <i class="fas fa-leaf"></i>
            <span id="tip-text">Tip: Rinse containers before recycling to reduce contamination.</span>
        </div>
        <div class="input-area">
            <input type="text" id="user-input" placeholder="Ask about recycling..." autocomplete="off">
            <button id="send-button">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>

    <!-- Chatbot Toggle Button -->
    <button class="chatbot-toggle" id="chatbot-toggle">
        <i class="fas fa-comments"></i>
    </button>
    <script> src="home.js"></script>
</body>
</html>