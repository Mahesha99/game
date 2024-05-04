// JavaScript Document

        var quest = "";
        var solution = -1;
        var score = 0;
        var downloadTimer;


        let newgame = function(x) {
			var newscore=0;
            clearInterval(downloadTimer);
            startup();
            score += 10;
            document.getElementById("score").innerHTML = score;
			newscore=score;
			document.getElementById("myInput").value = newscore;
        }
		
		function checkSolution(buttonValue) {
    
    if (buttonValue == solution) {
      alert("Correct!");
		newgame();
    } else {
      alert("Incorrect!");
    }
  }

        let startQuest = function(data) {
            var parsed = JSON.parse(data);
            quest = parsed.question;
            solution = parsed.solution;
            let img = document.getElementById("quest");
            img.src = quest;
            downloadTimer();
			

        }

        let fetchText = async function() {
			
            let response = await fetch('https://marcconrad.com/uob/tomato/api.php');
            let data = await response.text();
            startQuest(data);
			
        }

        let startup = function() {
            fetchText();
            timerStarter();
        }

        let timerStarter = function() {
          
            var timeleft = 20;
			
            downloadTimer = setInterval(function() {
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("countdown").innerHTML = "Finished";
                    startup();
                } else {
                    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
                }
                timeleft -= 1;
            }, 1000);

        }
