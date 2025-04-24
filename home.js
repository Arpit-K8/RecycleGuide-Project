// Toggle Chatbot Visibility
document.getElementById('chatbot-toggle').addEventListener('click', function() {
    const chatContainer = document.getElementById('chat-container');
    if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
        chatContainer.style.display = 'flex';
        chatContainer.style.flexDirection = 'column';
    } else {
        chatContainer.style.display = 'none';
    }
});

document.getElementById('show-chatbot').addEventListener('click', function(e) {
    e.preventDefault();
    const chatContainer = document.getElementById('chat-container');
    chatContainer.style.display = 'flex';
    chatContainer.style.flexDirection = 'column';
});

// Handle category selection
const categories = document.querySelectorAll('.recycling-category');
const infoBoxes = document.querySelectorAll('.info-box');

categories.forEach(category => {
    category.addEventListener('click', function() {
        // Get the target info box id
        const targetId = this.getAttribute('data-target');
        
        // Remove active class from all categories and add to clicked one
        categories.forEach(cat => cat.classList.remove('active'));
        this.classList.add('active');
        
        // Hide all info boxes
        infoBoxes.forEach(box => box.classList.remove('active'));
        
        // Show the targeted info box
        document.getElementById(targetId).classList.add('active');
        
        // Smooth scroll to the info section on mobile
        if (window.innerWidth < 1024) {
            document.getElementById(targetId).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});



        // script.js
        const chatMessages = document.getElementById("message-area");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");
    const ecoTip = document.getElementById("tip-text");

    // Array of eco tips to display randomly
    const ecoTips = [
        "Rinse containers before recycling to reduce contamination.",
        "Remove caps from plastic bottles before recycling.",
        "Flatten cardboard boxes to save space in recycling bins.",
        "Paper with food stains (like pizza boxes) can't be recycled.",
        "Look for the recycling symbol and number on plastic items.",
        "Glass is 100% recyclable and can be recycled endlessly.",
        "Batteries should be taken to special recycling points.",
        "Plastic bags can't go in regular recycling - return to grocery stores.",
        "Consider composting food waste to reduce landfill use.",
        "Buy products made from recycled materials to close the loop."
    ];

    // Function to show a random eco tip
    function showRandomTip() {
        const randomIndex = Math.floor(Math.random() * ecoTips.length);
        ecoTip.textContent = ecoTips[randomIndex];
    }

    // Show initial random tip
    showRandomTip();
    
    // Change tip every 15 seconds
    setInterval(showRandomTip, 15000);

    // Function to get current time for message timestamps
    function getCurrentTime() {
        const now = new Date();
        return now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }

    // Display the initial bot greeting message when the script loads
    document.addEventListener('DOMContentLoaded', () => {
        const currentTime = getCurrentTime();
        const initialMessage = `
            <div class="bot-greeting">
                <strong>Recyclo:</strong> Hello! I'm your recycling assistant. Ask me anything about recycling, waste reduction, or environmental practices.
                <div class="message-time">${currentTime}</div>
            </div>
        `;
        displayMessage(initialMessage, "bot");
    });

    // Function to show typing indicator
    function showTypingIndicator() {
        const typingIndicator = document.createElement("div");
        typingIndicator.id = "typing-indicator";
        typingIndicator.classList.add("bot-message");
        typingIndicator.style.background = "#E8F5E9";
        typingIndicator.style.color = "#2E7D32";
        typingIndicator.innerHTML = `
            <div class="typing-indicator">
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
            </div>
        `;
        chatMessages.appendChild(typingIndicator);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        return typingIndicator;
    }

    // Function to remove typing indicator
    function removeTypingIndicator() {
        const indicator = document.getElementById("typing-indicator");
        if (indicator) {
            indicator.remove();
        }
    }

    // Function to send a message to the Gemini Flash API and handle the response
    async function sendMessageToGeminiAPI(message) {
        const apiKey = ""; // Replace with your actual API key
        const geminiUrl = ""; // url
        const requestBody = {
            contents: [
                {
                    parts: [
                        { text: `You are Recycle Buddy, a helpful and knowledgeable recycling assistant. 
                        Please provide accurate, concise information about recycling, waste management, 
                        and environmental sustainability. Keep answers focused on recycling topics. 
                        If asked something unrelated to recycling or environmentalism, politely redirect 
                        the conversation back to recycling topics. User query: ${message}` }
                    ]
                }
            ]
        };

        try {
            const response = await fetch(`${geminiUrl}?key=${apiKey}`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(requestBody)
            });

            if (!response.ok) {
                const errorData = await response.json();
                console.error("API Error:", errorData);
                throw new Error(`API Error: ${response.status} - ${errorData?.error?.message || response.statusText}`);
            }

            const data = await response.json();
            console.log("API Response:", data); // Debugging step

            // Check if the response structure is valid
            const botResponse = data?.candidates?.[0]?.content?.parts?.map(part => part.text).join(" ") || "No response received.";

            // Enhanced formatting:
            let formattedResponse = botResponse
                .split('\n\n')
                .map(paragraph => `<p>${paragraph}</p>`)
                .join('');

            // Basic bolding
            formattedResponse = formattedResponse.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

            // Basic italicizing
            formattedResponse = formattedResponse.replace(/\*(.*?)\*/g, '<em>$1</em>');

            // Basic list handling (for unordered lists)
            if (formattedResponse.match(/^-\s(.*?)$/gm)) {
                const listItems = formattedResponse.match(/^-\s(.*?)$/gm).map(item => `<li>${item.substring(2)}</li>`).join('');
                formattedResponse = formattedResponse.replace(/^-\s(.*?)$/gm, '');
                formattedResponse += `<ul>${listItems}</ul>`;
            }

            // Basic ordered list handling
            if (formattedResponse.match(/^(\d+)\.\s(.*?)$/gm)) {
                const listItems = formattedResponse.match(/^(\d+)\.\s(.*?)$/gm).map(item => `<li>${item.substring(item.indexOf('.') + 2)}</li>`).join('');
                formattedResponse = formattedResponse.replace(/^(\d+)\.\s(.*?)$/gm, '');
                formattedResponse += `<ol>${listItems}</ol>`;
            }

            // Basic link handling:
            const linkedResponse = formattedResponse.replace(/(https?:\/\/[^\s]+)/g, '<a href="$1" target="_blank">$1</a>');

            const currentTime = getCurrentTime();
            return `<div class="bot-message-content">
                        <strong>Recyclo:</strong> ${linkedResponse}
                        <div class="message-time">${currentTime}</div>
                     </div>`;

        } catch (error) {
            console.error("Error communicating with Gemini API:", error);
            const currentTime = getCurrentTime();
            return `<div class="bot-error">
                        Sorry, I encountered an issue while processing your request. Please try again later.
                        <div class="message-time">${currentTime}</div>
                     </div>`;
        }
    }

    // Function to display a message in the chat window
    function displayMessage(messageHTML, sender = "user") {
        const messageElement = document.createElement("div");
        messageElement.classList.add(sender === "user" ? "user-message" : "bot-message");
        messageElement.innerHTML = messageHTML;
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Function to handle user input and send it to the API
    async function handleUserInput() {
        const message = userInput.value.trim();

        if (message === "") return; // Ignore empty input

        // Display user message with timestamp
        const currentTime = getCurrentTime();
        displayMessage(`<div class="user-message-content">${message}</div><div class="message-time">${currentTime}</div>`, "user");
        
        userInput.value = ""; // Clear input field
        
        // Show typing indicator
        const typingIndicator = showTypingIndicator();
        
        // Add slight delay to simulate typing
        setTimeout(async () => {
            // Remove typing indicator
            removeTypingIndicator();
            
            // Fetch and display bot response
            const botResponseHTML = await sendMessageToGeminiAPI(message);
            displayMessage(botResponseHTML, "bot");
            
            // Show a new random tip
            showRandomTip();
        }, 1000 + Math.random() * 1000); // Random delay between 1-2 seconds
    }

    // Add event listeners to handle sending messages
    sendButton.addEventListener("click", handleUserInput);

    // Enable sending messages with the 'Enter' key
    userInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") {
            handleUserInput();
        }
    });

    // Focus input field on page load
    window.onload = function() {
        userInput.focus();
    };