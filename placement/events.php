<?php include("header.php"); ?>

<div class="wrap">
    <div class="event-container">
        <!-- Event cards will be dynamically added here -->
        <div class="event-card">
            <img src="./images/events/1.Mukesh Deshpande.png" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>
        
        <div class="event-card">
            <img src="./images/events/2.Ajay Srinivasan.jpeg" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card">
            <img src="./images/events/3.Manish Gupta.png" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card">
            <img src="./images/events/4.Mani C.png" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>
        
        <div class="event-card">
            <img src="./images/events/6.A Kalyansundaram and Sanakaravel S.jpeg" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card">
            <img src="./images/events/8.Vivek Gupta.jpeg" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card">
            <img src="./images/events/jasmine maheshwari.jpg" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card">
            <img src="./images/events/Flyer_Tech talk_Broadcom-1.png" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card-1">
            <img src="./images/events/7.Adarsh Srivastava.png" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        <div class="event-card-1">
            <img src="./images/events/join event.png" alt="Event 1" style="width: 100%; height: auto;">
            <!-- <div class="event-details">
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
            </div> -->
        </div>

        
        <!-- Add more event cards as needed -->
    </div>

    <div class="overlay" id="overlay">
        <div class="expanded-card" id="expandedCard">
            <div class="collage">
                <!-- Photos in the form of a collage for the expanded card -->
                <img src="event1.jpg" alt="Event 1">
                <!-- Add more images for the collage as needed -->
            </div>
            <div class="expanded-details">
                <!-- Content from the small event card -->
                <p>Speaker 1</p>
                <p>Date 1</p>
                <p>Topic 1</p>
                <!-- Additional description for the event -->
                <p>Description for Event 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et tortor sed ligula fermentum luctus.</p>
            </div>
            <button class="close-btn" onclick="closeCard()">Close</button>
        </div>
    </div>

</div>

<?php include("footer.php"); ?>