

        // Select essential elements from the DOM
        let sound = document.querySelector("#soundEffect");   // Audio element for spin sound
        let ding = document.querySelector("#soundEffect2");   // Audio element for spin sound
        let wheel = document.querySelector(".prize-turntable"); // The spinning wheel element
        let prize = document.querySelector("#prize"); // The element for displying the prize element
        let spin = document.querySelector("#prizePlay");      // The spin button
        let modal = document.querySelector(".modal-container"); // Modal container to display results
        let win_prize = document.querySelector("#win_prize"); // The element for
        let fmodal = document.querySelector(".fc"); // Modal container to display failed spin
        let currentRotation = 0;  // Variable to track current rotation
        let deg = 0;              // Total degree of rotation

        // Possible outcomes (prizes) on the wheel.
        const segments = [
            "Spin", "1btc", "1eth", "5usdt",
            "1usdt", "100xrp", "0.5 usdt", "0.2usdt"
        ];

        // Event listener for spin button click
        spin.onclick = function () {

            // Generate a random number of spins (between 9 and 15 full rotations)
            let spins = Math.floor(Math.random() * 7) + 9;

            // Determine the random wheel angle in increments of 45 degrees (8 segments)
            let wheelAngle = Math.floor(Math.random() * 8) * 45;

            // Generate a random sector adjustment within ±14 degrees to avoid predictable results
            let sectorAngle = Math.floor(Math.random() * 14) + 1;
            sectorAngle *= Math.random() < 0.5 ? -1 : 1;  // Randomly choose positive or negative

            // Calculate the final rotation value
            deg += 360 * spins + wheelAngle + sectorAngle;

            // Apply the rotation to the wheel
            wheel.style.transform = "rotate(" + deg + "deg)";

            // Reset the sector angle after a short delay to prevent cumulative errors
            setTimeout(() => {
                deg -= sectorAngle;
            }, 100);

            // Determine which prize segment the wheel landed on
            let index = Math.floor((deg - sectorAngle) / 45) % 8;

            // Play the spin sound effect
            sound.play();

            // Stop sound and show results after 4 seconds (assumed duration of spin animation)
            setTimeout(() => {
                sound.pause();
                // Pause the sound
                sound.currentTime = 0;  // Reset audio playback to the beginning

                // Log the winning prize to the console

                ding.play();// Play the spin sound effect

                if(segments[index] === "Spin"){
setTimeout(() => {
                fmodal.style.display = "flex";
                }, 1500);
                }else {
                    prize.innerHTML = "Congratulations! You've won an " + segments[index] + "! Sign up now to claim your prize.";
                    win_prize.value = segments[index];
setTimeout(() => {
                modal.style.display = "flex";
                }, 1500);
                }
                
                
               
            }, 4000);
        }




        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("atv");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });

        }


        // Select ID for mobile menu
        let menu = document.querySelector("#menu-mobile");
        let MenuKey = document.querySelector("#ToggleKey");//listerner
        
               MenuKey.addEventListener("click", function(event) {
            event.preventDefault();  // Prevent the default link action
            menu.classList.toggle("menu-shown");  // Display an alert when clicked
            MenuKey.classList.toggle("navbar-active");
            // You can also update the page content or redirect if needed
        });

